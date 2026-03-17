@extends('layouts.app')

@section('title', 'Upcoming Events — FeedTan Community Microfinance Group')

@section('content')
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900"></div>
            <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[620px] h-[620px] bg-gradient-to-br from-amber-500/25 to-yellow-400/15 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-24 left-1/3 w-[520px] h-[520px] bg-gradient-to-tr from-yellow-400/20 to-amber-500/10 blur-3xl rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-24 text-center">
            <div class="max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-2 rounded-full border border-amber-400/30 bg-amber-400/10 px-4 py-2 text-xs font-bold tracking-widest uppercase text-amber-200">Events</div>
                <h1 class="mt-6 text-4xl md:text-6xl font-serif text-white font-bold leading-[1.05]">Join our <span class="text-amber-400">community events</span></h1>
                <p class="mt-6 text-lg text-slate-200 leading-relaxed">Workshops, seminars, and networking opportunities to help you grow your business and connect with others.</p>

                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#upcoming" class="w-full sm:w-auto px-10 py-4 bg-amber-600 text-white font-bold rounded-full hover:bg-amber-700 shadow-xl shadow-amber-600/30 transition-all text-center">View upcoming events</a>
                    <a href="{{ url('/contact') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Register for updates</a>
                </div>
            </div>
        </div>
    </section>

    <section id="upcoming" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Upcoming Events</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Don't miss these opportunities to learn and connect.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-amber-100 flex flex-col items-center justify-center flex-shrink-0 group-hover:bg-amber-200 transition-colors">
                            <span class="text-xs font-bold text-amber-600">MAR</span>
                            <span class="text-lg font-black text-amber-700">25</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Business Planning Workshop</h3>
                            <p class="text-sm text-slate-500 mb-2">9:00 AM - 12:00 PM</p>
                            <p class="text-sm text-slate-500">FeedTan Training Center</p>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-6 leading-relaxed">Learn how to create effective business plans for growth and funding applications.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-amber-600">Free for members</span>
                        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-amber-600 font-bold hover:text-amber-700 transition-colors">
                            Register <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-yellow-100 flex flex-col items-center justify-center flex-shrink-0 group-hover:bg-yellow-200 transition-colors">
                            <span class="text-xs font-bold text-yellow-600">MAR</span>
                            <span class="text-lg font-black text-yellow-700">28</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Financial Literacy Seminar</h3>
                            <p class="text-sm text-slate-500 mb-2">2:00 PM - 4:00 PM</p>
                            <p class="text-sm text-slate-500">Online via Zoom</p>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-6 leading-relaxed">Master budgeting, saving, and investment basics for personal and business finance.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-yellow-600">Free event</span>
                        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-yellow-600 font-bold hover:text-yellow-700 transition-colors">
                            Register <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-orange-100 flex flex-col items-center justify-center flex-shrink-0 group-hover:bg-orange-200 transition-colors">
                            <span class="text-xs font-bold text-orange-600">APR</span>
                            <span class="text-lg font-black text-orange-700">02</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Networking Breakfast</h3>
                            <p class="text-sm text-slate-500 mb-2">8:00 AM - 10:00 AM</p>
                            <p class="text-sm text-slate-500">FeedTan Headquarters</p>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-6 leading-relaxed">Connect with fellow entrepreneurs and share experiences over breakfast.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-orange-600">10,000 TZS</span>
                        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-orange-600 font-bold hover:text-orange-700 transition-colors">
                            Register <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-amber-100 flex flex-col items-center justify-center flex-shrink-0 group-hover:bg-amber-200 transition-colors">
                            <span class="text-xs font-bold text-amber-600">APR</span>
                            <span class="text-lg font-black text-amber-700">08</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Digital Marketing Basics</h3>
                            <p class="text-sm text-slate-500 mb-2">1:00 PM - 3:00 PM</p>
                            <p class="text-sm text-slate-500">FeedTan Training Center</p>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-6 leading-relaxed">Learn social media marketing and online presence for your business.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-amber-600">Free for members</span>
                        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-amber-600 font-bold hover:text-amber-700 transition-colors">
                            Register <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-yellow-100 flex flex-col items-center justify-center flex-shrink-0 group-hover:bg-yellow-200 transition-colors">
                            <span class="text-xs font-bold text-yellow-600">APR</span>
                            <span class="text-lg font-black text-yellow-700">15</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Loan Application Workshop</h3>
                            <p class="text-sm text-slate-500 mb-2">10:00 AM - 12:00 PM</p>
                            <p class="text-sm text-slate-500">FeedTan Training Center</p>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-6 leading-relaxed">Step-by-step guidance on successful loan applications and requirements.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-yellow-600">Free event</span>
                        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-yellow-600 font-bold hover:text-yellow-700 transition-colors">
                            Register <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-orange-100 flex flex-col items-center justify-center flex-shrink-0 group-hover:bg-orange-200 transition-colors">
                            <span class="text-xs font-bold text-orange-600">APR</span>
                            <span class="text-lg font-black text-orange-700">20</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Annual Members Meeting</h3>
                            <p class="text-sm text-slate-500 mb-2">3:00 PM - 6:00 PM</p>
                            <p class="text-sm text-slate-500">FeedTan Headquarters</p>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-6 leading-relaxed">Yearly review, achievements, and future plans presentation.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-orange-600">Members only</span>
                        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-orange-600 font-bold hover:text-orange-700 transition-colors">
                            RSVP <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-amber-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Past Events Gallery</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Highlights from our recent community events and training sessions.</p>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-lg">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=400&q=80" alt="Business Workshop" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-slate-900 mb-1">Business Growth Seminar</h4>
                        <p class="text-sm text-slate-500">March 2024 - 45 attendees</p>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-lg">
                    <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=400&q=80" alt="Training Session" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-slate-900 mb-1">Financial Training</h4>
                        <p class="text-sm text-slate-500">February 2024 - 30 attendees</p>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-lg">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb74f2898560?auto=format&fit=crop&w=400&q=80" alt="Networking Event" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-slate-900 mb-1">Community Networking</h4>
                        <p class="text-sm text-slate-500">January 2024 - 60 attendees</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-amber-600">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-serif text-white mb-6 font-bold">Stay Updated</h2>
            <p class="text-amber-100 text-lg mb-10 max-w-2xl mx-auto">Get notified about upcoming events and training opportunities.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-white text-amber-600 font-bold rounded-full hover:bg-slate-50 shadow-xl transition-all text-center">Subscribe to Updates</a>
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-amber-700 text-white font-bold rounded-full hover:bg-amber-800 transition-all text-center">Suggest an Event</a>
            </div>
        </div>
    </section>
@endsection
