<?php

require __DIR__ . '/../composer/vendor/autoload.php';

$profilerConfig = require __DIR__ . '/../xhgui/config.php';

$profiler = new Xhgui\Profiler\Profiler($profilerConfig);
$profiler->start();

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
