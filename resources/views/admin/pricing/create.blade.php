@extends('admin.layouts.app')

@section('title', 'Create Pricing Plan')
@section('page-title', 'Create Pricing Plan')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8">
        <a href="{{ route('admin.pricing.index') }}" class="text-blue-600 hover:text-blue-900">
            <i class="fas fa-arrow-left mr-2"></i>Back to Pricing Plans
        </a>
    </div>

    <div class="max-w-2xl">
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h1 class="text-xl font-semibold text-gray-900">Create New Pricing Plan</h1>
            </div>
            
            <form action="{{ route('admin.pricing.store') }}" method="POST" class="px-6 py-4">
                @csrf
                
                <div class="space-y-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Plan Name</label>
                        <input type="text" name="name" id="name" required
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               value="{{ old('name') }}">
                        @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="3" required
                                  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('description') }}</textarea>
                        @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price -->
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" name="price" id="price" required step="0.01" min="0"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               value="{{ old('price') }}">
                        @error('price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Currency -->
                    <div>
                        <label for="currency" class="block text-sm font-medium text-gray-700">Currency</label>
                        <select name="currency" id="currency" required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="USD" {{ old('currency') === 'USD' ? 'selected' : '' }}>USD</option>
                            <option value="TZS" {{ old('currency') === 'TZS' ? 'selected' : '' }}>TZS</option>
                            <option value="EUR" {{ old('currency') === 'EUR' ? 'selected' : '' }}>EUR</option>
                        </select>
                        @error('currency')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Billing Cycle -->
                    <div>
                        <label for="billing_cycle" class="block text-sm font-medium text-gray-700">Billing Cycle</label>
                        <select name="billing_cycle" id="billing_cycle" required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="monthly" {{ old('billing_cycle') === 'monthly' ? 'selected' : '' }}>Monthly</option>
                            <option value="yearly" {{ old('billing_cycle') === 'yearly' ? 'selected' : '' }}>Yearly</option>
                            <option value="one-time" {{ old('billing_cycle') === 'one-time' ? 'selected' : '' }}>One-time</option>
                        </select>
                        @error('billing_cycle')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Features -->
                    <div>
                        <label for="features" class="block text-sm font-medium text-gray-700">Features (one per line)</label>
                        <textarea name="features" id="features" rows="5" required
                                  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                  placeholder="Feature 1&#10;Feature 2&#10;Feature 3">{{ old('features') }}</textarea>
                        @error('features')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Stripe Price ID -->
                    <div>
                        <label for="stripe_price_id" class="block text-sm font-medium text-gray-700">Stripe Price ID (Optional)</label>
                        <input type="text" name="stripe_price_id" id="stripe_price_id"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               placeholder="price_xxxxx"
                               value="{{ old('stripe_price_id') }}">
                        @error('stripe_price_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Is Active -->
                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" id="is_active" value="1"
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                               {{ old('is_active') ? 'checked' : '' }}>
                        <label for="is_active" class="ml-2 block text-sm text-gray-900">
                            Active
                        </label>
                    </div>

                    <!-- Sort Order -->
                    <div>
                        <label for="sort_order" class="block text-sm font-medium text-gray-700">Sort Order</label>
                        <input type="number" name="sort_order" id="sort_order" min="0"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               value="{{ old('sort_order') ?? 0 }}">
                        @error('sort_order')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('admin.pricing.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Cancel
                    </a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-blue-700">
                        Create Plan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
