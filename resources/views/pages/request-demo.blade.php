@extends('layouts.app')

@section('title', 'Request Demo - Jezdan Technology')
@section('description', 'Request a live demo of our ICT solutions including web development, mobile apps, network services, and cybersecurity for Tanzanian businesses.')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
@endpush

@section('content')
<!-- Success/Error Messages -->
@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Demo Request Submitted!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#10b981',
            confirmButtonText: 'Great!',
            timer: 5000,
            timerProgressBar: true
        });
    </script>
@endif

@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Submission Error!',
            text: '{{ session('error') }}',
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Try Again',
            timer: 5000,
            timerProgressBar: true
        });
    </script>
@endif

<!-- Hero Section -->
<section class="bg-gradient-to-br from-green-900 via-green-800 to-green-900 text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                    <i class="fas fa-video mr-2"></i> Live Demo Available
                </span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Request a Live Demo</h1>
            <p class="text-xl text-green-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Experience our ICT solutions in action. Schedule a personalized live demonstration of our web applications, mobile apps, network solutions, and cybersecurity services.
            </p>
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-laptop text-green-300"></i>
                    <span class="text-white">Web Solutions</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-mobile-alt text-green-300"></i>
                    <span class="text-white">Mobile Apps</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-network-wired text-green-300"></i>
                    <span class="text-white">Network Services</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <i class="fas fa-shield-alt text-green-300"></i>
                    <span class="text-white">Cybersecurity</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#demo-form" class="px-10 py-4 bg-white text-green-600 font-bold rounded-full hover:bg-green-50 transition-all duration-300 shadow-xl">
                    Schedule Live Demo
                </a>
                <a href="tel:+255123456789" class="px-10 py-4 bg-green-600 text-white font-bold rounded-full border-2 border-green-600 hover:bg-green-700 transition-all duration-300">
                    <i class="fas fa-phone mr-2"></i> Call Us Now
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-gray-50" viewBox="0 0 1440 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 64L60 58.7C120 53 240 43 360 37.3C480 32 600 32 720 34.7C840 37 960 43 1080 45.3C1200 48 1320 48 1380 48L1440 48V64H0V64Z" fill="currentColor"/>
        </svg>
    </div>
</section>

<!-- Demo Options Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Choose Your Demo Type</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Select the ICT solution you'd like to experience in our live demonstration
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Web Development Demo -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group cursor-pointer" onclick="selectDemoType('web-development')">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Web Development Demo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600">
                            <span class="text-lg">🌐</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Web Development</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Live demo of custom websites, e-commerce platforms, and web applications</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">DURATION</p>
                        <p class="text-lg font-bold text-gray-900">30-45 minutes</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="selectDemoType('web-development')" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Select This Demo
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile App Demo -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group cursor-pointer" onclick="selectDemoType('mobile-app')">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Mobile App Demo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600">
                            <span class="text-lg">📱</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile Applications</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Interactive demo of iOS and Android apps with real-time features</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">DURATION</p>
                        <p class="text-lg font-bold text-gray-900">45-60 minutes</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="selectDemoType('mobile-app')" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Select This Demo
                        </button>
                    </div>
                </div>
            </div>

            <!-- Network Solutions Demo -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group cursor-pointer" onclick="selectDemoType('network-solutions')">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Network Solutions Demo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-orange-900/80 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600">
                            <span class="text-lg">🌐</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Network Solutions</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Live network setup demonstration and infrastructure monitoring showcase</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">DURATION</p>
                        <p class="text-lg font-bold text-gray-900">60-90 minutes</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="selectDemoType('network-solutions')" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Select This Demo
                        </button>
                    </div>
                </div>
            </div>

            <!-- Cybersecurity Demo -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group cursor-pointer" onclick="selectDemoType('cybersecurity')">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Cybersecurity Demo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-red-900/80 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center text-red-600">
                            <span class="text-lg">🛡️</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-500">★★★★★</span>
                            <span class="text-yellow-300">★★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cybersecurity</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">Security audit demonstration and threat protection showcase</p>
                    <div class="mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">DURATION</p>
                        <p class="text-lg font-bold text-gray-900">30-45 minutes</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="selectDemoType('cybersecurity')" class="flex-1 bg-green-600 text-white font-semibold py-2 px-3 rounded-lg hover:bg-green-700 transition-colors duration-300 text-sm text-center">
                            Select This Demo
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Demo Request Form -->
<section id="demo-form" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Schedule Your Live Demo</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Fill in your details below and our team will contact you to schedule a personalized demonstration
                </p>
            </div>
            
            <form id="demoRequestForm" action="{{ route('demo.submit') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Selected Demo Type -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Selected Demo Type *</label>
                    <input type="text" id="selectedDemoType" name="demo_type" required readonly
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                           placeholder="Select a demo type above">
                </div>
                
                <!-- Company Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Company Name *</label>
                    <input type="text" name="company_name" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                           placeholder="Your company name">
                </div>
                
                <!-- Contact Person -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Contact Person *</label>
                    <input type="text" name="contact_person" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                           placeholder="Your full name">
                </div>
                
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                    <input type="email" name="email" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                           placeholder="your.email@company.com">
                </div>
                
                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                    <input type="tel" name="phone" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                           placeholder="+255 XXX XXX XXX">
                </div>
                
                <!-- Preferred Date -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Date *</label>
                    <input type="date" name="preferred_date" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                </div>
                
                <!-- Preferred Time -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Time *</label>
                    <select name="preferred_time" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
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
                    <label class="block text-sm font-medium text-gray-700 mb-2">Additional Information</label>
                    <textarea name="message" rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                              placeholder="Tell us about your specific requirements or questions..."></textarea>
                </div>
            </form>
            
            
            <!-- Contact Information -->
            <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Instant Contact Options</h3>
                    
                    <div class="space-y-6">
                        <!-- Live Call Option -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900 mb-2">Call Us Immediately</h4>
                                    <p class="text-gray-600 text-sm mb-3">Speak directly with our demo specialist</p>
                                    <a href="tel:+255123456789" class="inline-flex items-center gap-2 bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                        <i class="fas fa-phone"></i>
                                        Call Now
                                    </a>
                                    <p class="text-xs text-gray-500 mt-2">Available: Mon-Fri, 9AM-6PM EAT</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- WhatsApp Option -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900 mb-2">WhatsApp Demo</h4>
                                    <p class="text-gray-600 text-sm mb-3">Quick demo via WhatsApp with screen sharing</p>
                                    <a href="https://wa.me/255123456789" target="_blank" class="inline-flex items-center gap-2 bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                        <i class="fab fa-whatsapp"></i>
                                        Chat on WhatsApp
                                    </a>
                                    <p class="text-xs text-gray-500 mt-2">Response time: Within 30 minutes</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Video Call Option -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                                    <i class="fas fa-video"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900 mb-2">Video Conference</h4>
                                    <p class="text-gray-600 text-sm mb-3">Schedule a video call with screen sharing and live demo</p>
                                    <button onclick="startVideoCall()" class="inline-flex items-center gap-2 bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                        <i class="fas fa-video"></i>
                                        Start Video Call
                                    </button>
                                    <p class="text-xs text-gray-500 mt-2">Supports: Zoom, Google Meet, Teams</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Office Visit Option -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900 mb-2">Office Visit</h4>
                                    <p class="text-gray-600 text-sm mb-3">Schedule an in-person demonstration at our office</p>
                                    <button onclick="scheduleOfficeVisit()" class="inline-flex items-center gap-2 bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                        <i class="fas fa-calendar"></i>
                                        Schedule Visit
                                    </button>
                                    <p class="text-xs text-gray-500 mt-2">Location: Dar es Salaam, Tanzania</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="mt-12 text-center">
                <button type="submit" form="demoRequestForm" class="px-12 py-4 bg-green-600 text-white text-lg font-bold rounded-full hover:bg-green-700 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                    <i class="fas fa-paper-plane mr-3"></i>
                    Submit Demo Request
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Why Choose Our Live Demo?</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Experience the power of our ICT solutions before making your decision
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mx-auto mb-4">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Live Interaction</h3>
                <p class="text-gray-600">See our solutions in action with real-time demonstrations</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 text-2xl mx-auto mb-4">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Expert Guidance</h3>
                <p class="text-gray-600">Our specialists walk you through every feature and benefit</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mx-auto mb-4">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Customized Experience</h3>
                <p class="text-gray-600">Tailored demos based on your specific business needs</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-600 text-2xl mx-auto mb-4">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Flexible Scheduling</h3>
                <p class="text-gray-600">Choose your preferred time and date for the demonstration</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center text-red-600 text-2xl mx-auto mb-4">
                    <i class="fas fa-question-circle"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Q&A Session</h3>
                <p class="text-gray-600">Get answers to all your questions during the live demo</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center text-indigo-600 text-2xl mx-auto mb-4">
                    <i class="fas fa-download"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Free Consultation</h3>
                <p class="text-gray-600">No-obligation consultation with our ICT experts</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-green-900 via-green-800 to-green-900 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Business?</h2>
            <p class="text-xl text-green-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Schedule your live demo today and discover how our ICT solutions can revolutionize your operations
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="tel:+255123456789" class="px-10 py-4 bg-white text-green-600 font-bold rounded-full border-2 border-green-600 hover:bg-green-50 transition-all duration-300">
                    <i class="fas fa-phone mr-2"></i> Call Now
                </a>
                <a href="https://wa.me/255123456789" target="_blank" class="px-10 py-4 bg-green-600 text-white font-bold rounded-full hover:bg-green-700 transition-all duration-300 shadow-xl">
                    <i class="fab fa-whatsapp mr-2"></i> WhatsApp Demo
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Demo type selection
function selectDemoType(type) {
    const demoTypes = {
        'web-development': 'Web Development - Live demo of custom websites and applications',
        'mobile-app': 'Mobile Applications - Interactive demo of iOS and Android apps',
        'network-solutions': 'Network Solutions - Live network setup demonstration',
        'cybersecurity': 'Cybersecurity - Security audit and threat protection showcase'
    };
    
    document.getElementById('selectedDemoType').value = demoTypes[type] || '';
    
    // Visual feedback
    document.querySelectorAll('.group.cursor-pointer').forEach(el => {
        el.classList.remove('ring-4', 'ring-green-500');
    });
    
    event.currentTarget.classList.add('ring-4', 'ring-green-500');
    
    // Show SweetAlert confirmation
    Swal.fire({
        icon: 'success',
        title: 'Demo Type Selected!',
        text: `You selected ${demoTypes[type]}`,
        confirmButtonColor: '#10b981',
        confirmButtonText: 'Great!',
        timer: 2000,
        timerProgressBar: true
    });
    
    // Scroll to form
    setTimeout(() => {
        document.getElementById('demo-form').scrollIntoView({ behavior: 'smooth' });
    }, 1000);
}

// Start video call
function startVideoCall() {
    const platforms = ['Zoom', 'Google Meet', 'Microsoft Teams'];
    
    Swal.fire({
        title: 'Choose Video Platform',
        input: 'select',
        inputOptions: {
            'Zoom': 'Zoom',
            'Google Meet': 'Google Meet',
            'Microsoft Teams': 'Microsoft Teams'
        },
        inputPlaceholder: 'Select a platform',
        showCancelButton: true,
        confirmButtonColor: '#10b981',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Start Call',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                icon: 'success',
                title: 'Video Call Scheduled!',
                text: `Starting ${result.value} video call... Our team will send you a meeting link shortly.`,
                confirmButtonColor: '#10b981',
                confirmButtonText: 'OK',
                timer: 3000,
                timerProgressBar: true
            });
            // Here you would integrate with actual video calling APIs
        }
    });
}

// Schedule office visit
function scheduleOfficeVisit() {
    Swal.fire({
        icon: 'info',
        title: 'Office Visit Request',
        text: 'Office visit scheduling... Our team will contact you to confirm the appointment details.',
        confirmButtonColor: '#10b981',
        confirmButtonText: 'OK',
        timer: 3000,
        timerProgressBar: true
    });
    // Here you would integrate with calendar APIs
}

// Submit demo request
function submitDemoRequest() {
    const form = document.getElementById('demoRequestForm');
    const formData = new FormData(form);
    
    // Validation
    if (!formData.get('demo_type') || !formData.get('company_name') || !formData.get('email')) {
        Swal.fire({
            icon: 'warning',
            title: 'Missing Information',
            text: 'Please fill in all required fields and select a demo type.',
            confirmButtonColor: '#f59e0b',
            confirmButtonText: 'OK'
        });
        return;
    }
    
    // Show loading state
    const submitBtn = document.querySelector('button[type="submit"]');
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i> Submitting...';
    submitBtn.disabled = true;
    
    // Submit form
    form.submit();
}

// Set minimum date to tomorrow
document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.querySelector('input[name="preferred_date"]');
    if (dateInput) {
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        dateInput.min = tomorrow.toISOString().split('T')[0];
    }
});
</script>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@endsection
