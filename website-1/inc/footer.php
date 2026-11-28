<?php global $SERVICES, $FAQ_SCHEMA, $page; ?>
</main>

<footer id="footer">
  <div class="wrap">
    <div class="foot">
      <div>
        <img src="/assets/img/logo.avif" alt="<?= SITE_NAME ?>" width="134" height="50" class="foot-logo" loading="lazy">
        <p>Civil, property, family, High Court, criminal, consumer, corporate and NRI legal services in Chennai, led by Advocate Abirami Radhakrishnan.</p>
        <div class="foot-cta">
          <a href="tel:<?= PHONE ?>" class="btn btn-gold btn-sm"><?= icon('phone') ?>Call Now</a>
          <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener" class="btn btn-wa btn-sm"><?= icon('wa') ?>WhatsApp</a>
        </div>
      </div>
      <div>
        <h4>Practice Areas</h4>
        <ul class="foot-links two">
          <?php foreach ($SERVICES as $fSlug => $fS): ?><li><a href="/practice-areas/<?= $fSlug ?>"><?= e($fS["title"]) ?></a></li><?php endforeach; ?>
        </ul>
      </div>
      <div>
        <h4>Firm</h4>
        <ul class="foot-links">
          <li><a href="/about">About Us</a></li>
          <li><a href="/about#team">Our Team</a></li>
          <li><a href="/insights/">Legal Insights</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </div>
      <div>
        <h4>Office</h4>
        <p><?= e(ADDRESS) ?> <span class="muted">(<?= ADDRESS_NOTE ?>)</span></p>
        <p><a href="tel:<?= PHONE ?>"><?= PHONE_SHOW ?></a></p>
        <p><a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></p>
      </div>
    </div>
    <p class="disclaimer">Disclaimer: As per the rules of the Bar Council of India, advocates are not permitted to solicit work or advertise. This website is for general information only and does not constitute legal advice or create an advocate–client relationship. <a href="/disclaimer">Read the full disclaimer</a>.</p>
    <div class="foot-bottom">
      <span>© <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved.</span>
      <nav aria-label="Legal">
        <a href="/privacy-policy">Privacy Policy</a>
        <a href="/terms-and-conditions">Terms &amp; Conditions</a>
        <a href="/disclaimer">Disclaimer</a>
      </nav>
    </div>
  </div>
</footer>

<div class="mbar">
  <a href="tel:<?= PHONE ?>"><?= icon('phone') ?>Call Now</a>
  <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener"><?= icon('wa') ?>WhatsApp</a>
</div>

<?php if (empty($page['noindex'])): ?>
<div class="modal" id="popup" role="dialog" aria-modal="true" aria-label="Book a consultation">
  <div class="modal-inner">
    <button class="x" aria-label="Close">×</button>
    <?= lead_form('', 'Talk to a Lawyer Today', false) ?>
  </div>
</div>
<?php endif; ?>

<?php if ($FAQ_SCHEMA): ?>
<script type="application/ld+json"><?= json_encode(['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $FAQ_SCHEMA], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php endif; ?>
<script>
window.SITE = { live: <?= IS_LIVE ? 'true' : 'false' ?>, convCall: "<?= CONV_CALL ?>", convWa: "<?= CONV_WHATSAPP ?>", phone: "<?= PHONE_SHOW ?>" };
</script>
<script src="/assets/js/site.js?v=<?= filemtime(__DIR__ . '/../assets/js/site.js') ?>" defer></script>
</body>
</html>
