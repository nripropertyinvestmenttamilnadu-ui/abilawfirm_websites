<?php
/**
 * Enquiry handler for abilawfirm.in (main website)
 * - Validates name / mobile / matter (+ optional message)
 * - Saves every lead to a CSV file OUTSIDE public_html (never lost, not web-accessible)
 * - Pushes the lead to the CRM (LIVE domain only; skipped on the temporary domain)
 * - Optionally emails the lead to LEAD_EMAIL
 * Returns JSON: {status, message, errors}
 */
require_once __DIR__ . '/../inc/config.php';

// ===== CONFIG =====
const CRM_API    = 'https://akngroups.in/api/add_lead_api.php';
const CRM_SOURCE = 'Website';
const LEAD_EMAIL = '';            // optional: email address to also receive leads (leave '' to skip)
const LEAD_DIR   = 'website-leads';
// ==================

header('Content-Type: application/json; charset=utf-8');
header('X-Robots-Tag: noindex');

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

$name    = trim(strip_tags($_POST['name']    ?? ''));
$mobile  = preg_replace('/[^0-9+]/', '', $_POST['mobile'] ?? '');
$matter  = trim(strip_tags($_POST['matter']  ?? 'Other Services'));
$message = trim(strip_tags($_POST['message'] ?? ''));
$pageUrl = substr(preg_replace('/[^a-z0-9\/\-_.]/i', '', $_POST['page'] ?? ''), 0, 120);

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
$matter  = mb_substr($matter, 0, 80);
$message = mb_substr(preg_replace('/\s+/', ' ', $message), 0, 1000);

date_default_timezone_set('Asia/Kolkata');
$time = date('Y-m-d H:i:s');
$ip   = $_SERVER['REMOTE_ADDR'] ?? '';
$env  = IS_LIVE ? 'live' : 'TEST';

// 1) Save to CSV outside public_html (~/website-leads/leads.csv)
$home = getenv('HOME') ?: dirname(__DIR__, 4);
$dir  = rtrim($home, '/') . '/' . LEAD_DIR;
if (!is_dir($dir)) { @mkdir($dir, 0750, true); }
$fh = @fopen($dir . '/leads.csv', 'a');
if ($fh) {
    if (flock($fh, LOCK_EX)) {
        // prefix cells starting with = + - @ to stop spreadsheet formula injection
        $safe = array_map(fn($v) => preg_match('/^[=+\-@]/', $v) ? "'" . $v : $v,
            [$time, $name, $mobile, $matter, $message, $pageUrl, $ip, $env]);
        fputcsv($fh, $safe);
        flock($fh, LOCK_UN);
    }
    fclose($fh);
}

// 2) Push to CRM API (live domain only, so testing never creates fake leads)
if (IS_LIVE) {
    $payload = json_encode([
        'lead_date' => $time,
        'name'      => $name,
        'mobile'    => $digits,
        'city'      => '',
        'status'    => 'Unknown',
        'source'    => CRM_SOURCE,
        'ad_name'   => $matter,
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
}

// 3) Email the lead (optional)
if (LEAD_EMAIL) {
    $host    = preg_replace('/[^a-z0-9.\-]/i', '', $_SERVER['HTTP_HOST'] ?? 'abilawfirm.in');
    $subject = ($env === 'TEST' ? '[TEST] ' : '') . "New enquiry: $matter - $name";
    $body    = "New consultation request from the website\n\n"
             . "Name:    $name\n"
             . "Phone:   $mobile\n"
             . "Service: $matter\n"
             . "Message: $message\n"
             . "Page:    $pageUrl\n"
             . "Time:    $time\n";
    $headers = "From: ABI Law Firm Website <noreply@$host>\r\n"
             . "Content-Type: text/plain; charset=UTF-8\r\n";
    @mail(LEAD_EMAIL, $subject, $body, $headers);
}

echo json_encode(['status' => 'success', 'message' => 'Thank you! We will contact you shortly.']);
