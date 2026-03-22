<footer class="advanced-footer bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 text-white">
    <!-- Main Footer Content -->
    <div class="py-16">
        <div class="container mx-auto px-6">
            <div class="footer-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="footer-company" data-aos="fade-up">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold font-heading">JezDan</h3>
                            <span class="text-blue-400 font-medium">Technology</span>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        Empowering Tanzanian businesses with innovative digital solutions, secure software development, and cutting-edge technology services.
                    </p>
                    <div class="social-links flex gap-3">
                        <a href="#" class="w-10 h-10 bg-blue-600/20 border border-blue-600/30 rounded-lg flex items-center justify-center text-blue-400 hover:bg-blue-600 hover:text-white transition-all duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-600/20 border border-blue-600/30 rounded-lg flex items-center justify-center text-blue-400 hover:bg-blue-600 hover:text-white transition-all duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-600/20 border border-blue-600/30 rounded-lg flex items-center justify-center text-blue-400 hover:bg-blue-600 hover:text-white transition-all duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-600/20 border border-blue-600/30 rounded-lg flex items-center justify-center text-blue-400 hover:bg-blue-600 hover:text-white transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="text-xl font-bold mb-6 font-heading">Quick Links</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}" class="flex items-center gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                                <i class="fas fa-chevron-right text-xs text-blue-500"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="flex items-center gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                                <i class="fas fa-chevron-right text-xs text-blue-500"></i>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}" class="flex items-center gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                                <i class="fas fa-chevron-right text-xs text-blue-500"></i>
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('portfolio') }}" class="flex items-center gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                                <i class="fas fa-chevron-right text-xs text-blue-500"></i>
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="flex items-center gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                                <i class="fas fa-chevron-right text-xs text-blue-500"></i>
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="footer-services" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="text-xl font-bold mb-6 font-heading">Our Services</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('services') }}#software-development" class="flex items-center gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                                <i class="fas fa-chevron-right text-xs text-blue-500"></i>
                                Software Development
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#web-design" class="flex items-center gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                                <i class="fas fa-chevron-right text-xs text-blue-500"></i>
                                Web Design
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#sms-platform" class="flex items-center gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                                <i class="fas fa-chevron-right text-xs text-blue-500"></i>
                                SMS Platform
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#cybersecurity" class="flex items-center gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                                <i class="fas fa-chevron-right text-xs text-blue-500"></i>
                                Cybersecurity
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}#consulting" class="flex items-center gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                                <i class="fas fa-chevron-right text-xs text-blue-500"></i>
                                IT Consulting
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div class="footer-contact" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="text-xl font-bold mb-6 font-heading">Contact Info</h4>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-blue-400 mt-1"></i>
                            <div>
                                <p class="text-gray-300">Dar es Salaam, Tanzania</p>
                                <p class="text-sm text-gray-400">East Africa</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone text-blue-400"></i>
                            <a href="tel:+255123456789" class="text-gray-300 hover:text-blue-400 transition-colors">
                                +255 [Your Number]
                            </a>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <a href="mailto:info@jezdan.co.tz" class="text-gray-300 hover:text-blue-400 transition-colors">
                                info@jezdan.co.tz
                            </a>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-clock text-blue-400"></i>
                            <div>
                                <p class="text-gray-300">Mon - Fri: 9:00 AM - 6:00 PM</p>
                                <p class="text-sm text-gray-400">Sat: 9:00 AM - 2:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Newsletter Section -->
    <div class="py-12 border-t border-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto" data-aos="fade-up">
                <h4 class="text-2xl font-bold mb-4 font-heading">Stay Updated</h4>
                <p class="text-gray-300 mb-6">Subscribe to our newsletter for the latest technology insights and updates.</p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-3 bg-white/10 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 focus:bg-white/20 transition-all">
                    <button type="submit" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Bottom Footer -->
    <div class="py-6 border-t border-gray-800">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-center md:text-left">
                    <p class="text-gray-400 text-sm">
                        &copy; {{ date('Y') }} JezDan Technology. All rights reserved.
                    </p>
                </div>
                <div class="flex gap-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
