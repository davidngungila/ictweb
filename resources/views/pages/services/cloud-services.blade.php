@extends('layouts.app')

@section('title', 'Cloud Services - Jezdan Technology')
@section('description', 'Professional cloud services in Tanzania. Cloud migration, cloud storage, cloud computing, and cloud security solutions for businesses.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cyan-900 via-cyan-800 to-cyan-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2072&q=80" alt="Cloud Services" class="w-full h-full object-cover opacity-40">
    </div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center bg-cyan-700 bg-opacity-50 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
                <i class="fas fa-cloud text-yellow-400 mr-3"></i>
                <span class="text-sm font-semibold">Professional Cloud Services</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Cloud Services</h1>
            <p class="text-xl text-cyan-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Transform your business with scalable cloud solutions that enhance flexibility, 
                reduce costs, and drive innovation for Tanzanian companies.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-cyan-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Scalable Infrastructure
                </span>
                <span class="bg-cyan-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Cost Effective
                </span>
                <span class="bg-cyan-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Secure & Reliable
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Cloud Transformation Solutions</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Empower your business with cutting-edge cloud services designed for scalability, 
                        security, and performance. Our expert team helps Tanzanian businesses leverage 
                        cloud technology to drive growth and innovation.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-cyan-600 rounded-full flex items-center justify-center text-white text-sm flex-shrink-0 mt-1">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Cloud Migration</h4>
                                <p class="text-gray-600">Seamless migration of your existing infrastructure to the cloud</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-cyan-600 rounded-full flex items-center justify-center text-white text-sm flex-shrink-0 mt-1">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Cloud Storage</h4>
                                <p class="text-gray-600">Secure, scalable storage solutions for your business data</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-cyan-600 rounded-full flex items-center justify-center text-white text-sm flex-shrink-0 mt-1">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Cloud Computing</h4>
                                <p class="text-gray-600">High-performance computing resources on demand</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="px-8 py-3 bg-cyan-600 text-white font-semibold rounded-lg hover:bg-cyan-700 transition-colors">
                            Get Started
                        </a>
                        <a href="{{ route('request-demo') }}" class="px-8 py-3 border-2 border-cyan-600 text-cyan-600 font-semibold rounded-lg hover:bg-cyan-50 transition-colors">
                            Request Demo
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2072&q=80" 
                         alt="Cloud Services" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 bg-cyan-600 text-white p-6 rounded-xl shadow-xl">
                        <div class="text-3xl font-bold">99.9%</div>
                        <div class="text-sm">Uptime Guarantee</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Cloud Services</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Comprehensive cloud solutions tailored to meet your specific business needs
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Cloud Migration -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center text-cyan-600 text-2xl mb-6">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cloud Migration</h3>
                <p class="text-gray-600 mb-6">Seamless migration of your applications, data, and infrastructure to the cloud with minimal downtime.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Zero-downtime migration</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Data integrity assurance</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Post-migration support</span>
                    </li>
                </ul>
            </div>

            <!-- Cloud Storage -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center text-cyan-600 text-2xl mb-6">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cloud Storage</h3>
                <p class="text-gray-600 mb-6">Secure, scalable, and reliable cloud storage solutions for all your business data needs.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Unlimited storage options</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Automated backups</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Version control</span>
                    </li>
                </ul>
            </div>

            <!-- Cloud Computing -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center text-cyan-600 text-2xl mb-6">
                    <i class="fas fa-server"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cloud Computing</h3>
                <p class="text-gray-600 mb-6">High-performance computing resources on demand with flexible scaling options.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Auto-scaling resources</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Load balancing</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Performance monitoring</span>
                    </li>
                </ul>
            </div>

            <!-- Cloud Security -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center text-cyan-600 text-2xl mb-6">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cloud Security</h3>
                <p class="text-gray-600 mb-6">Advanced security solutions to protect your cloud infrastructure and data from threats.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Encryption services</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Threat detection</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Compliance management</span>
                    </li>
                </ul>
            </div>

            <!-- Cloud Backup -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center text-cyan-600 text-2xl mb-6">
                    <i class="fas fa-cloud-download-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cloud Backup</h3>
                <p class="text-gray-600 mb-6">Automated backup solutions to ensure your data is always safe and recoverable.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Automated scheduling</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Quick recovery</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Disaster recovery</span>
                    </li>
                </ul>
            </div>

            <!-- Cloud Consulting -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center text-cyan-600 text-2xl mb-6">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cloud Consulting</h3>
                <p class="text-gray-600 mb-6">Expert guidance to help you make the right cloud decisions for your business.</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Strategy development</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Cost optimization</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-cyan-600"></i>
                        <span>Vendor selection</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technologies -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Cloud Technologies We Use</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                We work with leading cloud platforms to deliver the best solutions for your business
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
            <div class="bg-gray-50 rounded-xl p-6 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-aws text-4xl text-orange-600"></i>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-google text-4xl text-blue-600"></i>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-microsoft text-4xl text-blue-700"></i>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-digital-ocean text-4xl text-blue-500"></i>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-docker text-4xl text-blue-600"></i>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 flex items-center justify-center hover:shadow-lg transition-shadow">
                <i class="fab fa-kubernetes text-4xl text-blue-600"></i>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-cyan-600 to-cyan-700 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform to the Cloud?</h2>
            <p class="text-xl text-cyan-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Let our cloud experts help you leverage the power of cloud computing to drive your business forward.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="{{ route('contact') }}" class="px-10 py-4 bg-white text-cyan-600 font-bold rounded-full hover:bg-cyan-50 transition-colors">
                    Get Started Today
                </a>
                <a href="{{ route('request-demo') }}" class="px-10 py-4 bg-cyan-800 text-white font-bold rounded-full hover:bg-cyan-900 transition-colors">
                    Schedule a Demo
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
