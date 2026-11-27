<?php
require __DIR__ . '/inc/layout.php';
page_header('Thank You | ' . BRAND, 'Your consultation request has been received.', '/thank-you', true);
?>
<?php if (IS_LIVE): ?>
<script>
  // Lead form conversion: create a "Submit lead form" conversion in Google Ads and paste its send_to value here:
  // gtag('event', 'conversion', {'send_to': 'AW-16746237443/XXXXXXXXXXXX'});
</script>
<?php endif; ?>
<section>
  <div class="wrap">
    <div class="center-box">
      <div class="tick-ic">✓</div>
      <h1>Thank You for Your Enquiry</h1>
      <p>Your request has been received. Our team will contact you on WhatsApp or by phone shortly, keeping your time zone in mind.</p>
      <p style="font-size:14px">All information you share with us is kept strictly confidential.</p>
      <div class="btns">
        <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener" class="btn btn-wa"><?= icon('wa') ?>WhatsApp Us</a>
        <a href="/" class="btn btn-outline">Back to Home</a>
      </div>
    </div>
  </div>
</section>
<?php page_footer(false); ?>
