<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

require __DIR__.'/admin.php';
require __DIR__.'/frontend.php';


Route::get('/clear-cache', function () {
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');

    return response()->json(['message' => 'All caches cleared successfully!']);
});