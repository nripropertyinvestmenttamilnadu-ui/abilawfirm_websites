<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('civil-litigation',
  'Civil Lawyers in Chennai | Civil Suits, Injunctions & Appeals | ABI LAW FIRM',
  'Civil litigation lawyers in Chennai: civil suits, injunctions, declarations, specific performance, contract disputes, recovery suits, appeals and execution before Chennai civil courts.',
  'Civil Litigation',
  'Experienced <span class="gold">Civil Lawyers</span> in Chennai',
  'Civil suits, injunctions, contract disputes and appeals, handled by advocates with over 10 years before the City Civil Court, the District Courts and the Madras High Court. We prepare thoroughly, argue firmly and keep you informed.',
  ['Civil Suits', 'Injunctions', 'Specific Performance', 'Contract Disputes', 'Civil Appeals', 'Execution'],
  'Civil Litigation');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Handle</div>
    <h2 class="sec-title">Civil Cases We Take Up</h2>
    <p class="sec-sub">Civil cases are disputes between people or businesses where the remedy is a court order, compensation or performance, not punishment. We always look first for a faster settlement, and go to court firmly when that fails.</p>

    <div class="svc-grid">
      <?= block('Civil Suits', ticks([
        '<b>Declaration &amp; injunction suits</b> to protect your rights and property',
        '<b>Specific performance</b> of sale agreements and contracts',
        '<b>Recovery of money</b>: loans, dues and damages',
        '<b>Partition suits</b> for family property',
        '<b>Cancellation of documents</b> obtained by fraud',
        '<b>Damages</b> for breach of contract or wrongful acts',
      ])) ?>
      <?= block('Contract Disputes', ticks([
        'Breach of contract and non-performance',
        'Agreement and MOU disputes',
        'Builder and contractor disputes',
        'Partnership disputes',
        'Commercial contract litigation',
      ]) . '<p style="margin-top:16px"><a class="gold" href="/practice-areas/arbitration-mediation">Arbitration &amp; commercial disputes →</a></p>') ?>
      <?= block('Our Approach', steps([
        ['Case Assessment', 'We review your documents and tell you honestly how strong your case is.'],
        ['Legal Notice', 'Often a well-drafted notice resolves the matter without a suit.'],
        ['Filing &amp; Interim Relief', 'We file the suit and seek urgent protection such as an injunction.'],
        ['Trial', 'Evidence, cross-examination and arguments, prepared in detail.'],
        ['Decree &amp; Execution', 'We make sure the judgment is actually enforced.'],
      ]), true) ?>
      <?= block('Appeals &amp; Revisions', '<p>If a lower court has ruled against you, we review the judgment and file a first appeal, second appeal or civil revision, including before the Madras High Court.</p><p>One client had fought a civil appeal for over 15 years. After transferring the case to us, it was resolved in 3 months.</p>') ?>
      <?= block('Received a Legal Notice?', '<p>Don\'t ignore it. Failing to reply, or replying carelessly, can weaken your position later. Send it to us and we will draft a strong, measured reply.</p>') ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Civil Case Questions</h2>
    <?= faq([
      ['What is the difference between a civil and a criminal case?', 'Civil cases resolve disputes between individuals or entities, such as property or contract disputes, and lead to orders like injunctions or compensation. Criminal cases concern offences against the state and can lead to fines or imprisonment.'],
      ['How long does a civil case take?', 'It depends on the complexity of the case, the court\'s schedule and whether the parties are willing to settle. We push for interim relief early and use settlement where it helps, so you are protected while the case proceeds.'],
      ['I received a legal notice. What should I do?', 'Contact a lawyer immediately and do not ignore it. We will review the notice and draft a reply that protects your position.'],
      ['Can a seller cancel a sale agreement because prices went up?', 'Generally no. Courts have held that a rise in property prices after the agreement is not, by itself, a ground to refuse specific performance.'],
      ['Can NRIs file or defend civil cases in India?', 'Yes, through a power of attorney if they cannot appear in person.'],
    ]) ?>
    <p class="note-box">Related reading: <a class="gold" href="/insights/effect-of-price-hike-in-sale-agreement">Effect of a price hike on a sale agreement →</a></p>
  </div>
</section>

<?php service_page_close(['property-disputes', 'money-recovery-banking', 'high-court']); ?>
