@extends('layouts.app')

@section('title', 'Our Services - JezDan Technology')
@section('description', 'Explore our comprehensive digital services including software development, web design, SMS platform, cybersecurity, and IT consulting in Tanzania.')

@section('styles')
<style>
    .service-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .service-card {
        transition: all 0.3s ease;
    }
    .service-card:hover {
        transform: translateY(-10px);
    }
    .pricing-card {
        transition: all 0.3s ease;
    }
    .pricing-card:hover {
        transform: scale(1.05);
    }
    .tech-badge {
        transition: all 0.2s ease;
    }
    .tech-badge:hover {
        transform: translateY(-2px);
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="service-hero py-32 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-white/20 text-white rounded-full text-sm font-bold tracking-widest uppercase mb-6 backdrop-blur-md border border-white/30">Our Services</span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-8 leading-tight font-heading">Comprehensive Digital <span class="text-blue-300">Solutions</span></h1>
                <p class="text-xl md:text-2xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">
                    From custom software development to digital marketing, we offer end-to-end solutions to transform your business and accelerate growth.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#contact" class="px-10 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl">
                        Get Free Consultation
                    </a>
                    <a href="#pricing" class="px-10 py-4 bg-white/20 text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md">
                        View Pricing
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Software Development -->
    <section id="software-development" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Software Development</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-8 leading-tight font-heading">Custom Software Solutions</h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        We build tailored business applications that streamline your operations, increase efficiency, and drive growth. Our solutions are designed specifically for the Tanzanian market.
                    </p>
                    
                    <!-- Features -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Business Management Systems</h4>
                                <p class="text-gray-600">Complete ERP solutions for inventory, finance, and operations.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">School Management Systems</h4>
                                <p class="text-gray-600">Comprehensive solutions for student management, grading, and reporting.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">POS & Licensing Systems</h4>
                                <p class="text-gray-600">Point of sale solutions and licensing management for various industries.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Hospital & SACCO Systems</h4>
                                <p class="text-gray-600">Specialized solutions for healthcare and financial institutions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tech Stack -->
                    <div class="mb-8">
                        <h4 class="font-bold text-gray-900 mb-4">Technology Stack</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-blue-100 hover:text-blue-600">PHP</span>
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-blue-100 hover:text-blue-600">Laravel</span>
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-blue-100 hover:text-blue-600">MySQL</span>
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-blue-100 hover:text-blue-600">Vue.js</span>
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-blue-100 hover:text-blue-600">React</span>
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-blue-100 hover:text-blue-600">Python</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-6">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition-colors">
                            Get Quote <i class="fas fa-arrow-right"></i>
                        </a>
                        <span class="text-2xl font-bold text-blue-600">From 500,000 TZS</span>
                    </div>
                </div>
                
                <div data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Software Development" class="rounded-2xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Web Design -->
    <section id="web-design" class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" class="order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Web Design" class="rounded-2xl shadow-2xl">
                </div>
                
                <div data-aos="fade-left" class="order-1 lg:order-2">
                    <span class="inline-block px-4 py-2 bg-green-100 text-green-600 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Web Design</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-8 leading-tight font-heading">Professional Web Design</h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Stunning, responsive websites that capture your brand essence and engage your audience. FREE setup - you only pay for domain and hosting.
                    </p>
                    
                    <!-- Pricing Tiers -->
                    <div class="space-y-4 mb-8">
                        <div class="bg-white rounded-xl p-6 border border-gray-200">
                            <div class="flex justify-between items-center mb-3">
                                <h4 class="font-bold text-gray-900">Starter Package</h4>
                                <span class="text-2xl font-bold text-green-600">FREE Setup</span>
                            </div>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span>5-page responsive website</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span>Basic SEO optimization</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span>Mobile-friendly design</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 border border-gray-200">
                            <div class="flex justify-between items-center mb-3">
                                <h4 class="font-bold text-gray-900">Business Package</h4>
                                <span class="text-2xl font-bold text-blue-600">200,000 TZS</span>
                            </div>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check text-blue-500"></i>
                                    <span>15-page professional website</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check text-blue-500"></i>
                                    <span>Advanced SEO & analytics</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check text-blue-500"></i>
                                    <span>Contact forms & booking</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 border border-gray-200">
                            <div class="flex justify-between items-center mb-3">
                                <h4 class="font-bold text-gray-900">E-Commerce Package</h4>
                                <span class="text-2xl font-bold text-purple-600">600,000 TZS</span>
                            </div>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check text-purple-500"></i>
                                    <span>Full e-commerce functionality</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check text-purple-500"></i>
                                    <span>Payment gateway integration</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check text-purple-500"></i>
                                    <span>Inventory management</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tech Stack -->
                    <div class="mb-8">
                        <h4 class="font-bold text-gray-900 mb-4">Technologies We Use</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-green-100 hover:text-green-600">HTML5</span>
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-green-100 hover:text-green-600">CSS3</span>
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-green-100 hover:text-green-600">JavaScript</span>
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-green-100 hover:text-green-600">Bootstrap</span>
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-green-100 hover:text-green-600">Tailwind CSS</span>
                            <span class="tech-badge px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-green-100 hover:text-green-600">WordPress</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-6">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-green-600 text-white font-semibold rounded-full hover:bg-green-700 transition-colors">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                        <span class="text-2xl font-bold text-green-600">30,000 TZS/mo</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SMS Platform -->
    <section id="sms-platform" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <span class="inline-block px-4 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-bold tracking-widest uppercase mb-6">SMS Platform</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-8 leading-tight font-heading">Instant SMS Communication</h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Reach thousands of customers instantly with our powerful SMS platform. Pre-approved Sender IDs mean no registration delays - start messaging immediately!
                    </p>
                    
                    <!-- Key Features -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="bg-purple-50 rounded-xl p-6">
                            <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center text-white mb-4">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Instant Activation</h4>
                            <p class="text-gray-600">Start sending messages immediately with pre-approved Sender IDs.</p>
                        </div>
                        <div class="bg-blue-50 rounded-xl p-6">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center text-white mb-4">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Real-time Analytics</h4>
                            <p class="text-gray-600">Track delivery rates, opens, and engagement in real-time.</p>
                        </div>
                        <div class="bg-green-50 rounded-xl p-6">
                            <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center text-white mb-4">
                                <i class="fas fa-code"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">API Integration</h4>
                            <p class="text-gray-600">Easy integration with your existing systems via REST API.</p>
                        </div>
                        <div class="bg-orange-50 rounded-xl p-6">
                            <div class="w-12 h-12 bg-orange-600 rounded-lg flex items-center justify-center text-white mb-4">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Contact Management</h4>
                            <p class="text-gray-600">Organize contacts and create targeted messaging campaigns.</p>
                        </div>
                    </div>

                    <!-- SMS Rates -->
                    <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-xl p-8 text-white mb-8">
                        <h4 class="text-2xl font-bold mb-4">Affordable SMS Rates</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-2">30 TZS</div>
                                <p class="text-purple-200">Per Message</p>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-2">0 TZS</div>
                                <p class="text-purple-200">Setup Fee</p>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-2">24/7</div>
                                <p class="text-purple-200">Support</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-6">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-purple-600 text-white font-semibold rounded-full hover:bg-purple-700 transition-colors">
                            Start Now <i class="fas fa-arrow-right"></i>
                        </a>
                        <span class="text-2xl font-bold text-purple-600">No Setup Fee</span>
                    </div>
                </div>
                
                <div data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="SMS Platform" class="rounded-2xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Cybersecurity -->
    <section id="cybersecurity" class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" class="order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Cybersecurity" class="rounded-2xl shadow-2xl">
                </div>
                
                <div data-aos="fade-left" class="order-1 lg:order-2">
                    <span class="inline-block px-4 py-2 bg-red-100 text-red-600 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Cybersecurity</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-8 leading-tight font-heading">Enterprise-Grade Security</h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Protect your digital assets with comprehensive cybersecurity solutions. We safeguard your business against modern threats with advanced security measures.
                    </p>
                    
                    <!-- Security Services -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-shield-alt text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Security Audits</h4>
                                <p class="text-gray-600">Comprehensive security assessments to identify vulnerabilities.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-firewall text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Firewall Configuration</h4>
                                <p class="text-gray-600">Advanced firewall setup and monitoring for network protection.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-lock text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Data Protection</h4>
                                <p class="text-gray-600">Encryption and data loss prevention solutions.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-chart-line text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">24/7 Monitoring</h4>
                                <p class="text-gray-600">Continuous security monitoring and threat detection.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Security Level -->
                    <div class="bg-green-50 border border-green-200 rounded-xl p-6 mb-8">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-green-600 rounded-xl flex items-center justify-center text-white">
                                <i class="fas fa-check text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-green-800 text-xl">Enterprise-grade Security</h4>
                                <p class="text-green-600">ISO 27001 compliant security standards</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-6">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-red-600 text-white font-semibold rounded-full hover:bg-red-700 transition-colors">
                            Secure Business <i class="fas fa-arrow-right"></i>
                        </a>
                        <span class="text-2xl font-bold text-red-600">From 100,000 TZS</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- IT Consulting -->
    <section id="consulting" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <span class="inline-block px-4 py-2 bg-indigo-100 text-indigo-600 rounded-full text-sm font-bold tracking-widest uppercase mb-6">IT Consulting</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-8 leading-tight font-heading">Strategic Technology Consulting</h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Leverage our expertise to align technology with your business goals. We provide strategic guidance to help you make informed technology decisions.
                    </p>
                    
                    <!-- Consulting Areas -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="bg-indigo-50 rounded-xl p-6">
                            <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center text-white mb-4">
                                <i class="fas fa-route"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Digital Strategy</h4>
                            <p class="text-gray-600">Comprehensive digital transformation roadmaps.</p>
                        </div>
                        <div class="bg-blue-50 rounded-xl p-6">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center text-white mb-4">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Process Optimization</h4>
                            <p class="text-gray-600">Streamline operations with technology solutions.</p>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-6">
                            <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center text-white mb-4">
                                <i class="fas fa-map"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Technology Roadmap</h4>
                            <p class="text-gray-600">Long-term technology planning and implementation.</p>
                        </div>
                        <div class="bg-green-50 rounded-xl p-6">
                            <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center text-white mb-4">
                                <i class="fas fa-plug"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">System Integration</h4>
                            <p class="text-gray-600">Seamless integration of disparate systems.</p>
                        </div>
                    </div>

                    <!-- Consulting Type -->
                    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl p-8 text-white mb-8">
                        <h4 class="text-2xl font-bold mb-4">Strategic Planning Sessions</h4>
                        <p class="text-indigo-200 mb-6">Work with our experts to develop a comprehensive technology strategy aligned with your business objectives.</p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-2">2-4 Weeks</div>
                                <p class="text-indigo-200">Engagement Period</p>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-2">Expert Team</div>
                                <p class="text-indigo-200">Dedicated Consultants</p>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-2">Actionable</div>
                                <p class="text-indigo-200">Results & Roadmap</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-6">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-indigo-600 text-white font-semibold rounded-full hover:bg-indigo-700 transition-colors">
                            Book Consultation <i class="fas fa-arrow-right"></i>
                        </a>
                        <span class="text-2xl font-bold text-indigo-600">From 200,000 TZS</span>
                    </div>
                </div>
                
                <div data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="IT Consulting" class="rounded-2xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Marketing -->
    <section id="digital-marketing" class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Digital Marketing</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight font-heading">Grow Your Online Presence</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Comprehensive digital marketing solutions to increase your brand visibility, drive traffic, and convert leads into customers.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Marketing Service 1 -->
                <div class="service-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">SEO & SEM</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Improve your search engine rankings and drive targeted traffic with our SEO and SEM strategies.</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-6">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-500"></i>
                            <span>Keyword research & optimization</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-500"></i>
                            <span>Content strategy & creation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-500"></i>
                            <span>PPC campaign management</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-orange-600">150,000 TZS/mo</span>
                        <a href="{{ route('contact') }}" class="text-orange-600 hover:text-orange-700 font-medium">
                            Get Started <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Marketing Service 2 -->
                <div class="service-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fab fa-facebook"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">Social Media Marketing</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Build brand awareness and engage with your audience across social media platforms.</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-6">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-500"></i>
                            <span>Content creation & scheduling</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-500"></i>
                            <span>Community management</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-500"></i>
                            <span>Social media advertising</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-blue-600">100,000 TZS/mo</span>
                        <a href="{{ route('contact') }}" class="text-blue-600 hover:text-blue-700 font-medium">
                            Get Started <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Marketing Service 3 -->
                <div class="service-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4 font-heading">Email Marketing</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Nurture leads and maintain customer relationships with targeted email campaigns.</p>
                    <ul class="space-y-2 text-sm text-gray-600 mb-6">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Campaign design & execution</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i>
                            <span>List management & segmentation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Performance analytics</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-green-600">80,000 TZS/mo</span>
                        <a href="{{ route('contact') }}" class="text-green-600 hover:text-green-700 font-medium">
                            Get Started <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-3xl mx-auto" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 font-heading">Ready to Get Started?</h2>
                <p class="text-xl mb-8 text-blue-100 leading-relaxed">Let's discuss your project requirements and create a tailored solution for your business. Contact us today for a free consultation.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="px-10 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl">
                        Get Free Quote
                    </a>
                    <a href="tel:+255123456789" class="px-10 py-4 bg-blue-700/30 text-white font-bold rounded-full border border-white/20 hover:bg-blue-700/50 transition-all duration-300 backdrop-blur-md">
                        <i class="fas fa-phone mr-2"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
