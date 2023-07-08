<?php

use Xhgui\Profiler\Profiler;
use Xhgui\Profiler\ProfilingFlags;

return [
    'profiler' => Profiler::PROFILER_XHPROF,
    'profiler.flags' => [
        ProfilingFlags::CPU,
        ProfilingFlags::MEMORY,
        ProfilingFlags::NO_BUILTINS,
        ProfilingFlags::NO_SPANS,
    ],
    'save.handler' => Profiler::SAVER_UPLOAD,
    'save.handler.upload' => [
        'url' => getenv('XHGUI_URL') . '/run/import',
        'timeout' => 3,
        'token' => 'token',
    ],
    'save.handler.mongodb' => [
        'dsn' => 'mongodb://' . getenv('XHGUI_URL') . ':27017',
        'database' => 'xhprof',
        // Allows you to pass additional options like replicaSet to MongoClient.
        // 'username', 'password' and 'db' (where the user is added)
        'options' => [],
        // Allows you to pass driver options like ca_file to MongoClient
        'driverOptions' => [],
    ],
    'profiler.exclude-env' => [
        'BOT_API_KEY',
        'BOT_USERNAME',
        'BINANCE_API_KEY',
        'BINANCE_SECRET_KEY',
    ],
    'profiler.options' => [],
    'profiler.enable' => static function (): bool {
        return (bool)getenv('XHGUI_ENABLE');
    },
    'profiler.simple_url' => static function (string $url): string {
        return (string)preg_replace('/=\d+/', '', $url);
    },
    'profiler.replace_url' => static function (string $url): string {
        return (string)str_replace('token', '', $url);
    },
];