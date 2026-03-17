@extends('layouts.app')

@section('title', 'Articles & Resources — FeedTan Community Microfinance Group')

@section('content')
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900"></div>
            <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[620px] h-[620px] bg-gradient-to-br from-indigo-500/25 to-purple-400/15 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-24 left-1/3 w-[520px] h-[520px] bg-gradient-to-tr from-purple-400/20 to-indigo-500/10 blur-3xl rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-24 text-center">
            <div class="max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-2 rounded-full border border-indigo-400/30 bg-indigo-400/10 px-4 py-2 text-xs font-bold tracking-widest uppercase text-indigo-200">Resources</div>
                <h1 class="mt-6 text-4xl md:text-6xl font-serif text-white font-bold leading-[1.05]">Insights & <span class="text-indigo-400">knowledge hub</span></h1>
                <p class="mt-6 text-lg text-slate-200 leading-relaxed">Expert articles, guides, and resources to help you make informed financial decisions and grow your business.</p>

                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#articles" class="w-full sm:w-auto px-10 py-4 bg-indigo-600 text-white font-bold rounded-full hover:bg-indigo-700 shadow-xl shadow-indigo-600/30 transition-all text-center">Read articles</a>
                    <a href="{{ url('/documents') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Browse documents</a>
                </div>
            </div>
        </div>
    </section>

    <section id="articles" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Latest Articles</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Expert insights on business, finance, and entrepreneurship.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <article class="group rounded-[2rem] border border-slate-200 bg-white overflow-hidden hover:shadow-xl transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=600&q=80" alt="Business Growth" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                            <span class="font-bold text-indigo-600">Business</span>
                            <span>•</span>
                            <time>March 15, 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">5 Strategies for Small Business Growth</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Discover proven strategies to scale your business and increase profitability in competitive markets.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-indigo-600 font-bold hover:text-indigo-700 transition-colors">
                            Read more <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="group rounded-[2rem] border border-slate-200 bg-white overflow-hidden hover:shadow-xl transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&w=600&q=80" alt="Financial Planning" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                            <span class="font-bold text-purple-600">Finance</span>
                            <span>•</span>
                            <time>March 12, 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">Financial Planning for Entrepreneurs</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Essential financial planning tips every entrepreneur needs for sustainable business success.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-indigo-600 font-bold hover:text-indigo-700 transition-colors">
                            Read more <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="group rounded-[2rem] border border-slate-200 bg-white overflow-hidden hover:shadow-xl transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&w=600&q=80" alt="Digital Marketing" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                            <span class="font-bold text-sky-600">Marketing</span>
                            <span>•</span>
                            <time>March 10, 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">Digital Marketing on a Budget</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Cost-effective digital marketing strategies for small businesses with limited resources.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-indigo-600 font-bold hover:text-indigo-700 transition-colors">
                            Read more <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="group rounded-[2rem] border border-slate-200 bg-white overflow-hidden hover:shadow-xl transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=600&q=80" alt="Agricultural Finance" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                            <span class="font-bold text-emerald-600">Agriculture</span>
                            <span>•</span>
                            <time>March 8, 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">Accessing Agricultural Finance</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Complete guide to securing agricultural loans and managing farming finances effectively.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-indigo-600 font-bold hover:text-indigo-700 transition-colors">
                            Read more <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="group rounded-[2rem] border border-slate-200 bg-white overflow-hidden hover:shadow-xl transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224154-22dec7ec8818?auto=format&fit=crop&w=600&q=80" alt="Savings Tips" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                            <span class="font-bold text-lime-600">Savings</span>
                            <span>•</span>
                            <time>March 5, 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">Building Emergency Savings</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Step-by-step approach to creating and maintaining an emergency fund for financial security.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-indigo-600 font-bold hover:text-indigo-700 transition-colors">
                            Read more <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="group rounded-[2rem] border border-slate-200 bg-white overflow-hidden hover:shadow-xl transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=600&q=80" alt="Group Lending" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                            <span class="font-bold text-rose-600">Community</span>
                            <span>•</span>
                            <time>March 1, 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">Power of Group Lending</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">How group lending models create opportunities and strengthen community bonds.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-indigo-600 font-bold hover:text-indigo-700 transition-colors">
                            Read more <i class="ph ph-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center gap-2 px-8 py-4 bg-indigo-600 text-white font-bold rounded-full hover:bg-indigo-700 transition-colors">
                    Load more articles <i class="ph ph-arrow-down"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Popular Categories</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Browse articles by topic to find exactly what you need.</p>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="group rounded-2xl border border-slate-200 bg-white p-6 text-center hover:shadow-lg transition-all cursor-pointer">
                    <div class="w-16 h-16 rounded-2xl bg-indigo-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-indigo-200 transition-colors">
                        <i class="ph-bold ph-briefcase text-2xl text-indigo-600"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Business</h3>
                    <p class="text-sm text-slate-500">15 articles</p>
                </div>

                <div class="group rounded-2xl border border-slate-200 bg-white p-6 text-center hover:shadow-lg transition-all cursor-pointer">
                    <div class="w-16 h-16 rounded-2xl bg-purple-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-200 transition-colors">
                        <i class="ph-bold ph-chart-line text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Finance</h3>
                    <p class="text-sm text-slate-500">23 articles</p>
                </div>

                <div class="group rounded-2xl border border-slate-200 bg-white p-6 text-center hover:shadow-lg transition-all cursor-pointer">
                    <div class="w-16 h-16 rounded-2xl bg-sky-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-sky-200 transition-colors">
                        <i class="ph-bold ph-megaphone text-2xl text-sky-600"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Marketing</h3>
                    <p class="text-sm text-slate-500">12 articles</p>
                </div>

                <div class="group rounded-2xl border border-slate-200 bg-white p-6 text-center hover:shadow-lg transition-all cursor-pointer">
                    <div class="w-16 h-16 rounded-2xl bg-emerald-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-emerald-200 transition-colors">
                        <i class="ph-bold ph-plant text-2xl text-emerald-600"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Agriculture</h3>
                    <p class="text-sm text-slate-500">18 articles</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-indigo-600">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-serif text-white mb-6 font-bold">Subscribe to Our Newsletter</h2>
            <p class="text-indigo-100 text-lg mb-10 max-w-2xl mx-auto">Get the latest articles and insights delivered to your inbox weekly.</p>
            <div class="max-w-md mx-auto">
                <div class="flex gap-4">
                    <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-4 rounded-full text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-4 focus:ring-white/20">
                    <button class="px-8 py-4 bg-white text-indigo-600 font-bold rounded-full hover:bg-slate-50 transition-colors">Subscribe</button>
                </div>
            </div>
        </div>
    </section>
@endsection
