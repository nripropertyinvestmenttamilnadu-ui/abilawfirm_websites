<?php
/**
 * Registry of practice areas and articles. Used by the menu, footer,
 * practice-areas hub, home page, related links and sitemap.
 * Add a new page here AND create its file.
 */

// icon names refer to the SVG sprite in inc/header.php
$SERVICES = [
  'civil-litigation' => [
    'title' => 'Civil Litigation', 'icon' => 'scale', 'group' => 'Litigation & Disputes',
    'short' => 'Civil suits, injunctions, declarations, specific performance and appeals before Chennai civil courts.',
    'points' => ['Civil suits & defence', 'Injunction & declaration suits', 'Civil appeals & execution'],
  ],
  'property-disputes' => [
    'title' => 'Property & Land Disputes', 'icon' => 'home', 'group' => 'Property',
    'short' => 'Ownership, possession, partition, encroachment and fraudulent deed cases.',
    'points' => ['Title & possession disputes', 'Encroachment & boundary cases', 'Cancellation of fraudulent deeds'],
  ],
  'title-verification' => [
    'title' => 'Title Verification & Legal Opinion', 'icon' => 'doc-check', 'group' => 'Property',
    'short' => 'Complete scrutiny of property documents and a clear written legal opinion before you buy, sell or borrow.',
    'points' => ['30-year chain of title check', 'EC, patta & approval verification', 'Legal opinion for purchase & bank loans'],
  ],
  'property-registration' => [
    'title' => 'Property Registration & Sale', 'icon' => 'register', 'group' => 'Property',
    'short' => 'Drafting and registration of sale, gift, settlement and partition deeds, POAs and agreements.',
    'points' => ['Sale, gift & settlement deeds', 'Power of attorney & agreements', 'Stamp duty & Sub-Registrar process'],
  ],
  'nri-legal-services' => [
    'title' => 'NRI Legal Services', 'icon' => 'globe', 'group' => 'Property',
    'short' => 'Property, documents, disputes and inheritance in Tamil Nadu, handled for you while you live abroad.',
    'points' => ['Property documents retrieved for you', 'Disputes handled through POA', 'Video consultations & updates'],
  ],
  'divorce-family-law' => [
    'title' => 'Divorce & Family Law', 'icon' => 'family', 'group' => 'Family & Succession',
    'short' => 'Mutual and contested divorce, child custody, maintenance, domestic violence and adoption.',
    'points' => ['Mutual & contested divorce', 'Child custody & maintenance', 'Domestic violence protection'],
  ],
  'succession-partition' => [
    'title' => 'Succession, Legal Heirship & Partition', 'icon' => 'tree', 'group' => 'Family & Succession',
    'short' => 'Succession certificates, legal heir certificates, partition suits and family settlements.',
    'points' => ['Succession & legal heir certificates', 'Partition suits & deeds', 'Family settlement agreements'],
  ],
  'wills-estate-planning' => [
    'title' => 'Wills, Trusts & Estate Planning', 'icon' => 'will', 'group' => 'Family & Succession',
    'short' => 'Wills, probate, trusts and estate plans that protect your family and avoid future disputes.',
    'points' => ['Will drafting & registration', 'Probate & letters of administration', 'Private & charitable trusts'],
  ],
  'high-court' => [
    'title' => 'Madras High Court', 'icon' => 'court', 'group' => 'Litigation & Disputes',
    'short' => 'Writ petitions, civil and criminal revisions, appeals and quash petitions before the Madras High Court.',
    'points' => ['Writ petitions', 'Second & civil appeals', 'Quash & revision petitions'],
  ],
  'criminal-defence-bail' => [
    'title' => 'Criminal Defence & Bail', 'icon' => 'shield', 'group' => 'Litigation & Disputes',
    'short' => 'Anticipatory and regular bail, criminal complaints, cheating and forgery cases, and trial defence.',
    'points' => ['Anticipatory & regular bail', 'Criminal trial defence', 'Cheating, forgery & cyber cases'],
  ],
  'consumer-cases' => [
    'title' => 'Consumer Cases', 'icon' => 'bag', 'group' => 'Litigation & Disputes',
    'short' => 'Complaints for defective products, deficient services, refunds, insurance and builder delays.',
    'points' => ['Consumer complaint filing', 'Refund & insurance disputes', 'Builder delay cases'],
  ],
  'money-recovery-banking' => [
    'title' => 'Money Recovery & Banking Disputes', 'icon' => 'wallet', 'group' => 'Litigation & Disputes',
    'short' => 'Recovery of unpaid dues and loans, cheque bounce cases and disputes with banks and lenders.',
    'points' => ['Legal notice & recovery suits', 'Cheque bounce (Sec. 138)', 'Disputes with banks & NBFCs'],
  ],
  'landlord-tenant' => [
    'title' => 'Landlord & Tenant Disputes', 'icon' => 'key', 'group' => 'Property',
    'short' => 'Eviction, rent arrears, deposit and lease disputes for landlords and tenants.',
    'points' => ['Eviction proceedings', 'Rent & deposit recovery', 'Lease drafting & review'],
  ],
  'corporate-commercial' => [
    'title' => 'Corporate & Commercial Law', 'icon' => 'briefcase', 'group' => 'Business',
    'short' => 'Company formation, contracts, compliance, intellectual property and commercial advisory.',
    'points' => ['Company & LLP formation', 'Contract drafting & review', 'Trademarks & IP protection'],
  ],
  'arbitration-mediation' => [
    'title' => 'Arbitration & Commercial Disputes', 'icon' => 'handshake', 'group' => 'Business',
    'short' => 'Arbitration, mediation, Section 9 and 34 petitions and the resolution of commercial disputes.',
    'points' => ['Commercial arbitration', 'Mediation & settlement', 'Award challenge & enforcement'],
  ],
  'tax-gst' => [
    'title' => 'Tax & GST Disputes', 'icon' => 'percent', 'group' => 'Business',
    'short' => 'Income tax and GST notices, appeals and compliance for individuals, businesses and NRIs.',
    'points' => ['Replies to tax & GST notices', 'Appeals before tax authorities', 'NRI tax & DTAA matters'],
  ],
];

$SERVICE_GROUPS = ['Property', 'Litigation & Disputes', 'Family & Succession', 'Business'];

$ARTICLES = [
  'fraudulent-property-deed-legal-remedies' => [
    'title' => 'Fraudulent Property Deed: Legal Consequences & Remedies',
    'cat' => 'Property', 'date' => '', 'service' => 'property-disputes',
    'excerpt' => 'Why the three-year limitation period matters when you discover a forged or fraudulent deed on your property, and what to do first.',
  ],
  'effect-of-price-hike-in-sale-agreement' => [
    'title' => 'Effect of a Price Hike on a Sale Agreement',
    'cat' => 'Property', 'date' => '', 'service' => 'civil-litigation',
    'excerpt' => 'Can a seller back out of a sale agreement because the property value went up? What the courts say about specific performance.',
  ],
  'grandsons-property-rights-grandfather' => [
    'title' => 'Does a Grandson Have Rights in His Grandfather\'s Property?',
    'cat' => 'Succession', 'date' => '', 'service' => 'succession-partition',
    'excerpt' => 'Self-acquired versus ancestral property, Class I heirs and coparcenary rights, explained in plain language.',
  ],
  'dowry-daughter-rights-partition-suits' => [
    'title' => 'Dowry and a Daughter\'s Rights in Partition Suits',
    'cat' => 'Succession', 'date' => '', 'service' => 'succession-partition',
    'excerpt' => 'Daughters have equal coparcenary rights since 2005. Does property given at marriage affect a daughter\'s share in a partition?',
  ],
  'hindu-daughter-inheritance-rights-after-conversion' => [
    'title' => 'A Hindu Daughter\'s Inheritance Rights After Converting Religion',
    'cat' => 'Succession', 'date' => '', 'service' => 'succession-partition',
    'excerpt' => 'Does a daughter lose her share in her parents\' property if she converts to another religion? Here is the legal position.',
  ],
  'permanent-alimony-maintenance-section-25-hma-void-marriage' => [
    'title' => 'Permanent Alimony Under Section 25 HMA, Even in Void Marriages',
    'cat' => 'Family', 'date' => '', 'service' => 'divorce-family-law',
    'excerpt' => 'The Supreme Court has held that a spouse can claim permanent alimony and interim maintenance even when the marriage is declared void.',
  ],
  'forcing-husband-separate-parents-divorce' => [
    'title' => 'Can Forcing a Husband to Leave His Parents Be Grounds for Divorce?',
    'cat' => 'Family', 'date' => '', 'service' => 'divorce-family-law',
    'excerpt' => 'When an unreasonable demand to live separately from elderly parents can amount to cruelty under the Hindu Marriage Act.',
  ],
  'mother-in-law-maintenance-daughter-in-law' => [
    'title' => 'Can a Mother-in-Law Claim Maintenance from Her Daughter-in-Law?',
    'cat' => 'Family', 'date' => '', 'service' => 'divorce-family-law',
    'excerpt' => 'Compassionate appointments, family obligations and when courts have directed a daughter-in-law to support her mother-in-law.',
  ],
  'nri-family-property-rights-guide' => [
    'title' => 'A Guide to Family Property Rights for NRIs',
    'cat' => 'NRI', 'date' => '2024-01-07', 'service' => 'nri-legal-services',
    'excerpt' => 'Which succession law applies to you, FEMA and tax points to keep in mind, and how a power of attorney helps when you live abroad.',
  ],
];

// Options shown in every enquiry form
$FORM_SERVICES = [
  'Property / Land Dispute', 'Title Verification & Legal Opinion', 'Registration Services',
  'NRI Legal Services', 'Civil Litigation', 'Divorce & Family Law', 'Succession / Partition',
  'Wills & Estate Planning', 'High Court Matter', 'Criminal Case / Bail', 'Consumer Complaint',
  'Money / Loan Recovery', 'Landlord / Tenant Dispute', 'Corporate & Contracts', 'Arbitration',
  'Tax & GST', 'Other Services',
];

// Client testimonials (from the existing website and Google reviews)
$TESTIMONIALS = [
  ['Vaithiyanathan', 'Civil appeal', 'I had been fighting a civil appeal for more than 15 years. I transferred my case to this firm and they resolved it in just 3 months. I am extremely grateful to Abirami Radhakrishnan and her team for their dedication, expertise and commitment.'],
  ['Sangeetha S Mani', 'NRI client · Google review', 'As an NRI, finding a trustworthy and straightforward lawyer in India can be incredibly challenging, but Advocate Abirami is a rare find. She listens to the case with great intent and provides a very clear roadmap of how the legal process will unfold. Her guidance is swift, honest and extremely reliable.'],
  ['Sivakumar Palanisamy', 'Writ petition', 'When the registration department wrongly refused to register my settlement deed, citing it as temple property and demanding an NOC from HR&CE, Abi Law Firm came to my aid. They filed a writ and obtained directions quickly, resolving the issue.'],
  ['Karthika Gunasekaran', 'Divorce & maintenance', 'After 10 years of suffering, I approached this firm for my divorce. My husband was unwilling to provide maintenance, but Mrs. Abirami fought hard for me. In just 8 months they won the case, ensuring the support I needed for myself and my child.'],
  ['Meera A', 'NRI document verification', 'Abi Law Firm made the document verification process so easy and trustworthy. As an NRI client, I appreciated how well they understood that I wasn\'t physically available and handled everything seamlessly. Their attention to detail gave me complete confidence.'],
  ['Rama Natarajan', 'NRI client, Canada', 'I am an NRI from Canada and had been looking for a legal service provider for NRIs. Ms Abirami was friendly and professional, communicated effectively on email and WhatsApp, and the process was quite smooth. I would recommend them.'],
  ['Ramasamy', 'Writ petition', 'We got judgment within a short period for the writ petition filed on behalf of our Peravai. Good presentation of the case was one of the factors that contributed to the success. We are sincerely thankful for your excellent hard work.'],
  ['Subathra Ganesan', 'Client', 'She is highly knowledgeable, professional and always responsive to my questions. Their expertise and dedication made a challenging legal situation much easier to navigate. I highly recommend Abi Law Firm.'],
];

$TEAM = [
  ['Abirami Radhakrishnan', 'Founder & Principal Advocate', 'team-img1.avif'],
  ['Harini', 'Associate Advocate', 'team-img2.avif'],
  ['Yuvaraj', 'Associate Advocate', 'team-img3.avif'],
  ['Gayathri Srinivasan', 'Associate Advocate', 'team-img4.avif'],
  ['Pritha Lakshmi', 'Associate Advocate', 'team-img5.avif'],
  ['Rajesh', 'Associate Advocate', 'team-img7.jpg'],
  ['Sivasakthi Paramasivam', 'Firm Administrator', 'team-img6.avif'],
];
