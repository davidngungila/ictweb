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
                Explore our latest projects and success stories from across Tanzania. From innovative web applications to robust network infrastructure, discover how we're transforming businesses across the nation.
            </p>
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-globe text-blue-300"></i>
                    <span class="text-white">Web Development</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-mobile-alt text-purple-300"></i>
                    <span class="text-white">Mobile Apps</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-network-wired text-orange-300"></i>
                    <span class="text-white">Network Solutions</span>
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
                <p class="text-gray-600">Projects Completed</p>
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
                <h3 class="text-3xl font-bold text-gray-900 mb-2">100K+</h3>
                <p class="text-gray-600">Lines of Code</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 bg-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-star text-orange-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">5.0</h3>
                <p class="text-gray-600">Client Rating</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 bg-red-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-globe text-red-600 text-2xl"></i>
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
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-14609258559-0abdc27e37c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="E-commerce Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">E-commerce Platform</h3>
                <p class="text-gray-600 leading-relaxed">Complete e-commerce solution with payment integration and inventory management for a retail client in Dar es Salaam</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">Laravel</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">Vue.js</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">MySQL</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">Stripe</span>
                </div>
            </div>

            <!-- Project 2: School Management System -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1a706d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="School Management System" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">School Management System</h3>
                <p class="text-gray-600 leading-relaxed">Comprehensive school management software with student tracking and parent portal for an educational institution in Arusha</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs">PHP</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs">MySQL</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs">Vue.js</span>
                </div>
            </div>

            <!-- Project 3: Healthcare Portal -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1550752918-1dcf3f0c6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Healthcare Portal" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Healthcare Portal</h3>
                <p class="text-gray-600 leading-relaxed">Patient management system with appointment scheduling, medical records, and telemedicine features for a private hospital in Moshi</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">React</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Node.js</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">MongoDB</span>
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
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512926330526-ee3925526fbc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Mobile Banking App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Mobile Banking App</h3>
                <p class="text-gray-600 leading-relaxed">Secure mobile banking application with biometric authentication and real-time transactions for a financial institution</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">React Native</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Flutter</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Firebase</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Swift</span>
                </div>
            </div>

            <!-- Project 2: Food Delivery App -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1a706d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Food Delivery App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Food Delivery App</h3>
                <p class="text-gray-600 leading-relaxed">On-demand food delivery application with real-time tracking and payment integration</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Flutter</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Node.js</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Firebase</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Google Maps</span>
                </div>
            </div>

            <!-- Project 3: Fitness Tracking App -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1571019695-6b9740d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Fitness Tracking App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-running"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Fitness Tracking App</h3>
                <p class="text-gray-600 leading-relaxed">Fitness tracking application with workout plans, progress monitoring, and social features</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">React Native</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">HealthKit</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Firebase</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Wearable API</span>
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
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558494949-ef1b3966eab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Corporate Network Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-orange-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Corporate Network Setup</h3>
                <p class="text-gray-600 leading-relaxed">Complete network infrastructure installation including LAN/WAN setup, security configuration, and 24/7 monitoring for a manufacturing company</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Cisco</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Mikrotik</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Ubiquiti</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Fortinet</span>
                </div>
            </div>

            <!-- Project 2: Data Center Setup -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558494949-ef1b3966eab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Data Center Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-orange-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-server"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Data Center Setup</h3>
                <p class="text-gray-600 leading-relaxed">Enterprise data center implementation with server rack setup, cooling systems, and backup solutions</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Dell</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">HP</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">VMware</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">APC</span>
                </div>
            </div>

            <!-- Project 3: Smart Office Network -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Smart Office Network" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-orange-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-wifi"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Smart Office Network</h3>
                <p class="text-gray-600 leading-relaxed">Smart office network setup with IoT integration and wireless connectivity solutions</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Cisco</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Meraki</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Ruckus</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Ubiquiti</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Google Nest</span>
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
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                         alt="Client 1" class="w-20 h-20 rounded-full object-cover">
                </div>
                <div class="flex justify-center mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">"Jezdan Technology transformed our retail business with their e-commerce platform. Sales increased by 300% within the first 6 months!"</p>
                <h4 class="font-bold text-gray-900 mb-1">Sarah Johnson</h4>
                <p class="text-sm text-gray-500">CEO, Dar es Salaam Retail Ltd</p>
            </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-50 rounded-2xl p-8 text-center">
                <div class="flex justify-center mb-4">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                         alt="Client 2" class="w-20 h-20 rounded-full object-cover">
                </div>
                <div class="flex justify-center mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
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
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gray-50 rounded-2xl p-8 text-center">
                <div class="flex justify-center mb-4">
                    <img src="https://images.unsplash.com/photo-1494790108755-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
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