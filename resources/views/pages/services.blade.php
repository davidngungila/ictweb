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
                    <i class="fas fa-cogs mr-2"></i> 🔥 SERVICES ZAKO (8)
                </span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Our Services</h1>
            <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Comprehensive ICT solutions designed to meet all your technology needs. From innovative web applications to robust network infrastructure, we deliver excellence across Tanzania.
            </p>
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-globe text-blue-300"></i>
                    <span class="text-white">Web Development</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-mobile-alt text-purple-300"></i>
                    <span class="text-white">Mobile Applications</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-network-wired text-orange-300"></i>
                    <span class="text-white">Network Infrastructure</span>
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
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-cloud text-cyan-300"></i>
                    <span class="text-white">Cloud Services</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#services-grid" class="px-10 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition-all duration-300 shadow-xl">
                    Explore Services
                </a>
                <a href="{{ route('contact') }}" class="px-10 py-4 bg-white text-blue-600 font-bold rounded-full border-2 border-blue-600 hover:bg-blue-50 transition-all duration-300">
                    Request Demo
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

<!-- Services Grid -->
<section id="services-grid" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Web Development -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Web Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600">
                            <span class="text-lg">🌐</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Web Development</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Professional websites and web applications tailored for Tanzanian businesses with modern design and functionality</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">500,000 TZS</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('services.web-development') }}" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Details
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile App Development -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Mobile App Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600">
                            <span class="text-lg">📱</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile App Development</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Custom mobile applications for iOS and Android with intuitive design and powerful features</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">800,000 TZS</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('services.mobile-app-development') }}" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Details
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- System Development -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f20?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="System Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600">
                            <span class="text-lg">🧾</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">System Development</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Custom systems (HR, School, Hospital, POS) to automate business operations and improve efficiency</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">PRICING</p>
                        <p class="text-2xl font-bold text-gray-900">Custom Quote</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('services.system-development') }}" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Details
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Network Installation -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Network Installation" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center text-cyan-600">
                            <span class="text-lg">🌐</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Network Installation</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Professional network setup and configuration for seamless business operations</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">300,000 TZS</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('services.network-installation') }}" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Details
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cybersecurity -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Cybersecurity" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center text-red-600">
                            <span class="text-lg">🛡️</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cybersecurity</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Advanced security solutions to protect your systems, data, and business from cyber threats</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">400,000 TZS</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('services.cybersecurity') }}" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Details
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- IT Support -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581291518855-1f4a7394626?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="IT Support" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-green-600">
                            <span class="text-lg">🧰</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">IT Support</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Reliable 24/7 technical support, troubleshooting, and maintenance services</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">200,000 TZS</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('services.it-support') }}" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Details
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- ICT Consultancy -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552664730-d15b4852c61e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="ICT Consultancy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center text-yellow-600">
                            <span class="text-lg">💡</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">ICT Consultancy</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Strategic technology consulting to help businesses grow and adopt digital solutions</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">600,000 TZS</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('services.ict-consultancy') }}" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Details
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cloud Services -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1451187580451-4dc904955e93?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Cloud Services" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center text-indigo-600">
                            <span class="text-lg">☁️</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cloud Services</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Cloud hosting, server setup, backups, and deployment solutions for scalable systems</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">STARTING FROM</p>
                        <p class="text-2xl font-bold text-gray-900">150,000 TZS</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('services.cloud-services') }}" class="flex-1 bg-gray-900 text-white font-semibold py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 text-sm text-center">
                            View Details
                        </a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
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
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg" 
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
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg" 
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
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg" 
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
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/criminal-hacking-system-unsuccessfully_jjxzdq.jpg" 
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
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/admin-data-center-typing-notebook-keyboard-using-automation-tools_lsc29m.jpg" 
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
                    <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600080/african-american-advisor-reviewing-legal-balance-desk-green-screen_qmcihs.jpg" 
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
