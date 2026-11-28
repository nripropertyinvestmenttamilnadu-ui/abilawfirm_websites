<?php
require __DIR__ . '/inc/bootstrap.php';
ob_start(); ?>
<p>We understand that legal matters are deeply personal. This policy explains what information we collect through this website, why we collect it, and how we keep it confidential.</p>
<h2>1. Who We Are</h2>
<p>This website is operated by ABI LAW FIRM, a law practice based in Chennai, Tamil Nadu, led by Advocate Abirami Radhakrishnan. In this policy, "we", "us" and "our" refer to ABI LAW FIRM.</p>
<h2>2. Information We Collect</h2>
<p>When you submit an enquiry form on this website, we collect:</p>
<ul><li>Your name</li><li>Your phone number</li><li>The type of legal matter you select</li><li>Any message you choose to add (contact page only)</li></ul>
<p>Along with your submission, we automatically record the date and time of the enquiry, the page it was sent from, and your device's IP address. We use these to prevent spam and misuse of the form.</p>
<p>Please do not share detailed facts of your case, documents or sensitive personal information through the website form. Such details are best discussed directly with our advocates during a consultation.</p>
<h2>3. How We Use Your Information</h2>
<ul><li>To contact you by phone or WhatsApp in response to your enquiry</li><li>To schedule and prepare for a consultation</li><li>To keep a record of enquiries received, including in our client enquiry management system</li><li>To protect the website from spam and abuse</li></ul>
<p>We do not sell, rent or trade your personal information, and we do not use it for unrelated marketing.</p>
<h2>4. Confidentiality</h2>
<p>All enquiries are treated as confidential. Information you share with us is handled in keeping with the professional duties of advocates under the Advocates Act, 1961 and the Bar Council of India Rules. Submitting an enquiry does not by itself create a lawyer–client relationship (see our <a href="/disclaimer" class="gold">Disclaimer</a>).</p>
<h2>5. Sharing of Information</h2>
<p>Your information is shared only where necessary to respond to your enquiry:</p>
<ul><li><b>Service providers:</b> our website hosting provider and enquiry management system handle the data only to operate these services on our behalf.</li><li><b>Communication services:</b> if you contact us via WhatsApp or phone, those services process your messages under their own privacy policies.</li><li><b>Legal requirements:</b> we may disclose information where required by law, court order or a competent authority.</li></ul>
<h2>6. Analytics, Third-Party Services and Links</h2>
<p>This website uses Google Analytics and Google Ads conversion tracking to understand how visitors use the site and to measure our advertising. These services may set cookies and receive information such as your IP address and the pages you visit. The website also loads fonts from Google Fonts, shows a Google Maps embed on the contact page, and links to our Google reviews and to WhatsApp. These services have their own privacy policies, and we are not responsible for their practices.</p>
<h2>7. Cookies</h2>
<p>We do not set our own advertising cookies. Google Analytics and Google Ads may set cookies as described above. You can block or delete cookies through your browser settings.</p>
<h2>8. Data Retention</h2>
<p>We keep enquiry details only for as long as needed to respond to you, provide legal services if you engage us, and meet our legal and professional record-keeping obligations. After that, the information is deleted or securely archived.</p>
<h2>9. Data Security</h2>
<p>We take reasonable technical and organisational measures to protect your information from unauthorised access, loss or misuse. However, no method of transmission over the internet is completely secure, and we cannot guarantee absolute security.</p>
<h2>10. Your Rights</h2>
<p>Subject to applicable law, including the Digital Personal Data Protection Act, 2023, you may ask us to:</p>
<ul><li>Confirm what personal information we hold about you</li><li>Correct or update inaccurate information</li><li>Delete your information where we are no longer required to keep it</li><li>Withdraw your consent to further contact</li></ul>
<p>To make a request, contact us using the details below.</p>
<h2>11. Changes to This Policy</h2>
<p>We may update this policy from time to time. The latest version will always be available on this page, with the "Last updated" date shown above.</p>
<h2>12. Contact Us</h2>
<ul><li>Phone: <a class="gold" href="tel:<?= PHONE ?>"><?= PHONE_SHOW ?></a></li><li>Email: <a class="gold" href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></li><li>Address: <?= e(ADDRESS) ?></li></ul>
<?php legal_page('privacy-policy', 'Privacy Policy', 'How ABI Law Firm collects, uses and protects the information you share through this website.', ob_get_clean());
