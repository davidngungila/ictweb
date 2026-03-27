@extends('layouts.app')

@section('title', 'About Us - Jezdan Technology')
@section('description', 'Learn about Jezdan Technology - our company overview, vision, mission, core values, and why we are the trusted ICT solutions provider in Tanzania.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-6 py-3 mb-8">
                <i class="fas fa-trophy text-yellow-400 mr-3"></i>
                <span class="text-sm font-semibold">10+ Years of Excellence in ICT Solutions</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">About Jezdan Technology</h1>
            <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Transforming businesses across Tanzania through innovative technology solutions, 
                digital expertise, and unwavering commitment to excellence since 2014.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>ISO Certified
                </span>
                <span class="bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-users mr-2"></i>50+ Expert Professionals
                </span>
                <span class="bg-blue-700 bg-opacity-50 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                    <i class="fas fa-globe-africa mr-2"></i>Pan-Tanzania Presence
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

<!-- Statistics Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-blue-600 mb-2">500+</div>
                <div class="text-gray-600">Projects Completed</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-blue-600 mb-2">300+</div>
                <div class="text-gray-600">Happy Clients</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-blue-600 mb-2">10M+</div>
                <div class="text-gray-600">Lines of Code</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-blue-600 mb-2">4.9/5</div>
                <div class="text-gray-600">Client Rating</div>
            </div>
        </div>
    </div>
</section>

<!-- Company Overview -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Company Overview</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Jezdan Technology is a premier ICT solutions provider based in Tanzania, dedicated to delivering cutting-edge technology services to businesses of all sizes. Since our inception in 2014, we have established ourselves as a reliable partner for digital transformation across East Africa.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Our team of 50+ skilled professionals combines deep technical expertise with comprehensive understanding of local business environments, ensuring solutions that are not only technologically advanced but also practical and effective for the Tanzanian and African markets.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Headquarters</div>
                                <div class="text-gray-600">Dar es Salaam, Tanzania</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-users text-blue-600"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Team Size</div>
                                <div class="text-gray-600">50+ Professionals</div>
                            </div>
                        </div>
                    </div>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        We pride ourselves on delivering projects on time, within budget, and to the highest international standards, helping our clients achieve their business objectives through innovative technology solutions.
                    </p>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1603726838662-fb4c4f5c7c1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="About Jezdan Technology" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-blue-600 text-white rounded-2xl p-6 shadow-xl">
                        <div class="text-3xl font-bold mb-2">10+</div>
                        <div class="text-sm">Years of Excellence</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Vision & Mission</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Guided by clear principles and ambitious goals for Tanzania's digital future
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Vision -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-8">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Vision</h3>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        To be the leading ICT solutions provider in Tanzania and East Africa, empowering businesses with innovative technology that drives growth, efficiency, and competitive advantage in the digital age.
                    </p>
                    <ul class="text-left space-y-3 text-gray-600">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-blue-600"></i>
                            <span>Pan-African technology leadership</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-blue-600"></i>
                            <span>Digital transformation catalyst</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-blue-600"></i>
                            <span>Innovation-driven growth</span>
                        </li>
                    </ul>
                </div>

                <!-- Mission -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 text-center">
                    <div class="w-20 h-20 bg-green-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-8">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Mission</h3>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        To provide reliable, innovative, and affordable ICT solutions that transform business operations, enhance productivity, and enable our clients to achieve their strategic objectives through technology.
                    </p>
                    <ul class="text-left space-y-3 text-gray-600">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-600"></i>
                            <span>Client-centric solutions</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-600"></i>
                            <span>Quality and reliability</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-600"></i>
                            <span>Affordable innovation</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Core Values</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    The principles that guide our actions and define our culture
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Integrity -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Integrity</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        We conduct business with honesty, transparency, and ethical principles in all our interactions.
                    </p>
                </div>

                <!-- Excellence -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Excellence</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        We strive for the highest quality standards in every project and service we deliver.
                    </p>
                </div>

                <!-- Innovation -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Innovation</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        We embrace creativity and cutting-edge technology to solve complex business challenges.
                    </p>
                </div>

                <!-- Customer Focus -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-600 text-2xl mx-auto mb-6">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Customer Focus</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Our clients' success is our success; we prioritize their needs above all else.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Why Choose Jezdan Technology?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Discover what makes us the preferred ICT partner for businesses across Tanzania
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Local Expertise -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Local Expertise</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Deep understanding of Tanzanian business environment, regulations, and market dynamics.
                    </p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600 text-xs"></i>
                            <span>Local market knowledge</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600 text-xs"></i>
                            <span>Regulatory compliance</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-blue-600 text-xs"></i>
                            <span>Cultural understanding</span>
                        </li>
                    </ul>
                </div>

                <!-- Expert Team -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Team</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        50+ skilled professionals with extensive experience in diverse technology domains.
                    </p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                            <span>Certified professionals</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                            <span>Continuous training</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                            <span>Domain expertise</span>
                        </li>
                    </ul>
                </div>

                <!-- Quality Solutions -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Quality Solutions</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        High-quality services that meet and exceed international standards and best practices.
                    </p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600 text-xs"></i>
                            <span>ISO certified processes</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600 text-xs"></i>
                            <span>Quality assurance</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-purple-600 text-xs"></i>
                            <span>Best practices</span>
                        </li>
                    </ul>
                </div>

                <!-- Affordable Pricing -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Affordable Pricing</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Competitive rates without compromising on quality or service delivery standards.
                    </p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600 text-xs"></i>
                            <span>Transparent pricing</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600 text-xs"></i>
                            <span>Value for money</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-orange-600 text-xs"></i>
                            <span>Flexible packages</span>
                        </li>
                    </ul>
                </div>

                <!-- Timely Delivery -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Timely Delivery</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Projects delivered on time, every time, with efficient project management.
                    </p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600 text-xs"></i>
                            <span>Agile methodology</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600 text-xs"></i>
                            <span>Project tracking</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-red-600 text-xs"></i>
                            <span>On-time guarantee</span>
                        </li>
                    </ul>
                </div>

                <!-- Ongoing Support -->
                <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-teal-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-life-ring"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">24/7 Support</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Round-the-clock support and maintenance services to ensure business continuity.
                    </p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600 text-xs"></i>
                            <span>24/7 availability</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600 text-xs"></i>
                            <span>Quick response time</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-teal-600 text-xs"></i>
                            <span>Proactive monitoring</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Team Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Leadership Team</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Meet the visionary leaders driving Jezdan Technology's success
                </p>
            </div>

            <!-- GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                <!-- CEO -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <h3 class="text-lg font-bold text-white">Jeremia Thomas</h3>
                            <p class="text-blue-200 text-sm">Chief Executive Officer</p>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-gray-600 text-sm mb-4">
                            15+ years in tech leadership and digital transformation.
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <!-- CTO -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1507591064344-4c6ce005b128?auto=format&fit=crop&w=400&q=80" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <h3 class="text-lg font-bold text-white">Michael Johnson</h3>
                            <p class="text-blue-200 text-sm">Chief Technology Officer</p>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-gray-600 text-sm mb-4">
                            Expert in cloud systems, cybersecurity, and innovation.
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <!-- COO (UPDATED) -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <h3 class="text-lg font-bold text-white">Sarah Mwangi</h3>
                            <p class="text-blue-200 text-sm">Chief Operating Officer</p>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-gray-600 text-sm mb-4">
                            Operations expert focused on efficiency, execution, and growth.
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <!-- CFO -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&w=400&q=80" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <h3 class="text-lg font-bold text-white">Daniel Kimaro</h3>
                            <p class="text-blue-200 text-sm">Chief Financial Officer</p>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-gray-600 text-sm mb-4">
                            Financial strategist ensuring sustainable growth.
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Head of Development -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=400&q=80" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <h3 class="text-lg font-bold text-white">Amina Hassan</h3>
                            <p class="text-blue-200 text-sm">Head of Development</p>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-gray-600 text-sm mb-4">
                            Leads engineering teams delivering scalable solutions.
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Business?</h2>
            <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                Join hundreds of Tanzanian businesses that have already partnered with Jezdan Technology 
                for their digital transformation journey.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300">
                    Get Started Today
                </a>
                <a href="{{ route('portfolio') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors duration-300">
                    View Our Work
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
