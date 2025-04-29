<?php

use Illuminate\Support\Facades\Artisan;

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$app->make('Illuminate\Contracts\Http\Kernel')->handle(
    $request = Illuminate\Http\Request::capture()
);

echo "<h2>Laravel Cache Cleanup</h2>";

try {
    // Route cache temizliği
    Artisan::call('route:clear');
    echo "<p><strong>Route cache cleared:</strong> " . nl2br(Artisan::output()) . "</p>";

    // Config cache temizliği
    Artisan::call('config:clear');
    echo "<p><strong>Config cache cleared:</strong> " . nl2br(Artisan::output()) . "</p>";

    // View cache temizliği
    Artisan::call('view:clear');
    echo "<p><strong>View cache cleared:</strong> " . nl2br(Artisan::output()) . "</p>";

    // Application cache temizliği
    Artisan::call('cache:clear');
    echo "<p><strong>Application cache cleared:</strong> " . nl2br(Artisan::output()) . "</p>";
} catch (Exception $e) {
    echo "<p style='color: red;'><strong>Error:</strong> " . $e->getMessage() . "</p>";
}

echo "<p>Cache cleanup completed!</p>";
