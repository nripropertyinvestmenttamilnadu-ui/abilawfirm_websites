<?php
/**
 * Enquiry handler for civil.abilawfirm.in
 * - Validates name / mobile / matter
 * - Saves every lead to a CSV file OUTSIDE public_html (never lost, not web-accessible)
 * - Emails the lead to LEAD_EMAIL
 * Returns JSON: {status, message, errors}
 */

// ===== CONFIG =====
const CRM_API    = 'https://akngroups.in/api/add_lead_api.php';
const CRM_SOURCE = 'Google Ads';
const CRM_AD     = 'General';
const LEAD_EMAIL = '';            // optional: email address to also receive leads (leave '' to skip)
const SOURCE     = 'civil.abilawfirm.in';
// ==================

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
    exit;
}

// Honeypot: bots fill this hidden field, humans don't
if (!empty($_POST['website'])) {
    echo json_encode(['status' => 'success']);
    exit;
}

$name   = trim(strip_tags($_POST['name']   ?? ''));
$mobile = preg_replace('/[^0-9+]/', '', $_POST['mobile'] ?? '');
$matter = trim(strip_tags($_POST['matter'] ?? 'Other Services'));

$errors = [];
if (mb_strlen($name) < 2 || mb_strlen($name) > 80) {
    $errors['name'] = 'Please enter your name.';
}
$digits = preg_replace('/\D/', '', $mobile);
if (strlen($digits) < 10 || strlen($digits) > 13) {
    $errors['mobile'] = 'Please enter a valid phone number.';
}
if ($errors) {
    echo json_encode(['status' => 'error', 'message' => 'Please correct the highlighted fields.', 'errors' => $errors]);
    exit;
}
$matter = mb_substr($matter, 0, 80);

date_default_timezone_set('Asia/Kolkata');
$time = date('Y-m-d H:i:s');
$ip   = $_SERVER['REMOTE_ADDR'] ?? '';
$ref  = $_SERVER['HTTP_REFERER'] ?? '';

// 1) Save to CSV outside public_html (~/civil-leads/leads.csv)
$home = getenv('HOME') ?: dirname(__DIR__, 5);
$dir  = rtrim($home, '/') . '/civil-leads';
if (!is_dir($dir)) { @mkdir($dir, 0750, true); }
$fh = @fopen($dir . '/leads.csv', 'a');
if ($fh) {
    if (flock($fh, LOCK_EX)) {
        // prefix cells starting with = + - @ to stop spreadsheet formula injection
        $safe = array_map(fn($v) => preg_match('/^[=+\-@]/', $v) ? "'" . $v : $v, [$time, $name, $mobile, $matter, $ip, $ref]);
        fputcsv($fh, $safe);
        flock($fh, LOCK_UN);
    }
    fclose($fh);
}

// 2) Push to CRM API
$payload = json_encode([
    'lead_date' => $time,
    'name'      => $name,
    'mobile'    => $digits,
    'city'      => '',
    'status'    => 'Unknown',
    'source'    => CRM_SOURCE,
    'ad_name'   => CRM_AD,
]);
$ch = curl_init(CRM_API);
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $payload,
    CURLOPT_HTTPHEADER     => ['Content-Type: application/json', 'Accept: application/json'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT        => 10,
]);
$apiResp = curl_exec($ch);
$apiCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$apiErr  = curl_error($ch);
curl_close($ch);
if ($apiCode < 200 || $apiCode >= 300) {
    // keep a log so failed pushes can be re-entered manually (lead is already in leads.csv)
    @file_put_contents($dir . '/api-errors.log',
        "$time | $name | $digits | HTTP $apiCode | $apiErr | " . substr((string)$apiResp, 0, 300) . "\n", FILE_APPEND);
}

// 3) Email the lead (optional)
if (!LEAD_EMAIL) {
    echo json_encode(['status' => 'success', 'message' => 'Thank you! We will contact you shortly.']);
    exit;
}
$host    = preg_replace('/[^a-z0-9.\-]/i', '', $_SERVER['HTTP_HOST'] ?? SOURCE);
$subject = "New enquiry: $matter - $name";
$body    = "New consultation request from " . SOURCE . "\n\n"
         . "Name:    $name\n"
         . "Phone:   $mobile\n"
         . "Service: $matter\n"
         . "Time:    $time\n"
         . "Page:    $ref\n";
$headers = "From: ABI Law Firm Website <noreply@$host>\r\n"
         . "Content-Type: text/plain; charset=UTF-8\r\n";
@mail(LEAD_EMAIL, $subject, $body, $headers);

echo json_encode(['status' => 'success', 'message' => 'Thank you! We will contact you shortly.']);
