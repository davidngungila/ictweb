<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController as PublicContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DemoRequestController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\ExpenseController;

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
    // Guest admin routes
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });
    
    // Authenticated admin routes
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        
        // Demo Requests
        Route::get('/demo-requests', [DemoRequestController::class, 'index'])->name('demo-requests.index');
        Route::get('/demo-requests/{demoRequest}', [DemoRequestController::class, 'show'])->name('demo-requests.show');
        Route::get('/demo-requests/{demoRequest}/edit', [DemoRequestController::class, 'edit'])->name('demo-requests.edit');
        Route::put('/demo-requests/{demoRequest}', [DemoRequestController::class, 'update'])->name('demo-requests.update');
        Route::delete('/demo-requests/{demoRequest}', [DemoRequestController::class, 'destroy'])->name('demo-requests.destroy');
        Route::post('/demo-requests/{demoRequest}/status', [DemoRequestController::class, 'updateStatus'])->name('demo-requests.update-status');
        
        // Contacts
        Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('/contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::get('/contacts/{contact}/edit', [AdminContactController::class, 'edit'])->name('contacts.edit');
        Route::put('/contacts/{contact}', [AdminContactController::class, 'update'])->name('contacts.update');
        Route::delete('/contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
        Route::post('/contacts/{contact}/status', [AdminContactController::class, 'updateStatus'])->name('contacts.update-status');
        
        // Clients
        Route::get('/clients', function() {
            return view('admin.clients.index');
        })->name('clients.index');
        
        // Projects
        Route::get('/projects', function() {
            return view('admin.projects.index');
        })->name('projects.index');
        
        // Services
        Route::get('/services', function() {
            return view('admin.services.index');
        })->name('services.index');
        
        // Packages
        Route::get('/packages', function() {
            return view('admin.packages.index');
        })->name('packages.index');
        
        // Pricing
        Route::get('/pricing', function() {
            return view('admin.pricing.index');
        })->name('pricing.index');
        
        // Offers
        Route::get('/offers', function() {
            return view('admin.offers.index');
        })->name('offers.index');
        
        // Payments
        Route::get('/payments', function() {
            return view('admin.payments.index');
        })->name('payments.index');
        
        // Roles
        Route::get('/roles', function() {
            return view('admin.roles.index');
        })->name('roles.index');
        
        // Integrations
        Route::get('/integrations', function() {
            return view('admin.integrations.index');
        })->name('integrations.index');
        
        // Profile
        Route::get('/profile', function() {
            return view('admin.profile.index');
        })->name('profile.index');
        
        // Help
        Route::get('/help', function() {
            return view('admin.help.index');
        })->name('help.index');
        
        // Client Portal
        Route::get('/client-portal/dashboard', function() {
            return view('admin.client-portal.dashboard');
        })->name('client-portal.dashboard');
        
        Route::get('/client-portal/projects', function() {
            return view('admin.client-portal.projects');
        })->name('client-portal.projects');
        
        Route::get('/client-portal/progress', function() {
            return view('admin.client-portal.progress');
        })->name('client-portal.progress');
        
        Route::get('/client-portal/messages', function() {
            return view('admin.client-portal.messages');
        })->name('client-portal.messages');
        
        Route::get('/client-portal/invoices', function() {
            return view('admin.client-portal.invoices');
        })->name('client-portal.invoices');
        
        Route::get('/client-portal/feedback', function() {
            return view('admin.client-portal.feedback');
        })->name('client-portal.feedback');
        
        // File Manager
        Route::get('/file-manager/documents', function() {
            return view('admin.file-manager.documents');
        })->name('file-manager.documents');
        
        Route::get('/file-manager/uploads', function() {
            return view('admin.file-manager.uploads');
        })->name('file-manager.uploads');
        
        Route::get('/file-manager/downloads', function() {
            return view('admin.file-manager.downloads');
        })->name('file-manager.downloads');
        
        // Communication Center
        Route::get('/communication/internal-chat', function() {
            return view('admin.communication.internal-chat');
        })->name('communication.internal-chat');
        
        Route::get('/communication/email-logs', function() {
            return view('admin.communication.email-logs');
        })->name('communication.email-logs');
        
        // Security
        Route::get('/security/access-logs', function() {
            return view('admin.security.access-logs');
        })->name('security.access-logs');
        
        Route::get('/security/login-attempts', function() {
            return view('admin.security.login-attempts');
        })->name('security.login-attempts');
        
        Route::get('/security/api-keys', function() {
            return view('admin.security.api-keys');
        })->name('security.api-keys');
        
        // Reports & Analytics
        Route::get('/reports/sales-reports', function() {
            return view('admin.reports.sales-reports');
        })->name('reports.sales-reports');
        
        Route::get('/reports/project-reports', function() {
            return view('admin.reports.project-reports');
        })->name('reports.project-reports');
        
        Route::get('/reports/performance-analytics', function() {
            return view('admin.reports.performance-analytics');
        })->name('reports.performance-analytics');
        
        // Notifications
        Route::get('/notifications/alerts', function() {
            return view('admin.notifications.alerts');
        })->name('notifications.alerts');
        
        Route::get('/notifications/announcements', function() {
            return view('admin.notifications.announcements');
        })->name('notifications.announcements');
        
        // Task Management
        Route::get('/tasks/tasks', function() {
            return view('admin.tasks.tasks');
        })->name('tasks.tasks');
        
        Route::get('/tasks/project-tasks', function() {
            return view('admin.tasks.project-tasks');
        })->name('tasks.project-tasks');
        
        Route::get('/tasks/deadlines', function() {
            return view('admin.tasks.deadlines');
        })->name('tasks.deadlines');
        
        // Advanced Management Pages
        Route::get('/demo-requests', function() {
            return view('admin.demo-requests.advanced');
        })->name('demo-requests.advanced');
        
        Route::get('/contacts', function() {
            return view('admin.contacts.advanced');
        })->name('contacts.advanced');
        
        Route::get('/projects', function() {
            return view('admin.projects.advanced');
        })->name('projects.advanced');
        
        Route::get('/services', function() {
            return view('admin.services.advanced');
        })->name('services.advanced');
        
        // Advanced Tasks Management
        Route::get('/tasks/advanced', function() {
            return view('admin.tasks.advanced');
        })->name('tasks.advanced');
        
        // Advanced Package Management Pages
        Route::get('/packages', function() {
            return view('admin.packages.advanced');
        })->name('packages.advanced');
        
        Route::get('/pricing', function() {
            return view('admin.pricing.advanced');
        })->name('pricing.advanced');
        
        Route::get('/offers', function() {
            return view('admin.offers.advanced');
        })->name('offers.advanced');
        
        // Settings Sub-pages
        Route::get('/settings/general', function() {
            return view('admin.settings.general');
        })->name('settings.general');
        
        Route::get('/settings/email', function() {
            return view('admin.settings.email');
        })->name('settings.email');
        
        Route::get('/settings/security', function() {
            return view('admin.settings.security');
        })->name('settings.security');
        
        Route::get('/settings/backup', function() {
            return view('admin.settings.backup');
        })->name('settings.backup');
        
        Route::get('/settings/sms', function() {
            return view('admin.settings.sms');
        })->name('settings.sms');
        
        // Financial
        Route::get('/finances/overview', function() {
            return view('admin.finances.overview');
        })->name('finances.overview');
        
        Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
        Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
        Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
        Route::get('/invoices/{invoice}', [InvoiceController::class, 'show'])->name('invoices.show');
        Route::get('/invoices/{invoice}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit');
        Route::put('/invoices/{invoice}', [InvoiceController::class, 'update'])->name('invoices.update');
        Route::delete('/invoices/{invoice}', [InvoiceController::class, 'destroy'])->name('invoices.destroy');
        Route::post('/invoices/{invoice}/mark-paid', [InvoiceController::class, 'markAsPaid'])->name('invoices.mark-paid');
        Route::get('/invoices/{invoice}/pdf', [InvoiceController::class, 'downloadPdf'])->name('invoices.pdf');
        
        Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
        Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
        Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');
        Route::get('/expenses/{expense}', [ExpenseController::class, 'show'])->name('expenses.show');
        Route::get('/expenses/{expense}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');
        Route::put('/expenses/{expense}', [ExpenseController::class, 'update'])->name('expenses.update');
        Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');
        Route::post('/expenses/{expense}/approve', [ExpenseController::class, 'approve'])->name('expenses.approve');
        Route::post('/expenses/{expense}/reject', [ExpenseController::class, 'reject'])->name('expenses.reject');
        
        // System
        Route::get('/users', function() {
            return view('admin.users.index');
        })->name('users.index');
        
        Route::get('/settings', function() {
            return view('admin.settings.index');
        })->name('settings.index');
    });
});

// Main Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');

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
