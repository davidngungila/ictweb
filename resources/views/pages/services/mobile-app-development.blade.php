@extends('layouts.app')

@section('title', 'Mobile App Development Services - Jezdan Technology')
@section('description', 'Professional mobile app development in Tanzania. Custom iOS and Android apps using React Native, Flutter, Firebase, and native technologies.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-green-900 via-green-800 to-green-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center bg-green-700 bg-opacity-50 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
                <i class="fas fa-mobile-alt text-yellow-400 mr-3"></i>
                <span class="text-sm font-semibold">Mobile App Development</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Mobile App Development</h1>
            <p class="text-xl text-green-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Transform your business with powerful mobile applications that engage users, 
                streamline operations, and deliver exceptional experiences on iOS and Android platforms.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-green-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Native Performance
                </span>
                <span class="bg-green-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Cross-Platform
                </span>
                <span class="bg-green-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>App Store Ready
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Custom Mobile Solutions</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        We develop high-performance mobile applications that provide seamless user experiences 
                        across all devices and platforms. Our expert team combines native development expertise 
                        with cross-platform frameworks to deliver cost-effective solutions.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        From consumer apps to enterprise solutions, we ensure your mobile application 
                        stands out in crowded app stores and delivers real business value to Tanzanian users.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-bolt text-green-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Fast Performance</div>
                                <div class="text-gray-600">Optimized for speed</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-shield-alt text-green-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Secure</div>
                                <div class="text-gray-600">Enterprise-grade security</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-151292190875928-1e1c659c096b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mobile App Development" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-green-600 text-white rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold mb-2">150+</div>
                        <div class="text-sm">Apps Delivered</div>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Mobile Technologies</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We use cutting-edge mobile development frameworks to build powerful, scalable applications
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mx-auto mb-6">
                        <i class="fab fa-react"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">React Native</h3>
                    <p class="text-gray-600">Cross-platform apps with native performance and feel</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-feather"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Flutter</h3>
                    <p class="text-gray-600">Google's framework for beautiful, fast cross-platform apps</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 text-2xl mx-auto mb-6">
                        <i class="fab fa-apple"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Swift</h3>
                    <p class="text-gray-600">Native iOS development for optimal performance</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 text-2xl mx-auto mb-6">
                        <i class="fab fa-android"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Kotlin</h3>
                    <p class="text-gray-600">Modern Android development with enhanced productivity</p>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Mobile Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Comprehensive mobile app development solutions for your business needs
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">E-commerce Apps</h3>
                    <p class="text-gray-600 mb-4">Mobile shopping experiences with secure payments and inventory sync.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Mobile Payments</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Push Notifications</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Offline Mode</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Business Apps</h3>
                    <p class="text-gray-600 mb-4">Custom solutions for process automation and team collaboration.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Real-time Sync</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Data Analytics</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Team Management</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Educational Apps</h3>
                    <p class="text-gray-600 mb-4">Interactive learning platforms with engaging content delivery.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Video Content</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Progress Tracking</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Offline Access</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Healthcare Apps</h3>
                    <p class="text-gray-600 mb-4">Medical solutions with patient management and telemedicine features.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Appointment Booking</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Health Tracking</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Secure Messaging</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Gaming Apps</h3>
                    <p class="text-gray-600 mb-4">Engaging mobile games with stunning graphics and smooth gameplay.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Multiplayer Support</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Leaderboards</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>In-App Purchases</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-teal-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Location-Based Apps</h3>
                    <p class="text-gray-600 mb-4">GPS-enabled applications with real-time tracking and navigation.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>GPS Integration</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Geofencing</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Route Optimization</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Development Process -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">App Development Process</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We follow industry best practices to deliver successful mobile applications
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-green-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Strategy</h3>
                    <p class="text-gray-600">Market research, competitor analysis, and feature planning for app success.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-green-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">UI/UX Design</h3>
                    <p class="text-gray-600">Creating intuitive interfaces and delightful user experiences.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-green-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Development</h3>
                    <p class="text-gray-600">Clean, efficient code with comprehensive testing and quality assurance.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-green-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Launch & Support</h3>
                    <p class="text-gray-600">App store deployment and ongoing maintenance for optimal performance.</p>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Recent Mobile Projects</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Explore our latest mobile app development projects for Tanzanian businesses
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1560472354-b27ff5a562a6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Banking App" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Mobile Banking App</h3>
                        <p class="text-gray-600 mb-4">Secure banking solution with biometric authentication and real-time transactions.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">React Native</span>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Firebase</span>
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm">Node.js</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1556740738-0cfed4f6f458?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Food Delivery" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Food Delivery App</h3>
                        <p class="text-gray-600 mb-4">On-demand food delivery with real-time tracking and payment integration.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">Flutter</span>
                            <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm">Google Maps</span>
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">Stripe</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1571019613454-1ba2d7d79a5f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Fitness Tracking" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Fitness Tracking App</h3>
                        <p class="text-gray-600 mb-4">Health and fitness monitoring with workout plans and progress tracking.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">React Native</span>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Firebase</span>
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm">HealthKit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-green-600 to-green-800 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Build Your Mobile App?</h2>
            <p class="text-xl text-green-100 mb-8 leading-relaxed">
                Let us create a powerful mobile application that engages users and drives business growth. 
                Contact us today for a free consultation and project estimate.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-green-600 font-bold rounded-full hover:bg-gray-100 transition-colors duration-300">
                    <i class="fas fa-phone mr-2"></i>Get Free Quote
                </a>
                <a href="{{ route('portfolio') }}#mobile-apps" class="px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-green-600 transition-colors duration-300">
                    <i class="fas fa-eye mr-2"></i>View Our Work
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
