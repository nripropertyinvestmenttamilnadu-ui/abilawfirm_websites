<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('criminal-defence-bail',
  'Criminal Lawyers in Chennai | Anticipatory & Regular Bail | ABI LAW FIRM',
  'Criminal defence lawyers in Chennai: anticipatory bail, regular bail, quash petitions, cheating and forgery cases, cyber crime, domestic violence and criminal trial defence. Urgent help available.',
  'Criminal Defence &amp; Bail',
  'Criminal Defence &amp; <span class="gold">Bail Lawyers</span> in Chennai',
  'Facing an FIR, a complaint or the risk of arrest? Speed matters. We review your case quickly, file for anticipatory or regular bail, and build a strong defence from investigation through to trial.',
  ['Anticipatory Bail', 'Regular Bail', 'Quash Petitions', 'Cheating & Forgery', 'Cyber Crime', 'Trial Defence'],
  'Criminal Case / Bail');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Handle</div>
    <h2 class="sec-title">Criminal Matters We Take Up</h2>
    <p class="sec-sub">We act for the accused and for complainants. For urgent bail matters, please call us directly on <a class="gold" href="tel:<?= PHONE ?>"><?= PHONE_SHOW ?></a>.</p>

    <div class="svc-grid">
      <?= block('Bail', ticks([
        '<b>Anticipatory bail</b> when you fear arrest',
        '<b>Regular bail</b> after arrest',
        'Bail before Sessions Courts and the Madras High Court',
        'Modification and cancellation of bail conditions',
      ])) ?>
      <?= block('Defence &amp; Complaints', ticks([
        'Cheating, fraud and forgery cases',
        'Property-related criminal complaints',
        'Domestic violence and dowry-related cases',
        'Cyber crime, online harassment and defamation',
        'White-collar offences: embezzlement and financial fraud',
        'Cheque bounce cases (Section 138 NI Act)',
        'Filing police complaints and private complaints',
        'Quash petitions against false FIRs',
      ])) ?>
      <?= block('How We Defend You', steps([
        ['Immediate Review', 'We study the FIR or complaint and advise you on your rights.'],
        ['Protection', 'We seek anticipatory or regular bail without delay.'],
        ['Investigation Stage', 'We guide you through police enquiry and protect against harassment.'],
        ['Trial', 'We examine the evidence, cross-examine witnesses and argue your case.'],
      ]), true) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Criminal Case Questions</h2>
    <?= faq([
      ['Can I apply for anticipatory bail before an FIR is registered?', 'Yes. If you reasonably fear arrest for a non-bailable offence, you can apply for anticipatory bail even before an FIR is filed.'],
      ['What should I do if the police call me for enquiry?', 'Speak to a lawyer before you go. We will advise you on your rights and, if needed, seek protection from arrest.'],
      ['Someone has filed a false case against me. What can I do?', 'Depending on the facts, we can seek bail, file a quash petition in the High Court, and defend you at trial. False complaints can also lead to action against the complainant.'],
      ['What evidence matters in a criminal case?', 'Documents, witness statements, electronic records such as CCTV footage and messages, and forensic reports. Preserve everything you have and share it with us.'],
      ['Can NRIs get help with criminal cases in India?', 'Yes. We can act for you, apply for anticipatory bail and represent you, coordinating with you while you are abroad.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['high-court', 'divorce-family-law', 'money-recovery-banking'], 'Need Urgent Bail Help? Call Us Now.'); ?>
