<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('nri-legal-services',
  'NRI Legal Services in Tamil Nadu | Property, Documents & Disputes | ABI LAW FIRM',
  'Legal services for NRIs with property and family matters in Chennai and Tamil Nadu: document retrieval, title verification, disputes, tenants, inheritance and land development, handled remotely through POA.',
  'For NRIs &amp; Overseas Indians',
  'NRI Legal Services in <span class="gold">Tamil Nadu</span>',
  'Managing property and legal matters in India from abroad is hard. We act as your legal team on the ground: we obtain documents, verify titles, deal with tenants and authorities, and represent you in court, while you stay informed from wherever you live.',
  ['Property Documents', 'Title Verification', 'Disputes via POA', 'Tenants', 'Inheritance', 'Video Consultations'],
  'NRI Legal Services');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Handle</div>
    <h2 class="sec-title">Your Legal Team in Chennai</h2>
    <p class="sec-sub">You don't need to fly down for every visit to a government office or court. Most matters can be handled fully through a power of attorney, with consultations on video call and updates on WhatsApp and email.</p>

    <div class="svc-grid">
      <?= block('Obtaining Property Documents', ticks([
        'Certified copies of sale / title deeds',
        'Encumbrance Certificate (EC)',
        'Patta, chitta, FMB sketch and survey records',
        'Property tax receipts and mutation',
        'Layout approval and building plan sanction',
        'Legal heir certificate, probate and NOCs',
        'Court records for any past disputes',
        'Transfer of electricity, water and tax records to your name',
      ])) ?>
      <?= block('Property Disputes &amp; Tenants', ticks([
        'Encroachment and boundary disputes',
        'Fraudulent transfers and forged deeds',
        'Disputes with relatives over family property',
        'Tenants who don\'t pay or won\'t vacate',
        'Lease drafting and tenant verification',
        'Court representation through POA',
      ]) . '<p style="margin-top:16px"><a class="gold" href="/practice-areas/property-disputes">Property disputes →</a> &nbsp; <a class="gold" href="/practice-areas/landlord-tenant">Landlord &amp; tenant →</a></p>') ?>
      <?= block('Buying, Selling &amp; Developing Property', ticks([
        '<b>Title verification</b> and a signed legal opinion before you buy',
        '<b>Sale and registration</b> through power of attorney',
        '<b>Land development</b>: zoning, layout approval, building permits and land conversion',
        '<b>Joint development agreements</b> with builders, drafted to protect you',
        '<b>Project monitoring</b> and regular updates while construction is under way',
      ]), true) ?>
      <?= block('Inheritance &amp; Family Matters', ticks([
        'Legal heir and succession certificates',
        'Partition of ancestral property',
        'Wills for your Indian assets',
        'Probate and letters of administration',
      ])) ?>
      <?= block('How It Works From Abroad', steps([
        ['Video Consultation', 'We discuss your matter and review documents you send by email or WhatsApp.'],
        ['Power of Attorney', 'We guide you to execute and attest a POA in your country.'],
        ['We Act for You', 'We visit offices, file applications and appear in court on your behalf.'],
        ['Regular Reports', 'You receive updates and scanned documents at every stage.'],
      ])) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">NRI Questions</h2>
    <?= faq([
      ['Do I need to come to India for my property matter?', 'In most cases, no. With a properly executed power of attorney, we can obtain documents, register deeds and conduct court cases on your behalf.'],
      ['How do I give a power of attorney from abroad?', 'You sign the POA before the Indian Embassy or Consulate, or before a notary with an apostille, depending on your country. Once it reaches India it is adjudicated (stamped) and, where needed, registered. We guide you through each step.'],
      ['How long does it take to get property documents like an EC or patta?', 'Many documents, such as the EC and patta, can be obtained within a few weeks, depending on the office. We tell you the expected time for each document upfront.'],
      ['Can NRIs buy agricultural land in India?', 'No. NRIs can buy residential and commercial property, but not agricultural land, plantation property or farmhouses. NRIs can inherit agricultural land.'],
      ['How will I know what is happening in my case?', 'We send regular updates by WhatsApp and email, share scanned copies of documents and orders, and are available for video calls.'],
      ['What are the costs?', 'Costs depend on the work involved. We give you a clear quote after the consultation, before any work begins.'],
    ]) ?>
    <p class="note-box">Read our <a class="gold" href="/insights/nri-family-property-rights-guide">guide to family property rights for NRIs</a> for an overview of the succession laws and FEMA rules that may apply to you.</p>
  </div>
</section>

<?php service_page_close(['title-verification', 'property-disputes', 'succession-partition'], 'Living Abroad? Let Us Handle It in Chennai.'); ?>
