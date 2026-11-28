<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('succession-partition',
  'Legal Heir, Succession Certificate & Partition Lawyers in Chennai | ABI LAW FIRM',
  'Legal heir certificates, succession certificates, partition suits, partition deeds and family settlements in Chennai and Tamil Nadu. Ancestral property disputes and NRI heirs supported.',
  'Succession, Heirship &amp; Partition',
  'Legal Heirship, Succession &amp; <span class="gold">Partition</span>',
  'Losing a family member is hard enough. We obtain legal heir and succession certificates, settle family property fairly through partition deeds and settlements, and file partition suits when agreement is not possible.',
  ['Legal Heir Certificate', 'Succession Certificate', 'Partition Suits', 'Partition Deeds', 'Family Settlement', 'Ancestral Property'],
  'Succession / Partition');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Handle</div>
    <h2 class="sec-title">Inheritance, Done Properly</h2>
    <p class="sec-sub">Which certificate you need, who the heirs are and how property is shared depends on the type of asset, whether there is a will and which personal law applies. We make it clear and handle the process.</p>

    <div class="svc-grid">
      <?= block('Succession Certificate', '<p>Issued by a civil court, it allows heirs to claim <b>movable assets</b> such as bank deposits, shares, bonds and other securities of a person who died without a will.</p>' . ticks([
        'Petition drafted and filed in the right court',
        'Public notice and handling of objections',
        'Representation until the certificate is issued',
      ])) ?>
      <?= block('Legal Heir Certificate', '<p>Issued by the revenue authorities (Tahsildar), it identifies the legal heirs and is used for <b>pensions, insurance, transfer of patta and property records</b> and government benefits.</p>' . ticks([
        'Application and supporting documents',
        'Follow-up with the revenue office',
        'Help when the application is refused or disputed',
      ])) ?>
      <?= block('Partition &amp; Family Settlement', ticks([
        '<b>Partition deeds</b>: when all family members agree on shares',
        '<b>Family settlement agreements</b>: to resolve disputes without court',
        '<b>Release / relinquishment deeds</b>: when an heir gives up their share',
        '<b>Settlement and gift deeds</b> within the family',
        '<b>Partition suits</b>: when agreement is not possible',
        '<b>Daughters\' equal coparcenary rights</b> in ancestral property',
      ]), true) ?>
      <?= block('The Partition Process', steps([
        ['Assess the Property', 'Ancestral or self-acquired, and who the legal heirs are.'],
        ['Draft Documents', 'Partition deed, settlement or release deeds as needed.'],
        ['Negotiate', 'We encourage a fair agreement to avoid long litigation.'],
        ['Partition Suit', 'If there is no agreement, we file a suit for partition.'],
        ['Register', 'Deeds are registered and revenue records updated.'],
      ]), true) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Succession &amp; Partition Questions</h2>
    <?= faq([
      ['What is the difference between a legal heir certificate and a succession certificate?', 'A legal heir certificate identifies the heirs and is used for pensions, insurance and property records. A succession certificate, issued by a court, authorises heirs to collect movable assets like bank deposits and shares.'],
      ['Can I withdraw a deceased person\'s bank money with a legal heir certificate?', 'For larger amounts, banks usually ask for a succession certificate (or probate, where there is a will). Some banks settle small amounts with indemnities. We will tell you what your bank requires.'],
      ['How long does a succession certificate take?', 'Typically several months, depending on the court and whether anyone objects during the public notice period.'],
      ['Do daughters have a share in ancestral property?', 'Yes. Since the Hindu Succession (Amendment) Act, 2005, daughters are coparceners with the same rights as sons in ancestral (coparcenary) property.'],
      ['Can a family settlement be challenged later?', 'Only in limited situations, such as fraud, coercion or misrepresentation. A properly drafted and registered settlement is usually binding.'],
      ['How long does a partition suit take?', 'It depends on the number of parties and properties and whether the shares are disputed. A negotiated partition deed is always much faster.'],
    ]) ?>
    <p class="note-box">Related reading: <a class="gold" href="/insights/grandsons-property-rights-grandfather">Grandson's rights in grandfather's property →</a> · <a class="gold" href="/insights/dowry-daughter-rights-partition-suits">Dowry and daughters' rights in partition →</a> · <a class="gold" href="/insights/hindu-daughter-inheritance-rights-after-conversion">Inheritance after conversion →</a></p>
  </div>
</section>

<?php service_page_close(['wills-estate-planning', 'property-disputes', 'property-registration']); ?>
