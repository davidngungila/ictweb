@extends('layouts.app')

@section('title', 'Portfolio - Jezdan Technology')
@section('description', 'View our portfolio of completed ICT projects including web development, mobile apps, network installations, and cybersecurity solutions for Tanzanian businesses.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                    <i class="fas fa-trophy mr-2"></i> 50+ Projects Delivered
                </span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Our Portfolio</h1>
            <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Explore our latest ICT projects and success stories from across Tanzania. From innovative web applications to robust network infrastructure, discover how we're transforming businesses.
            </p>
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-globe text-blue-300"></i>
                    <span class="text-white">Web Development</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-mobile-alt text-purple-300"></i>
                    <span class="text-white">Mobile Applications</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-network-wired text-orange-300"></i>
                    <span class="text-white">Network Infrastructure</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-shield-alt text-red-300"></i>
                    <span class="text-white">Cybersecurity</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-headset text-green-300"></i>
                    <span class="text-white">IT Support</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-lightbulb text-indigo-300"></i>
                    <span class="text-white">ICT Consultancy</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-cloud text-cyan-300"></i>
                    <span class="text-white">Cloud Services</span>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-gray-50" viewBox="0 0 1440 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 64L60 58.7C120 53 240 43 360 37.3C480 32 600 32 720 34.7C840 37 960 43 1080 45.3C1200 48 1320 48 1380 48L1440 48V64H0V64Z" fill="currentColor"/>
        </svg>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-project-diagram text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">50+</h3>
                <p class="text-gray-600">ICT Projects Delivered</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">30+</h3>
                <p class="text-gray-600">Happy Clients</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-code text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">200K+</h3>
                <p class="text-gray-600">Lines of Code</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 bg-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-globe text-orange-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">15+</h3>
                <p class="text-gray-600">Years Experience</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Filters -->
<section class="py-12 bg-white border-b">
    <div class="container mx-auto px-6">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Portfolio</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Comprehensive technology solutions tailored for Tanzanian businesses
            </p>
        </div>
        <div class="flex flex-wrap justify-center gap-4">
            <button onclick="filterProjects('all')" class="filter-btn px-6 py-2 bg-blue-600 text-white font-medium rounded-full hover:bg-blue-700 transition-colors">
                All Projects
            </button>
            <button onclick="filterProjects('web')" class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 font-medium rounded-full hover:bg-gray-300 transition-colors">
                Web Development
            </button>
            <button onclick="filterProjects('mobile')" class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 font-medium rounded-full hover:bg-gray-300 transition-colors">
                Mobile Apps
            </button>
            <button onclick="filterProjects('network')" class="filter-btn px-6 py-2 bg-gray-200 text-gray-700 font-medium rounded-full hover:bg-gray-300 transition-colors">
                Network Solutions
            </button>
        </div>
    </div>
</section>

<!-- Web Development Projects -->
<section id="web-projects" class="project-section py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Web Development Projects</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Professional web development solutions for Tanzanian businesses
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1: E-commerce Platform -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/showing-cart-trolley-shopping-online-sign-graphic_j4fy9u.jpg" 
                         alt="E-commerce Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600">
                            <span class="text-lg">🛒</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">E-commerce Platform</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Complete e-commerce solution with payment integration and inventory management for a retail client in Dar es Salaam</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-xs">Laravel</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-xs">Vue.js</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-xs">MySQL</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-xs">Stripe</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2: School Management System -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/modern-data-center-providing-cloud-services-enabling-businesses-access-computing-resources-storage-demand-internet-server-room-infrastructure-3d-render-animation_lljtml.jpg" 
                         alt="School Management System" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center text-indigo-600">
                            <span class="text-lg">🎓</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">School Management System</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Comprehensive school management software with student tracking and parent portal for an educational institution in Arusha</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-indigo-100 text-indigo-600 rounded text-xs">PHP</span>
                            <span class="px-2 py-1 bg-indigo-100 text-indigo-600 rounded text-xs">MySQL</span>
                            <span class="px-2 py-1 bg-indigo-100 text-indigo-600 rounded text-xs">Vue.js</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3: Healthcare Portal -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/enterprise-data-hub-operating-ai-workloads-systems-scalable-research_hov8tc.jpg" 
                         alt="Healthcare Portal" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-green-600">
                            <span class="text-lg">🏥</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Healthcare Portal</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Patient management system with appointment scheduling, medical records, and telemedicine features for a private hospital in Moshi</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-green-100 text-green-600 rounded text-xs">React</span>
                            <span class="px-2 py-1 bg-green-100 text-green-600 rounded text-xs">Node.js</span>
                            <span class="px-2 py-1 bg-green-100 text-green-600 rounded text-xs">MongoDB</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 4: Mobile Banking App -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/internet-banking-online-payment-technology-concept_gtoa6s.jpg" 
                         alt="Mobile Banking App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600">
                            <span class="text-lg">📱</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile Banking App</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Secure mobile banking application with biometric authentication and real-time transactions for a financial institution</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">React Native</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Flutter</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Firebase</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Swift</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 5: Corporate Network Setup -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/engineer-coworkers-server-farm-checking-recovery-plan_blibxz.jpg" 
                         alt="Corporate Network Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600">
                            <span class="text-lg">🌐</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Corporate Network Setup</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Complete network infrastructure installation including LAN/WAN setup, security configuration, and 24/7 monitoring for a manufacturing company</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Cisco</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Mikrotik</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Ubiquiti</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Fortinet</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 6: Food Delivery App -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg" 
                         alt="Food Delivery App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center text-cyan-600">
                            <span class="text-lg">🍔</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Food Delivery App</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">On-demand food delivery application with real-time tracking and payment integration</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-cyan-100 text-cyan-600 rounded text-xs">Flutter</span>
                            <span class="px-2 py-1 bg-cyan-100 text-cyan-600 rounded text-xs">Node.js</span>
                            <span class="px-2 py-1 bg-cyan-100 text-cyan-600 rounded text-xs">Firebase</span>
                            <span class="px-2 py-1 bg-cyan-100 text-cyan-600 rounded text-xs">Google Maps</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mobile Apps Section -->
<section id="mobile-apps" class="project-section py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Mobile Application Projects</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Custom mobile applications for iOS and Android with native performance
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Mobile Banking App -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/internet-banking-online-payment-technology-concept_gtoa6s.jpg" 
                         alt="Mobile Banking App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600">
                            <span class="text-lg">📱</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile Banking App</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Secure mobile banking application with biometric authentication and real-time transactions for a financial institution</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">React Native</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Flutter</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Firebase</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Swift</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Food Delivery App -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg" 
                         alt="Food Delivery App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600">
                            <span class="text-lg">🍔</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Food Delivery App</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">On-demand food delivery application with real-time tracking and payment integration</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Flutter</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Node.js</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Firebase</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Google Maps</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Fitness Tracking App -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/mainframe-devices-racks-room-with-big-data-cyber-internet-content-neon-light-cloud-computing-server-cabinet-modern-communication-storage-hardware-system_mywsie.jpg" 
                         alt="Fitness Tracking App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600">
                            <span class="text-lg">🏃</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fitness Tracking App</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Fitness tracking application with workout plans, progress monitoring, and social features</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">React Native</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">HealthKit</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Firebase</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Wearable API</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Network Solutions Section -->
<section id="network-projects" class="project-section py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Network Infrastructure Projects</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Professional network setup and configuration for seamless connectivity
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Corporate Network Setup -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/engineer-coworkers-server-farm-checking-recovery-plan_blibxz.jpg" 
                         alt="Corporate Network Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600">
                            <span class="text-lg">🌐</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Corporate Network Setup</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Complete network infrastructure installation including LAN/WAN setup, security configuration, and 24/7 monitoring for a manufacturing company</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Cisco</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Mikrotik</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Ubiquiti</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Fortinet</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Data Center Setup -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/data-center-programmers-doing-brainstorming-setting-up-machine-learning-systems_ggwvwd.jpg" 
                         alt="Data Center Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600">
                            <span class="text-lg">🖥</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Data Center Setup</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Enterprise data center implementation with server rack setup, cooling systems, and backup solutions</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Dell</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">HP</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">VMware</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">APC</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Smart Office Network -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600079/beautiful-optical-fiber-detail_wck3wq.jpg" 
                         alt="Smart Office Network" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600">
                            <span class="text-lg">📶</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Smart Office Network</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Smart office network setup with IoT integration and wireless connectivity solutions</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Cisco</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Meraki</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Ruckus</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 rounded text-xs">Google Nest</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Project
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">What Our Clients Say</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Hear from businesses across Tanzania who have transformed their operations with our solutions
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 rounded-2xl p-8 text-center">
                <div class="flex justify-center mb-4">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/portrait-male-engineer-working-field-engineers-day-celebration_afzsch.jpg" 
                         alt="Client 1" class="w-20 h-20 rounded-full object-cover">
                </div>
                <div class="flex justify-center mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">"Jezdan Technology transformed our retail business with their e-commerce platform. Sales increased by 300% within first 6 months!"</p>
                <h4 class="font-bold text-gray-900 mb-1">Sarah Johnson</h4>
                <p class="text-sm text-gray-500">CEO, Dar es Salaam Retail Ltd</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-50 rounded-2xl p-8 text-center">
                <div class="flex justify-center mb-4">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/programmer-home-office-concentrating-finding-bugs-while-he-codes_gctbqc.jpg" 
                         alt="Client 2" class="w-20 h-20 rounded-full object-cover">
                </div>
                <div class="flex justify-center mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">"The mobile banking app they developed for us is secure, user-friendly, and has received excellent feedback from our customers."</p>
                <h4 class="font-bold text-gray-900 mb-1">Michael Chen</h4>
                <p class="text-sm text-gray-500">CTO, Tanzania Financial Services</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gray-50 rounded-2xl p-8 text-center">
                <div class="flex justify-center mb-4">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/irritated-african-american-man-struggling-reach-internet-provider_rriiiz.jpg" 
                         alt="Client 3" class="w-20 h-20 rounded-full object-cover">
                </div>
                <div class="flex justify-center mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">"Their network infrastructure setup improved our operational efficiency by 40%. Professional team and excellent support!"</p>
                <h4 class="font-bold text-gray-900 mb-1">Grace Mwangi</h4>
                <p class="text-sm text-gray-500">IT Manager, Arusha Manufacturing</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Start Your Project Today</h2>
            <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                Have a project in mind? Let us help bring your ideas to life. Contact us today for a free consultation and quote.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="{{ route('contact') }}" class="px-10 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition-all duration-300 shadow-xl">
                    Start Your Project
                </a>
                <a href="tel:+255123456789" class="px-10 py-4 bg-white text-blue-600 font-bold rounded-full border-2 border-blue-600 hover:bg-blue-50 transition-all duration-300">
                    <i class="fas fa-phone mr-2"></i> Call Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Filter JavaScript -->
<script>
function filterProjects(category) {
    // Remove active class from all buttons
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('bg-blue-600', 'text-white');
        btn.classList.add('bg-gray-200', 'text-gray-700');
    });
    
    // Add active class to clicked button
    event.target.classList.remove('bg-gray-200', 'text-gray-700');
    event.target.classList.add('bg-blue-600', 'text-white');
    
    // Hide all project sections
    document.querySelectorAll('.project-section').forEach(section => {
        section.style.display = 'none';
    });
    
    // Show selected category
    if (category === 'all') {
        document.querySelectorAll('.project-section').forEach(section => {
            section.style.display = 'block';
        });
    } else if (category === 'web') {
        document.getElementById('web-projects').style.display = 'block';
        document.getElementById('mobile-apps').style.display = 'none';
        document.getElementById('network-projects').style.display = 'none';
    } else if (category === 'mobile') {
        document.getElementById('web-projects').style.display = 'none';
        document.getElementById('mobile-apps').style.display = 'block';
        document.getElementById('network-projects').style.display = 'none';
    } else if (category === 'network') {
        document.getElementById('web-projects').style.display = 'none';
        document.getElementById('mobile-apps').style.display = 'none';
        document.getElementById('network-projects').style.display = 'block';
    }
}
</script>

@endsection