<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JezDan Technology - Innovating Digital Solutions for Tanzania</title>
    <meta name="description" content="JezDan Technology offers secure software development, high-performance websites, and comprehensive IT solutions for Tanzanian businesses.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Advanced Navigation Header -->
    <header class="advanced-header">
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-content">
                    <div class="contact-info">
                        <span><i class="fas fa-phone"></i> +255 [Your Number]</span>
                        <span><i class="fas fa-envelope"></i> info@jezdan.co.tz</span>
                    </div>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <nav class="main-nav">
            <div class="container">
                <div class="nav-content">
                    <div class="logo-section">
                        <div class="logo-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="logo-text">
                            <h1>JezDan</h1>
                            <span>Technology</span>
                        </div>
                    </div>
                    
                    <div class="nav-menu">
                        <ul class="nav-links">
                            <li><a href="#home" class="nav-link active"><i class="fas fa-home"></i> Home</a></li>
                            <li><a href="#about" class="nav-link"><i class="fas fa-info-circle"></i> About</a></li>
                            <li class="dropdown">
                                <a href="#services" class="nav-link dropdown-toggle">
                                    <i class="fas fa-cogs"></i> Services <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#services"><i class="fas fa-code"></i> Software Development</a></li>
                                    <li><a href="#services"><i class="fas fa-globe"></i> Web Design</a></li>
                                    <li><a href="#services"><i class="fas fa-shield-alt"></i> Cybersecurity</a></li>
                                </ul>
                            </li>
                            <li><a href="#portfolio" class="nav-link"><i class="fas fa-briefcase"></i> Portfolio</a></li>
                            <li><a href="#services" class="mobile-nav-link"><i class="fas fa-cogs"></i> Services</a></li>
                            <li><a href="#contact" class="nav-link"><i class="fas fa-envelope"></i> Contact</a></li>
                        </ul>
                    </div>
                    
                    <div class="nav-actions">
                        <button class="btn-quote">
                            <i class="fas fa-calculator"></i> Get Quote
                        </button>
                        <div class="mobile-menu-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Advanced Hero Section with Swiper -->
    <section class="relative h-screen overflow-hidden">
        <!-- Swiper -->
        <div class="swiper heroSwiper h-full w-full swiper-fade">
            <div class="swiper-wrapper">
                <!-- Slide 1: Main Business -->
                <div class="swiper-slide relative flex items-center">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2048&q=80" alt="Technology Solutions" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-900/40 to-transparent"></div>
                    </div>
                    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
                        <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                            <span class="inline-block px-4 py-1.5 bg-blue-600/20 text-blue-400 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-blue-600/30">Experience Excellence</span>
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.1]">Empower Your Business with <span class="text-blue-400">Smart Technology</span></h1>
                            <p class="text-xl text-slate-200 mb-12 leading-relaxed">We build secure software, high-performance websites, and a powerful SMS platform to help you communicate and grow. Get started instantly with our shared Sender IDs—no approval delays.</p>
                            <div class="flex flex-col sm:flex-row items-center gap-4">
                                <a href="#contact" class="w-full sm:w-auto px-10 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 shadow-xl shadow-blue-600/30 transition-all text-center">Get a Free Quote</a>
                                <a href="#services" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group"><i class="fas fa-cogs text-2xl group-hover:scale-110 transition-transform"></i> View Services</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Web Design -->
                <div class="swiper-slide relative flex items-center">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2048&q=80" alt="Web Design" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-900/40 to-transparent"></div>
                    </div>
                    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
                        <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                            <span class="inline-block px-4 py-1.5 bg-blue-600/20 text-blue-400 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-blue-600/30">Digital Presence</span>
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.1]">Transform Your <span class="text-blue-400">Digital Presence</span></h1>
                            <p class="text-xl text-slate-200 mb-12 leading-relaxed">Professional web design and development that captures your brand essence. Get stunning websites with FREE setup - you only pay for domain and hosting.</p>
                            <div class="flex flex-col sm:flex-row items-center gap-4">
                                <a href="#portfolio" class="w-full sm:w-auto px-10 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 shadow-xl shadow-blue-600/30 transition-all text-center">
                                    View Portfolio
                                </a>
                                <a href="#contact" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group">
                                    <i class="fas fa-globe text-2xl group-hover:scale-110 transition-transform"></i> Start Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3: Software Solutions -->
                <div class="swiper-slide relative flex items-center">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da575a5ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2048&q=80" alt="Software Development" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-900/40 to-transparent"></div>
                    </div>
                    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
                        <div class="max-w-2xl translate-y-10 opacity-0 transition-all duration-1000 slide-content">
                            <span class="inline-block px-4 py-1.5 bg-blue-600/20 text-blue-400 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-blue-600/30">Custom Solutions</span>
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.1]">Custom Software <span class="text-blue-400">Solutions</span></h1>
                            <p class="text-xl text-slate-200 mb-12 leading-relaxed">Tailored business applications, School Management Systems, POS solutions, and licensing systems designed specifically for Tanzanian businesses.</p>
                            <div class="flex flex-col sm:flex-row items-center gap-4">
                                <a href="#services" class="w-full sm:w-auto px-10 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 shadow-xl shadow-blue-600/30 transition-all text-center">
                                    Explore Services
                                </a>
                                <a href="#pricing" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group">
                                    <i class="fas fa-tags text-2xl group-hover:scale-110 transition-transform"></i> View Pricing
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                </div>

            <!-- Navigation -->
            <div class="absolute bottom-10 right-10 z-20 flex gap-4">
                <button class="swiper-prev w-14 h-14 rounded-full border border-white/20 bg-white/10 text-white flex items-center justify-center hover:bg-blue-600 hover:border-blue-600 transition-all backdrop-blur-md">
                    <i class="fas fa-chevron-left text-2xl"></i>
                </button>
                <button class="swiper-next w-14 h-14 rounded-full border border-white/20 bg-white/10 text-white flex items-center justify-center hover:bg-blue-600 hover:border-blue-600 transition-all backdrop-blur-md">
                    <i class="fas fa-chevron-right text-2xl"></i>
                </button>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination !bottom-10 !left-6 !text-left !w-auto"></div>
        </div>
    </section>

    <!-- Advanced Services Section -->
    <section id="services" class="section section-gray">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4 animate-pulse">Our Expertise</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight">
                    <span class="font-heading">Advanced Digital Solutions</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We deliver cutting-edge technology solutions tailored to transform your business and accelerate growth in the digital age.
                </p>
            </div>

            <!-- Service Categories Tabs -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="service-tab active px-6 py-3 bg-blue-600 text-white rounded-full font-semibold transition-all duration-300 hover:bg-blue-700" data-category="all">
                    All Services
                </button>
                <button class="service-tab px-6 py-3 bg-white text-gray-700 rounded-full font-semibold transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 border border-gray-200" data-category="development">
                    Development
                </button>
                <button class="service-tab px-6 py-3 bg-white text-gray-700 rounded-full font-semibold transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 border border-gray-200" data-category="communication">
                    Communication
                </button>
                <button class="service-tab px-6 py-3 bg-white text-gray-700 rounded-full font-semibold transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 border border-gray-200" data-category="security">
                    Security & Support
                </button>
            </div>

            <!-- Services Grid -->
            <div class="grid-3 mb-16">
                <!-- Software Development -->
                <div class="service-card group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100" data-category="development">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-500 to-blue-600 rounded-bl-2xl flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fas fa-arrow-right text-xl"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">Software Development</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Custom business applications, School Management Systems, POS solutions, and licensing systems designed specifically for Tanzanian businesses.
                        </p>
                        
                        <!-- Detailed Features -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Custom Business Applications</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">School Management Systems</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">POS & Licensing Solutions</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Hospital & SACCO Systems</span>
                            </div>
                        </div>
                        
                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">PHP</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">Laravel</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">MySQL</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">Vue.js</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <a href="#contact" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                                Get Started <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <span class="text-sm text-gray-500">From 500,000 TZS</span>
                        </div>
                    </div>
                </div>

                <!-- Web Design -->
                <div class="service-card group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100" data-category="development">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-500 to-blue-600 rounded-bl-2xl flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fas fa-arrow-right text-xl"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">Web Design</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Professional websites with stunning designs, responsive layouts, and optimal user experience. FREE setup - you only pay for domain and hosting.
                        </p>
                        
                        <!-- Pricing Tiers -->
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center justify-between p-2 bg-gray-50 rounded-lg">
                                <span class="text-sm font-medium">Starter</span>
                                <span class="text-sm text-blue-600 font-bold">FREE Setup</span>
                            </div>
                            <div class="flex items-center justify-between p-2 bg-gray-50 rounded-lg">
                                <span class="text-sm font-medium">Business</span>
                                <span class="text-sm text-blue-600 font-bold">200,000 TZS</span>
                            </div>
                            <div class="flex items-center justify-between p-2 bg-gray-50 rounded-lg">
                                <span class="text-sm font-medium">E-Commerce</span>
                                <span class="text-sm text-blue-600 font-bold">600,000 TZS</span>
                            </div>
                        </div>
                        
                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">HTML5</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">CSS3</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">JavaScript</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">Bootstrap</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <a href="#contact" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                                Get Started <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <span class="text-sm text-gray-500">30,000 TZS/mo</span>
                        </div>
                    </div>
                </div>

                <!-- SMS Platform -->
                <div class="service-card group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100" data-category="communication">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-500 to-blue-600 rounded-bl-2xl flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fas fa-arrow-right text-xl"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-sms"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">SMS Platform</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Instant SMS communication with pre-approved Sender IDs. No registration delays. Perfect for businesses, schools, and organizations.
                        </p>
                        
                        <!-- Key Features -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Pre-approved Sender IDs</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Instant Activation</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Pay Per Message</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">API Integration</span>
                            </div>
                        </div>
                        
                        <!-- SMS Rates -->
                        <div class="bg-blue-50 rounded-lg p-3 mb-6">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-blue-900">SMS Rate</span>
                                <span class="text-lg font-bold text-blue-600">30 TZS/message</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <a href="#contact" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                                Get Started <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <span class="text-sm text-gray-500">No Setup Fee</span>
                        </div>
                    </div>
                </div>

                <!-- Cybersecurity -->
                <div class="service-card group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100" data-category="security">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-500 to-blue-600 rounded-bl-2xl flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fas fa-arrow-right text-xl"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">Cybersecurity</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Comprehensive security solutions to protect your digital assets, data, and infrastructure from modern cyber threats.
                        </p>
                        
                        <!-- Security Services -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Security Audits</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Firewall Setup</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Data Protection</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">24/7 Monitoring</span>
                            </div>
                        </div>
                        
                        <!-- Security Level -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 mb-6">
                            <div class="flex items-center">
                                <i class="fas fa-lock text-green-600 mr-2"></i>
                                <span class="text-sm font-medium text-green-800">Enterprise-grade Security</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <a href="#contact" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                                Get Started <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <span class="text-sm text-gray-500">From 100,000 TZS</span>
                        </div>
                    </div>
                </div>

                <!-- IT Consulting -->
                <div class="service-card group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100" data-category="security">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-500 to-blue-600 rounded-bl-2xl flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fas fa-arrow-right text-xl"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">IT Consulting</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Strategic technology consulting to help businesses leverage digital transformation for competitive advantage and growth.
                        </p>
                        
                        <!-- Consulting Areas -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Digital Strategy</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Process Optimization</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Technology Roadmap</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">System Integration</span>
                            </div>
                        </div>
                        
                        <!-- Consulting Type -->
                        <div class="bg-purple-50 border border-purple-200 rounded-lg p-3 mb-6">
                            <div class="flex items-center">
                                <i class="fas fa-brain text-purple-600 mr-2"></i>
                                <span class="text-sm font-medium text-purple-800">Strategic Planning</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <a href="#contact" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                                Get Started <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <span class="text-sm text-gray-500">From 200,000 TZS</span>
                        </div>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="service-card group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100" data-category="development">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-500 to-blue-600 rounded-bl-2xl flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fas fa-arrow-right text-xl"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">Digital Marketing</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Comprehensive digital marketing solutions including SEO, social media management, and online advertising to grow your brand.
                        </p>
                        
                        <!-- Marketing Services -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">SEO & SEM</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Social Media Marketing</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Content Strategy</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-sm">Email Marketing</span>
                            </div>
                        </div>
                        
                        <!-- Marketing Results -->
                        <div class="bg-orange-50 border border-orange-200 rounded-lg p-3 mb-6">
                            <div class="flex items-center">
                                <i class="fas fa-rocket text-orange-600 mr-2"></i>
                                <span class="text-sm font-medium text-orange-800">Growth-focused Results</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <a href="#contact" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                                Get Started <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <span class="text-sm text-gray-500">From 150,000 TZS</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Process Section -->
            <div class="bg-white rounded-3xl p-12 shadow-lg mb-16">
                <h3 class="text-3xl font-bold text-blue-900 mb-12 text-center font-heading">Our Process</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-2xl font-bold mx-auto mb-4">1</div>
                        <h4 class="text-xl font-bold text-blue-900 mb-3 font-heading">Consultation</h4>
                        <p class="text-gray-600">We understand your business needs and challenges through detailed consultation.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-2xl font-bold mx-auto mb-4">2</div>
                        <h4 class="text-xl font-bold text-blue-900 mb-3 font-heading">Planning</h4>
                        <p class="text-gray-600">We create a detailed project plan with timelines, milestones, and deliverables.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-2xl font-bold mx-auto mb-4">3</div>
                        <h4 class="text-xl font-bold text-blue-900 mb-3 font-heading">Development</h4>
                        <p class="text-gray-600">Our expert team develops your solution using best practices and modern technologies.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-2xl font-bold mx-auto mb-4">4</div>
                        <h4 class="text-xl font-bold text-blue-900 mb-3 font-heading">Support</h4>
                        <p class="text-gray-600">We provide ongoing support and maintenance to ensure your success.</p>
                    </div>
                </div>
            </div>

            <!-- Enhanced CTA Section -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-3xl p-12 text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl md:text-4xl font-bold mb-6 font-heading">Ready to Transform Your Business?</h3>
                    <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">
                        Let's discuss how our advanced solutions can help you achieve your business goals and drive growth.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contact" class="px-8 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-blue-50 transition-all transform hover:scale-105 shadow-xl">
                            <i class="fas fa-calculator mr-2"></i> Get Free Consultation
                        </a>
                        <a href="#pricing" class="px-8 py-4 bg-blue-500 text-white font-bold rounded-full hover:bg-blue-400 transition-all transform hover:scale-105 border border-blue-400">
                            <i class="fas fa-tags mr-2"></i> View Pricing Plans
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced About Section -->
    <section id="about" class="section">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">About Us</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight">
                    <span class="font-heading">About JezDan Technology</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Leading digital innovation in Tanzania, delivering cutting-edge technology solutions that transform businesses and empower growth.
                </p>
            </div>

            <!-- About Content Grid -->
            <div class="grid-2 gap-12 mb-16">
                <!-- Company Story -->
                <div class="flex flex-col justify-center">
                    <h3 class="text-3xl font-bold text-blue-900 mb-6 font-heading">Our Story</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        JezDan Technology is a technology company based in Tanzania, dedicated to delivering innovative and reliable digital solutions that help businesses grow. We noticed two major challenges facing Tanzanian businesses: high costs of software development and long delays in getting approved Sender IDs.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Founded with a vision to bridge the technology gap, we've grown into a comprehensive technology solutions provider that addresses these challenges head-on with affordable, instant, and reliable solutions.
                    </p>
                    <div class="flex items-center gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 font-heading">500+</div>
                            <div class="text-sm text-gray-600">Projects Completed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 font-heading">10+</div>
                            <div class="text-sm text-gray-600">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 font-heading">98%</div>
                            <div class="text-sm text-gray-600">Client Satisfaction</div>
                        </div>
                    </div>
                </div>

                <!-- Mission & Vision -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-blue-900 mb-6 font-heading">Our Mission & Vision</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold text-blue-900 mb-2 flex items-center">
                                <i class="fas fa-bullseye text-blue-600 mr-3"></i> Mission
                            </h4>
                            <p class="text-gray-600">To empower Tanzanian organizations with secure, scalable, and affordable technology—from business management systems to communication infrastructure—so they can thrive in the digital era.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-blue-900 mb-2 flex items-center">
                                <i class="fas fa-eye text-blue-600 mr-3"></i> Vision
                            </h4>
                            <p class="text-gray-600">To become Tanzania's trusted technology partner, known for innovation, reliability, and customer success.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose JezDan Technology Section -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-3xl p-12 text-white relative overflow-hidden mb-16">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div class="text-center mb-12">
                        <h3 class="text-3xl md:text-4xl font-bold mb-6 font-heading">Why Choose JezDan Technology?</h3>
                        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                            We combine technical excellence with deep local knowledge to deliver solutions that truly transform your business.
                        </p>
                    </div>

                    <!-- Benefits Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-4">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="text-xl font-bold mb-3 font-heading">Experienced Team</h4>
                            <p class="text-blue-100">Skilled developers with deep expertise in modern technologies and Tanzanian business needs.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-4">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h4 class="text-xl font-bold mb-3 font-heading">Affordable Solutions</h4>
                            <p class="text-blue-100">Cost-effective technology solutions tailored specifically for the Tanzanian market.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-4">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4 class="text-xl font-bold mb-3 font-heading">Secure & Scalable</h4>
                            <p class="text-blue-100">Built-in security features and scalable architecture to grow with your business.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-4">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h4 class="text-xl font-bold mb-3 font-heading">Reliable Support</h4>
                            <p class="text-blue-100">Dedicated support and maintenance to ensure your systems run smoothly.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-4">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h4 class="text-xl font-bold mb-3 font-heading">Innovative Tech</h4>
                            <p class="text-blue-100">Cutting-edge technologies and modern development practices.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-4">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4 class="text-xl font-bold mb-3 font-heading">Instant Solutions</h4>
                            <p class="text-blue-100">Quick deployment and activation, especially for SMS platform services.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center bg-gray-50 rounded-3xl p-12">
                <h3 class="text-3xl font-bold text-blue-900 mb-6 font-heading">Ready to Transform Your Business?</h3>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    Join hundreds of satisfied clients who have transformed their businesses with our innovative solutions.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="px-8 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition-all transform hover:scale-105 shadow-xl">
                        <i class="fas fa-phone mr-2"></i> Contact Us Today
                    </a>
                    <a href="#portfolio" class="px-8 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-blue-50 transition-all transform hover:scale-105 border-2 border-blue-600">
                        <i class="fas fa-briefcase mr-2"></i> View Our Work
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section section-gray">
        <div class="container">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-blue">Our Portfolio</h2>
            <div class="grid grid-2">
                <div class="card">
                    <h3 class="text-xl font-bold mb-3 text-blue">Dar es Salaam Retail POS System</h3>
                    <p class="mb-2"><strong>Client:</strong> Local Supermarket Chain (3 branches)</p>
                    <p class="mb-2"><strong>Challenge:</strong> Manual stock tracking leading to frequent shortages and overstocking.</p>
                    <p class="mb-2"><strong>Solution:</strong> Implemented a multi-branch POS system with real-time inventory tracking and automated reorder alerts.</p>
                    <p><strong>Result:</strong> Reduced stockouts by 40% and improved checkout speed by 50%.</p>
                </div>
                <div class="card">
                    <h3 class="text-xl font-bold mb-3 text-blue">Mwanza School Management with SMS Integration</h3>
                    <p class="mb-2"><strong>Client:</strong> Private Secondary School (600+ students)</p>
                    <p class="mb-2"><strong>Challenge:</strong> Manual report cards and difficulty collecting fees on time.</p>
                    <p class="mb-2"><strong>Solution:</strong> Full school management system with automated SMS results sent to parents via JezDan SMS Platform. Fee tracking with automated reminders.</p>
                    <p><strong>Result:</strong> Eliminated printing costs, improved fee collection by 35%, and parents loved receiving results instantly.</p>
                </div>
                <div class="card">
                    <h3 class="text-xl font-bold mb-3 text-blue">Software Licensing for Local Developer</h3>
                    <p class="mb-2"><strong>Client:</strong> Tanzanian Software Developer (POS System Seller)</p>
                    <p class="mb-2"><strong>Challenge:</strong> Software piracy was causing significant revenue loss.</p>
                    <p class="mb-2"><strong>Solution:</strong> Integrated our License Management System to generate unique keys and manage subscriptions.</p>
                    <p><strong>Result:</strong> Client now has recurring monthly revenue and eliminated unauthorized copies.</p>
                </div>
                <div class="card">
                    <h3 class="text-xl font-bold mb-3 text-blue">Business Website for Dar es Salaam Law Firm</h3>
                    <p class="mb-2"><strong>Client:</strong> Corporate Law Firm</p>
                    <p class="mb-2"><strong>Challenge:</strong> No online presence; potential clients couldn't find them.</p>
                    <p class="mb-2"><strong>Solution:</strong> Professional 10-page website with contact forms, lawyer profiles, and blog section.</p>
                    <p><strong>Result:</strong> Increased client inquiries by 60% within 3 months.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="section">
        <div class="container">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-blue">Pricing Plans</h2>
            
            <div class="mb-12">
                <h3 class="text-2xl font-bold mb-6 text-blue">💻 Website Packages</h3>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-blue-100">
                                <th class="border border-gray-300 p-3">Package</th>
                                <th class="border border-gray-300 p-3">Setup</th>
                                <th class="border border-gray-300 p-3">Monthly</th>
                                <th class="border border-gray-300 p-3">Features</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 p-3 font-bold">Starter</td>
                                <td class="border border-gray-300 p-3">FREE</td>
                                <td class="border border-gray-300 p-3">30,000 TZS</td>
                                <td class="border border-gray-300 p-3">5 pages, mobile responsive, WhatsApp button. Domain + hosting paid yearly by client.</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 p-3 font-bold">Business</td>
                                <td class="border border-gray-300 p-3">200,000 TZS</td>
                                <td class="border border-gray-300 p-3">50,000 TZS</td>
                                <td class="border border-gray-300 p-3">10 pages, admin dashboard, SEO, analytics, blog.</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 p-3 font-bold">E-Commerce</td>
                                <td class="border border-gray-300 p-3">600,000 TZS</td>
                                <td class="border border-gray-300 p-3">80,000 TZS</td>
                                <td class="border border-gray-300 p-3">Online store, M-Pesa integration, order management, SMS alerts.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mb-12">
                <h3 class="text-2xl font-bold mb-6 text-blue">🔥 Business Growth Bundle - Best Value</h3>
                <div class="card bg-blue-50 border-2 border-blue-300">
                    <div class="grid grid-2">
                        <div>
                            <h4 class="text-xl font-bold mb-4">Most recommended for serious businesses looking to scale.</h4>
                            <ul class="list-disc pl-6">
                                <li>Website OR Business System</li>
                                <li>SMS Integration</li>
                                <li>Analytics Dashboard</li>
                                <li>Payment Integration</li>
                            </ul>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl font-bold mb-2">Setup: 800,000 TZS</p>
                            <p class="text-xl font-bold">Monthly: 150,000 TZS</p>
                            <a href="#contact" class="btn btn-primary mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section section-gray">
        <div class="container">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-blue">Contact Us</h2>
            <div class="text-center mb-8">
                <p class="text-xl mb-4">Ready to start your project or start sending SMS?</p>
            </div>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3 class="text-xl font-bold mb-6 text-blue">Get in Touch</h3>
                    <div class="mb-4">
                        <p><strong>📞 Phone/WhatsApp:</strong> +255 [Your Number]</p>
                    </div>
                    <div class="mb-4">
                        <p><strong>✉️ Email:</strong> info@jezdan.co.tz</p>
                    </div>
                    <div class="mb-4">
                        <p><strong>📍 Location:</strong> Moshi, Kilimanjaro, Tanzania</p>
                    </div>
                    <div class="mb-4">
                        <p><strong>🕐 Office Hours:</strong> Monday – Friday, 9:00 AM – 5:00 PM</p>
                    </div>
                    <div class="mt-6">
                        <a href="https://wa.me/255[yournumber]" class="btn btn-secondary">
                            💬 Chat with us on WhatsApp
                        </a>
                    </div>
                </div>
                
                <div class="card">
                    <h3 class="text-xl font-bold mb-6 text-blue">Quick Contact Form</h3>
                    <form id="contactForm">
                        <div class="mb-4">
                            <label class="block mb-2" for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2" for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2" for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full p-3 border border-gray-300 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2" for="service">Service Interested In</label>
                            <select id="service" name="service" class="w-full p-3 border border-gray-300 rounded">
                                <option value="website">Website</option>
                                <option value="business-system">Business System</option>
                                <option value="web-design">Web Design</option>
                                <option value="license-system">License System</option>
                                <option value="it-support">IT Support</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2" for="message">Message / Requirements</label>
                            <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-full">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>JezDan Technology</h3>
                    <p>Innovating Digital Solutions for Tanzania</p>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#sms-platform">SMS Platform</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#services">Software Development</a></li>
                        <li><a href="#services">Website Design</a></li>
                        <li><a href="#sms-platform">SMS Platform</a></li>
                        <li><a href="#services">License System</a></li>
                        <li><a href="#services">IT Support</a></li>
                        <li><a href="#services">Cybersecurity</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Contact</h3>
                    <ul>
                        <li>📞 +255 [Your Number]</li>
                        <li>✉️ info@jezdan.co.tz</li>
                        <li>📍 Moshi, Kilimanjaro, Tanzania</li>
                        <li>🌐 www.jezdantech.com</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2026 JezDan Technology. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    </body>
</html>

                                                                    
