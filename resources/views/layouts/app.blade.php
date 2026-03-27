<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jezdan Technology')</title>
    <meta name="description" content="@yield('description', 'Jezdan Technology - Reliable ICT Solutions in Tanzania')">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'manrope': ['Manrope', 'sans-serif'],
                        'noto': ['Noto Sans', 'sans-serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                        'roboto': ['Roboto', 'sans-serif'],
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
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 font-inter">
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
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold mr-3">
                        JD
                    </div>
                    <a href="{{ route('home') }}" class="text-xl font-bold text-gray-900 hover:text-blue-600 transition-colors">
                        Jezdan Technology
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <!-- Home -->
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">
                        Home
                    </a>
                    
                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2 flex items-center gap-1">
                            Services <i class="fas fa-chevron-down text-xs ml-1 transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="absolute top-full left-0 w-80 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 mt-2">
                            <div class="py-2">
                                <a href="{{ route('services.web-development') }}" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-globe text-blue-600"></i>
                                        <span>Web Development</span>
                                    </div>
                                </a>
                                <a href="{{ route('services.mobile-app-development') }}" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-mobile-alt text-blue-600"></i>
                                        <span>Mobile Apps</span>
                                    </div>
                                </a>
                                <a href="{{ route('services.network-installation') }}" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-network-wired text-blue-600"></i>
                                        <span>Network Installation</span>
                                    </div>
                                </a>
                                <a href="{{ route('services.cybersecurity') }}" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-shield-alt text-blue-600"></i>
                                        <span>Cybersecurity</span>
                                    </div>
                                </a>
                                <a href="{{ route('services.it-support') }}" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-headset text-blue-600"></i>
                                        <span>IT Support</span>
                                    </div>
                                </a>
                                <a href="{{ route('services.ict-consultancy') }}" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-lightbulb text-blue-600"></i>
                                        <span>ICT Consultancy</span>
                                    </div>
                                </a>
                                <div class="border-t pt-2 mt-2">
                                    <p class="text-xs text-gray-500 px-4">Professional ICT solutions for your business growth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Portfolio Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2 flex items-center gap-1">
                            Portfolio <i class="fas fa-chevron-down text-xs ml-1 transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="absolute top-full left-0 w-72 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 mt-2">
                            <div class="py-2">
                                <a href="{{ route('portfolio') }}#web-projects" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-globe text-blue-600"></i>
                                        <span>Web Projects</span>
                                    </div>
                                </a>
                                <a href="{{ route('portfolio') }}#mobile-apps" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-mobile-alt text-blue-600"></i>
                                        <span>Mobile Apps</span>
                                    </div>
                                </a>
                                <a href="{{ route('portfolio') }}#network-projects" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-network-wired text-blue-600"></i>
                                        <span>Network Solutions</span>
                                    </div>
                                </a>
                                <div class="border-t pt-2 mt-2">
                                    <p class="text-xs text-gray-500 px-4">Explore our latest projects and success stories</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- About -->
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">
                        About Us
                    </a>
                    
                    <!-- Contact -->
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">
                        Contact
                    </a>
                </div>

                <!-- Desktop CTA Button -->
                <div class="hidden md:block">
                    <a href="{{ route('contact') }}" class="px-6 py-2 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Get Quote
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
                    <a href="{{ route('home') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                        <i class="fas fa-home mr-3 text-blue-600"></i>Home
                    </a>
                    
                    <!-- Services -->
                    <div class="border-t pt-2">
                        <button class="w-full text-left text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors flex items-center justify-between" onclick="toggleMobileSubmenu('mobile-services')">
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
                        <button class="w-full text-left text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors flex items-center justify-between" onclick="toggleMobileSubmenu('mobile-portfolio')">
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
                    <a href="{{ route('about') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors border-t pt-2">
                        <i class="fas fa-info-circle mr-3 text-blue-600"></i>About Us
                    </a>
                    
                    <!-- Contact -->
                    <a href="{{ route('contact') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors border-t pt-2">
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
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold mr-3">
                            JD
                        </div>
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
<!-- WhatsApp Floating Button -->
    <a href="https://wa.me/255123456789" target="_blank" 
       class="fixed bottom-8 right-8 z-50 w-16 h-16 bg-green-500 rounded-full flex items-center justify-center text-white hover:bg-green-600 transition-all duration-300 shadow-2xl hover:shadow-green-500 transform hover:scale-110">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>
</body>
</html>
