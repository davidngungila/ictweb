<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController as PublicContactController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\PackageOrderController;
use App\Http\Controllers\QuoteRequestController;
use Illuminate\Http\Request;

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

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest admin routes (login screen)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });

    // Authenticated admin routes - single SPA shell renders every page client-side
    Route::middleware(['admin.auth'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
        // Catch-all: the dashboard SPA reads the URL and renders the matching module.
        Route::get('/{any}', function () {
            return view('admin.dashboard');
        })->where('any', '.*');
    });
});
// Main Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/team', function() { return view('pages.team'); })->name('team');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
// Pricing Pages
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/pricing/tour-websites', function() { return view('pages.pricing.tour-websites'); })->name('pricing.tour-websites');
Route::get('/pricing/web-development', function() { return view('pages.pricing.web-development'); })->name('pricing.web-development');
Route::get('/pricing/mobile-apps', function() { return view('pages.pricing.mobile-apps'); })->name('pricing.mobile-apps');
Route::get('/pricing/networking', function() { return view('pages.pricing.networking'); })->name('pricing.networking');
Route::get('/pricing/cybersecurity', function() { return view('pages.pricing.cybersecurity'); })->name('pricing.cybersecurity');
Route::get('/pricing/it-support', function() { return view('pages.pricing.it-support'); })->name('pricing.it-support');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/project/{slug}', [PageController::class, 'portfolioShow'])->name('portfolio.show')->where('slug', '[a-z0-9\-]+');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/thank-you', function () {
    return view('pages.thank-you');
})->name('thank.you');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogShow'])->name('blog.show')->where('slug', '[a-z0-9\-]+');
Route::get('/careers', function() { return view('pages.careers'); })->name('careers');

// Request Quote (single page — no online payment)
Route::get('/request-quote', [QuoteRequestController::class, 'show'])->name('request.quote');
Route::post('/request-quote', [QuoteRequestController::class, 'submit'])->name('request.quote.submit');

// Legacy package selection & payment URLs → quote page
Route::redirect('/package-selection', '/request-quote', 301)->name('package.selection');
Route::get('/package-selection/step1', function (Request $request) {
    return redirect()->route('request.quote', $request->query(), 301);
})->name('package.selection.step1');
Route::post('/package-selection/step1/process', fn () => redirect()->route('request.quote', [], 301));
Route::get('/package-selection/step2', fn () => redirect()->route('request.quote', [], 301))->name('package.selection.step2');
Route::post('/package-selection/step2/process', fn () => redirect()->route('request.quote', [], 301));
Route::post('/package/invoice/generate', fn () => redirect()->route('request.quote', [], 301))->name('package.invoice.generate');
Route::post('/package/order', fn () => redirect()->route('request.quote', [], 301))->name('package.order.process');

Route::redirect('/payment/checkout/{checkout}', '/request-quote', 301)->name('payment.show')->where('checkout', '[a-f0-9]{32}');
Route::redirect('/payment/checkout/{checkout}/initiate', '/request-quote', 301)->name('payment.initiate')->where('checkout', '[a-f0-9]{32}');
Route::redirect('/payment/checkout/{checkout}/check-status', '/request-quote', 301)->name('payment.check.status')->where('checkout', '[a-f0-9]{32}');
Route::redirect('/payment/checkout/{checkout}/confirmation', '/request-quote', 301)->name('payment.confirmation')->where('checkout', '[a-f0-9]{32}');
Route::redirect('/payment/checkout/{checkout}/success', '/request-quote', 301)->name('payment.success')->where('checkout', '[a-f0-9]{32}');
Route::redirect('/payment/checkout/{checkout}/receipt', '/request-quote', 301)->name('payment.receipt')->where('checkout', '[a-f0-9]{32}');
Route::redirect('/payment/{order}', '/request-quote', 301)->whereNumber('order');
Route::redirect('/test-payment', '/request-quote', 301)->name('test.payment');

// Service Pages
Route::get('/services/web-development', [PageController::class, 'servicesWebDevelopment'])->name('services.web-development');
Route::get('/services/mobile-app-development', [PageController::class, 'servicesMobileAppDevelopment'])->name('services.mobile-app-development');
Route::get('/services/system-development', [PageController::class, 'servicesSystemDevelopment'])->name('services.system-development');
Route::get('/services/network-installation', [PageController::class, 'servicesNetworkInstallation'])->name('services.network-installation');
Route::get('/services/cybersecurity', [PageController::class, 'servicesCybersecurity'])->name('services.cybersecurity');
Route::get('/services/it-support', [PageController::class, 'servicesItSupport'])->name('services.it-support');
Route::get('/services/ict-consultancy', [PageController::class, 'servicesIctConsultancy'])->name('services.ict-consultancy');
Route::get('/services/cloud-services', [PageController::class, 'servicesCloudServices'])->name('services.cloud-services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/companies', [PageController::class, 'companies'])->name('companies');
Route::get('/services/accounting', [PageController::class, 'servicesAccounting'])->name('services.accounting');
Route::get('/technology', [PageController::class, 'technology'])->name('technology');
Route::get('/privacy-policy', function () { return view('pages.privacy-policy'); })->name('privacy');
Route::get('/terms-and-conditions', function () { return view('pages.terms-and-conditions'); })->name('terms');
Route::get('/request-demo', [PageController::class, 'requestDemo'])->name('request-demo');
Route::post('/request-demo', [DemoController::class, 'submit'])->name('demo.submit');

// Contact Form Submission
Route::post('/contact', [PublicContactController::class, 'submit'])->name('contact.submit');

// Legacy welcome route - redirect to home
Route::get('/welcome', function () {
    return redirect()->route('home');
});

// Fallback for any other routes
Route::fallback(function () {
    return redirect()->route('home');
});
