@extends('layouts.app')

@section('title', 'Investment Fund — FeedTan Community Microfinance Group')

@section('content')
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900"></div>
            <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[620px] h-[620px] bg-gradient-to-br from-purple-500/25 to-indigo-400/15 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-24 left-1/3 w-[520px] h-[520px] bg-gradient-to-tr from-indigo-400/20 to-purple-500/10 blur-3xl rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-24">
            <div class="grid gap-12 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-6">
                    <div class="inline-flex items-center gap-2 rounded-full border border-purple-400/30 bg-purple-400/10 px-4 py-2 text-xs font-bold tracking-widest uppercase text-purple-200">Investment Fund</div>
                    <h1 class="mt-6 text-4xl md:text-6xl font-serif text-white font-bold leading-[1.05]">Grow your wealth <span class="text-purple-400">with confidence</span></h1>
                    <p class="mt-6 text-lg text-slate-200 leading-relaxed">Professional investment opportunities with competitive returns. Diversified portfolios managed by experts to help you achieve long-term financial growth.</p>

                    <div class="mt-10 flex flex-col sm:flex-row items-center gap-4">
                        <a href="{{ url('/contact') }}" class="w-full sm:w-auto px-10 py-4 bg-purple-600 text-white font-bold rounded-full hover:bg-purple-700 shadow-xl shadow-purple-600/30 transition-all text-center">Start investing</a>
                        <a href="{{ url('/products') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Other services</a>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-xl">
                        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80" alt="Investment Growth" class="w-full h-96 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Investment Options</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Tailored investment solutions to match your risk tolerance and financial goals.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-purple-100 flex items-center justify-center mb-6 group-hover:bg-purple-200 transition-colors">
                        <i class="ph-bold ph-piggy-bank text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Conservative Fund</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Low-risk investments with stable returns for conservative investors.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-purple-600"></i> 8-12% annual returns</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-purple-600"></i> Government bonds</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-purple-600"></i> Fixed deposits</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-purple-600 font-bold hover:text-purple-700 transition-colors">
                        Invest now <i class="ph ph-arrow-right"></i>
                    </a>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-indigo-100 flex items-center justify-center mb-6 group-hover:bg-indigo-200 transition-colors">
                        <i class="ph-bold ph-chart-line text-2xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Balanced Fund</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">Moderate risk with diversified portfolio for balanced growth.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-purple-600"></i> 12-18% annual returns</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-purple-600"></i> Mixed assets</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-purple-600"></i> Regular rebalancing</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-purple-600 font-bold hover:text-purple-700 transition-colors">
                        Invest now <i class="ph ph-arrow-right"></i>
                    </a>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="w-16 h-16 rounded-2xl bg-violet-100 flex items-center justify-center mb-6 group-hover:bg-violet-200 transition-colors">
                        <i class="ph-bold ph-rocket text-2xl text-violet-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Growth Fund</h3>
                    <p class="text-slate-600 mb-4 leading-relaxed">High-risk, high-return investments for aggressive growth seekers.</p>
                    <ul class="space-y-2 text-sm text-slate-600 mb-6">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-purple-600"></i> 18-25% annual returns</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-purple-600"></i> Equities & startups</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-purple-600"></i> High growth potential</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 text-purple-600 font-bold hover:text-purple-700 transition-colors">
                        Invest now <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid gap-12 lg:grid-cols-2 items-center">
                <div>
                    <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Why Invest With Us?</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-purple-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-chart-line-up text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Expert Management</h3>
                                <p class="text-slate-600">Professional fund managers with proven track records.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-purple-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-shield-check text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Risk Management</h3>
                                <p class="text-slate-600">Diversified portfolios with built-in risk protection.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-purple-600 flex items-center justify-center flex-shrink-0">
                                <i class="ph-bold ph-eye text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2">Full Transparency</h3>
                                <p class="text-slate-600">Regular reports and complete visibility into your investments.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2.5rem] overflow-hidden border border-slate-200 shadow-xl">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=800&q=80" alt="Financial Growth" class="w-full h-96 object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-purple-600">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-serif text-white mb-6 font-bold">Start Building Your Wealth Today</h2>
            <p class="text-purple-100 text-lg mb-10 max-w-2xl mx-auto">Join thousands of investors growing their wealth with FeedTan's professional investment services.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-white text-purple-600 font-bold rounded-full hover:bg-slate-50 shadow-xl transition-all text-center">Start Investing</a>
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-purple-700 text-white font-bold rounded-full hover:bg-purple-800 transition-all text-center">Speak to Advisor</a>
            </div>
        </div>
    </section>
@endsection
