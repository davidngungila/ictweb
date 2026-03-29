@extends('admin.layouts.app')

@section('title', 'Invoices - Admin Panel')
@section('page-title', 'Invoices')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Invoices</h1>
                <p class="mt-1 text-sm text-gray-600">Manage all client invoices and payments</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-green-700">
                    <i class="fas fa-plus mr-2"></i>Create Invoice
                </button>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white shadow rounded-lg p-4 mb-6">
        <form method="GET" action="{{ route('admin.invoices.index') }}" class="flex flex-wrap items-center gap-4">
            <div class="flex items-center space-x-2">
                <label class="text-sm font-medium text-gray-700">Status:</label>
                <select name="status" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">All Statuses</option>
                    <option value="pending">Pending</option>
                    <option value="paid">Paid</option>
                    <option value="overdue">Overdue</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>

            <div class="flex items-center space-x-2">
                <label class="text-sm font-medium text-gray-700">Payment Method:</label>
                <select name="payment_method" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">All Methods</option>
                    <option value="cash">Cash</option>
                    <option value="bank_transfer">Bank Transfer</option>
                    <option value="mobile_money">Mobile Money</option>
                    <option value="card">Card</option>
                </select>
            </div>

            <button type="submit" class="px-4 py-2 bg-gray-600 text-white rounded-md text-sm hover:bg-gray-700">
                Apply Filters
            </button>
            
            <a href="{{ route('admin.invoices.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm hover:bg-gray-50">
                Clear
            </a>
        </form>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <i class="fas fa-file-invoice text-blue-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Invoices</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['total'] }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Paid</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['paid'] }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-full">
                    <i class="fas fa-clock text-yellow-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Pending</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['pending'] }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 rounded-full">
                    <i class="fas fa-exclamation-triangle text-red-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Overdue</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['overdue'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Invoices Table -->
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="min-w-full divide-y divide-gray-200">
            <div class="bg-gray-50 px-6 py-3">
                <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium text-gray-900">
                        All Invoices
                    </h3>
                </div>
            </div>
            
            <div class="bg-white divide-y divide-gray-200">
                @forelse($invoices as $invoice)
                    <div class="hover:bg-gray-50">
                        <div class="px-6 py-4">
                            <div class="flex items-center justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-900">{{ $invoice->invoice_number }}</h4>
                                            <p class="text-sm text-gray-500">{{ $invoice->client_name }} • {{ $invoice->description }}</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                                @if($invoice->status == 'paid') bg-green-100 text-green-800
                                                @elseif($invoice->status == 'overdue') bg-red-100 text-red-800
                                                @elseif($invoice->status == 'cancelled') bg-gray-100 text-gray-800
                                                @else bg-yellow-100 text-yellow-800 @endif">
                                                {{ ucfirst($invoice->status) }}
                                            </span>
                                            @if($invoice->payment_method)
                                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                                    {{ Invoice::getPaymentMethods()[$invoice->payment_method] }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="mt-2 flex items-center space-x-6 text-sm text-gray-500">
                                        <span>
                                            <i class="fas fa-user mr-1"></i>
                                            {{ $invoice->client_name }}
                                        </span>
                                        <span>
                                            <i class="fas fa-envelope mr-1"></i>
                                            {{ $invoice->client_email }}
                                        </span>
                                        <span>
                                            <i class="fas fa-calendar mr-1"></i>
                                            Due: {{ $invoice->due_date->format('M d, Y') }}
                                        </span>
                                        <span>
                                            <i class="fas fa-dollar-sign mr-1"></i>
                                            {{ $invoice->formatted_total }}
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('admin.invoices.show', $invoice) }}" 
                                       class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                        View
                                    </a>
                                    <a href="{{ route('admin.invoices.edit', $invoice) }}" 
                                       class="text-gray-600 hover:text-gray-900 text-sm font-medium">
                                        Edit
                                    </a>
                                    <a href="{{ route('admin.invoices.pdf', $invoice) }}" 
                                       class="text-green-600 hover:text-green-900 text-sm font-medium">
                                        PDF
                                    </a>
                                    <form action="{{ route('admin.invoices.destroy', $invoice) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 text-sm font-medium"
                                                onclick="return confirm('Are you sure you want to delete this invoice?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="px-6 py-12 text-center">
                        <i class="fas fa-inbox text-gray-400 text-4xl mb-4"></i>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">No invoices found</h3>
                        <p class="text-gray-500">Get started by creating your first invoice.</p>
                        <a href="{{ route('admin.invoices.create') }}" 
                           class="mt-4 inline-flex px-4 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700">
                            <i class="fas fa-plus mr-2"></i>Create Invoice
                        </a>
                    </div>
                @endforelse
            </div>
        </div>
        
        <!-- Pagination -->
        @if($invoices->hasPages())
            <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                <div class="flex-1 flex justify-between sm:hidden">
                    {{ $invoices->links() }}
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">{{ $invoices->firstItem() }}</span>
                            to
                            <span class="font-medium">{{ $invoices->lastItem() }}</span>
                            of
                            <span class="font-medium">{{ $invoices->total() }}</span>
                            results
                        </p>
                    </div>
                    <div>
                        {{ $invoices->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
