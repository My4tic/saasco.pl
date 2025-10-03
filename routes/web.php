<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

// Dashboard and Profile (from Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/submissions', [AdminController::class, 'index'])->name('submissions.index');
    Route::get('/submissions/{submission}', [AdminController::class, 'show'])->name('submissions.show');
    Route::post('/submissions/{submission}/toggle-read', [AdminController::class, 'toggleRead'])->name('submissions.toggleRead');
    Route::post('/submissions/{submission}/archive', [AdminController::class, 'archive'])->name('submissions.archive');
    Route::post('/submissions/{submission}/unarchive', [AdminController::class, 'unarchive'])->name('submissions.unarchive');
    Route::delete('/submissions/{submission}', [AdminController::class, 'destroy'])->name('submissions.destroy');
});

require __DIR__.'/auth.php';
