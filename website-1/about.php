<?php
require __DIR__ . '/inc/bootstrap.php';
$page = [
  'title' => 'About ABI LAW FIRM | Advocate Abirami Radhakrishnan & Team, Chennai',
  'desc'  => 'ABI Law Firm is a Chennai law practice led by Advocate Abirami Radhakrishnan, with 10+ years before the Madras High Court and Chennai courts. Meet our team and see how we work.',
  'path'  => '/about',
  'nav'   => 'about',
  'schema' => [
    breadcrumb_schema(['Home' => '/', 'About' => '/about']),
    ['@context' => 'https://schema.org', '@type' => 'Person', 'name' => 'Abirami Radhakrishnan', 'jobTitle' => 'Founder & Principal Advocate',
     'worksFor' => ['@id' => SITE_URL . '/#firm'], 'image' => SITE_URL . '/assets/img/founder.jpg'],
  ],
];
include __DIR__ . '/inc/header.php';
?>

<section class="hero hero-inner">
  <div class="wrap" style="grid-template-columns:1fr">
    <div>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/">Home</a> <span>/</span> <span aria-current="page">About</span></nav>
      <div class="eyebrow">About the Firm</div>
      <h1>We Fight Tirelessly for <span class="gold">Your Success</span></h1>
      <p class="lead">A Chennai law practice built on honest advice, thorough preparation and personal attention, located directly opposite the Madras High Court.</p>
    </div>
  </div>
</section>

<div class="stats">
  <div class="wrap">
    <div><b>10+ Years</b><span>Practice in Chennai Courts</span></div>
    <div><b>500+</b><span>Cases Handled</span></div>
    <div><b><?= count($SERVICES) ?></b><span>Practice Areas</span></div>
    <div><b><?= GOOGLE_RATING ?>★</b><span>Google Rating</span></div>
  </div>
</div>

<section class="about">
  <div class="wrap">
    <figure>
      <img src="/assets/img/founder.jpg" alt="Advocate Abirami Radhakrishnan" width="449" height="559">
      <figcaption>Abirami Radhakrishnan</figcaption>
    </figure>
    <div>
      <div class="eyebrow">Our Founder</div>
      <h2 class="sec-title">Advocate Abirami Radhakrishnan</h2>
      <p>ABI Law Firm was founded and is led by Advocate Abirami Radhakrishnan, Founder and Principal Advocate. For over a decade she has represented clients before the Madras High Court, the City Civil Courts, Family Courts, Criminal Courts and Consumer Commissions in Chennai.</p>
      <p>She is known among clients for listening carefully, getting straight to the point and giving a clear roadmap of how a case will unfold. She is recognised as one of Chennai's leading women advocates in family law, and her practice covers property, civil, High Court and NRI matters.</p>
      <p>Clients describe her approach in their own words: swift, honest and reliable guidance, with professional fees that are reasonable and explained upfront.</p>
      <?= ticks(['Madras High Court Practice', 'Property &amp; Civil Litigation', 'Divorce &amp; Family Law', 'NRI Legal Matters']) ?>
      <a href="/contact" class="btn btn-gold">Talk to Advocate Abirami</a>
    </div>
  </div>
</section>

<section class="practice">
  <div class="wrap">
    <div class="eyebrow">Our Approach</div>
    <h2 class="sec-title">How We Work With You</h2>
    <div class="why-list">
      <div class="why-item"><b>01</b><h3>We Listen First</h3><p>We take time to understand your side of the story and what outcome matters to you.</p></div>
      <div class="why-item"><b>02</b><h3>Honest Advice</h3><p>We tell you plainly how strong your case is, the options available and the likely timeline.</p></div>
      <div class="why-item"><b>03</b><h3>Settlement Where Possible</h3><p>Negotiation and mediation often resolve matters faster. When they don't, we go to court firmly.</p></div>
      <div class="why-item"><b>04</b><h3>Thorough Preparation</h3><p>Documents, evidence and arguments prepared in detail, because preparation wins cases.</p></div>
      <div class="why-item"><b>05</b><h3>Transparent Fees</h3><p>A clear quote before work begins, with no hidden charges.</p></div>
      <div class="why-item"><b>06</b><h3>Regular Updates</h3><p>You always know where your matter stands, whether you're in Chennai or abroad.</p></div>
    </div>
  </div>
</section>

<section id="team">
  <div class="wrap">
    <div class="eyebrow">Our Team</div>
    <h2 class="sec-title">Meet Our Lawyers</h2>
    <p class="sec-sub">A team of advocates and staff handling property, civil, family, criminal and High Court matters across Chennai.</p>
    <?= team_grid() ?>
  </div>
</section>

<?= how_we_work() ?>
<?= testimonials(8) ?>

<section class="practice">
  <div class="wrap">
    <div class="eyebrow">What We Do</div>
    <h2 class="sec-title">Our Practice Areas</h2>
    <div class="grid-4">
      <?php foreach (['property-disputes', 'title-verification', 'civil-litigation', 'divorce-family-law', 'high-court', 'nri-legal-services', 'succession-partition', 'corporate-commercial'] as $slug) echo service_card($slug); ?>
    </div>
    <div class="svc-cta"><a href="/practice-areas/" class="btn btn-gold">All Practice Areas</a></div>
  </div>
</section>

<?= cta_band() ?>

<?php include __DIR__ . '/inc/footer.php'; ?>
