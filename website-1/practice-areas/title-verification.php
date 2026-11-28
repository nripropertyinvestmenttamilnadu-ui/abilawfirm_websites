<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('title-verification',
  'Property Title Verification & Legal Opinion in Chennai | ABI LAW FIRM',
  'Property document verification and legal opinion in Chennai and Tamil Nadu: 30-year title check, EC, patta, DTCP/CMDA approvals. Signed legal opinion for buyers, NRIs and bank loans.',
  'Property Due Diligence',
  'Title Verification &amp; Legal Opinion in <span class="gold">Chennai</span>',
  'Before you buy land, a flat or a house, or pledge property for a loan, our advocates check the complete chain of title and give you a clear written legal opinion, so you know the property is safe to deal with.',
  ['Title Deeds', 'Encumbrance Certificate', 'Patta & Chitta', 'DTCP / CMDA', 'Bank Loan Opinion', 'NRI Buyers'],
  'Title Verification & Legal Opinion');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Check</div>
    <h2 class="sec-title">A Complete Check Before You Commit</h2>
    <p class="sec-sub">Fake documents, undisclosed loans, missing heirs and unapproved layouts are the most common reasons buyers lose money. A proper legal check finds them before you pay.</p>

    <div class="svc-grid">
      <?= block('What We Verify', ticks([
        'Title deeds and the full chain of parent documents',
        'Encumbrance Certificate (EC) for mortgages and other charges',
        'Patta, chitta, adangal and FMB sketch',
        'Seller\'s identity, ownership and right to sell',
        'Legal heirship, succession and partition history',
        'Power of attorney validity, if the sale is through an agent',
        'Layout and building approvals (DTCP / CMDA) and plan sanction',
        'Pending litigation, attachments and court orders',
      ])) ?>
      <?= block('Documents Required', ticks([
        'Copy of the current sale deed or title deed',
        'Parent / link documents for as many years as available',
        'Latest Encumbrance Certificate',
        'Patta, chitta and tax receipts',
        'Approved layout or building plan, if any',
        'Legal heir certificate or death certificate, where applicable',
        'Seller\'s ID proof',
      ]) . '<p style="margin-top:16px">Don\'t have everything? Send us what you have and we\'ll tell you what\'s missing. We can also <a class="gold" href="/practice-areas/nri-legal-services">obtain certified copies for you</a>.</p>') ?>
      <?= block('Our Process', steps([
        ['Share Documents', 'Send copies in person, by email or on WhatsApp.'],
        ['Document Scrutiny', 'Our advocates examine each document and trace the chain of title.'],
        ['Records Check', 'We check the EC, revenue records and approvals, and look for pending cases.'],
        ['Clarifications', 'We list any gaps or defects and explain how they can be fixed.'],
        ['Legal Opinion', 'You receive a signed written opinion on whether the title is clear and marketable.'],
      ]), true) ?>
      <?= block('Who Needs It', ticks([
        'Buyers of land, plots, flats and independent houses',
        'NRIs buying property in Chennai and Tamil Nadu',
        'Banks and borrowers needing a legal opinion for a home loan or loan against property',
        'Families dealing with ancestral or inherited property',
        'Builders and developers entering joint development',
      ])) ?>
      <?= block('What You Receive', ticks([
        'A signed, written legal opinion on the title',
        'A list of documents examined',
        'Any defects found and the steps to cure them',
        'Advice on the conditions to put in your sale agreement',
        'A consultation with the advocate to go through the findings',
      ])) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Title Verification Questions</h2>
    <?= faq([
      ['How many years of documents should be verified?', 'We usually trace the title for at least 30 years, and further back where the history needs it, so that ownership is traced back to a clear source.'],
      ['How long does title verification take?', 'Most verifications take about 7 to 15 working days, depending on how many documents there are and how complex the history is. We\'ll confirm a timeline once we\'ve seen your documents.'],
      ['Can you verify property if I live abroad?', 'Yes. You can send documents by email or WhatsApp, and we\'ll share the legal opinion digitally and go through it with you by phone or video call.'],
      ['Is a bank\'s legal opinion enough?', 'A bank\'s opinion protects the bank\'s loan. An independent opinion from your own advocate protects you as the buyer and covers what matters to you.'],
      ['What if a document looks forged?', 'Stop the transaction and let us examine it. We compare it with the registered copy at the Sub-Registrar office and advise on the legal action to take.'],
      ['What are the risks of buying without verification?', 'Disputed ownership, fraudulent sales, hidden loans, unpaid taxes, unapproved construction, and difficulty getting a loan or reselling later.'],
    ]) ?>
    <div class="svc-cta">
      <a href="#contact" class="btn btn-gold">Get Your Title Verified</a>
      <a href="tel:<?= PHONE ?>" class="btn btn-outline"><?= icon('phone') ?>Call <?= PHONE_SHOW ?></a>
    </div>
  </div>
</section>

<?php service_page_close(['property-registration', 'property-disputes', 'nri-legal-services'], 'Buying Property? Get It Checked First.'); ?>
