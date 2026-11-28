<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('landlord-tenant',
  'Landlord & Tenant Dispute Lawyers in Chennai | Eviction & Rent | ABI LAW FIRM',
  'Landlord and tenant lawyers in Chennai: eviction, rent arrears, security deposit, lease violations and rental agreement drafting under Tamil Nadu tenancy law. NRI landlords supported remotely.',
  'Landlord &amp; Tenant',
  'Landlord &amp; Tenant <span class="gold">Dispute Lawyers</span>',
  'Tenant not paying or refusing to vacate? Landlord holding back your deposit? We resolve rental disputes through notice and negotiation where possible, and through the Rent Court when necessary.',
  ['Eviction', 'Rent Arrears', 'Security Deposit', 'Lease Violations', 'Rental Agreements', 'NRI Landlords'],
  'Landlord / Tenant Dispute');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">What We Handle</div>
    <h2 class="sec-title">Rental Disputes, Resolved</h2>
    <p class="sec-sub">We act for both landlords and tenants. Rental disputes in Tamil Nadu are governed by the Tamil Nadu Regulation of Rights and Responsibilities of Landlords and Tenants Act, 2017, which requires written and registered tenancy agreements.</p>

    <div class="svc-grid">
      <?= block('For Landlords', ticks([
        'Eviction of defaulting or overstaying tenants',
        'Recovery of unpaid rent and damages',
        'Unauthorised subletting and misuse of property',
        'Tenant verification and police intimation',
        'Rent revision and agreement renewal',
        'Managing rented property for NRI owners',
      ])) ?>
      <?= block('For Tenants', ticks([
        'Recovery of security deposit',
        'Protection against unlawful eviction',
        'Disputes over repairs and maintenance',
        'Challenging unreasonable rent increases',
        'Disputes over termination of the lease',
      ])) ?>
      <?= block('Our Process', steps([
        ['Assessment', 'We review the agreement, payments and correspondence.'],
        ['Communication', 'We write to the other side on your behalf to clarify obligations.'],
        ['Negotiation', 'We aim for a fair settlement and a clear exit or renewal.'],
        ['Rent Court', 'If needed, we file or defend proceedings and enforce the order.'],
      ]), true) ?>
      <?= block('Prevent Disputes With a Proper Agreement', '<p>Most rental disputes start with a vague or unregistered agreement. We draft clear lease and rental agreements covering rent, deposit, maintenance, notice period and exit, and get them registered as the law requires.</p>', true) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Landlord &amp; Tenant Questions</h2>
    <?= faq([
      ['Can a landlord evict a tenant without notice?', 'No. The landlord must follow the legal process, including proper notice and, where the tenant does not leave, an order from the Rent Court. Forcible eviction is unlawful.'],
      ['My landlord refuses to return my security deposit. What can I do?', 'We send a legal notice demanding the deposit and, if it is not returned, take legal action for recovery.'],
      ['Is an oral rental agreement valid?', 'Oral arrangements are difficult to prove and in Tamil Nadu tenancy agreements are required to be in writing and registered with the Rent Authority. We can help regularise your arrangement.'],
      ['My tenant refuses to vacate. How long will eviction take?', 'It depends on the grounds and whether the tenant contests. A strong notice often leads to a settlement. If not, we file proceedings before the Rent Court.'],
      ['I live abroad and my tenant has stopped paying. Can you help?', 'Yes. We handle communication with the tenant, legal notices and court proceedings through a power of attorney, and keep you updated.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['property-disputes', 'nri-legal-services', 'civil-litigation']); ?>
