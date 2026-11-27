<?php
require_once __DIR__ . '/config.php';

function lead_form($heading = 'Talk to an NRI Lawyer', $withPhoto = true) {
    global $SERVICES, $COUNTRIES;
    ob_start(); ?>
    <div class="form-card">
      <div class="form-head">
        <div><h3><?= e($heading) ?><p>We reply on WhatsApp or call you back.</p></h3></div>
        <?php if ($withPhoto): ?><img src="/assets/img/abilawfirm.png" alt="Advocate Abirami Radhakrishnan" width="150" height="150"><?php endif; ?>
      </div>
      <form class="lead-form" novalidate>
        <input type="text" name="website" tabindex="-1" autocomplete="off" class="hp" aria-hidden="true">
        <div class="field"><input type="text" name="name" placeholder="Name" autocomplete="name" required aria-label="Name"><div class="err"></div></div>
        <div class="field"><input type="tel" name="mobile" placeholder="WhatsApp Number (with country code)" autocomplete="tel" required aria-label="WhatsApp number"><div class="err"></div></div>
        <div class="field-row">
          <div class="field">
            <label class="float">Country</label>
            <select name="country" aria-label="Country you live in"><?php foreach ($COUNTRIES as $c): ?><option><?= e($c) ?></option><?php endforeach; ?></select>
          </div>
          <div class="field">
            <label class="float">Service</label>
            <select name="matter" aria-label="Service"><?php foreach ($SERVICES as $s): ?><option><?= e($s) ?></option><?php endforeach; ?></select>
          </div>
        </div>
        <button type="submit" class="btn btn-gold">Book Consultation</button>
        <p class="form-note">Your information is kept strictly confidential. <a href="/privacy-policy">Privacy Policy</a></p>
      </form>
    </div>
    <?php return ob_get_clean();
}

function page_header($title, $desc, $path, $noindex = false, $schema = []) {
    $canonical = SITE_URL . $path; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($desc) ?>">
<?php if (!IS_LIVE || $noindex): ?><meta name="robots" content="noindex, nofollow">
<?php endif; ?>
<link rel="canonical" href="<?= e($canonical) ?>">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($desc) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta property="og:image" content="<?= SITE_URL ?>/assets/img/founder.jpg">
<meta name="theme-color" content="#000000">
<link rel="icon" href="/assets/img/nri-logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/site.css?v=<?= filemtime(__DIR__ . '/../assets/css/site.css') ?>">
<link rel="stylesheet" href="/assets/css/nri.css?v=<?= filemtime(__DIR__ . '/../assets/css/nri.css') ?>">
<?php if (IS_LIVE): ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= GA4_ID ?: ADS_ID ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  <?php if (GA4_ID): ?>gtag('config', '<?= GA4_ID ?>');<?php endif; ?>
  gtag('config', '<?= ADS_ID ?>');
</script>
<?php endif; ?>
<?php foreach ($schema as $ld): ?>
<script type="application/ld+json"><?= json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php endforeach; ?>
</head>
<body>
<svg width="0" height="0" style="position:absolute" aria-hidden="true"><defs>
  <symbol id="i-phone" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></symbol>
  <symbol id="i-wa" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.8-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.1-1.3-.5-2.4-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6l.4-.5c.2-.2.2-.3.3-.5.1-.2 0-.4 0-.5l-.9-2.2c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.1.2 2.1 3.2 5.1 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2-1.4.2-.7.2-1.3.2-1.4-.1-.2-.3-.3-.6-.4zM12 21.8c-1.8 0-3.5-.5-5-1.4l-.4-.2-3.7 1 1-3.6-.2-.4A9.8 9.8 0 1 1 12 21.8zm8.4-18.2A11.8 11.8 0 0 0 1.7 17.8L0 24l6.3-1.7A11.8 11.8 0 0 0 24 12a11.7 11.7 0 0 0-3.6-8.4z"/></symbol>
  <?php $A = 'fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"';
  $paths = [
    'search' => '<circle cx="11" cy="11" r="8"/><path d="M21 21l-4.3-4.3"/>',
    'doc' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM14 2v6h6M8 13h8M8 17h5"/>',
    'home' => '<path d="M3 10l9-7 9 7v10a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/>',
    'alert' => '<path d="M10.3 3.9L1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0zM12 9v4M12 17h.01"/>',
    'key' => '<circle cx="7.5" cy="15.5" r="4.5"/><path d="M10.7 12.3L21 2M17 6l3 3M15 8l2 2"/>',
    'swap' => '<path d="M17 1l4 4-4 4M3 11V9a4 4 0 0 1 4-4h14M7 23l-4-4 4-4M21 13v2a4 4 0 0 1-4 4H3"/>',
    'tree' => '<path d="M12 22v-7M12 15l-4-4M12 15l4-4M6 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zM18 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zM12 8a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>',
    'scale' => '<path d="M12 3v18M5 7h14M5 7l-3 7a4 4 0 0 0 6 0L5 7zm14 0l-3 7a4 4 0 0 0 6 0l-3-7zM8 21h8"/>',
    'family' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.9M16 3.1a4 4 0 0 1 0 7.8"/>',
    'percent' => '<path d="M19 5L5 19M6.5 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM17.5 20a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>',
    'plane' => '<path d="M17.8 19.2L16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/>',
    'users' => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>',
    'shield' => '<path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6z"/>',
    'chat' => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>',
    'video' => '<path d="M23 7l-7 5 7 5zM1 5h15v14H1z"/>',
    'camera' => '<path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2zM12 17a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>',
    'globe' => '<circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
    'receipt' => '<path d="M4 2v20l3-2 3 2 3-2 3 2 3-2 1 .7V2l-1 .7L16 1l-3 2-3-2-3 2zM8 8h8M8 12h8M8 16h5"/>',
    'zap' => '<path d="M13 2L3 14h9l-1 8 10-12h-9z"/>',
    'lock' => '<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>',
    'pin' => '<path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0zM12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>',
    'mail' => '<path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zM22 6l-10 7L2 6"/>',
  ];
  foreach ($paths as $id => $p) echo "<symbol id=\"i-$id\" viewBox=\"0 0 24 24\" $A>$p</symbol>\n"; ?>
</defs></svg>

<div class="topbar">
  <div class="wrap">
    <div class="kw">NRI Legal Services Tamil Nadu | NRI Property Lawyers Chennai | Property Verification for NRIs | Power of Attorney Disputes</div>
    <div class="tb-links">
      <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener"><?= icon('wa') ?>WhatsApp</a>
      <a href="tel:<?= PHONE ?>"><?= icon('phone') ?><?= PHONE_SHOW ?></a>
    </div>
  </div>
</div>
<header class="nav">
  <div class="wrap">
    <a href="/" class="logo logo-chip"><img src="/assets/img/nri-logo.png" alt="<?= BRAND ?>" width="200" height="56"></a>
    <nav aria-label="Main">
      <ul id="menu">
        <li><a href="/#services">Services</a></li>
        <li><a href="/#verification">Property Check</a></li>
        <li><a href="/#how">How It Works</a></li>
        <li><a href="/#founder">About</a></li>
        <li><a href="/#faq">FAQs</a></li>
        <li><a href="/#footer">Contact</a></li>
      </ul>
    </nav>
    <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener" class="btn btn-wa call-btn"><?= icon('wa') ?>WhatsApp Us</a>
    <button class="burger" aria-label="Menu" aria-expanded="false" aria-controls="menu">
      <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
    </button>
  </div>
</header>
<main id="main">
<?php }

function page_footer($withPopup = true) { ?>
</main>
<footer id="footer">
  <div class="wrap">
    <div class="foot foot-nri">
      <div>
        <span class="logo-chip foot-chip"><img src="/assets/img/nri-logo.png" alt="<?= BRAND ?>" width="200" height="56" loading="lazy"></span>
        <p>Legal services for Indians living abroad with property, family and legal matters in Tamil Nadu. Founded by Advocate Abirami Radhakrishnan.</p>
      </div>
      <div>
        <h4>Contact</h4>
        <p><a href="tel:<?= PHONE ?>"><?= PHONE_SHOW ?></a> (call / WhatsApp)</p>
        <p><a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></p>
        <p>Video consultations across all time zones</p>
      </div>
      <div>
        <h4>Office</h4>
        <p><?= e(ADDRESS) ?> <span class="muted">(<?= ADDRESS_NOTE ?>)</span></p>
      </div>
    </div>
    <p class="disclaimer">Disclaimer: As per the rules of the Bar Council of India, advocates are not permitted to solicit work or advertise. This website is for general information only and does not constitute legal advice or create an advocate–client relationship. <a href="/disclaimer">Read the full disclaimer</a>.</p>
    <div class="foot-bottom">
      <span>© <?= date('Y') ?> <?= BRAND ?>. All rights reserved.</span>
      <nav aria-label="Legal"><a href="/privacy-policy">Privacy Policy</a><a href="/terms-and-conditions">Terms &amp; Conditions</a><a href="/disclaimer">Disclaimer</a></nav>
    </div>
  </div>
</footer>
<div class="mbar">
  <a href="tel:<?= PHONE ?>"><?= icon('phone') ?>Call</a>
  <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener"><?= icon('wa') ?>WhatsApp</a>
</div>
<?php if ($withPopup): ?>
<div class="modal" id="popup" role="dialog" aria-modal="true" aria-label="Book a consultation">
  <div class="modal-inner"><button class="x" aria-label="Close">×</button><?= lead_form('Talk to an NRI Lawyer', false) ?></div>
</div>
<?php endif; ?>
<script>window.SITE = { live: <?= IS_LIVE ? 'true' : 'false' ?>, convCall: "<?= CONV_CALL ?>", convWa: "<?= CONV_WHATSAPP ?>", phone: "<?= PHONE_SHOW ?>" };</script>
<script src="/assets/js/site.js?v=<?= filemtime(__DIR__ . '/../assets/js/site.js') ?>" defer></script>
</body>
</html>
<?php }
