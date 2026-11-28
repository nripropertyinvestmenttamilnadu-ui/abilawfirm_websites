<?php
require __DIR__ . '/../inc/bootstrap.php';
$page = [
  'title' => 'Practice Areas | Property, Civil, Family, Criminal & Corporate Law | ABI LAW FIRM',
  'desc'  => 'Legal services from ABI Law Firm, Chennai: property disputes, title verification, registration, NRI services, civil litigation, divorce, succession, High Court, criminal, consumer, corporate and tax.',
  'path'  => '/practice-areas/',
  'nav'   => 'services',
  'schema' => [breadcrumb_schema(['Home' => '/', 'Practice Areas' => '/practice-areas/'])],
];
include __DIR__ . '/../inc/header.php';
?>

<section class="hero hero-inner">
  <div class="wrap" style="grid-template-columns:1fr">
    <div>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/">Home</a> <span>/</span> <span aria-current="page">Practice Areas</span></nav>
      <div class="eyebrow">Practice Areas</div>
      <h1>Legal Services in <span class="gold">Chennai</span> &amp; Across Tamil Nadu</h1>
      <p class="lead">End-to-end support across <?= count($SERVICES) ?> areas of law, from legal notice and documentation to court representation and execution of orders. Not sure which applies to you? Call us and we'll guide you.</p>
      <div class="ctas">
        <a href="tel:<?= PHONE ?>" class="btn btn-gold"><?= icon('phone') ?>Call <?= PHONE_SHOW ?></a>
        <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener" class="btn btn-wa"><?= icon('wa') ?>WhatsApp Us</a>
      </div>
    </div>
  </div>
</section>

<section class="practice" style="padding-top:40px">
  <div class="wrap">
    <?php foreach ($SERVICE_GROUPS as $g): ?>
    <h2 class="group-title"><?= e($g) ?></h2>
    <div class="grid-4">
      <?php foreach ($SERVICES as $slug => $s) if ($s['group'] === $g) echo service_card($slug); ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?= how_we_work() ?>
<?= testimonials(3) ?>
<?= cta_band() ?>

<?php include __DIR__ . '/../inc/footer.php'; ?>
