<?php
/**
 * Site-wide settings. Change contact details here and they update everywhere.
 *
 * STAGING vs LIVE is detected automatically from the domain:
 *  - on *.hostingersite.com (temporary domain): hidden from Google (noindex),
 *    no analytics, and test enquiries are NOT pushed to the CRM.
 *  - on abilawfirm.in: indexed, analytics on, enquiries go to the CRM.
 */

const SITE_NAME   = 'ABI LAW FIRM';
const SITE_URL    = 'https://www.abilawfirm.in';   // canonical (live) address
const PHONE       = '+918124035811';
const PHONE_SHOW  = '+91 81240 35811';
const WA_NUMBER   = '918124035811';
const EMAIL       = 'abirami@abilawfirm.in';
const ADDRESS     = '1st Floor, Rahman Manzil, 105/51, Armenian Street, Parry\'s Corner, George Town, Chennai, Tamil Nadu 600001';
const ADDRESS_NOTE = 'Opposite the Madras High Court';
const MAPS_URL    = 'https://www.google.com/maps/place/ABI+LAW+FIRM/@13.0900751,80.2881926,17z/data=!4m8!3m7!1s0x3a526fe1bc99557b:0x46a35dfeb8a88512!8m2!3d13.0900751!4d80.2881926!9m1!1b1!16s%2Fg%2F11x2pz146v';
const GOOGLE_RATING = '4.5';
const GOOGLE_REVIEWS = 18;

// Analytics (only loaded on the live domain)
const GA4_ID        = 'G-XH87TS7VQ3';                      // existing abilawfirm.in GA4 property
const ADS_ID        = 'AW-16746237443';
const CONV_CALL     = 'AW-16746237443/b893CNj32bcdEIOcnbE-';
const CONV_WHATSAPP = 'AW-16746237443/ZNc9CNmb4LcdEIOcnbE-';

$host = strtolower($_SERVER['HTTP_HOST'] ?? '');
define('IS_LIVE', (bool) preg_match('/(^|\.)abilawfirm\.in$/', $host));

if (!IS_LIVE && !headers_sent()) {
    header('X-Robots-Tag: noindex, nofollow');
}

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

function wa_link($text = 'Hello Abi Law Firm, I would like to schedule a consultation regarding a legal matter.') {
    return 'https://api.whatsapp.com/send?phone=' . WA_NUMBER . '&text=' . rawurlencode($text);
}
