<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Redirect root to default locale
Route::get('/', function () {
    $locale = session('locale', config('app.locale', 'pl'));
    return redirect("/{$locale}");
});

// Locale-based routes
Route::middleware(['web'])->group(function () {
    Route::get('/{locale}', [HomeController::class, 'index'])
        ->where('locale', 'pl|en')
        ->name('home');

    Route::post('/contact', [ContactController::class, 'submit'])
        ->name('contact.submit');
});
