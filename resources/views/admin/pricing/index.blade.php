@extends('admin.layouts.app')

@section('title', 'Advanced Pricing Management')
@section('page-title', 'Advanced Pricing Management')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header with Quick Actions -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Advanced Pricing Management</h1>
            <p class="text-gray-600 mt-1">Strategic pricing plans and tier management for optimal revenue</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.pricing.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-plus mr-2"></i>
                Create Plan
            </a>
            <a href="{{ route('admin.pricing.export') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-download mr-2"></i>
                Export Plans
            </a>
        </div>
    </div>

    <!-- Advanced Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Plans</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $plans->count() }}</p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-layer-group text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Active</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $plans->where('is_active', true)->count() }}</p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Monthly Plans</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $plans->where('billing_cycle', 'monthly')->count() }}</p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-calendar-alt text-purple-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Yearly Plans</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $plans->where('billing_cycle', 'yearly')->count() }}</p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-calendar text-yellow-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters and Search -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search pricing plans..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full lg:w-80">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Billing Cycles</option>
                    <option value="monthly">Monthly</option>
                    <option value="yearly">Yearly</option>
                    <option value="one-time">One-time</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Advanced Pricing Plans Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Plan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Billing Cycle</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Currency</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($plans as $plan)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $plan->name }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900 max-w-xs truncate">{{ $plan->description }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $plan->currency }} {{ number_format($plan->price, 2) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                @if($plan->billing_cycle === 'monthly') bg-blue-100 text-blue-800
                                @elseif($plan->billing_cycle === 'yearly') bg-green-100 text-green-800
                                @else bg-gray-100 text-gray-800 @endif">
                                {{ ucfirst($plan->billing_cycle) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $plan->currency }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($plan->is_active)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                            @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                Inactive
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-1">
                                <a href="{{ route('admin.pricing.show', $plan) }}" class="text-blue-600 hover:text-blue-900 p-1" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.pricing.edit', $plan) }}" class="text-green-600 hover:text-green-900 p-1" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.pricing.destroy', $plan) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 p-1" title="Delete" onclick="return confirm('Are you sure you want to delete this pricing plan?')">
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
                            <p class="text-lg">No pricing plans found</p>
                            <a href="{{ route('admin.pricing.create') }}" class="text-blue-600 hover:text-blue-900">Create your first pricing plan</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
