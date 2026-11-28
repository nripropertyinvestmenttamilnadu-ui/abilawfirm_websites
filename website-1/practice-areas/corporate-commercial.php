<?php
require __DIR__ . '/../inc/bootstrap.php';
service_page_open('corporate-commercial',
  'Corporate & Commercial Lawyers in Chennai | Contracts, Company & IP | ABI LAW FIRM',
  'Business lawyers in Chennai: company and LLP formation, contract drafting and review, corporate compliance, trademarks and IP, banking and lending documentation, and commercial real estate.',
  'Business, Commercial &amp; Corporate',
  'Your Legal Partner for <span class="gold">Business</span>',
  'Business decisions carry legal and financial consequences. We give businesses, developers, lenders and start-ups practical legal support that protects revenue, reduces risk and keeps operations running smoothly.',
  ['Company Formation', 'Contracts', 'Compliance', 'Trademarks & IP', 'Banking & Lending', 'Commercial Real Estate'],
  'Corporate & Contracts');
?>

<section class="svc">
  <div class="wrap">
    <div class="eyebrow">Our Key Practice Areas</div>
    <h2 class="sec-title">Commercially Practical Legal Advice</h2>
    <p class="sec-sub">We align legal advice with your commercial goals, identify risk before it escalates, and act decisively when your financial interests are at stake.</p>

    <div class="svc-grid">
      <?= block('Business Formation &amp; Structuring', ticks([
        'Private limited company, LLP, OPC and partnership firms',
        'Name approval, MOA and AOA, DIN and DSC',
        'PAN, TAN and GST registration',
        'Shareholder and partnership agreements',
        'NRI and foreign investment set-up (FDI / RBI rules)',
      ])) ?>
      <?= block('Contracts &amp; Agreements', ticks([
        'Vendor, supply and distribution agreements',
        'Joint venture and franchise agreements',
        'Employment contracts, NDAs and non-competes',
        'Service and consultancy agreements',
        'Software licensing and technology contracts',
        'Contract review and negotiation support',
      ])) ?>
      <?= block('Corporate Compliance &amp; Advisory', ticks([
        'Annual ROC filings and statutory registers',
        'Board and shareholder meetings and resolutions',
        'Corporate governance policies',
        'Preventive legal audits',
        'Mergers, acquisitions and due diligence',
        'Data protection and technology law compliance',
      ])) ?>
      <?= block('Intellectual Property', ticks([
        'Trademark search, registration and renewal',
        'Copyright registration and protection',
        'Design registration',
        'Licensing and assignment of IP',
        'Action against infringement: notices and suits',
      ])) ?>
      <?= block('Banking &amp; Financial Services Advisory', ticks([
        'Loan documentation and security structuring',
        'Due diligence and title opinion on mortgaged property',
        'Recovery proceedings and enforcement actions',
        'Commercial lending documentation',
        'Regulatory compliance advisory for NBFCs and lenders',
      ])) ?>
      <?= block('Commercial Real Estate &amp; Leasing', ticks([
        'Commercial acquisitions and leasing',
        'Title search and due diligence',
        'Development and joint development agreements',
        'Mortgage documentation',
      ])) ?>
      <?= block('Industries We Serve', ticks([
        'Banks, NBFCs and lending institutions', 'Real estate and construction', 'Developers and property investors',
        'Small and medium enterprises', 'Manufacturing and industrial units', 'Traders and distributors', 'Start-ups and growing companies',
      ], 'two'), true) ?>
    </div>
  </div>
</section>

<section class="svc alt">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Business Law Questions</h2>
    <?= faq([
      ['What do I need to start a private limited company?', 'At least two directors and two shareholders, with at least one director resident in India, and a registered office address in India.'],
      ['Can an NRI or foreign national start a company in India?', 'Yes, subject to FDI rules, typically as a private limited company with at least one resident Indian director.'],
      ['Private limited company or LLP: which is better?', 'A private limited company is better for raising investment; an LLP is simpler to run with fewer compliance requirements. We recommend a structure based on your plans.'],
      ['Can I use a template for my business contracts?', 'Templates are a starting point but rarely fit your business. A tailored contract protects you on payment, liability, termination and disputes.'],
      ['Are verbal agreements binding?', 'They can be, but they are hard to prove. Written contracts give far stronger protection.'],
      ['How long does trademark registration take?', 'It typically takes many months, but you can use the ™ symbol as soon as the application is filed.'],
    ]) ?>
  </div>
</section>

<?php service_page_close(['arbitration-mediation', 'tax-gst', 'money-recovery-banking'], 'Protect Your Business. Expert Guidance Awaits.'); ?>
