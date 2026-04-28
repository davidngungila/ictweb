@extends('admin.layouts.app')

@section('page-title', 'Advanced Pricing Management')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Advanced Pricing Management</h1>
        <p class="text-gray-600 mt-1">Comprehensive pricing strategy, plans, and revenue optimization tools</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <a href="{{ route('admin.pricing.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            New Pricing Plan
        </a>
        <a href="{{ route('admin.pricing.index') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-percentage mr-2"></i>
            Update Prices
        </a>
        <a href="{{ route('admin.pricing.stats') }}" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-chart-line mr-2"></i>
            Revenue Analytics
        </a>
        <a href="{{ route('admin.dashboard.mother') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Dashboard
        </a>
    </div>

    <!-- Pricing Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-dollar-sign text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Revenue</p>
                    <p class="text-2xl font-bold text-gray-900">$1.2M</p>
                    <p class="text-xs text-green-600">+23% this quarter</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-tags text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Active Plans</p>
                    <p class="text-2xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-gray-600">Across all services</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-users text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Paying Customers</p>
                    <p class="text-2xl font-bold text-gray-900">1,247</p>
                    <p class="text-xs text-green-600">+89 this month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-chart-bar text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Avg. Revenue/User</p>
                    <p class="text-2xl font-bold text-gray-900">$962</p>
                    <p class="text-xs text-green-600">+8% increase</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search Plans</label>
                <div class="relative">
                    <input type="text" placeholder="Search pricing plans..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Service Type</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Services</option>
                    <option>Web Development</option>
                    <option>Mobile Apps</option>
                    <option>Cloud Services</option>
                    <option>Consulting</option>
                    <option>Support Plans</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Billing Cycle</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Cycles</option>
                    <option>Monthly</option>
                    <option>Quarterly</option>
                    <option>Annually</option>
                    <option>One-time</option>
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
                    <option>Inactive</option>
                    <option>Promotional</option>
                    <option>Legacy</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Pricing Plans Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Pricing Plans</h2>
                <div class="flex items-center space-x-2">
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-filter"></i>
                    </button>
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-download"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Plan Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Billing</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customers</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Revenue</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Plan 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-crown text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Enterprise Pro</div>
                                    <div class="text-sm text-gray-500">Premium package with all features</div>
                                    <div class="flex items-center mt-1">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                            Popular
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                All Services
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                <div class="font-medium">$999</div>
                                <div class="text-xs text-gray-500">$8,991/year</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Monthly
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">127</div>
                            <div class="text-xs text-green-600">+12 this month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$126,873</div>
                            <div class="text-xs text-green-600">+11% from last month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                            <button class="text-gray-600 hover:text-gray-900">View</button>
                        </td>
                    </tr>

                    <!-- Plan 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-briefcase text-green-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Professional</div>
                                    <div class="text-sm text-gray-500">Perfect for growing businesses</div>
                                    <div class="flex items-center mt-1">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Best Value
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                Web Development
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                <div class="font-medium">$499</div>
                                <div class="text-xs text-gray-500">$4,491/year</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Monthly
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">342</div>
                            <div class="text-xs text-green-600">+28 this month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$170,658</div>
                            <div class="text-xs text-green-600">+9% from last month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                            <button class="text-gray-600 hover:text-gray-900">View</button>
                        </td>
                    </tr>

                    <!-- Plan 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-rocket text-orange-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Starter</div>
                                    <div class="text-sm text-gray-500">Great for small businesses</div>
                                    <div class="flex items-center mt-1">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                            Popular
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                Mobile Apps
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                <div class="font-medium">$99</div>
                                <div class="text-xs text-gray-500">$891/year</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Monthly
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">423</div>
                            <div class="text-xs text-green-600">+35 this month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$41,877</div>
                            <div class="text-xs text-green-600">+9% from last month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                            <button class="text-gray-600 hover:text-gray-900">View</button>
                        </td>
                    </tr>

                    <!-- Plan 4 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-cloud text-purple-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Cloud Basic</div>
                                    <div class="text-sm text-gray-500">Essential cloud services</div>
                                    <div class="flex items-center mt-1">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                            New
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                Cloud Services
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                <div class="font-medium">$149</div>
                                <div class="text-xs text-gray-500">$1,341/year</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Monthly
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">89</div>
                            <div class="text-xs text-green-600">+15 this month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$13,261</div>
                            <div class="text-xs text-green-600">+20% from last month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                            <button class="text-gray-600 hover:text-gray-900">View</button>
                        </td>
                    </tr>

                    <!-- Plan 5 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-headset text-red-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Support Plus</div>
                                    <div class="text-sm text-gray-500">24/7 premium support</div>
                                    <div class="flex items-center mt-1">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Essential
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Support Plans
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                <div class="font-medium">$299</div>
                                <div class="text-xs text-gray-500">$2,691/year</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Monthly
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">67</div>
                            <div class="text-xs text-green-600">+8 this month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$20,033</div>
                            <div class="text-xs text-green-600">+14% from last month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                            <button class="text-gray-600 hover:text-gray-900">View</button>
                        </td>
                    </tr>

                    <!-- Plan 6 - Promotional -->
                    <tr class="hover:bg-gray-50 bg-yellow-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-percentage text-yellow-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Launch Special</div>
                                    <div class="text-sm text-gray-500">Limited time promotional offer</div>
                                    <div class="flex items-center mt-1">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Promotional
                                        </span>
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 ml-1">
                                            Limited
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                All Services
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                <div class="font-medium line-through text-gray-400">$299</div>
                                <div class="font-medium text-green-600">$199</div>
                                <div class="text-xs text-gray-500">33% OFF</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Promotional
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">45</div>
                            <div class="text-xs text-yellow-600">Limited slots</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$8,955</div>
                            <div class="text-xs text-yellow-600">Ends in 5 days</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Promotional
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-yellow-600 hover:text-yellow-900 mr-2">Edit</button>
                            <button class="text-gray-600 hover:text-gray-900">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pricing Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Revenue Breakdown -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Revenue Breakdown</h2>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Professional Plan</p>
                        <p class="text-sm font-medium text-gray-900">$170,658</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 52%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">52% of monthly revenue</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Enterprise Pro</p>
                        <p class="text-sm font-medium text-gray-900">$126,873</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 39%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">39% of monthly revenue</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Starter Plan</p>
                        <p class="text-sm font-medium text-gray-900">$41,877</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-orange-600 h-2 rounded-full" style="width: 13%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">13% of monthly revenue</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Other Plans</p>
                        <p class="text-sm font-medium text-gray-900">$42,255</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-purple-600 h-2 rounded-full" style="width: 13%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Support & Cloud services</p>
                </div>
            </div>
        </div>

        <!-- Pricing Performance -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Pricing Performance</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-arrow-up text-green-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Conversion Rate</p>
                            <p class="text-xs text-gray-500">Trial to paid</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">32%</p>
                        <p class="text-xs text-green-600">+5% this month</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-chart-line text-blue-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">ARPU</p>
                            <p class="text-xs text-gray-500">Avg revenue per user</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">$962</p>
                        <p class="text-xs text-green-600">+8% increase</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-users text-purple-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Customer Growth</p>
                            <p class="text-xs text-gray-500">New customers</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">+89</p>
                        <p class="text-xs text-green-600">+7.7% growth</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-percentage text-orange-600 text-xs"></i>
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
            </div>
        </div>

        <!-- Pricing Insights -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Pricing Insights</h2>
            <div class="space-y-4">
                <div class="border-l-4 border-blue-500 pl-4">
                    <p class="text-sm font-medium text-gray-900">Most Profitable Plan</p>
                    <p class="text-xs text-gray-500">Enterprise Pro generates highest margin</p>
                    <p class="text-xs text-blue-600 mt-1">68% profit margin</p>
                </div>

                <div class="border-l-4 border-green-500 pl-4">
                    <p class="text-sm font-medium text-gray-900">Fastest Growing</p>
                    <p class="text-xs text-gray-500">Professional Plan growth rate</p>
                    <p class="text-xs text-green-600 mt-1">+28 new customers this month</p>
                </div>

                <div class="border-l-4 border-orange-500 pl-4">
                    <p class="text-sm font-medium text-gray-900">Price Optimization</p>
                    <p class="text-xs text-gray-500">Starter Plan could increase by 15%</p>
                    <p class="text-xs text-orange-600 mt-1">Based on market analysis</p>
                </div>

                <div class="border-l-4 border-purple-500 pl-4">
                    <p class="text-sm font-medium text-gray-900">Upsell Opportunity</p>
                    <p class="text-xs text-gray-500">Starter to Professional upgrade path</p>
                    <p class="text-xs text-purple-600 mt-1">42% conversion potential</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
