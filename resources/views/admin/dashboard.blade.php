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
        <!-- Demo Requests -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                        <i class="fas fa-calendar-check text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Demo Requests
                            </dt>
                            <dd class="text-lg font-medium text-gray-900">
                                {{ $stats['total_demo_requests'] }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-green-600 font-medium">
                        +{{ $stats['demo_requests_this_month'] }}
                    </span>
                    <span class="text-gray-500">this month</span>
                </div>
            </div>
        </div>

        <!-- Contacts -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                        <i class="fas fa-envelope text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Contacts
                            </dt>
                            <dd class="text-lg font-medium text-gray-900">
                                {{ $stats['total_contacts'] }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-green-600 font-medium">
                        +{{ $stats['contacts_this_month'] }}
                    </span>
                    <span class="text-gray-500">this month</span>
                </div>
            </div>
        </div>

        <!-- Revenue -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                        <i class="fas fa-dollar-sign text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Revenue
                            </dt>
                            <dd class="text-lg font-medium text-gray-900">
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

        <!-- Pending -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-red-500 rounded-md p-3">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Pending Items
                            </dt>
                            <dd class="text-lg font-medium text-gray-900">
                                {{ $stats['pending_demo_requests'] + $stats['new_contacts'] }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-red-600 font-medium">
                        {{ $stats['pending_demo_requests'] }} demo
                    </span>
                    <span class="text-gray-500">•</span>
                    <span class="text-red-600 font-medium">
                        {{ $stats['new_contacts'] }} contacts
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        <!-- Revenue Chart -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Revenue Trend</h3>
            </div>
            <div class="p-6">
                <div class="h-64 flex items-center justify-center text-gray-500">
                    <div class="text-center">
                        <i class="fas fa-chart-line text-4xl mb-2"></i>
                        <p>Revenue chart will be displayed here</p>
                        <p class="text-sm">Last 6 months performance</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Demo Requests by Type -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Demo Requests by Type</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    @foreach($demoRequestsByType as $type => $count)
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                                <span class="text-sm font-medium text-gray-900">{{ $type }}</span>
                            </div>
                            <span class="text-sm text-gray-500">{{ $count }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Demo Requests -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="text-lg font-medium text-gray-900">Recent Demo Requests</h3>
                <a href="{{ route('admin.demo-requests.advanced') }}" class="text-sm text-blue-600 hover:text-blue-500">
                    View all
                </a>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse($recentDemoRequests as $demoRequest)
                    <div class="p-4 hover:bg-gray-50">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900">{{ $demoRequest->company_name }}</p>
                                <p class="text-sm text-gray-500">{{ $demoRequest->demo_type }} • {{ $demoRequest->contact_person }}</p>
                            </div>
                            <div class="text-right">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                    @if($demoRequest->status == 'pending') bg-yellow-100 text-yellow-800
                                    @elseif($demoRequest->status == 'completed') bg-green-100 text-green-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($demoRequest->status) }}
                                </span>
                                <p class="text-xs text-gray-500 mt-1">{{ $demoRequest->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-4 text-center text-gray-500">
                        <i class="fas fa-inbox text-2xl mb-2"></i>
                        <p>No demo requests yet</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Recent Contacts -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="text-lg font-medium text-gray-900">Recent Contacts</h3>
                <a href="{{ route('admin.contacts.advanced') }}" class="text-sm text-blue-600 hover:text-blue-500">
                    View all
                </a>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse($recentContacts as $contact)
                    <div class="p-4 hover:bg-gray-50">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900">{{ $contact->name }}</p>
                                <p class="text-sm text-gray-500">{{ $contact->subject }}</p>
                            </div>
                            <div class="text-right">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                    @if($contact->status == 'new') bg-red-100 text-red-800
                                    @elseif($contact->status == 'replied') bg-green-100 text-green-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($contact->status) }}
                                </span>
                                <p class="text-xs text-gray-500 mt-1">{{ $contact->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-4 text-center text-gray-500">
                        <i class="fas fa-inbox text-2xl mb-2"></i>
                        <p>No contacts yet</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
