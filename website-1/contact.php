<?php
require __DIR__ . '/inc/bootstrap.php';
$page = [
  'title' => 'Contact ABI LAW FIRM | Lawyers Opposite Madras High Court, Chennai',
  'desc'  => 'Contact ABI Law Firm, Armenian Street, George Town, Chennai 600001 (opposite the Madras High Court). Call +91 81240 35811, WhatsApp or book a consultation online.',
  'path'  => '/contact',
  'nav'   => 'contact',
  'schema' => [breadcrumb_schema(['Home' => '/', 'Contact' => '/contact'])],
];
include __DIR__ . '/inc/header.php';
?>

<section class="hero hero-inner">
  <div class="wrap">
    <div>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/">Home</a> <span>/</span> <span aria-current="page">Contact</span></nav>
      <div class="eyebrow">Contact Us</div>
      <h1>Book a <span class="gold">Confidential</span> Consultation</h1>
      <p class="lead">Call, WhatsApp or send us your details and we'll call you back. For urgent matters such as bail, please call us directly.</p>
      <div class="c-items">
        <a class="c-item" href="tel:<?= PHONE ?>"><?= icon('phone') ?><div><b>Phone</b><span><?= PHONE_SHOW ?></span></div></a>
        <a class="c-item" href="<?= e(wa_link()) ?>" target="_blank" rel="noopener"><?= icon('wa') ?><div><b>WhatsApp</b><span>Chat with us</span></div></a>
        <a class="c-item" href="mailto:<?= EMAIL ?>"><?= icon('mail') ?><div><b>Email</b><span><?= EMAIL ?></span></div></a>
      </div>
    </div>
    <div id="contact"><?= lead_form('', 'Send Us Your Enquiry', true, true) ?></div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="contact-grid">
      <div>
        <div class="eyebrow">Visit Our Office</div>
        <h2 class="sec-title">Opposite the Madras High Court</h2>
        <div class="c-items">
          <div class="c-item"><?= icon('pin') ?><div><b>Address</b><span><?= e(ADDRESS) ?></span></div></div>
          <div class="c-item"><?= icon('clock') ?><div><b>Appointments</b><span>Please call or WhatsApp before visiting, so the advocate handling your matter is available.</span></div></div>
          <div class="c-item"><?= icon('video') ?><div><b>Video Consultations</b><span>Available for clients outside Chennai and NRIs abroad.</span></div></div>
        </div>
        <div class="svc-cta"><a href="<?= e(MAPS_URL) ?>" target="_blank" rel="noopener" class="btn btn-outline"><?= icon('pin') ?>Get Directions</a></div>
      </div>
      <div>
        <iframe class="map" title="ABI Law Firm on Google Maps" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
          src="https://www.google.com/maps?q=13.0900751,80.2881926&z=17&output=embed"></iframe>
      </div>
    </div>
  </div>
</section>

<?= how_we_work() ?>

<section class="practice">
  <div class="wrap">
    <div class="eyebrow">FAQs</div>
    <h2 class="sec-title">Before You Contact Us</h2>
    <?= faq([
      ['How much does a consultation cost?', 'A detailed consultation with the advocate costs ₹2,000, in person or on video call. After understanding your matter, we give you a clear quote before any work begins.'],
      ['What should I bring to the consultation?', 'Any documents related to your matter: deeds, agreements, notices, court papers, FIR copies or correspondence. If you are unsure, call us and we will tell you.'],
      ['Is what I tell you confidential?', 'Yes. Everything you share is kept strictly confidential. Please don\'t send detailed case facts through the website form; we\'ll discuss them during the consultation.'],
      ['Can I consult you from outside Chennai or abroad?', 'Yes. We offer consultations by video call, and documents can be shared by email or WhatsApp.'],
    ]) ?>
  </div>
</section>

<?php include __DIR__ . '/inc/footer.php'; ?>
