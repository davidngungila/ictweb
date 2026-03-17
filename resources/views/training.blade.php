@extends('layouts.app')

@section('title', 'Training & Mentorship — FeedTan Community Microfinance Group')

@section('content')
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900"></div>
            <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[620px] h-[620px] bg-gradient-to-br from-blue-500/25 to-cyan-400/15 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-24 left-1/3 w-[520px] h-[520px] bg-gradient-to-tr from-cyan-400/20 to-blue-500/10 blur-3xl rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-24">
            <div class="grid gap-12 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-6">
                    <div class="inline-flex items-center gap-2 rounded-full border border-blue-400/30 bg-blue-400/10 px-4 py-2 text-xs font-bold tracking-widest uppercase text-blue-200">Training</div>
                    <h1 class="mt-6 text-4xl md:text-6xl font-serif text-white font-bold leading-[1.05]">Learn skills. <span class="text-blue-400">Build success.</span></h1>
                    <p class="mt-6 text-lg text-slate-200 leading-relaxed">Comprehensive training programs and personalized mentorship to help you grow your business, manage finances, and achieve your goals.</p>

                    <div class="mt-10 flex flex-col sm:flex-row items-center gap-4">
                        <a href="{{ url('/contact') }}" class="w-full sm:w-auto px-10 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 shadow-xl shadow-blue-600/30 transition-all text-center">Join training program</a>
                        <a href="{{ url('/events') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Upcoming events</a>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-xl">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="Training Session" class="w-full h-96 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Training Programs</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Practical skills development for business success and financial empowerment.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center mb-6 group-hover:bg-blue-200 transition-colors">
                        <i class="ph-bold ph-storefront text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Business Management</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Learn essential business skills including planning, operations, and growth strategies.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-blue-600"></i> Business planning</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-blue-600"></i> Financial management</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-blue-600"></i> Marketing basics</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-700 transition-colors">
                        Enroll now <i class="ph ph-arrow-right"></i>
                    </a>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-cyan-100 flex items-center justify-center mb-6 group-hover:bg-cyan-200 transition-colors">
                        <i class="ph-bold ph-chart-line text-2xl text-cyan-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Financial Literacy</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Master money management, budgeting, and investment fundamentals.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-blue-600"></i> Budgeting skills</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-blue-600"></i> Savings strategies</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-blue-600"></i> Investment basics</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-700 transition-colors">
                        Enroll now <i class="ph ph-arrow-right"></i>
                    </a>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-sky-100 flex items-center justify-center mb-6 group-hover:bg-sky-200 transition-colors">
                        <i class="ph-bold ph-devices text-2xl text-sky-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Digital Skills</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Essential digital skills for modern business operations and online presence.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-blue-600"></i> Social media marketing</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-blue-600"></i> Online payments</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-blue-600"></i> Basic accounting software</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-700 transition-colors">
                        Enroll now <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid gap-12 lg:grid-cols-2 items-center">
                <div>
                    <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Mentorship Program</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-user-check text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Personal Guidance</h3>
                                <p class="text-slate-600">One-on-one mentorship with experienced business professionals.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-target text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Goal Setting</h3>
                                <p class="text-slate-600">Help you set and achieve realistic business and financial goals.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-network text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Network Building</h3>
                                <p class="text-slate-600">Connect with other entrepreneurs and industry experts.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2.5rem] overflow-hidden border border-slate-200 shadow-xl">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Mentorship Session" class="w-full h-96 object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-600">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-serif text-white mb-6 font-bold">Start Your Learning Journey</h2>
            <p class="text-blue-100 text-lg mb-10 max-w-2xl mx-auto">Join our training programs and get the skills you need to succeed.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-slate-50 shadow-xl transition-all text-center">Apply Now</a>
                <a href="{{ url('/events') }}" class="px-12 py-4 bg-blue-700 text-white font-bold rounded-full hover:bg-blue-800 transition-all text-center">View Events</a>
            </div>
        </div>
    </section>
@endsection
