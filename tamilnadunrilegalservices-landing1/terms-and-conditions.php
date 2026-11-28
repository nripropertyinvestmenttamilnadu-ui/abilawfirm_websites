<?php
require __DIR__ . '/inc/legal.php';
ob_start(); ?>
<p>By using this website, you agree to these Terms &amp; Conditions.</p>
<h2>1. No Legal Advice</h2>
<p>The content on this website is general information only and is not legal advice. Every matter depends on its own facts and the law changes over time.</p>
<h2>2. No Lawyer–Client Relationship</h2>
<p>Viewing this website or contacting us does not create a lawyer–client relationship. That relationship is formed only after we agree to act for you and confirm the engagement and its terms with you directly.</p>
<h2>3. Bar Council of India Rules</h2>
<p>Advocates are not permitted to solicit work or advertise. This website is not intended as an advertisement or solicitation. Please read our <a class="gold" href="/disclaimer">Disclaimer</a>.</p>
<h2>4. Enquiries and Fees</h2>
<p>Please provide accurate contact details. We may decline any enquiry, including where there is a conflict of interest. Any reference to fees is general; fees for your matter are confirmed with you before work begins.</p>
<h2>5. Results and Testimonials</h2>
<p>Client reviews reflect individual experiences. Past results do not guarantee a similar outcome.</p>
<h2>6. Intellectual Property and Links</h2>
<p>Website content belongs to <?= BRAND ?> or is used with permission. Links to third-party websites are provided for convenience only.</p>
<h2>7. Liability and Jurisdiction</h2>
<p>To the fullest extent permitted by law, we are not liable for any loss arising from use of this website. These terms are governed by the laws of India, and the courts at Chennai have exclusive jurisdiction.</p>
<?php legal_page('terms-and-conditions', 'Terms & Conditions', ob_get_clean());
