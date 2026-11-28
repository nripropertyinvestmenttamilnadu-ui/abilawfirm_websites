<?php
/**
 * Tamil Nadu NRI Legal Services: landing page settings.
 * Change contact details here and they update everywhere.
 *
 * STAGING vs LIVE is detected from the domain (see LIVE_HOSTS):
 *  - temporary domain: hidden from Google, no analytics, test enquiries NOT pushed to the CRM
 *  - live domain: indexed, analytics on, enquiries pushed to the CRM
 */

const BRAND       = 'Tamil Nadu NRI Legal Services';
const SITE_URL    = 'https://landing.tamilnadunrilegalservices.com';   // canonical: points to the ORIGINAL page on purpose (this copy runs at landing1.), so Google doesn't treat it as duplicate content
const LIVE_HOSTS  = ['tamilnadunrilegalservices.com'];             // add the real domain(s) here
const PHONE       = '+917397320417';
const PHONE_SHOW  = '+91 73973 20417';
const WA_NUMBER   = '917397320417';
const EMAIL       = 'tamilnadunrilegalservices@gmail.com';
const ADDRESS     = '1st Floor, 105/51, Armenian Street, George Town, Chennai, Tamil Nadu 600001';
const ADDRESS_NOTE = 'Opposite the Madras High Court';
const CONSULT_FEE = '₹5,000';

// Analytics (only loaded on the live domain). GA4_ID left empty: no GA4 tag was found on the old site.
const GA4_ID        = '';
const ADS_ID        = 'AW-16746237443';
const CONV_CALL     = 'AW-16746237443/Iih5COHks8AdEIOcnbE-';
const CONV_WHATSAPP = 'AW-16746237443/hQGiCOTks8AdEIOcnbE-';

$host = strtolower($_SERVER['HTTP_HOST'] ?? '');
$live = false;
foreach (LIVE_HOSTS as $h) { if ($host === $h || str_ends_with($host, '.' . $h)) $live = true; }
define('IS_LIVE', $live);
if (!IS_LIVE && !headers_sent()) header('X-Robots-Tag: noindex, nofollow');

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function wa_link($text = 'Hello Tamil Nadu NRI Legal Services, I live abroad and need help with a legal matter in Tamil Nadu.') {
    return 'https://api.whatsapp.com/send?phone=' . WA_NUMBER . '&text=' . rawurlencode($text);
}
function icon($name) { return '<svg aria-hidden="true"><use href="#i-' . e($name) . '"/></svg>'; }

$SERVICES = [
  'Property Verification & Due Diligence', 'Obtaining Property Documents', 'Property Dispute / Encroachment',
  'Misuse of Power of Attorney', 'Property Sale / Purchase', 'Tenant / Rental Problem', 'Legal Heir / Succession',
  'Partition / Family Property', 'Will / Estate Planning', 'Divorce / Family Matter', 'Tax / Repatriation', 'Other',
];
$COUNTRIES = ['USA', 'Canada', 'United Kingdom', 'Australia', 'New Zealand', 'Singapore', 'Malaysia', 'UAE',
  'Saudi Arabia', 'Qatar', 'Kuwait', 'Oman', 'Bahrain', 'Germany', 'Other Europe', 'India', 'Other'];
