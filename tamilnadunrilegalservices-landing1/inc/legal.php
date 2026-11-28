<?php
require_once __DIR__ . '/layout.php';
function legal_page($slug, $title, $body) {
    page_header($title . ' | ' . BRAND, $title . ' for the ' . BRAND . ' website.', '/' . $slug);
    echo '<section class="hero hero-inner"><div class="wrap" style="grid-template-columns:1fr"><div>'
       . '<div class="eyebrow">Legal</div><h1>' . e($title) . '</h1><p class="lead">Last updated: 27 November 2026</p>'
       . '</div></div></section><section style="padding-top:40px"><div class="wrap"><div class="legal">' . $body . '</div></div></section>';
    page_footer(false);
}
