<?php
require __DIR__ . '/../inc/bootstrap.php';
$page = [
  'title' => 'Legal Insights | Property, Family & Succession Law Explained | ABI LAW FIRM',
  'desc'  => 'Plain-language articles from ABI Law Firm, Chennai on property, inheritance, partition, divorce, maintenance and NRI legal questions.',
  'path'  => '/insights/',
  'nav'   => 'insights',
  'schema' => [breadcrumb_schema(['Home' => '/', 'Insights' => '/insights/'])],
];
include __DIR__ . '/../inc/header.php';
$cats = array_unique(array_column($ARTICLES, 'cat'));
?>
<section class="hero hero-inner">
  <div class="wrap" style="grid-template-columns:1fr">
    <div>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/">Home</a> <span>/</span> <span aria-current="page">Insights</span></nav>
      <div class="eyebrow">Legal Insights</div>
      <h1>Know Your <span class="gold">Rights</span></h1>
      <p class="lead">Court rulings and common legal questions on property, inheritance, family law and NRI matters, explained in plain language by our team.</p>
      <div class="chips"><?php foreach ($cats as $c): ?><span><?= e($c) ?></span><?php endforeach; ?></div>
    </div>
  </div>
</section>

<section style="padding-top:40px">
  <div class="wrap">
    <div class="post-grid">
      <?php foreach ($ARTICLES as $slug => $a): ?>
      <a class="post" href="/insights/<?= $slug ?>"><span class="cat"><?= e($a['cat']) ?></span><h3><?= e($a['title']) ?></h3><p><?= e($a['excerpt']) ?></p><span class="more">Read article →</span></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?= cta_band('Have a Question About Your Case?', 'Speak to our advocates for advice on your specific situation.') ?>
<?php include __DIR__ . '/../inc/footer.php'; ?>
