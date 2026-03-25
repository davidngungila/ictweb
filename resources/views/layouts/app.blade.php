<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jezdan Technology')</title>
    <meta name="description" content="@yield('description', 'Jezdan Technology - Reliable ICT Solutions in Tanzania')">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-center h-16 relative">
                <!-- Logo - Left Aligned -->
                <div class="absolute left-6 flex items-center">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold mr-3">
                        JD
                    </div>
                    <a href="{{ route('home') }}" class="text-xl font-bold text-gray-900 hover:text-blue-600 transition-colors">
                        Jezdan Technology
                    </a>
                </div>

                <!-- Navigation Links - Centered -->
                <div class="hidden md:flex items-center justify-center space-x-8">
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
                                <a href="{{ route('services') }}#web-development" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-globe text-blue-600"></i>
                                        <span>Web Development</span>
                                    </div>
                                </a>
                                <a href="{{ route('services') }}#mobile-app" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-mobile-alt text-blue-600"></i>
                                        <span>Mobile Apps</span>
                                    </div>
                                </a>
                                <a href="{{ route('services') }}#network" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-network-wired text-blue-600"></i>
                                        <span>Network Installation</span>
                                    </div>
                                </a>
                                <a href="{{ route('services') }}#cybersecurity" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-shield-alt text-blue-600"></i>
                                        <span>Cybersecurity</span>
                                    </div>
                                </a>
                                <a href="{{ route('services') }}#it-support" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-headset text-blue-600"></i>
                                        <span>IT Support</span>
                                    </div>
                                </a>
                                <a href="{{ route('services') }}#consultancy" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
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
                    
                    <!-- Right Section -->
                <div class="absolute right-6 flex items-center space-x-4">
                    <!-- CTA Button -->
                    <a href="{{ route('contact') }}" class="px-6 py-2 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Get Quote
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden absolute right-6 p-2 rounded-lg text-gray-700 hover:text-blue-600" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
                <div class="px-6 py-4 space-y-3">
                    <a href="{{ route('home') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-2">
                        Home
                    </a>
                    
                    <!-- Mobile Services Dropdown -->
                    <div class="border-t pt-3">
                        <button class="w-full text-left text-gray-700 hover:text-blue-600 font-medium py-2 flex items-center justify-between" onclick="toggleMobileSubmenu('mobile-services')">
                            Services <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div id="mobile-services" class="hidden pl-4 space-y-2">
                            <a href="{{ route('services') }}#web-development" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-globe mr-2"></i>Web Development
                            </a>
                            <a href="{{ route('services') }}#mobile-app" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-mobile-alt mr-2"></i>Mobile Apps
                            </a>
                            <a href="{{ route('services') }}#network" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-network-wired mr-2"></i>Network Installation
                            </a>
                            <a href="{{ route('services') }}#cybersecurity" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-shield-alt mr-2"></i>Cybersecurity
                            </a>
                            <a href="{{ route('services') }}#it-support" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-headset mr-2"></i>IT Support
                            </a>
                            <a href="{{ route('services') }}#consultancy" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-lightbulb mr-2"></i>ICT Consultancy
                            </a>
                        </div>
                    </div>
                    
                    <!-- Mobile Portfolio Dropdown -->
                    <div class="border-t pt-3">
                        <button class="w-full text-left text-gray-700 hover:text-blue-600 font-medium py-2 flex items-center justify-between" onclick="toggleMobileSubmenu('mobile-portfolio')">
                            Portfolio <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div id="mobile-portfolio" class="hidden pl-4 space-y-2">
                            <a href="{{ route('portfolio') }}#web-projects" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-globe mr-2"></i>Web Projects
                            </a>
                            <a href="{{ route('portfolio') }}#mobile-apps" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-mobile-alt mr-2"></i>Mobile Apps
                            </a>
                            <a href="{{ route('portfolio') }}#network-projects" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-network-wired mr-2"></i>Network Solutions
                            </a>
                        </div>
                    </div>
                    
                    <a href="{{ route('about') }}" class="block text-gray-700 hover:text-blue-600 font-medium py-2 border-t pt-3">
                        About
                    </a>
                    
                    <!-- Mobile Contact Dropdown -->
                    <div class="border-t pt-3">
                        <button class="w-full text-left text-gray-700 hover:text-blue-600 font-medium py-2 flex items-center justify-between" onclick="toggleMobileSubmenu('mobile-contact')">
                            Contact <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div id="mobile-contact" class="hidden pl-4 space-y-2">
                            <a href="{{ route('contact') }}" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-envelope mr-2"></i>Send Message
                            </a>
                            <a href="tel:+255123456789" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-phone mr-2"></i>Call Us
                            </a>
                                                        <a href="#" class="block text-gray-600 hover:text-blue-600 py-2">
                                <i class="fas fa-map-marker-alt mr-2"></i>Get Directions
                            </a>
                        </div>
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
            submenu.classList.toggle('hidden');
        }
    </script>
<!-- WhatsApp Floating Button -->
    <a href="https://wa.me/255123456789" target="_blank" 
       class="fixed bottom-8 right-8 z-50 w-16 h-16 bg-green-500 rounded-full flex items-center justify-center text-white hover:bg-green-600 transition-all duration-300 shadow-2xl hover:shadow-green-500 transform hover:scale-110">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>
</body>
</html>
