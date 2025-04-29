<?php

use App\Http\Controllers\Frontend\TrUniversityController;
use App\Http\Controllers\Frontend\UniversityController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index']);

Route::get('/tr/universities', [TrUniversityController::class, 'listUniversities'])->name('tr.universities.list');

Route::get('/tr/university/{slug}', [TrUniversityController::class, 'showUniversity'])->name('tr.university.show');

Route::get('/universities', [UniversityController::class, 'listUniversities'])->name('universities.list');
