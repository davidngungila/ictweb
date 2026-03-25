@extends('layouts.app')

@section('title', 'Web Development Services - Jezdan Technology')
@section('description', 'Professional web development services in Tanzania. Custom websites, web applications, e-commerce solutions using Laravel, Vue.js, React, and modern technologies.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
                <i class="fas fa-code text-yellow-400 mr-3"></i>
                <span class="text-sm font-semibold">Professional Web Development</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Web Development</h1>
            <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Transform your business with custom websites and web applications that drive growth, 
                enhance user experience, and deliver measurable results for Tanzanian companies.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Custom Solutions
                </span>
                <span class="bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Modern Technologies
                </span>
                <span class="bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>SEO Optimized
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Custom Web Solutions</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        We create powerful, scalable web applications tailored to your specific business needs. 
                        Our expert development team combines cutting-edge technology with deep understanding of the Tanzanian market 
                        to deliver solutions that drive real business value.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        From simple brochure websites to complex enterprise applications, we ensure your digital presence 
                        stands out, performs flawlessly, and converts visitors into customers.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-rocket text-blue-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Fast Development</div>
                                <div class="text-gray-600">Agile methodology</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-blue-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Mobile Responsive</div>
                                <div class="text-gray-600">All devices covered</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Web Development" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-blue-600 text-white rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold mb-2">500+</div>
                        <div class="text-sm">Websites Delivered</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Stack -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Technology Stack</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We use modern, proven technologies to build robust and scalable web solutions
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center text-red-600 text-2xl mx-auto mb-6">
                        <i class="fab fa-laravel"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Laravel</h3>
                    <p class="text-gray-600">Robust PHP framework for enterprise applications</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 text-2xl mx-auto mb-6">
                        <i class="fab fa-vuejs"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Vue.js</h3>
                    <p class="text-gray-600">Progressive JavaScript framework for modern UIs</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mx-auto mb-6">
                        <i class="fab fa-react"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">React</h3>
                    <p class="text-gray-600">Component-based library for interactive interfaces</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">MySQL</h3>
                    <p class="text-gray-600">Reliable database management and optimization</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Included -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Web Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Comprehensive web development solutions tailored to your business needs
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">E-commerce Solutions</h3>
                    <p class="text-gray-600 mb-4">Complete online stores with payment integration, inventory management, and order processing.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Payment Gateway Integration</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Inventory Management</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Mobile Shopping Cart</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Corporate Websites</h3>
                    <p class="text-gray-600 mb-4">Professional business websites showcasing your brand and services effectively.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Custom Design</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Content Management</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>SEO Optimization</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Web Applications</h3>
                    <p class="text-gray-600 mb-4">Custom business applications for process automation and efficiency.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Process Automation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Data Analytics</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>API Integration</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-wordpress"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">CMS Development</h3>
                    <p class="text-gray-600 mb-4">Content management systems for easy website updates and maintenance.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>WordPress Development</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Custom CMS</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Training & Support</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">SEO Services</h3>
                    <p class="text-gray-600 mb-4">Search engine optimization to improve your online visibility and rankings.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Keyword Research</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>On-Page Optimization</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Performance Tracking</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-teal-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">UI/UX Design</h3>
                    <p class="text-gray-600 mb-4">Beautiful, user-friendly interfaces that enhance user experience.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Responsive Design</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>User Testing</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Brand Integration</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Development Process</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We follow a proven methodology to ensure project success and client satisfaction
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Discovery</h3>
                    <p class="text-gray-600">Understanding your requirements, goals, and target audience to create the perfect solution strategy.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Design</h3>
                    <p class="text-gray-600">Creating wireframes, mockups, and prototypes to visualize the perfect user experience.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Development</h3>
                    <p class="text-gray-600">Building your solution using clean code, best practices, and modern technologies.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Launch</h3>
                    <p class="text-gray-600">Deploying your solution and providing ongoing support for optimal performance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Showcase -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Recent Web Projects</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Explore our latest web development projects for Tanzanian businesses
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6f458?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="E-commerce Platform" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">E-commerce Platform</h3>
                        <p class="text-gray-600 mb-4">Complete online store with payment integration and inventory management.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Laravel</span>
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">Vue.js</span>
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm">MySQL</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1559028012-6d6d728e3a5c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="School Management" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">School Management System</h3>
                        <p class="text-gray-600 mb-4">Comprehensive system for student management and academic tracking.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">React</span>
                            <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm">Node.js</span>
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">MongoDB</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1563013544-6574fb3f1e7d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Healthcare Portal" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Healthcare Portal</h3>
                        <p class="text-gray-600 mb-4">Patient management system with appointment scheduling.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Laravel</span>
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">Vue.js</span>
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Build Your Web Solution?</h2>
            <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                Let us create a powerful web presence that drives your business growth. 
                Contact us today for a free consultation and project estimate.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-colors duration-300">
                    <i class="fas fa-phone mr-2"></i>Get Free Quote
                </a>
                <a href="{{ route('portfolio') }}#web-projects" class="px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-blue-600 transition-colors duration-300">
                    <i class="fas fa-eye mr-2"></i>View Our Work
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
