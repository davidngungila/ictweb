@extends('layouts.app')

@section('title', 'Jezdan Technology - Reliable ICT Solutions in Tanzania')
@section('description', 'Jezdan Technology provides reliable ICT solutions in Tanzania including web development, mobile apps, network installation, cybersecurity, IT support, and ICT consultancy.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute inset-0">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600085/teamworking-engineers-talking-server-room-doing-brainstorming_vm01lf.jpg" alt="Jezdan Technology Team" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="container mx-auto px-6 py-24 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                    <i class="fas fa-award mr-2"></i> Leading ICT Provider in Tanzania
                </span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Reliable ICT Solutions in Tanzania
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 mb-12 leading-relaxed max-w-3xl mx-auto">
                Comprehensive technology solutions tailored for Tanzanian businesses. From innovative web applications to robust network infrastructure, we empower your digital transformation journey.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                    Get a Quote
                </a>
                <a href="{{ route('services') }}" class="px-8 py-4 bg-white/20 text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md">
                    Our Services
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-gray-50" viewBox="0 0 1440 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 64L60 58.7C120 53 240 43 360 37.3C480 32 600 32 720 34.7C840 37 960 43 1080 45.3C1200 48 1320 48 1380 48L1440 48V64H0V64Z" fill="currentColor"/>
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
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg" 
                         alt="Web Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Web Development</h3>
                <p class="text-gray-600 leading-relaxed">Professional websites and web applications tailored for Tanzanian businesses with modern design and functionality</p>
            </div>

            <!-- Mobile App Development -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg" 
                         alt="Mobile App Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Mobile App Development</h3>
                <p class="text-gray-600 leading-relaxed">Custom mobile applications for iOS and Android with intuitive design and powerful features</p>
            </div>

            <!-- Network Installation -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg" 
                         alt="Network Installation" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-orange-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Network Installation</h3>
                <p class="text-gray-600 leading-relaxed">Professional network setup and configuration for seamless business operations across Tanzania</p>
            </div>

            <!-- Cybersecurity -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/criminal-hacking-system-unsuccessfully_jjxzdq.jpg" 
                         alt="Cybersecurity" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-red-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cybersecurity</h3>
                <p class="text-gray-600 leading-relaxed">Advanced security solutions to protect your digital assets and ensure business continuity</p>
            </div>

            <!-- IT Support -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/admin-data-center-typing-notebook-keyboard-using-automation-tools_lsc29m.jpg" 
                         alt="IT Support" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">IT Support</h3>
                <p class="text-gray-600 leading-relaxed">Reliable 24/7 technical support and maintenance to keep your business running smoothly</p>
            </div>

            <!-- ICT Consultancy -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg" 
                         alt="ICT Consultancy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">ICT Consultancy</h3>
                <p class="text-gray-600 leading-relaxed">Strategic technology consulting to drive digital transformation and business growth</p>
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
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/showing-cart-trolley-shopping-online-sign-graphic_j4fy9u.jpg" 
                         alt="E-commerce Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">E-commerce Platform</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Complete e-commerce solution with payment integration and inventory management for a retail client in Dar es Salaam</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">Laravel</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">Vue.js</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">MySQL</span>
                </div>
            </div>

            <!-- Project 2: Mobile Banking App -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/internet-banking-online-payment-technology-concept_gtoa6s.jpg" 
                         alt="Mobile Banking App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Mobile Banking App</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Secure mobile banking application with biometric authentication and real-time transactions for a financial institution</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">React Native</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Node.js</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Firebase</span>
                </div>
            </div>

            <!-- Project 3: School Management System -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/modern-data-center-providing-cloud-services-enabling-businesses-access-computing-resources-storage-demand-internet-server-room-infrastructure-3d-render-animation_lljtml.jpg" 
                         alt="School Management System" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">School Management System</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Comprehensive system for student management and academic tracking with automated reporting</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">React</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Node.js</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">MongoDB</span>
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
@endsection
