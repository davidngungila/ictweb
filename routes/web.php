<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/savings', function () {
    return view('savings');
});

Route::get('/social-welfare', function () {
    return view('social-welfare');
});

Route::get('/investment', function () {
    return view('investment');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/documents', function () {
    return view('documents');
});

// Admin Routes with organized folder structure and live database
Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('admin.auth.login');
    });
    
    // Admin Authentication Routes
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Admin Dashboard Routes (Protected)
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/members', [AdminController::class, 'members'])->name('admin.members');
    Route::get('/loans', [AdminController::class, 'loans'])->name('admin.loans');
    Route::get('/savings', [AdminController::class, 'savings'])->name('admin.savings');
    Route::get('/events', [AdminController::class, 'events'])->name('admin.events');
    Route::get('/articles', [AdminController::class, 'articles'])->name('admin.articles');
    Route::get('/documents', [AdminController::class, 'documents'])->name('admin.documents');
    Route::get('/reports', [AdminController::class, 'reports'])->name('admin.reports');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::get('/database', [AdminController::class, 'database'])->name('admin.database');
    Route::get('/backups', [AdminController::class, 'backups'])->name('admin.backups');
    Route::get('/security', [AdminController::class, 'security'])->name('admin.security');
    Route::get('/notifications', [AdminController::class, 'notifications'])->name('admin.notifications');
    Route::get('/audit', [AdminController::class, 'audit'])->name('admin.audit');
});
