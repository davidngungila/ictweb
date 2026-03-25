<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Main Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Service Pages
Route::get('/services/web-development', [PageController::class, 'servicesWebDevelopment'])->name('services.web-development');
Route::get('/services/mobile-app-development', [PageController::class, 'servicesMobileAppDevelopment'])->name('services.mobile-app-development');
Route::get('/services/network-installation', [PageController::class, 'servicesNetworkInstallation'])->name('services.network-installation');
Route::get('/services/cybersecurity', [PageController::class, 'servicesCybersecurity'])->name('services.cybersecurity');
Route::get('/services/it-support', [PageController::class, 'servicesItSupport'])->name('services.it-support');
Route::get('/services/ict-consultancy', [PageController::class, 'servicesIctConsultancy'])->name('services.ict-consultancy');

// Contact Form Submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Legacy welcome route - redirect to home
Route::get('/welcome', function () {
    return redirect()->route('home');
});

// Fallback for any other routes
Route::fallback(function () {
    return redirect()->route('home');
});
