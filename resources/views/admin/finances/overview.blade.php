@extends('admin.layouts.app')

@section('title', 'Financial Overview - Admin Panel')
@section('page-title', 'Financial Overview')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Financial Overview</h1>
        <p class="mt-1 text-sm text-gray-600">Monitor your business financial performance</p>
    </div>

    <!-- Financial Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Revenue -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
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
                        TZS {{ number_format($stats['revenue_this_month'] ?? 0, 0) }}
                    </span>
                    <span class="text-gray-500">this month</span>
                </div>
            </div>
        </div>

        <!-- Pending Revenue -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Pending
                            </dt>
                            <dd class="text-lg font-medium text-gray-900">
                                TZS {{ number_format($stats['total_pending'], 0) }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-yellow-600 font-medium">
                        {{ $stats['total_invoices'] - $stats['paid_invoices'] }} invoices
                    </span>
                    <span class="text-gray-500">awaiting payment</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        <!-- Revenue Trend Chart -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Revenue Trend</h3>
            </div>
            <div class="p-6">
                <div class="h-64 flex items-center justify-center text-gray-500">
                    <div class="text-center">
                        <i class="fas fa-chart-line text-4xl mb-2"></i>
                        <p>Revenue chart will be displayed here</p>
                        <p class="text-sm">Monthly revenue performance</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expense Breakdown -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Expense Breakdown</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Salaries</span>
                        </div>
                        <span class="text-sm text-gray-500">45%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Rent & Utilities</span>
                        </div>
                        <span class="text-sm text-gray-500">20%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Marketing</span>
                        </div>
                        <span class="text-sm text-gray-500">15%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-red-500 rounded-full mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Equipment</span>
                        </div>
                        <span class="text-sm text-gray-500">12%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-purple-500 rounded-full mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Other</span>
                        </div>
                        <span class="text-sm text-gray-500">8%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Transactions -->
    <div class="grid grid-cols-1 lg:grid-cols-1 gap-8">
        <!-- Recent Invoices -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="text-lg font-medium text-gray-900">Recent Invoices</h3>
                <a href="{{ route('admin.invoices.index') }}" class="text-sm text-blue-600 hover:text-blue-500">
                    View all
                </a>
            </div>
            <div class="divide-y divide-gray-200">
                @forelse($recentInvoices as $invoice)
                <div class="p-4 hover:bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-900">{{ $invoice->invoice_number }}</p>
                            <p class="text-sm text-gray-500">{{ $invoice->client_name }} • {{ $invoice->description }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">TZS {{ number_format($invoice->total, 0) }}</p>
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full {{ $invoice->status == 'paid' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ ucfirst($invoice->status) }}
                            </span>
                        </div>
                    </div>
                </div>
                @empty
                <div class="p-8 text-center text-gray-500">
                    No recent invoices found.
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
