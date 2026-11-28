<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('wills-estate-planning',
  'Will Drafting, Probate & Trust Lawyers in Chennai | ABI LAW FIRM',
  'Will drafting and registration, probate, trusts and estate planning in Chennai. Protect your family, avoid inheritance disputes and plan succession for property and business, including for NRIs.',
  'Wills, Trusts &amp; Estate Planning',
  'Wills, Trusts &amp; <span class="gold">Estate Planning</span>',
  'A clear, properly executed will is the simplest way to protect your family from disputes. We draft and register wills, set up trusts, obtain probate and plan the smooth transfer of your property and business.',
  ['Will Drafting', 'Will Registration', 'Probate', 'Private Trusts', 'Charitable Trusts', 'Succession Planning'],
  'Wills & Estate Planning');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Do</div>
    <h2 class="sec-title">Secure Your Legacy</h2>
    <p class="sec-sub">Without a will, your assets pass under succession laws that may not match your wishes, and families often end up in court. Good planning prevents that.</p>

    <div class="svc-grid">
      <?= block('Wills', ticks([
        'Drafting wills that comply with Indian law',
        'Registration with the Sub-Registrar',
        'Codicils and revised wills',
        'Guardianship for minor children',
        'Wills for NRIs covering Indian assets',
      ])) ?>
      <?= block('Probate &amp; Execution', ticks([
        'Probate petitions and letters of administration',
        'Guiding executors through asset transfer',
        'Defending or challenging contested wills',
        'Transfer of property and accounts to beneficiaries',
      ])) ?>
      <?= block('Trusts', ticks([
        '<b>Private family trusts</b> to manage wealth for future generations',
        '<b>Public and charitable trusts</b> for education, religion and welfare',
        'Trust deeds drafted and registered',
        'Trustee guidance, compliance and disputes',
        'Modification or winding up of trusts',
      ])) ?>
      <?= block('Estate Planning', ticks([
        'Power of attorney for financial and legal matters',
        'Nominations for bank accounts, insurance and investments',
        'Succession planning for family businesses',
        'Planning to reduce family disputes and tax',
      ])) ?>
      <?= block('A Legally Valid Will Must Have', ticks([
        'The testator\'s full details and sound mind at the time of signing',
        'A clear declaration that it is the last will',
        'Beneficiaries and a description of the assets',
        'An executor to carry out the will',
        'The testator\'s signature, attested by at least two witnesses',
      ]), true) ?>
      <?= block('Documents Required', ticks([
        'Identity proof (Aadhaar, passport)',
        'Details of all assets: property papers, bank and investment details',
        'Names and ID proof of beneficiaries',
        'Guardianship details for minor children',
      ]), true) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Wills &amp; Estate Planning Questions</h2>
    <?= faq([
      ['Is it necessary to register a will?', 'No, but registration is strongly recommended. It adds authenticity and makes the will much harder to challenge.'],
      ['Can I change my will later?', 'Yes. You can change or revoke your will at any time during your lifetime, by a codicil or by making a new will.'],
      ['What happens if someone dies without a will?', 'Their property passes under the applicable succession law, such as the Hindu Succession Act or the Indian Succession Act, which may not reflect their wishes and often leads to disputes.'],
      ['Can an NRI make a will for property in India?', 'Yes. An NRI can make a will covering Indian assets, and it will be executed under Indian law.'],
      ['What is the difference between a will and a trust?', 'A will takes effect only after death. A trust can manage assets during your lifetime and continue after death according to your instructions.'],
      ['Who can be an executor?', 'Any trusted adult: a family member, friend or lawyer who will carry out the will as you intended.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['succession-partition', 'property-registration', 'nri-legal-services'], 'Plan Today. Protect Your Family Tomorrow.'); ?>
