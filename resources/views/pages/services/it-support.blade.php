@extends('layouts.app')

@section('title', 'IT Support Services - Jezdan Technology')
@section('description', 'Professional IT support services in Tanzania. 24/7 remote support, on-site service, maintenance, and IT consulting for businesses of all sizes.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-orange-900 via-orange-800 to-orange-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/admin-data-center-typing-notebook-keyboard-using-automation-tools_lsc29m.jpg" alt="IT Support" class="w-full h-full object-cover opacity-40">
    </div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center bg-orange-700 bg-opacity-50 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
                <i class="fas fa-headset text-yellow-400 mr-3"></i>
                <span class="text-sm font-semibold">24/7 IT Support</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">IT Support</h1>
            <p class="text-xl text-orange-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Keep your business running smoothly with round-the-clock IT support, 
                proactive maintenance, and expert technical assistance for Tanzanian businesses.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-orange-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Remote Support
                </span>
                <span class="bg-orange-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>On-site Service
                </span>
                <span class="bg-orange-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Quick Response
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Comprehensive IT Support</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        We provide reliable IT support services that ensure your technology infrastructure 
                        runs smoothly, minimizing downtime and maximizing productivity for businesses across Tanzania.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        Our certified technicians offer both remote and on-site support, 
                        delivering fast solutions to keep your business operations running efficiently.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-orange-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">24/7 Availability</div>
                                <div class="text-gray-600">Round-the-clock support</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-tools text-orange-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Expert Team</div>
                                <div class="text-gray-600">Certified technicians</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1559028012-6d6d728e3a5c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="IT Support" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-orange-600 text-white rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold mb-2">1000+</div>
                        <div class="text-sm">Issues Resolved</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Services -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Support Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Comprehensive IT support solutions tailored to your business needs
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Remote Support</h3>
                    <p class="text-gray-600 mb-4">Instant remote assistance for software, hardware, and network issues.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Screen Sharing</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Remote Desktop</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Phone Support</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">On-site Service</h3>
                    <p class="text-gray-600 mb-4">Professional technicians visit your location for hands-on support.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Hardware Installation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Network Setup</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Equipment Repair</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Maintenance</h3>
                    <p class="text-gray-600 mb-4">Preventive maintenance and optimization of IT systems.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>System Updates</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Performance Tuning</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Backup Management</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Consulting</h3>
                    <p class="text-gray-600 mb-4">Strategic IT consulting to optimize your technology infrastructure.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Technology Planning</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Process Optimization</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Training Services</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Security Services</h3>
                    <p class="text-gray-600 mb-4">Comprehensive security solutions and vulnerability management.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Security Audits</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Malware Protection</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Data Recovery</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-teal-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Cloud Services</h3>
                    <p class="text-gray-600 mb-4">Cloud migration, management, and optimization services.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex services-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Cloud Migration</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Backup Solutions</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Disaster Recovery</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Process -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Support Process</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Efficient and effective IT support delivery for optimal results
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Contact</h3>
                    <p class="text-gray-600">Reach us via phone, email, or support portal for immediate assistance.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Diagnosis</h3>
                    <p class="text-gray-600">Quick problem identification and root cause analysis for fast resolution.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Resolution</h3>
                    <p class="text-gray-600">Efficient problem solving with minimal disruption to your business operations.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Follow-up</h3>
                    <p class="text-gray-600">Ensuring complete resolution and customer satisfaction with post-support checks.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Level Agreement -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Service Level Agreement</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Clear commitments and guaranteed response times for your peace of mind
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 text-center">
                    <h3 class="text-xl font-bold text-green-600 mb-4">Critical Issues</h3>
                    <div class="text-3xl font-bold text-gray-900 mb-2">1 Hour</div>
                    <p class="text-gray-600">Response time for critical system failures and emergencies</p>
                </div>
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 text-center">
                    <h3 class="text-xl font-bold text-orange-600 mb-4">High Priority</h3>
                    <div class="text-3xl font-bold text-gray-900 mb-2">4 Hours</div>
                    <p class="text-gray-600">Response time for high priority issues affecting business operations</p>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 text-center">
                    <h3 class="text-xl font-bold text-blue-600 mb-4">Standard Support</h3>
                    <div class="text-3xl font-bold text-gray-900 mb-2">24 Hours</div>
                    <p class="text-gray-600">Response time for routine support requests and general inquiries</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-orange-600 to-orange-800 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Need IT Support?</h2>
            <p class="text-xl text-orange-100 mb-8 leading-relaxed">
                Keep your business running smoothly with our reliable IT support services. 
                Contact us today for immediate assistance and proactive maintenance solutions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-orange-600 font-bold rounded-full hover:bg-gray-100 transition-colors duration-300">
                    <i class="fas fa-phone mr-2"></i>Get Support Now
                </a>
                <a href="tel:+255712345678" class="px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-orange-600 transition-colors duration-300">
                    <i class="fas fa-phone-alt mr-2"></i>Call Emergency Line
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
