@extends('admin.layouts.app')

@section('title', 'Dashboard - Admin Panel')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
        <p class="mt-1 text-sm text-gray-600">Welcome back, {{ Auth::guard('admin')->user()->name }}!</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Bookings -->
        <div class="bg-white overflow-hidden shadow rounded-lg border-l-4 border-blue-500">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                        <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Bookings
                            </dt>
                            <dd class="text-2xl font-bold text-gray-900">
                                {{ $stats['total_bookings'] }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-green-600 font-medium">
                        +{{ $stats['bookings_this_month'] }}
                    </span>
                    <span class="text-gray-500">this month</span>
                </div>
            </div>
        </div>

        <!-- Clients -->
        <div class="bg-white overflow-hidden shadow rounded-lg border-l-4 border-green-500">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                        <i class="fas fa-users text-green-600 text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Clients
                            </dt>
                            <dd class="text-2xl font-bold text-gray-900">
                                {{ $stats['total_clients'] }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-green-600 font-medium">
                        +{{ $stats['clients_this_month'] }}
                    </span>
                    <span class="text-gray-500">this month</span>
                </div>
            </div>
        </div>

        <!-- Revenue -->
        <div class="bg-white overflow-hidden shadow rounded-lg border-l-4 border-yellow-500">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-yellow-100 rounded-md p-3">
                        <i class="fas fa-wallet text-yellow-600 text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Revenue (Paid)
                            </dt>
                            <dd class="text-2xl font-bold text-gray-900">
                                TZS {{ number_format($stats['total_revenue'], 0) }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-green-600 font-medium">
                        TZS {{ number_format($stats['revenue_this_month'], 0) }}
                    </span>
                    <span class="text-gray-500">this month</span>
                </div>
            </div>
        </div>

        <!-- Messages -->
        <div class="bg-white overflow-hidden shadow rounded-lg border-l-4 border-purple-500">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-purple-100 rounded-md p-3">
                        <i class="fas fa-envelope text-purple-600 text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Messages
                            </dt>
                            <dd class="text-2xl font-bold text-gray-900">
                                {{ $stats['total_messages'] }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3 flex justify-between">
                <div class="text-sm">
                    <span class="text-purple-600 font-medium">
                        {{ $stats['new_messages'] }}
                    </span>
                    <span class="text-gray-500">unread</span>
                </div>
                <div class="text-sm">
                    <span class="text-green-600 font-medium">
                        +{{ $stats['messages_this_month'] }}
                    </span>
                    <span class="text-gray-500">new</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Stats Row -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Projects -->
        <div class="bg-white p-5 shadow rounded-lg flex items-center">
            <div class="bg-orange-100 p-3 rounded-full mr-4">
                <i class="fas fa-project-diagram text-orange-600 text-lg"></i>
            </div>
            <div>
                <p class="text-sm text-gray-500">Projects</p>
                <h4 class="text-xl font-bold text-gray-900">{{ $stats['total_projects'] }} Total <span class="text-sm font-normal text-gray-500">({{ $stats['projects_active'] }} active)</span></h4>
            </div>
        </div>
        <!-- Services -->
        <div class="bg-white p-5 shadow rounded-lg flex items-center">
            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                <i class="fas fa-server text-indigo-600 text-lg"></i>
            </div>
            <div>
                <p class="text-sm text-gray-500">Services</p>
                <h4 class="text-xl font-bold text-gray-900">{{ $stats['total_services'] }} Offered</h4>
            </div>
        </div>
        <!-- Demos -->
        <div class="bg-white p-5 shadow rounded-lg flex items-center">
            <div class="bg-pink-100 p-3 rounded-full mr-4">
                <i class="fas fa-desktop text-pink-600 text-lg"></i>
            </div>
            <div>
                <p class="text-sm text-gray-500">Demo Requests</p>
                <h4 class="text-xl font-bold text-gray-900">{{ $stats['total_demos'] }} Requests</h4>
            </div>
        </div>
    </div>

    <!-- Charts and Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        <!-- Revenue Chart -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h3 class="text-lg font-bold text-gray-900">Revenue Performance</h3>
                <i class="fas fa-chart-line text-blue-500"></i>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    @foreach($monthlyRevenue['months'] as $index => $month)
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">{{ $month }}</span>
                                <span class="font-bold text-gray-900">TZS {{ number_format($monthlyRevenue['revenue'][$index], 0) }}</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2">
                                @php
                                    $maxRev = count($monthlyRevenue['revenue']) ? max($monthlyRevenue['revenue']) : 1;
                                    $pct = $maxRev > 0 ? ($monthlyRevenue['revenue'][$index] / $maxRev) * 100 : 0;
                                @endphp
                                <div class="bg-blue-500 h-2 rounded-full" style="width: {{ $pct }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Bookings by Service -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h3 class="text-lg font-bold text-gray-900">Bookings by Service</h3>
                <i class="fas fa-pie-chart text-green-500"></i>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    @forelse($bookingsByService as $service => $count)
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                                <span class="text-sm font-medium text-gray-900">{{ $service }}</span>
                            </div>
                            <span class="text-sm font-bold text-blue-600">{{ $count }}</span>
                        </div>
                    @empty
                        <p class="text-center text-gray-500 py-4">No bookings data yet</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Bookings -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="text-lg font-bold text-gray-900">Recent Bookings</h3>
                <a href="{{ route('admin.bookings.index') }}" class="text-sm text-blue-600 hover:text-blue-500 font-semibold">
                    View All
                </a>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse($recentBookings as $booking)
                    <div class="p-4 hover:bg-gray-50 transition-colors cursor-pointer" onclick="window.location.href='{{ route('admin.bookings.show', $booking) }}'">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-bold text-gray-900">{{ $booking->client_name }}</p>
                                <p class="text-xs text-gray-500">{{ $booking->order_number }} • TZS {{ number_format($booking->total_price, 0) }}</p>
                            </div>
                            <div class="text-right">
                                <span class="inline-flex px-2 py-1 text-xs font-bold rounded-full 
                                    @if($booking->payment_status == 'paid') bg-green-100 text-green-800
                                    @elseif($booking->payment_status == 'pending') bg-yellow-100 text-yellow-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($booking->payment_status) }}
                                </span>
                                <p class="text-xs text-gray-500 mt-1">{{ $booking->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-8 text-center text-gray-500">
                        <i class="fas fa-inbox text-3xl mb-3 block opacity-20"></i>
                        <p>No bookings yet</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Recent Messages -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="text-lg font-bold text-gray-900">Recent Messages</h3>
                <a href="{{ route('admin.contacts.advanced') }}" class="text-sm text-blue-600 hover:text-blue-500 font-semibold">
                    View Inbox
                </a>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse($recentMessages as $message)
                    <div class="p-4 hover:bg-gray-50 transition-colors">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-bold text-gray-900">{{ $message->name }}</p>
                                <p class="text-xs text-gray-500 truncate max-w-[200px]">{{ $message->subject }}</p>
                            </div>
                            <div class="text-right">
                                <span class="inline-flex px-2 py-1 text-xs font-bold rounded-full 
                                    @if($message->status == 'unread') bg-red-100 text-red-800
                                    @elseif($message->status == 'read') bg-blue-100 text-blue-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($message->status) }}
                                </span>
                                <p class="text-xs text-gray-500 mt-1">{{ $message->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-8 text-center text-gray-500">
                        <i class="fas fa-comments text-3xl mb-3 block opacity-20"></i>
                        <p>Inbox is empty</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
