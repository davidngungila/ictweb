@extends('admin.layouts.app')

@section('title', 'Advanced Packages Management')
@section('page-title', 'Advanced Packages Management')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header with Quick Actions -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Advanced Packages Management</h1>
            <p class="text-gray-600 mt-1">Comprehensive service package configuration and pricing management</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.packages.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-plus mr-2"></i>
                Create Package
            </a>
            <a href="{{ route('admin.packages.export') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-download mr-2"></i>
                Export Packages
            </a>
        </div>
    </div>

    <!-- Advanced Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Packages</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $packages->count() }}</p>
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
                    <p class="text-2xl font-bold text-gray-900">{{ $packages->where('status', 'active')->count() }}</p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Popular</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $packages->where('is_popular', true)->count() }}</p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-crown text-yellow-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Avg. Price</p>
                    <p class="text-2xl font-bold text-gray-900">TZS {{ number_format($packages->avg('price') ?? 0, 0) }}</p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-dollar-sign text-purple-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters and Search -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search packages..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full lg:w-80">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Advanced Packages Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Package</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($packages as $package)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                @if($package->icon)
                                <div class="h-12 w-12 flex-shrink-0 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="{{ $package->icon }} text-blue-600 text-lg"></i>
                                </div>
                                @else
                                <div class="h-12 w-12 flex-shrink-0 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-box text-gray-600 text-lg"></i>
                                </div>
                                @endif
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $package->name }}</div>
                                    @if($package->is_popular)
                                    <div class="flex items-center mt-1">
                                        <span class="text-xs text-yellow-600">
                                            <i class="fas fa-star text-yellow-400"></i> Popular
                                        </span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900 max-w-xs truncate">{{ $package->description }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">TZS {{ number_format($package->price, 0) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $package->duration ?? '-' }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($package->status === 'active')
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
                                <a href="{{ route('admin.packages.show', $package) }}" class="text-blue-600 hover:text-blue-900 p-1" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.packages.edit', $package) }}" class="text-green-600 hover:text-green-900 p-1" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.packages.destroy', $package) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 p-1" title="Delete" onclick="return confirm('Are you sure you want to delete this package?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                            <i class="fas fa-inbox text-4xl mb-4"></i>
                            <p class="text-lg">No packages found</p>
                            <a href="{{ route('admin.packages.create') }}" class="text-blue-600 hover:text-blue-900">Create your first package</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
