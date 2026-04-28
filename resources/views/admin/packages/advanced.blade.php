@extends('admin.layouts.app')

@section('page-title', 'Advanced Packages Management')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Advanced Packages Management</h1>
        <p class="text-gray-600 mt-1">Comprehensive service package management with pricing, features, and subscription tracking</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <a href="{{ route('admin.packages.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            New Package
        </a>
        <a href="{{ route('admin.pricing.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-tags mr-2"></i>
            Update Pricing
        </a>
        <a href="{{ route('admin.packages.stats') }}" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-chart-line mr-2"></i>
            Analytics
        </a>
        <a href="{{ route('admin.dashboard') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Dashboard
        </a>
    </div>

    <!-- Package Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-box text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Packages</p>
                    <p class="text-2xl font-bold text-gray-900">18</p>
                    <p class="text-xs text-green-600">+3 new this month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-dollar-sign text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Monthly Revenue</p>
                    <p class="text-2xl font-bold text-gray-900">$324K</p>
                    <p class="text-xs text-green-600">+22% from last month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-users text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Active Subscriptions</p>
                    <p class="text-2xl font-bold text-gray-900">892</p>
                    <p class="text-xs text-green-600">+67 this month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-star text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Avg Rating</p>
                    <p class="text-2xl font-bold text-gray-900">4.7</p>
                    <p class="text-xs text-green-600">+0.3 improvement</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                <div class="relative">
                    <input type="text" placeholder="Search packages..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Categories</option>
                    <option>Web Development</option>
                    <option>Mobile Apps</option>
                    <option>Cloud Services</option>
                    <option>Consulting</option>
                    <option>Support & Maintenance</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Price Range</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Prices</option>
                    <option>$0 - $99</option>
                    <option>$100 - $499</option>
                    <option>$500 - $999</option>
                    <option>$1000+</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>In Development</option>
                    <option>Coming Soon</option>
                    <option>Deprecated</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Popularity</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Packages</option>
                    <option>Most Popular</option>
                    <option>Trending</option>
                    <option>New Arrivals</option>
                    <option>Best Value</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Packages Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <!-- Package 1 - Premium -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 p-6 text-white">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-xl font-bold">Enterprise Pro</h3>
                    <span class="px-3 py-1 bg-white text-blue-600 rounded-full text-xs font-semibold">POPULAR</span>
                </div>
                <p class="text-blue-100 mb-4">Complete business solution with advanced features</p>
                <div class="flex items-baseline mb-6">
                    <span class="text-4xl font-bold">$999</span>
                    <span class="text-blue-100 ml-2">/month</span>
                </div>
                <button onclick="openEditPackageModal('enterprise-pro')" class="w-full bg-white text-blue-600 py-2 px-4 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                    Edit Package
                </button>
            </div>
            <div class="p-6">
                <h4 class="font-semibold text-gray-900 mb-4">Package Features</h4>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Unlimited Projects</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Priority Support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Custom Integrations</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Advanced Analytics</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Dedicated Account Manager</span>
                    </li>
                </ul>
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Active Subscriptions</span>
                        <span class="font-semibold text-gray-900">127</span>
                    </div>
                    <div class="flex justify-between text-sm mt-2">
                        <span class="text-gray-500">Monthly Revenue</span>
                        <span class="font-semibold text-green-600">$126,873</span>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                <div class="flex justify-between">
                    <button onclick="openEditPackageModal('enterprise-pro')" class="flex-1 mr-2 bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                        <i class="fas fa-edit mr-2"></i>Edit
                    </button>
                    <button onclick="openDeletePackageModal('Enterprise Pro')" class="flex-1 ml-2 bg-red-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-red-700 transition-colors">
                        <i class="fas fa-trash mr-2"></i>Delete
                    </button>
                </div>
            </div>
        </div>

        <!-- Package 2 - Professional -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
            <div class="bg-gradient-to-r from-green-600 to-teal-600 p-6 text-white">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-xl font-bold">Professional</h3>
                    <span class="px-3 py-1 bg-white text-green-600 rounded-full text-xs font-semibold">BEST VALUE</span>
                </div>
                <p class="text-green-100 mb-4">Perfect for growing businesses and teams</p>
                <div class="flex items-baseline mb-6">
                    <span class="text-4xl font-bold">$499</span>
                    <span class="text-green-100 ml-2">/month</span>
                </div>
                <button class="w-full bg-white text-green-600 py-2 px-4 rounded-lg font-semibold hover:bg-green-50 transition-colors">
                    Edit Package
                </button>
            </div>
            <div class="p-6">
                <h4 class="font-semibold text-gray-900 mb-4">Package Features</h4>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Up to 50 Projects</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Standard Support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">API Access</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Basic Analytics</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Team Collaboration</span>
                    </li>
                </ul>
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Active Subscriptions</span>
                        <span class="font-semibold text-gray-900">342</span>
                    </div>
                    <div class="flex justify-between text-sm mt-2">
                        <span class="text-gray-500">Monthly Revenue</span>
                        <span class="font-semibold text-green-600">$170,658</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Package 3 - Starter -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
            <div class="bg-gradient-to-r from-orange-600 to-red-600 p-6 text-white">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-xl font-bold">Starter</h3>
                    <span class="px-3 py-1 bg-white text-orange-600 rounded-full text-xs font-semibold">NEW</span>
                </div>
                <p class="text-orange-100 mb-4">Great for small businesses and startups</p>
                <div class="flex items-baseline mb-6">
                    <span class="text-4xl font-bold">$99</span>
                    <span class="text-orange-100 ml-2">/month</span>
                </div>
                <button class="w-full bg-white text-orange-600 py-2 px-4 rounded-lg font-semibold hover:bg-orange-50 transition-colors">
                    Edit Package
                </button>
            </div>
            <div class="p-6">
                <h4 class="font-semibold text-gray-900 mb-4">Package Features</h4>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Up to 10 Projects</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Email Support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Basic Features</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Mobile App Access</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">1GB Storage</span>
                    </li>
                </ul>
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Active Subscriptions</span>
                        <span class="font-semibold text-gray-900">423</span>
                    </div>
                    <div class="flex justify-between text-sm mt-2">
                        <span class="text-gray-500">Monthly Revenue</span>
                        <span class="font-semibold text-green-600">$41,877</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Package 4 - Custom -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
            <div class="bg-gradient-to-r from-purple-600 to-pink-600 p-6 text-white">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-xl font-bold">Custom Solution</h3>
                    <span class="px-3 py-1 bg-white text-purple-600 rounded-full text-xs font-semibold">PREMIUM</span>
                </div>
                <p class="text-purple-100 mb-4">Tailored solutions for enterprise needs</p>
                <div class="flex items-baseline mb-6">
                    <span class="text-4xl font-bold">Custom</span>
                    <span class="text-purple-100 ml-2">pricing</span>
                </div>
                <button class="w-full bg-white text-purple-600 py-2 px-4 rounded-lg font-semibold hover:bg-purple-50 transition-colors">
                    Edit Package
                </button>
            </div>
            <div class="p-6">
                <h4 class="font-semibold text-gray-900 mb-4">Package Features</h4>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Custom Development</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">White-label Solutions</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">On-premise Deployment</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">SLA Guarantee</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">24/7 Premium Support</span>
                    </li>
                </ul>
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Active Clients</span>
                        <span class="font-semibold text-gray-900">18</span>
                    </div>
                    <div class="flex justify-between text-sm mt-2">
                        <span class="text-gray-500">Average Contract</span>
                        <span class="font-semibold text-green-600">$45,000</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Package 5 - Free Trial -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
            <div class="bg-gradient-to-r from-gray-600 to-gray-800 p-6 text-white">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-xl font-bold">Free Trial</h3>
                    <span class="px-3 py-1 bg-white text-gray-600 rounded-full text-xs font-semibold">TRIAL</span>
                </div>
                <p class="text-gray-300 mb-4">Try our platform with no commitment</p>
                <div class="flex items-baseline mb-6">
                    <span class="text-4xl font-bold">$0</span>
                    <span class="text-gray-300 ml-2">/14 days</span>
                </div>
                <button class="w-full bg-white text-gray-600 py-2 px-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors">
                    Edit Package
                </button>
            </div>
            <div class="p-6">
                <h4 class="font-semibold text-gray-900 mb-4">Package Features</h4>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Up to 3 Projects</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Basic Features</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Community Support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">500MB Storage</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">No Credit Card Required</span>
                    </li>
                </ul>
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Active Trials</span>
                        <span class="font-semibold text-gray-900">89</span>
                    </div>
                    <div class="flex justify-between text-sm mt-2">
                        <span class="text-gray-500">Conversion Rate</span>
                        <span class="font-semibold text-green-600">32%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Package 6 - Coming Soon -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow opacity-90">
            <div class="bg-gradient-to-r from-indigo-600 to-blue-600 p-6 text-white">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-xl font-bold">AI Assistant</h3>
                    <span class="px-3 py-1 bg-white text-indigo-600 rounded-full text-xs font-semibold">COMING SOON</span>
                </div>
                <p class="text-indigo-100 mb-4">AI-powered automation and insights</p>
                <div class="flex items-baseline mb-6">
                    <span class="text-4xl font-bold">$TBD</span>
                    <span class="text-indigo-100 ml-2">/month</span>
                </div>
                <button class="w-full bg-white text-indigo-600 py-2 px-4 rounded-lg font-semibold hover:bg-indigo-50 transition-colors">
                    Configure Package
                </button>
            </div>
            <div class="p-6">
                <h4 class="font-semibold text-gray-900 mb-4">Package Features</h4>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-robot text-gray-400 mr-3"></i>
                        <span class="text-gray-500">AI-Powered Analytics</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-robot text-gray-400 mr-3"></i>
                        <span class="text-gray-500">Automated Workflows</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-robot text-gray-400 mr-3"></i>
                        <span class="text-gray-500">Smart Recommendations</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-robot text-gray-400 mr-3"></i>
                        <span class="text-gray-500">Natural Language Processing</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-robot text-gray-400 mr-3"></i>
                        <span class="text-gray-500">Predictive Insights</span>
                    </li>
                </ul>
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Waitlist</span>
                        <span class="font-semibold text-gray-900">234</span>
                    </div>
                    <div class="flex justify-between text-sm mt-2">
                        <span class="text-gray-500">Expected Launch</span>
                        <span class="font-semibold text-indigo-600">Q2 2026</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Package Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Revenue by Package -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Revenue by Package</h2>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Professional</p>
                        <p class="text-sm font-medium text-gray-900">$170,658</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 53%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">53% of total revenue</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Enterprise Pro</p>
                        <p class="text-sm font-medium text-gray-900">$126,873</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 39%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">39% of total revenue</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Starter</p>
                        <p class="text-sm font-medium text-gray-900">$41,877</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-orange-600 h-2 rounded-full" style="width: 13%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">13% of total revenue</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Custom Solutions</p>
                        <p class="text-sm font-medium text-gray-900">$810,000</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-purple-600 h-2 rounded-full" style="width: 72%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Annual contracts</p>
                </div>
            </div>
        </div>

        <!-- Subscription Growth -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Subscription Growth</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-arrow-up text-green-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">This Month</p>
                            <p class="text-xs text-gray-500">New subscriptions</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">+67</p>
                        <p class="text-xs text-green-600">+8.1% growth</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-users text-blue-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Total Active</p>
                            <p class="text-xs text-gray-500">Current subscribers</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">892</p>
                        <p class="text-xs text-blue-600">All packages</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-chart-line text-purple-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Churn Rate</p>
                            <p class="text-xs text-gray-500">Monthly cancellations</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">2.3%</p>
                        <p class="text-xs text-green-600">-0.5% improvement</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-clock text-orange-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Avg Lifetime</p>
                            <p class="text-xs text-gray-500">Customer retention</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">18 months</p>
                        <p class="text-xs text-orange-600">+2 months</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Package Performance -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Package Performance</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-star text-blue-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Enterprise Pro</p>
                            <p class="text-xs text-gray-500">Customer satisfaction</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">4.9</p>
                        <p class="text-xs text-green-600">Excellent</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-star text-green-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Professional</p>
                            <p class="text-xs text-gray-500">Customer satisfaction</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">4.7</p>
                        <p class="text-xs text-green-600">Very Good</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-star text-orange-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Starter</p>
                            <p class="text-xs text-gray-500">Customer satisfaction</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">4.5</p>
                        <p class="text-xs text-green-600">Good</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-star text-purple-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Custom Solutions</p>
                            <p class="text-xs text-gray-500">Client satisfaction</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">5.0</p>
                        <p class="text-xs text-green-600">Perfect</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Package Modal -->
<div id="createPackageModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
    <div class="relative top-20 mx-auto p-5 border w-[600px] shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900">Create New Package</h3>
                <button onclick="closeModal('createPackageModal')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form onsubmit="handleCreatePackage(event)">
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Package Name</label>
                            <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="e.g., Professional Plus">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                            <select required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select Category</option>
                                <option>Web Development</option>
                                <option>Mobile Apps</option>
                                <option>Cloud Services</option>
                                <option>Consulting</option>
                                <option>Support & Maintenance</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea rows="3" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Describe the package features and benefits"></textarea>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                            <input type="number" required min="0" step="0.01" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="99.99">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Billing Cycle</label>
                            <select required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option>Monthly</option>
                                <option>Quarterly</option>
                                <option>Annually</option>
                                <option>One-time</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>Coming Soon</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Features (one per line)</label>
                        <textarea rows="4" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Unlimited Projects&#10;Priority Support&#10;Custom Integrations"></textarea>
                    </div>
                </div>
                
                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" onclick="closeModal('createPackageModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        Create Package
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Package Modal -->
<div id="editPackageModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
    <div class="relative top-20 mx-auto p-5 border w-[600px] shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900">Edit Package</h3>
                <button onclick="closeModal('editPackageModal')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form onsubmit="handleEditPackage(event)">
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Package Name</label>
                            <input type="text" required id="editPackageName" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                            <select required id="editPackageCategory" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option>Web Development</option>
                                <option>Mobile Apps</option>
                                <option>Cloud Services</option>
                                <option>Consulting</option>
                                <option>Support & Maintenance</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea rows="3" required id="editPackageDescription" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                            <input type="number" required min="0" step="0.01" id="editPackagePrice" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Billing Cycle</label>
                            <select required id="editPackageBilling" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option>Monthly</option>
                                <option>Quarterly</option>
                                <option>Annually</option>
                                <option>One-time</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select required id="editPackageStatus" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>Coming Soon</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Features (one per line)</label>
                        <textarea rows="4" required id="editPackageFeatures" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>
                </div>
                
                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" onclick="closeModal('editPackageModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        Update Package
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deletePackageModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900">Delete Package</h3>
                <button onclick="closeModal('deletePackageModal')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="mt-2">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">Are you sure you want to delete this package?</p>
                        <p class="text-sm text-gray-500" id="deletePackageName">Package name will appear here</p>
                    </div>
                </div>
                
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 mb-4">
                    <p class="text-sm text-yellow-800">
                        <strong>Warning:</strong> This action cannot be undone. All associated subscriptions will be affected.
                    </p>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button onclick="closeModal('deletePackageModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                    Cancel
                </button>
                <button onclick="handleDeletePackage()" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                    Delete Package
                </button>
            </div>
        </div>
    </div>
</div>

<script>
// CRUD Operations
function handleCreatePackage(event) {
    event.preventDefault();
    
    // Simulate API call
    showNotification('Success', 'Package created successfully!', 'success');
    closeModal('createPackageModal');
    
    // Reset form
    event.target.reset();
}

function handleEditPackage(event) {
    event.preventDefault();
    
    // Simulate API call
    showNotification('Success', 'Package updated successfully!', 'success');
    closeModal('editPackageModal');
}

function openEditPackageModal(packageId) {
    // Simulate loading package data
    const packageData = {
        name: 'Enterprise Pro',
        category: 'All Services',
        description: 'Complete business solution with advanced features',
        price: '999',
        billing: 'Monthly',
        status: 'Active',
        features: 'Unlimited Projects\nPriority Support\nCustom Integrations'
    };
    
    // Populate form
    document.getElementById('editPackageName').value = packageData.name;
    document.getElementById('editPackageCategory').value = packageData.category;
    document.getElementById('editPackageDescription').value = packageData.description;
    document.getElementById('editPackagePrice').value = packageData.price;
    document.getElementById('editPackageBilling').value = packageData.billing;
    document.getElementById('editPackageStatus').value = packageData.status;
    document.getElementById('editPackageFeatures').value = packageData.features;
    
    openModal('editPackageModal');
}

function openDeletePackageModal(packageName) {
    document.getElementById('deletePackageName').textContent = `Package: ${packageName}`;
    openModal('deletePackageModal');
}

function handleDeletePackage() {
    // Simulate API call
    showNotification('Success', 'Package deleted successfully!', 'success');
    closeModal('deletePackageModal');
}
</script>
@endsection
