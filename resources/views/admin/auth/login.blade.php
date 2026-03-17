@extends('admin.layouts.app')

@section('title', 'Admin Login — FeedTan')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 flex items-center justify-center px-4">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.05"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
        
        <!-- Login Container -->
        <div class="relative z-10 w-full max-w-md">
            <!-- Logo and Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-emerald-600 rounded-2xl mb-4">
                    <i class="ph ph-briefcase text-white text-2xl"></i>
                </div>
                <h1 class="text-3xl font-bold text-white mb-2">FeedTan Admin</h1>
                <p class="text-slate-400">Sign in to your admin dashboard</p>
            </div>

            <!-- Login Form -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl border border-white/10 p-8 shadow-2xl">
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-500/20 border border-red-500/30 rounded-lg">
                        <div class="flex items-center">
                            <i class="ph ph-warning-circle text-red-400 mr-2"></i>
                            <span class="text-red-200 text-sm">{{ $errors->first() }}</span>
                        </div>
                    </div>
                @endif

                @if (session('success'))
                    <div class="mb-6 p-4 bg-emerald-500/20 border border-emerald-500/30 rounded-lg">
                        <div class="flex items-center">
                            <i class="ph ph-check-circle text-emerald-400 mr-2"></i>
                            <span class="text-emerald-200 text-sm">{{ session('success') }}</span>
                        </div>
                    </div>
                @endif

                <form method="POST" action="/admin/login" class="space-y-6">
                    @csrf
                    
                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-200 mb-2">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="ph ph-envelope text-slate-400"></i>
                            </div>
                            <input 
                                id="email" 
                                name="email" 
                                type="email" 
                                autocomplete="email" 
                                required
                                value="{{ old('email') }}"
                                class="w-full pl-10 pr-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all duration-200"
                                placeholder="admin@feedtan.co.tz"
                            >
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-200 mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="ph ph-lock text-slate-400"></i>
                            </div>
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                autocomplete="current-password" 
                                required
                                class="w-full pl-10 pr-12 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all duration-200"
                                placeholder="Enter your password"
                            >
                            <button 
                                type="button" 
                                id="togglePassword"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center"
                            >
                                <i class="ph ph-eye text-slate-400 hover:text-white transition-colors"></i>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input 
                                id="remember" 
                                name="remember" 
                                type="checkbox" 
                                class="h-4 w-4 bg-white/10 border-white/20 rounded text-emerald-600 focus:ring-emerald-500 focus:ring-offset-0"
                            >
                            <label for="remember" class="ml-2 block text-sm text-slate-300">
                                Remember me
                            </label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="text-emerald-400 hover:text-emerald-300 transition-colors">
                                Forgot password?
                            </a>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button 
                            type="submit" 
                            class="w-full flex justify-center items-center py-3 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-slate-900 transition-all duration-200 transform hover:scale-[1.02]"
                        >
                            <i class="ph ph-sign-in mr-2"></i>
                            Sign In
                        </button>
                    </div>
                </form>

                <!-- Success Message -->
                <div class="mt-6 p-4 bg-emerald-500/10 border border-emerald-500/20 rounded-lg">
                    <div class="flex items-start">
                        <i class="ph ph-check-circle text-emerald-400 mt-0.5 mr-2"></i>
                        <div class="text-sm text-emerald-200">
                            <p class="font-medium mb-1">Welcome to FeedTan Admin</p>
                            <p class="text-xs">Access your dashboard to manage members, loans, savings, and events.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center mt-8">
                <p class="text-slate-400 text-sm">
                    2024 FeedTan Community Microfinance Group. All rights reserved.
                </p>
                <p class="text-slate-500 text-xs mt-1">
                    Admin Portal v1.0 | Secure Login
                </p>
            </div>
        </div>

        <!-- Animated Background Elements -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-emerald-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <script>
        // Password visibility toggle
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const passwordIcon = togglePassword.querySelector('i');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            if (type === 'text') {
                passwordIcon.classList.remove('ph-eye');
                passwordIcon.classList.add('ph-eye-slash');
            } else {
                passwordIcon.classList.remove('ph-eye-slash');
                passwordIcon.classList.add('ph-eye');
            }
        });

        // Form submission animation
        const form = document.querySelector('form');
        const submitButton = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function() {
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="ph ph-spinner animate-spin mr-2"></i>Signing in...';
        });

        // Auto-focus email field
        document.getElementById('email').focus();

        // Add some interactive effects
        const inputs = document.querySelectorAll('input[type="email"], input[type="password"]');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.parentElement.classList.add('transform', 'scale-[1.02]');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.parentElement.classList.remove('transform', 'scale-[1.02]');
            });
        });
    </script>
@endsection
