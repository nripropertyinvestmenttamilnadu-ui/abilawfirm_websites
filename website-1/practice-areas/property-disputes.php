<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('property-disputes',
  'Property Dispute Lawyers in Chennai | Land & Partition Cases | ABI LAW FIRM',
  'Property and land dispute lawyers in Chennai: title and possession suits, partition, encroachment, fraudulent deed cancellation and tenant disputes. NRI cases handled through POA.',
  'Property &amp; Land Disputes',
  'Property Dispute Lawyers in <span class="gold">Chennai</span>',
  'Ownership, possession, partition, encroachment or a forged deed: we examine your documents, explain your real options and take your property dispute through negotiation or court, all the way to execution.',
  ['Title Disputes', 'Possession Suits', 'Partition', 'Encroachment', 'Fraudulent Deeds', 'NRI Property'],
  'Property / Land Dispute');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">How We Help</div>
    <h2 class="sec-title">Protecting Your Property Rights</h2>
    <p class="sec-sub">Property disputes are rarely only about law. They involve family, money and years of history. We start by tracing the documents, then choose the remedy that resolves the dispute fastest: a legal notice, mediation, a suit for injunction or declaration, or a partition suit.</p>

    <div class="svc-grid">
      <?= block('Disputes We Handle', ticks([
        '<b>Ownership &amp; title disputes</b>: competing claims, title fraud and unauthorised transfers',
        '<b>Possession &amp; injunction suits</b>: protecting you from illegal dispossession',
        '<b>Partition of family property</b>: ancestral and joint family property',
        '<b>Encroachment &amp; boundary disputes</b>: with survey and FMB records',
        '<b>Fraudulent or forged deeds</b>: suits to cancel and set aside',
        '<b>Succession &amp; inheritance conflicts</b>: contested wills and heirship',
        '<b>Builder &amp; developer disputes</b>: joint development and delays',
        '<b>Unauthorised construction</b> on your land',
      ])) ?>
      <?= block('Remedies Available', ticks([
        'Legal notice and reply',
        'Suit for declaration of title and recovery of possession',
        'Permanent and temporary injunction',
        'Suit for partition and separate possession',
        'Suit to cancel a fraudulent sale or settlement deed',
        'Specific performance of a sale agreement',
        'Mediation and family settlement',
        'Appeals and execution of decrees',
      ])) ?>
      <?= block('Our Process', steps([
        ['Document Review', 'We study your sale deeds, parent documents, patta, EC and any court papers.'],
        ['Records Check', 'We obtain certified copies, revenue records and survey details where needed.'],
        ['Strategy', 'We explain the strongest remedy, the likely timeline and the cost.'],
        ['Notice or Mediation', 'Where it can work, we try to settle quickly without a long trial.'],
        ['Court Action', 'We file and argue your case, and see the decree through to execution.'],
      ]), true) ?>
      <?= block('Act Quickly: Limitation Periods', '<p>Many property remedies have strict time limits. For example, a suit to cancel a fraudulent deed must generally be filed within three years of when you came to know of it. Delay can weaken even a strong case, so get advice as soon as you find a problem.</p><p><a class="gold" href="/insights/fraudulent-property-deed-legal-remedies">Read: Fraudulent property deeds and the 3-year rule →</a></p>') ?>
      <?= block('NRIs With Property Disputes', '<p>You don\'t need to travel to India. Through a power of attorney we can negotiate, file and conduct your case, with regular updates by WhatsApp and email and video consultations whenever you need them.</p><p><a class="gold" href="/practice-areas/nri-legal-services">NRI Legal Services →</a></p>') ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Property Dispute Questions</h2>
    <?= faq([
      ['How long does a property dispute take to resolve?', 'It depends on the dispute and the remedy. A settlement through notice or mediation can take a few months, while a contested civil suit can take considerably longer. We focus on interim protection (such as an injunction) early, so your property is safe while the case proceeds.'],
      ['My property was sold by someone else using forged documents. What can I do?', 'You can file a suit to cancel the fraudulent deed and recover possession, and also lodge a criminal complaint for forgery and cheating. Act quickly, because the limitation period generally runs from the date you came to know of the fraud.'],
      ['Can I handle a property dispute while living abroad?', 'Yes. You can appoint a trusted person or our firm\'s nominee through a power of attorney, and we conduct the case on your behalf.'],
      ['What should I do if someone encroaches on my land?', 'Do not wait. We obtain the FMB sketch and survey records, send a legal notice, and if needed file a suit for injunction and removal of the encroachment.'],
      ['Which documents do I need?', 'Your sale deed and parent documents, patta, Encumbrance Certificate, tax receipts and any notices or court papers. If some are missing, we can obtain certified copies.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['title-verification', 'succession-partition', 'civil-litigation']); ?>
