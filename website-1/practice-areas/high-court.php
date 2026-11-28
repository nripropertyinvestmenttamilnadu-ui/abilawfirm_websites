<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('high-court',
  'Madras High Court Advocates | Writ Petitions & Appeals | ABI LAW FIRM',
  'Madras High Court advocates with an office opposite the High Court: writ petitions, civil and criminal revisions, second appeals, quash petitions and bail. Book a consultation.',
  'Madras High Court',
  'Madras High Court <span class="gold">Advocates</span>',
  'Our office is directly opposite the Madras High Court. We file and argue writ petitions, appeals, revisions and quash petitions, and challenge unlawful action by government departments, banks and authorities.',
  ['Writ Petitions', 'Second Appeals', 'Civil Revisions', 'Quash Petitions', 'Bail', 'Government Action'],
  'High Court Matter');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Handle</div>
    <h2 class="sec-title">High Court Matters</h2>
    <p class="sec-sub">The High Court is often where a long-pending dispute is finally resolved, or where an unfair decision by an authority can be corrected quickly.</p>

    <div class="svc-grid">
      <?= block('Writ Petitions', ticks([
        'Against wrongful refusal by the registration department',
        'Revenue, patta and land records matters',
        'Unlawful orders of government authorities and local bodies',
        'Service matters and pension disputes',
        'Directions to authorities to act on pending applications',
        'Matters involving temples, HR&amp;CE and trusts',
      ])) ?>
      <?= block('Appeals, Revisions &amp; Criminal Matters', ticks([
        'Second appeals and first appeals',
        'Civil revision petitions',
        'Criminal revisions and appeals',
        'Quash petitions to set aside false FIRs and complaints',
        'Anticipatory and regular bail',
        'Transfer petitions',
      ])) ?>
      <?= block('A Recent Example', '<p>When a registration office refused to register a client\'s settlement deed, claiming the land was temple property and demanding an NOC from the HR&amp;CE department, we filed a writ petition and obtained directions quickly, and the deed was registered.</p><p>In another matter, a writ petition filed for a community association (Peravai) was decided in a short time.</p>', true) ?>
      <?= block('Our Process', steps([
        ['Review', 'We study the order or action you want to challenge, and the deadlines.'],
        ['Opinion', 'We advise whether the High Court is the right forum, and what relief to seek.'],
        ['Drafting', 'Petition, affidavit and typed set of papers, prepared carefully.'],
        ['Hearing', 'We appear and argue, and seek interim orders where urgent.'],
        ['Compliance', 'We follow up until the authority complies with the order.'],
      ]), true) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">High Court Questions</h2>
    <?= faq([
      ['When should I file a writ petition?', 'When a government authority or public body has acted unlawfully, failed to act, or violated your rights, and there is no other effective remedy. We will tell you whether a writ is the right route.'],
      ['What is a quash petition?', 'A petition to the High Court to cancel an FIR or criminal proceedings that are false, abusive or legally unsustainable.'],
      ['Can a lower court judgment be challenged in the High Court?', 'Yes, through an appeal or revision depending on the type of case and order. Time limits apply, so contact us as soon as you receive the judgment.'],
      ['How quickly can I get an interim order?', 'In urgent matters, interim relief can be sought at the first hearing. We will tell you whether your case qualifies for urgent listing.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['civil-litigation', 'criminal-defence-bail', 'property-disputes']); ?>
