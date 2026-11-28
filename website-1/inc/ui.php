<?php
/** Reusable page components. Every page includes inc/bootstrap.php, which loads this. */

$FAQ_SCHEMA = [];   // filled by faq(), printed as JSON-LD in the footer

function icon($name, $cls = '') {
    return '<svg class="' . e($cls) . '" aria-hidden="true"><use href="#i-' . e($name) . '"/></svg>';
}

function ticks(array $items, $cls = '') {
    $h = '<ul class="ticks ' . e($cls) . '">';
    foreach ($items as $i) $h .= '<li>' . $i . '</li>';
    return $h . '</ul>';
}

/** $items = [[title, text], ...] */
function steps(array $items) {
    $h = '<ol class="steps">';
    foreach ($items as [$t, $x]) $h .= '<li><b>' . $t . '</b>' . $x . '</li>';
    return $h . '</ol>';
}

/** $items = [[question, answer], ...]. Also added to FAQPage structured data. */
function faq(array $items) {
    global $FAQ_SCHEMA;
    $h = '<div class="faq-list">';
    foreach ($items as [$q, $a]) {
        $h .= '<details><summary>' . $q . '</summary><p>' . $a . '</p></details>';
        $FAQ_SCHEMA[] = ['@type' => 'Question', 'name' => strip_tags($q),
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($a)]];
    }
    return $h . '</div>';
}

function block($title, $html, $full = false) {
    return '<div class="svc-block' . ($full ? ' full' : '') . '"><h3>' . $title . '</h3>' . $html . '</div>';
}

function lead_form($preselect = '', $heading = 'Talk to a Lawyer Today', $withPhoto = true, $withMessage = false) {
    global $FORM_SERVICES;
    ob_start(); ?>
    <div class="form-card">
      <div class="form-head">
        <div><h3><?= e($heading) ?><p>We will call you back shortly.</p></h3></div>
        <?php if ($withPhoto): ?><img src="/assets/img/abilawfirm.png" alt="Advocate Abirami Radhakrishnan" width="190" height="190"><?php endif; ?>
      </div>
      <form class="lead-form" novalidate>
        <input type="text" name="website" tabindex="-1" autocomplete="off" class="hp" aria-hidden="true">
        <div class="field"><input type="text" name="name" placeholder="Name" autocomplete="name" required aria-label="Name"><div class="err"></div></div>
        <div class="field"><input type="tel" name="mobile" placeholder="Phone Number" autocomplete="tel" required aria-label="Phone number"><div class="err"></div></div>
        <div class="field">
          <label class="float">Services</label>
          <select name="matter" aria-label="Service">
            <?php foreach ($FORM_SERVICES as $s): ?><option<?= $s === $preselect ? ' selected' : '' ?>><?= e($s) ?></option><?php endforeach; ?>
          </select>
        </div>
        <?php if ($withMessage): ?>
        <div class="field"><textarea name="message" placeholder="Briefly describe your matter (optional)" aria-label="Message"></textarea></div>
        <?php endif; ?>
        <button type="submit" class="btn btn-gold">Book Consultation</button>
        <p class="form-note">Your information is kept strictly confidential. <a href="/privacy-policy">Privacy Policy</a></p>
      </form>
    </div>
    <?php return ob_get_clean();
}

/** Hero used on inner pages: breadcrumb, headline, lead text, CTAs and a form card. */
function page_hero($eyebrow, $h1, $lead, array $chips = [], $preselect = '', array $crumbs = []) {
    ob_start(); ?>
    <section class="hero hero-inner" id="top">
      <div class="wrap">
        <div>
          <?php if ($crumbs): ?>
          <nav class="crumbs" aria-label="Breadcrumb"><a href="/">Home</a><?php foreach ($crumbs as $label => $href): ?> <span>/</span> <?php if ($href): ?><a href="<?= e($href) ?>"><?= e($label) ?></a><?php else: ?><span aria-current="page"><?= e($label) ?></span><?php endif; endforeach; ?></nav>
          <?php endif; ?>
          <div class="eyebrow"><?= $eyebrow ?></div>
          <h1><?= $h1 ?></h1>
          <p class="lead"><?= $lead ?></p>
          <div class="ctas">
            <a href="#contact" class="btn btn-gold">Book a Consultation</a>
            <a href="<?= e(wa_link()) ?>" target="_blank" rel="noopener" class="btn btn-wa"><?= icon('wa') ?>WhatsApp Us</a>
          </div>
          <?php if ($chips): ?><div class="chips"><?php foreach ($chips as $c): ?><span><?= $c ?></span><?php endforeach; ?></div><?php endif; ?>
        </div>
        <div id="contact"><?= lead_form($preselect) ?></div>
      </div>
    </section>
    <?php return ob_get_clean();
}

function service_card($slug) {
    global $SERVICES;
    $s = $SERVICES[$slug];
    $h = '<a class="pa" href="/practice-areas/' . e($slug) . '">';
    $h .= '<div class="ic">' . icon($s['icon']) . '</div><h3>' . e($s['title']) . '</h3><p>' . e($s['short']) . '</p><ul>';
    foreach ($s['points'] as $p) $h .= '<li>' . e($p) . '</li>';
    return $h . '</ul><span class="more">Learn more →</span></a>';
}

function related_services(array $slugs, $title = 'Related Practice Areas') {
    $h = '<section class="practice related"><div class="wrap"><div class="eyebrow">Explore</div><h2 class="sec-title">' . e($title) . '</h2><div class="grid-3">';
    foreach ($slugs as $s) $h .= service_card($s);
    return $h . '</div></div></section>';
}

function testimonials($limit = 6, $title = 'What Our Clients Say') {
    global $TESTIMONIALS;
    ob_start(); ?>
    <section class="testimonials" id="reviews">
      <div class="wrap">
        <div class="t-head">
          <div>
            <div class="eyebrow">Client Reviews</div>
            <h2 class="sec-title"><?= e($title) ?></h2>
          </div>
          <a class="g-rating" href="<?= e(MAPS_URL) ?>" target="_blank" rel="noopener">
            <span class="rating"><?= GOOGLE_RATING ?></span>
            <span><span class="stars" aria-label="<?= GOOGLE_RATING ?> out of 5 stars">★★★★★</span><small><?= GOOGLE_REVIEWS ?> Google reviews · View all</small></span>
          </a>
        </div>
        <div class="t-grid">
          <?php foreach (array_slice($TESTIMONIALS, 0, $limit) as [$n, $tag, $txt]): ?>
          <figure class="t-card">
            <div class="stars" aria-hidden="true">★★★★★</div>
            <blockquote>“<?= e($txt) ?>”</blockquote>
            <figcaption><b><?= e($n) ?></b><span><?= e($tag) ?></span></figcaption>
          </figure>
          <?php endforeach; ?>
        </div>
        <p class="t-note">Reviews reflect individual client experiences. Every case is different, and past results do not guarantee a similar outcome.</p>
      </div>
    </section>
    <?php return ob_get_clean();
}

function team_grid() {
    global $TEAM;
    $h = '<div class="team-grid">';
    foreach ($TEAM as [$n, $r, $img]) {
        $h .= '<div class="tm"><img src="/assets/img/' . e($img) . '" alt="' . e($n) . '" loading="lazy" width="300" height="300"><div><h4>' . e($n) . '</h4><span>' . e($r) . '</span></div></div>';
    }
    return $h . '</div>';
}

function cta_band($title = 'Let Us Help You Resolve Your Legal Matter', $text = 'Schedule a confidential consultation with our lawyers today.') {
    return '<section class="cta"><div class="wrap"><h2>' . $title . '</h2><p>' . $text . '</p><div class="btns">'
        . '<a href="tel:' . PHONE . '" class="btn btn-dark">' . icon('phone') . 'Call ' . PHONE_SHOW . '</a>'
        . '<a href="' . e(wa_link()) . '" target="_blank" rel="noopener" class="btn btn-wa">' . icon('wa') . 'WhatsApp</a>'
        . '</div></div></section>';
}

/** How a matter starts (from the existing website) */
function how_we_work() {
    return '<section class="process" id="process"><div class="wrap"><div class="eyebrow">How It Works</div>'
        . '<h2 class="sec-title">A Clear, Step-by-Step Approach</h2>'
        . '<p class="sec-sub">No confusion about what happens next. Here is how we take up your matter.</p>'
        . steps([
            ['Quick Discussion', 'Call, WhatsApp or fill in the form. We understand your issue and tell you which documents to keep ready.'],
            ['Detailed Consultation', 'A paid consultation (₹2,000) in person or on video call, where the advocate reviews your documents and gives you a clear legal opinion.'],
            ['Tailored Quote', 'You receive a clear quote for the work your matter needs, with no hidden charges, before anything starts.'],
            ['We Handle the Case', 'From notice to final order, we take the matter forward and keep you updated at every stage.'],
        ])
        . '</div></section>';
}

function breadcrumb_schema(array $items) {   // $items = [name => path, ...]
    $list = []; $i = 1;
    foreach ($items as $name => $path) {
        $list[] = ['@type' => 'ListItem', 'position' => $i++, 'name' => $name, 'item' => SITE_URL . $path];
    }
    return ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $list];
}

/** Opens a practice-area page: sets SEO data, prints header and hero (with enquiry form). */
function service_page_open($slug, $seoTitle, $desc, $eyebrow, $h1, $lead, array $chips, $preselect) {
    global $SERVICES, $SERVICE_GROUPS, $page;
    $s = $SERVICES[$slug];
    $path = '/practice-areas/' . $slug;
    $page = [
        'title' => $seoTitle, 'desc' => $desc, 'path' => $path,
        'nav' => $slug === 'nri-legal-services' ? 'nri' : 'services',
        'schema' => [
            breadcrumb_schema(['Home' => '/', 'Practice Areas' => '/practice-areas/', $s['title'] => $path]),
            ['@context' => 'https://schema.org', '@type' => 'Service', 'name' => $s['title'], 'serviceType' => $s['title'],
             'description' => $desc, 'url' => SITE_URL . $path, 'areaServed' => ['Chennai', 'Tamil Nadu'],
             'provider' => ['@id' => SITE_URL . '/#firm']],
        ],
    ];
    include __DIR__ . '/header.php';
    echo page_hero($eyebrow, $h1, $lead, $chips, $preselect, ['Practice Areas' => '/practice-areas/', $s['title'] => '']);
}

/** Closes a practice-area page: related services, reviews, call-to-action and footer. */
function service_page_close(array $related, $ctaTitle = 'Let Us Help You Resolve Your Legal Matter') {
    global $SERVICES, $FAQ_SCHEMA, $page;
    echo related_services($related);
    echo testimonials(3);
    echo cta_band($ctaTitle);
    include __DIR__ . '/footer.php';
}

/** Simple text page (privacy, terms, disclaimer). */
function legal_page($slug, $title, $desc, $body) {
    global $SERVICES, $SERVICE_GROUPS, $FAQ_SCHEMA, $page;
    $page = ['title' => $title . ' | ' . SITE_NAME, 'desc' => $desc, 'path' => '/' . $slug,
             'schema' => [breadcrumb_schema(['Home' => '/', $title => '/' . $slug])]];
    include __DIR__ . '/header.php';
    echo '<section class="hero hero-inner"><div class="wrap" style="grid-template-columns:1fr"><div>'
       . '<nav class="crumbs" aria-label="Breadcrumb"><a href="/">Home</a> <span>/</span> <span aria-current="page">' . e($title) . '</span></nav>'
       . '<div class="eyebrow">Legal</div><h1>' . e($title) . '</h1><p class="lead">Last updated: 26 November 2026</p>'
       . '<nav class="chips" aria-label="Legal pages"><a href="/privacy-policy"><span>Privacy Policy</span></a><a href="/terms-and-conditions"><span>Terms &amp; Conditions</span></a><a href="/disclaimer"><span>Disclaimer</span></a></nav>'
       . '</div></div></section>';
    echo '<section style="padding-top:50px"><div class="wrap"><div class="legal">' . $body . '</div></div></section>';
    include __DIR__ . '/footer.php';
}

/** Article page: hero, body, sidebar (enquiry form + related service), more articles. */
function article_page($slug, $body) {
    global $SERVICES, $SERVICE_GROUPS, $ARTICLES, $FAQ_SCHEMA, $page;
    $a = $ARTICLES[$slug];
    $svc = $SERVICES[$a['service']];
    $path = '/insights/' . $slug;
    $schema = ['@context' => 'https://schema.org', '@type' => 'Article', 'headline' => $a['title'], 'description' => $a['excerpt'],
               'mainEntityOfPage' => SITE_URL . $path, 'image' => SITE_URL . '/assets/img/founder.jpg',
               'author' => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL . '/'],
               'publisher' => ['@id' => SITE_URL . '/#firm']];
    if ($a['date']) $schema['datePublished'] = $a['date'];
    $page = ['title' => $a['title'] . ' | ' . SITE_NAME, 'desc' => $a['excerpt'], 'path' => $path, 'nav' => 'insights',
             'schema' => [breadcrumb_schema(['Home' => '/', 'Insights' => '/insights/', $a['title'] => $path]), $schema]];
    include __DIR__ . '/header.php';
    ?>
    <section class="article-hero" style="padding-bottom:50px">
      <div class="wrap">
        <nav class="crumbs" aria-label="Breadcrumb"><a href="/">Home</a> <span>/</span> <a href="/insights/">Insights</a> <span>/</span> <span aria-current="page"><?= e($a['cat']) ?></span></nav>
        <div class="eyebrow"><?= e($a['cat']) ?></div>
        <h1><?= e($a['title']) ?></h1>
        <p class="meta">By ABI Law Firm<?= $a['date'] ? ' · ' . date('j M Y', strtotime($a['date'])) : '' ?></p>
      </div>
    </section>
    <div class="wrap article-wrap" style="padding-top:60px">
      <article class="prose">
        <?= $body ?>
        <div class="note-box">This article is general information, not legal advice. The law may have changed since it was written, and every case depends on its facts. For advice on your situation, <a href="/contact">book a consultation</a>.</div>
      </article>
      <aside class="sidebar">
        <div id="contact"><?= lead_form($a['service'] === 'divorce-family-law' ? 'Divorce & Family Law' : '', 'Talk to a Lawyer', false) ?></div>
        <div class="side-box">
          <h4>Related Practice Area</h4>
          <a href="/practice-areas/<?= e($a['service']) ?>" class="gold"><?= e($svc['title']) ?> →</a>
          <p class="muted" style="font-size:14px;margin-top:6px"><?= e($svc['short']) ?></p>
        </div>
        <div class="side-box">
          <h4>More Insights</h4>
          <?php $n = 0; foreach ($ARTICLES as $s => $x) { if ($s === $slug || $n++ >= 4) continue; ?><a href="/insights/<?= e($s) ?>"><?= e($x['title']) ?></a><?php } ?>
        </div>
      </aside>
    </div>
    <?php
    echo cta_band('Have a Question About Your Case?', 'Speak to our advocates for advice on your specific situation.');
    include __DIR__ . '/footer.php';
}
