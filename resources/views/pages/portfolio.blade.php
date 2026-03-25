@extends('layouts.app')

@section('title', 'Portfolio - JezDan Technology')
@section('description', 'Explore our portfolio of successful projects including software development, web design, and digital solutions for Tanzanian businesses.')

@section('styles')
<style>
    .portfolio-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        position: relative;
    }
    .portfolio-card {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        transform-style: preserve-3d;
    }
    .portfolio-card:hover {
        transform: translateY(-15px) rotateX(5deg);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    .filter-btn {
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
    }
    .filter-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(59, 130, 246, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }
    .filter-btn:hover::before {
        width: 300px;
        height: 300px;
    }
    .filter-btn.active {
        background: linear-gradient(135deg, #3B82F6 0%, #1E40AF 100%);
        color: white;
        transform: scale(1.05);
        box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.5);
    }
    .portfolio-overlay {
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.6) 50%, transparent 100%);
    }
    .tech-tag {
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        cursor: pointer;
    }
    .tech-tag:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 4px 15px -3px rgba(0, 0, 0, 0.1);
    }
    .floating {
        animation: floating 3s ease-in-out infinite;
    }
    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    .slide-in {
        animation: slideIn 0.6s ease-out;
    }
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .magnetic {
        transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .stats-counter {
        transition: all 0.5s ease;
    }
    .stats-counter:hover {
        transform: scale(1.1);
    }
    .process-card {
        transition: all 0.4s ease;
        position: relative;
    }
    .process-card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, #3B82F6, #8B5CF6, #EC4899, #3B82F6);
        border-radius: 1rem;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }
    .process-card:hover::before {
        opacity: 1;
    }
    .process-card:hover {
        transform: translateY(-5px);
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="portfolio-hero py-32 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white/10 rounded-full blur-3xl floating"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-white/10 rounded-full blur-3xl floating" style="animation-delay: 1.5s"></div>
            <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-blue-400/10 rounded-full blur-3xl floating" style="animation-delay: 0.7s"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto text-center slide-in" data-aos="fade-up">
                <span class="inline-block px-6 py-3 bg-white/20 text-white rounded-full text-sm font-bold tracking-widest uppercase mb-8 backdrop-blur-md border border-white/30 floating">Our Work</span>
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-8 leading-tight font-heading magnetic">Success <span class="text-blue-300">Stories</span></h1>
                <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 leading-relaxed max-w-4xl mx-auto mb-12">
                    Explore our portfolio of innovative digital solutions that have transformed businesses across Tanzania and beyond. Each project represents our commitment to excellence.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="#featured" class="px-12 py-5 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-2xl hover:shadow-white/20 transform hover:scale-105 text-lg magnetic">
                        <i class="fas fa-rocket mr-3"></i> View Featured Projects
                    </a>
                    <a href="{{ route('contact') }}" class="px-12 py-5 bg-white/20 text-white font-bold rounded-full border-2 border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md transform hover:scale-105 text-lg magnetic">
                        <i class="fas fa-play mr-3"></i> Start Your Project
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Stats -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/4 w-32 h-32 bg-white/10 rounded-full blur-2xl floating"></div>
            <div class="absolute bottom-0 right-1/4 w-40 h-40 bg-white/10 rounded-full blur-2xl floating" style="animation-delay: 1s"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="stats-counter" data-aos="fade-up">
                    <div class="text-4xl md:text-6xl font-bold mb-3 font-heading" data-counter="150">0</div>
                    <p class="text-blue-200 text-lg">Projects Completed</p>
                    <div class="w-16 h-1 bg-white/30 mx-auto mt-3 rounded-full"></div>
                </div>
                <div class="stats-counter" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl md:text-6xl font-bold mb-3 font-heading" data-counter="98">0</div>
                    <p class="text-blue-200 text-lg">Happy Clients</p>
                    <div class="w-16 h-1 bg-white/30 mx-auto mt-3 rounded-full"></div>
                </div>
                <div class="stats-counter" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl md:text-6xl font-bold mb-3 font-heading" data-counter="25">0</div>
                    <p class="text-blue-200 text-lg">Awards Won</p>
                    <div class="w-16 h-1 bg-white/30 mx-auto mt-3 rounded-full"></div>
                </div>
                <div class="stats-counter" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl md:text-6xl font-bold mb-3 font-heading" data-counter="15">0</div>
                    <p class="text-blue-200 text-lg">Years Experience</p>
                    <div class="w-16 h-1 bg-white/30 mx-auto mt-3 rounded-full"></div>
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
                    Our proven process ensures successful project delivery from concept to completion with transparency and excellence.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="process-card text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6 transform hover:scale-110 transition-transform">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4 font-heading">Discovery</h3>
                    <p class="text-gray-600 leading-relaxed">We understand your business needs, goals, and challenges through in-depth consultation and research.</p>
                    <div class="mt-4 text-blue-600 font-semibold">1-2 Weeks</div>
                </div>

                <!-- Step 2 -->
                <div class="process-card text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6 transform hover:scale-110 transition-transform">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4 font-heading">Planning</h3>
                    <p class="text-gray-600 leading-relaxed">We create a detailed project plan with timelines, milestones, and deliverables for success.</p>
                    <div class="mt-4 text-green-600 font-semibold">1 Week</div>
                </div>

                <!-- Step 3 -->
                <div class="process-card text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6 transform hover:scale-110 transition-transform">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4 font-heading">Development</h3>
                    <p class="text-gray-600 leading-relaxed">Our expert team builds your solution using cutting-edge technologies and best practices.</p>
                    <div class="mt-4 text-purple-600 font-semibold">4-12 Weeks</div>
                </div>

                <!-- Step 4 -->
                <div class="process-card text-center bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mx-auto mb-6 transform hover:scale-110 transition-transform">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4 font-heading">Launch & Support</h3>
                    <p class="text-gray-600 leading-relaxed">We deploy your solution and provide ongoing support to ensure continued success.</p>
                    <div class="mt-4 text-orange-600 font-semibold">Ongoing</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl floating"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-white/10 rounded-full blur-3xl floating" style="animation-delay: 2s"></div>
        </div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="max-w-4xl mx-auto" data-aos="fade-up">
                <h2 class="text-4xl md:text-6xl font-bold mb-8 font-heading magnetic">Ready to Start Your <span class="text-yellow-300">Project</span>?</h2>
                <p class="text-xl md:text-2xl mb-12 text-blue-100 leading-relaxed max-w-3xl mx-auto">Join our list of successful clients. Let's discuss how we can bring your digital vision to life and create something extraordinary together.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="{{ route('contact') }}" class="px-12 py-5 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-2xl hover:shadow-white/20 transform hover:scale-105 text-lg magnetic">
                        <i class="fas fa-rocket mr-3"></i> Start Your Project
                    </a>
                    <a href="tel:+255123456789" class="px-12 py-5 bg-white/20 text-white font-bold rounded-full border-2 border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md transform hover:scale-105 text-lg magnetic">
                        <i class="fas fa-phone-alt mr-3"></i> Call Us Now
                    </a>
                </div>
                <div class="mt-12 flex justify-center gap-8">
                    <div class="text-center">
                        <i class="fas fa-clock text-3xl mb-2 text-yellow-300"></i>
                        <p class="text-sm">24/7 Support</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-shield-alt text-3xl mb-2 text-yellow-300"></i>
                        <p class="text-sm">100% Secure</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-award text-3xl mb-2 text-yellow-300"></i>
                        <p class="text-sm">Award Winning</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Magnetic Effect for Elements
    document.addEventListener('mousemove', (e) => {
        const magneticElements = document.querySelectorAll('.magnetic');
        
        magneticElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            const distance = Math.sqrt(x * x + y * y);
            const maxDistance = 100;
            
            if (distance < maxDistance) {
                const force = (maxDistance - distance) / maxDistance;
                const translateX = x * force * 0.3;
                const translateY = y * force * 0.3;
                
                element.style.transform = `translate(${translateX}px, ${translateY}px)`;
            } else {
                element.style.transform = 'translate(0, 0)';
            }
        });
    });

    // Portfolio Filter with Enhanced Animation
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            
            const filter = button.dataset.filter;
            
            portfolioCards.forEach((card, index) => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1) translateY(0)';
                    }, index * 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8) translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Enhanced Counter Animation
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
    document.querySelector('[data-counter="98"]')?.setAttribute('data-suffix', '%');
    document.querySelector('[data-counter="150"]')?.setAttribute('data-suffix', '+');
    document.querySelector('[data-counter="25"]')?.setAttribute('data-suffix', '+');
    document.querySelector('[data-counter="15"]')?.setAttribute('data-suffix', '+');

    // Tech Tag Click Interaction
    document.querySelectorAll('.tech-tag').forEach(tag => {
        tag.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        });
    });

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Parallax Effect for Hero Section
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.floating');
        
        parallaxElements.forEach(element => {
            const speed = element.dataset.speed || 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Add Loading Animation for Images
    document.querySelectorAll('img').forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '0';
            setTimeout(() => {
                this.style.transition = 'opacity 0.5s';
                this.style.opacity = '1';
            }, 100);
        });
    });
</script>
@endsection
