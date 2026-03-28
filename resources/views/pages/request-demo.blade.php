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
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Schedule Your Live Demo</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Fill in your details below and our team will contact you to schedule a personalized demonstration
                </p>
            </div>
            
            <!-- Form and Contact Information Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left: Form Section -->
                <div class="lg:col-span-2">
                    <div class="bg-gray-50 rounded-2xl p-8 shadow-lg">
                        <form id="demoRequestForm" action="{{ route('demo.submit') }}" method="POST" class="space-y-6">
                            @csrf
                            
                            <!-- Demo Type Selection -->
                            <div class="bg-white rounded-lg p-4 border border-gray-200">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Selected Demo Type *</label>
                                <div class="flex items-center gap-3">
                                    <input type="text" id="selectedDemoType" name="demo_type" required readonly
                                           class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors bg-gray-50"
                                           placeholder="Select a demo type above">
                                    <div class="text-sm text-gray-500">
                                        <i class="fas fa-info-circle"></i> Select from options above
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Company Information -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-building mr-1 text-green-600"></i> Company Name *
                                    </label>
                                    <input type="text" name="company_name" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                           placeholder="Your company name">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-users mr-1 text-green-600"></i> Company Size
                                    </label>
                                    <select name="company_size" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                                        <option value="">Select company size</option>
                                        <option value="1-10">1-10 employees</option>
                                        <option value="11-50">11-50 employees</option>
                                        <option value="51-200">51-200 employees</option>
                                        <option value="201-500">201-500 employees</option>
                                        <option value="500+">500+ employees</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Contact Person Information -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-user mr-1 text-green-600"></i> Contact Person *
                                    </label>
                                    <input type="text" name="contact_person" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                           placeholder="Your full name">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-briefcase mr-1 text-green-600"></i> Job Title
                                    </label>
                                    <input type="text" name="job_title"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                           placeholder="Your job title">
                                </div>
                            </div>
                            
                            <!-- Contact Information -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-envelope mr-1 text-green-600"></i> Email Address *
                                    </label>
                                    <input type="email" name="email" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                           placeholder="your.email@company.com">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-phone mr-1 text-green-600"></i> Phone Number *
                                    </label>
                                    <input type="tel" name="phone" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                           placeholder="+255 XXX XXX XXX">
                                </div>
                            </div>
                            
                            <!-- Location Information -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-map-marker-alt mr-1 text-green-600"></i> Country
                                    </label>
                                    <select name="country" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                                        <option value="">Select country</option>
                                        <option value="Tanzania" selected>Tanzania</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-city mr-1 text-green-600"></i> City
                                    </label>
                                    <input type="text" name="city"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                           placeholder="Your city">
                                </div>
                            </div>
                            
                            <!-- Scheduling Preferences -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-calendar mr-1 text-green-600"></i> Preferred Date *
                                    </label>
                                    <input type="date" name="preferred_date" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-clock mr-1 text-green-600"></i> Preferred Time *
                                    </label>
                                    <select name="preferred_time" required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                                        <option value="">Select preferred time</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Demo Preferences -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-users mr-1 text-green-600"></i> Number of Attendees
                                    </label>
                                    <select name="attendees" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                                        <option value="">Select number</option>
                                        <option value="1-5">1-5 people</option>
                                        <option value="6-10">6-10 people</option>
                                        <option value="11-20">11-20 people</option>
                                        <option value="20+">20+ people</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        <i class="fas fa-language mr-1 text-green-600"></i> Preferred Language
                                    </label>
                                    <select name="language" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                                        <option value="">Select language</option>
                                        <option value="English" selected>English</option>
                                        <option value="Swahili">Swahili</option>
                                        <option value="Both">Both English & Swahili</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Additional Information -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-comment-alt mr-1 text-green-600"></i> Additional Information
                                </label>
                                <textarea name="message" rows="4"
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                          placeholder="Tell us about your specific requirements, current challenges, or what you hope to achieve with our ICT solutions..."></textarea>
                            </div>
                            
                            <!-- Urgency Level -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-exclamation-triangle mr-1 text-green-600"></i> Project Urgency
                                </label>
                                <div class="flex gap-4">
                                    <label class="flex items-center">
                                        <input type="radio" name="urgency" value="low" class="mr-2">
                                        <span class="text-sm">Low (1-3 months)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="urgency" value="medium" class="mr-2" checked>
                                        <span class="text-sm">Medium (2-4 weeks)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="urgency" value="high" class="mr-2">
                                        <span class="text-sm">High (1-2 weeks)</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Right: Sidebar with Contact Options and Features -->
                <div class="space-y-8">
                    <!-- Instant Contact Options -->
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 shadow-lg border border-green-200">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-bolt text-green-600 mr-2"></i>
                            Instant Contact Options
                        </h3>
                        
                        <div class="space-y-4">
                            <!-- Live Call Option -->
                            <div class="bg-white rounded-lg p-4 border border-green-200 hover:shadow-md transition-shadow">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fas fa-phone text-sm"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 text-sm mb-1">Call Us Immediately</h4>
                                        <p class="text-gray-600 text-xs mb-2">Speak directly with our demo specialist</p>
                                        <a href="tel:+255123456789" class="inline-flex items-center gap-1 bg-green-600 text-white text-xs font-semibold py-1.5 px-3 rounded hover:bg-green-700 transition-colors">
                                            <i class="fas fa-phone text-xs"></i>
                                            Call Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- WhatsApp Option -->
                            <div class="bg-white rounded-lg p-4 border border-green-200 hover:shadow-md transition-shadow">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fab fa-whatsapp text-sm"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 text-sm mb-1">WhatsApp Demo</h4>
                                        <p class="text-gray-600 text-xs mb-2">Quick demo via WhatsApp with screen sharing</p>
                                        <a href="https://wa.me/255123456789" target="_blank" class="inline-flex items-center gap-1 bg-green-600 text-white text-xs font-semibold py-1.5 px-3 rounded hover:bg-green-700 transition-colors">
                                            <i class="fab fa-whatsapp text-xs"></i>
                                            Chat Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Video Call Option -->
                            <div class="bg-white rounded-lg p-4 border border-green-200 hover:shadow-md transition-shadow">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fas fa-video text-sm"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 text-sm mb-1">Video Conference</h4>
                                        <p class="text-gray-600 text-xs mb-2">Schedule a video call with screen sharing</p>
                                        <button onclick="startVideoCall()" class="inline-flex items-center gap-1 bg-green-600 text-white text-xs font-semibold py-1.5 px-3 rounded hover:bg-green-700 transition-colors">
                                            <i class="fas fa-video text-xs"></i>
                                            Start Call
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Office Visit Option -->
                            <div class="bg-white rounded-lg p-4 border border-green-200 hover:shadow-md transition-shadow">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fas fa-map-marker-alt text-sm"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 text-sm mb-1">Office Visit</h4>
                                        <p class="text-gray-600 text-xs mb-2">Schedule an in-person demonstration</p>
                                        <button onclick="scheduleOfficeVisit()" class="inline-flex items-center gap-1 bg-green-600 text-white text-xs font-semibold py-1.5 px-3 rounded hover:bg-green-700 transition-colors">
                                            <i class="fas fa-calendar text-xs"></i>
                                            Schedule
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Demo Benefits -->
                    <div class="bg-blue-50 rounded-2xl p-6 shadow-lg border border-blue-200">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-star text-blue-600 mr-2"></i>
                            Demo Benefits
                        </h3>
                        
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check-circle text-green-600 mt-0.5"></i>
                                <span class="text-sm text-gray-700">Live demonstration of features</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check-circle text-green-600 mt-0.5"></i>
                                <span class="text-sm text-gray-700">Q&A with ICT experts</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check-circle text-green-600 mt-0.5"></i>
                                <span class="text-sm text-gray-700">Customized solutions showcase</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check-circle text-green-600 mt-0.5"></i>
                                <span class="text-sm text-gray-700">Free consultation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check-circle text-green-600 mt-0.5"></i>
                                <span class="text-sm text-gray-700">No obligation required</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- What to Expect -->
                    <div class="bg-purple-50 rounded-2xl p-6 shadow-lg border border-purple-200">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-info-circle text-purple-600 mr-2"></i>
                            What to Expect
                        </h3>
                        
                        <div class="space-y-3">
                            <div class="flex items-start gap-2">
                                <div class="w-6 h-6 bg-purple-600 text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0">1</div>
                                <span class="text-sm text-gray-700">Initial consultation (10 min)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <div class="w-6 h-6 bg-purple-600 text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0">2</div>
                                <span class="text-sm text-gray-700">Live demo presentation (20-30 min)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <div class="w-6 h-6 bg-purple-600 text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0">3</div>
                                <span class="text-sm text-gray-700">Q&A session (10-15 min)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <div class="w-6 h-6 bg-purple-600 text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0">4</div>
                                <span class="text-sm text-gray-700">Next steps discussion (5 min)</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial -->
                    <div class="bg-yellow-50 rounded-2xl p-6 shadow-lg border border-yellow-200">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 bg-yellow-600 rounded-full flex items-center justify-center text-white">
                                <i class="fas fa-quote-left text-sm"></i>
                            </div>
                            <div class="ml-3">
                                <div class="flex text-yellow-500 text-xs">
                                    ★★★★★
                                </div>
                                <p class="text-xs text-gray-600 font-medium">John M., CEO</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700 italic">
                            "The live demo was exactly what we needed. The team showed us exactly how their solutions could solve our business challenges."
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="mt-12 text-center">
                <button type="submit" form="demoRequestForm" class="px-12 py-4 bg-green-600 text-white text-lg font-bold rounded-full hover:bg-green-700 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                    <i class="fas fa-paper-plane mr-3"></i>
                    Submit Demo Request
                </button>
                <p class="text-sm text-gray-500 mt-3">
                    <i class="fas fa-lock mr-1"></i>
                    Your information is secure and will never be shared
                </p>
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
