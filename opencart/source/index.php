<?php

require __DIR__ . '/../composer/vendor/autoload.php';

$profilerConfig = require __DIR__ . '/../xhgui/config.php';

$profiler = new Xhgui\Profiler\Profiler($profilerConfig);
$profiler->start();

// Version
define('VERSION', '4.0.2.2');

// Configuration
if (is_file('config.php')) {
    require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
    header('Location: install/index.php');
    exit();
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

// Framework
require_once(DIR_SYSTEM . 'framework.php');
