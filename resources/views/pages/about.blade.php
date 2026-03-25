@extends('layouts.app')

@section('title', 'About Us - Jezdan Technology')
@section('description', 'Learn about Jezdan Technology - our company overview, vision, mission, and why we are the trusted ICT solutions provider in Tanzania.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">About Jezdan Technology</h1>
            <p class="text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                Your trusted partner for innovative ICT solutions in Tanzania
            </p>
        </div>
    </div>
</section>

<!-- Company Overview -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Company Overview</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Jezdan Technology is a leading ICT solutions provider based in Tanzania, dedicated to delivering cutting-edge technology services to businesses of all sizes. With years of experience in the technology sector, we have established ourselves as a reliable partner for digital transformation.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Our team of skilled professionals combines technical expertise with deep understanding of local business needs, ensuring solutions that are not only technologically advanced but also practical and effective for the Tanzanian market.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        We pride ourselves on delivering projects on time, within budget, and to the highest standards of quality, helping our clients achieve their business objectives through technology.
                    </p>
                </div>
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1603726838662-fb4c4f5c7c1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="About Jezdan Technology" class="rounded-2xl shadow-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Vision -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-8">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Vision</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        To be the leading ICT solutions provider in Tanzania, empowering businesses with innovative technology that drives growth, efficiency, and competitive advantage in the digital age.
                    </p>
                </div>

                <!-- Mission -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-8">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Mission</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        To provide reliable, innovative, and affordable ICT solutions that transform business operations, enhance productivity, and enable our clients to achieve their strategic objectives through technology.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Why Choose Jezdan Technology?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We stand out as the preferred ICT partner for businesses across Tanzania
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Local Expertise -->
                <div class="text-center p-8 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Local Expertise</h3>
                    <p class="text-gray-600">Deep understanding of Tanzanian business environment and needs</p>
                </div>

                <!-- Expert Team -->
                <div class="text-center p-8 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Team</h3>
                    <p class="text-gray-600">Skilled professionals with years of experience</p>
                </div>

                <!-- Quality Solutions -->
                <div class="text-center p-8 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Quality Solutions</h3>
                    <p class="text-gray-600">High-quality services that meet international standards</p>
                </div>

                <!-- Affordable Pricing -->
                <div class="text-center p-8 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Affordable Pricing</h3>
                    <p class="text-gray-600">Competitive rates without compromising on quality</p>
                </div>

                <!-- Timely Delivery -->
                <div class="text-center p-8 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Timely Delivery</h3>
                    <p class="text-gray-600">Projects delivered on time, every time</p>
                </div>

                <!-- Ongoing Support -->
                <div class="text-center p-8 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-6">
                        <i class="fas fa-life-ring"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Ongoing Support</h3>
                    <p class="text-gray-600">Continuous support and maintenance services</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
