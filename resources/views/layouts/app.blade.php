<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jezdan Technology')</title>
    <meta name="description" content="@yield('description', 'Jezdan Technology - Reliable ICT Solutions in Tanzania')">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('jezdan.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('jezdan.png') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'manrope': ['Manrope', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Manrope', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
    </style>
    
    <!-- Google Analytics -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1SRVTFSDXT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-1SRVTFSDXT');
    </script>
</head>
<body class="bg-gray-50 font-manrope">
    <!-- Top Header Bar -->
    <div class="bg-gray-900 text-white py-2 sticky top-0 z-50">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between text-sm">
                <!-- Left Side: Contact Info & Location -->
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-4">
                        <!-- Phone -->
                        <a href="tel:+255712345678" class="flex items-center gap-2 hover:text-blue-400 transition-colors">
                            <i class="fas fa-phone"></i>
                            <span class="hidden md:inline">+255 712 345 678</span>
                        </a>
                        <!-- Email -->
                        <a href="mailto:info@jezdan.co.tz" class="flex items-center gap-2 hover:text-blue-400 transition-colors">
                            <i class="fas fa-envelope"></i>
                            <span class="hidden md:inline">info@jezdan.co.tz</span>
                        </a>
                        <!-- Location -->
                        <div class="flex items-center gap-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="hidden md:inline">Moshi, Kilimanjaro</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side: Quick Actions & Social Media -->
                <div class="flex items-center space-x-4">
                    <!-- Working Hours -->
                    <div class="hidden lg:flex items-center gap-2">
                        <i class="fas fa-clock"></i>
                        <span>Mon-Fri: 8AM-6PM</span>
                    </div>
                    
                    <!-- WhatsApp Button -->
                    <a href="https://wa.me/255712345678" target="_blank" class="bg-green-600 hover:bg-green-700 px-3 py-1 rounded-full flex items-center gap-2 transition-colors">
                        <i class="fab fa-whatsapp"></i>
                        <span class="hidden md:inline">WhatsApp</span>
                    </a>
                    
                    <!-- Social Media Icons -->
                    <div class="flex items-center space-x-2">
                        <a href="https://facebook.com/jezdantechnology" target="_blank" class="hover:text-blue-400 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://linkedin.com/company/jezdantechnology" target="_blank" class="hover:text-blue-400 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://instagram.com/jezdantechnology" target="_blank" class="hover:text-blue-400 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="bg-white shadow-md sticky top-10 z-40">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center hover:opacity-80 transition-opacity">
                        <img src="{{ asset('jezdan-logo.png') }}" alt="Jezdan Technology" class="h-10 w-auto mr-3">
                    </a>
                    <a href="{{ route('home') }}" class="text-xl font-bold text-gray-900 hover:text-blue-600 transition-colors">
                        Jezdan Technology
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <!-- Home -->
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-600 font-medium transition-colors py-2 relative group {{ request()->routeIs('home') ? 'text-green-600' : '' }}">
                        Home
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform {{ request()->routeIs('home') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    
                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-green-600 font-medium transition-colors py-2 flex items-center gap-1 relative group {{ request()->routeIs('services*') ? 'text-green-600' : '' }}">
                            Services 
                            <i class="fas fa-chevron-down text-xs ml-1 transition-transform group-hover:rotate-180"></i>
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform {{ request()->routeIs('services*') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                        </button>
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-[600px] bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 mt-2">
                            <div class="p-6">
                                <div class="grid grid-cols-2 gap-8">
                                    <!-- Core Development Services -->
                                    <div>
                                        <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-4">Core Development</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('services.web-development') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 flex-shrink-0">
                                                    <span class="text-sm">🌐</span>
                                                </div>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">Web Development</span>
                                                    <p class="text-xs text-gray-500">Professional websites & applications</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('services.mobile-app-development') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600 flex-shrink-0">
                                                    <span class="text-sm">📱</span>
                                                </div>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">Mobile Apps</span>
                                                    <p class="text-xs text-gray-500">iOS & Android solutions</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('services.system-development') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 flex-shrink-0">
                                                    <span class="text-sm">🧾</span>
                                                </div>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">System Development</span>
                                                    <p class="text-xs text-gray-500">Custom business systems</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('services.network-installation') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <div class="w-8 h-8 bg-cyan-100 rounded-lg flex items-center justify-center text-cyan-600 flex-shrink-0">
                                                    <span class="text-sm">🌐</span>
                                                </div>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">Network Installation</span>
                                                    <p class="text-xs text-gray-500">Infrastructure setup</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <!-- Support & Infrastructure Services -->
                                    <div>
                                        <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-4">Support Services</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('services.cybersecurity') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <div class="w-8 h-8 bg-red-100 rounded-lg flex items-center justify-center text-red-600 flex-shrink-0">
                                                    <span class="text-sm">🛡️</span>
                                                </div>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">Cybersecurity</span>
                                                    <p class="text-xs text-gray-500">Security solutions</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('services.it-support') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center text-green-600 flex-shrink-0">
                                                    <span class="text-sm">🧰</span>
                                                </div>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">IT Support</span>
                                                    <p class="text-xs text-gray-500">24/7 technical assistance</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('services.ict-consultancy') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center text-yellow-600 flex-shrink-0">
                                                    <span class="text-sm">💡</span>
                                                </div>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">ICT Consultancy</span>
                                                    <p class="text-xs text-gray-500">Strategic technology planning</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('services.cloud-services') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <div class="w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center text-indigo-600 flex-shrink-0">
                                                    <span class="text-sm">☁️</span>
                                                </div>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">Cloud Services</span>
                                                    <p class="text-xs text-gray-500">Cloud infrastructure</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t mt-4 pt-4">
                                    <a href="{{ route('services') }}" class="text-green-600 font-semibold hover:text-green-700 transition-colors flex items-center gap-2">
                                        View All Services <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Portfolio Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-green-600 font-medium transition-colors py-2 flex items-center gap-1 {{ request()->routeIs('portfolio') ? 'text-green-600' : '' }}">
                            Portfolio <i class="fas fa-chevron-down text-xs ml-1 transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-[600px] bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 mt-2">
                            <div class="p-6">
                                <div class="grid grid-cols-2 gap-8">
                                    <!-- Project Categories -->
                                    <div>
                                        <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-4">Project Categories</h3>
                                        <div class="space-y-4">
                                            <a href="#" class="flex items-start gap-3 group/item">
                                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Web Projects" class="w-16 h-16 rounded-lg object-cover">
                                                <div>
                                                    <h4 class="font-semibold text-gray-900 group-hover/item:text-green-600 transition-colors">Web Projects</h4>
                                                    <p class="text-sm text-gray-600">Websites & Web Apps</p>
                                                    <p class="text-xs text-gray-500 mt-1">Custom web development solutions</p>
                                                </div>
                                            </a>
                                            <a href="#" class="flex items-start gap-3 group/item">
                                                <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Mobile Apps" class="w-16 h-16 rounded-lg object-cover">
                                                <div>
                                                    <h4 class="font-semibold text-gray-900 group-hover/item:text-green-600 transition-colors">Mobile Applications</h4>
                                                    <p class="text-sm text-gray-600">iOS & Android Apps</p>
                                                    <p class="text-xs text-gray-500 mt-1">Native and cross-platform apps</p>
                                                </div>
                                            </a>
                                            <a href="#" class="flex items-start gap-3 group/item">
                                                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Network Solutions" class="w-16 h-16 rounded-lg object-cover">
                                                <div>
                                                    <h4 class="font-semibold text-gray-900 group-hover/item:text-green-600 transition-colors">Network Infrastructure</h4>
                                                    <p class="text-sm text-gray-600">IT Networks</p>
                                                    <p class="text-xs text-gray-500 mt-1">Enterprise network solutions</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <!-- Success Stories -->
                                    <div>
                                        <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-4">Success Stories</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('portfolio') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <i class="fas fa-shopping-cart text-green-600"></i>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">E-commerce Solutions</span>
                                                    <p class="text-xs text-gray-500">Online retail platforms</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('portfolio') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <i class="fas fa-university text-green-600"></i>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">Banking & Finance</span>
                                                    <p class="text-xs text-gray-500">Financial technology solutions</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('portfolio') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <i class="fas fa-graduation-cap text-green-600"></i>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">Education Systems</span>
                                                    <p class="text-xs text-gray-500">School management platforms</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('portfolio') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <i class="fas fa-hospital text-green-600"></i>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">Healthcare Solutions</span>
                                                    <p class="text-xs text-gray-500">Medical management systems</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('portfolio') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <i class="fas fa-industry text-green-600"></i>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">Enterprise Systems</span>
                                                    <p class="text-xs text-gray-500">Business management solutions</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('portfolio') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-green-50 transition-colors group">
                                                <i class="fas fa-shield-alt text-green-600"></i>
                                                <div>
                                                    <span class="text-gray-700 group-hover:text-green-600 transition-colors font-medium">Security Projects</span>
                                                    <p class="text-xs text-gray-500">Cybersecurity implementations</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t mt-4 pt-4">
                                    <a href="{{ route('portfolio') }}" class="text-green-600 font-semibold hover:text-green-700 transition-colors flex items-center gap-2">
                                        View All Projects <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- About Us -->
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-green-600 font-medium transition-colors py-2 relative group {{ request()->routeIs('about') ? 'text-green-600' : '' }}">
                        About Us
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform {{ request()->routeIs('about') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    
                    <!-- Contact -->
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-green-600 font-medium transition-colors py-2 relative group {{ request()->routeIs('contact') ? 'text-green-600' : '' }}">
                        Contact
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform {{ request()->routeIs('contact') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                </div>

                <!-- Desktop Action Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('request-demo') }}" class="px-6 py-2 bg-green-600 text-white font-bold rounded-full hover:bg-green-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Request Demo
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-gray-100 transition-colors" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden bg-white border-t shadow-lg">
                <div class="px-6 py-4 space-y-2">
                    <!-- Home -->
                    <a href="{{ route('home') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors {{ request()->routeIs('home') ? 'text-blue-600 bg-blue-50' : '' }}">
                        <i class="fas fa-home mr-3 text-blue-600"></i>Home
                    </a>
                    
                    <!-- Request Demo -->
                    <a href="{{ route('request-demo') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors {{ request()->routeIs('request-demo') ? 'text-blue-600 bg-blue-50' : '' }}">
                        <i class="fas fa-video mr-3 text-green-600"></i>Request Demo
                    </a>
                    
                    <!-- Services -->
                    <div class="border-t pt-2">
                        <button class="w-full text-left text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors flex items-center justify-between {{ request()->routeIs('services*') ? 'text-blue-600 bg-blue-50' : '' }}" onclick="toggleMobileSubmenu('mobile-services')">
                            <span><i class="fas fa-cogs mr-3 text-blue-600"></i>Services</span> 
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-services-icon"></i>
                        </button>
                        <div id="mobile-services" class="hidden pl-4 space-y-1 mt-1">
                            <a href="{{ route('services.web-development') }}" class="block text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-globe mr-2 text-blue-500"></i>Web Development
                            </a>
                            <a href="{{ route('services.mobile-app-development') }}" class="block text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-mobile-alt mr-2 text-purple-500"></i>Mobile Apps
                            </a>
                            <a href="{{ route('services.network-installation') }}" class="block text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-network-wired mr-2 text-orange-500"></i>Network Installation
                            </a>
                            <a href="{{ route('services.cybersecurity') }}" class="block text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-shield-alt mr-2 text-red-500"></i>Cybersecurity
                            </a>
                            <a href="{{ route('services.it-support') }}" class="block text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-headset mr-2 text-green-500"></i>IT Support
                            </a>
                            <a href="{{ route('services.ict-consultancy') }}" class="block text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-lightbulb mr-2 text-indigo-500"></i>ICT Consultancy
                            </a>
                        </div>
                    </div>
                    
                    <!-- Portfolio -->
                    <div class="border-t pt-2">
                        <button class="w-full text-left text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors flex items-center justify-between {{ request()->routeIs('portfolio') ? 'text-blue-600 bg-blue-50' : '' }}" onclick="toggleMobileSubmenu('mobile-portfolio')">
                            <span><i class="fas fa-briefcase mr-3 text-blue-600"></i>Portfolio</span>
                            <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-portfolio-icon"></i>
                        </button>
                        <div id="mobile-portfolio" class="hidden pl-4 space-y-1 mt-1">
                            <a href="{{ route('portfolio') }}#web-projects" class="block text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-globe mr-2 text-blue-500"></i>Web Projects
                            </a>
                            <a href="{{ route('portfolio') }}#mobile-apps" class="block text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-mobile-alt mr-2 text-purple-500"></i>Mobile Apps
                            </a>
                            <a href="{{ route('portfolio') }}#network-projects" class="block text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-network-wired mr-2 text-orange-500"></i>Network Solutions
                            </a>
                        </div>
                    </div>
                    
                    <!-- About -->
                    <a href="{{ route('about') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors border-t pt-2 {{ request()->routeIs('about') ? 'text-blue-600 bg-blue-50' : '' }}">
                        <i class="fas fa-info-circle mr-3 text-blue-600"></i>About Us
                    </a>
                    
                    <!-- Contact -->
                    <a href="{{ route('contact') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors border-t pt-2 {{ request()->routeIs('contact') ? 'text-blue-600 bg-blue-50' : '' }}">
                        <i class="fas fa-envelope mr-3 text-blue-600"></i>Contact
                    </a>
                    
                    <!-- Mobile CTA Button -->
                    <div class="border-t pt-4 mt-4">
                        <a href="{{ route('contact') }}" class="block w-full px-6 py-3 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition-all duration-300 text-center shadow-lg">
                            Get Free Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center mb-4">
                    <a href="{{ route('home') }}" class="flex items-center hover:opacity-80 transition-opacity">
                        <img src="{{ asset('jezdan-logo.png') }}" alt="Jezdan Technology" class="h-10 w-auto mr-3">
                    </a>
                    <span class="text-xl font-bold">Jezdan Technology</span>
                </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Reliable ICT solutions for businesses in Tanzania. Your trusted technology partner.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors">Services</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Our Services</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors">Web Development</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors">Mobile App Development</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors">Network Installation</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors">Cybersecurity</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors">IT Support</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors">ICT Consultancy</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Contact Info</h4>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-map-marker-alt text-blue-400"></i>
                            <span class="text-gray-400 text-sm">Moshi, Kilimanjaro</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone text-blue-400"></i>
                            <span class="text-gray-400 text-sm">+255 123 456 789</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <span class="text-gray-400 text-sm">info@jezdantechnology.co.tz</span>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="flex gap-3 mt-4">
                        <a href="https://wa.me/255123456789" target="_blank" class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center text-white hover:bg-green-600 transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-8 pt-8">
            <div class="container mx-auto px-6 text-center">
                <p class="text-gray-400 text-sm">
                    © {{ date('Y') }} Jezdan Technology. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
        
        function toggleMobileSubmenu(id) {
            const submenu = document.getElementById(id);
            const icon = document.getElementById(id + '-icon');
            
            submenu.classList.toggle('hidden');
            
            // Rotate chevron icon
            if (icon) {
                icon.classList.toggle('rotate-180');
            }
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuButton = event.target.closest('button[onclick="toggleMobileMenu()"]');
            
            if (!mobileMenu.contains(event.target) && !menuButton && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }
        });
        
        // Close mobile menu on window resize if desktop view
        window.addEventListener('resize', function() {
            const mobileMenu = document.getElementById('mobileMenu');
            if (window.innerWidth >= 768 && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>

<!-- Page Transition Animation -->
<style>
    .page-transition {
        opacity: 0;
        transform: translateY(30px) scale(0.98);
        filter: blur(2px);
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .page-transition.active {
        opacity: 1;
        transform: translateY(0) scale(1);
        filter: blur(0px);
    }
    
    .fade-out {
        opacity: 0;
        transform: translateY(-20px) scale(0.98);
        filter: blur(3px);
        transition: all 0.6s cubic-bezier(0.4, 0, 1, 1);
    }
    
    /* Ensure smooth transitions for all child elements */
    .page-transition * {
        transition-delay: 0.1s;
    }
    
    /* Prevent flash of unstyled content */
    main {
        overflow-x: hidden;
    }
</style>

<script>
    // Page transition functionality
    document.addEventListener('DOMContentLoaded', function() {
        const mainContent = document.querySelector('main');
        if (mainContent) {
            mainContent.classList.add('page-transition');
            
            // Trigger fade in animation with slight delay
            setTimeout(() => {
                mainContent.classList.add('active');
            }, 50);
        }
        
        // Handle navigation links with fade out animation
        const baseUrl = "{{ url('/') }}";
        const navigationLinks = document.querySelectorAll('a[href^="/"], a[href^="' + baseUrl + '"]');
        
        navigationLinks.forEach(link => {
            // Skip external links, anchors, and special links
            const href = link.getAttribute('href');
            if (href && 
                !href.startsWith('http') && 
                !href.startsWith('#') && 
                !href.includes('mailto:') && 
                !href.includes('tel:') &&
                !href.includes('wa.me')) {
                
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetUrl = this.getAttribute('href');
                    
                    // Fade out current page
                    if (mainContent) {
                        mainContent.classList.remove('active');
                        mainContent.classList.add('fade-out');
                    }
                    
                    // Navigate to new page after fade out
                    setTimeout(() => {
                        window.location.href = targetUrl;
                    }, 600);
                });
            }
        });
        
        // Handle form submissions with fade out
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function() {
                if (mainContent) {
                    mainContent.classList.remove('active');
                    mainContent.classList.add('fade-out');
                }
            });
        });
    });
</script>

<!-- WhatsApp Floating Button -->
    <a href="https://wa.me/255123456789" target="_blank" 
       class="fixed bottom-8 right-8 z-50 w-16 h-16 bg-green-500 rounded-full flex items-center justify-center text-white hover:bg-green-600 transition-all duration-300 shadow-2xl hover:shadow-green-500 transform hover:scale-110">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>
</body>
</html>
