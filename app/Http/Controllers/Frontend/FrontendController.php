<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    // Ana sayfa
    public function index()
    {
        return view('frontend.index'); // resources/views/frontend/index.blade.php
    }
}
