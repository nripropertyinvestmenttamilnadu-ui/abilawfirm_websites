<?php
require __DIR__ . '/inc/bootstrap.php';
http_response_code(404);
$page = ['title' => 'Page Not Found | ' . SITE_NAME, 'desc' => 'The page you are looking for could not be found.', 'path' => '/404', 'noindex' => true];
include __DIR__ . '/inc/header.php';
?>
<section>
  <div class="wrap">
    <div class="center-box">
      <div class="tick-ic">?</div>
      <h1>Page Not Found</h1>
      <p>The page you are looking for may have moved. Our website has recently been updated.</p>
      <p>Try our practice areas, or call us and we will help you directly.</p>
      <div class="btns">
        <a href="/" class="btn btn-gold">Back to Home</a>
        <a href="/practice-areas/" class="btn btn-outline">Practice Areas</a>
        <a href="tel:<?= PHONE ?>" class="btn btn-outline"><?= icon('phone') ?>Call Us</a>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/inc/footer.php'; ?>
