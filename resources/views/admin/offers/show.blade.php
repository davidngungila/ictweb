@extends('admin.layouts.app')

@section('title', 'View Offer')
@section('page-title', 'View Offer')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8">
        <a href="{{ route('admin.offers.index') }}" class="text-blue-600 hover:text-blue-900">
            <i class="fas fa-arrow-left mr-2"></i>Back to Offers
        </a>
    </div>

    <div class="max-w-4xl">
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h1 class="text-xl font-semibold text-gray-900">{{ $offer->name }}</h1>
                <div class="flex space-x-2">
                    <a href="{{ route('admin.offers.edit', $offer) }}" class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </a>
                    <form action="{{ route('admin.offers.destroy', $offer) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded-md text-sm hover:bg-red-700" onclick="return confirm('Are you sure you want to delete this offer?')">
                            <i class="fas fa-trash mr-1"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="px-6 py-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Offer Info -->
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Offer Name</h3>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $offer->name }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Description</h3>
                            <p class="mt-1 text-gray-900">{{ $offer->description ?? 'No description' }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Discount Code</h3>
                            <p class="mt-1 text-2xl font-mono font-bold text-gray-900 bg-gray-100 px-3 py-2 rounded inline-block">{{ $offer->code }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Discount</h3>
                            <p class="mt-1 text-3xl font-bold text-gray-900">
                                @if($offer->discount_type === 'percentage')
                                {{ $offer->discount_value }}%
                                @else
                                TZS {{ number_format($offer->discount_value, 0) }}
                                @endif
                            </p>
                        </div>
                    </div>
                    
                    <!-- Offer Details -->
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Status</h3>
                            <p class="mt-1">
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
                            </p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Usage</h3>
                            <p class="mt-1 text-gray-900">{{ $offer->used_count }} / {{ $offer->usage_limit ?? 'Unlimited' }}</p>
                            @if($offer->usage_limit)
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: {{ min(($offer->used_count / $offer->usage_limit) * 100, 100) }}%"></div>
                            </div>
                            @endif
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Valid Period</h3>
                            <p class="mt-1 text-gray-900">
                                {{ $offer->valid_from ? $offer->valid_from->format('M d, Y H:i') : 'No start date' }}
                            </p>
                            <p class="text-sm text-gray-500">
                                {{ $offer->valid_until ? $offer->valid_until->format('M d, Y H:i') : 'No end date' }}
                            </p>
                        </div>
                        
                        @if($offer->min_purchase)
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Minimum Purchase</h3>
                            <p class="mt-1 text-gray-900">TZS {{ number_format($offer->min_purchase, 0) }}</p>
                        </div>
                        @endif
                        
                        @if($offer->max_discount)
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Maximum Discount</h3>
                            <p class="mt-1 text-gray-900">TZS {{ number_format($offer->max_discount, 0) }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Applicable Services -->
                @if($offer->applicable_services && !empty($offer->applicable_services))
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Applicable Services</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($offer->applicable_services as $service)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            {{ $service }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
