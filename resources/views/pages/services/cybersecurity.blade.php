@extends('layouts.app')

@section('title', 'Cybersecurity Services - Jezdan Technology')
@section('description', 'Professional cybersecurity services in Tanzania. Advanced security solutions including firewall, VPN, antivirus, and SIEM systems to protect your digital assets.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-red-900 via-red-800 to-red-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center bg-red-700 bg-opacity-50 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
                <i class="fas fa-shield-alt text-yellow-400 mr-3"></i>
                <span class="text-sm font-semibold">Advanced Cybersecurity</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Cybersecurity</h1>
            <p class="text-xl text-red-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Protect your digital assets with comprehensive security solutions that safeguard 
                your business against evolving cyber threats and ensure regulatory compliance in Tanzania.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-red-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>24/7 Protection
                </span>
                <span class="bg-red-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Advanced Threat Detection
                </span>
                <span class="bg-red-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>Compliance Ready
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Enterprise Security Solutions</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        We provide comprehensive cybersecurity services that protect your digital infrastructure, 
                        sensitive data, and business operations from sophisticated cyber threats targeting Tanzanian businesses.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        Our security experts combine cutting-edge technology with industry best practices 
                        to deliver robust protection that ensures business continuity and regulatory compliance.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-lock text-red-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Multi-Layer Security</div>
                                <div class="text-gray-600">Defense in depth</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-user-shield text-red-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Expert Team</div>
                                <div class="text-gray-600">Certified professionals</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1563013544-6574fb3f1e7d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Cybersecurity" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-red-600 text-white rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold mb-2">100+</div>
                        <div class="text-sm">Systems Secured</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Security Technologies -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Security Technologies</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We implement industry-leading security technologies for comprehensive protection
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center text-red-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-firewall"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Firewall</h3>
                    <p class="text-gray-600">Next-generation firewalls for network traffic control and threat prevention.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center text-red-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">VPN</h3>
                    <p class="text-gray-600">Secure virtual private networks for remote access and data protection.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center text-red-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-virus-slash"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Antivirus</h3>
                    <p class="text-gray-600">Advanced antivirus solutions with real-time threat detection and removal.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center text-red-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">SIEM</h3>
                    <p class="text-gray-600">Security Information and Event Management for comprehensive monitoring.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Security Services -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Security Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Comprehensive cybersecurity solutions to protect your digital assets
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Security Assessment</h3>
                    <p class="text-gray-600 mb-4">Comprehensive security audits and vulnerability assessments.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Risk Analysis</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Penetration Testing</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600"></i>
                            <span>Compliance Audits</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Data Protection</h3>
                    <p class="text-gray-600 mb-4">Encryption and backup solutions for sensitive data security.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Data Encryption</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Backup Solutions</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600"></i>
                            <span>Disaster Recovery</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Compliance Management</h3>
                    <p class="text-gray-600 mb-4">Ensure regulatory compliance with industry standards and best practices.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>GDPR Compliance</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Industry Standards</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600"></i>
                            <span>Policy Management</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Security Monitoring</h3>
                    <p class="text-gray-600 mb-4">24/7 monitoring and rapid incident response capabilities.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Real-time Monitoring</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Threat Detection</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600"></i>
                            <span>Incident Response</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Security Training</h3>
                    <p class="text-gray-600 mb-4">Employee security awareness training and phishing simulation programs.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Awareness Training</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Phishing Simulation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600"></i>
                            <span>Best Practices</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-teal-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Incident Response</h3>
                    <p class="text-gray-600 mb-4">Rapid response team and incident management procedures.</p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Emergency Response</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Forensic Analysis</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600"></i>
                            <span>Recovery Planning</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Security Process -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Security Implementation Process</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We follow industry standards for comprehensive security deployment
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-red-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Assessment</h3>
                    <p class="text-gray-600">Comprehensive security assessment and vulnerability analysis.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-red-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Protection</h3>
                    <p class="text-gray-600">Implementing multi-layered security controls and safeguards.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-red-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Monitoring</h3>
                    <p class="text-gray-600">Continuous monitoring and threat detection with SIEM solutions.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-red-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6">
                        <i class="fas fa-sync"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Response</h3>
                    <p class="text-gray-600">Rapid incident response and recovery procedures.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-red-600 to-red-800 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Protect Your Business Today</h2>
            <p class="text-xl text-red-100 mb-8 leading-relaxed">
                Don't wait for a security breach. Let us secure your digital assets and ensure 
                business continuity with our comprehensive cybersecurity solutions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-red-600 font-bold rounded-full hover:bg-gray-100 transition-colors duration-300">
                    <i class="fas fa-phone mr-2"></i>Get Security Audit
                </a>
                <a href="{{ route('portfolio') }}#security-projects" class="px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-red-600 transition-colors duration-300">
                    <i class="fas fa-eye mr-2"></i>View Our Work
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
