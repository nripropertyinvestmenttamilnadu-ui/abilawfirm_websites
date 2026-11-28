<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('property-registration',
  'Property Registration & Sale Deed Lawyers in Chennai | ABI LAW FIRM',
  'Sale deed, gift, settlement and partition deed drafting and registration in Chennai. Stamp duty guidance, Sub-Registrar process, power of attorney and property purchase support for NRIs.',
  'Document Registration &amp; Property Transactions',
  'Property Registration &amp; Sale Assistance in <span class="gold">Chennai</span>',
  'We draft your deed, work out stamp duty and fees, and handle registration at the Sub-Registrar office from start to finish, so your purchase, sale or family transfer is correct and legally valid.',
  ['Sale Deeds', 'Gift & Settlement', 'Power of Attorney', 'Sale Agreements', 'Stamp Duty', 'Patta Transfer'],
  'Registration Services');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Do</div>
    <h2 class="sec-title">From Agreement to Registered Deed</h2>
    <p class="sec-sub">Whether you are buying, selling or transferring property within the family, mistakes in the deed are expensive to fix later. We get it right the first time.</p>

    <div class="svc-grid">
      <?= block('Documents We Draft &amp; Register', ticks([
        'Sale deeds', 'Gift deeds', 'Settlement deeds', 'Partition deeds', 'Release deeds', 'Wills',
        'General &amp; special power of attorney', 'Sale agreements', 'Lease and rental agreements',
        'Mortgage deeds', 'Rectification &amp; cancellation deeds', 'Joint development agreements',
      ], 'two'), true) ?>
      <?= block('Purchase &amp; Sale Support', ticks([
        '<b>Title verification</b> and due diligence before you pay',
        '<b>Sale agreement</b> drafting and review',
        '<b>Stamp duty &amp; registration</b> fees worked out correctly',
        '<b>Mutation &amp; patta transfer</b> after the sale',
        '<b>Loan documentation</b> for home loans and mortgages',
        '<b>NRI buyers and sellers</b>: end-to-end support, including FEMA-compliant payments',
      ])) ?>
      <?= block('Documents Required', ticks([
        'Parent documents of the property',
        'Latest Encumbrance Certificate and patta',
        'ID and address proof of all parties (Aadhaar, PAN)',
        'Passport-size photographs of all parties',
        'Details of two witnesses with ID proof',
        'Power of attorney, if anyone is signing for another person',
      ]) . '<p style="margin-top:16px">The exact list depends on the type of document. We confirm it with you before the registration date.</p>') ?>
      <?= block('Our Process', steps([
        ['Consultation', 'We understand the transaction and check the property documents.'],
        ['Drafting', 'Our advocates draft the deed and share it with you for review.'],
        ['Stamp Duty &amp; Fees', 'We work out the guideline value, stamp duty and registration fees.'],
        ['Slot Booking', 'We prepare the online application and book your Sub-Registrar appointment.'],
        ['Registration Day', 'We attend with you and see the registration through.'],
        ['Collection', 'We help you collect the registered document and apply for patta transfer.'],
      ]), true) ?>
      <?= block('Why Use an Advocate for Registration', ticks([
        'Deeds drafted correctly, avoiding costly mistakes later',
        'Title checked before you register',
        'Correct stamp duty, so there are no penalties or objections',
        'Smooth handling at the Sub-Registrar office',
        'Clear advice on tax and legal consequences',
        'Help with the patta transfer after registration',
      ], 'two'), true) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Registration Questions</h2>
    <?= faq([
      ['Do all parties need to be present for registration?', 'Usually all executing parties and two witnesses must be present at the Sub-Registrar office. If someone can\'t attend, they can act through a registered power of attorney.'],
      ['How is stamp duty calculated?', 'Stamp duty and registration fees depend on the type of document and the property\'s value, which is generally the guideline value or the deal value, whichever is higher. We\'ll tell you the exact amount for your document.'],
      ['Does a will have to be registered?', 'Registering a will is not compulsory, but it is strongly recommended because it makes the will much harder to challenge later.'],
      ['Can an NRI buy or register property without coming to India?', 'Yes. An NRI can execute a power of attorney abroad, attested as the law requires, so that a trusted person can register the document in India. NRIs can buy residential and commercial property, but not agricultural land, and payments must go through banking channels.'],
      ['What happens if a sale is not registered?', 'An unregistered sale deed does not transfer ownership. Registration is compulsory to complete a sale of immovable property.'],
      ['How do I sell inherited property?', 'You will usually need a legal heir certificate (or probate, if there is a will), a clear title and updated revenue records before selling. We handle each step.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['title-verification', 'wills-estate-planning', 'nri-legal-services']); ?>
