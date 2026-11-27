<?php
require_once __DIR__ . '/inc/config.php';
header('Content-Type: text/plain; charset=utf-8');
echo IS_LIVE ? "User-agent: *\nDisallow: /ajax/\nDisallow: /thank-you\n" : "User-agent: *\nDisallow: /\n";
