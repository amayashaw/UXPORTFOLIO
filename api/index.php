<?php

$tmpDir = '/tmp';

// Route all Laravel cache manifests to Vercel writable /tmp
putenv("APP_STORAGE_PATH={$tmpDir}/storage");
putenv("APP_CONFIG_CACHE={$tmpDir}/config.php");
putenv("APP_EVENTS_CACHE={$tmpDir}/events.php");
putenv("APP_PACKAGES_CACHE={$tmpDir}/packages.php");
putenv("APP_ROUTES_CACHE={$tmpDir}/routes.php");
putenv("APP_SERVICES_CACHE={$tmpDir}/services.php");
putenv("VIEW_COMPILED_PATH={$tmpDir}");
putenv("CACHE_DRIVER=array");
putenv("SESSION_DRIVER=cookie");
putenv("LOG_CHANNEL=stderr");

$_ENV['APP_STORAGE_PATH'] = "{$tmpDir}/storage";
$_ENV['APP_CONFIG_CACHE'] = "{$tmpDir}/config.php";
$_ENV['APP_EVENTS_CACHE'] = "{$tmpDir}/events.php";
$_ENV['APP_PACKAGES_CACHE'] = "{$tmpDir}/packages.php";
$_ENV['APP_ROUTES_CACHE'] = "{$tmpDir}/routes.php";
$_ENV['APP_SERVICES_CACHE'] = "{$tmpDir}/services.php";
$_ENV['VIEW_COMPILED_PATH'] = "{$tmpDir}";
$_ENV['CACHE_DRIVER'] = 'array';
$_ENV['SESSION_DRIVER'] = 'cookie';
$_ENV['LOG_CHANNEL'] = 'stderr';

// Create required subdirectories inside /tmp
$directories = [
    "{$tmpDir}/storage/framework/views",
    "{$tmpDir}/storage/framework/cache/data",
    "{$tmpDir}/storage/framework/sessions",
    "{$tmpDir}/storage/logs",
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

require __DIR__ . '/../public/index.php';