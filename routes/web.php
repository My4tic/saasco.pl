<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Redirect root to default locale
Route::get('/', function () {
    $locale = session('locale', config('app.locale'));
    return redirect("/{$locale}");
});

// Locale-based routes
Route::middleware(['web'])->group(function () {
    Route::get('/{locale}', [HomeController::class, 'index'])
        ->where('locale', 'pl|en')
        ->name('home');

    Route::get('/{locale}/contact', [ContactController::class, 'index'])
        ->where('locale', 'pl|en')
        ->name('contact');

    Route::get('/{locale}/services/{service}', [ServiceController::class, 'show'])
        ->where('locale', 'pl|en')
        ->where('service', 'saas|business|mvp|ai|integrations|support')
        ->name('services.show');

    Route::post('/{locale}/contact', [ContactController::class, 'submit'])
        ->where('locale', 'pl|en')
        ->name('contact.submit');
});
