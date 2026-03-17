@extends('layouts.app')

@section('title', 'Deposit & Savings Services — FeedTan Community Microfinance Group')

@section('content')
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900"></div>
            <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[620px] h-[620px] bg-gradient-to-br from-emerald-500/25 to-lime-400/15 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-24 left-1/3 w-[520px] h-[520px] bg-gradient-to-tr from-lime-400/20 to-emerald-500/10 blur-3xl rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-24">
            <div class="grid gap-12 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-6">
                    <div class="inline-flex items-center gap-2 rounded-full border border-lime-400/30 bg-lime-400/10 px-4 py-2 text-xs font-bold tracking-widest uppercase text-lime-200">Savings Services</div>
                    <h1 class="mt-6 text-4xl md:text-6xl font-serif text-white font-bold leading-[1.05]">Save smarter. <span class="text-lime-400">Build stability.</span></h1>
                    <p class="mt-6 text-lg text-slate-200 leading-relaxed">Secure savings accounts with competitive interest rates. Goal-based savings plans and group savings options to help you achieve your financial dreams.</p>

                    <div class="mt-10 flex flex-col sm:flex-row items-center gap-4">
                        <a href="{{ url('/contact') }}" class="w-full sm:w-auto px-10 py-4 bg-emerald-600 text-white font-bold rounded-full hover:bg-emerald-700 shadow-xl shadow-emerald-600/30 transition-all text-center">Open savings account</a>
                        <a href="{{ url('/products') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Other services</a>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-xl">
                        <img src="https://images.unsplash.com/photo-1554224154-22dec7ec8818?auto=format&fit=crop&w=800&q=80" alt="Savings" class="w-full h-96 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Savings Solutions</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Flexible savings options designed for your goals and lifestyle.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-emerald-100 flex items-center justify-center mb-6 group-hover:bg-emerald-200 transition-colors">
                        <i class="ph-bold ph-piggy-bank text-2xl text-emerald-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Personal Savings</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Individual savings account with competitive interest rates and easy access to your funds.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-600"></i> 5% annual interest</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-600"></i> No minimum balance</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-600"></i> Free withdrawals</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-emerald-600 font-bold hover:text-emerald-700 transition-colors">
                        Open account <i class="ph ph-arrow-right"></i>
                    </a>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-lime-100 flex items-center justify-center mb-6 group-hover:bg-lime-200 transition-colors">
                        <i class="ph-bold ph-target text-2xl text-lime-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Goal-Based Savings</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Save for specific goals like education, business, or home with structured plans.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-600"></i> 7% annual interest</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-600"></i> Fixed term options</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-600"></i> Goal tracking tools</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-emerald-600 font-bold hover:text-emerald-700 transition-colors">
                        Start saving <i class="ph ph-arrow-right"></i>
                    </a>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-sky-100 flex items-center justify-center mb-6 group-hover:bg-sky-200 transition-colors">
                        <i class="ph-bold ph-users-three text-2xl text-sky-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Group Savings</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Community savings groups with better returns and collective support.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-600"></i> 8% annual interest</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-600"></i> Group loan access</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-600"></i> Regular meetings</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-emerald-600 font-bold hover:text-emerald-700 transition-colors">
                        Join group <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid gap-12 lg:grid-cols-2 items-center">
                <div>
                    <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Why Save With FeedTan?</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-emerald-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-shield-check text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Secure & Insured</h3>
                                <p class="text-slate-600">Your savings are protected and insured up to the maximum allowed limit.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-emerald-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-chart-line-up text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Competitive Returns</h3>
                                <p class="text-slate-600">Earn higher interest rates compared to traditional banks.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-emerald-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-clock text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Flexible Access</h3>
                                <p class="text-slate-600">Access your funds when you need them with minimal restrictions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2.5rem] overflow-hidden border border-slate-200 shadow-xl">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&w=800&q=80" alt="Financial Security" class="w-full h-96 object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-emerald-600">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-serif text-white mb-6 font-bold">Start Your Savings Journey Today</h2>
            <p class="text-emerald-100 text-lg mb-10 max-w-2xl mx-auto">Join thousands of members who are building financial security with FeedTan.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-white text-emerald-600 font-bold rounded-full hover:bg-slate-50 shadow-xl transition-all text-center">Open Account Now</a>
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-emerald-700 text-white font-bold rounded-full hover:bg-emerald-800 transition-all text-center">Speak to Advisor</a>
            </div>
        </div>
    </section>
@endsection
