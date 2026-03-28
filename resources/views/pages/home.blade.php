@extends('layouts.app')

@section('title', 'Jezdan Technology - Reliable ICT Solutions in Tanzania')
@section('description', 'Jezdan Technology provides reliable ICT solutions in Tanzania including web development, mobile apps, network installation, cybersecurity, IT support, and ICT consultancy.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white overflow-hidden">
    <!-- Hero Slider -->
    <div class="relative h-96 md:h-[500px] overflow-hidden">
        <div id="heroSlider" class="relative h-full">
            <!-- Slide 1: Web Development -->
            <div class="absolute inset-0 transition-opacity duration-1000" data-slide="0">
                <div class="absolute inset-0 bg-black/40"></div>
                <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg" alt="Web Development" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-6">
                        <div class="mb-6">
                            <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                                <i class="fas fa-code mr-2"></i> Web Development
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold mb-4">Custom Web Solutions</h2>
                        <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                            Professional websites and web applications that drive your business forward
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                            <a href="{{ route('contact') }}" class="px-6 py-3 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                                Get a Quote
                            </a>
                            <a href="{{ route('services.web-development') }}" class="px-6 py-3 bg-white/20 text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Mobile App Development -->
            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0" data-slide="1">
                <div class="absolute inset-0 bg-black/40"></div>
                <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg" alt="Mobile App Development" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-6">
                        <div class="mb-6">
                            <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                                <i class="fas fa-mobile-alt mr-2"></i> Mobile Apps
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold mb-4">Native Mobile Applications</h2>
                        <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                            iOS and Android apps that engage users and deliver exceptional experiences
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                            <a href="{{ route('contact') }}" class="px-6 py-3 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                                Get a Quote
                            </a>
                            <a href="{{ route('services.mobile-app-development') }}" class="px-6 py-3 bg-white/20 text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Network Installation -->
            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0" data-slide="2">
                <div class="absolute inset-0 bg-black/40"></div>
                <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg" alt="Network Installation" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-6">
                        <div class="mb-6">
                            <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                                <i class="fas fa-network-wired mr-2"></i> Network Solutions
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold mb-4">Robust Network Infrastructure</h2>
                        <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                            Professional network setup for seamless connectivity and security
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                            <a href="{{ route('contact') }}" class="px-6 py-3 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                                Get a Quote
                            </a>
                            <a href="{{ route('services.network-installation') }}" class="px-6 py-3 bg-white/20 text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Cybersecurity -->
            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0" data-slide="3">
                <div class="absolute inset-0 bg-black/40"></div>
                <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/criminal-hacking-system-unsuccessfully_jjxzdq.jpg" alt="Cybersecurity" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-6">
                        <div class="mb-6">
                            <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                                <i class="fas fa-shield-alt mr-2"></i> Cybersecurity
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold mb-4">Advanced Security Solutions</h2>
                        <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                            Protect your digital assets with comprehensive security measures
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                            <a href="{{ route('contact') }}" class="px-6 py-3 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                                Get a Quote
                            </a>
                            <a href="{{ route('services.cybersecurity') }}" class="px-6 py-3 bg-white/20 text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 5: IT Support & Consultancy -->
            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0" data-slide="4">
                <div class="absolute inset-0 bg-black/40"></div>
                <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600085/teamworking-engineers-talking-server-room-doing-brainstorming_vm01lf.jpg" alt="IT Support & Consultancy" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-6">
                        <div class="mb-6">
                            <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                                <i class="fas fa-headset mr-2"></i> IT Support & Consultancy
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold mb-4">Expert IT Services</h2>
                        <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                            24/7 support and strategic technology consulting for your business
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                            <a href="{{ route('contact') }}" class="px-6 py-3 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                                Get a Quote
                            </a>
                            <a href="{{ route('services.ict-consultancy') }}" class="px-6 py-3 bg-white/20 text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
            <button onclick="showSlide(0)" class="w-3 h-3 bg-white rounded-full transition-all duration-300 slider-dot" data-dot="0"></button>
            <button onclick="showSlide(1)" class="w-3 h-3 bg-white/50 rounded-full transition-all duration-300 slider-dot" data-dot="1"></button>
            <button onclick="showSlide(2)" class="w-3 h-3 bg-white/50 rounded-full transition-all duration-300 slider-dot" data-dot="2"></button>
            <button onclick="showSlide(3)" class="w-3 h-3 bg-white/50 rounded-full transition-all duration-300 slider-dot" data-dot="3"></button>
            <button onclick="showSlide(4)" class="w-3 h-3 bg-white/50 rounded-full transition-all duration-300 slider-dot" data-dot="4"></button>
        </div>

        <!-- Navigation Arrows -->
        <button onclick="previousSlide()" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white p-3 rounded-full hover:bg-white/30 transition-all duration-300 z-20">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button onclick="nextSlide()" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white p-3 rounded-full hover:bg-white/30 transition-all duration-300 z-20">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-8 text-gray-50" viewBox="0 0 1440 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 32L30 29.3C60 26.7 120 21.3 180 18.7C240 16 300 16 360 17.3C420 18.7 480 21.3 540 22.7C600 24 660 24 720 25.3C780 26.7 840 29.3 900 30.7C960 32 1020 32 1080 32C1140 32 1200 32 1260 32C1320 32 1380 32 1410 32L1440 32V32H0V32Z" fill="currentColor"/>
        </svg>
    </div>
</section>

<!-- Key Services Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Key Services</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Comprehensive technology solutions tailored for Tanzanian businesses
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Web Development -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg" 
                         alt="Web Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                        </div>
                        <span class="text-sm text-gray-600">5.0 (Verified)</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Web Development</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Professional websites and web applications tailored for Tanzanian businesses with modern design and functionality</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">500,000 TZS</p>
                    </div>
                    <button class="w-full bg-gray-900 text-white font-semibold py-3 px-4 rounded-xl hover:bg-gray-800 transition-colors duration-300 flex items-center justify-center gap-2">
                        Get Quote <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile App Development -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg" 
                         alt="Mobile App Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                        </div>
                        <span class="text-sm text-gray-600">5.0 (Verified)</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile App Development</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Custom mobile applications for iOS and Android with intuitive design and powerful features</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">800,000 TZS</p>
                    </div>
                    <button class="w-full bg-gray-900 text-white font-semibold py-3 px-4 rounded-xl hover:bg-gray-800 transition-colors duration-300 flex items-center justify-center gap-2">
                        Get Quote <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Network Installation -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg" 
                         alt="Network Installation" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                        </div>
                        <span class="text-sm text-gray-600">5.0 (Verified)</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Network Installation</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Professional network setup and configuration for seamless business operations across Tanzania</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">300,000 TZS</p>
                    </div>
                    <button class="w-full bg-gray-900 text-white font-semibold py-3 px-4 rounded-xl hover:bg-gray-800 transition-colors duration-300 flex items-center justify-center gap-2">
                        Get Quote <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Cybersecurity -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/criminal-hacking-system-unsuccessfully_jjxzdq.jpg" 
                         alt="Cybersecurity" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                        </div>
                        <span class="text-sm text-gray-600">5.0 (Verified)</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cybersecurity</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Advanced security solutions to protect your digital assets and ensure business continuity</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">400,000 TZS</p>
                    </div>
                    <button class="w-full bg-gray-900 text-white font-semibold py-3 px-4 rounded-xl hover:bg-gray-800 transition-colors duration-300 flex items-center justify-center gap-2">
                        Get Quote <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- IT Support -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/admin-data-center-typing-notebook-keyboard-using-automation-tools_lsc29m.jpg" 
                         alt="IT Support" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                        </div>
                        <span class="text-sm text-gray-600">5.0 (Verified)</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">IT Support</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Reliable 24/7 technical support and maintenance to keep your business running smoothly</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">200,000 TZS</p>
                    </div>
                    <button class="w-full bg-gray-900 text-white font-semibold py-3 px-4 rounded-xl hover:bg-gray-800 transition-colors duration-300 flex items-center justify-center gap-2">
                        Get Quote <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- ICT Consultancy -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg" 
                         alt="ICT Consultancy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                        </div>
                        <span class="text-sm text-gray-600">5.0 (Verified)</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">ICT Consultancy</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Strategic technology consulting to drive digital transformation and business growth</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">600,000 TZS</p>
                    </div>
                    <button class="w-full bg-gray-900 text-white font-semibold py-3 px-4 rounded-xl hover:bg-gray-800 transition-colors duration-300 flex items-center justify-center gap-2">
                        Get Quote <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- Why Choose Us -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Why Choose Jezdan Technology?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Trusted ICT partner delivering excellence and innovation across Tanzania
                </p>
            </div>
           <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Growth with Confidence -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Growth with Confidence</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">Focus on your business while we manage your IT. Ensure reliable performance and uninterrupted operations.</p>
                </div>

                <!-- Smarter IT Investments -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Smarter IT Investments</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">Optimize IT costs without compromising quality. Extend the life of your infrastructure efficiently.</p>
                </div>

                <!-- Trusted Support & Innovation -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Trusted Support & Innovation</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">Fast, reliable support whenever you need it. Leverage proven technologies to drive business forward.</p>
                </div>

                <!-- Local Expertise, Global Solutions -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Local Expertise, Global Solutions</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">Based in Tanzania with deep market knowledge. Deliver IT services that meet world-class standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>








<!-- Sample Portfolio -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Sample Portfolio</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Explore our latest projects and success stories from across Tanzania
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
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                        </div>
                        <span class="text-sm text-gray-600">5.0 (Completed)</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">E-commerce Platform</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Complete e-commerce solution with payment integration and inventory management for a retail client in Dar es Salaam</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-xs">Laravel</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-xs">Vue.js</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-xs">MySQL</span>
                        </div>
                    </div>
                    <button class="w-full bg-gray-900 text-white font-semibold py-3 px-4 rounded-xl hover:bg-gray-800 transition-colors duration-300 flex items-center justify-center gap-2">
                        View Project <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Project 2: Mobile Banking App -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/internet-banking-online-payment-technology-concept_gtoa6s.jpg" 
                         alt="Mobile Banking App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                        </div>
                        <span class="text-sm text-gray-600">5.0 (Completed)</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile Banking App</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Secure mobile banking application with biometric authentication and real-time transactions for a financial institution</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">React Native</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Node.js</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-600 rounded text-xs">Firebase</span>
                        </div>
                    </div>
                    <button class="w-full bg-gray-900 text-white font-semibold py-3 px-4 rounded-xl hover:bg-gray-800 transition-colors duration-300 flex items-center justify-center gap-2">
                        View Project <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Project 3: School Management System -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/modern-data-center-providing-cloud-services-enabling-businesses-access-computing-resources-storage-demand-internet-server-room-infrastructure-3d-render-animation_lljtml.jpg" 
                         alt="School Management System" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex items-center">
                            <span class="text-yellow-500">★★★★★</span>
                        </div>
                        <span class="text-sm text-gray-600">5.0 (Completed)</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">School Management System</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Comprehensive system for student management and academic tracking with automated reporting</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">TECHNOLOGY</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-green-100 text-green-600 rounded text-xs">React</span>
                            <span class="px-2 py-1 bg-green-100 text-green-600 rounded text-xs">Node.js</span>
                            <span class="px-2 py-1 bg-green-100 text-green-600 rounded text-xs">MongoDB</span>
                        </div>
                    </div>
                    <button class="w-full bg-gray-900 text-white font-semibold py-3 px-4 rounded-xl hover:bg-gray-800 transition-colors duration-300 flex items-center justify-center gap-2">
                        View Project <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-12">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center px-8 py-3 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                View More Projects <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-blue-600 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Business?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Contact us today for a free consultation and quote</p>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-colors">
                Get Started
            </a>
            <a href="{{ route('portfolio') }}" class="px-8 py-3 bg-transparent border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-blue-600 transition-colors">
                View Our Work
            </a>
        </div>
    </div>
</section>

<!-- Hero Slider JavaScript -->
<script>
let currentSlide = 0;
const totalSlides = 5;
let slideInterval;

function showSlide(index) {
    // Hide all slides
    const slides = document.querySelectorAll('[data-slide]');
    slides.forEach(slide => {
        slide.classList.add('opacity-0');
        slide.classList.remove('opacity-100');
    });
    
    // Show current slide
    const currentSlideElement = document.querySelector(`[data-slide="${index}"]`);
    if (currentSlideElement) {
        currentSlideElement.classList.remove('opacity-0');
        currentSlideElement.classList.add('opacity-100');
    }
    
    // Update dots
    const dots = document.querySelectorAll('.slider-dot');
    dots.forEach(dot => {
        dot.classList.remove('bg-white');
        dot.classList.add('bg-white/50');
    });
    
    const currentDot = document.querySelector(`[data-dot="${index}"]`);
    if (currentDot) {
        currentDot.classList.remove('bg-white/50');
        currentDot.classList.add('bg-white');
    }
    
    currentSlide = index;
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
    resetInterval();
}

function previousSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
    resetInterval();
}

function startSlideShow() {
    slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
}

function resetInterval() {
    clearInterval(slideInterval);
    startSlideShow();
}

// Initialize slider on page load
document.addEventListener('DOMContentLoaded', function() {
    showSlide(0);
    startSlideShow();
    
    // Pause on hover
    const slider = document.getElementById('heroSlider');
    if (slider) {
        slider.addEventListener('mouseenter', () => clearInterval(slideInterval));
        slider.addEventListener('mouseleave', startSlideShow);
    }
});
</script>

@endsection
