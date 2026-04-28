@extends('admin.layouts.app')

@section('title', 'View Pricing Plan')
@section('page-title', 'View Pricing Plan')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8">
        <a href="{{ route('admin.pricing.index') }}" class="text-blue-600 hover:text-blue-900">
            <i class="fas fa-arrow-left mr-2"></i>Back to Pricing Plans
        </a>
    </div>

    <div class="max-w-4xl">
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h1 class="text-xl font-semibold text-gray-900">{{ $pricingPlan->name }}</h1>
                <div class="flex space-x-2">
                    <a href="{{ route('admin.pricing.edit', $pricingPlan) }}" class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </a>
                    <form action="{{ route('admin.pricing.destroy', $pricingPlan) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded-md text-sm hover:bg-red-700" onclick="return confirm('Are you sure you want to delete this pricing plan?')">
                            <i class="fas fa-trash mr-1"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="px-6 py-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Plan Info -->
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Plan Name</h3>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $pricingPlan->name }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Description</h3>
                            <p class="mt-1 text-gray-900">{{ $pricingPlan->description }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Price</h3>
                            <p class="mt-1 text-3xl font-bold text-gray-900">{{ $pricingPlan->currency }} {{ number_format($pricingPlan->price, 2) }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Billing Cycle</h3>
                            <p class="mt-1">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    @if($pricingPlan->billing_cycle === 'monthly') bg-blue-100 text-blue-800
                                    @elseif($pricingPlan->billing_cycle === 'yearly') bg-green-100 text-green-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($pricingPlan->billing_cycle) }}
                                </span>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Plan Details -->
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Currency</h3>
                            <p class="mt-1 text-gray-900">{{ $pricingPlan->currency }}</p>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Status</h3>
                            <p class="mt-1">
                                @if($pricingPlan->is_active)
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
                            <h3 class="text-sm font-medium text-gray-500">Sort Order</h3>
                            <p class="mt-1 text-gray-900">{{ $pricingPlan->sort_order ?? 0 }}</p>
                        </div>
                        
                        @if($pricingPlan->stripe_price_id)
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Stripe Price ID</h3>
                            <p class="mt-1 text-gray-900 font-mono text-sm">{{ $pricingPlan->stripe_price_id }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Features -->
                @if($pricingPlan->features && !empty($pricingPlan->features))
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Features</h3>
                    <ul class="space-y-2">
                        @foreach(is_array($pricingPlan->features) ? $pricingPlan->features : [$pricingPlan->features] as $feature)
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
