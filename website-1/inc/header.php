<?php
/**
 * Page header. Before including, set:
 *   $page = ['title' => ..., 'desc' => ..., 'path' => '/about', 'nav' => 'about', 'schema' => [...optional JSON-LD arrays]];
 */
global $SERVICES, $SERVICE_GROUPS;
$page += ['title' => SITE_NAME, 'desc' => '', 'path' => '/', 'nav' => '', 'schema' => [], 'noindex' => false];
$canonical = SITE_URL . $page['path'];

$org = [
  '@context' => 'https://schema.org', '@type' => 'LegalService', '@id' => SITE_URL . '/#firm',
  'name' => SITE_NAME, 'url' => SITE_URL . '/', 'telephone' => PHONE, 'email' => EMAIL,
  'image' => SITE_URL . '/assets/img/founder.jpg', 'logo' => SITE_URL . '/assets/img/logo.avif',
  'priceRange' => '₹₹',
  'address' => ['@type' => 'PostalAddress', 'streetAddress' => '1st Floor, 105/51, Armenian Street, George Town',
                'addressLocality' => 'Chennai', 'addressRegion' => 'Tamil Nadu', 'postalCode' => '600001', 'addressCountry' => 'IN'],
  'geo' => ['@type' => 'GeoCoordinates', 'latitude' => 13.0900751, 'longitude' => 80.2881926],
  'areaServed' => ['Chennai', 'Tamil Nadu', 'India'],
  'founder' => ['@type' => 'Person', 'name' => 'Abirami Radhakrishnan', 'jobTitle' => 'Founder & Principal Advocate'],
  'sameAs' => [MAPS_URL],
];
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($page['title']) ?></title>
<meta name="description" content="<?= e($page['desc']) ?>">
<?php if (!IS_LIVE || $page['noindex']): ?><meta name="robots" content="noindex, nofollow">
<?php endif; ?>
<link rel="canonical" href="<?= e($canonical) ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= SITE_NAME ?>">
<meta property="og:title" content="<?= e($page['title']) ?>">
<meta property="og:description" content="<?= e($page['desc']) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta property="og:image" content="<?= SITE_URL ?>/assets/img/founder.jpg">
<meta name="theme-color" content="#000000">
<link rel="icon" href="/assets/img/favicon.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/site.css?v=<?= filemtime(__DIR__ . '/../assets/css/site.css') ?>">
<?php if (isset($_GET['light'])): /* colour preview only, e.g. /?light=1 */ ?>
<link rel="stylesheet" href="/assets/css/light-preview.css?v=<?= filemtime(__DIR__ . '/../assets/css/light-preview.css') ?>">
<?php endif; ?>
<?php if (IS_LIVE): ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= GA4_ID ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?= GA4_ID ?>');
  gtag('config', '<?= ADS_ID ?>');
</script>
<?php endif; ?>
<script type="application/ld+json"><?= json_encode($org, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php foreach ($page["schema"] as $ldItem): ?>
<script type="application/ld+json"><?= json_encode($ldItem, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php endforeach; ?>
</head>
<body>

<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
  <symbol id="i-phone" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></symbol>
  <symbol id="i-wa" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.8-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.1-1.3-.5-2.4-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6l.4-.5c.2-.2.2-.3.3-.5.1-.2 0-.4 0-.5l-.9-2.2c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.1.2 2.1 3.2 5.1 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2-1.4.2-.7.2-1.3.2-1.4-.1-.2-.3-.3-.6-.4zM12 21.8c-1.8 0-3.5-.5-5-1.4l-.4-.2-3.7 1 1-3.6-.2-.4A9.8 9.8 0 1 1 12 21.8zm8.4-18.2A11.8 11.8 0 0 0 1.7 17.8L0 24l6.3-1.7A11.8 11.8 0 0 0 24 12a11.7 11.7 0 0 0-3.6-8.4z"/></symbol>
  <symbol id="i-scale" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18M5 7h14M5 7l-3 7a4 4 0 0 0 6 0L5 7zm14 0l-3 7a4 4 0 0 0 6 0l-3-7zM8 21h8"/></symbol>
  <symbol id="i-home" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 10l9-7 9 7v10a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/></symbol>
  <symbol id="i-doc-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM14 2v6h6M9 15l2 2 4-4"/></symbol>
  <symbol id="i-register" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4zM8 9h8M8 13h8M8 17h4"/></symbol>
  <symbol id="i-globe" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></symbol>
  <symbol id="i-family" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.9M16 3.1a4 4 0 0 1 0 7.8"/></symbol>
  <symbol id="i-tree" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-7M12 15l-4-4M12 15l4-4M6 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zM18 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zM12 8a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></symbol>
  <symbol id="i-will" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM14 2v6h6M8 17c1.5-2 2.5-2 3 0s1.5 2 3 0M8 12h8"/></symbol>
  <symbol id="i-court" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V10M9 21V10M15 21V10M19 21V10M2 10l10-6 10 6z"/></symbol>
  <symbol id="i-shield" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6z"/></symbol>
  <symbol id="i-bag" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2h12l2 6H4zM4 8v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8M9 13h6"/></symbol>
  <symbol id="i-wallet" viewBox="0 0 24 24"><path d="M2 7h20v12H2zM16 13h.01M2 11h20"/></symbol>
  <symbol id="i-key" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="7.5" cy="15.5" r="4.5"/><path d="M10.7 12.3L21 2M17 6l3 3M15 8l2 2"/></symbol>
  <symbol id="i-briefcase" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 7h20v13H2zM16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2M2 13h20"/></symbol>
  <symbol id="i-handshake" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 17l2 2a1 1 0 0 0 1.4 0l5.6-5.6a2 2 0 0 0 0-2.8L15 5.6l-3 3-1.5-1.5L14 3.6M3 11l5.6-5.6a2 2 0 0 1 2.8 0M3 11l7 7M3 11l-1 1M21 11l1 1"/></symbol>
  <symbol id="i-percent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 5L5 19M6.5 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM17.5 20a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/></symbol>
  <symbol id="i-mail" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zM22 6l-10 7L2 6"/></symbol>
  <symbol id="i-pin" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0zM12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></symbol>
  <symbol id="i-clock" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></symbol>
  <symbol id="i-video" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5zM1 5h15v14H1z"/></symbol>
  <symbol id="i-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></symbol>
  <symbol id="i-user" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/></symbol>
  <symbol id="i-route" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="19" r="3"/><circle cx="18" cy="5" r="3"/><path d="M9 19h8.5a3.5 3.5 0 0 0 0-7h-11a3.5 3.5 0 0 1 0-7H15"/></symbol>
  <symbol id="i-receipt" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 2v20l3-2 3 2 3-2 3 2 3-2 1 .7V2l-1 .7L16 1l-3 2-3-2-3 2zM8 8h8M8 12h8M8 16h5"/></symbol>
  <symbol id="i-zap" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9z"/></symbol>
  <symbol id="i-chat" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></symbol>
  <symbol id="i-lock" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></symbol>
  <symbol id="i-star" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1z"/></symbol>
  </defs>
</svg>

<a class="skip" href="#main">Skip to content</a>

<div class="topbar">
  <div class="wrap">
    <div class="kw"><?= icon('pin') ?> George Town, Chennai · <?= ADDRESS_NOTE ?></div>
    <div class="tb-links">
      <a href="mailto:<?= EMAIL ?>" class="tb-mail"><?= icon('mail') ?><?= EMAIL ?></a>
      <a href="tel:<?= PHONE ?>"><?= icon('phone') ?><?= PHONE_SHOW ?></a>
    </div>
  </div>
</div>

<header class="nav">
  <div class="wrap">
    <a href="/" class="logo"><img src="/assets/img/logo.avif" alt="<?= SITE_NAME ?>" width="140" height="52"></a>
    <nav aria-label="Main">
      <ul id="menu">
        <li><a href="/"<?= $page['nav'] === 'home' ? ' aria-current="page"' : '' ?>>Home</a></li>
        <li><a href="/about"<?= $page['nav'] === 'about' ? ' aria-current="page"' : '' ?>>About</a></li>
        <li class="has-mega">
          <a href="/practice-areas/"<?= $page['nav'] === 'services' ? ' aria-current="page"' : '' ?>>Practice Areas</a>
          <button class="sub-toggle" aria-label="Show practice areas" aria-expanded="false"><?= icon('chev') ?></button>
          <div class="mega">
            <?php foreach ($SERVICE_GROUPS as $mG): ?>
            <div>
              <h5><?= e($mG) ?></h5>
              <?php foreach ($SERVICES as $mSlug => $mS): if ($mS["group"] !== $mG) continue; ?>
              <a href="/practice-areas/<?= $mSlug ?>"><?= e($mS["title"]) ?></a>
              <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
          </div>
        </li>
        <li><a href="/practice-areas/nri-legal-services"<?= $page['nav'] === 'nri' ? ' aria-current="page"' : '' ?>>NRI Services</a></li>
        <li><a href="/insights/"<?= $page['nav'] === 'insights' ? ' aria-current="page"' : '' ?>>Insights</a></li>
        <li><a href="/contact"<?= $page['nav'] === 'contact' ? ' aria-current="page"' : '' ?>>Contact</a></li>
      </ul>
    </nav>
    <a href="tel:<?= PHONE ?>" class="btn btn-gold call-btn"><?= icon('phone') ?>Call Now</a>
    <button class="burger" aria-label="Menu" aria-expanded="false" aria-controls="menu">
      <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
    </button>
  </div>
</header>

<main id="main">
