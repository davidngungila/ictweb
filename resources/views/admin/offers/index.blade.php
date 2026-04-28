@extends('admin.layouts.app')

@section('title', 'Advanced Offers Management')
@section('page-title', 'Advanced Offers Management')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header with Quick Actions -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Advanced Offers Management</h1>
            <p class="text-gray-600 mt-1">Strategic discount campaigns and promotional offers management</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.offers.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-plus mr-2"></i>
                Create Offer
            </a>
            <a href="{{ route('admin.offers.export') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-download mr-2"></i>
                Export Offers
            </a>
        </div>
    </div>

    <!-- Advanced Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Offers</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $offers->count() }}</p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-tags text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Active</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $offers->where('is_active', true)->count() }}</p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Valid</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $offers->where('is_active', true)->where(function($q) { $q->whereNull('valid_until')->orWhere('valid_until', '>', now()); })->count() }}</p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-clock text-purple-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Used</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $offers->sum('used_count') }}</p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-users text-yellow-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters and Search -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search offers..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full lg:w-80">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Types</option>
                    <option value="percentage">Percentage</option>
                    <option value="fixed">Fixed Amount</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Advanced Offers Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Offer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Code</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Discount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Usage</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Valid Period</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($offers as $offer)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $offer->name }}</div>
                            <div class="text-sm text-gray-500 max-w-xs truncate">{{ $offer->description }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded">{{ $offer->code }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($offer->discount_type === 'percentage')
                            <div class="text-sm text-gray-900">{{ $offer->discount_value }}%</div>
                            @else
                            <div class="text-sm text-gray-900">{{ $offer->currency ?? 'TZS' }} {{ number_format($offer->discount_value, 0) }}</div>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $offer->used_count }} / {{ $offer->usage_limit ?? '∞' }}</div>
                            <div class="w-16 bg-gray-200 rounded-full h-2 mt-1">
                                @if($offer->usage_limit)
                                <div class="bg-blue-500 h-2 rounded-full" style="width: {{ min(($offer->used_count / $offer->usage_limit) * 100, 100) }}%"></div>
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                {{ $offer->valid_from ? $offer->valid_from->format('M d, Y') : '-' }}
                            </div>
                            <div class="text-xs text-gray-500">
                                {{ $offer->valid_until ? $offer->valid_until->format('M d, Y') : 'No limit' }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($offer->isValid())
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Valid
                            </span>
                            @elseif($offer->isExpired())
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Expired
                            </span>
                            @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                Inactive
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-1">
                                <a href="{{ route('admin.offers.show', $offer) }}" class="text-blue-600 hover:text-blue-900 p-1" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.offers.edit', $offer) }}" class="text-green-600 hover:text-green-900 p-1" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.offers.destroy', $offer) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 p-1" title="Delete" onclick="return confirm('Are you sure you want to delete this offer?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                            <i class="fas fa-inbox text-4xl mb-4"></i>
                            <p class="text-lg">No offers found</p>
                            <a href="{{ route('admin.offers.create') }}" class="text-blue-600 hover:text-blue-900">Create your first offer</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-download mr-2"></i>
                Export Offers
            </button>
        </div>
    </div>

    <!-- Advanced Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Active Offers</p>
                    <p class="text-2xl font-bold text-gray-900">14</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 3 new this week
                    </p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-percentage text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Redemptions</p>
                    <p class="text-2xl font-bold text-gray-900">1,247</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 18% increase
                    </p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-ticket-alt text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Avg. Discount</p>
                    <p class="text-2xl font-bold text-gray-900">23%</p>
                    <p class="text-xs text-yellow-600 mt-1">
                        <i class="fas fa-arrow-down"></i> 2% decrease
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-chart-line text-yellow-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Revenue Saved</p>
                    <p class="text-2xl font-bold text-gray-900">$47.3K</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 12% increase
                    </p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-piggy-bank text-purple-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Offer Performance Analytics -->
    <div class="bg-white rounded-lg shadow p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Offer Performance Analytics</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="text-3xl font-bold text-blue-600">$89.2K</div>
                <div class="text-sm text-gray-600">Total Savings</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-up"></i> 24% from last month
                </div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-green-600">89%</div>
                <div class="text-sm text-gray-600">Customer Satisfaction</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-up"></i> 5% improvement
                </div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-yellow-600">4.2</div>
                <div class="text-sm text-gray-600">Avg. Rating</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-up"></i> 0.3 points
                </div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-purple-600">67%</div>
                <div class="text-sm text-gray-600">Conversion Rate</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-up"></i> 8% improvement
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters and Search -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Advanced search (offer name, code, type...)" 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full lg:w-80">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="scheduled">Scheduled</option>
                    <option value="expired">Expired</option>
                    <option value="paused">Paused</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Types</option>
                    <option value="percentage">Percentage</option>
                    <option value="fixed">Fixed Amount</option>
                    <option value="bogo">Buy One Get One</option>
                    <option value="free_trial">Free Trial</option>
                    <option value="free_shipping">Free Shipping</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Categories</option>
                    <option value="web">Web Development</option>
                    <option value="mobile">Mobile App</option>
                    <option value="software">Software Solutions</option>
                    <option value="consulting">IT Consulting</option>
                    <option value="support">Technical Support</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Duration</option>
                    <option value="limited">Limited Time</option>
                    <option value="ongoing">Ongoing</option>
                    <option value="seasonal">Seasonal</option>
                    <option value="flash">Flash Sale</option>
                </select>
            </div>
            
            <div class="flex space-x-2">
                <button class="text-gray-500 hover:text-gray-700" title="Advanced Filters">
                    <i class="fas fa-filter"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="Sort Options">
                    <i class="fas fa-sort"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="Grid View">
                    <i class="fas fa-th"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="Analytics">
                    <i class="fas fa-chart-bar"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Advanced Offers Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <input type="checkbox" class="rounded border-gray-300">
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Offer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Discount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Redemptions</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Savings</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Conversion</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Advanced Offer 1 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-12 w-12 flex-shrink-0 bg-red-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-fire text-red-600 text-lg"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Summer Special 2024</div>
                                    <div class="text-sm text-gray-500">Limited time discount on all premium packages</div>
                                    <div class="flex items-center mt-1">
                                        <span class="text-xs text-gray-500">
                                            <i class="fas fa-bolt text-yellow-400"></i> Flash Sale
                                        </span>
                                        <span class="text-xs text-gray-500 ml-2">
                                            <i class="fas fa-star text-yellow-400"></i> Featured
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Percentage
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-900">25%</div>
                            <div class="text-xs text-gray-500">Maximum $500</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">7 Days</div>
                            <div class="text-xs text-red-600">Ends in 2 days</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">342</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-red-500 h-2 rounded-full" style="width: 92%"></div>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500">Target: 500</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$28.4K</div>
                            <div class="text-xs text-green-600">+45% this week</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">78%</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 78%"></div>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500">Excellent</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-1">
                                <button class="text-blue-600 hover:text-blue-900 p-1" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900 p-1" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-purple-600 hover:text-purple-900 p-1" title="Analytics">
                                    <i class="fas fa-chart-line"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-900 p-1" title="Duplicate">
                                    <i class="fas fa-copy"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900 p-1" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Advanced Offer 2 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-12 w-12 flex-shrink-0 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-gift text-blue-600 text-lg"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">New Customer Welcome</div>
                                    <div class="text-sm text-gray-500">Special discount for first-time customers</div>
                                    <div class="flex items-center mt-1">
                                        <span class="text-xs text-gray-500">
                                            <i class="fas fa-user-plus text-green-400"></i> New Customer
                                        </span>
                                        <span class="text-xs text-gray-500 ml-2">
                                            <i class="fas fa-infinity text-blue-400"></i> Ongoing
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Fixed Amount
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-900">$100</div>
                            <div class="text-xs text-gray-500">Min. purchase $500</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Ongoing</div>
                            <div class="text-xs text-green-600">No expiry</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">567</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 68%"></div>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500">Target: 800</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$56.7K</div>
                            <div class="text-xs text-green-600">+12% this month</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">72%</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 72%"></div>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500">Good</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-1">
                                <button class="text-blue-600 hover:text-blue-900 p-1" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900 p-1" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-purple-600 hover:text-purple-900 p-1" title="Analytics">
                                    <i class="fas fa-chart-line"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-900 p-1" title="Duplicate">
                                    <i class="fas fa-copy"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900 p-1" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Advanced Pagination with Bulk Actions -->
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Previous
                </a>
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Next
                </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div class="flex items-center space-x-4">
                    <p class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of
                        <span class="font-medium">14</span> results
                    </p>
                    <div class="flex items-center space-x-2">
                        <button class="text-sm text-blue-600 hover:text-blue-900">
                            <i class="fas fa-edit mr-1"></i>Bulk Edit
                        </button>
                        <button class="text-sm text-green-600 hover:text-green-900">
                            <i class="fas fa-download mr-1"></i>Export Selected
                        </button>
                        <button class="text-sm text-purple-600 hover:text-purple-900">
                            <i class="fas fa-chart-bar mr-1"></i>Analytics
                        </button>
                    </div>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" aria-current="page" class="relative inline-flex items-center px-4 py-2 border border-blue-500 bg-blue-50 text-sm font-medium text-blue-600">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
