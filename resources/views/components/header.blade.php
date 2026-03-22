<header class="advanced-header fixed top-0 left-0 right-0 z-50 bg-white shadow-lg transition-all duration-300">
    <!-- Top Bar -->
    <div class="top-bar bg-blue-900 text-white py-2 text-sm">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center">
                <div class="contact-info flex gap-6">
                    <span class="flex items-center gap-2">
                        <i class="fas fa-phone text-blue-400"></i> 
                        +255 [Your Number]
                    </span>
                    <span class="flex items-center gap-2">
                        <i class="fas fa-envelope text-blue-400"></i> 
                        info@jezdan.co.tz
                    </span>
                </div>
                <div class="social-links flex gap-3">
                    <a href="#" class="text-white hover:text-blue-400 transition-colors" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-white hover:text-blue-400 transition-colors" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-white hover:text-blue-400 transition-colors" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="text-white hover:text-blue-400 transition-colors" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Navigation -->
    <nav class="main-nav bg-white transition-all duration-300">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center py-4">
                <!-- Logo Section -->
                <div class="logo-section flex items-center gap-3">
                    <div class="logo-icon w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-rocket text-xl"></i>
                    </div>
                    <div class="logo-text">
                        <h1 class="text-2xl font-bold text-blue-900 font-heading m-0">JezDan</h1>
                        <span class="text-sm text-blue-600 font-medium">Technology</span>
                    </div>
                </div>
                
                <!-- Desktop Navigation Menu -->
                <div class="nav-menu hidden lg:block">
                    <ul class="nav-links flex items-center gap-6 m-0 p-0 list-none">
                        <li>
                            <a href="{{ route('home') }}" class="nav-link flex items-center gap-2 text-gray-700 hover:text-blue-600 font-medium transition-colors px-4 py-2 rounded-lg hover:bg-blue-50 {{ request()->routeIs('home') ? 'text-blue-600 bg-blue-50' : '' }}">
                                <i class="fas fa-home"></i> 
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="nav-link flex items-center gap-2 text-gray-700 hover:text-blue-600 font-medium transition-colors px-4 py-2 rounded-lg hover:bg-blue-50 {{ request()->routeIs('about') ? 'text-blue-600 bg-blue-50' : '' }}">
                                <i class="fas fa-info-circle"></i> 
                                About
                            </a>
                        </li>
                        <li class="dropdown relative group">
                            <a href="{{ route('services') }}" class="nav-link flex items-center gap-2 text-gray-700 hover:text-blue-600 font-medium transition-colors px-4 py-2 rounded-lg hover:bg-blue-50 {{ request()->routeIs('services') ? 'text-blue-600 bg-blue-50' : '' }}">
                                <i class="fas fa-cogs"></i> 
                                Services 
                                <i class="fas fa-chevron-down text-xs ml-1"></i>
                            </a>
                            <ul class="dropdown-menu absolute top-full left-0 mt-2 w-64 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 z-50">
                                <li class="border-b border-gray-100">
                                    <a href="{{ route('services') }}#software-development" class="flex items-center gap-3 px-6 py-4 hover:bg-blue-50 transition-colors">
                                        <i class="fas fa-code text-blue-600"></i>
                                        <div>
                                            <div class="font-medium text-gray-900">Software Development</div>
                                            <div class="text-xs text-gray-500">Custom business applications</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="border-b border-gray-100">
                                    <a href="{{ route('services') }}#web-design" class="flex items-center gap-3 px-6 py-4 hover:bg-blue-50 transition-colors">
                                        <i class="fas fa-globe text-blue-600"></i>
                                        <div>
                                            <div class="font-medium text-gray-900">Web Design</div>
                                            <div class="text-xs text-gray-500">Professional websites</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="border-b border-gray-100">
                                    <a href="{{ route('services') }}#sms-platform" class="flex items-center gap-3 px-6 py-4 hover:bg-blue-50 transition-colors">
                                        <i class="fas fa-sms text-blue-600"></i>
                                        <div>
                                            <div class="font-medium text-gray-900">SMS Platform</div>
                                            <div class="text-xs text-gray-500">Instant messaging</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}#cybersecurity" class="flex items-center gap-3 px-6 py-4 hover:bg-blue-50 transition-colors">
                                        <i class="fas fa-shield-alt text-blue-600"></i>
                                        <div>
                                            <div class="font-medium text-gray-900">Cybersecurity</div>
                                            <div class="text-xs text-gray-500">Protect your business</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('portfolio') }}" class="nav-link flex items-center gap-2 text-gray-700 hover:text-blue-600 font-medium transition-colors px-4 py-2 rounded-lg hover:bg-blue-50 {{ request()->routeIs('portfolio') ? 'text-blue-600 bg-blue-50' : '' }}">
                                <i class="fas fa-briefcase"></i> 
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="nav-link flex items-center gap-2 text-gray-700 hover:text-blue-600 font-medium transition-colors px-4 py-2 rounded-lg hover:bg-blue-50 {{ request()->routeIs('contact') ? 'text-blue-600 bg-blue-50' : '' }}">
                                <i class="fas fa-envelope"></i> 
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Call to Action & Mobile Toggle -->
                <div class="nav-actions flex items-center gap-4">
                    <a href="{{ route('contact') }}" class="btn-quote hidden sm:flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-full hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <i class="fas fa-calculator"></i> 
                        Get Quote
                    </a>
                    
                    <!-- Mobile Menu Toggle -->
                    <div class="mobile-menu-toggle lg:hidden flex flex-col gap-1.5 cursor-pointer" onclick="toggleMobileMenu()">
                        <span class="w-6 h-0.5 bg-gray-700 transition-all duration-300"></span>
                        <span class="w-6 h-0.5 bg-gray-700 transition-all duration-300"></span>
                        <span class="w-6 h-0.5 bg-gray-700 transition-all duration-300"></span>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Navigation Menu -->
            <div class="mobile-menu lg:hidden hidden" id="mobileMenu">
                <ul class="nav-links py-4 space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-600' : '' }}">
                            <i class="fas fa-home"></i> 
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors {{ request()->routeIs('about') ? 'bg-blue-50 text-blue-600' : '' }}">
                            <i class="fas fa-info-circle"></i> 
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors {{ request()->routeIs('services') ? 'bg-blue-50 text-blue-600' : '' }}">
                            <i class="fas fa-cogs"></i> 
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors {{ request()->routeIs('portfolio') ? 'bg-blue-50 text-blue-600' : '' }}">
                            <i class="fas fa-briefcase"></i> 
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors {{ request()->routeIs('contact') ? 'bg-blue-50 text-blue-600' : '' }}">
                            <i class="fas fa-envelope"></i> 
                            Contact
                        </a>
                    </li>
                    <li class="pt-2 border-t border-gray-200">
                        <a href="{{ route('contact') }}" class="flex items-center justify-center gap-2 px-4 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-lg">
                            <i class="fas fa-calculator"></i> 
                            Get Quote
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Spacer for fixed header -->
<div class="header-spacer h-32 lg:h-28"></div>
