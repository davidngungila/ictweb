<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController as PublicContactController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DemoRequestController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PricingPlanController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\PackageOrderController;

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
        Route::get('/dashboard/mother', function() {
            return view('admin.dashboard.mother');
        })->name('dashboard.mother');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        
        // Demo Requests
        Route::get('/demo-requests', [DemoRequestController::class, 'index'])->name('demo-requests.index');
        Route::get('/demo-requests/data', [DemoRequestController::class, 'data'])->name('demo-requests.data');
        Route::get('/demo-requests/create', [DemoRequestController::class, 'create'])->name('demo-requests.create');
        Route::post('/demo-requests', [DemoRequestController::class, 'store'])->name('demo-requests.store');
        Route::get('/demo-requests/{demoRequest}', [DemoRequestController::class, 'show'])->name('demo-requests.show');
        Route::get('/demo-requests/{demoRequest}/edit', [DemoRequestController::class, 'edit'])->name('demo-requests.edit');
        Route::put('/demo-requests/{demoRequest}', [DemoRequestController::class, 'update'])->name('demo-requests.update');
        Route::delete('/demo-requests/{demoRequest}', [DemoRequestController::class, 'destroy'])->name('demo-requests.destroy');
        Route::post('/demo-requests/{demoRequest}/status', [DemoRequestController::class, 'updateStatus'])->name('demo-requests.update-status');
        Route::get('/demo-requests/stats', [DemoRequestController::class, 'stats'])->name('demo-requests.stats');
        Route::get('/demo-requests/export', [DemoRequestController::class, 'export'])->name('demo-requests.export');
        
        // Contacts
        Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('/contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::get('/contacts/{contact}/edit', [AdminContactController::class, 'edit'])->name('contacts.edit');
        Route::put('/contacts/{contact}', [AdminContactController::class, 'update'])->name('contacts.update');
        Route::delete('/contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
        Route::post('/contacts/{contact}/status', [AdminContactController::class, 'updateStatus'])->name('contacts.update-status');
        
        // Clients
        Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
        Route::get('/clients/data', [ClientController::class, 'data'])->name('clients.data');
        Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
        Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
        Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
        Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
        Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
        Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');
        Route::get('/clients/search', [ClientController::class, 'search'])->name('clients.search');
        Route::get('/clients/stats', [ClientController::class, 'stats'])->name('clients.stats');
        Route::get('/clients/export', [ClientController::class, 'export'])->name('clients.export');
        Route::post('/clients/import', [ClientController::class, 'import'])->name('clients.import');
        Route::get('/clients/import-sample', [ClientController::class, 'importSample'])->name('clients.import-sample');
        
        // Messages
        Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
        Route::get('/messages/data', [MessageController::class, 'data'])->name('messages.data');
        Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
        Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
        Route::get('/messages/{message}', [MessageController::class, 'show'])->name('messages.show');
        Route::get('/messages/{message}/edit', [MessageController::class, 'edit'])->name('messages.edit');
        Route::put('/messages/{message}', [MessageController::class, 'update'])->name('messages.update');
        Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
        Route::post('/messages/{message}/mark-read', [MessageController::class, 'markAsRead'])->name('messages.mark-read');
        Route::post('/messages/{message}/mark-unread', [MessageController::class, 'markAsUnread'])->name('messages.mark-unread');
        Route::post('/messages/{message}/mark-replied', [MessageController::class, 'markAsReplied'])->name('messages.mark-replied');
        Route::get('/messages/stats', [MessageController::class, 'stats'])->name('messages.stats');
        Route::get('/messages/export', [MessageController::class, 'export'])->name('messages.export');
        
        // Projects
        Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
        Route::get('/projects/data', [ProjectController::class, 'data'])->name('projects.data');
        Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
        Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
        Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
        Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
        Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
        Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
        Route::post('/projects/{project}/progress', [ProjectController::class, 'updateProgress'])->name('projects.progress');
        Route::get('/projects/stats', [ProjectController::class, 'stats'])->name('projects.stats');
        Route::get('/projects/export', [ProjectController::class, 'export'])->name('projects.export');
        
        // Services
        Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
        Route::get('/services/data', [ServiceController::class, 'data'])->name('services.data');
        Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
        Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
        Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
        Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
        Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
        Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');
        Route::post('/services/{service}/toggle-featured', [ServiceController::class, 'toggleFeatured'])->name('services.toggle-featured');
        Route::get('/services/stats', [ServiceController::class, 'stats'])->name('services.stats');
        Route::get('/services/export', [ServiceController::class, 'export'])->name('services.export');
        
        // File Manager
        Route::get('/file-manager', [FileManagerController::class, 'index'])->name('file-manager.index');
        Route::get('/file-manager/upload', [FileManagerController::class, 'upload'])->name('file-manager.upload');
        Route::get('/file-manager/create-folder', function() {
            return view('admin.file-manager.create-folder');
        })->name('file-manager.create-folder');
        Route::post('/file-manager', [FileManagerController::class, 'store'])->name('file-manager.store');
        Route::get('/file-manager/documents', [FileManagerController::class, 'documents'])->name('file-manager.documents');
        Route::get('/file-manager/downloads', [FileManagerController::class, 'downloads'])->name('file-manager.downloads');
        Route::get('/file-manager/{fileManager}', [FileManagerController::class, 'show'])->name('file-manager.show');
        Route::get('/file-manager/{fileManager}/edit', [FileManagerController::class, 'edit'])->name('file-manager.edit');
        Route::put('/file-manager/{fileManager}', [FileManagerController::class, 'update'])->name('file-manager.update');
        Route::delete('/file-manager/{fileManager}', [FileManagerController::class, 'destroy'])->name('file-manager.destroy');
        Route::get('/file-manager/{fileManager}/download', [FileManagerController::class, 'download'])->name('file-manager.download');
        Route::get('/file-manager/{fileManager}/preview', [FileManagerController::class, 'preview'])->name('file-manager.preview');
        Route::get('/file-manager/stats', [FileManagerController::class, 'stats'])->name('file-manager.stats');
        
        // Packages
        Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');
        Route::get('/packages/data', [PackageController::class, 'data'])->name('packages.data');
        Route::get('/packages/create', [PackageController::class, 'create'])->name('packages.create');
        Route::post('/packages', [PackageController::class, 'store'])->name('packages.store');
        Route::get('/packages/{package}', [PackageController::class, 'show'])->name('packages.show');
        Route::get('/packages/{package}/edit', [PackageController::class, 'edit'])->name('packages.edit');
        Route::put('/packages/{package}', [PackageController::class, 'update'])->name('packages.update');
        Route::delete('/packages/{package}', [PackageController::class, 'destroy'])->name('packages.destroy');
        Route::post('/packages/{package}/toggle-featured', [PackageController::class, 'toggleFeatured'])->name('packages.toggle-featured');
        Route::get('/packages/stats', [PackageController::class, 'stats'])->name('packages.stats');
        Route::get('/packages/export', [PackageController::class, 'export'])->name('packages.export');
        
        // Pricing
        Route::get('/pricing', [PricingPlanController::class, 'index'])->name('pricing.index');
        Route::get('/pricing/data', [PricingPlanController::class, 'data'])->name('pricing.data');
        Route::get('/pricing/create', [PricingPlanController::class, 'create'])->name('pricing.create');
        Route::post('/pricing', [PricingPlanController::class, 'store'])->name('pricing.store');
        Route::get('/pricing/{pricingPlan}', [PricingPlanController::class, 'show'])->name('pricing.show');
        Route::get('/pricing/{pricingPlan}/edit', [PricingPlanController::class, 'edit'])->name('pricing.edit');
        Route::put('/pricing/{pricingPlan}', [PricingPlanController::class, 'update'])->name('pricing.update');
        Route::delete('/pricing/{pricingPlan}', [PricingPlanController::class, 'destroy'])->name('pricing.destroy');
        Route::post('/pricing/{pricingPlan}/toggle-active', [PricingPlanController::class, 'toggleActive'])->name('pricing.toggle-active');
        Route::get('/pricing/stats', [PricingPlanController::class, 'stats'])->name('pricing.stats');
        Route::get('/pricing/export', [PricingPlanController::class, 'export'])->name('pricing.export');
        
        // Offers
        Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');
        Route::get('/offers/data', [OfferController::class, 'data'])->name('offers.data');
        Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
        Route::post('/offers', [OfferController::class, 'store'])->name('offers.store');
        Route::get('/offers/{offer}', [OfferController::class, 'show'])->name('offers.show');
        Route::get('/offers/{offer}/edit', [OfferController::class, 'edit'])->name('offers.edit');
        Route::put('/offers/{offer}', [OfferController::class, 'update'])->name('offers.update');
        Route::delete('/offers/{offer}', [OfferController::class, 'destroy'])->name('offers.destroy');
        Route::post('/offers/{offer}/toggle-active', [OfferController::class, 'toggleActive'])->name('offers.toggle-active');
        Route::get('/offers/stats', [OfferController::class, 'stats'])->name('offers.stats');
        Route::get('/offers/export', [OfferController::class, 'export'])->name('offers.export');
        
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
        Route::get('/file-manager/documents', [FileManagerController::class, 'documents'])->name('file-manager.documents');
        
        Route::get('/file-manager/uploads', function() {
            return view('admin.file-manager.uploads');
        })->name('file-manager.uploads');
        
        Route::get('/file-manager/downloads', [FileManagerController::class, 'downloads'])->name('file-manager.downloads');
        
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
// Pricing Pages
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/pricing/tour-websites', function() { return view('pages.pricing.tour-websites'); })->name('pricing.tour-websites');
Route::get('/pricing/web-development', function() { return view('pages.pricing.web-development'); })->name('pricing.web-development');
Route::get('/pricing/mobile-apps', function() { return view('pages.pricing.mobile-apps'); })->name('pricing.mobile-apps');
Route::get('/pricing/networking', function() { return view('pages.pricing.networking'); })->name('pricing.networking');
Route::get('/pricing/cybersecurity', function() { return view('pages.pricing.cybersecurity'); })->name('pricing.cybersecurity');
Route::get('/pricing/it-support', function() { return view('pages.pricing.it-support'); })->name('pricing.it-support');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Package Selection & Payment
Route::get('/package-selection', [PackageOrderController::class, 'showSelectionForm'])->name('package.selection');

// Multi-step wizard routes (3-step flow)
Route::get('/package-selection/step1', [PackageOrderController::class, 'showStep1'])->name('package.selection.step1');
Route::post('/package-selection/step1/process', [PackageOrderController::class, 'processStep1'])->name('package.selection.step1.process');
Route::get('/package-selection/step2', [PackageOrderController::class, 'showStep2'])->name('package.selection.step2');
Route::post('/package-selection/step2/process', [PackageOrderController::class, 'processStep2'])->name('package.selection.step2.process');
Route::post('/package/invoice/generate', [PackageOrderController::class, 'generateInvoice'])->name('package.invoice.generate');

Route::post('/package/order', [PackageOrderController::class, 'processOrder'])->name('package.order.process');
Route::get('/payment/{order}', [PackageOrderController::class, 'showPaymentPage'])->name('payment.show');
Route::post('/payment/{order}/initiate', [PackageOrderController::class, 'initiatePayment'])->name('payment.initiate');
Route::get('/payment/{order}/check-status', [PackageOrderController::class, 'checkPaymentStatus'])->name('payment.check.status');
Route::get('/payment/confirmation/{order}', [PackageOrderController::class, 'paymentConfirmation'])->name('payment.confirmation');
Route::get('/payment/success/{order}', [PackageOrderController::class, 'showPaymentSuccess'])->name('payment.success');
Route::get('/payment/receipt/{order}', [PackageOrderController::class, 'downloadReceipt'])->name('payment.receipt');
Route::post('/webhook/snippe', [PackageOrderController::class, 'handleWebhook'])->name('webhook.snippe')->withoutMiddleware(['csrf']);

// Test payment route
Route::get('/test-payment', function() {
    // Create a test order
    $order = \App\Models\PackageOrder::create([
        'order_number' => 'TEST-' . time(),
        'client_name' => 'Test User',
        'client_email' => 'test@example.com',
        'client_phone' => '0622239304',
        'service_id' => 1,
        'package_id' => 1,
        'selected_features' => [],
        'selected_addons' => [],
        'total_price' => 2000,
        'advance_payment' => 2000,
        'remaining_balance' => 0,
        'status' => 'pending',
        'notes' => 'Test payment',
    ]);
    
    // Initiate payment
    $snippeService = new \App\Services\SnippePaymentService();
    $payment = $snippeService->createMobileMoneyPayment($order);
    
    if ($payment) {
        $order->update([
            'payment_reference' => $payment['reference'],
            'payment_token' => $payment['payment_token'],
            'payment_status' => 'pending',
        ]);
        
        return response()->json([
            'success' => true,
            'order_id' => $order->id,
            'payment_reference' => $payment['reference'],
            'payment_token' => $payment['payment_token'],
            'message' => 'Payment initiated. Check your phone for USSD prompt.',
        ]);
    }
    
    return response()->json([
        'success' => false,
        'message' => 'Failed to initiate payment',
    ]);
})->name('test.payment');

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
