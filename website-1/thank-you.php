<?php
require __DIR__ . '/inc/bootstrap.php';
$page = ['title' => 'Thank You | ' . SITE_NAME, 'desc' => 'Your consultation request has been received.', 'path' => '/thank-you', 'noindex' => true];
include __DIR__ . '/inc/header.php';
?>
<?php if (IS_LIVE): ?>
<script>
  // Lead form conversion: create a "Submit lead form" conversion in Google Ads,
  // then uncomment and paste its send_to value here:
  // gtag('event', 'conversion', {'send_to': 'AW-16746237443/XXXXXXXXXXXX'});
  if (typeof gtag === 'function') gtag('event', 'generate_lead');
</script>
<?php endif; ?>
<section>
  <div class="wrap">
    <div class="center-box">
      <div class="tick-ic">✓</div>
      <h1>Thank You for Your Enquiry</h1>
      <p>Your consultation request has been received. Our legal team will contact you shortly.</p>
      <p style="font-size:14px">All information you share with us is kept strictly confidential.</p>
      <div class="btns">
        <a href="tel:<?= PHONE ?>" class="btn btn-gold"><?= icon('phone') ?>Call <?= PHONE_SHOW ?></a>
        <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener" class="btn btn-wa"><?= icon('wa') ?>WhatsApp Us</a>
        <a href="/" class="btn btn-outline">Back to Home</a>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/inc/footer.php'; ?>
