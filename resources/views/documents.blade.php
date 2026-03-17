@extends('layouts.app')

@section('title', 'Documents & Resources — FeedTan Community Microfinance Group')

@section('content')
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-950 to-slate-900"></div>
            <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[620px] h-[620px] bg-gradient-to-br from-teal-500/25 to-cyan-400/15 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-24 left-1/3 w-[520px] h-[520px] bg-gradient-to-tr from-cyan-400/20 to-teal-500/10 blur-3xl rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-24 text-center">
            <div class="max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-2 rounded-full border border-teal-400/30 bg-teal-400/10 px-4 py-2 text-xs font-bold tracking-widest uppercase text-teal-200">Documents</div>
                <h1 class="mt-6 text-4xl md:text-6xl font-serif text-white font-bold leading-[1.05]">Resource <span class="text-teal-400">library</span></h1>
                <p class="mt-6 text-lg text-slate-200 leading-relaxed">Download forms, brochures, reports, and guides to help you navigate our services and make informed decisions.</p>

                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#forms" class="w-full sm:w-auto px-10 py-4 bg-teal-600 text-white font-bold rounded-full hover:bg-teal-700 shadow-xl shadow-teal-600/30 transition-all text-center">Browse documents</a>
                    <a href="{{ url('/contact') }}" class="w-full sm:w-auto px-10 py-4 bg-white/10 text-white font-bold rounded-full border border-white/20 hover:bg-white/20 transition-all text-center backdrop-blur-md">Request assistance</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Brochures & Guides</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Learn more about our services through detailed guides and brochures.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all text-center">
                    <div class="w-16 h-16 rounded-2xl bg-teal-100 flex items-center justify-center mx-auto mb-6 group-hover:bg-teal-200 transition-colors">
                        <i class="ph-bold ph-book text-2xl text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Services Guide</h3>
                    <p class="text-slate-600 mb-6 leading-relaxed">Complete overview of all FeedTan services.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-slate-500">PDF • 2.5 MB</span>
                        <a href="#" class="inline-flex items-center gap-2 text-teal-600 font-bold hover:text-teal-700 transition-colors">
                            Download <i class="ph ph-download"></i>
                        </a>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all text-center">
                    <div class="w-16 h-16 rounded-2xl bg-cyan-100 flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-200 transition-colors">
                        <i class="ph-bold ph-bank text-2xl text-cyan-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Loan Products</h3>
                    <p class="text-slate-600 mb-6 leading-relaxed">Detailed information about loan options.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-slate-500">PDF • 1.8 MB</span>
                        <a href="#" class="inline-flex items-center gap-2 text-teal-600 font-bold hover:text-teal-700 transition-colors">
                            Download <i class="ph ph-download"></i>
                        </a>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all text-center">
                    <div class="w-16 h-16 rounded-2xl bg-sky-100 flex items-center justify-center mx-auto mb-6 group-hover:bg-sky-200 transition-colors">
                        <i class="ph-bold ph-plant text-2xl text-sky-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Agricultural Finance</h3>
                    <p class="text-slate-600 mb-6 leading-relaxed">Specialized financing for farmers.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-slate-500">PDF • 1.2 MB</span>
                        <a href="#" class="inline-flex items-center gap-2 text-teal-600 font-bold hover:text-teal-700 transition-colors">
                            Download <i class="ph ph-download"></i>
                        </a>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all text-center">
                    <div class="w-16 h-16 rounded-2xl bg-teal-100 flex items-center justify-center mx-auto mb-6 group-hover:bg-teal-200 transition-colors">
                        <i class="ph-bold ph-users text-2xl text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Member Benefits</h3>
                    <p class="text-slate-600 mb-6 leading-relaxed">Advantages of joining FeedTan.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-slate-500">PDF • 950 KB</span>
                        <a href="#" class="inline-flex items-center gap-2 text-teal-600 font-bold hover:text-teal-700 transition-colors">
                            Download <i class="ph ph-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-slate-900 mb-6 font-bold">Reports & Publications</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Annual reports, impact studies, and research publications.</p>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-indigo-100 flex items-center justify-center flex-shrink-0 group-hover:bg-indigo-200 transition-colors">
                            <i class="ph-bold ph-chart-bar text-2xl text-indigo-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Annual Report 2023</h3>
                            <p class="text-slate-600 mb-4 leading-relaxed">Comprehensive review of our performance and impact in 2023.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-slate-500">PDF • 5.2 MB</span>
                                <a href="#" class="inline-flex items-center gap-2 text-indigo-600 font-bold hover:text-indigo-700 transition-colors">
                                    Download <i class="ph ph-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-purple-100 flex items-center justify-center flex-shrink-0 group-hover:bg-purple-200 transition-colors">
                            <i class="ph-bold ph-microscope text-2xl text-purple-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Impact Study 2023</h3>
                            <p class="text-slate-600 mb-4 leading-relaxed">Research on our social and economic impact in the community.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-slate-500">PDF • 3.8 MB</span>
                                <a href="#" class="inline-flex items-center gap-2 text-purple-600 font-bold hover:text-purple-700 transition-colors">
                                    Download <i class="ph ph-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-emerald-100 flex items-center justify-center flex-shrink-0 group-hover:bg-emerald-200 transition-colors">
                            <i class="ph-bold ph-leaf text-2xl text-emerald-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Agricultural Impact Report</h3>
                            <p class="text-slate-600 mb-4 leading-relaxed">Success stories and outcomes from our agricultural finance program.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-slate-500">PDF • 2.9 MB</span>
                                <a href="#" class="inline-flex items-center gap-2 text-emerald-600 font-bold hover:text-emerald-700 transition-colors">
                                    Download <i class="ph ph-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group rounded-[2rem] border border-slate-200 bg-white p-8 hover:shadow-xl transition-all">
                    <div class="flex gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-rose-100 flex items-center justify-center flex-shrink-0 group-hover:bg-rose-200 transition-colors">
                            <i class="ph-bold ph-heart text-2xl text-rose-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Social Welfare Report</h3>
                            <p class="text-slate-600 mb-4 leading-relaxed">Community support initiatives and assistance program outcomes.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-slate-500">PDF • 2.1 MB</span>
                                <a href="#" class="inline-flex items-center gap-2 text-rose-600 font-bold hover:text-rose-700 transition-colors">
                                    Download <i class="ph ph-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-teal-600">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-serif text-white mb-6 font-bold">Need Help?</h2>
            <p class="text-teal-100 text-lg mb-10 max-w-2xl mx-auto">Our team is here to help you find the right documents and complete your applications.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-white text-teal-600 font-bold rounded-full hover:bg-slate-50 shadow-xl transition-all text-center">Contact Support</a>
                <a href="{{ url('/contact') }}" class="px-12 py-4 bg-teal-700 text-white font-bold rounded-full hover:bg-teal-800 transition-all text-center">Schedule Appointment</a>
            </div>
        </div>
    </section>
@endsection
