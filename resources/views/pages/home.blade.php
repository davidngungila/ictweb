@extends('layouts.app')

@section('title', 'JezDan Technology - Innovating Digital Solutions for Tanzania')
@section('description', 'JezDan Technology offers secure software development, high-performance websites, and comprehensive IT solutions for Tanzanian businesses.')

@section('styles')
<style>
    .hero-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .feature-card {
        transition: all 0.3s ease;
    }
    .feature-card:hover {
        transform: translateY(-10px);
    }
    .stats-counter {
        transition: all 0.5s ease;
    }
    .testimonial-card {
        transition: all 0.3s ease;
    }
    .testimonial-card:hover {
        transform: scale(1.02);
    }
</style>
@endsection

@section('content')
    <!-- Advanced Hero Section with Swiper -->
    <section class="relative h-screen overflow-hidden">
        <div class="swiper heroSwiper h-full w-full swiper-fade">
            <div class="swiper-wrapper">
                <!-- Slide 1: Main Business -->
                <div class="swiper-slide relative flex items-center">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2048&q=80" alt="Technology Solutions" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-900/40 to-transparent"></div>
                    </div>
                    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full pt-20">
                        <div class="max-w-2xl slide-content">
                            <span class="inline-block px-4 py-1.5 bg-blue-600/20 text-blue-400 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-blue-600/30" data-aos="fade-up">Experience Excellence</span>
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.1]" data-aos="fade-up" data-aos-delay="100">Empower Your Business with <span class="text-blue-400">Smart Technology</span></h1>
                            <p class="text-xl text-slate-200 mb-12 leading-relaxed" data-aos="fade-up" data-aos-delay="200">We build secure software, high-performance websites, and a powerful SMS platform to help you communicate and grow. Get started instantly with our shared Sender IDs—no approval delays.</p>
                            <div class="flex flex-col sm:flex-row items-center gap-4" data-aos="fade-up" data-aos-delay="300">
                                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-10 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 shadow-xl shadow-blue-600/30 transition-all text-center">Get a Free Quote</a>
                                <a href="{{ route('services') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group">
                                    <i class="fas fa-cogs text-2xl group-hover:scale-110 transition-transform"></i> View Services
                                </a>
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
                        <div class="max-w-2xl slide-content">
                            <span class="inline-block px-4 py-1.5 bg-blue-600/20 text-blue-400 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-blue-600/30" data-aos="fade-up">Digital Presence</span>
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.1]" data-aos="fade-up" data-aos-delay="100">Transform Your <span class="text-blue-400">Digital Presence</span></h1>
                            <p class="text-xl text-slate-200 mb-12 leading-relaxed" data-aos="fade-up" data-aos-delay="200">Professional web design and development that captures your brand essence. Get stunning websites with FREE setup - you only pay for domain and hosting.</p>
                            <div class="flex flex-col sm:flex-row items-center gap-4" data-aos="fade-up" data-aos-delay="300">
                                <a href="{{ route('portfolio') }}" class="w-full sm:w-auto px-10 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 shadow-xl shadow-blue-600/30 transition-all text-center">View Portfolio</a>
                                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group">
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
                        <div class="max-w-2xl slide-content">
                            <span class="inline-block px-4 py-1.5 bg-blue-600/20 text-blue-400 rounded-full text-xs font-bold tracking-widest uppercase mb-6 border border-blue-600/30" data-aos="fade-up">Custom Solutions</span>
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-8 leading-[1.1]" data-aos="fade-up" data-aos-delay="100">Custom Software <span class="text-blue-400">Solutions</span></h1>
                            <p class="text-xl text-slate-200 mb-12 leading-relaxed" data-aos="fade-up" data-aos-delay="200">Tailored business applications, School Management Systems, POS solutions, and licensing systems designed specifically for Tanzanian businesses.</p>
                            <div class="flex flex-col sm:flex-row items-center gap-4" data-aos="fade-up" data-aos-delay="300">
                                <a href="{{ route('services') }}" class="w-full sm:w-auto px-10 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 shadow-xl shadow-blue-600/30 transition-all text-center">Explore Services</a>
                                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md flex items-center justify-center gap-2 group">
                                    <i class="fas fa-calculator text-2xl group-hover:scale-110 transition-transform"></i> Get Quote
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

    <!-- Features Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Why Choose Us</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight">Advanced Features for Modern Business</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We combine cutting-edge technology with industry expertise to deliver solutions that drive your business forward.
                </p>
            </div>

            <div class="feature-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" style="display: grid !important; grid-template-columns: repeat(3, minmax(0, 1fr)) !important;">
                <!-- Feature 1 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">Fast Delivery</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Quick turnaround times with agile development methodology ensuring your projects are delivered on schedule.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-500"></i>
                            <span>2-week MVP delivery</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-500"></i>
                            <span>Agile development</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-500"></i>
                            <span>Continuous deployment</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">Secure Solutions</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Enterprise-grade security with advanced encryption and compliance with international security standards.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i>
                            <span>256-bit encryption</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i>
                            <span>GDPR compliant</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Regular security audits</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">24/7 Support</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Round-the-clock technical support with dedicated account managers and instant response times.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-500"></i>
                            <span>Live chat support</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-500"></i>
                            <span>Phone & email support</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-500"></i>
                            <span>Dedicated account manager</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-4 gap-8 text-center">
                <div class="stats-counter" data-aos="fade-up">
                    <div class="text-3xl md:text-4xl lg:text-5xl font-bold mb-2 font-heading" data-counter="150">0</div>
                    <p class="text-blue-200 text-sm md:text-base">Projects Completed</p>
                </div>
                <div class="stats-counter" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-3xl md:text-4xl lg:text-5xl font-bold mb-2 font-heading" data-counter="98">0</div>
                    <p class="text-blue-200 text-sm md:text-base">Happy Clients</p>
                </div>
                <div class="stats-counter" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-3xl md:text-4xl lg:text-5xl font-bold mb-2 font-heading" data-counter="15">0</div>
                    <p class="text-blue-200 text-sm md:text-base">Years Experience</p>
                </div>
                <div class="stats-counter" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl md:text-4xl lg:text-5xl font-bold mb-2 font-heading" data-counter="24">0</div>
                    <p class="text-blue-200 text-sm md:text-base">Team Members</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Our Services</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight">What We Offer</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Comprehensive digital solutions designed to transform your business operations and accelerate growth.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Software Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute top-4 right-4 w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-code text-lg"></i>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">Software Development</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Custom business applications, School Management Systems, POS solutions, and licensing systems.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-blue-600 font-bold text-lg">From 500,000 TZS</span>
                            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold group">
                                Learn More <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Web Design" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute top-4 right-4 w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-globe text-lg"></i>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">Web Design</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Professional websites with stunning designs. FREE setup - you only pay for domain and hosting.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-green-600 font-bold text-lg">30,000 TZS/mo</span>
                            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 font-semibold group">
                                Learn More <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="SMS Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute top-4 right-4 w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-sms text-lg"></i>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">SMS Platform</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Instant SMS communication with pre-approved Sender IDs. No registration delays.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-purple-600 font-bold text-lg">30 TZS/msg</span>
                            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-purple-600 hover:text-purple-700 font-semibold group">
                                Learn More <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a href="{{ route('services') }}" class="inline-flex items-center gap-3 px-10 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold rounded-full hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                    <i class="fas fa-th-large"></i>
                    View All Services <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Testimonials</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight">What Our Clients Say</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Don't just take our word for it - hear from businesses we've helped transform.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="John Doe" class="w-16 h-16 rounded-full object-cover mr-4 border-2 border-blue-100">
                        <div>
                            <h4 class="font-bold text-blue-900 text-lg">John Doe</h4>
                            <p class="text-sm text-gray-600">CEO, TechCorp Tanzania</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 leading-relaxed italic">"JezDan Technology transformed our business with their custom software solution. The team is professional, responsive, and delivers exceptional quality."</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="Sarah Mwangi" class="w-16 h-16 rounded-full object-cover mr-4 border-2 border-green-100">
                        <div>
                            <h4 class="font-bold text-blue-900 text-lg">Sarah Mwangi</h4>
                            <p class="text-sm text-gray-600">Director, Dar Academy</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 leading-relaxed italic">"Their School Management System has revolutionized how we operate. It's intuitive, comprehensive, and the support team is always available to help."</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80" alt="Ali Khamis" class="w-16 h-16 rounded-full object-cover mr-4 border-2 border-purple-100">
                        <div>
                            <h4 class="font-bold text-blue-900 text-lg">Ali Khamis</h4>
                            <p class="text-sm text-gray-600">Owner, Khamis Electronics</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 leading-relaxed italic">"The SMS platform helped us reach thousands of customers instantly. Best investment we've made for our marketing efforts."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="max-w-4xl mx-auto" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-bold mb-6 font-heading leading-tight">Ready to Transform Your Business?</h2>
                <p class="text-xl md:text-2xl mb-12 text-blue-100 leading-relaxed max-w-2xl mx-auto">Let's discuss how our innovative solutions can help you achieve your business goals. Get a free consultation today.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="{{ route('contact') }}" class="px-12 py-5 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-2xl hover:shadow-white/20 transform hover:scale-105 text-lg">
                        <i class="fas fa-calendar-check mr-3"></i> Get Free Consultation
                    </a>
                    <a href="tel:+255123456789" class="px-12 py-5 bg-blue-700/50 text-white font-bold rounded-full border-2 border-white/30 hover:bg-blue-700/70 transition-all duration-300 backdrop-blur-md transform hover:scale-105 text-lg">
                        <i class="fas fa-phone-alt mr-3"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-1">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white font-bold text-xl mr-3">
                            JD
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold font-heading">JezDan</h3>
                            <p class="text-blue-400 text-sm">Technology</p>
                        </div>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Empowering Tanzanian businesses with innovative digital solutions, secure software development, and cutting-edge technology services.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-xl font-bold mb-6 font-heading">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i> Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i> About Us</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i> Services</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i> Portfolio</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i> Contact</a></li>
                    </ul>
                </div>

                <!-- Our Services -->
                <div>
                    <h4 class="text-xl font-bold mb-6 font-heading">Our Services</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i> Software Development</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i> Web Design</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i> SMS Platform</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i> Cybersecurity</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i> IT Consulting</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-xl font-bold mb-6 font-heading">Contact Info</h4>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-blue-400 mt-1"></i>
                            <div>
                                <p class="text-gray-400">Dar es Salaam, Tanzania</p>
                                <p class="text-gray-400">East Africa</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone text-blue-400"></i>
                            <a href="tel:+255123456789" class="text-gray-400 hover:text-white transition-colors">+255 [Your Number]</a>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <a href="mailto:info@jezdan.co.tz" class="text-gray-400 hover:text-white transition-colors">info@jezdan.co.tz</a>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-clock text-blue-400 mt-1"></i>
                            <div>
                                <p class="text-gray-400">Mon - Fri: 9:00 AM - 6:00 PM</p>
                                <p class="text-gray-400">Sat: 9:00 AM - 2:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} JezDan Technology. All rights reserved. | Designed with <i class="fas fa-heart text-red-500"></i> in Tanzania</p>
            </div>
        </div>
    </footer>
@endsection

@section('scripts')
<script>
    // Initialize Swiper
    const swiper = new Swiper('.heroSwiper', {
        effect: 'fade',
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + ' w-12 h-1 bg-white/50 rounded-full"></span>';
            },
        },
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
        },
        on: {
            slideChange: function () {
                const slides = this.slides;
                const activeIndex = this.activeIndex;
                
                slides.forEach((slide, index) => {
                    const content = slide.querySelector('.slide-content');
                    if (content) {
                        if (index === activeIndex) {
                            content.style.transform = 'translateY(0)';
                            content.style.opacity = '1';
                        } else {
                            content.style.transform = 'translateY(30px)';
                            content.style.opacity = '0';
                        }
                    }
                });
            },
        },
    });

    // Counter Animation
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 100;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current) + (element.dataset.suffix || '');
        }, 20);
    }

    // Initialize counters when in viewport
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.dataset.counter);
                if (!counter.dataset.animated) {
                    counter.dataset.animated = 'true';
                    animateCounter(counter, target);
                }
            }
        });
    }, observerOptions);

    document.querySelectorAll('[data-counter]').forEach(counter => {
        counterObserver.observe(counter);
    });

    // Add suffix to counters
    document.querySelector('[data-counter="98"]').dataset.suffix = '%';
    document.querySelector('[data-counter="150"]').dataset.suffix = '+';
    document.querySelector('[data-counter="15"]').dataset.suffix = '+';
    document.querySelector('[data-counter="24"]').dataset.suffix = '/7';
</script>
@endsection
