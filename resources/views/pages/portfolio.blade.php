@extends('layouts.app')

@section('title', 'Portfolio - JezDan Technology')
@section('description', 'Explore our portfolio of successful projects including software development, web design, and digital solutions for Tanzanian businesses.')

@section('styles')
<style>
    .portfolio-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .portfolio-card {
        transition: all 0.3s ease;
    }
    .portfolio-card:hover {
        transform: translateY(-10px);
    }
    .filter-btn {
        transition: all 0.3s ease;
    }
    .filter-btn.active {
        background: linear-gradient(135deg, #3B82F6 0%, #1E40AF 100%);
        color: white;
    }
    .portfolio-overlay {
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, transparent 100%);
    }
    .tech-tag {
        transition: all 0.2s ease;
    }
    .tech-tag:hover {
        transform: translateY(-2px);
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="portfolio-hero py-32 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-white/20 text-white rounded-full text-sm font-bold tracking-widest uppercase mb-6 backdrop-blur-md border border-white/30">Our Work</span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-8 leading-tight font-heading">Success <span class="text-blue-300">Stories</span></h1>
                <p class="text-xl md:text-2xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">
                    Explore our portfolio of innovative digital solutions that have transformed businesses across Tanzania and beyond.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#featured" class="px-10 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl">
                        View Featured Projects
                    </a>
                    <a href="{{ route('contact') }}" class="px-10 py-4 bg-white/20 text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md">
                        Start Your Project
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Stats -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div data-aos="fade-up">
                    <div class="text-4xl md:text-5xl font-bold mb-2 font-heading" data-counter="150">0</div>
                    <p class="text-blue-200">Projects Completed</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl md:text-5xl font-bold mb-2 font-heading" data-counter="98">0</div>
                    <p class="text-blue-200">Happy Clients</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl md:text-5xl font-bold mb-2 font-heading" data-counter="25">0</div>
                    <p class="text-blue-200">Awards Won</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl md:text-5xl font-bold mb-2 font-heading" data-counter="15">0</div>
                    <p class="text-blue-200">Years Experience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-12 bg-gray-50 sticky top-32 z-40 border-b border-gray-200">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="filter-btn active px-6 py-3 bg-white text-gray-700 rounded-full font-semibold border border-gray-200 hover:border-blue-500 transition-all" data-filter="all">
                    All Projects
                </button>
                <button class="filter-btn px-6 py-3 bg-white text-gray-700 rounded-full font-semibold border border-gray-200 hover:border-blue-500 transition-all" data-filter="software">
                    Software Development
                </button>
                <button class="filter-btn px-6 py-3 bg-white text-gray-700 rounded-full font-semibold border border-gray-200 hover:border-blue-500 transition-all" data-filter="web">
                    Web Design
                </button>
                <button class="filter-btn px-6 py-3 bg-white text-gray-700 rounded-full font-semibold border border-gray-200 hover:border-blue-500 transition-all" data-filter="mobile">
                    Mobile Apps
                </button>
                <button class="filter-btn px-6 py-3 bg-white text-gray-700 rounded-full font-semibold border border-gray-200 hover:border-blue-500 transition-all" data-filter="marketing">
                    Digital Marketing
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section id="featured" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Featured Work</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight font-heading">Recent Success Stories</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Take a look at some of our recent projects and see how we've helped businesses achieve their digital transformation goals.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="portfolio-card group relative bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100" data-category="software" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Banking Management System" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 portfolio-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="#" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-full hover:bg-gray-100 transition-colors">
                                View Details
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">Software</span>
                            <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs font-semibold">Finance</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading">Banking Management System</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Comprehensive banking solution with real-time transaction processing, customer management, and advanced reporting features.</p>
                        
                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-blue-100 hover:text-blue-600">Laravel</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-blue-100 hover:text-blue-600">Vue.js</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-blue-100 hover:text-blue-600">MySQL</span>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-calendar text-gray-400"></i>
                                <span class="text-sm text-gray-500">2024</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-500">5.0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="portfolio-card group relative bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100" data-category="web" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2048&q=80" alt="E-commerce Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 portfolio-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="#" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-full hover:bg-gray-100 transition-colors">
                                View Details
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs font-semibold">Web Design</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs font-semibold">E-commerce</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading">E-commerce Platform</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Modern e-commerce solution with payment gateway integration, inventory management, and real-time order tracking.</p>
                        
                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-green-100 hover:text-green-600">React</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-green-100 hover:text-green-600">Node.js</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-green-100 hover:text-green-600">MongoDB</span>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-calendar text-gray-400"></i>
                                <span class="text-sm text-gray-500">2024</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-500">4.9</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="portfolio-card group relative bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100" data-category="software" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da575a5ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2048&q=80" alt="School Management System" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 portfolio-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="#" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-full hover:bg-gray-100 transition-colors">
                                View Details
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">Software</span>
                            <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs font-semibold">Education</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading">School Management System</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Complete educational management solution with student enrollment, grade tracking, and parent portal access.</p>
                        
                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-blue-100 hover:text-blue-600">PHP</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-blue-100 hover:text-blue-600">MySQL</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-blue-100 hover:text-blue-600">Bootstrap</span>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-calendar text-gray-400"></i>
                                <span class="text-sm text-gray-500">2023</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-500">4.8</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="portfolio-card group relative bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100" data-category="mobile" data-aos="fade-up" data-aos-delay="400">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1ac58711b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Food Delivery App" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 portfolio-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="#" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-full hover:bg-gray-100 transition-colors">
                                View Details
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs font-semibold">Mobile</span>
                            <span class="px-3 py-1 bg-red-100 text-red-600 rounded-full text-xs font-semibold">Food Tech</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading">Food Delivery App</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">On-demand food delivery application with real-time tracking, payment integration, and restaurant management.</p>
                        
                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-purple-100 hover:text-purple-600">React Native</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-purple-100 hover:text-purple-600">Firebase</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-purple-100 hover:text-purple-600">Stripe</span>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-calendar text-gray-400"></i>
                                <span class="text-sm text-gray-500">2023</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-500">4.7</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="portfolio-card group relative bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100" data-category="marketing" data-aos="fade-up" data-aos-delay="500">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Digital Marketing Campaign" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 portfolio-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="#" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-full hover:bg-gray-100 transition-colors">
                                View Details
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-orange-100 text-orange-600 rounded-full text-xs font-semibold">Marketing</span>
                            <span class="px-3 py-1 bg-pink-100 text-pink-600 rounded-full text-xs font-semibold">Social Media</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading">Digital Marketing Campaign</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Comprehensive digital marketing strategy resulting in 300% increase in online engagement and sales.</p>
                        
                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-orange-100 hover:text-orange-600">SEO</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-orange-100 hover:text-orange-600">SEM</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-orange-100 hover:text-orange-600">Analytics</span>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-calendar text-gray-400"></i>
                                <span class="text-sm text-gray-500">2023</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-500">5.0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="portfolio-card group relative bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100" data-category="web" data-aos="fade-up" data-aos-delay="600">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Hotel Booking Website" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 portfolio-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="#" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-full hover:bg-gray-100 transition-colors">
                                View Details
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs font-semibold">Web Design</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">Hospitality</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading">Hotel Booking Website</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Luxury hotel booking platform with real-time availability, online payments, and reservation management.</p>
                        
                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-green-100 hover:text-green-600">WordPress</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-green-100 hover:text-green-600">WooCommerce</span>
                            <span class="tech-tag px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-medium hover:bg-green-100 hover:text-green-600">Payment API</span>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-calendar text-gray-400"></i>
                                <span class="text-sm text-gray-500">2023</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-500">4.9</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Client Success Stories</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight font-heading">What Our Clients Say</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Don't just take our word for it - hear from the businesses we've helped transform.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold mr-4">
                            JD
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-900">John Doe</h4>
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
                    <p class="text-gray-600 leading-relaxed">"JezDan Technology delivered an exceptional banking management system that transformed our operations. Their attention to detail and commitment to quality is unmatched."</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-bold mr-4">
                            SM
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-900">Sarah Mwangi</h4>
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
                    <p class="text-gray-600 leading-relaxed">"The school management system has revolutionized how we operate. It's intuitive, comprehensive, and the support team is always available to help."</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 font-bold mr-4">
                            AK
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-900">Ali Khamis</h4>
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
                    <p class="text-gray-600 leading-relaxed">"Our e-commerce platform has increased sales by 200%. The team understood our needs perfectly and delivered beyond our expectations."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Our Process</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight font-heading">How We Work</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Our proven process ensures successful project delivery from concept to completion.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4 font-heading">Discovery</h3>
                    <p class="text-gray-600 leading-relaxed">We understand your business needs, goals, and challenges through in-depth consultation.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4 font-heading">Planning</h3>
                    <p class="text-gray-600 leading-relaxed">We create a detailed project plan with timelines, milestones, and deliverables.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6">
                        3
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4 font-heading">Development</h3>
                    <p class="text-gray-600 leading-relaxed">Our expert team builds your solution using cutting-edge technologies and best practices.</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6">
                        4
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4 font-heading">Launch & Support</h3>
                    <p class="text-gray-600 leading-relaxed">We deploy your solution and provide ongoing support to ensure continued success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-3xl mx-auto" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 font-heading">Ready to Start Your Project?</h2>
                <p class="text-xl mb-8 text-blue-100 leading-relaxed">Join our list of successful clients. Let's discuss how we can bring your digital vision to life.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="px-10 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl">
                        Start Your Project
                    </a>
                    <a href="tel:+255123456789" class="px-10 py-4 bg-blue-700/30 text-white font-bold rounded-full border border-white/20 hover:bg-blue-700/50 transition-all duration-300 backdrop-blur-md">
                        <i class="fas fa-phone mr-2"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Portfolio Filter
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            
            const filter = button.dataset.filter;
            
            portfolioCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
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
    document.querySelector('[data-counter="25"]').dataset.suffix = '+';
    document.querySelector('[data-counter="15"]').dataset.suffix = '+';
</script>
@endsection
