<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') - Jezdan Technology</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N2F56W4HPN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-N2F56W4HPN');
    </script>
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }
        .sidebar-active {
            background-color: rgb(59 130 246);
            color: white;
        }
        .text-base {
            font-size: 1rem !important;
        }
        .text-sm {
            font-size: 0.95rem !important;
        }
        .text-xs {
            font-size: 0.875rem !important;
        }
        .text-lg {
            font-size: 1.25rem !important;
        }
        .text-xl {
            font-size: 1.5rem !important;
        }
        .text-2xl {
            font-size: 2rem !important;
        }
        .text-3xl {
            font-size: 2.5rem !important;
        }
        .rotate-180 {
            transform: rotate(180deg);
        }
        .sidebar-header {
            position: sticky;
            top: 0;
            z-index: 20;
            background-color: rgb(31 41 55);
        }
        .sidebar-content {
            height: calc(100vh - 80px);
            overflow-y: auto;
        }
        .sidebar-content::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar-content::-webkit-scrollbar-track {
            background: rgb(31 41 55);
        }
        .sidebar-content::-webkit-scrollbar-thumb {
            background: rgb(75 85 99);
            border-radius: 2px;
        }
        .sidebar-content::-webkit-scrollbar-thumb:hover {
            background: rgb(107 114 128);
        }
        @media (max-width: 768px) {
            .mobile-sidebar {
                position: fixed;
                inset: 0;
                z-index: 40;
                background: rgba(0, 0, 0, 0.5);
            }
            .mobile-sidebar.hidden {
                display: none;
            }
        }
    </style>
    
    <!-- PDF.js for PDF previews -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script>
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
    </script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Mobile Sidebar Overlay -->
        <div x-data="{ mobileSidebarOpen: false }" 
             x-show="mobileSidebarOpen" 
             @click="mobileSidebarOpen = false"
             class="mobile-sidebar fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden">
        </div>

        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">
                <!-- Static Header -->
                <div class="sidebar-header flex items-center flex-shrink-0 px-4 py-5">
                    <div class="flex items-center">
                        <div class="h-8 w-8 bg-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-cog text-white"></i>
                        </div>
                        <div class="ml-3">
                            <h2 class="text-white text-lg font-semibold">Jezdan Tech</h2>
                            <p class="text-gray-400 text-sm">2026</p>
                        </div>
                    </div>
                </div>
                
                <!-- Scrollable Content -->
                <div class="sidebar-content flex flex-col bg-gray-800 pb-4">
                    <nav class="flex-1 px-4 space-y-2 pt-8">
                        <!-- MAIN NAVIGATION -->
                        <a href="{{ route('admin.dashboard') }}" 
                           class="{{ request()->is('admin/dashboard') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-4 py-3 text-base font-medium rounded-md mb-4">
                            <i class="fas fa-home mr-3"></i>
                            Dashboard
                        </a>
                        
                        <!-- BUSINESS DROPDOWN -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('business-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-briefcase mr-3"></i>
                                    Business
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="business-dropdown-icon"></i>
                            </button>
                            
                            <div id="business-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.clients.index') }}" 
                                   class="{{ request()->is('admin/clients*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-users mr-3 text-xs"></i>
                                    Clients
                                </a>
                                <a href="{{ route('admin.demo-requests.advanced') }}" 
                                   class="{{ request()->is('admin/demo-requests*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-calendar-check mr-3 text-xs"></i>
                                    Demos
                                </a>
                                <a href="{{ route('admin.contacts.advanced') }}" 
                                   class="{{ request()->is('admin/contacts*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-envelope mr-3 text-xs"></i>
                                    Messages
                                </a>
                                <a href="{{ route('admin.projects.advanced') }}" 
                                   class="{{ request()->is('admin/projects*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-folder-open mr-3 text-xs"></i>
                                    Projects
                                </a>
                                <a href="{{ route('admin.services.advanced') }}" 
                                   class="{{ request()->is('admin/services*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-cogs mr-3 text-xs"></i>
                                    Services
                                </a>
                                <a href="{{ route('admin.file-manager.index') }}" 
                                   class="{{ request()->is('admin/file-manager*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-folder mr-3 text-xs"></i>
                                    File Manager
                                </a>
                            </div>
                        </div>
                        
                        <!-- SERVICE DROPDOWN -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('packages-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-box mr-3"></i>
                                    Service
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="packages-dropdown-icon"></i>
                            </button>
                            
                            <div id="packages-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.packages.index') }}" 
                                   class="{{ request()->is('admin/packages*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-box mr-3 text-xs"></i>
                                    Packages
                                </a>
                                <a href="{{ route('admin.pricing.index') }}" 
                                   class="{{ request()->is('admin/pricing*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-tags mr-3 text-xs"></i>
                                    Pricing
                                </a>
                                <a href="{{ route('admin.offers.index') }}" 
                                   class="{{ request()->is('admin/offers*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-percentage mr-3 text-xs"></i>
                                    Offers / Discounts
                                </a>
                            </div>
                        </div>
                        
                        <!-- FINANCE DROPDOWN -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('financial-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-dollar-sign mr-3"></i>
                                    Finance
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="financial-dropdown-icon"></i>
                            </button>
                            
                            <div id="financial-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.finances.overview') }}" 
                                   class="{{ request()->is('admin/finances*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-chart-line mr-3 text-xs"></i>
                                    Overview
                                </a>
                                <a href="{{ route('admin.invoices.index') }}" 
                                   class="{{ request()->is('admin/invoices*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-file-invoice-dollar mr-3 text-xs"></i>
                                    Invoices
                                </a>
                                <a href="{{ route('admin.expenses.index') }}" 
                                   class="{{ request()->is('admin/expenses*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-money-bill-wave mr-3 text-xs"></i>
                                    Expenses
                                </a>
                                <a href="{{ route('admin.payments.index') }}" 
                                   class="{{ request()->is('admin/payments*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-credit-card mr-3 text-xs"></i>
                                    Payments
                                </a>
                            </div>
                        </div>
                        
                        <!-- SYSTEM DROPDOWN -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('system-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-cog mr-3"></i>
                                    System
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="system-dropdown-icon"></i>
                            </button>
                            
                            <div id="system-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.users.index') }}" 
                                   class="{{ request()->is('admin/users*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-user-shield mr-3 text-xs"></i>
                                    Users
                                </a>
                                <a href="{{ route('admin.roles.index') }}" 
                                   class="{{ request()->is('admin/roles*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-key mr-3 text-xs"></i>
                                    Roles
                                </a>
                                <a href="{{ route('admin.settings.index') }}" 
                                   class="{{ request()->is('admin/settings*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-cog mr-3 text-xs"></i>
                                    Settings
                                </a>
                                <a href="{{ route('admin.integrations.index') }}" 
                                   class="{{ request()->is('admin/integrations*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-plug mr-3 text-xs"></i>
                                    Integrations
                                </a>
                            </div>
                        </div>
                        
                        <!-- CLIENT PORTAL -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('client-portal-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-users mr-3"></i>
                                    Client Portal
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="client-portal-dropdown-icon"></i>
                            </button>
                            
                            <div id="client-portal-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.client-portal.dashboard') }}" 
                                   class="{{ request()->is('admin/client-portal/dashboard*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-tachometer-alt mr-3 text-xs"></i>
                                    Dashboard
                                </a>
                                <a href="{{ route('admin.client-portal.projects') }}" 
                                   class="{{ request()->is('admin/client-portal/projects*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-folder-open mr-3 text-xs"></i>
                                    Projects
                                </a>
                                <a href="{{ route('admin.client-portal.progress') }}" 
                                   class="{{ request()->is('admin/client-portal/progress*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-chart-line mr-3 text-xs"></i>
                                    Progress Tracking
                                </a>
                                <a href="{{ route('admin.client-portal.messages') }}" 
                                   class="{{ request()->is('admin/client-portal/messages*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-comments mr-3 text-xs"></i>
                                    Messages
                                </a>
                                <a href="{{ route('admin.client-portal.invoices') }}" 
                                   class="{{ request()->is('admin/client-portal/invoices*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-file-invoice mr-3 text-xs"></i>
                                    Invoices
                                </a>
                                <a href="{{ route('admin.client-portal.feedback') }}" 
                                   class="{{ request()->is('admin/client-portal/feedback*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-star mr-3 text-xs"></i>
                                    Feedback
                                </a>
                            </div>
                        </div>
                        
                        <!-- FILE MANAGER -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('file-manager-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-folder mr-3"></i>
                                    File Manager
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="file-manager-dropdown-icon"></i>
                            </button>
                            
                            <div id="file-manager-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.file-manager.documents') }}" 
                                   class="{{ request()->is('admin/file-manager/documents*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-file-alt mr-3 text-xs"></i>
                                    Documents
                                </a>
                                <a href="{{ route('admin.file-manager.uploads') }}" 
                                   class="{{ request()->is('admin/file-manager/uploads*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-cloud-upload-alt mr-3 text-xs"></i>
                                    Uploads
                                </a>
                                <a href="{{ route('admin.file-manager.downloads') }}" 
                                   class="{{ request()->is('admin/file-manager/downloads*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-download mr-3 text-xs"></i>
                                    Downloads
                                </a>
                            </div>
                        </div>
                        
                        <!-- COMMUNICATION CENTER -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('communication-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-comments mr-3"></i>
                                    Communication
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="communication-dropdown-icon"></i>
                            </button>
                            
                            <div id="communication-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.communication.internal-chat') }}" 
                                   class="{{ request()->is('admin/communication/internal-chat*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-comment-dots mr-3 text-xs"></i>
                                    Internal Chat
                                </a>
                                <a href="{{ route('admin.communication.email-logs') }}" 
                                   class="{{ request()->is('admin/communication/email-logs*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-envelope-open-text mr-3 text-xs"></i>
                                    Email Logs
                                </a>
                            </div>
                        </div>
                        
                        <!-- SECURITY -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('security-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-shield-alt mr-3"></i>
                                    Security
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="security-dropdown-icon"></i>
                            </button>
                            
                            <div id="security-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.security.access-logs') }}" 
                                   class="{{ request()->is('admin/security/access-logs*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-list-alt mr-3 text-xs"></i>
                                    Access Logs
                                </a>
                                <a href="{{ route('admin.security.login-attempts') }}" 
                                   class="{{ request()->is('admin/security/login-attempts*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-user-shield mr-3 text-xs"></i>
                                    Login Attempts
                                </a>
                                <a href="{{ route('admin.security.api-keys') }}" 
                                   class="{{ request()->is('admin/security/api-keys*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-key mr-3 text-xs"></i>
                                    API Keys
                                </a>
                            </div>
                        </div>
                        
                        <!-- REPORTS & ANALYTICS -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('reports-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-chart-bar mr-3"></i>
                                    Reports
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="reports-dropdown-icon"></i>
                            </button>
                            
                            <div id="reports-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.reports.sales-reports') }}" 
                                   class="{{ request()->is('admin/reports/sales-reports*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-dollar-sign mr-3 text-xs"></i>
                                    Sales Reports
                                </a>
                                <a href="{{ route('admin.reports.project-reports') }}" 
                                   class="{{ request()->is('admin/reports/project-reports*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-folder-open mr-3 text-xs"></i>
                                    Project Reports
                                </a>
                                <a href="{{ route('admin.reports.performance-analytics') }}" 
                                   class="{{ request()->is('admin/reports/performance-analytics*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-chart-line mr-3 text-xs"></i>
                                    Performance
                                </a>
                            </div>
                        </div>
                        
                        <!-- NOTIFICATIONS -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('notifications-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-bell mr-3"></i>
                                    Notifications
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="notifications-dropdown-icon"></i>
                            </button>
                            
                            <div id="notifications-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.notifications.alerts') }}" 
                                   class="{{ request()->is('admin/notifications/alerts*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-exclamation-triangle mr-3 text-xs"></i>
                                    Alerts
                                </a>
                                <a href="{{ route('admin.notifications.announcements') }}" 
                                   class="{{ request()->is('admin/notifications/announcements*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-bullhorn mr-3 text-xs"></i>
                                    Announcements
                                </a>
                            </div>
                        </div>
                        
                        <!-- TASK MANAGEMENT -->
                        <div class="space-y-1 mb-3">
                            <button onclick="toggleDropdown('tasks-dropdown')" 
                                    class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                                <div class="flex items-center">
                                    <i class="fas fa-tasks mr-3"></i>
                                    Task Management
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform" id="tasks-dropdown-icon"></i>
                            </button>
                            
                            <div id="tasks-dropdown" class="hidden space-y-1 pl-10">
                                <a href="{{ route('admin.tasks.tasks') }}" 
                                   class="{{ request()->is('admin/tasks/tasks*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-check-square mr-3 text-xs"></i>
                                    Tasks
                                </a>
                                <a href="{{ route('admin.tasks.project-tasks') }}" 
                                   class="{{ request()->is('admin/tasks/project-tasks*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-project-diagram mr-3 text-xs"></i>
                                    Project Tasks
                                </a>
                                <a href="{{ route('admin.tasks.deadlines') }}" 
                                   class="{{ request()->is('admin/tasks/deadlines*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <i class="fas fa-calendar-alt mr-3 text-xs"></i>
                                    Deadlines
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Mobile Sidebar -->
        <div id="mobileSidebar" 
             x-data="{ mobileSidebarOpen: false }"
             x-show="mobileSidebarOpen" 
             x-transition:enter="transition ease-in-out duration-300"
             x-transition:enter-start="opacity-0 transform -translate-x-full"
             x-transition:enter-end="opacity-100 transform translate-x-0"
             x-transition:leave="transition ease-in-out duration-300"
             x-transition:leave-start="opacity-100 transform translate-x-0"
             x-transition:leave-end="opacity-0 transform -translate-x-full"
             class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-800 md:hidden">
            
            <!-- Mobile Header -->
            <div class="sidebar-header flex items-center justify-between px-4 py-5">
                <div class="flex items-center">
                    <div class="h-8 w-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-cog text-white"></i>
                    </div>
                    <div class="ml-3">
                        <h2 class="text-white text-lg font-semibold">Jezdan Technology</h2>
                        <p class="text-gray-400 text-sm">Delivering Smart Solutions for Better Business</p>
                    </div>
                </div>
                <button @click="mobileSidebarOpen = false" class="text-gray-400 hover:text-white">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <!-- Mobile Content -->
            <div class="sidebar-content">
                <nav class="flex-1 px-4 space-y-2">
                    <!-- MAIN NAVIGATION -->
                    <a href="{{ route('admin.dashboard') }}" 
                       @click="mobileSidebarOpen = false"
                       class="{{ request()->is('admin/dashboard') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-4 py-3 text-base font-medium rounded-md mb-4">
                        <i class="fas fa-home mr-3"></i>
                        Dashboard
                    </a>
                    
                    <!-- BUSINESS DROPDOWN -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-business-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-briefcase mr-3"></i>
                                Business
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-business-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-business-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.clients.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/clients*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-users mr-3 text-xs"></i>
                                Clients
                            </a>
                            <a href="{{ route('admin.demo-requests.advanced') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/demo-requests*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-calendar-check mr-3 text-xs"></i>
                                Demos
                            </a>
                            <a href="{{ route('admin.contacts.advanced') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/contacts*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-envelope mr-3 text-xs"></i>
                                Messages
                            </a>
                            <a href="{{ route('admin.projects.advanced') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/projects*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-folder-open mr-3 text-xs"></i>
                                Projects
                            </a>
                            <a href="{{ route('admin.services.advanced') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/services*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-cogs mr-3 text-xs"></i>
                                Services
                            </a>
                        </div>
                    </div>
                    
                    <!-- SERVICE DROPDOWN -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-packages-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-box mr-3"></i>
                                Service
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-packages-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-packages-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.packages.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/packages*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-box mr-3 text-xs"></i>
                                Packages
                            </a>
                            <a href="{{ route('admin.pricing.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/pricing*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-tags mr-3 text-xs"></i>
                                Pricing
                            </a>
                            <a href="{{ route('admin.offers.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/offers*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-percentage mr-3 text-xs"></i>
                                Offers / Discounts
                            </a>
                        </div>
                    </div>
                    
                    <!-- FINANCE DROPDOWN -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-financial-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-dollar-sign mr-3"></i>
                                Finance
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-financial-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-financial-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.finances.overview') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/finances*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-chart-line mr-3 text-xs"></i>
                                Overview
                            </a>
                            <a href="{{ route('admin.invoices.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/invoices*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-file-invoice-dollar mr-3 text-xs"></i>
                                Invoices
                            </a>
                            <a href="{{ route('admin.expenses.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/expenses*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-money-bill-wave mr-3 text-xs"></i>
                                Expenses
                            </a>
                            <a href="{{ route('admin.payments.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/payments*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-credit-card mr-3 text-xs"></i>
                                Payments
                            </a>
                        </div>
                    </div>
                    
                    <!-- SYSTEM DROPDOWN -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-system-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-cog mr-3"></i>
                                System
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-system-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-system-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.users.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/users*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-user-shield mr-3 text-xs"></i>
                                Users
                            </a>
                            <a href="{{ route('admin.roles.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/roles*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-key mr-3 text-xs"></i>
                                Roles
                            </a>
                            <a href="{{ route('admin.settings.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/settings*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-cog mr-3 text-xs"></i>
                                Settings
                            </a>
                            <a href="{{ route('admin.integrations.index') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/integrations*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-plug mr-3 text-xs"></i>
                                Integrations
                            </a>
                        </div>
                    </div>
                    
                    <!-- CLIENT PORTAL -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-client-portal-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-users mr-3"></i>
                                Client Portal
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-client-portal-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-client-portal-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.client-portal.dashboard') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/client-portal/dashboard*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-tachometer-alt mr-3 text-xs"></i>
                                Dashboard
                            </a>
                            <a href="{{ route('admin.client-portal.projects') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/client-portal/projects*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-folder-open mr-3 text-xs"></i>
                                Projects
                            </a>
                            <a href="{{ route('admin.client-portal.progress') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/client-portal/progress*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-chart-line mr-3 text-xs"></i>
                                Progress Tracking
                            </a>
                            <a href="{{ route('admin.client-portal.messages') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/client-portal/messages*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-comments mr-3 text-xs"></i>
                                Messages
                            </a>
                            <a href="{{ route('admin.client-portal.invoices') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/client-portal/invoices*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-file-invoice mr-3 text-xs"></i>
                                Invoices
                            </a>
                            <a href="{{ route('admin.client-portal.feedback') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/client-portal/feedback*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-star mr-3 text-xs"></i>
                                Feedback
                            </a>
                        </div>
                    </div>
                    
                    <!-- FILE MANAGER -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-file-manager-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-folder mr-3"></i>
                                File Manager
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-file-manager-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-file-manager-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.file-manager.documents') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/file-manager/documents*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-file-alt mr-3 text-xs"></i>
                                Documents
                            </a>
                            <a href="{{ route('admin.file-manager.uploads') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/file-manager/uploads*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-cloud-upload-alt mr-3 text-xs"></i>
                                Uploads
                            </a>
                            <a href="{{ route('admin.file-manager.downloads') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/file-manager/downloads*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-download mr-3 text-xs"></i>
                                Downloads
                            </a>
                        </div>
                    </div>
                    
                    <!-- COMMUNICATION CENTER -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-communication-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-comments mr-3"></i>
                                Communication Center
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-communication-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-communication-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.communication.internal-chat') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/communication/internal-chat*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-comment-dots mr-3 text-xs"></i>
                                Internal Chat
                            </a>
                            <a href="{{ route('admin.communication.email-logs') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/communication/email-logs*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-envelope-open-text mr-3 text-xs"></i>
                                Email Logs
                            </a>
                        </div>
                    </div>
                    
                    <!-- SECURITY -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-security-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-shield-alt mr-3"></i>
                                Security
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-security-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-security-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.security.access-logs') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/security/access-logs*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-list-alt mr-3 text-xs"></i>
                                Access Logs
                            </a>
                            <a href="{{ route('admin.security.login-attempts') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/security/login-attempts*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-user-shield mr-3 text-xs"></i>
                                Login Attempts
                            </a>
                            <a href="{{ route('admin.security.api-keys') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/security/api-keys*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-key mr-3 text-xs"></i>
                                API Keys
                            </a>
                        </div>
                    </div>
                    
                    <!-- REPORTS & ANALYTICS -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-reports-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-chart-bar mr-3"></i>
                                Reports & Analytics
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-reports-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-reports-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.reports.sales-reports') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/reports/sales-reports*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-dollar-sign mr-3 text-xs"></i>
                                Sales Reports
                            </a>
                            <a href="{{ route('admin.reports.project-reports') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/reports/project-reports*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-folder-open mr-3 text-xs"></i>
                                Project Reports
                            </a>
                            <a href="{{ route('admin.reports.performance-analytics') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/reports/performance-analytics*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-chart-line mr-3 text-xs"></i>
                                Performance Analytics
                            </a>
                        </div>
                    </div>
                    
                    <!-- NOTIFICATIONS -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-notifications-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-bell mr-3"></i>
                                Notifications
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-notifications-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-notifications-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.notifications.alerts') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/notifications/alerts*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-exclamation-triangle mr-3 text-xs"></i>
                                Alerts
                            </a>
                            <a href="{{ route('admin.notifications.announcements') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/notifications/announcements*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-bullhorn mr-3 text-xs"></i>
                                Announcements
                            </a>
                        </div>
                    </div>
                    
                    <!-- TASK MANAGEMENT -->
                    <div class="space-y-1 mb-3">
                        <button onclick="toggleDropdown('mobile-tasks-dropdown')" 
                                class="w-full text-gray-300 hover:bg-gray-700 group flex items-center justify-between px-4 py-3 text-base font-medium rounded-md">
                            <div class="flex items-center">
                                <i class="fas fa-tasks mr-3"></i>
                                Task Management
                            </div>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-tasks-dropdown-icon"></i>
                        </button>
                        
                        <div id="mobile-tasks-dropdown" class="hidden space-y-1 pl-10">
                            <a href="{{ route('admin.tasks.tasks') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/tasks/tasks*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-check-square mr-3 text-xs"></i>
                                Tasks
                            </a>
                            <a href="{{ route('admin.tasks.project-tasks') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/tasks/project-tasks*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-project-diagram mr-3 text-xs"></i>
                                Project Tasks
                            </a>
                            <a href="{{ route('admin.tasks.deadlines') }}" 
                               @click="mobileSidebarOpen = false"
                               class="{{ request()->is('admin/tasks/deadlines*') ? 'sidebar-active' : 'text-gray-300 hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                <i class="fas fa-calendar-alt mr-3 text-xs"></i>
                                Deadlines
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Header -->
            <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-30">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center">
                            <!-- Mobile Menu Toggle -->
                            <button onclick="toggleMobileSidebar()" 
                                    class="md:hidden p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                                <i class="fas fa-bars"></i>
                            </button>
                            <h1 class="text-xl font-semibold text-gray-900 ml-4 md:ml-0">
                                @yield('page-title', 'Dashboard')
                            </h1>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <!-- Notifications -->
                            <div class="relative" x-data="{ notificationOpen: false }">
                                <button @click="notificationOpen = !notificationOpen" 
                                        class="relative p-2 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-bell text-lg"></i>
                                    <span class="absolute top-0 right-0 block h-3 w-3 rounded-full bg-red-500 animate-pulse"></span>
                                </button>
                                
                                <!-- Notifications Dropdown -->
                                <div x-show="notificationOpen" 
                                     @click.away="notificationOpen = false"
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0 transform scale-95"
                                     x-transition:enter-end="opacity-100 transform scale-100"
                                     x-transition:leave="transition ease-in duration-75"
                                     x-transition:leave-start="opacity-100 transform scale-100"
                                     x-transition:leave-end="opacity-0 transform scale-95"
                                     class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg border border-gray-200 z-50">
                                    <div class="p-4 border-b border-gray-200">
                                        <h3 class="text-lg font-semibold text-gray-900">Notifications</h3>
                                    </div>
                                    <div class="max-h-96 overflow-y-auto">
                                        <!-- Notification Item -->
                                        <div class="p-4 hover:bg-gray-50 border-b border-gray-100">
                                            <div class="flex items-start space-x-3">
                                                <div class="p-2 bg-blue-100 rounded-lg">
                                                    <i class="fas fa-folder-open text-blue-600 text-sm"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-sm font-medium text-gray-900">New project created</p>
                                                    <p class="text-xs text-gray-600">School Management System project has been created</p>
                                                    <p class="text-xs text-gray-500 mt-1">2 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="p-4 hover:bg-gray-50 border-b border-gray-100">
                                            <div class="flex items-start space-x-3">
                                                <div class="p-2 bg-green-100 rounded-lg">
                                                    <i class="fas fa-dollar-sign text-green-600 text-sm"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-sm font-medium text-gray-900">Payment received</p>
                                                    <p class="text-xs text-gray-600">Invoice #INV-2024-001 paid successfully</p>
                                                    <p class="text-xs text-gray-500 mt-1">5 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="p-4 hover:bg-gray-50">
                                            <div class="flex items-start space-x-3">
                                                <div class="p-2 bg-purple-100 rounded-lg">
                                                    <i class="fas fa-comment text-purple-600 text-sm"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-sm font-medium text-gray-900">New message</p>
                                                    <p class="text-xs text-gray-600">Client sent message about project update</p>
                                                    <p class="text-xs text-gray-500 mt-1">1 day ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-t border-gray-200">
                                        <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View all notifications</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- User Menu -->
                            <div class="relative" x-data="{ profileOpen: false }">
                                <button @click="profileOpen = !profileOpen" 
                                        class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                    <div class="h-10 w-10 rounded-full bg-blue-600 flex items-center justify-center">
                                        <i class="fas fa-user text-white"></i>
                                    </div>
                                    <div class="hidden md:block text-left">
                                        <p class="text-sm font-medium text-gray-900">{{ Auth::guard('admin')->user()->name }}</p>
                                        <p class="text-xs text-gray-500">Administrator</p>
                                    </div>
                                    <i class="fas fa-chevron-down text-gray-400 text-sm transition-transform" 
                                       :class="{ 'rotate-180': profileOpen }"></i>
                                </button>
                                
                                <!-- Profile Dropdown -->
                                <div x-show="profileOpen" 
                                     @click.away="profileOpen = false"
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0 transform scale-95"
                                     x-transition:enter-end="opacity-100 transform scale-100"
                                     x-transition:leave="transition ease-in duration-75"
                                     x-transition:leave-start="opacity-100 transform scale-100"
                                     x-transition:leave-end="opacity-0 transform scale-95"
                                     class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200 z-50">
                                    <div class="p-3 border-b border-gray-200">
                                        <p class="text-sm font-medium text-gray-900">{{ Auth::guard('admin')->user()->name }}</p>
                                        <p class="text-xs text-gray-500">{{ Auth::guard('admin')->user()->email }}</p>
                                    </div>
                                    <div class="py-2">
                                        <a href="{{ route('admin.profile.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <i class="fas fa-user mr-3"></i>Profile
                                        </a>
                                        <a href="{{ route('admin.settings.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <i class="fas fa-cog mr-3"></i>Settings
                                        </a>
                                        <a href="{{ route('admin.help.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <i class="fas fa-question-circle mr-3"></i>Help
                                        </a>
                                    </div>
                                    <div class="py-2 border-t border-gray-200">
                                        <form action="{{ route('admin.logout') }}" method="POST" class="block">
                                            @csrf
                                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                                <i class="fas fa-sign-out-alt mr-3"></i>Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto flex flex-col">
                @yield('content')
                
                <!-- Success/Error Notifications -->
                <div id="notification" class="fixed top-4 right-4 z-50 hidden">
                    <div class="bg-white rounded-lg shadow-lg p-4 flex items-center space-x-3">
                        <div id="notification-icon"></div>
                        <div>
                            <p id="notification-title" class="font-medium text-gray-900"></p>
                            <p id="notification-message" class="text-sm text-gray-500"></p>
                        </div>
                    </div>
                </div>
                
                <!-- Footer -->
                <footer class="bg-gray-900 text-gray-300 py-6 mt-auto">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex flex-col md:flex-row justify-center items-center text-center">
                            <div>
                                <p class="text-lg font-semibold text-white">Jezdan Technology — Reliable Systems. Real Results.</p>
                                <p class="text-sm mt-1">© 2026 All Rights Reserved | Built with precision & innovation</p>
                            </div>
                        </div>
                    </div>
                </footer>
            </main>
        </div>
    </div>

    <script>
        // Flash message auto-hide
        setTimeout(function() {
            const alerts = document.querySelectorAll('[data-dismiss="alert"]');
            alerts.forEach(function(alert) {
                alert.style.display = 'none';
            });
        }, 5000);

        // Dropdown toggle function
        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            const icon = document.getElementById(dropdownId + '-icon');
            
            // Toggle dropdown visibility
            dropdown.classList.toggle('hidden');
            
            // Rotate chevron icon
            icon.classList.toggle('rotate-180');
            
            // Close other dropdowns
            const dropdowns = ['business-dropdown', 'packages-dropdown', 'financial-dropdown', 'system-dropdown',
                              'mobile-business-dropdown', 'mobile-packages-dropdown', 'mobile-financial-dropdown', 'mobile-system-dropdown',
                              'client-portal-dropdown', 'file-manager-dropdown', 'communication-dropdown', 'security-dropdown',
                              'reports-dropdown', 'notifications-dropdown', 'tasks-dropdown',
                              'mobile-client-portal-dropdown', 'mobile-file-manager-dropdown', 'mobile-communication-dropdown',
                              'mobile-security-dropdown', 'mobile-reports-dropdown', 'mobile-notifications-dropdown', 'mobile-tasks-dropdown'];
            dropdowns.forEach(function(id) {
                if (id !== dropdownId) {
                    document.getElementById(id).classList.add('hidden');
                    document.getElementById(id + '-icon').classList.remove('rotate-180');
                }
            });
        }

        // Mobile sidebar toggle function
        function toggleMobileSidebar() {
            const mobileSidebar = document.getElementById('mobileSidebar');
            const alpineData = Alpine.$data(mobileSidebar);
            
            if (alpineData) {
                alpineData.mobileSidebarOpen = !alpineData.mobileSidebarOpen;
            }
        }

        // Auto-expand dropdowns based on current page
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            
            // Business Management dropdown
            if (currentPath.includes('/admin/clients') || currentPath.includes('/admin/demo-requests') || 
                currentPath.includes('/admin/contacts') || currentPath.includes('/admin/projects') || 
                currentPath.includes('/admin/services')) {
                toggleDropdown('business-dropdown');
            }
            
            // Service Packages dropdown
            if (currentPath.includes('/admin/packages') || currentPath.includes('/admin/pricing') || 
                currentPath.includes('/admin/offers')) {
                toggleDropdown('packages-dropdown');
            }
            
            // Financial Management dropdown
            if (currentPath.includes('/admin/finances') || currentPath.includes('/admin/invoices') || 
                currentPath.includes('/admin/expenses') || currentPath.includes('/admin/payments')) {
                toggleDropdown('financial-dropdown');
            }
            
            // System Management dropdown
            if (currentPath.includes('/admin/users') || currentPath.includes('/admin/roles') || 
                currentPath.includes('/admin/settings') || currentPath.includes('/admin/integrations')) {
                toggleDropdown('system-dropdown');
            }
        });
    </script>
    
    <!-- Notification Functions -->
    <script>
    function showNotification(title, message, type = 'success') {
        const notification = document.getElementById('notification');
        const iconElement = document.getElementById('notification-icon');
        const titleElement = document.getElementById('notification-title');
        const messageElement = document.getElementById('notification-message');
        
        // Set content
        titleElement.textContent = title;
        messageElement.textContent = message;
        
        // Set icon based on type
        if (type === 'success') {
            iconElement.innerHTML = '<i class="fas fa-check-circle text-green-500 text-xl"></i>';
        } else if (type === 'error') {
            iconElement.innerHTML = '<i class="fas fa-exclamation-circle text-red-500 text-xl"></i>';
        } else if (type === 'warning') {
            iconElement.innerHTML = '<i class="fas fa-exclamation-triangle text-yellow-500 text-xl"></i>';
        } else {
            iconElement.innerHTML = '<i class="fas fa-info-circle text-blue-500 text-xl"></i>';
        }
        
        // Show notification
        notification.classList.remove('hidden');
        
        // Auto hide after 3 seconds
        setTimeout(() => {
            notification.classList.add('hidden');
        }, 3000);
    }
    
    function confirmDelete(itemName, deleteCallback) {
        if (confirm(`Are you sure you want to delete "${itemName}"? This action cannot be undone.`)) {
            deleteCallback();
        }
    }
    
    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    // Close modal when clicking outside
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('bg-opacity-50')) {
            event.target.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    });
    </script>
</body>
</html>
