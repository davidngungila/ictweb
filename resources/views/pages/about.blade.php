@extends('layouts.app')

@section('title', 'About Us - JezDan Technology')
@section('description', 'Learn about JezDan Technology - Tanzania\'s leading digital solutions provider with 15+ years of experience in software development, web design, and IT consulting.')

@section('styles')
<style>
    .timeline-line {
        background: linear-gradient(180deg, #3B82F6 0%, #1E40AF 100%);
    }
    .team-card {
        transition: all 0.3s ease;
    }
    .team-card:hover {
        transform: translateY(-10px);
    }
    .value-card {
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .value-card:hover {
        transform: scale(1.05);
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-indigo-400/20 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-white/20 text-white rounded-full text-sm font-bold tracking-widest uppercase mb-6 backdrop-blur-md border border-white/30">Our Story</span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-8 leading-tight font-heading">About <span class="text-blue-300">JezDan Technology</span></h1>
                <p class="text-xl md:text-2xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                    Empowering Tanzanian businesses with innovative digital solutions for over 15 years. We combine cutting-edge technology with local expertise to deliver exceptional results.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-6">Who We Are</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-8 leading-tight font-heading">Leading Digital Transformation in Tanzania</h2>
                    <div class="space-y-6 text-gray-600 leading-relaxed">
                        <p>
                            JezDan Technology is a premier digital solutions provider based in Tanzania, specializing in custom software development, web design, and comprehensive IT services. Founded with a vision to bridge the technology gap in East Africa, we've been at the forefront of digital innovation for over 15 years.
                        </p>
                        <p>
                            Our team of expert developers, designers, and consultants work tirelessly to deliver solutions that not only meet but exceed our clients' expectations. We understand the unique challenges faced by businesses in Tanzania and tailor our solutions to address local needs while maintaining global standards.
                        </p>
                        <p>
                            From startups to established enterprises, we've helped over 150 businesses transform their operations, increase efficiency, and achieve sustainable growth through technology.
                        </p>
                    </div>
                    
                    <!-- Key Stats -->
                    <div class="grid grid-cols-2 gap-6 mt-10">
                        <div class="text-center p-6 bg-blue-50 rounded-xl">
                            <div class="text-3xl font-bold text-blue-600 mb-2 font-heading">150+</div>
                            <p class="text-gray-600 font-medium">Projects Delivered</p>
                        </div>
                        <div class="text-center p-6 bg-green-50 rounded-xl">
                            <div class="text-3xl font-bold text-green-600 mb-2 font-heading">98%</div>
                            <p class="text-gray-600 font-medium">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
                
                <div data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1603796846097-bee99e4a601f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Our Team" class="rounded-2xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="bg-white rounded-2xl p-10 shadow-xl border border-gray-100" data-aos="fade-up">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-blue-900 mb-6 font-heading">Our Mission</h3>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        To empower Tanzanian businesses with cutting-edge digital solutions that drive growth, enhance efficiency, and create sustainable competitive advantages in the global marketplace.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check-circle text-blue-500"></i>
                            <span>Innovative technology solutions</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check-circle text-blue-500"></i>
                            <span>Local expertise, global standards</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check-circle text-blue-500"></i>
                            <span>Client-centric approach</span>
                        </li>
                    </ul>
                </div>

                <!-- Vision -->
                <div class="bg-white rounded-2xl p-10 shadow-xl border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-blue-900 mb-6 font-heading">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        To be the leading technology partner in East Africa, recognized for transforming businesses through innovative digital solutions and exceptional service delivery.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check-circle text-purple-500"></i>
                            <span>Regional technology leader</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check-circle text-purple-500"></i>
                            <span>Continuous innovation</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check-circle text-purple-500"></i>
                            <span>Sustainable business growth</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Our Values</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight font-heading">Core Values That Guide Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    These principles are the foundation of everything we do and how we serve our clients.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="value-card text-white rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6 backdrop-blur-md">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 font-heading">Excellence</h3>
                    <p class="text-white/90 leading-relaxed">We strive for excellence in every project, delivering solutions that exceed expectations and set industry standards.</p>
                </div>

                <!-- Value 2 -->
                <div class="value-card text-white rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6 backdrop-blur-md">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 font-heading">Innovation</h3>
                    <p class="text-white/90 leading-relaxed">We embrace cutting-edge technology and creative thinking to solve complex business challenges.</p>
                </div>

                <!-- Value 3 -->
                <div class="value-card text-white rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6 backdrop-blur-md">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 font-heading">Integrity</h3>
                    <p class="text-white/90 leading-relaxed">We conduct business with honesty, transparency, and ethical practices in all our relationships.</p>
                </div>

                <!-- Value 4 -->
                <div class="value-card text-white rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6 backdrop-blur-md">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 font-heading">Collaboration</h3>
                    <p class="text-white/90 leading-relaxed">We believe in the power of teamwork and partnership to achieve extraordinary results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Our Journey</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight font-heading">15+ Years of Innovation</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From a small startup to a leading technology partner, our journey has been marked by continuous growth and innovation.
                </p>
            </div>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full timeline-line rounded-full"></div>

                <!-- Timeline Items -->
                <div class="space-y-12">
                    <!-- 2008 -->
                    <div class="flex items-center justify-center" data-aos="fade-up">
                        <div class="w-full md:w-5/12 text-right pr-8 hidden md:block">
                            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                                <h3 class="text-xl font-bold text-blue-900 mb-2">Company Founded</h3>
                                <p class="text-gray-600">Started with a small team of passionate developers in Dar es Salaam.</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg z-10"></div>
                        <div class="w-full md:w-5/12 pl-8">
                            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100 md:hidden">
                                <h3 class="text-xl font-bold text-blue-900 mb-2">2008 - Company Founded</h3>
                                <p class="text-gray-600">Started with a small team of passionate developers in Dar es Salaam.</p>
                            </div>
                            <div class="text-center">
                                <span class="inline-block px-4 py-2 bg-blue-600 text-white rounded-full font-bold">2008</span>
                            </div>
                        </div>
                    </div>

                    <!-- 2012 -->
                    <div class="flex items-center justify-center" data-aos="fade-up">
                        <div class="w-full md:w-5/12 pl-8 order-2 md:order-1">
                            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100 md:hidden">
                                <h3 class="text-xl font-bold text-blue-900 mb-2">2012 - First Major Project</h3>
                                <p class="text-gray-600">Delivered our first enterprise-level software solution for a leading Tanzanian bank.</p>
                            </div>
                            <div class="text-center">
                                <span class="inline-block px-4 py-2 bg-blue-600 text-white rounded-full font-bold">2012</span>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg z-10 order-1 md:order-2"></div>
                        <div class="w-full md:w-5/12 text-left pl-8 order-3 hidden md:block">
                            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                                <h3 class="text-xl font-bold text-blue-900 mb-2">First Major Project</h3>
                                <p class="text-gray-600">Delivered our first enterprise-level software solution for a leading Tanzanian bank.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2016 -->
                    <div class="flex items-center justify-center" data-aos="fade-up">
                        <div class="w-full md:w-5/12 text-right pr-8 hidden md:block">
                            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                                <h3 class="text-xl font-bold text-blue-900 mb-2">Expansion Phase</h3>
                                <p class="text-gray-600">Expanded our services to include web design and digital marketing solutions.</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg z-10"></div>
                        <div class="w-full md:w-5/12 pl-8">
                            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100 md:hidden">
                                <h3 class="text-xl font-bold text-blue-900 mb-2">2016 - Expansion Phase</h3>
                                <p class="text-gray-600">Expanded our services to include web design and digital marketing solutions.</p>
                            </div>
                            <div class="text-center">
                                <span class="inline-block px-4 py-2 bg-blue-600 text-white rounded-full font-bold">2016</span>
                            </div>
                        </div>
                    </div>

                    <!-- 2020 -->
                    <div class="flex items-center justify-center" data-aos="fade-up">
                        <div class="w-full md:w-5/12 pl-8 order-2 md:order-1">
                            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100 md:hidden">
                                <h3 class="text-xl font-bold text-blue-900 mb-2">2020 - SMS Platform Launch</h3>
                                <p class="text-gray-600">Launched our revolutionary SMS platform with pre-approved Sender IDs.</p>
                            </div>
                            <div class="text-center">
                                <span class="inline-block px-4 py-2 bg-blue-600 text-white rounded-full font-bold">2020</span>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg z-10 order-1 md:order-2"></div>
                        <div class="w-full md:w-5/12 text-left pl-8 order-3 hidden md:block">
                            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                                <h3 class="text-xl font-bold text-blue-900 mb-2">SMS Platform Launch</h3>
                                <p class="text-gray-600">Launched our revolutionary SMS platform with pre-approved Sender IDs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2024 -->
                    <div class="flex items-center justify-center" data-aos="fade-up">
                        <div class="w-full md:w-5/12 text-right pr-8 hidden md:block">
                            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                                <h3 class="text-xl font-bold text-blue-900 mb-2">Digital Transformation Leader</h3>
                                <p class="text-gray-600">Recognized as a leading digital transformation partner in East Africa.</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-green-600 rounded-full border-4 border-white shadow-lg z-10"></div>
                        <div class="w-full md:w-5/12 pl-8">
                            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100 md:hidden">
                                <h3 class="text-xl font-bold text-blue-900 mb-2">2024 - Digital Transformation Leader</h3>
                                <p class="text-gray-600">Recognized as a leading digital transformation partner in East Africa.</p>
                            </div>
                            <div class="text-center">
                                <span class="inline-block px-4 py-2 bg-green-600 text-white rounded-full font-bold">2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-widest uppercase mb-4">Our Team</span>
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 leading-tight font-heading">Meet Our Expert Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Talented professionals dedicated to transforming your business through innovative technology solutions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="team-card bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="CEO" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-1">Daniel Kimaro</h3>
                        <p class="text-blue-600 font-medium mb-4">Chief Executive Officer</p>
                        <p class="text-gray-600 text-sm mb-4">15+ years in software development and business strategy.</p>
                        <div class="flex justify-center gap-3">
                            <a href="#" class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="CTO" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-1">Grace Mwamba</h3>
                        <p class="text-blue-600 font-medium mb-4">Chief Technology Officer</p>
                        <p class="text-gray-600 text-sm mb-4">Expert in full-stack development and cloud architecture.</p>
                        <div class="flex justify-center gap-3">
                            <a href="#" class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Lead Developer" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-1">Michael Chen</h3>
                        <p class="text-blue-600 font-medium mb-4">Lead Developer</p>
                        <p class="text-gray-600 text-sm mb-4">Specializing in Laravel, Vue.js, and mobile development.</p>
                        <div class="flex justify-center gap-3">
                            <a href="#" class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="team-card bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="UI/UX Designer" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-1">Amina Hassan</h3>
                        <p class="text-blue-600 font-medium mb-4">UI/UX Designer</p>
                        <p class="text-gray-600 text-sm mb-4">Creating beautiful and intuitive user experiences.</p>
                        <div class="flex justify-center gap-3">
                            <a href="#" class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-colors">
                                <i class="fas fa-envelope"></i>
                            </a>
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
                <h2 class="text-4xl md:text-5xl font-bold mb-6 font-heading">Join Our Success Story</h2>
                <p class="text-xl mb-8 text-blue-100 leading-relaxed">Ready to transform your business with our innovative solutions? Let's discuss how we can help you achieve your goals.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="px-10 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-xl">
                        Start Your Project
                    </a>
                    <a href="{{ route('services') }}" class="px-10 py-4 bg-blue-700/30 text-white font-bold rounded-full border border-white/20 hover:bg-blue-700/50 transition-all duration-300 backdrop-blur-md">
                        Explore Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
