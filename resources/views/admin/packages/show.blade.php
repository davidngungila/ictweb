@extends('admin.layouts.app')

@section('title', 'View Package')
@section('page-title', 'View Package')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8">
        <a href="{{ route('admin.packages.index') }}" class="text-blue-600 hover:text-blue-900">
            <i class="fas fa-arrow-left mr-2"></i>Back to Packages
        </a>
    </div>

    <div class="max-w-4xl">
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h1 class="text-xl font-semibold text-gray-900">{{ $package->name }}</h1>
                <div class="flex space-x-2">
                    <a href="{{ route('admin.packages.edit', $package) }}" class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </a>
                    <form action="{{ route('admin.packages.destroy', $package) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded-md text-sm hover:bg-red-700" onclick="return confirm('Are you sure you want to delete this package?')">
                            <i class="fas fa-trash mr-1"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="px-6 py-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Package Info -->
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Package Name</h3>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $package->name }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Description</h3>
                            <p class="mt-1 text-gray-900">{{ $package->description ?? 'No description' }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Price</h3>
                            <p class="mt-1 text-2xl font-bold text-gray-900">TZS {{ number_format($package->price, 0) }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Duration</h3>
                            <p class="mt-1 text-gray-900">{{ $package->duration ?? '-' }}</p>
                        </div>
                    </div>
                    
                    <!-- Package Details -->
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Status</h3>
                            <p class="mt-1">
                                @if($package->status === 'active')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Active
                                </span>
                                @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    Inactive
                                </span>
                                @endif
                            </p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Popular</h3>
                            <p class="mt-1">
                                @if($package->is_popular)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    <i class="fas fa-star mr-1"></i> Yes
                                </span>
                                @else
                                <span class="text-gray-500">No</span>
                                @endif
                            </p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Sort Order</h3>
                            <p class="mt-1 text-gray-900">{{ $package->sort_order ?? 0 }}</p>
                        </div>
                        
                        @if($package->icon)
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Icon</h3>
                            <p class="mt-1">
                                <i class="{{ $package->icon }} text-2xl text-blue-600"></i>
                                <span class="ml-2 text-sm text-gray-600">{{ $package->icon }}</span>
                            </p>
                        </div>
                        @endif
                        
                        @if($package->color)
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Color</h3>
                            <p class="mt-1 flex items-center">
                                <span class="inline-block w-6 h-6 rounded" style="background-color: {{ $package->color }}"></span>
                                <span class="ml-2 text-gray-900">{{ $package->color }}</span>
                            </p>
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Features -->
                @if($package->features && !empty($package->features))
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Features</h3>
                    <ul class="space-y-2">
                        @foreach(is_array($package->features) ? $package->features : [$package->features] as $feature)
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-900">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
