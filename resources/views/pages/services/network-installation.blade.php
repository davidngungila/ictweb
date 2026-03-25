@extends('layouts.app')

@section('title', 'Network Installation Services - Jezdan Technology')
@section('description', 'Professional network installation services in Tanzania. Network setup, configuration, and maintenance using Cisco, Mikrotik, Ubiquiti, and Fortinet technologies.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-purple-900 via-purple-800 to-purple-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center bg-purple-700 bg-opacity-50 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
                <i class="fas fa-network-wired text-yellow-400 mr-3"></i>
                <span class="text-sm font-semibold">Network Installation</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Network Installation</h1>
            <p class="text-xl text-purple-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Build robust network infrastructure that ensures seamless connectivity, 
                enhances security, and supports your business growth across Tanzania.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-purple-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Enterprise Solutions
                </span>
                <span class="bg-purple-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>24/7 Support
                </span>
                <span class="bg-purple-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Scalable Design
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Professional Network Solutions</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        We design and implement comprehensive network infrastructures that provide reliable connectivity, 
                        robust security, and seamless performance for businesses of all sizes across Tanzania.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        From small office networks to enterprise-grade solutions, we ensure your business 
                        operates efficiently with minimal downtime and maximum productivity.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-shield-alt text-purple-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Secure Design</div>
                                <div class="text-gray-600">Enterprise-grade security</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-tachometer-alt text-purple-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">High Performance</div>
                                <div class="text-gray-600">Optimized for speed</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1558628013-5f0728b1b5c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Network Installation" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-purple-600 text-white rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold mb-2">200+</div>
                        <div class="text-sm">Networks Deployed</div>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Network Technologies</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We work with leading network equipment manufacturers for reliable solutions
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Cisco</h3>
                    <p class="text-gray-600">Enterprise networking equipment and security solutions</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center text-red-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Mikrotik</h3>
                    <p class="text-gray-600">Cost-effective routing and wireless solutions</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-broadcast-tower"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Ubiquiti</h3>
                    <p class="text-gray-600">High-performance wireless networking equipment</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Fortinet</h3>
                    <p class="text-gray-600">Advanced cybersecurity and network protection</p>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Network Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Comprehensive network solutions tailored to your business infrastructure needs
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Network Design</h3>
                    <p class="text-gray-600 mb-4">Custom network architecture planning and design for optimal performance.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Site Survey</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Network Mapping</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Capacity Planning</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Network Installation</h3>
                    <p class="text-gray-600 mb-4">Professional setup and configuration of network equipment.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Equipment Setup</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Configuration</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Testing & Validation</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Network Security</h3>
                    <p class="text-gray-600 mb-4">Comprehensive security solutions to protect your infrastructure.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Firewall Setup</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>VPN Configuration</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Access Control</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Network Maintenance</h3>
                    <p class="text-gray-600 mb-4">Ongoing support and maintenance for optimal network performance.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>24/7 Monitoring</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Regular Updates</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Troubleshooting</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Wireless Solutions</h3>
                    <p class="text-gray-600 mb-4">WiFi setup and optimization for seamless wireless connectivity.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>WiFi Planning</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Access Points</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Site Surveys</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-teal-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Network Optimization</h3>
                    <p class="text-gray-600 mb-4">Performance tuning and optimization for maximum efficiency.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Performance Analysis</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Traffic Shaping</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Load Balancing</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Network Implementation Process</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We follow industry best practices for seamless network deployment
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Site Assessment</h3>
                    <p class="text-gray-600">Comprehensive site survey and requirements analysis for optimal network design.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Network Design</h3>
                    <p class="text-gray-600">Creating detailed network architecture and implementation plans.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Implementation</h3>
                    <p class="text-gray-600">Professional installation and configuration with minimal disruption.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Testing & Handover</h3>
                    <p class="text-gray-600">Thorough testing and training before final project delivery.</p>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Recent Network Projects</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Explore our latest network installation projects for Tanzanian businesses
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1558628013-5f0728b1b5c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Corporate Network" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Corporate Network Setup</h3>
                        <p class="text-gray-600 mb-4">Enterprise-grade network infrastructure for corporate headquarters.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Cisco</span>
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">Mikrotik</span>
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">Fortinet</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1558642452-259ffd36142b8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Data Center" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Data Center Setup</h3>
                        <p class="text-gray-600 mb-4">Complete data center network infrastructure with redundancy.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Cisco</span>
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">Ubiquiti</span>
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm">VMware</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1559028012-6d6d728e3a5c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Smart Office" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Smart Office Network</h3>
                        <p class="text-gray-600 mb-4">Modern office network with IoT integration and automation.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Mikrotik</span>
                            <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm">Ubiquiti</span>
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">Cisco</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-purple-600 to-purple-800 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Upgrade Your Network?</h2>
            <p class="text-xl text-purple-100 mb-8 leading-relaxed">
                Let us design and implement a robust network infrastructure that powers your business growth. 
                Contact us today for a free site assessment and consultation.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-purple-600 font-bold rounded-full hover:bg-gray-100 transition-colors duration-300">
                    <i class="fas fa-phone mr-2"></i>Get Free Assessment
                </a>
                <a href="{{ route('portfolio') }}#network-projects" class="px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-purple-600 transition-colors duration-300">
                    <i class="fas fa-eye mr-2"></i>View Our Work
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
