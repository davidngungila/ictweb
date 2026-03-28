@extends('layouts.app')

@section('title', 'System Development Services - Jezdan Technology')
@section('description', 'Professional system development services in Tanzania. Custom software development, ERP systems, CRM systems, and business automation solutions.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-purple-900 via-purple-800 to-purple-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1559028012-c754a04c89e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="System Development" class="w-full h-full object-cover opacity-40">
    </div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center bg-purple-700 bg-opacity-50 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
                <i class="fas fa-cogs text-yellow-400 mr-3"></i>
                <span class="text-sm font-semibold">Professional System Development</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">System Development</h1>
            <p class="text-xl text-purple-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Build powerful, scalable, and efficient business systems that streamline operations, 
                enhance productivity, and drive growth for Tanzanian enterprises.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-purple-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Custom Solutions
                </span>
                <span class="bg-purple-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Business Automation
                </span>
                <span class="bg-purple-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Enterprise Integration
                </span>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- Service Overview -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Custom Business Systems</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Transform your business operations with custom-built systems designed specifically 
                        for your unique needs. Our expert developers create scalable solutions that 
                        integrate seamlessly with your existing workflows.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-purple-600 rounded-full flex items-center justify-center text-white text-sm flex-shrink-0 mt-1">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">ERP Systems</h4>
                                <p class="text-gray-600">Enterprise Resource Planning solutions for complete business management</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-purple-600 rounded-full flex items-center justify-center text-white text-sm flex-shrink-0 mt-1">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">CRM Systems</h4>
                                <p class="text-gray-600">Customer Relationship Management to enhance client interactions</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-purple-600 rounded-full flex items-center justify-center text-white text-sm flex-shrink-0 mt-1">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Business Automation</h4>
                                <p class="text-gray-600">Automate repetitive tasks and streamline your workflows</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="px-8 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition-colors">
                            Get Started
                        </a>
                        <a href="{{ route('request-demo') }}" class="px-8 py-3 border-2 border-purple-600 text-purple-600 font-semibold rounded-lg hover:bg-purple-50 transition-colors">
                            Request Demo
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1559028012-c754a04c89e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="System Development" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-purple-600 text-white p-6 rounded-xl shadow-xl">
                        <div class="text-3xl font-bold">500+</div>
                        <div class="text-sm">Systems Delivered</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our System Development Services</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Comprehensive system development solutions to meet all your business needs
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- ERP Development -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mb-6">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">ERP Development</h3>
                <p class="text-gray-600 mb-6">Custom ERP systems that integrate all your business processes into one unified platform.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Inventory management</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Financial management</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>HR management</span>
                    </li>
                </ul>
            </div>

            <!-- CRM Development -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mb-6">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">CRM Development</h3>
                <p class="text-gray-600 mb-6">Powerful CRM solutions to manage customer relationships and drive sales growth.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Lead management</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Sales automation</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Analytics & reporting</span>
                    </li>
                </ul>
            </div>

            <!-- Inventory Management -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mb-6">
                    <i class="fas fa-boxes"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Inventory Management</h3>
                <p class="text-gray-600 mb-6">Smart inventory systems to optimize stock levels and reduce operational costs.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Real-time tracking</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Automated reordering</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Multi-location support</span>
                    </li>
                </ul>
            </div>

            <!-- HR Management -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mb-6">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">HR Management</h3>
                <p class="text-gray-600 mb-6">Comprehensive HR systems to manage your workforce efficiently and effectively.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Payroll management</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Performance tracking</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Leave management</span>
                    </li>
                </ul>
            </div>

            <!-- Financial Systems -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mb-6">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Financial Systems</h3>
                <p class="text-gray-600 mb-6">Robust financial management systems for accurate accounting and reporting.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Accounting software</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Budget management</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Financial reporting</span>
                    </li>
                </ul>
            </div>

            <!-- Custom Solutions -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mb-6">
                    <i class="fas fa-puzzle-piece"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Custom Solutions</h3>
                <p class="text-gray-600 mb-6">Tailored software solutions designed specifically for your unique business requirements.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Bespoke development</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>System integration</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-purple-600"></i>
                        <span>Ongoing support</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Development Process -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Development Process</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                We follow a proven methodology to ensure successful system development
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mx-auto mb-4">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Discovery</h3>
                <p class="text-gray-600">Understanding your business needs and requirements</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mx-auto mb-4">
                    <i class="fas fa-pencil-ruler"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Design</h3>
                <p class="text-gray-600">Creating detailed system architecture and UI/UX designs</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mx-auto mb-4">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Development</h3>
                <p class="text-gray-600">Building robust and scalable system solutions</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mx-auto mb-4">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Deployment</h3>
                <p class="text-gray-600">Launching your system with comprehensive training and support</p>
            </div>
        </div>
    </div>
</section>

<!-- Technologies -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Technologies We Use</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                We leverage modern technologies to build powerful and reliable systems
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-6">
            <div class="bg-white rounded-xl p-4 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-php text-3xl text-purple-600"></i>
            </div>
            <div class="bg-white rounded-xl p-4 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-laravel text-3xl text-red-600"></i>
            </div>
            <div class="bg-white rounded-xl p-4 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-python text-3xl text-blue-600"></i>
            </div>
            <div class="bg-white rounded-xl p-4 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-java text-3xl text-red-700"></i>
            </div>
            <div class="bg-white rounded-xl p-4 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-react text-3xl text-cyan-600"></i>
            </div>
            <div class="bg-white rounded-xl p-4 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-vuejs text-3xl text-green-600"></i>
            </div>
            <div class="bg-white rounded-xl p-4 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-angular text-3xl text-red-600"></i>
            </div>
            <div class="bg-white rounded-xl p-4 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-node-js text-3xl text-green-700"></i>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-purple-600 to-purple-700 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Build Your Custom System?</h2>
            <p class="text-xl text-purple-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Let our expert developers create a system that perfectly fits your business needs and drives growth.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="{{ route('contact') }}" class="px-10 py-4 bg-white text-purple-600 font-bold rounded-full hover:bg-purple-50 transition-colors">
                    Get Started Today
                </a>
                <a href="{{ route('request-demo') }}" class="px-10 py-4 bg-purple-800 text-white font-bold rounded-full hover:bg-purple-900 transition-colors">
                    Schedule a Demo
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
