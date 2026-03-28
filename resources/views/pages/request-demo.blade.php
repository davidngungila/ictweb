@extends('layouts.app')

@section('title', 'Request Demo - Jezdan Technology')
@section('description', 'Request a live demo of our ICT solutions including web development, mobile apps, network services, and cybersecurity for Tanzanian businesses.')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<style>
.demo-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
    position: relative;
    overflow: hidden;
}

.demo-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
    opacity: 0.3;
}

.demo-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.demo-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.demo-icon {
    width: 64px;
    height: 64px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    margin-bottom: 16px;
}

.contact-option {
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px;
    transition: all 0.3s ease;
}

.contact-option:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.1);
}

.form-input {
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    padding: 12px 16px;
    transition: all 0.3s ease;
    background: white;
}

.form-input:focus {
    border-color: #10b981;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
}

.submit-btn {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    border-radius: 50px;
    padding: 16px 48px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 14px 0 rgba(16, 185, 129, 0.4);
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px 0 rgba(16, 185, 129, 0.4);
}

.submit-btn:active {
    transform: translateY(0);
}

.feature-card {
    background: white;
    border-radius: 12px;
    padding: 32px 24px;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 20px -5px rgba(0, 0, 0, 0.1);
}

@media (max-width: 768px) {
    .submit-btn {
        width: 100%;
    }
}
</style>
@endpush

@section('content')
<!-- Success/Error Messages -->
@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Demo Request Submitted!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#10b981',
                confirmButtonText: 'Great!',
                timer: 5000,
                timerProgressBar: true,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
        });
    </script>
@endif

@if(session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Submission Error!',
                text: '{{ session('error') }}',
                confirmButtonColor: '#dc3545',
                confirmButtonText: 'Try Again',
                timer: 5000,
                timerProgressBar: true,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
        });
    </script>
@endif

<!-- Professional Hero Section -->
<section class="demo-hero text-white py-24 relative">
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-5xl mx-auto">
            <!-- Badge -->
            <div class="text-center mb-8">
                <span class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-md rounded-full text-sm font-semibold border border-white/20">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 6a2 2 0 012-2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2a2 2 0 012 2zm2 4a2 2 0 012-2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2a2 2 0 012 2z"/>
                        <path d="M8 16v-6h2v6h2v-6h2z"/>
                    </svg>
                    Live Professional Demo Available
                </span>
            </div>
            
            <!-- Main Heading -->
            <div class="text-center mb-12">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight tracking-tight">
                    Request Your
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                        Professional Demo
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 leading-relaxed max-w-4xl mx-auto mb-12 font-light">
                    Experience our cutting-edge ICT solutions in action. Schedule a personalized demonstration with our expert team and see how we can transform your business.
                </p>
            </div>
            
            <!-- Service Categories -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto mb-12">
                <div class="flex items-center justify-center p-4 bg-white/5 backdrop-blur-sm rounded-xl border border-white/10">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H3a1 1 0 01-1-1V4z"/>
                        <path d="M3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H3a1 1 0 01-1-1v-6z"/>
                        <path d="M13 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1h-6a1 1 0 01-1-1v-6z"/>
                    </svg>
                    <span class="text-sm font-medium">Web Solutions</span>
                </div>
                <div class="flex items-center justify-center p-4 bg-white/5 backdrop-blur-sm rounded-xl border border-white/10">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M7 2a2 2 0 00-2 2v3a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7a2 2 0 00-2-2z"/>
                        <path d="M5 11h10v2H5v-2z"/>
                        <path d="M7 15h6v2H7v-2z"/>
                    </svg>
                    <span class="text-sm font-medium">Mobile Apps</span>
                </div>
                <div class="flex items-center justify-center p-4 bg-white/5 backdrop-blur-sm rounded-xl border border-white/10">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H2a2 2 0 01-2-2V5z"/>
                        <path d="M5 9h10v2H5V9z"/>
                        <path d="M7 13h6v2H7v-2z"/>
                    </svg>
                    <span class="text-sm font-medium">Network Services</span>
                </div>
                <div class="flex items-center justify-center p-4 bg-white/5 backdrop-blur-sm rounded-xl border border-white/10">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 4v3h10V4H5z"/>
                        <path d="M3 8h14v2H3V8z"/>
                        <path d="M5 11h10v5H5v-5z"/>
                    </svg>
                    <span class="text-sm font-medium">Cybersecurity</span>
                </div>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#demo-types" class="inline-flex items-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-full hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4zm0-6a2 2 0 100-4 2 2 0 000 4z"/>
                        <path d="M10 2a8 8 0 100 16 8 8 0 000-16z"/>
                    </svg>
                    Browse Demo Options
                </a>
                <a href="tel:+255123456789" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold rounded-full hover:from-green-700 hover:to-green-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2a1 1 0 011 1v3a1 1 0 01-1 1H2a1 1 0 01-1-1V3z"/>
                        <path d="M7 8h6v2H7V8z"/>
                    </svg>
                    Call Expert Now
                </a>
            </div>
        </div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-10 left-10 w-20 h-20 bg-green-500/20 rounded-full blur-xl"></div>
    <div class="absolute top-32 right-20 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl"></div>
    <div class="absolute bottom-20 left-1/4 w-16 h-16 bg-purple-500/15 rounded-full blur-lg"></div>
</section>

<!-- Demo Selection Section -->
<section id="demo-types" class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Choose Your Demo Experience</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Select the ICT solution you'd like to experience in our live demonstration
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Web Development Demo -->
            <div class="demo-card cursor-pointer group" onclick="selectDemoType('web-development')">
                <div class="p-8">
                    <div class="demo-icon bg-gradient-to-br from-blue-500 to-blue-600 text-white mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H3a1 1 0 01-1-1V4z"/>
                            <path d="M5 9h10v2H5V9z"/>
                            <path d="M7 13h6v2H7v-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Web Development</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Custom websites, e-commerce platforms, and web applications with modern frameworks</p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-sm font-medium text-gray-500">Duration</span>
                        <span class="text-sm font-bold text-gray-900">30-45 min</span>
                    </div>
                    <div class="flex items-center gap-1 mb-4">
                        <span class="text-yellow-400">★★★★★</span>
                        <span class="text-yellow-200">★★</span>
                    </div>
                    <button class="w-full py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300">
                        Select This Demo
                    </button>
                </div>
            </div>

            <!-- Mobile App Demo -->
            <div class="demo-card cursor-pointer group" onclick="selectDemoType('mobile-app')">
                <div class="p-8">
                    <div class="demo-icon bg-gradient-to-br from-purple-500 to-purple-600 text-white mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7 2a2 2 0 00-2 2v3a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7a2 2 0 00-2-2z"/>
                            <path d="M5 11h10v2H5v-2z"/>
                            <path d="M7 15h6v2H7v-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile Applications</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">iOS and Android apps with native performance and real-time features</p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-sm font-medium text-gray-500">Duration</span>
                        <span class="text-sm font-bold text-gray-900">45-60 min</span>
                    </div>
                    <div class="flex items-center gap-1 mb-4">
                        <span class="text-yellow-400">★★★★★</span>
                        <span class="text-yellow-200">★★</span>
                    </div>
                    <button class="w-full py-3 bg-gradient-to-r from-purple-600 to-purple-700 text-white font-semibold rounded-lg hover:from-purple-700 hover:to-purple-800 transition-all duration-300">
                        Select This Demo
                    </button>
                </div>
            </div>

            <!-- Network Solutions Demo -->
            <div class="demo-card cursor-pointer group" onclick="selectDemoType('network-solutions')">
                <div class="p-8">
                    <div class="demo-icon bg-gradient-to-br from-orange-500 to-orange-600 text-white mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H2a2 2 0 01-2-2V5z"/>
                            <path d="M5 9h10v2H5V9z"/>
                            <path d="M7 13h6v2H7v-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Network Solutions</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Infrastructure setup, security configuration, and 24/7 monitoring</p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-sm font-medium text-gray-500">Duration</span>
                        <span class="text-sm font-bold text-gray-900">60-90 min</span>
                    </div>
                    <div class="flex items-center gap-1 mb-4">
                        <span class="text-yellow-400">★★★★★</span>
                        <span class="text-yellow-200">★★</span>
                    </div>
                    <button class="w-full py-3 bg-gradient-to-r from-orange-600 to-orange-700 text-white font-semibold rounded-lg hover:from-orange-700 hover:to-orange-800 transition-all duration-300">
                        Select This Demo
                    </button>
                </div>
            </div>

            <!-- Cybersecurity Demo -->
            <div class="demo-card cursor-pointer group" onclick="selectDemoType('cybersecurity')">
                <div class="p-8">
                    <div class="demo-icon bg-gradient-to-br from-red-500 to-red-600 text-white mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 4v3h10V4H5z"/>
                            <path d="M3 8h14v2H3V8z"/>
                            <path d="M5 11h10v5H5v-5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cybersecurity</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Security audits, threat protection, and compliance management</p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-sm font-medium text-gray-500">Duration</span>
                        <span class="text-sm font-bold text-gray-900">30-45 min</span>
                    </div>
                    <div class="flex items-center gap-1 mb-4">
                        <span class="text-yellow-400">★★★★★</span>
                        <span class="text-yellow-200">★★</span>
                    </div>
                    <button class="w-full py-3 bg-gradient-to-r from-red-600 to-red-700 text-white font-semibold rounded-lg hover:from-red-700 hover:to-red-800 transition-all duration-300">
                        Select This Demo
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Professional Form Section -->
<section id="demo-form" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Schedule Your Professional Demo</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Fill in your details below and our expert team will contact you to schedule a personalized demonstration
                </p>
            </div>
            
            <form id="demoRequestForm" action="{{ route('demo.submit') }}" method="POST" class="space-y-8">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        <!-- Selected Demo Type -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Selected Demo Type *</label>
                            <input type="text" id="selectedDemoType" name="demo_type" required readonly
                                   class="form-input w-full text-gray-900 font-medium"
                                   placeholder="Select a demo type above">
                        </div>
                        
                        <!-- Company Name -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Company Name *</label>
                            <input type="text" name="company_name" required
                                   class="form-input w-full"
                                   placeholder="Your company name">
                        </div>
                        
                        <!-- Contact Person -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Contact Person *</label>
                            <input type="text" name="contact_person" required
                                   class="form-input w-full"
                                   placeholder="Your full name">
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Email Address *</label>
                            <input type="email" name="email" required
                                   class="form-input w-full"
                                   placeholder="your.email@company.com">
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class="space-y-6">
                        <!-- Phone -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Phone Number *</label>
                            <input type="tel" name="phone" required
                                   class="form-input w-full"
                                   placeholder="+255 XXX XXX XXX">
                        </div>
                        
                        <!-- Preferred Date -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Preferred Date *</label>
                            <input type="date" name="preferred_date" required
                                   class="form-input w-full">
                        </div>
                        
                        <!-- Preferred Time -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Preferred Time *</label>
                            <select name="preferred_time" required
                                    class="form-input w-full">
                                <option value="">Select preferred time</option>
                                <option value="09:00">09:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="14:00">02:00 PM</option>
                                <option value="15:00">03:00 PM</option>
                                <option value="16:00">04:00 PM</option>
                            </select>
                        </div>
                        
                        <!-- Message -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Additional Information</label>
                            <textarea name="message" rows="4"
                                      class="form-input w-full resize-none"
                                      placeholder="Tell us about your specific requirements or questions..."></textarea>
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center mt-12">
                    <button type="submit" class="submit-btn text-white text-lg">
                        <svg class="w-5 h-5 mr-2 inline-block" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169.945l5.581-11.204a1 1 0 00.925.793l-4.293 8.585a1 1 0 00-.925.793l-4.293-8.585a1 1 0 00-.925-.793L8.19 3.498a1 1 0 00-1.169-.945l7-14z"/>
                        </svg>
                        Submit Demo Request
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Instant Contact Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Instant Contact Options</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Get in touch with our experts immediately through multiple channels
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Phone Call -->
                <div class="contact-option text-center">
                    <div class="demo-icon bg-gradient-to-br from-green-500 to-green-600 text-white mx-auto mb-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2a1 1 0 011 1v3a1 1 0 01-1 1H2a1 1 0 01-1-1V3z"/>
                            <path d="M7 8h6v2H7V8z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Call Us</h3>
                    <p class="text-gray-600 mb-4">Speak directly with our demo specialist</p>
                    <a href="tel:+255123456789" class="inline-flex items-center px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition-all duration-300">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2a1 1 0 011 1v3a1 1 0 01-1 1H2a1 1 0 01-1-1V3z"/>
                            <path d="M7 8h6v2H7V8z"/>
                        </svg>
                        Call Now
                    </a>
                    <p class="text-xs text-gray-500 mt-2">Mon-Fri, 9AM-6PM EAT</p>
                </div>

                <!-- WhatsApp -->
                <div class="contact-option text-center">
                    <div class="demo-icon bg-gradient-to-br from-green-500 to-green-600 text-white mx-auto mb-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 2a6 6 0 00-6 6v6a6 6 0 0012 0V8a6 6 0 00-6-6z"/>
                            <path d="M10 12h2v2h-2v-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">WhatsApp Demo</h3>
                    <p class="text-gray-600 mb-4">Quick demo via WhatsApp with screen sharing</p>
                    <a href="https://wa.me/255123456789" target="_blank" class="inline-flex items-center px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition-all duration-300">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 2a6 6 0 00-6 6v6a6 6 0 0012 0V8a6 6 0 00-6-6z"/>
                            <path d="M10 12h2v2h-2v-2z"/>
                        </svg>
                        Chat on WhatsApp
                    </a>
                    <p class="text-xs text-gray-500 mt-2">Response within 30 minutes</p>
                </div>

                <!-- Video Conference -->
                <div class="contact-option text-center">
                    <div class="demo-icon bg-gradient-to-br from-blue-500 to-blue-600 text-white mx-auto mb-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H2a2 2 0 01-2-2V6z"/>
                            <path d="M7 11h6v2H7v-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Video Conference</h3>
                    <p class="text-gray-600 mb-4">Schedule a video call with screen sharing</p>
                    <button onclick="startVideoCall()" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H2a2 2 0 01-2-2V6z"/>
                            <path d="M7 11h6v2H7v-2z"/>
                        </svg>
                        Start Video Call
                    </button>
                    <p class="text-xs text-gray-500 mt-2">Zoom, Meet, Teams</p>
                </div>

                <!-- Office Visit -->
                <div class="contact-option text-center">
                    <div class="demo-icon bg-gradient-to-br from-purple-500 to-purple-600 text-white mx-auto mb-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5.05 4.05a1 1 0 010 1.414L8 8.414V15a1 1 0 01-1 1H4a1 1 0 01-1-1V8.414L2.95 4.95a1 1 0 010-1.414z"/>
                            <path d="M13 16v-1h1v1h-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Office Visit</h3>
                    <p class="text-gray-600 mb-4">In-person demonstration at our office</p>
                    <button onclick="scheduleOfficeVisit()" class="inline-flex items-center px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition-all duration-300">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6 2a1 1 0 00-1 1h8a1 1 0 001 1v10a1 1 0 001 1H6a1 1 0 01-1-1V2z"/>
                            <path d="M8 12h4v2H8v-2z"/>
                        </svg>
                        Schedule Visit
                    </button>
                    <p class="text-xs text-gray-500 mt-2">Dar es Salaam, Tanzania</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Why Choose Our Professional Demo?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Experience the power of our ICT solutions with expert guidance
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="feature-card">
                <div class="demo-icon bg-gradient-to-br from-blue-500 to-blue-600 text-white mx-auto mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4zm0-6a2 2 0 100-4 2 2 0 000 4z"/>
                        <path d="M10 2a8 8 0 100 16 8 8 0 000-16z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Live Interaction</h3>
                <p class="text-gray-600">See our solutions in action with real-time demonstrations and expert guidance</p>
            </div>
            
            <div class="feature-card">
                <div class="demo-icon bg-gradient-to-br from-green-500 to-green-600 text-white mx-auto mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zm-9 3a9 9 0 1118 0 9 9 0 01-18 0z"/>
                        <path d="M9 10a1 1 0 100-2 1 1 0 000 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Expert Guidance</h3>
                <p class="text-gray-600">Our specialists walk you through every feature and answer all your questions</p>
            </div>
            
            <div class="feature-card">
                <div class="demo-icon bg-gradient-to-br from-purple-500 to-purple-600 text-white mx-auto mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 7H7l6 6v-2l-6-6v2z"/>
                        <path d="M11 11H6l7 7v-2l-7-7v2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Customized Experience</h3>
                <p class="text-gray-600">Tailored demos based on your specific business needs and requirements</p>
            </div>
            
            <div class="feature-card">
                <div class="demo-icon bg-gradient-to-br from-orange-500 to-orange-600 text-white mx-auto mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 18a8 8 0 100-16 8 8 0 000 16z"/>
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Flexible Scheduling</h3>
                <p class="text-gray-600">Choose your preferred time and date for the demonstration</p>
            </div>
            
            <div class="feature-card">
                <div class="demo-icon bg-gradient-to-br from-red-500 to-red-600 text-white mx-auto mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18 10a8 8 0 11-16 0v8a8 8 0 0116 0v-8z"/>
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Q&A Session</h3>
                <p class="text-gray-600">Get answers to all your questions during the live demo session</p>
            </div>
            
            <div class="feature-card">
                <div class="demo-icon bg-gradient-to-br from-indigo-500 to-indigo-600 text-white mx-auto mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 17a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H3a1 1 0 01-1-1v-2z"/>
                        <path d="M7 11h6v2H7v-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Free Consultation</h3>
                <p class="text-gray-600">No-obligation consultation with our ICT experts</p>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-20 bg-gradient-to-br from-gray-900 to-black text-white">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Transform Your Business?</h2>
            <p class="text-xl text-gray-300 leading-relaxed max-w-4xl mx-auto mb-12">
                Schedule your professional demo today and discover how our ICT solutions can revolutionize your operations and drive growth
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="tel:+255123456789" class="inline-flex items-center px-10 py-4 bg-white text-gray-900 font-bold rounded-full hover:bg-gray-50 transition-all duration-300 shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2a1 1 0 011 1v3a1 1 0 01-1 1H2a1 1 0 01-1-1V3z"/>
                        <path d="M7 8h6v2H7V8z"/>
                    </svg>
                    Call Expert Now
                </a>
                <a href="#demo-form" class="inline-flex items-center px-10 py-4 bg-gradient-to-r from-green-600 to-green-700 text-white font-bold rounded-full hover:from-green-700 hover:to-green-800 transition-all duration-300 shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169.945l5.581-11.204a1 1 0 00.925.793l-4.293 8.585a1 1 0 00-.925.793l-4.293-8.585a1 1 0 00-.925-.793L8.19 3.498a1 1 0 00-1.169-.945l7-14z"/>
                    </svg>
                    Schedule Demo
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Demo type selection with enhanced feedback
function selectDemoType(type) {
    const demoTypes = {
        'web-development': 'Web Development - Live demo of custom websites and applications',
        'mobile-app': 'Mobile Applications - Interactive demo of iOS and Android apps',
        'network-solutions': 'Network Solutions - Live network setup demonstration',
        'cybersecurity': 'Cybersecurity - Security audit and threat protection showcase'
    };
    
    document.getElementById('selectedDemoType').value = demoTypes[type] || '';
    
    // Remove previous selections
    document.querySelectorAll('.demo-card').forEach(el => {
        el.classList.remove('ring-4', 'ring-green-500', 'ring-offset-4');
    });
    
    // Add selection to current card
    event.currentTarget.classList.add('ring-4', 'ring-green-500', 'ring-offset-4');
    
    // Show enhanced SweetAlert confirmation
    Swal.fire({
        icon: 'success',
        title: 'Demo Type Selected!',
        text: `You've selected: ${demoTypes[type]}`,
        confirmButtonColor: '#10b981',
        confirmButtonText: 'Continue to Form',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        },
        timer: 3000,
        timerProgressBar: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('demo-form').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
}

// Enhanced video call function
function startVideoCall() {
    Swal.fire({
        title: 'Choose Video Platform',
        html: `
            <div class="text-left">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Select your preferred platform:</label>
                    <select id="platform-select" class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                        <option value="">Choose a platform</option>
                        <option value="Zoom">🎥 Zoom</option>
                        <option value="Google Meet">📹 Google Meet</option>
                        <option value="Microsoft Teams">💼 Microsoft Teams</option>
                        <option value="Other">🔗 Other</option>
                    </select>
                </div>
            </div>
        `,
        showCancelButton: true,
        confirmButtonColor: '#10b981',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Start Video Call',
        cancelButtonText: 'Cancel',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            const platform = document.getElementById('platform-select').value;
            if (platform) {
                Swal.fire({
                    icon: 'success',
                    title: 'Video Call Scheduled!',
                    html: `
                        <div class="text-left">
                            <p class="mb-2">✅ <strong>${platform}</strong> video call scheduled</p>
                            <p class="text-sm text-gray-600">Our team will send you a meeting link shortly.</p>
                            <p class="text-xs text-gray-500 mt-2">Check your email for the meeting invitation</p>
                        </div>
                    `,
                    confirmButtonColor: '#10b981',
                    confirmButtonText: 'Got it!',
                    timer: 4000,
                    timerProgressBar: true
                });
            }
        }
    });
}

// Enhanced office visit function
function scheduleOfficeVisit() {
    Swal.fire({
        title: 'Schedule Office Visit',
        html: `
            <div class="text-left">
                <div class="mb-4">
                    <p class="text-sm text-gray-600 mb-2">📍 <strong>Location:</strong> Dar es Salaam, Tanzania</p>
                    <p class="text-sm text-gray-600 mb-2">🕒 <strong>Hours:</strong> Mon-Fri, 9AM-6PM EAT</p>
                    <p class="text-sm text-gray-600">📞 <strong>Contact:</strong> +255 123 456 789</p>
                </div>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>Next Steps:</strong> Our team will contact you within 24 hours to confirm your appointment.</p>
                </div>
            </div>
        `,
        confirmButtonColor: '#10b981',
        confirmButtonText: 'Schedule Visit',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    });
}

// Set minimum date to tomorrow
document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.querySelector('input[name="preferred_date"]');
    if (dateInput) {
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        dateInput.min = tomorrow.toISOString().split('T')[0];
        
        // Set max date to 3 months from now
        const maxDate = new Date();
        maxDate.setMonth(maxDate.getMonth() + 3);
        dateInput.max = maxDate.toISOString().split('T')[0];
    }
});
</script>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@endsection