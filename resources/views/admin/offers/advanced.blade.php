@extends('admin.layouts.app')

@section('page-title', 'Advanced Offers & Discounts Management')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Advanced Offers & Discounts Management</h1>
        <p class="text-gray-600 mt-1">Comprehensive promotional campaign management with analytics and automation</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <a href="{{ route('admin.offers.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            New Campaign
        </a>
        <a href="{{ route('admin.offers.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-percentage mr-2"></i>
            Create Discount
        </a>
        <a href="{{ route('admin.offers.stats') }}" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-chart-line mr-2"></i>
            Analytics
        </a>
        <a href="{{ route('admin.dashboard.mother') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Dashboard
        </a>
    </div>

    <!-- Offers Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-tags text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Active Campaigns</p>
                    <p class="text-2xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-green-600">+3 this month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-dollar-sign text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Revenue Generated</p>
                    <p class="text-2xl font-bold text-gray-900">$89.4K</p>
                    <p class="text-xs text-green-600">+34% from offers</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-users text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Redemptions</p>
                    <p class="text-2xl font-bold text-gray-900">1,247</p>
                    <p class="text-xs text-green-600">+189 this week</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-percentage text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Avg Discount</p>
                    <p class="text-2xl font-bold text-gray-900">18%</p>
                    <p class="text-xs text-gray-600">Optimal conversion rate</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search Campaigns</label>
                <div class="relative">
                    <input type="text" placeholder="Search offers..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Campaign Type</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Types</option>
                    <option>Percentage Discount</option>
                    <option>Fixed Amount</option>
                    <option>Free Trial</option>
                    <option>Bulk Offer</option>
                    <option>Loyalty Reward</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Scheduled</option>
                    <option>Paused</option>
                    <option>Expired</option>
                    <option>Draft</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Target Audience</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Audiences</option>
                    <option>New Customers</option>
                    <option>Existing Customers</option>
                    <option>VIP Customers</option>
                    <option>Inactive Users</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date Range</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Time</option>
                    <option>Today</option>
                    <option>This Week</option>
                    <option>This Month</option>
                    <option>This Quarter</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Active Campaigns -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Campaign 1 - Launch Special -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-xl font-bold">Launch Special</h3>
                        <p class="text-blue-100">Limited time introductory offer</p>
                    </div>
                    <span class="px-3 py-1 bg-white text-blue-600 rounded-full text-xs font-semibold">ACTIVE</span>
                </div>
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div>
                        <p class="text-blue-100 text-xs">Discount</p>
                        <p class="text-2xl font-bold">33%</p>
                    </div>
                    <div>
                        <p class="text-blue-100 text-xs">Redemptions</p>
                        <p class="text-2xl font-bold">45</p>
                    </div>
                    <div>
                        <p class="text-blue-100 text-xs">Revenue</p>
                        <p class="text-2xl font-bold">$8.9K</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-xs">Time Remaining</p>
                        <p class="font-semibold">5 days 14 hours</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="bg-white text-blue-600 px-3 py-1 rounded text-sm hover:bg-blue-50">Edit</button>
                        <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">Pause</button>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <h4 class="font-semibold text-gray-900 mb-4">Campaign Details</h4>
                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Target Audience</span>
                        <span class="font-medium">New Customers</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Valid Plans</span>
                        <span class="font-medium">All Services</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Min Purchase</span>
                        <span class="font-medium">$99</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Usage Limit</span>
                        <span class="font-medium">100 total (55 left)</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Conversion Rate</span>
                        <span class="font-medium text-green-600">24.5%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Campaign 2 - Summer Sale -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-orange-600 to-red-600 p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-xl font-bold">Summer Sale 2026</h3>
                        <p class="text-orange-100">Seasonal promotional campaign</p>
                    </div>
                    <span class="px-3 py-1 bg-white text-orange-600 rounded-full text-xs font-semibold">ACTIVE</span>
                </div>
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div>
                        <p class="text-orange-100 text-xs">Discount</p>
                        <p class="text-2xl font-bold">25%</p>
                    </div>
                    <div>
                        <p class="text-orange-100 text-xs">Redemptions</p>
                        <p class="text-2xl font-bold">234</p>
                    </div>
                    <div>
                        <p class="text-orange-100 text-xs">Revenue</p>
                        <p class="text-2xl font-bold">$45.2K</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-orange-100 text-xs">Campaign Duration</p>
                        <p class="font-semibold">Jun 1 - Aug 31</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="bg-white text-orange-600 px-3 py-1 rounded text-sm hover:bg-orange-50">Edit</button>
                        <button class="bg-orange-500 text-white px-3 py-1 rounded text-sm hover:bg-orange-600">Pause</button>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <h4 class="font-semibold text-gray-900 mb-4">Campaign Details</h4>
                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Target Audience</span>
                        <span class="font-medium">All Customers</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Valid Plans</span>
                        <span class="font-medium">Professional & Enterprise</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Min Purchase</span>
                        <span class="font-medium">$199</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Usage Limit</span>
                        <span class="font-medium">500 total (266 left)</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Conversion Rate</span>
                        <span class="font-medium text-green-600">31.2%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Campaign 3 - Loyalty Reward -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-green-600 to-teal-600 p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-xl font-bold">VIP Loyalty Reward</h3>
                        <p class="text-green-100">Exclusive offer for loyal customers</p>
                    </div>
                    <span class="px-3 py-1 bg-white text-green-600 rounded-full text-xs font-semibold">ACTIVE</span>
                </div>
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div>
                        <p class="text-green-100 text-xs">Discount</p>
                        <p class="text-2xl font-bold">20%</p>
                    </div>
                    <div>
                        <p class="text-green-100 text-xs">Redemptions</p>
                        <p class="text-2xl font-bold">67</p>
                    </div>
                    <div>
                        <p class="text-green-100 text-xs">Revenue</p>
                        <p class="text-2xl font-bold">$15.8K</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-xs">Valid Until</p>
                        <p class="font-semibold">Dec 31, 2026</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="bg-white text-green-600 px-3 py-1 rounded text-sm hover:bg-green-50">Edit</button>
                        <button class="bg-green-500 text-white px-3 py-1 rounded text-sm hover:bg-green-600">Pause</button>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <h4 class="font-semibold text-gray-900 mb-4">Campaign Details</h4>
                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Target Audience</span>
                        <span class="font-medium">VIP Customers</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Valid Plans</span>
                        <span class="font-medium">Enterprise Pro Only</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Min Purchase</span>
                        <span class="font-medium">$499</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Usage Limit</span>
                        <span class="font-medium">Unlimited</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Conversion Rate</span>
                        <span class="font-medium text-green-600">42.7%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Campaign 4 - Referral Bonus -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-purple-600 to-pink-600 p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-xl font-bold">Referral Bonus</h3>
                        <p class="text-purple-100">Refer a friend and get rewarded</p>
                    </div>
                    <span class="px-3 py-1 bg-white text-purple-600 rounded-full text-xs font-semibold">ACTIVE</span>
                </div>
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div>
                        <p class="text-purple-100 text-xs">Discount</p>
                        <p class="text-2xl font-bold">$50</p>
                    </div>
                    <div>
                        <p class="text-purple-100 text-xs">Redemptions</p>
                        <p class="text-2xl font-bold">89</p>
                    </div>
                    <div>
                        <p class="text-purple-100 text-xs">Revenue</p>
                        <p class="text-2xl font-bold">$12.3K</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-100 text-xs">Ongoing Campaign</p>
                        <p class="font-semibold">No expiry</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="bg-white text-purple-600 px-3 py-1 rounded text-sm hover:bg-purple-50">Edit</button>
                        <button class="bg-purple-500 text-white px-3 py-1 rounded text-sm hover:bg-purple-600">Pause</button>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <h4 class="font-semibold text-gray-900 mb-4">Campaign Details</h4>
                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Target Audience</span>
                        <span class="font-medium">Existing Customers</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Valid Plans</span>
                        <span class="font-medium">All Plans</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Reward Type</span>
                        <span class="font-medium">Fixed Amount</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Usage Limit</span>
                        <span class="font-medium">Per referral</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Conversion Rate</span>
                        <span class="font-medium text-green-600">28.9%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scheduled Campaigns -->
    <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Scheduled Campaigns</h2>
                <button class="text-blue-600 hover:text-blue-900 text-sm">
                    <i class="fas fa-plus mr-2"></i>Add Campaign
                </button>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Campaign</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Discount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Scheduled Campaign 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-calendar text-yellow-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Black Friday Special</div>
                                    <div class="text-sm text-gray-500">Biggest sale of the year</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                Percentage
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">40% OFF</div>
                            <div class="text-xs text-gray-500">All plans</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Nov 29, 2026</div>
                            <div class="text-xs text-gray-500">12:00 AM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">4 days</div>
                            <div class="text-xs text-gray-500">Nov 29 - Dec 2</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Scheduled
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                            <button class="text-gray-600 hover:text-gray-900">Preview</button>
                        </td>
                    </tr>

                    <!-- Scheduled Campaign 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-gift text-green-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">New Year Promotion</div>
                                    <div class="text-sm text-gray-500">Start the year with savings</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Fixed Amount
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">$100 OFF</div>
                            <div class="text-xs text-gray-500">Min $299 purchase</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Jan 1, 2027</div>
                            <div class="text-xs text-gray-500">12:00 AM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">7 days</div>
                            <div class="text-xs text-gray-500">Jan 1 - Jan 7</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Scheduled
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-2">Edit</button>
                            <button class="text-gray-600 hover:text-gray-900">Preview</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Campaign Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Performance Metrics -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Performance Metrics</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-chart-line text-blue-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Total Revenue</p>
                            <p class="text-xs text-gray-500">From all campaigns</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">$89.4K</p>
                        <p class="text-xs text-green-600">+34% growth</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-percentage text-green-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Avg Conversion</p>
                            <p class="text-xs text-gray-500">Redemption rate</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">31.7%</p>
                        <p class="text-xs text-green-600">+5% improvement</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-users text-purple-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">New Customers</p>
                            <p class="text-xs text-gray-500">Acquired via offers</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">234</p>
                        <p class="text-xs text-green-600">+67 this month</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-redo text-orange-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Repeat Rate</p>
                            <p class="text-xs text-gray-500">Customers returning</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">68%</p>
                        <p class="text-xs text-orange-600">Good retention</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Performing Campaigns -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Top Performing</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <span class="text-orange-600 font-bold text-xs">1</span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Summer Sale 2026</p>
                            <p class="text-xs text-gray-500">$45.2K revenue</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">50.6%</p>
                        <p class="text-xs text-green-600">Of total revenue</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <span class="text-blue-600 font-bold text-xs">2</span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Launch Special</p>
                            <p class="text-xs text-gray-500">$8.9K revenue</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">10.0%</p>
                        <p class="text-xs text-green-600">Of total revenue</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <span class="text-green-600 font-bold text-xs">3</span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">VIP Loyalty Reward</p>
                            <p class="text-xs text-gray-500">$15.8K revenue</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">17.7%</p>
                        <p class="text-xs text-green-600">Of total revenue</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <span class="text-purple-600 font-bold text-xs">4</span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Referral Bonus</p>
                            <p class="text-xs text-gray-500">$12.3K revenue</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">13.8%</p>
                        <p class="text-xs text-green-600">Of total revenue</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Campaign Insights -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Campaign Insights</h2>
            <div class="space-y-4">
                <div class="border-l-4 border-green-500 pl-4">
                    <p class="text-sm font-medium text-gray-900">Best Conversion</p>
                    <p class="text-xs text-gray-500">VIP Loyalty Reward performs best</p>
                    <p class="text-xs text-green-600 mt-1">42.7% conversion rate</p>
                </div>

                <div class="border-l-4 border-blue-500 pl-4">
                    <p class="text-sm font-medium text-gray-900">Peak Time</p>
                    <p class="text-xs text-gray-500">Most redemptions on weekends</p>
                    <p class="text-xs text-blue-600 mt-1">Saturday 2-4 PM</p>
                </div>

                <div class="border-l-4 border-orange-500 pl-4">
                    <p class="text-sm font-medium text-gray-900">Optimal Discount</p>
                    <p class="text-xs text-gray-500">25-33% discounts convert best</p>
                    <p class="text-xs text-orange-600 mt-1">Sweet spot for pricing</p>
                </div>

                <div class="border-l-4 border-purple-500 pl-4">
                    <p class="text-sm font-medium text-gray-900">Audience Response</p>
                    <p class="text-xs text-gray-500">New customers respond 34% better</p>
                    <p class="text-xs text-purple-600 mt-1">Target new signups</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
