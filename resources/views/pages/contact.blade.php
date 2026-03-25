@extends('layouts.app')

@section('title', 'Contact Us - Jezdan Technology')
@section('description', 'Contact Jezdan Technology in Moshi, Tanzania. Get in touch for reliable ICT solutions including web development, mobile apps, network installation, cybersecurity, and IT support.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
                <i class="fas fa-envelope text-yellow-400 mr-3"></i>
                <span class="text-sm font-semibold">Get in Touch with Our Expert Team</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Contact Us</h1>
            <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Ready to transform your business with cutting-edge ICT solutions? 
                Our expert team in Moshi, Tanzania is here to help you achieve your digital goals.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-clock mr-2"></i>24/7 Support
                </span>
                <span class="bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-shield-alt mr-2"></i>Secure & Reliable
                </span>
                <span class="bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-award mr-2"></i>Expert Team
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

<!-- Quick Contact Info -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Phone -->
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-blue-50 to-blue-100 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-4">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Call Us</h3>
                    <p class="text-gray-600 mb-2">+255 712 345 678</p>
                    <p class="text-sm text-gray-500">Mon-Fri: 8AM-6PM</p>
                </div>

                <!-- Email -->
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-green-50 to-green-100 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-4">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Email Us</h3>
                    <p class="text-gray-600 mb-2">info@jezdan.co.tz</p>
                    <p class="text-sm text-gray-500">24/7 Support</p>
                </div>

                <!-- WhatsApp -->
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-green-50 to-green-100 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-4">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">WhatsApp</h3>
                    <p class="text-gray-600 mb-2">+255 712 345 678</p>
                    <p class="text-sm text-gray-500">Instant Response</p>
                </div>

                <!-- Location -->
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-purple-50 to-purple-100 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Visit Us</h3>
                    <p class="text-gray-600 mb-2">Moshi, Kilimanjaro</p>
                    <p class="text-sm text-gray-500">Tanzania</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Fill out the form below and our team will get back to you within 24 hours
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <form action="{{ route('contact.submit') }}" method="POST" class="bg-white rounded-2xl shadow-lg p-8">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                       placeholder="John Doe">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                       placeholder="john@example.com">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                       placeholder="+255 123 456 789">
                            </div>
                            <div>
                                <label for="company" class="block text-gray-700 font-medium mb-2">Company Name</label>
                                <input type="text" id="company" name="company" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                       placeholder="Your Company Ltd">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="service" class="block text-gray-700 font-medium mb-2">Service Interested In *</label>
                            <select id="service" name="service" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300">
                                <option value="">Select a service</option>
                                <option value="web-development">Web Development</option>
                                <option value="mobile-app">Mobile App Development</option>
                                <option value="network-installation">Network Installation</option>
                                <option value="cybersecurity">Cybersecurity</option>
                                <option value="it-support">IT Support</option>
                                <option value="ict-consultancy">ICT Consultancy</option>
                                <option value="digital-marketing">Digital Marketing</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="budget" class="block text-gray-700 font-medium mb-2">Project Budget</label>
                            <select id="budget" name="budget" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300">
                                <option value="">Select budget range</option>
                                <option value="under-1m">Under TZS 1 Million</option>
                                <option value="1m-5m">TZS 1-5 Million</option>
                                <option value="5m-10m">TZS 5-10 Million</option>
                                <option value="10m-20m">TZS 10-20 Million</option>
                                <option value="over-20m">Over TZS 20 Million</option>
                                <option value="discuss">Discuss in person</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Project Details *</label>
                            <textarea id="message" name="message" rows="5" required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                      placeholder="Tell us about your project requirements, timeline, and any specific needs..."></textarea>
                        </div>

                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" name="privacy" required class="mr-2">
                                <span class="text-gray-700">I agree to the privacy policy and terms of service *</span>
                            </label>
                        </div>

                        <button type="submit" 
                                class="w-full px-8 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Why Choose Us?</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Expert Team</h4>
                                    <p class="text-gray-600 text-sm">10+ years of experience in ICT solutions</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">24/7 Support</h4>
                                    <p class="text-gray-600 text-sm">Round-the-clock technical assistance</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Local Expertise</h4>
                                    <p class="text-gray-600 text-sm">Deep understanding of Tanzanian market</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Office Hours</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Monday - Friday</span>
                                <span class="font-semibold text-gray-900">8:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Saturday</span>
                                <span class="font-semibold text-gray-900">9:00 AM - 2:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Sunday</span>
                                <span class="text-red-600 font-semibold">Closed</span>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Follow Us</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="https://facebook.com/jezdantechnology" target="_blank" 
                               class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                                <i class="fab fa-facebook-f text-blue-600"></i>
                                <span class="text-gray-700">Facebook</span>
                            </a>
                            <a href="https://linkedin.com/company/jezdantechnology" target="_blank" 
                               class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                                <i class="fab fa-linkedin-in text-blue-600"></i>
                                <span class="text-gray-700">LinkedIn</span>
                            </a>
                            <a href="https://instagram.com/jezdantechnology" target="_blank" 
                               class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                                <i class="fab fa-instagram text-blue-600"></i>
                                <span class="text-gray-700">Instagram</span>
                            </a>
                            <a href="https://wa.me/255712345678" target="_blank" 
                               class="flex items-center gap-3 p-3 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                                <i class="fab fa-whatsapp text-green-600"></i>
                                <span class="text-gray-700">WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Find Our Office</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Visit our headquarters in Moshi, Kilimanjaro for in-person consultations and project discussions
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Map -->
                <div class="bg-gray-200 rounded-2xl h-96 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-blue-200 opacity-50"></div>
                    <div class="relative text-center">
                        <i class="fas fa-map-marked-alt text-6xl text-blue-600 mb-4"></i>
                        <p class="text-gray-700 font-semibold">Interactive Map</p>
                        <p class="text-gray-600">Moshi, Kilimanjaro, Tanzania</p>
                        <button class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            <i class="fas fa-directions mr-2"></i>Get Directions
                        </button>
                    </div>
                </div>

                <!-- Address Details -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Office Address</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white flex-shrink-0">
                                <i class="fas fa-building"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Jezdan Technology</h4>
                                <p class="text-gray-600">ICT Solutions Provider</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Address</h4>
                                <p class="text-gray-600">Moshi Municipality</p>
                                <p class="text-gray-600">Kilimanjaro Region</p>
                                <p class="text-gray-600">Tanzania</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white flex-shrink-0">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Contact</h4>
                                <p class="text-gray-600">+255 712 345 678</p>
                                <p class="text-gray-600">info@jezdan.co.tz</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white flex-shrink-0">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Business Hours</h4>
                                <p class="text-gray-600">Mon-Fri: 8:00 AM - 6:00 PM</p>
                                <p class="text-gray-600">Saturday: 9:00 AM - 2:00 PM</p>
                                <p class="text-gray-600">Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Quick answers to common questions about our services
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">What services do you offer?</h3>
                    <p class="text-gray-600">We offer comprehensive ICT solutions including web development, mobile apps, network installation, cybersecurity, IT support, and digital marketing.</p>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">How long does a project take?</h3>
                    <p class="text-gray-600">Project timelines vary based on complexity. Simple websites take 2-4 weeks, while complex applications may take 2-6 months.</p>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Do you provide ongoing support?</h3>
                    <p class="text-gray-600">Yes, we offer 24/7 support and maintenance packages for all our clients to ensure smooth operations.</p>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">What are your payment terms?</h3>
                    <p class="text-gray-600">We offer flexible payment plans including 50% upfront and 50% on completion, with options for milestone-based payments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Project?</h2>
            <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                Join hundreds of Tanzanian businesses that have transformed their operations with our innovative ICT solutions. 
                Contact us today for a free consultation and quote.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+255712345678" class="px-8 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-colors duration-300">
                    <i class="fas fa-phone mr-2"></i>Call Now
                </a>
                <a href="https://wa.me/255712345678" target="_blank" class="px-8 py-4 bg-green-600 text-white font-bold rounded-full hover:bg-green-700 transition-colors duration-300">
                    <i class="fab fa-whatsapp mr-2"></i>WhatsApp Us
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-blue-600 transition-colors duration-300">
                    <i class="fas fa-envelope mr-2"></i>Email Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection