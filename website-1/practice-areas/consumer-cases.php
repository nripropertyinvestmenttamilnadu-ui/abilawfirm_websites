<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('consumer-cases',
  'Consumer Court Lawyers in Chennai | Consumer Complaints | ABI LAW FIRM',
  'Consumer court lawyers in Chennai: complaints for defective products, deficient services, insurance claim rejection, builder delays, e-commerce and banking disputes under the Consumer Protection Act, 2019.',
  'Consumer Protection',
  'Consumer Court <span class="gold">Lawyers</span> in Chennai',
  'Defective product, poor service, refund refused, insurance claim rejected or a flat not delivered on time? We draft strong complaints and represent you before the Consumer Commissions to get you a refund and compensation.',
  ['Defective Products', 'Service Deficiency', 'Insurance Claims', 'Builder Delays', 'E-commerce', 'Refunds'],
  'Consumer Complaint');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Handle</div>
    <h2 class="sec-title">Consumer Complaints We File</h2>
    <p class="sec-sub">The Consumer Protection Act, 2019 gives you the right to safety, information, choice and fair redressal. We make sure that right is enforced.</p>

    <div class="svc-grid">
      <?= block('Common Consumer Disputes', ticks([
        '<b>Defective products</b>: vehicles, electronics, appliances',
        '<b>Deficiency in service</b>: banks, hospitals, telecom, travel, education',
        '<b>Insurance</b>: rejection of genuine claims',
        '<b>Real estate</b>: delayed possession, poor construction, hidden charges',
        '<b>E-commerce</b>: non-delivery, refunds and online fraud',
        '<b>Unfair trade practices</b> and misleading advertisements',
        '<b>Online courses &amp; platforms</b> refusing refunds',
      ])) ?>
      <?= block('Where Complaints Are Filed', '<p>Consumer complaints are filed before the Consumer Disputes Redressal Commission at the right level, based on the value paid for the goods or services:</p>' . ticks([
        '<b>District Commission</b>: up to ₹50 lakh',
        '<b>State Commission</b>: above ₹50 lakh and up to ₹2 crore',
        '<b>National Commission</b>: above ₹2 crore',
      ]) . '<p style="margin-top:16px">Complaints can also be filed online through the e-Daakhil portal.</p>') ?>
      <?= block('Our Process', steps([
        ['Review', 'We check your bills, warranty, correspondence and the facts.'],
        ['Legal Notice', 'Many companies settle once they receive a proper legal notice.'],
        ['Complaint', 'We draft and file the complaint with evidence before the right Commission.'],
        ['Hearings', 'We represent you and press for refund, replacement and compensation.'],
      ]), true) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Consumer Case Questions</h2>
    <?= faq([
      ['Is there a time limit to file a consumer complaint?', 'Yes. A complaint must generally be filed within 2 years from the date the problem arose. Delay can be condoned if there are valid reasons.'],
      ['What compensation can I get?', 'Depending on the case: a refund, replacement or repair, compensation for loss and mental agony, and litigation costs.'],
      ['Do I need a lawyer to file a consumer complaint?', 'It is not mandatory, but a well-drafted complaint with proper evidence and arguments greatly improves your chances, especially against large companies.'],
      ['Can NRIs file consumer complaints in India?', 'Yes, for goods or services bought in India, through an authorised representative if they cannot attend.'],
      ['Can I complain against a builder who delayed my flat?', 'Yes. Delay in possession, poor quality construction and hidden charges are common grounds for consumer complaints. RERA may also be an option, and we advise you on the better forum.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['money-recovery-banking', 'civil-litigation', 'property-registration']); ?>
