<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('arbitration-mediation',
  'Arbitration & Commercial Dispute Lawyers in Chennai | ABI LAW FIRM',
  'Arbitration, mediation and commercial dispute lawyers in Chennai: contract and partnership disputes, Section 9 interim relief, Section 34 challenges and enforcement of arbitral awards.',
  'Arbitration &amp; Commercial Disputes',
  'Arbitration &amp; <span class="gold">Commercial Disputes</span>',
  'Resolve business disputes faster and privately. We represent clients in arbitration and mediation, seek urgent interim relief, and challenge or enforce awards, going to court firmly when needed.',
  ['Commercial Arbitration', 'Mediation', 'Section 9 Relief', 'Section 34 Challenge', 'Award Enforcement', 'Partnership Disputes'],
  'Arbitration');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Handle</div>
    <h2 class="sec-title">Resolving Business Conflicts</h2>
    <p class="sec-sub">Commercial disputes damage cash flow and relationships. We pick the route that protects your interests with the least disruption: negotiation, mediation, arbitration or litigation.</p>

    <div class="svc-grid">
      <?= block('Commercial Disputes', ticks([
        'Breach of contract and non-payment',
        'Partnership and shareholder disputes',
        'Franchise and distribution disputes',
        'Construction and project disputes',
        'Commercial lease and property disputes',
        'Intellectual property disputes',
      ])) ?>
      <?= block('Arbitration Services', ticks([
        'Representation in domestic and institutional arbitration',
        'Interim relief under Section 9',
        'Appointment of arbitrators',
        'Challenging awards under Section 34',
        'Enforcement of domestic and foreign awards',
      ])) ?>
      <?= block('Mediation', '<p>A neutral mediator helps both sides reach a settlement they agree on. It is confidential, quick and preserves relationships, and works well for business, property and family disputes.</p>') ?>
      <?= block('Why Arbitration and Mediation', ticks([
        '<b>Speed</b>: usually much faster than court',
        '<b>Confidentiality</b>: proceedings remain private',
        '<b>Cost</b>: lower overall legal costs',
        '<b>Control</b>: parties shape the process',
        '<b>Relationships</b>: preserved wherever possible',
      ])) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Arbitration Questions</h2>
    <?= faq([
      ['What is the difference between arbitration and mediation?', 'In arbitration, the arbitrator decides the dispute and the award is binding. In mediation, a mediator helps the parties negotiate, but does not impose a decision.'],
      ['Is an arbitration award final?', 'Yes. Awards are binding and enforceable like a court decree, and can be challenged only on limited grounds under Section 34 of the Arbitration and Conciliation Act, 1996.'],
      ['How long does arbitration take?', 'It depends on the case, but it is generally much faster than court litigation, often concluding within months.'],
      ['Can I get urgent relief before the arbitration starts?', 'Yes. The court can grant interim measures under Section 9, such as an injunction or securing the amount in dispute.'],
      ['Can a foreign arbitration award be enforced in India?', 'Yes, under the New York Convention, subject to the conditions in the Act.'],
      ['Can NRIs use arbitration for disputes in India?', 'Yes, and we assist with cross-border disputes.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['corporate-commercial', 'civil-litigation', 'money-recovery-banking']); ?>
