@extends('layouts.app')

@section('title', 'Social Welfare Fund — FeedTan Community Microfinance Group')

@section('content')
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900"></div>
            <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[620px] h-[620px] bg-gradient-to-br from-rose-500/25 to-orange-400/15 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-24 left-1/3 w-[520px] h-[520px] bg-gradient-to-tr from-orange-400/20 to-rose-500/10 blur-3xl rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-24">
            <div class="grid gap-12 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-6">
                    <div class="inline-flex items-center gap-2 rounded-full border border-rose-400/30 bg-rose-400/10 px-4 py-2 text-xs font-bold tracking-widest uppercase text-rose-200">Social Welfare</div>
                    <h1 class="mt-6 text-4xl md:text-6xl font-serif text-white font-bold leading-[1.05]">Supporting <span class="text-rose-400">vulnerable communities</span></h1>
                    <p class="mt-6 text-lg text-slate-200 leading-relaxed">Dedicated fund for healthcare, education support, emergency assistance, and community development projects. Together we build stronger, more resilient communities.</p>

                    <div class="mt-10 flex flex-col sm:flex-row items-center gap-4">
                        <a href="{{ url('/contact') }}" class="w-full sm:w-auto px-10 py-4 bg-rose-600 text-white font-bold rounded-full hover:bg-rose-700 shadow-xl shadow-rose-600/30 transition-all text-center">Apply for assistance</a>
                        <a href="{{ url('/products') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Other services</a>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-xl">
                        <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&w=800&q=80" alt="Community Support" class="w-full h-96 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Welfare Support Programs</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Comprehensive assistance programs for those who need it most.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-rose-100 flex items-center justify-center mb-6 group-hover:bg-rose-200 transition-colors">
                        <i class="ph-bold ph-heart text-2xl text-rose-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Healthcare Support</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Financial assistance for medical emergencies, treatments, and healthcare expenses.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-rose-600"></i> Emergency medical funds</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-rose-600"></i> Hospital bill support</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-rose-600"></i> Medication assistance</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-rose-600 font-bold hover:text-rose-700 transition-colors">
                        Apply now <i class="ph ph-arrow-right"></i>
                    </a>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-orange-100 flex items-center justify-center mb-6 group-hover:bg-orange-200 transition-colors">
                        <i class="ph-bold ph-graduation-cap text-2xl text-orange-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Education Fund</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Support for school fees, uniforms, books, and educational expenses for children.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-rose-600"></i> School fee assistance</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-rose-600"></i> Uniform & supplies</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-rose-600"></i> Scholarship programs</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-rose-600 font-bold hover:text-rose-700 transition-colors">
                        Apply now <i class="ph ph-arrow-right"></i>
                    </a>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-amber-100 flex items-center justify-center mb-6 group-hover:bg-amber-200 transition-colors">
                        <i class="ph-bold ph-house text-2xl text-amber-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Emergency Relief</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Quick assistance for families facing crisis situations, natural disasters, or emergencies.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-rose-600"></i> Food assistance</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-rose-600"></i> Shelter support</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-rose-600"></i> Crisis intervention</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-rose-600 font-bold hover:text-rose-700 transition-colors">
                        Get help <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid gap-12 lg:grid-cols-2 items-center">
                <div>
                    <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">How We Help</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-rose-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-hand-heart text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Community Funded</h3>
                                <p class="text-slate-600">Supported by member contributions and partner donations.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-rose-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-clock-counter-clockwise text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Quick Response</h3>
                                <p class="text-slate-600">Emergency assistance within 24-48 hours of application.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-rose-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-shield-check text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Dignity Preserved</h3>
                                <p class="text-slate-600">Confidential assistance with respect and compassion.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2.5rem] overflow-hidden border border-slate-200 shadow-xl">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&w=800&q=80" alt="Community Care" class="w-full h-96 object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-rose-600">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-serif text-white mb-6 font-bold">Support Your Community</h2>
            <p class="text-rose-100 text-lg mb-10 max-w-2xl mx-auto">Join us in making a difference. Your contributions help families in need.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-white text-rose-600 font-bold rounded-full hover:bg-slate-50 shadow-xl transition-all text-center">Donate Now</a>
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-rose-700 text-white font-bold rounded-full hover:bg-rose-800 transition-all text-center">Apply for Help</a>
            </div>
        </div>
    </section>
@endsection
