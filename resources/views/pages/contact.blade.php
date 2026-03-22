@extends('layouts.app')

@section('title', 'Contact Us - JezDan Technology')
@section('description', 'Get in touch with JezDan Technology for expert digital solutions in Tanzania. Contact us for software development, web design, and IT consulting services.')

@section('styles')
<style>
    .contact-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .contact-card {
        transition: all 0.3s ease;
    }
    .contact-card:hover {
        transform: translateY(-5px);
    }
    .form-input {
        transition: all 0.3s ease;
    }
    .form-input:focus {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(59, 130, 246, 0.1);
    }
    .contact-method {
        transition: all 0.3s ease;
    }
    .contact-method:hover {
        transform: scale(1.05);
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="contact-hero py-32 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-white/20 text-white rounded-full text-sm font-bold tracking-widest uppercase mb-6 backdrop-blur-md border border-white/30">Get In Touch</span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-8 leading-tight font-heading">Contact <span class="text-blue-300">JezDan Technology</span></h1>
                <p class="text-xl md:text-2xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">
                    Ready to transform your business with innovative digital solutions? Let's discuss your project and create something amazing together.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#contact-form" class="px-10 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl">
                        Start Your Project
                    </a>
                    <a href="tel:+255123456789" class="px-10 py-4 bg-white/20 text-white font-bold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 backdrop-blur-md">
                        <i class="fas fa-phone mr-2"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Contact Information</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight font-heading">Get in Touch With Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We're here to help you with all your digital transformation needs. Reach out through any of the following channels.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Phone -->
                <div class="contact-method text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 hover:scale-110 transition-transform">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading">Phone</h3>
                    <p class="text-gray-600 mb-4">Call us for immediate assistance</p>
                    <a href="tel:+255123456789" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                        +255 [Your Number]
                    </a>
                </div>

                <!-- Email -->
                <div class="contact-method text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 hover:scale-110 transition-transform">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading">Email</h3>
                    <p class="text-gray-600 mb-4">Send us your project details</p>
                    <a href="mailto:info@jezdan.co.tz" class="text-green-600 font-semibold hover:text-green-700 transition-colors">
                        info@jezdan.co.tz
                    </a>
                </div>

                <!-- Location -->
                <div class="contact-method text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 hover:scale-110 transition-transform">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading">Location</h3>
                    <p class="text-gray-600 mb-4">Visit our office</p>
                    <span class="text-purple-600 font-semibold">
                        Dar es Salaam, Tanzania
                    </span>
                </div>

                <!-- Hours -->
                <div class="contact-method text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6 hover:scale-110 transition-transform">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-3 font-heading">Business Hours</h3>
                    <p class="text-gray-600 mb-2">Mon - Fri: 9:00 AM - 6:00 PM</p>
                    <p class="text-orange-600 font-semibold">Sat: 9:00 AM - 2:00 PM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div id="contact-form" data-aos="fade-right">
                    <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10">
                        <h3 class="text-3xl font-bold text-blue-900 mb-8 font-heading">Send Us a Message</h3>
                        
                        <form class="space-y-6" method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            
                            <!-- Name Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                    <input type="text" id="first_name" name="first_name" required
                                           class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                                           placeholder="John">
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                    <input type="text" id="last_name" name="last_name" required
                                           class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                                           placeholder="Doe">
                                </div>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required
                                       class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                                       placeholder="john@example.com">
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone"
                                       class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                                       placeholder="+255 123 456 789">
                            </div>

                            <!-- Company -->
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                                <input type="text" id="company" name="company"
                                       class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                                       placeholder="Your Company Ltd">
                            </div>

                            <!-- Service -->
                            <div>
                                <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interested In *</label>
                                <select id="service" name="service" required
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                                    <option value="">Select a service</option>
                                    <option value="software-development">Software Development</option>
                                    <option value="web-design">Web Design</option>
                                    <option value="sms-platform">SMS Platform</option>
                                    <option value="cybersecurity">Cybersecurity</option>
                                    <option value="it-consulting">IT Consulting</option>
                                    <option value="digital-marketing">Digital Marketing</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <!-- Budget -->
                            <div>
                                <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">Project Budget</label>
                                <select id="budget" name="budget"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                                    <option value="">Select budget range</option>
                                    <option value="500k-1m">500,000 - 1,000,000 TZS</option>
                                    <option value="1m-2m">1,000,000 - 2,000,000 TZS</option>
                                    <option value="2m-5m">2,000,000 - 5,000,000 TZS</option>
                                    <option value="5m+">5,000,000+ TZS</option>
                                </select>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Project Details *</label>
                                <textarea id="message" name="message" rows="5" required
                                          class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all resize-none"
                                          placeholder="Tell us about your project requirements, timeline, and any specific features you need..."></textarea>
                            </div>

                            <!-- Privacy Policy -->
                            <div class="flex items-start gap-3">
                                <input type="checkbox" id="privacy" name="privacy" required
                                       class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <label for="privacy" class="text-sm text-gray-600">
                                    I agree to the <a href="#" class="text-blue-600 hover:text-blue-700 underline">Privacy Policy</a> and consent to being contacted regarding my inquiry.
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex flex-col sm:flex-row gap-4">
                                <button type="submit" class="flex-1 px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-full hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                                    <i class="fas fa-paper-plane mr-2"></i> Send Message
                                </button>
                                <button type="reset" class="px-8 py-4 bg-gray-200 text-gray-700 font-semibold rounded-full hover:bg-gray-300 transition-all duration-300">
                                    Clear Form
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Map & Info -->
                <div data-aos="fade-left">
                    <!-- Map -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
                        <div class="h-96 bg-gray-200 relative">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7495549125!2d39.208!3d-6.792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDcnNTUuMiJTIDM5wrA1MicwOC4wIkU!5e0!3m2!1sen!2stz!4v1234567890"
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy"
                                class="w-full h-full">
                            </iframe>
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent pointer-events-none"></div>
                        </div>
                    </div>

                    <!-- Quick Contact Info -->
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl p-8 text-white">
                        <h4 class="text-2xl font-bold mb-6 font-heading">Quick Response Guaranteed</h4>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-md">
                                    <i class="fas fa-bolt text-yellow-400"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Response Time</p>
                                    <p class="text-blue-200">Within 2 business hours</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-md">
                                    <i class="fas fa-headset text-green-400"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">24/7 Support</p>
                                    <p class="text-blue-200">Emergency assistance available</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-md">
                                    <i class="fas fa-award text-purple-400"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Free Consultation</p>
                                    <p class="text-blue-200">No-obligation project assessment</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-white/20">
                            <p class="text-center text-blue-200 mb-4">Connect with us on social media</p>
                            <div class="flex justify-center gap-4">
                                <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white hover:text-blue-600 transition-all">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white hover:text-blue-600 transition-all">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white hover:text-blue-600 transition-all">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white hover:text-blue-600 transition-all">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Frequently Asked Questions</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight font-heading">Got Questions?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Find answers to common questions about our services and process.
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <!-- FAQ Items -->
                <div class="space-y-4">
                    <div class="bg-gray-50 rounded-xl overflow-hidden" data-aos="fade-up">
                        <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-100 transition-colors">
                            <span class="font-semibold text-gray-900">How long does a typical project take?</span>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4">
                            <p class="text-gray-600">Project timelines vary depending on complexity. A simple website might take 2-4 weeks, while custom software development can take 2-6 months. We provide detailed timelines during the planning phase.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                        <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-100 transition-colors">
                            <span class="font-semibold text-gray-900">What is your pricing structure?</span>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4">
                            <p class="text-gray-600">We offer flexible pricing models including fixed-price projects, hourly rates, and retainer agreements. Pricing depends on project scope, complexity, and timeline. Contact us for a customized quote.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                        <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-100 transition-colors">
                            <span class="font-semibold text-gray-900">Do you provide ongoing support?</span>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4">
                            <p class="text-gray-600">Yes, we offer comprehensive support packages including maintenance, updates, and technical assistance. We provide 24/7 emergency support and regular business hours support based on your needs.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                        <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-100 transition-colors">
                            <span class="font-semibold text-gray-900">Can you work with existing systems?</span>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4">
                            <p class="text-gray-600">Absolutely! We specialize in system integration and can work with your existing infrastructure. We'll assess your current systems and recommend the best approach for integration or migration.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                        <button class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-100 transition-colors">
                            <span class="font-semibold text-gray-900">What industries do you serve?</span>
                            <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-4">
                            <p class="text-gray-600">We work with businesses across various industries including finance, education, healthcare, retail, hospitality, and manufacturing. Our solutions are customized to meet industry-specific requirements.</p>
                        </div>
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
                <p class="text-xl mb-8 text-blue-100 leading-relaxed">Transform your business with our innovative digital solutions. Contact us today for a free consultation and project assessment.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#contact-form" class="px-10 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl">
                        Start Your Project
                    </a>
                    <a href="tel:+255123456789" class="px-10 py-4 bg-blue-700/30 text-white font-bold rounded-full border border-white/20 hover:bg-blue-700/50 transition-all duration-300 backdrop-blur-md">
                        <i class="fas fa-phone mr-2"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // FAQ Toggle
    document.querySelectorAll('.faq-toggle').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');
            
            // Close all other FAQs
            document.querySelectorAll('.faq-content').forEach(item => {
                if (item !== content) {
                    item.classList.add('hidden');
                    item.previousElementSibling.querySelector('i').classList.remove('rotate-180');
                }
            });
            
            // Toggle current FAQ
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });

    // Form Validation
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Basic client-side validation
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                } else {
                    field.classList.remove('border-red-500');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                // Scroll to first error
                const firstError = form.querySelector('.border-red-500');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
        
        // Remove error styling on input
        form.querySelectorAll('input, select, textarea').forEach(field => {
            field.addEventListener('input', () => {
                field.classList.remove('border-red-500');
            });
        });
    }

    // Smooth scroll to contact form
    document.querySelectorAll('a[href="#contact-form"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector('#contact-form');
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
@endsection
