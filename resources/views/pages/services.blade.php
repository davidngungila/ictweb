@extends('layouts.app')

@section('title', 'Services - Jezdan Technology')
@section('description', 'Jezdan Technology offers comprehensive ICT services including web development, mobile app development, network installation, cybersecurity, IT support, and ICT consultancy in Tanzania.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                    <i class="fas fa-cogs mr-2"></i> 6 Core Services
                </span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Our Services</h1>
            <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Comprehensive ICT solutions designed to meet all your technology needs. From innovative web applications to robust network infrastructure, we deliver excellence across Tanzania.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
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

<!-- Services Overview -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Core Services</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Professional technology solutions tailored for Tanzanian businesses
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Web Development -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925859-0abdc27e37c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Web Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Web Development</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Professional websites and web applications with modern design and functionality</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">Laravel</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">Vue.js</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">React</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">MySQL</span>
                </div>
                <div class="mt-6 text-center">
                    <a href="{{ route('services.web-development') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition-colors duration-300">
                        <i class="fas fa-arrow-right mr-2"></i>
                        Read More
                    </a>
                </div>
            </div>

            <!-- Mobile App Development -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512926330526-ee3925526fbc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Mobile App Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Mobile App Development</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Custom mobile applications for iOS and Android with native performance</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">React Native</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Flutter</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Firebase</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs">Swift</span>
                </div>
                <div class="mt-6 text-center">
                    <a href="{{ route('services.mobile-app-development') }}" class="inline-flex items-center px-6 py-3 bg-purple-600 text-white font-semibold rounded-full hover:bg-purple-700 transition-colors duration-300">
                        <i class="fas fa-arrow-right mr-2"></i>
                        Read More
                    </a>
                </div>
            </div>

            <!-- Network Installation -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558494949-ef1b3966eab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Network Installation" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-orange-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Network Installation</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Professional network setup and configuration for seamless connectivity</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Cisco</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Mikrotik</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Ubiquiti</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs">Fortinet</span>
                </div>
                <div class="mt-6 text-center">
                    <a href="{{ route('services.network-installation') }}" class="inline-flex items-center px-6 py-3 bg-orange-600 text-white font-semibold rounded-full hover:bg-orange-700 transition-colors duration-300">
                        <i class="fas fa-arrow-right mr-2"></i>
                        Read More
                    </a>
                </div>
            </div>

            <!-- Cybersecurity -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae278f7a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Cybersecurity" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-red-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cybersecurity</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Advanced security solutions to protect your digital assets</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-red-100 text-red-600 rounded-full text-xs">Firewall</span>
                    <span class="px-3 py-1 bg-red-100 text-red-600 rounded-full text-xs">VPN</span>
                    <span class="px-3 py-1 bg-red-100 text-red-600 rounded-full text-xs">Antivirus</span>
                    <span class="px-3 py-1 bg-red-100 text-red-600 rounded-full text-xs">SIEM</span>
                </div>
                <div class="mt-6 text-center">
                    <a href="{{ route('services.cybersecurity') }}" class="inline-flex items-center px-6 py-3 bg-red-600 text-white font-semibold rounded-full hover:bg-red-700 transition-colors duration-300">
                        <i class="fas fa-arrow-right mr-2"></i>
                        Read More
                    </a>
                </div>
            </div>

            <!-- IT Support -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551434810748-48b9885dbd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="IT Support" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">IT Support</h3>
                <p class="text-gray-600 leading-relaxed mb-4">24/7 technical support and maintenance services</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Remote Support</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">On-site Service</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Maintenance</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Consulting</span>
                </div>
                <div class="mt-6 text-center">
                    <a href="{{ route('services.it-support') }}" class="inline-flex items-center px-6 py-3 bg-green-600 text-white font-semibold rounded-full hover:bg-green-700 transition-colors duration-300">
                        <i class="fas fa-arrow-right mr-2"></i>
                        Read More
                    </a>
                </div>
            </div>

            <!-- ICT Consultancy -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551288041-h0d63f0b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="ICT Consultancy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/80 to-transparent"></div>
                </div>
                <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 -mt-12 relative z-10">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">ICT Consultancy</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Strategic technology consulting to drive digital transformation</p>
                <div class="flex flex-wrap gap-2 justify-center mt-4">
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs">Strategy</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs">Planning</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs">Optimization</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs">Training</span>
                </div>
                <div class="mt-6 text-center">
                    <a href="{{ route('services.ict-consultancy') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white font-semibold rounded-full hover:bg-indigo-700 transition-colors duration-300">
                        <i class="fas fa-arrow-right mr-2"></i>
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

             
        </div>
    </div>
</section>
@endsection
