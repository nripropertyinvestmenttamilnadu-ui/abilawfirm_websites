<?php
require_once __DIR__ . '/inc/config.php';
header('Content-Type: text/plain; charset=utf-8');
if (!IS_LIVE) {
    // Temporary domain: keep the whole site out of search engines
    echo "User-agent: *\nDisallow: /\n";
    exit;
}
echo "User-agent: *\nDisallow: /ajax/\nDisallow: /thank-you\n\nSitemap: " . SITE_URL . "/sitemap.xml\n";
