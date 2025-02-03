<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;

// Frontend Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'show']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/faq', function () {
    return view('frontend.faq');
});

// Authentication Routes
Route::auth(['register' => false]); // Disable registration

// Admin Routes
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // News Routes
    Route::resource('news', AdminNewsController::class);

    // Gallery Routes
    Route::resource('gallery', AdminGalleryController::class);
});

//testing

Route::get('/layout', function () {
    return view('frontend.test');
});
