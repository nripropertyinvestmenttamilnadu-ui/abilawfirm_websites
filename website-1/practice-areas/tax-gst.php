<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('tax-gst',
  'Income Tax & GST Lawyers in Chennai | Notices, Appeals & Compliance | ABI LAW FIRM',
  'Income tax and GST legal services in Chennai: replies to notices, reassessment, appeals before CIT(A), ITAT and GST appellate authorities, compliance advisory and NRI tax and DTAA matters.',
  'Tax &amp; GST',
  'Income Tax &amp; <span class="gold">GST Disputes</span>',
  'Received a tax or GST notice? Don\'t ignore it. We prepare careful replies, represent you before tax authorities and appellate forums, and help individuals, businesses and NRIs stay compliant.',
  ['Tax Notices', 'Reassessment', 'GST Disputes', 'Appeals', 'NRI Tax & DTAA', 'Compliance'],
  'Tax & GST');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Handle</div>
    <h2 class="sec-title">Tax Disputes &amp; Compliance</h2>
    <p class="sec-sub">Tax laws change every year. We work with your chartered accountant where needed, and focus on the legal side: notices, disputes, appeals and representation.</p>

    <div class="svc-grid">
      <?= block('Income Tax', ticks([
        'Replies to scrutiny and reassessment notices',
        'Rectification of wrong demands',
        'Appeals before the Commissioner (Appeals) and ITAT',
        'Penalty and interest disputes',
        'Capital gains on property sales',
        'Search, survey and investigation support',
      ])) ?>
      <?= block('GST', ticks([
        'GST registration issues and cancellations',
        'Show cause notices and audits',
        'Input tax credit disputes',
        'Provisional attachment of bank accounts',
        'Appeals before the GST appellate authorities',
        'Compliance advisory for businesses',
      ])) ?>
      <?= block('NRI Tax Matters', ticks([
        'Tax on income and property in India',
        'Double Taxation Avoidance Agreement (DTAA) relief',
        'Tax residency certificates and credits',
        'TDS on property sales by NRIs',
        'Repatriation of sale proceeds under FEMA',
      ])) ?>
      <?= block('Our Approach', steps([
        ['Review', 'We study the notice, the deadlines and your records.'],
        ['Reply', 'A clear, well-supported reply filed on time.'],
        ['Representation', 'We appear before the officer and appellate forums.'],
        ['Resolution', 'We pursue the outcome through appeal or settlement schemes.'],
      ])) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Tax &amp; GST Questions</h2>
    <?= faq([
      ['What should I do if I receive an income tax reassessment notice?', 'Do not ignore it, and note the deadline. Contact us immediately so we can gather supporting documents, file objections and represent you before the Assessing Officer.'],
      ['Can GST authorities freeze my bank account?', 'In certain cases, GST authorities can provisionally attach bank accounts during proceedings. Such action can be challenged, and we can work to have the attachment lifted.'],
      ['How can NRIs avoid double taxation?', 'Through the Double Taxation Avoidance Agreement between India and your country of residence, by claiming relief or credits with a tax residency certificate.'],
      ['I lost my appeal before the Commissioner (Appeals). What now?', 'You can appeal further to the Income Tax Appellate Tribunal (ITAT) and, on questions of law, to the High Court.'],
      ['Are there settlement options for tax disputes?', 'The government periodically introduces dispute resolution and settlement schemes. We advise whether one is available and suitable for your case.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['corporate-commercial', 'nri-legal-services', 'high-court']); ?>
