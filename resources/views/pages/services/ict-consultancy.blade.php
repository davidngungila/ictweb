@extends('layouts.app')

@section('title', 'ICT Consultancy Services - Jezdan Technology')
@section('description', 'Professional ICT consultancy services in Tanzania. Strategic technology consulting, digital transformation planning, optimization, and training for business growth.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-900 via-indigo-800 to-indigo-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center bg-indigo-700 bg-opacity-50 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
                <i class="fas fa-lightbulb text-yellow-400 mr-3"></i>
                <span class="text-sm font-semibold">Strategic ICT Consultancy</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">ICT Consultancy</h1>
            <p class="text-xl text-indigo-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Transform your business with strategic technology consulting that drives digital innovation, 
                operational efficiency, and sustainable growth for Tanzanian companies.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-indigo-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Digital Strategy
                </span>
                <span class="bg-indigo-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Business Optimization
                </span>
                <span class="bg-indigo-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Expert Guidance
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Strategic Technology Consulting</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        We provide expert ICT consultancy services that help Tanzanian businesses leverage technology 
                        for competitive advantage, operational excellence, and sustainable growth in the digital age.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        Our consultants combine deep industry knowledge with local market understanding 
                        to deliver actionable strategies that drive real business transformation and ROI.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-chart-line text-indigo-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Data-Driven</div>
                                <div class="text-gray-600">Analytics-based decisions</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-rocket text-indigo-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Innovation Focus</div>
                                <div class="text-gray-600">Cutting-edge solutions</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1552664730-dec69d88e8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="ICT Consultancy" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-indigo-600 text-white rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold mb-2">200+</div>
                        <div class="text-sm">Consulting Projects</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consultancy Services -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Consultancy Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Comprehensive technology consulting solutions for business transformation
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Digital Strategy</h3>
                    <p class="text-gray-600 mb-4">Comprehensive digital transformation roadmap and technology planning.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-indigo-600"></i>
                            <span>Technology Assessment</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-indigo-600"></i>
                            <span>Digital Roadmap</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-indigo-600"></i>
                            <span>Competitive Analysis</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Process Optimization</h3>
                    <p class="text-gray-600 mb-4">Business process analysis and optimization for maximum efficiency.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Workflow Analysis</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Automation Planning</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Efficiency Metrics</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Technology Planning</h3>
                    <p class="text-gray-600 mb-4">Strategic technology infrastructure planning and vendor selection.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center grid-cols-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Infrastructure Design</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Vendor Evaluation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Budget Optimization</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Training & Development</h3>
                    <p class="text-gray-600 mb-4">Staff training and capability development for technology adoption.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Technical Training</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Skills Development</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Change Management</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Performance Analytics</h3>
                    <p class="text-gray-600 mb-4">KPI development and business intelligence for data-driven decisions.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>KPI Development</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Dashboard Design</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>ROI Analysis</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Compliance & Risk</h3>
                    <p class="text-gray-600 mb-4">Regulatory compliance and risk management for business protection.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Compliance Audits</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Risk Assessment</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Policy Development</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consulting Process -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Consulting Process</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Structured approach for successful technology transformation
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Discovery</h3>
                    <p class="text-gray-600">Understanding your business, challenges, and opportunities for tailored solutions.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Analysis</h3>
                    <p class="text-gray-600">Comprehensive analysis of current systems and future requirements.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Strategy</h3>
                    <p class="text-gray-600">Developing actionable strategies and implementation roadmaps for success.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Implementation</h3>
                    <p class="text-gray-600">Guiding successful implementation and measuring business impact.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Metrics -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Proven Results</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Measurable business impact from our consulting engagements
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 text-center">
                    <div class="text-3xl font-bold text-green-600 mb-2">40%</div>
                    <p class="text-gray-600">Average Cost Reduction</p>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 text-center">
                    <div class="text-3xl font-bold text-blue-600 mb-2">3x</div>
                    <p class="text-gray-600">Productivity Increase</p>
                </div>
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 text-center">
                    <div class="text-3xl font-bold text-purple-600 mb-2">95%</div>
                    <p class="text-gray-600">Client Satisfaction</p>
                </div>
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 text-center">
                    <div class="text-3xl font-bold text-orange-600 mb-2">6 Months</div>
                    <p class="text-gray-600">Average ROI Timeline</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-indigo-600 to-indigo-800 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Transform Your Business Today</h2>
            <p class="text-xl text-indigo-100 mb-8 leading-relaxed">
                Let our expert consultants guide your digital transformation journey with proven strategies 
                and actionable insights that drive sustainable business growth.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-indigo-600 font-bold rounded-full hover:bg-gray-100 transition-colors duration-300">
                    <i class="fas fa-phone mr-2"></i>Get Free Consultation
                </a>
                <a href="{{ route('portfolio') }}#consulting-projects" class="px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-indigo-600 transition-colors duration-300">
                    <i class="fas fa-eye mr-2"></i>View Our Work
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
