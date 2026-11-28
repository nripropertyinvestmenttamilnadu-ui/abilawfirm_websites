<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('money-recovery-banking',
  'Money Recovery & Cheque Bounce Lawyers in Chennai | Banking Disputes | ABI LAW FIRM',
  'Recover unpaid loans and dues in Chennai: legal notice, recovery and summary suits, cheque bounce cases under Section 138 NI Act, and disputes with banks, NBFCs and recovery agents.',
  'Money Recovery &amp; Banking Disputes',
  'Money Recovery &amp; <span class="gold">Cheque Bounce</span> Lawyers',
  'Someone owes you money, a cheque has bounced, or a bank is treating you unfairly? We act quickly with a legal notice and, if needed, a recovery suit or cheque bounce complaint to get your money back.',
  ['Legal Notice', 'Recovery Suits', 'Cheque Bounce', 'Hand Loans', 'Bank & NBFC Disputes', 'Recovery Agent Harassment'],
  'Money / Loan Recovery');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Handle</div>
    <h2 class="sec-title">Getting Your Money Back</h2>
    <p class="sec-sub">The right remedy depends on the documents you hold: a promissory note, an agreement, bank transfers, a cheque or messages. We review them and choose the fastest route.</p>

    <div class="svc-grid">
      <?= block('Recovery of Money', ticks([
        'Legal notice demanding payment',
        'Recovery suits for loans and unpaid dues',
        'Summary suits on written contracts and promissory notes',
        'Recovery of business dues and unpaid invoices',
        'Execution of decrees and attachment of assets',
      ])) ?>
      <?= block('Cheque Bounce (Section 138 NI Act)', ticks([
        'Statutory demand notice within the time limit',
        'Criminal complaint for a dishonoured cheque',
        'Defending a cheque bounce case filed against you',
        'Compounding and settlement',
      ]) . '<p style="margin-top:16px">Strict time limits apply from the date the cheque is returned, so contact us as soon as it bounces.</p>') ?>
      <?= block('Disputes With Banks &amp; Financial Institutions', ticks([
        '<b>Loan and mortgage disputes</b>: excessive interest, wrongful foreclosure',
        '<b>Unauthorised transactions</b>, card fraud and hidden charges',
        '<b>Account freezing</b> without due process',
        '<b>Harassment by recovery agents</b>',
        '<b>Insurance and investment</b> mis-selling and claim rejection',
        '<b>Loan restructuring</b> and one-time settlement negotiations',
        'Complaints to the RBI Ombudsman, consumer and civil courts',
      ], 'two'), true) ?>
      <?= block('For Banks, NBFCs &amp; Lenders', '<p>We also advise lenders on loan documentation, security creation, due diligence on mortgaged property and recovery proceedings.</p><p><a class="gold" href="/practice-areas/corporate-commercial">Corporate &amp; commercial services →</a></p>', true) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Recovery &amp; Banking Questions</h2>
    <?= faq([
      ['Someone owes me money. What is the first step?', 'Usually a legal notice. Many debtors pay once they receive a formal notice from an advocate. If they don\'t, we file a recovery suit, summary suit or cheque bounce complaint, depending on the documents you have.'],
      ['I lent money without any written agreement. Can I still recover it?', 'Possibly. Bank transfer records, messages, emails and witnesses can all help prove the loan. Bring whatever evidence you have and we\'ll assess it.'],
      ['My cheque bounced due to insufficient funds. What can I do?', 'The payee can send a demand notice and, if payment is not made within the time allowed, file a criminal complaint under Section 138 of the Negotiable Instruments Act.'],
      ['Can I challenge my bank for freezing my account?', 'Yes. If the account was frozen without due process or valid reason, we can send a legal notice and seek relief from the court or the RBI Ombudsman.'],
      ['Can NRIs handle banking disputes without coming to India?', 'Yes, through a power of attorney holder or legal representative.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['civil-litigation', 'consumer-cases', 'criminal-defence-bail']); ?>
