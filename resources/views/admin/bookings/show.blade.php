@extends('admin.layouts.app')

@section('page-title', 'Booking Details - #' . $booking->order_number)

@section('content')
<div class="p-6">
    <div class="mb-8 flex items-center justify-between">
        <div>
            <a href="{{ route('admin.bookings.index') }}" class="text-blue-600 hover:underline flex items-center mb-2">
                <i class="fas fa-arrow-left mr-2"></i> Back to Bookings
            </a>
            <h1 class="text-2xl font-bold text-gray-900">Booking #{{ $booking->order_number }}</h1>
            <p class="text-gray-600">Created on {{ $booking->created_at->format('F d, Y at H:i') }}</p>
        </div>
        <div class="flex space-x-3">
            <form action="{{ route('admin.bookings.update-status', $booking) }}" method="POST" class="flex items-center">
                @csrf
                <label class="mr-2 text-sm font-medium text-gray-700">Update Status:</label>
                <select name="status" onchange="this.form.submit()" class="rounded-lg border-gray-300 text-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="processing" {{ $booking->status == 'processing' ? 'selected' : '' }}>Processing</option>
                    <option value="completed" {{ $booking->status == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </form>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center">
                <i class="fas fa-print mr-2"></i> Print Details
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Client & Order Info -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Client Details -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Client Information</h2>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Full Name</p>
                        <p class="text-base font-medium text-gray-900">{{ $booking->client_name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Email Address</p>
                        <p class="text-base font-medium text-gray-900">{{ $booking->client_email }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Phone Number</p>
                        <p class="text-base font-medium text-gray-900">{{ $booking->client_phone }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Company Name</p>
                        <p class="text-base font-medium text-gray-900">{{ $booking->company_name ?: 'N/A' }}</p>
                    </div>
                </div>
            </div>

            <!-- Order Items -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Service & Package Details</h2>
                </div>
                <div class="p-6">
                    @php
                        $service = $booking->service_id ? \App\Models\Service::find($booking->service_id) : null;
                        $package = \App\Support\PackagePricing::package($booking->service_id, $booking->package_id);
                    @endphp
                    <div class="flex items-start justify-between border-b border-gray-100 pb-4 mb-4">
                        <div>
                            <h3 class="text-lg font-bold text-blue-600">{{ $service->name ?? 'Unknown Service' }}</h3>
                            <p class="text-gray-900 font-semibold">{{ $package['name'] ?? 'Custom Package' }}</p>
                            <p class="text-sm text-gray-500 mt-1">{{ $package['desc'] ?? '' }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-gray-900">TZS {{ number_format($package['price'] ?? 0, 0) }}</p>
                        </div>
                    </div>

                    @if(!empty($booking->selected_addons))
                    <div class="mt-6">
                        <h4 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-3">Selected Add-ons</h4>
                        <div class="space-y-3">
                            @php
                                $addonPrices = \App\Support\PackagePricing::addonPrices();
                                $addonLabels = \App\Support\PackagePricing::addonLabels();
                            @endphp
                            @foreach($booking->selected_addons as $addonSlug)
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-600">{{ $addonLabels[$addonSlug] ?? ucfirst(str_replace('_', ' ', $addonSlug)) }}</span>
                                    <span class="font-medium text-gray-900">TZS {{ number_format($addonPrices[$addonSlug] ?? 0, 0) }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if(!empty($booking->selected_features))
                    <div class="mt-6">
                        <h4 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-3">Included Features</h4>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            @foreach($booking->selected_features as $feature)
                                <li class="text-sm text-gray-600 flex items-center">
                                    <i class="fas fa-check text-green-500 mr-2 text-xs"></i> {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Additional Notes -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Additional Notes & Requirements</h2>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 whitespace-pre-line">{{ $booking->notes ?: 'No additional notes provided.' }}</p>
                </div>
            </div>
        </div>

        <!-- Sidebar Info -->
        <div class="space-y-8">
            <!-- Payment Summary -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Payment Summary</h2>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Total Price</span>
                        <span class="font-bold text-gray-900 text-lg">TZS {{ number_format($booking->total_price, 0) }}</span>
                    </div>
                    <div class="flex justify-between text-sm text-green-600">
                        <span>Advance Paid</span>
                        <span class="font-bold">TZS {{ number_format($booking->advance_payment, 0) }}</span>
                    </div>
                    <div class="flex justify-between text-sm text-red-600 border-t border-gray-100 pt-4">
                        <span class="font-medium">Remaining Balance</span>
                        <span class="font-bold">TZS {{ number_format($booking->remaining_balance, 0) }}</span>
                    </div>

                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <p class="text-xs text-gray-500 mb-1">Payment Method</p>
                        <p class="text-sm font-medium text-gray-900">Online Payment / Mobile Money</p>
                        
                        <p class="text-xs text-gray-500 mt-4 mb-1">Transaction Reference</p>
                        <p class="text-sm font-mono text-gray-900">{{ $booking->payment_reference ?: 'N/A' }}</p>
                    </div>
                </div>
            </div>

            <!-- Project Specs -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Project Specs</h2>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <p class="text-xs text-gray-500 mb-1 uppercase tracking-wider">Timeline Priority</p>
                        <span class="px-2 py-1 rounded-full text-xs font-bold {{ $booking->timeline_priority == 'urgent' ? 'bg-red-100 text-red-800' : ($booking->timeline_priority == 'fast_track' ? 'bg-orange-100 text-orange-800' : 'bg-blue-100 text-blue-800') }}">
                            {{ ucfirst(str_replace('_', ' ', $booking->timeline_priority)) ?: 'Standard' }}
                        </span>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 mb-1 uppercase tracking-wider">Payment Plan</p>
                        <p class="text-sm font-medium text-gray-900">{{ ucfirst($booking->payment_plan) ?: 'N/A' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
