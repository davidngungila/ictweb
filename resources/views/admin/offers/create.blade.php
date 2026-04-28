@extends('admin.layouts.app')

@section('title', 'Create Offer')
@section('page-title', 'Create Offer')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8">
        <a href="{{ route('admin.offers.index') }}" class="text-blue-600 hover:text-blue-900">
            <i class="fas fa-arrow-left mr-2"></i>Back to Offers
        </a>
    </div>

    <div class="max-w-2xl">
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h1 class="text-xl font-semibold text-gray-900">Create New Offer</h1>
            </div>
            
            <form action="{{ route('admin.offers.store') }}" method="POST" class="px-6 py-4">
                @csrf
                
                <div class="space-y-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Offer Name</label>
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
                        <textarea name="description" id="description" rows="3"
                                  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('description') }}</textarea>
                        @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Code -->
                    <div>
                        <label for="code" class="block text-sm font-medium text-gray-700">Discount Code</label>
                        <input type="text" name="code" id="code" required
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm uppercase"
                               placeholder="SUMMER2024"
                               value="{{ old('code') }}">
                        @error('code')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Discount Type -->
                    <div>
                        <label for="discount_type" class="block text-sm font-medium text-gray-700">Discount Type</label>
                        <select name="discount_type" id="discount_type" required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="percentage" {{ old('discount_type') === 'percentage' ? 'selected' : '' }}>Percentage</option>
                            <option value="fixed" {{ old('discount_type') === 'fixed' ? 'selected' : '' }}>Fixed Amount</option>
                        </select>
                        @error('discount_type')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Discount Value -->
                    <div>
                        <label for="discount_value" class="block text-sm font-medium text-gray-700">Discount Value</label>
                        <input type="number" name="discount_value" id="discount_value" required step="0.01" min="0"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               value="{{ old('discount_value') }}">
                        @error('discount_value')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Min Purchase -->
                    <div>
                        <label for="min_purchase" class="block text-sm font-medium text-gray-700">Minimum Purchase (Optional)</label>
                        <input type="number" name="min_purchase" id="min_purchase" step="0.01" min="0"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               value="{{ old('min_purchase') }}">
                        @error('min_purchase')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Max Discount -->
                    <div>
                        <label for="max_discount" class="block text-sm font-medium text-gray-700">Maximum Discount (Optional)</label>
                        <input type="number" name="max_discount" id="max_discount" step="0.01" min="0"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               value="{{ old('max_discount') }}">
                        @error('max_discount')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Usage Limit -->
                    <div>
                        <label for="usage_limit" class="block text-sm font-medium text-gray-700">Usage Limit (Optional)</label>
                        <input type="number" name="usage_limit" id="usage_limit" min="1"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               placeholder="Leave blank for unlimited"
                               value="{{ old('usage_limit') }}">
                        @error('usage_limit')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Valid From -->
                    <div>
                        <label for="valid_from" class="block text-sm font-medium text-gray-700">Valid From (Optional)</label>
                        <input type="datetime-local" name="valid_from" id="valid_from"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               value="{{ old('valid_from') }}">
                        @error('valid_from')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Valid Until -->
                    <div>
                        <label for="valid_until" class="block text-sm font-medium text-gray-700">Valid Until (Optional)</label>
                        <input type="datetime-local" name="valid_until" id="valid_until"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               value="{{ old('valid_until') }}">
                        @error('valid_until')
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
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('admin.offers.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Cancel
                    </a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-blue-700">
                        Create Offer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
