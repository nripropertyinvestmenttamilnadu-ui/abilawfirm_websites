<?php
require __DIR__ . '/inc/bootstrap.php';
ob_start(); ?>
<p>By accessing or using this website, you agree to these Terms &amp; Conditions. If you do not agree, please do not use this website.</p>
<h2>1. About This Website</h2>
<p>This website is owned and operated by ABI LAW FIRM, Chennai, Tamil Nadu. It provides general information about the firm, its advocates and its areas of practice.</p>
<h2>2. No Legal Advice</h2>
<p>The content on this website, including articles in Legal Insights, is for general information only. It is not legal advice and should not be relied upon as a substitute for advice from a qualified advocate about your specific situation. Laws and procedures change, and every case depends on its own facts.</p>
<h2>3. No Lawyer–Client Relationship</h2>
<p>Viewing this website, submitting an enquiry form, or contacting us by phone, email or WhatsApp does not create a lawyer–client relationship. A lawyer–client relationship is formed only after we have agreed to act for you, completed any necessary conflict checks, and confirmed the engagement and its terms with you directly.</p>
<h2>4. Bar Council of India Rules</h2>
<p>As per the rules of the Bar Council of India, advocates are not permitted to solicit work or advertise. This website is not intended to be, and should not be taken as, an advertisement or solicitation of any kind. Please read our full <a class="gold" href="/disclaimer">Disclaimer</a>.</p>
<h2>5. Use of the Enquiry Form</h2>
<p>When using an enquiry form, you agree to:</p>
<ul><li>Provide accurate contact details that belong to you</li><li>Not submit false, misleading, abusive or unlawful content</li><li>Not use the form to send spam or automated submissions</li></ul>
<p>We may decline to respond to any enquiry, including where there is a conflict of interest. How we handle the information you submit is described in our <a class="gold" href="/privacy-policy">Privacy Policy</a>.</p>
<h2>6. Fees</h2>
<p>Any reference to fees on this website is general in nature. Professional fees for a matter are confirmed with you directly after understanding your case, before any work begins.</p>
<h2>7. Results and Testimonials</h2>
<p>Client reviews and any references to past outcomes reflect individual experiences. Every case is different, and past results do not guarantee a similar outcome in any other matter.</p>
<h2>8. Intellectual Property</h2>
<p>All content on this website, including text, logos, photographs and design, belongs to ABI LAW FIRM or is used with permission. You may not copy, reproduce or republish it without our prior written consent, except for personal, non-commercial reference.</p>
<h2>9. Third-Party Links</h2>
<p>This website may link to third-party websites and services, such as Google and WhatsApp. We do not control and are not responsible for their content, availability or privacy practices.</p>
<h2>10. Accuracy and Availability</h2>
<p>We try to keep the information on this website accurate and up to date, but we make no warranty that it is complete, current or error-free. We may change, suspend or remove any part of the website at any time without notice.</p>
<h2>11. Limitation of Liability</h2>
<p>To the fullest extent permitted by law, ABI LAW FIRM and its advocates and staff are not liable for any loss or damage arising from the use of, or reliance on, this website or its content, or from any inability to access it.</p>
<h2>12. Governing Law and Jurisdiction</h2>
<p>These Terms &amp; Conditions are governed by the laws of India. Any dispute arising from the use of this website is subject to the exclusive jurisdiction of the courts at Chennai, Tamil Nadu.</p>
<h2>13. Changes to These Terms</h2>
<p>We may update these Terms &amp; Conditions from time to time. Continued use of the website after changes are posted means you accept the updated terms.</p>
<h2>14. Contact Us</h2>
<p>For any questions about these terms, call <a class="gold" href="tel:<?= PHONE ?>"><?= PHONE_SHOW ?></a> or email <a class="gold" href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>.</p>
<?php legal_page('terms-and-conditions', 'Terms & Conditions', 'Terms governing the use of the ABI Law Firm website.', ob_get_clean());
