@extends('admin.layouts.app')

@section('title', 'Help Center')
@section('page-title', 'Help Center')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Help Center</h1>
            <p class="text-gray-600 mt-1">Get help and learn about the admin panel features</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-headset mr-2"></i>
                Contact Support
            </button>
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-book mr-2"></i>
                Documentation
            </button>
        </div>
    </div>

    <!-- Help Sections -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Search Help -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-search mr-2 text-blue-600"></i>
                    Search Help
                </h3>
                <div class="relative">
                    <input type="text" placeholder="Search for help articles, tutorials, or guides..." 
                           class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <i class="fas fa-search absolute left-3 top-4 text-gray-400"></i>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="text-xs text-gray-500">Popular searches:</span>
                    <button class="px-2 py-1 bg-gray-100 text-gray-700 rounded-full text-xs hover:bg-gray-200">Getting Started</button>
                    <button class="px-2 py-1 bg-gray-100 text-gray-700 rounded-full text-xs hover:bg-gray-200">User Management</button>
                    <button class="px-2 py-1 bg-gray-100 text-gray-700 rounded-full text-xs hover:bg-gray-200">Payment Setup</button>
                    <button class="px-2 py-1 bg-gray-100 text-gray-700 rounded-full text-xs hover:bg-gray-200">Security</button>
                </div>
            </div>

            <!-- Quick Start Guide -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-rocket mr-2 text-purple-600"></i>
                    Quick Start Guide
                </h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-semibold text-sm">1</span>
                        </div>
                        <div>
                            <h4 class="text-md font-medium text-gray-900">Set Up Your Profile</h4>
                            <p class="text-sm text-gray-600 mt-1">Complete your profile information and set up your preferences for the best experience.</p>
                            <a href="#" class="text-blue-600 text-sm hover:text-blue-700 mt-1 inline-block">Learn more →</a>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-semibold text-sm">2</span>
                        </div>
                        <div>
                            <h4 class="text-md font-medium text-gray-900">Add Your First Client</h4>
                            <p class="text-sm text-gray-600 mt-1">Learn how to add and manage clients in the system with our step-by-step guide.</p>
                            <a href="#" class="text-blue-600 text-sm hover:text-blue-700 mt-1 inline-block">Learn more →</a>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-semibold text-sm">3</span>
                        </div>
                        <div>
                            <h4 class="text-md font-medium text-gray-900">Configure Services</h4>
                            <p class="text-sm text-gray-600 mt-1">Set up your service packages and pricing plans to start managing your business.</p>
                            <a href="#" class="text-blue-600 text-sm hover:text-blue-700 mt-1 inline-block">Learn more →</a>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-semibold text-sm">4</span>
                        </div>
                        <div>
                            <h4 class="text-md font-medium text-gray-900">Set Up Payments</h4>
                            <p class="text-sm text-gray-600 mt-1">Configure payment gateways and start processing transactions securely.</p>
                            <a href="#" class="text-blue-600 text-sm hover:text-blue-700 mt-1 inline-block">Learn more →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Frequently Asked Questions -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-question-circle mr-2 text-green-600"></i>
                    Frequently Asked Questions
                </h3>
                <div class="space-y-4">
                    <div class="border border-gray-200 rounded-lg">
                        <button class="w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50">
                            <span class="text-sm font-medium text-gray-900">How do I reset my password?</span>
                            <i class="fas fa-chevron-down text-gray-400"></i>
                        </button>
                        <div class="px-4 py-3 border-t border-gray-200 bg-gray-50">
                            <p class="text-sm text-gray-600">You can reset your password by clicking "Forgot Password" on the login page or by going to Profile Settings → Change Password. Follow the instructions sent to your email.</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-lg">
                        <button class="w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50">
                            <span class="text-sm font-medium text-gray-900">How do I add a new user?</span>
                            <i class="fas fa-chevron-right text-gray-400"></i>
                        </button>
                    </div>
                    <div class="border border-gray-200 rounded-lg">
                        <button class="w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50">
                            <span class="text-sm font-medium text-gray-900">What payment methods are supported?</span>
                            <i class="fas fa-chevron-right text-gray-400"></i>
                        </button>
                    </div>
                    <div class="border border-gray-200 rounded-lg">
                        <button class="w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50">
                            <span class="text-sm font-medium text-gray-900">How do I backup my data?</span>
                            <i class="fas fa-chevron-right text-gray-400"></i>
                        </button>
                    </div>
                    <div class="border border-gray-200 rounded-lg">
                        <button class="w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50">
                            <span class="text-sm font-medium text-gray-900">How do I configure email settings?</span>
                            <i class="fas fa-chevron-right text-gray-400"></i>
                        </button>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="#" class="text-blue-600 text-sm hover:text-blue-700">View all FAQs →</a>
                </div>
            </div>

            <!-- Video Tutorials -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-video mr-2 text-red-600"></i>
                    Video Tutorials
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                            <img src="https://via.placeholder.com/320x180/3B82F6/FFFFFF?text=Getting+Started" alt="Getting Started" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h4 class="text-sm font-medium text-gray-900">Getting Started</h4>
                            <p class="text-xs text-gray-500 mt-1">5:23 • Beginner</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                            <img src="https://via.placeholder.com/320x180/10B981/FFFFFF?text=User+Management" alt="User Management" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h4 class="text-sm font-medium text-gray-900">User Management</h4>
                            <p class="text-xs text-gray-500 mt-1">8:45 • Intermediate</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                            <img src="https://via.placeholder.com/320x180/F59E0B/FFFFFF?text=Payment+Setup" alt="Payment Setup" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h4 class="text-sm font-medium text-gray-900">Payment Setup</h4>
                            <p class="text-xs text-gray-500 mt-1">12:10 • Advanced</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                            <img src="https://via.placeholder.com/320x180/8B5CF6/FFFFFF?text=Security+Guide" alt="Security Guide" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h4 class="text-sm font-medium text-gray-900">Security Guide</h4>
                            <p class="text-xs text-gray-500 mt-1">6:30 • Intermediate</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="#" class="text-blue-600 text-sm hover:text-blue-700">View all tutorials →</a>
                </div>
            </div>

            <!-- Contact Support -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-headset mr-2 text-yellow-600"></i>
                    Contact Support
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="text-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-comments text-blue-600"></i>
                        </div>
                        <h4 class="text-sm font-medium text-gray-900 mb-1">Live Chat</h4>
                        <p class="text-xs text-gray-500 mb-3">Chat with our support team</p>
                        <button class="bg-blue-600 text-white px-3 py-1 rounded text-xs hover:bg-blue-700">Start Chat</button>
                    </div>
                    <div class="text-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-envelope text-green-600"></i>
                        </div>
                        <h4 class="text-sm font-medium text-gray-900 mb-1">Email Support</h4>
                        <p class="text-xs text-gray-500 mb-3">Get help via email</p>
                        <button class="bg-green-600 text-white px-3 py-1 rounded text-xs hover:bg-green-700">Send Email</button>
                    </div>
                    <div class="text-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-phone text-purple-600"></i>
                        </div>
                        <h4 class="text-sm font-medium text-gray-900 mb-1">Phone Support</h4>
                        <p class="text-xs text-gray-500 mb-3">Call us directly</p>
                        <button class="bg-purple-600 text-white px-3 py-1 rounded text-xs hover:bg-purple-700">Call Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Help Categories -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Help Categories</h3>
                <div class="space-y-2">
                    <a href="#" class="flex items-center justify-between p-3 text-sm text-gray-700 hover:bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-rocket mr-3 text-blue-500"></i>
                            Getting Started
                        </div>
                        <span class="text-xs text-gray-500">12 articles</span>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 text-sm text-gray-700 hover:bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-users mr-3 text-green-500"></i>
                            User Management
                        </div>
                        <span class="text-xs text-gray-500">8 articles</span>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 text-sm text-gray-700 hover:bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-box mr-3 text-purple-500"></i>
                            Services & Products
                        </div>
                        <span class="text-xs text-gray-500">15 articles</span>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 text-sm text-gray-700 hover:bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-credit-card mr-3 text-yellow-500"></i>
                            Payments & Billing
                        </div>
                        <span class="text-xs text-gray-500">10 articles</span>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 text-sm text-gray-700 hover:bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-shield-alt mr-3 text-red-500"></i>
                            Security
                        </div>
                        <span class="text-xs text-gray-500">6 articles</span>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 text-sm text-gray-700 hover:bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-cog mr-3 text-gray-500"></i>
                            Settings & Configuration
                        </div>
                        <span class="text-xs text-gray-500">9 articles</span>
                    </a>
                </div>
            </div>

            <!-- Popular Articles -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Popular Articles</h3>
                <div class="space-y-3">
                    <a href="#" class="block">
                        <h4 class="text-sm font-medium text-gray-900 hover:text-blue-600">Complete Guide to User Roles</h4>
                        <p class="text-xs text-gray-500 mt-1">Learn how to set up and manage user roles</p>
                    </a>
                    <a href="#" class="block">
                        <h4 class="text-sm font-medium text-gray-900 hover:text-blue-600">Payment Gateway Setup</h4>
                        <p class="text-xs text-gray-500 mt-1">Step-by-step payment configuration</p>
                    </a>
                    <a href="#" class="block">
                        <h4 class="text-sm font-medium text-gray-900 hover:text-blue-600">Security Best Practices</h4>
                        <p class="text-xs text-gray-500 mt-1">Keep your account secure</p>
                    </a>
                    <a href="#" class="block">
                        <h4 class="text-sm font-medium text-gray-900 hover:text-blue-600">Email Configuration Guide</h4>
                        <p class="text-xs text-gray-500 mt-1">Set up SMTP and email templates</p>
                    </a>
                </div>
            </div>

            <!-- System Status -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">System Status</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">Overall Status</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Operational
                        </span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">API Response Time</span>
                        <span class="text-sm text-gray-900">124ms</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">Database</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Healthy
                        </span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">Email Service</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Working
                        </span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">Last Updated</span>
                        <span class="text-sm text-gray-900">2 min ago</span>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-blue-600 text-sm hover:text-blue-700">View detailed status →</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
