<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
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

    Route::get('/{locale}/services/{service}', [ServiceController::class, 'show'])
        ->where('locale', 'pl|en')
        ->where('service', 'saas|business|mvp|ai|integrations|support')
        ->name('services.show');

    Route::post('/contact', [ContactController::class, 'submit'])
        ->name('contact.submit');
});
