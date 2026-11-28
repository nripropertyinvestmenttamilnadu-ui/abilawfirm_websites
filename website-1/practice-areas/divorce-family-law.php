<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('divorce-family-law',
  'Divorce Lawyers in Chennai | Family Court Lawyers | ABI LAW FIRM',
  'Divorce and family lawyers in Chennai led by a female advocate with 10+ years in Chennai Family Courts: mutual and contested divorce, child custody, maintenance, domestic violence and adoption.',
  'Divorce &amp; Family Law',
  'Divorce &amp; Family Court <span class="gold">Lawyers in Chennai</span>',
  'Experienced, confidential guidance from a female divorce lawyer with over 10 years in Chennai Family Courts: mutual consent and contested divorce, child custody, alimony, maintenance and domestic violence cases.',
  ['Mutual Divorce', 'Contested Divorce', 'Child Custody', 'Maintenance & Alimony', 'Domestic Violence', 'Adoption'],
  'Divorce & Family Law');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">How We Help</div>
    <h2 class="sec-title">Guiding You Through a Difficult Time</h2>
    <p class="sec-sub">Family matters are deeply personal. Advocate Abirami Radhakrishnan and her team listen to your side, explain your options honestly and represent you with sensitivity, discretion and determination.</p>

    <div class="svc-grid">
      <?= block('Family Law Services', ticks([
        '<b>Divorce</b>: mutual consent and contested, from petition to final decree',
        '<b>Child custody &amp; visitation</b>: with your child\'s welfare at the centre',
        '<b>Maintenance &amp; alimony</b>: interim and permanent, for spouse and children',
        '<b>Domestic violence</b>: protection, residence and monetary relief',
        '<b>Restitution of conjugal rights</b> and judicial separation',
        '<b>Adoption</b>: documentation and court procedure',
        '<b>NRI marriage registration</b> and divorce for NRIs',
        '<b>Family Court matters</b> of every kind',
      ]), true) ?>
      <?= block('Mutual Consent Divorce', '<p>When both spouses agree, a joint petition is filed after living separately for at least one year. The terms on maintenance, custody and property are settled between you, and the court can grant the decree after the statutory period, which may be waived in suitable cases.</p>') ?>
      <?= block('Contested Divorce', '<p>When one spouse does not agree, divorce can be sought on grounds such as cruelty, desertion or adultery. We gather evidence, protect your rights to maintenance and custody along the way, and represent you through trial.</p>') ?>
      <?= block('Our Process', steps([
        ['Confidential Consultation', 'We listen to your situation and explain your options.'],
        ['Strategy', 'We advise on the right petition, interim relief and documents needed.'],
        ['Filing', 'Petitions and applications are drafted and filed in the Family Court.'],
        ['Mediation &amp; Hearings', 'We represent you in counselling, mediation and every hearing.'],
        ['Decree &amp; Enforcement', 'We make sure orders on maintenance and custody are followed.'],
      ]), true) ?>
      <?= block('Why Clients Choose Us', ticks([
        'Experienced female divorce lawyer',
        'Over 10 years in Chennai Family Courts',
        'Strict confidentiality',
        'Affordable, transparent fees',
        'Personal, empathetic attention',
      ])) ?>
      <?= block('Client Story', '<p>“After 10 years of suffering, I approached this firm for my divorce. My husband was unwilling to provide maintenance, but Mrs. Abirami fought hard for me. In just 8 months, they won the case, ensuring the support I needed for myself and my child.”</p><p><b>Karthika Gunasekaran</b></p>') ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Divorce &amp; Family Law Questions</h2>
    <?= faq([
      ['How long does a mutual consent divorce take?', 'After filing, the law provides a waiting period before the final motion, which courts can waive in suitable cases. Overall, a mutual divorce is much faster than a contested one. We\'ll give you a realistic timeline for your case.'],
      ['Who gets custody of the children?', 'Custody is decided on the welfare of the child. The court considers the child\'s age, needs, schooling and each parent\'s situation. The other parent usually gets visitation rights.'],
      ['Can I claim maintenance before the divorce is final?', 'Yes. You can apply for interim maintenance and litigation expenses while the case is pending.'],
      ['Can I get alimony if my marriage is declared void?', 'The Supreme Court has held that permanent alimony and maintenance under Section 25 of the Hindu Marriage Act can be claimed even when the marriage is declared void.'],
      ['Will my matter be kept confidential?', 'Yes. Everything you share with us is kept strictly confidential, and family court proceedings are generally held in private.'],
      ['I live abroad. Can I get divorced in India?', 'Yes. Much of the process can be handled through a power of attorney, with appearances by video conference where the court permits.'],
    ]) ?>
    <p class="note-box">Related reading: <a class="gold" href="/insights/permanent-alimony-maintenance-section-25-hma-void-marriage">Permanent alimony in void marriages →</a> · <a class="gold" href="/insights/forcing-husband-separate-parents-divorce">Forcing a husband to leave his parents →</a></p>
  </div>
</section>

<?php service_page_close(['succession-partition', 'criminal-defence-bail', 'wills-estate-planning'], 'Don\'t Face Family Legal Matters Alone'); ?>
