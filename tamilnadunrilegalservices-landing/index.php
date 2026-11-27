<?php
require __DIR__ . '/inc/layout.php';

$faqs = [
  ['Do I need to travel to India for my property or legal matter?', 'In most cases, no. With a properly executed power of attorney we can obtain documents, verify property, register deeds and conduct court cases on your behalf. Consultations happen on video call.'],
  ['How do I give a power of attorney from abroad?', 'You sign the POA before the Indian Embassy or Consulate, or before a notary with an apostille, depending on your country. Once it reaches India it is stamped and, where needed, registered. We guide you through each step and draft the POA for you.'],
  ['I gave a power of attorney to a relative and suspect misuse. Can you check quietly?', 'Yes. Our property verification reviews the full ownership record, including mutation and transaction entries, without contacting the POA holder. If an unauthorised transfer is found, we advise you on cancelling the POA and challenging the transaction.'],
  ['The property documents are in Tamil. Will I understand the report?', 'Yes. We provide English translations of the key property documents and explain the findings to you on a call.'],
  ['Will the report include photographs of the property?', 'Yes. Our local team visits the property, checks who is occupying it and includes photographs in the report.'],
  ['Can you verify ancestral, agricultural or commercial property?', 'Yes. We verify all types of property: ancestral, agricultural, residential and commercial.'],
  ['How much does a consultation cost?', 'A detailed consultation on video call costs ' . CONSULT_FEE . '. We review your documents and give you our legal opinion, followed by a clear quote for the work, with no hidden charges.'],
  ['Can NRIs buy agricultural land in India?', 'No. NRIs can buy residential and commercial property, but not agricultural land, plantation property or farmhouses. NRIs can, however, inherit agricultural land.'],
];
$faqSchema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => [
  '@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)];
$org = ['@context' => 'https://schema.org', '@type' => 'LegalService', 'name' => BRAND, 'url' => SITE_URL . '/',
  'telephone' => PHONE, 'email' => EMAIL, 'image' => SITE_URL . '/assets/img/founder.jpg',
  'address' => ['@type' => 'PostalAddress', 'streetAddress' => '1st Floor, 105/51, Armenian Street, George Town',
    'addressLocality' => 'Chennai', 'addressRegion' => 'Tamil Nadu', 'postalCode' => '600001', 'addressCountry' => 'IN'],
  'founder' => ['@type' => 'Person', 'name' => 'Abirami Radhakrishnan'], 'areaServed' => 'Tamil Nadu'];

page_header('NRI Legal Services in Tamil Nadu | NRI Property Lawyers, Chennai | ' . BRAND,
  'Legal help for NRIs with property and family matters in Tamil Nadu: property verification with photos, document retrieval, POA misuse, disputes, tenants and inheritance. No need to travel.',
  '/', false, [$org, $faqSchema]);
?>

<!-- HERO -->
<section class="hero hero-home" id="top">
  <div class="wrap">
    <div>
      <div class="eyebrow">For Indians Living Abroad</div>
      <h1>Your Property &amp; Legal Matters in Tamil Nadu, <span class="gold">Handled While You Live Abroad</span></h1>
      <div class="kpis">
        <div><b>No Travel</b><span>we act for you via POA</span></div>
        <div><b>10+ Years</b><span>in Chennai courts</span></div>
        <div><b>500+</b><span>cases handled</span></div>
        <div><b>Any Time Zone</b><span>video consultations</span></div>
      </div>
      <ul class="hero-points">
        <li><span><b>Founded by an advocate who lived in the USA</b> and knows NRI challenges first-hand</span></li>
        <li><span><b>Property verified on the ground</b>, with photos and English translations</span></li>
        <li><span><b>Transparent quote upfront</b>, no hidden charges</span></li>
        <li><span><b>Regular updates</b> on WhatsApp &amp; email, in your time zone</span></li>
      </ul>
      <div class="ctas">
        <a href="#contact" class="btn btn-gold">Book a Video Consultation</a>
        <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener" class="btn btn-wa"><?= icon('wa') ?>WhatsApp Us</a>
      </div>
    </div>
    <div id="contact"><?= lead_form() ?></div>
  </div>
</section>

<!-- PROBLEMS -->
<section class="practice" id="challenges">
  <div class="wrap">
    <div class="eyebrow">Sound Familiar?</div>
    <h2 class="sec-title">Managing Legal Matters in India From Abroad Is Hard</h2>
    <p class="sec-sub">Most NRIs we speak to face the same problems. We were set up to solve exactly these.</p>
    <div class="pain-grid">
      <div class="pain"><?= icon('plane') ?><h3>You can't keep flying down</h3><p>Every visit to a government office, bank or court means leave, flights and lost time.</p></div>
      <div class="pain"><?= icon('users') ?><h3>Relatives can't follow up</h3><p>Cases and paperwork handed to friends or relatives often get delayed or neglected.</p></div>
      <div class="pain"><?= icon('alert') ?><h3>Your property is at risk</h3><p>Vacant or rented property is exposed to encroachment, fraudulent deeds and POA misuse.</p></div>
      <div class="pain"><?= icon('doc') ?><h3>Records you can't read</h3><p>Land records are in Tamil and spread across offices, so it's hard to know where you stand.</p></div>
    </div>
    <div class="benefit-cta">
      <p>We become your legal team on the ground in Tamil Nadu, so you don't have to be here.</p>
      <a href="#contact" class="btn btn-gold">Talk to Us</a>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="wrap">
    <div class="eyebrow">Our Services for NRIs</div>
    <h2 class="sec-title">Everything You Need, Handled Locally</h2>
    <p class="sec-sub">Property, family and legal matters across Chennai and Tamil Nadu, handled end to end.</p>
    <div class="grid-4 svc-cards">
      <div class="pa"><div class="ic"><?= icon('search') ?></div><h3>Property Verification &amp; Due Diligence</h3><p>A full check of ownership, encumbrances and on-ground status, with photos and an English report.</p><a href="#verification" class="more">See what's included →</a></div>
      <div class="pa"><div class="ic"><?= icon('doc') ?></div><h3>Obtaining Property Documents</h3><p>Certified sale deeds, EC, patta and chitta, FMB sketch, tax receipts, legal heir certificates and NOCs.</p><a href="#contact" class="more">Get your documents →</a></div>
      <div class="pa"><div class="ic"><?= icon('shield') ?></div><h3>Property Disputes &amp; Encroachment</h3><p>Encroachment, illegal possession, boundary disputes and cancellation of fraudulent deeds.</p><a href="#contact" class="more">Protect your property →</a></div>
      <div class="pa"><div class="ic"><?= icon('key') ?></div><h3>Power of Attorney Issues</h3><p>Drafting POAs correctly, and acting fast when a POA holder misuses it or sells without consent.</p><a href="#contact" class="more">Discuss your POA →</a></div>
      <div class="pa"><div class="ic"><?= icon('swap') ?></div><h3>Buying &amp; Selling Property</h3><p>Title checks, sale agreements and registration through POA, with FEMA-compliant payments.</p><a href="#contact" class="more">Buy or sell safely →</a></div>
      <div class="pa"><div class="ic"><?= icon('home') ?></div><h3>Tenants &amp; Rental Property</h3><p>Rental agreements, tenant verification, unpaid rent and eviction of tenants who won't vacate.</p><a href="#contact" class="more">Resolve tenant issues →</a></div>
      <div class="pa"><div class="ic"><?= icon('tree') ?></div><h3>Inheritance &amp; Partition</h3><p>Legal heir and succession certificates, patta transfer, partition of family property and probate.</p><a href="#contact" class="more">Claim your inheritance →</a></div>
      <div class="pa"><div class="ic"><?= icon('family') ?></div><h3>Wills, Family &amp; Tax Matters</h3><p>Wills for Indian assets, NRI marriage and divorce, DTAA, TDS on sale and repatriation.</p><a href="#contact" class="more">Get advice →</a></div>
    </div>
  </div>
</section>

<!-- PROPERTY VERIFICATION -->
<section class="svc alt" id="verification">
  <div class="wrap">
    <div class="eyebrow">Our Most Requested Service</div>
    <h2 class="sec-title">Know Exactly What's Happening With Your Property</h2>
    <p class="sec-sub">Whether it's ancestral land, a flat you bought years ago or property you plan to buy, our verification report tells you, in plain English, who owns it, who occupies it and whether anything is wrong.</p>
    <div class="svc-grid">
      <div class="svc-block"><h3>What Your Report Includes</h3>
        <ul class="ticks">
          <li><b>Certified copies</b> of the latest title documents and land records</li>
          <li><b>Ownership history</b>: past transfers, mutation entries and succession</li>
          <li><b>Encumbrance check</b> for loans, liens and claims</li>
          <li><b>On-ground visit</b>: who is occupying the property, and on what terms</li>
          <li><b>Photographs</b> of the property and its current condition</li>
          <li><b>English translations</b> of the key Tamil documents</li>
          <li><b>Market value insight</b> based on current trends</li>
        </ul>
      </div>
      <div class="svc-block"><h3>If We Find a Problem</h3>
        <p>If we discover an illegal transfer, encroachment or misuse of a power of attorney, we tell you immediately and explain your options: cancelling the POA, a police complaint, a suit to cancel the fraudulent deed, or an injunction to stop further sales.</p>
        <p>Many property remedies have strict time limits, so finding problems early matters.</p>
        <div class="svc-cta" style="margin-top:20px"><a href="#contact" class="btn btn-gold">Verify My Property</a></div>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="process" id="how">
  <div class="wrap">
    <div class="eyebrow">How It Works</div>
    <h2 class="sec-title">Simple, Clear Steps From Anywhere in the World</h2>
    <ol class="steps">
      <li><b>Quick Discussion</b>Message us on WhatsApp or fill in the form. We understand your issue and tell you which documents to send.</li>
      <li><b>Video Consultation</b>A detailed consultation (<?= CONSULT_FEE ?>) where the advocate reviews your documents and gives you a clear legal opinion.</li>
      <li><b>Tailored Quote</b>You get a clear quote for the work, with no hidden charges, before anything starts.</li>
      <li><b>We Act for You</b>Through your POA we visit offices, file applications and appear in court on your behalf.</li>
      <li><b>Regular Updates</b>Updates, scanned documents and orders by WhatsApp and email, plus calls when you need them.</li>
    </ol>
  </div>
</section>

<!-- FOUNDER -->
<section class="about" id="founder">
  <div class="wrap">
    <figure>
      <img src="/assets/img/founder.jpg" alt="Advocate Abirami Radhakrishnan, Founder of Tamil Nadu NRI Legal Services" width="613" height="760" loading="lazy">
      <figcaption>Founder &amp; CEO</figcaption>
    </figure>
    <div>
      <div class="eyebrow">About the Founder</div>
      <h2 class="sec-title">Advocate Abirami Radhakrishnan</h2>
      <p class="founder-quote">Having lived in the USA for over five years, she understands first-hand how hard it is to manage legal matters in India from abroad.</p>
      <p>That personal experience, together with more than a decade of practice before the Madras High Court and Chennai courts, led her to create Tamil Nadu NRI Legal Services: a firm dedicated to giving Indians abroad reliable, tailored legal help in Tamil Nadu.</p>
      <p>She also founded ABI Law Firm in Chennai, and her team of advocates handles property, civil, family and High Court matters from an office directly opposite the Madras High Court.</p>
      <ul class="ticks">
        <li>Lived abroad: understands NRI concerns</li>
        <li>10+ years of litigation</li>
        <li>Madras High Court practice</li>
        <li>Personal attention to every client</li>
      </ul>
      <a href="#contact" class="btn btn-gold">Speak to Our Team</a>
    </div>
  </div>
</section>

<!-- WHY US -->
<section class="benefits" id="why">
  <div class="wrap">
    <div class="eyebrow">Why NRIs Choose Us</div>
    <h2 class="sec-title">Your Trusted Legal Partner in Tamil Nadu</h2>
    <div class="benefit-grid">
      <div class="benefit"><div class="ic"><?= icon('zap') ?></div><h3>Swift Solutions</h3><p>Quick, effective action, because problems with property only grow with time.</p></div>
      <div class="benefit"><div class="ic"><?= icon('receipt') ?></div><h3>Transparent Pricing</h3><p>Clear costs upfront, with no hidden fees.</p></div>
      <div class="benefit"><div class="ic"><?= icon('chat') ?></div><h3>Regular Updates</h3><p>Timely updates on WhatsApp and email, so you're never left wondering.</p></div>
      <div class="benefit"><div class="ic"><?= icon('scale') ?></div><h3>Honest Communication</h3><p>Plain-language explanations of where you stand and what your options are.</p></div>
      <div class="benefit"><div class="ic"><?= icon('video') ?></div><h3>Video Consultations</h3><p>Meet the advocate on video at a time that suits your time zone.</p></div>
      <div class="benefit"><div class="ic"><?= icon('camera') ?></div><h3>Eyes on the Ground</h3><p>Local site visits and photos, so you see what's happening with your property.</p></div>
      <div class="benefit"><div class="ic"><?= icon('globe') ?></div><h3>Court &amp; Out-of-Court</h3><p>From documents and registration to representation in court, all in one place.</p></div>
      <div class="benefit"><div class="ic"><?= icon('lock') ?></div><h3>Strictly Confidential</h3><p>Family and property matters handled with complete discretion.</p></div>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section class="testimonials" id="reviews">
  <div class="wrap">
    <div class="eyebrow">Client Reviews</div>
    <h2 class="sec-title">What NRI Clients Say</h2>
    <div class="t-grid">
      <figure class="t-card"><div class="stars" aria-hidden="true">★★★★★</div><blockquote>“When our father passed and left us property in Tamil Nadu, we were in the USA. Their team clearly explained the process and guided us every step of the way. They were always professional and responsive. The costs were reasonable for the complex work done, and I've already recommended them to relatives and friends.”</blockquote><figcaption><b>Parthi Subramanian</b><span>USA · Property transfer</span></figcaption></figure>
      <figure class="t-card"><div class="stars" aria-hidden="true">★★★★★</div><blockquote>“As an NRI, finding a trustworthy and straightforward lawyer in India can be incredibly challenging, but Advocate Abirami is a rare find. She listens with great intent and provides a very clear roadmap of how the legal process will unfold.”</blockquote><figcaption><b>Sangeetha S Mani</b><span>NRI client · Google review of ABI Law Firm</span></figcaption></figure>
      <figure class="t-card"><div class="stars" aria-hidden="true">★★★★★</div><blockquote>“The document verification process was easy and trustworthy. As an NRI client, I appreciated how well they understood that I wasn't physically available and handled everything seamlessly.”</blockquote><figcaption><b>Meera A</b><span>NRI client · Google review of ABI Law Firm</span></figcaption></figure>
    </div>
    <p class="t-note">Reviews reflect individual client experiences. Every case is different, and past results do not guarantee a similar outcome.</p>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="practice">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Questions NRIs Often Ask</h2>
    <div class="faq-list">
      <?php foreach ($faqs as [$q, $a]): ?><details><summary><?= e($q) ?></summary><p><?= e($a) ?></p></details><?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta">
  <div class="wrap">
    <h2>Protect Your Property and Rights in Tamil Nadu</h2>
    <p>Book a video consultation and get clarity on your matter, wherever you live.</p>
    <div class="btns">
      <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener" class="btn btn-wa"><?= icon('wa') ?>WhatsApp <?= PHONE_SHOW ?></a>
      <a href="#contact" class="btn btn-dark">Book a Consultation</a>
    </div>
  </div>
</section>

<?php page_footer(); ?>
