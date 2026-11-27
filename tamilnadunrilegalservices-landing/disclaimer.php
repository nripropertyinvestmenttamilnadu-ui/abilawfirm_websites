<?php
require __DIR__ . '/inc/legal.php';
ob_start(); ?>
<p>The Bar Council of India does not permit advocates to solicit work or advertise. By accessing this website, you acknowledge and confirm that:</p>
<ul>
<li>You are seeking information about <?= BRAND ?> and its advocates of your own accord, and there has been no advertisement, solicitation, invitation or inducement of any sort from us.</li>
<li>The information on this website is provided for informational purposes only and should not be interpreted as soliciting or advertisement.</li>
<li>We are not liable for any consequence of any action taken by you relying on material on this website.</li>
<li>Nothing on this website creates a lawyer–client relationship.</li>
<li>You should seek independent legal advice for your specific situation.</li>
</ul>
<p>Until a lawyer–client relationship has been confirmed, please do not send confidential or time-sensitive information through this website.</p>
<?php legal_page('disclaimer', 'Disclaimer', ob_get_clean());
