<?php
require __DIR__ . '/inc/bootstrap.php';
$page = [
  'title' => 'ABI LAW FIRM | Lawyers in Chennai for Property, Civil, Family & NRI Matters',
  'desc'  => 'Speak directly to an experienced Chennai advocate, get an honest assessment and a clear roadmap, transparent fees and updates at every stage. Property, civil, divorce, High Court and NRI matters.',
  'path'  => '/',
  'nav'   => 'home',
];
include __DIR__ . '/inc/header.php';
?>

<!-- HERO: what the client gets -->
<section class="hero hero-home" id="top">
  <div class="wrap">
    <div>
      <div class="eyebrow">Chennai · Opposite Madras High Court</div>
      <h1>Clear Advice. Strong Representation. <span class="gold">Your Victory, Our Mission.</span></h1>
      <div class="kpis">
        <div><b>10+ Years</b><span>in Chennai courts</span></div>
        <div><b>500+</b><span>cases handled</span></div>
        <a href="<?= e(MAPS_URL) ?>" target="_blank" rel="noopener"><b><?= GOOGLE_RATING ?> ★</b><span>Google rating</span></a>
        <div><b>NRI</b><span>matters handled remotely</span></div>
      </div>
      <ul class="hero-points">
        <li><span><b>Speak directly to the advocate</b> handling your case</span></li>
        <li><span><b>Honest assessment &amp; clear roadmap</b> in your first consultation</span></li>
        <li><span><b>Transparent quote upfront</b>, no hidden charges</span></li>
        <li><span><b>Regular updates</b> on WhatsApp, email &amp; video call</span></li>
      </ul>
      <div class="ctas">
        <a href="#contact" class="btn btn-gold">Book a Consultation</a>
        <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener" class="btn btn-wa"><?= icon('wa') ?>WhatsApp</a>
      </div>
    </div>
    <div id="contact"><?= lead_form() ?></div>
  </div>
</section>

<!-- BENEFITS -->
<section class="benefits" id="benefits">
  <div class="wrap">
    <div class="eyebrow">Why Clients Choose Us</div>
    <h2 class="sec-title">What You Get When You Approach ABI Law Firm</h2>
    <p class="sec-sub">A legal problem brings worry, uncertainty and cost. Our job is to take that weight off you, with experienced advice, firm representation and a team that keeps you informed every step of the way.</p>
    <div class="benefit-grid">
      <div class="benefit"><div class="ic"><?= icon('user') ?></div><h3>Direct Access to Your Advocate</h3><p>You discuss your case with the advocate handling it, led by Advocate Abirami Radhakrishnan, and not with a middleman.</p></div>
      <div class="benefit"><div class="ic"><?= icon('scale') ?></div><h3>An Honest Opinion Before You Spend</h3><p>We tell you plainly how strong your case is and what your real options are, even when the answer is to settle or not to litigate.</p></div>
      <div class="benefit"><div class="ic"><?= icon('route') ?></div><h3>A Clear Roadmap</h3><p>You know the steps ahead, the documents needed and a realistic timeline, so there is no guessing about what happens next.</p></div>
      <div class="benefit"><div class="ic"><?= icon('receipt') ?></div><h3>Transparent, Fair Fees</h3><p>A clear quote before any work begins, with no hidden charges. Clients often tell us our fees are reasonable for the work done.</p></div>
      <div class="benefit"><div class="ic"><?= icon('zap') ?></div><h3>Fast Action When It's Urgent</h3><p>Anticipatory bail, injunctions to stop a sale or encroachment, replies to notices: we move quickly when time matters.</p></div>
      <div class="benefit"><div class="ic"><?= icon('court') ?></div><h3>Complete Handling, Start to Finish</h3><p>From legal notice and documentation to court, High Court appeal and execution of the order, one team takes care of it all.</p></div>
      <div class="benefit"><div class="ic"><?= icon('chat') ?></div><h3>Always in the Loop</h3><p>Regular updates by WhatsApp and email, copies of every key document and video calls whenever you need them.</p></div>
      <div class="benefit"><div class="ic"><?= icon('lock') ?></div><h3>Complete Confidentiality</h3><p>Your personal and family matters are handled with discretion and sensitivity, from the first call onwards.</p></div>
    </div>
    <div class="benefit-cta">
      <p>Find out where you stand in a single consultation, in person or on video call.</p>
      <a href="#contact" class="btn btn-gold">Book Your Consultation</a>
    </div>
  </div>
</section>

<!-- OUTCOMES -->
<section id="results">
  <div class="wrap">
    <div class="eyebrow">Real Outcomes</div>
    <h2 class="sec-title">What Our Clients Have Achieved</h2>
    <p class="sec-sub">Long-pending disputes resolved, rights protected and problems solved without the client having to travel. In their own words:</p>
    <div class="outcomes-grid">
      <div class="outcome"><div class="big">15 yrs → 3 months</div><div class="what">Civil appeal resolved</div><p>A civil appeal that had dragged on for over 15 years was resolved within 3 months of the client transferring it to us.</p><div class="who"><span>Vaithiyanathan</span> · Civil appeal</div></div>
      <div class="outcome"><div class="big">8 months</div><div class="what">Divorce &amp; maintenance won</div><p>After 10 difficult years, the client secured her divorce and the maintenance she needed for herself and her child.</p><div class="who"><span>Karthika Gunasekaran</span> · Family court</div></div>
      <div class="outcome"><div class="big">Writ allowed</div><div class="what">Deed registration secured</div><p>The registration office wrongly refused a settlement deed, calling it temple land. A writ petition got quick directions and the deed was registered.</p><div class="who"><span>Sivakumar Palanisamy</span> · Madras High Court</div></div>
      <div class="outcome"><div class="big">No travel</div><div class="what">NRI property verified</div><p>Complete document verification for an NRI client handled remotely, with attention to detail that gave her full confidence.</p><div class="who"><span>Meera A</span> · NRI client</div></div>
    </div>
    <p class="t-note">These outcomes reflect individual client experiences. Every case is different, and past results do not guarantee a similar outcome.</p>
  </div>
</section>

<?= how_we_work() ?>

<!-- PRACTICE AREAS -->
<section class="practice" id="services">
  <div class="wrap">
    <div class="eyebrow">How We Can Help</div>
    <h2 class="sec-title">Legal Services in Chennai &amp; Across Tamil Nadu</h2>
    <p class="sec-sub">Whatever your matter, you get the same commitment: honest advice, thorough preparation and steady progress until it is resolved.</p>
    <div class="grid-4">
      <?php foreach (['property-disputes', 'title-verification', 'property-registration', 'civil-litigation', 'divorce-family-law', 'high-court', 'criminal-defence-bail', 'nri-legal-services'] as $slug) echo service_card($slug); ?>
    </div>
    <div class="svc-cta"><a href="/practice-areas/" class="btn btn-gold">View All <?= count($SERVICES) ?> Practice Areas</a></div>
  </div>
</section>

<!-- FOUNDER -->
<section class="about" id="about">
  <div class="wrap">
    <figure>
      <img src="/assets/img/founder.jpg" alt="Advocate Abirami Radhakrishnan, Founder of ABI Law Firm" width="449" height="559" loading="lazy">
      <figcaption>Founder &amp; Principal Advocate</figcaption>
    </figure>
    <div>
      <div class="eyebrow">Experience on Your Side</div>
      <h2 class="sec-title">Led by Advocate Abirami Radhakrishnan</h2>
      <p class="founder-quote">“Your legal victory is our mission. We fight tirelessly for your success.”</p>
      <p>For over a decade, Advocate Abirami Radhakrishnan and her team have represented clients before the Madras High Court, the City Civil Courts, Family Courts, Criminal Courts and Consumer Commissions in Chennai. Our office is directly opposite the Madras High Court.</p>
      <p>Clients value her for listening carefully, getting straight to the point and giving a clear picture of how their case will unfold, with guidance they describe as swift, honest and reliable.</p>
      <?= ticks(['Madras High Court Practice', 'Property &amp; Civil Litigation', 'Divorce &amp; Family Law', 'NRI Legal Matters']) ?>
      <a href="/about" class="btn btn-outline">More About Our Firm</a>
    </div>
  </div>
</section>

<!-- NRI -->
<section class="nri">
  <div class="wrap">
    <div>
      <div class="eyebrow">For NRIs</div>
      <h2 class="sec-title">Living Abroad? Your Matter Is in Safe Hands in Chennai</h2>
      <p>Property documents, title checks, tenant problems, inheritance and court cases are hard to manage from overseas. We act for you through a power of attorney and keep you updated, so you don't have to take time off and travel to India.</p>
      <div class="svc-cta">
        <a href="/practice-areas/nri-legal-services" class="btn btn-gold">NRI Legal Services</a>
        <a href="<?= e(wa_link('Hello Abi Law Firm, I am an NRI and need help with a legal matter in Tamil Nadu.')) ?>" target="_blank" rel="noopener" class="btn btn-outline">Message Us on WhatsApp</a>
      </div>
    </div>
    <div class="nri-list">
      <div><b>No Need to Travel</b><span>Documents, registrations and court appearances handled for you through POA.</span></div>
      <div><b>Property Checked Before You Buy</b><span>A signed legal opinion on the title, shared digitally and explained on a call.</span></div>
      <div><b>Your Property Protected</b><span>Encroachment, tenants, fraudulent deeds and family disputes dealt with firmly.</span></div>
      <div><b>Updates in Your Time Zone</b><span>Clear reports at every stage on WhatsApp and email, and video calls when you need them.</span></div>
    </div>
  </div>
</section>

<?= testimonials(6) ?>

<section id="team" class="practice">
  <div class="wrap">
    <div class="eyebrow">Our Team</div>
    <h2 class="sec-title">The Team Working on Your Case</h2>
    <p class="sec-sub">A dedicated team of advocates and staff, so your matter always gets attention, with the founder overseeing it.</p>
    <?= team_grid() ?>
  </div>
</section>

<section id="insights">
  <div class="wrap">
    <div class="eyebrow">Legal Insights</div>
    <h2 class="sec-title">Know Your Rights</h2>
    <p class="sec-sub">Plain-language explanations of court rulings and legal questions our clients often ask.</p>
    <div class="post-grid">
      <?php foreach (array_slice($ARTICLES, 0, 3, true) as $slug => $a): ?>
      <a class="post" href="/insights/<?= $slug ?>"><span class="cat"><?= e($a['cat']) ?></span><h3><?= e($a['title']) ?></h3><p><?= e($a['excerpt']) ?></p><span class="more">Read article →</span></a>
      <?php endforeach; ?>
    </div>
    <div class="svc-cta"><a href="/insights/" class="btn btn-outline">All Articles</a></div>
  </div>
</section>

<section id="faq" class="practice">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Frequently Asked Questions</h2>
    <?= faq([
      ['What happens in the first consultation?', 'The advocate reviews your documents, explains your legal position and options in plain language, and gives you a clear roadmap. You leave knowing where you stand and what the next steps would be.'],
      ['How much does a consultation cost?', 'A detailed consultation with the advocate costs ₹2,000, in person or on video call. After understanding your case we give you a clear quote for the work, with no hidden charges.'],
      ['Will I deal directly with the advocate?', 'Yes. You discuss your case with the advocate handling it, and Advocate Abirami Radhakrishnan oversees the firm\'s matters.'],
      ['How will I know what is happening in my case?', 'We send regular updates by WhatsApp and email, share copies of important documents and orders, and are available for calls whenever you need them.'],
      ['Do you handle cases in the Madras High Court?', 'Yes. Our office is directly opposite the High Court, and our advocates appear there in writ petitions, appeals, revisions, bail and quash petitions.'],
      ['I live abroad. Can you handle my case?', 'Yes. We regularly act for NRI clients in property, document, inheritance and litigation matters through a power of attorney, with consultations on video call.'],
      ['Can you help with something urgent, like bail?', 'Yes. Call us directly on ' . PHONE_SHOW . ' so we can review the FIR or complaint and act quickly.'],
    ]) ?>
  </div>
</section>

<?= cta_band('Take the First Step Towards Resolving Your Matter', 'One consultation gives you clarity on your rights, your options and the way forward.') ?>

<?php include __DIR__ . '/inc/footer.php'; ?>
