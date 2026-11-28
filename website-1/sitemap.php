<?php
require_once __DIR__ . '/inc/bootstrap.php';
header('Content-Type: application/xml; charset=utf-8');

$urls = ['/', '/about', '/contact', '/practice-areas/', '/insights/'];
foreach ($SERVICES as $slug => $s) $urls[] = '/practice-areas/' . $slug;
foreach ($ARTICLES as $slug => $a) $urls[] = '/insights/' . $slug;
$urls = array_merge($urls, ['/privacy-policy', '/terms-and-conditions', '/disclaimer']);

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as $u) {
    $file = $u === '/' ? 'index.php' : (substr($u, -1) === '/' ? ltrim($u, '/') . 'index.php' : ltrim($u, '/') . '.php');
    $mod  = is_file(__DIR__ . '/' . $file) ? date('Y-m-d', filemtime(__DIR__ . '/' . $file)) : date('Y-m-d');
    echo '  <url><loc>' . e(SITE_URL . $u) . '</loc><lastmod>' . $mod . "</lastmod></url>\n";
}
echo '</urlset>';
