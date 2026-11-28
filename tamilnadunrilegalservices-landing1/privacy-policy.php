<?php
require __DIR__ . '/inc/legal.php';
ob_start(); ?>
<p>This policy explains what information we collect through this website, why we collect it, and how we keep it confidential.</p>
<h2>1. Who We Are</h2>
<p>This website is operated by <?= BRAND ?>, Chennai, Tamil Nadu, founded by Advocate Abirami Radhakrishnan. "We", "us" and "our" refer to <?= BRAND ?>.</p>
<h2>2. Information We Collect</h2>
<p>When you submit the enquiry form, we collect your name, WhatsApp / phone number, the country you live in and the type of matter you select. We also record the date and time, the page it was sent from and your IP address, to prevent spam and misuse.</p>
<p>Please do not send detailed facts of your case or documents through the website form. These are best shared during a consultation.</p>
<h2>3. How We Use Your Information</h2>
<ul><li>To contact you by WhatsApp, phone or email in response to your enquiry</li><li>To schedule and prepare for a consultation</li><li>To keep a record of enquiries, including in our client enquiry management system</li><li>To protect the website from spam and abuse</li></ul>
<p>We do not sell, rent or trade your personal information.</p>
<h2>4. Confidentiality</h2>
<p>Enquiries are treated as confidential, in keeping with the professional duties of advocates under the Advocates Act, 1961 and the Bar Council of India Rules. Submitting an enquiry does not by itself create a lawyer–client relationship.</p>
<h2>5. Sharing, Analytics and Third Parties</h2>
<p>Your information is shared only with service providers who operate this website and our enquiry system, or where required by law. This website may use Google Ads conversion tracking and Google Analytics, loads fonts from Google Fonts and links to WhatsApp; these services have their own privacy policies.</p>
<h2>6. Retention and Security</h2>
<p>We keep enquiry details only as long as needed to respond to you, provide services and meet professional record-keeping obligations, and take reasonable measures to protect them. No internet transmission is completely secure.</p>
<h2>7. Your Rights</h2>
<p>Subject to applicable law, including the Digital Personal Data Protection Act, 2023, you may ask us to confirm, correct or delete the information we hold about you, or withdraw consent to further contact.</p>
<h2>8. Contact Us</h2>
<p>Phone / WhatsApp: <a class="gold" href="tel:<?= PHONE ?>"><?= PHONE_SHOW ?></a> · Email: <a class="gold" href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a> · Address: <?= e(ADDRESS) ?></p>
<?php legal_page('privacy-policy', 'Privacy Policy', ob_get_clean());
