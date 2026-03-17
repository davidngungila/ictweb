@extends('admin-layout')

@section('title', 'Admin Login — FeedTan Community Microfinance Group')

@section('content')
    <div class="min-h-screen bg-slate-900 flex items-center justify-center">
        <div class="max-w-md w-full mx-auto p-6">
            <!-- Login Card -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                <!-- Header -->
                <div class="bg-slate-800 p-8 text-center">
                    <div class="w-20 h-20 bg-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="ph ph-shield-check text-white text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-white mb-2">Admin Login</h1>
                    <p class="text-slate-400 text-sm">FeedTan Community Microfinance Group</p>
                </div>

                <!-- Login Form -->
                <form class="p-8">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Username</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="ph ph-user text-slate-400"></i>
                            </div>
                            <input type="text" class="w-full pl-10 pr-3 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Enter username" value="admin">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="ph ph-lock text-slate-400"></i>
                            </div>
                            <input type="password" class="w-full pl-10 pr-3 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Enter password" value="password">
                        </div>
                    </div>

                    <div class="flex items-center justify-between mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" class="w-4 h-4 text-emerald-600 border-slate-300 rounded focus:ring-emerald-500">
                            <span class="ml-2 text-sm text-slate-600">Remember me</span>
                        </label>
                        <a href="#" class="text-sm text-emerald-600 hover:text-emerald-700">Forgot password?</a>
                    </div>

                    <button type="submit" class="w-full bg-emerald-600 text-white py-3 px-4 rounded-lg font-medium hover:bg-emerald-700 transition-colors focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                        Sign In
                    </button>
                </form>

                <!-- Sample Credentials -->
                <div class="bg-slate-50 px-8 pb-8">
                    <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                        <h3 class="text-sm font-bold text-amber-800 mb-2">Sample Login Credentials:</h3>
                        <div class="space-y-1 text-sm">
                            <div class="flex justify-between">
                                <span class="text-slate-600">Username:</span>
                                <span class="font-mono text-amber-700">admin</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-600">Password:</span>
                                <span class="font-mono text-amber-700">password</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Simple Footer -->
            <footer class="mt-8 text-center">
                <p class="text-slate-400 text-sm">© 2024 FeedTan Community Microfinance Group. All rights reserved.</p>
                <p class="text-slate-500 text-xs mt-2">Admin Portal v1.0</p>
            </footer>
        </div>
    </div>
@endsection
