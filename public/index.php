<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Bakım modunu kontrol et
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Composer autoloader'ını dahil et
require __DIR__.'/../vendor/autoload.php';

// Laravel'i başlat ve isteği işle
$app = require_once __DIR__.'/../bootstrap/app.php';

// Çalıştırma
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(Request::capture());

// Yanıtı döndür
$response->send();

// Laravel'in doğru şekilde kapanması
$kernel->terminate(Request::capture(), $response);