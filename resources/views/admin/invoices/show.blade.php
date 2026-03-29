@extends('admin.layouts.app')

@section('title', 'Invoice Details - Admin Panel')
@section('page-title', 'Invoice Details')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Success Message -->
    @if (session('success'))
        <div class="bg-green-50 border border-green-200 rounded-md p-4 mb-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-400"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-green-800">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- Invoice Header -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">{{ $invoice->invoice_number }}</h1>
                    <p class="text-sm text-gray-500">Invoice issued on {{ $invoice->created_at->format('M d, Y') }}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full 
                        @if($invoice->status == 'paid') bg-green-100 text-green-800
                        @elseif($invoice->status == 'overdue') bg-red-100 text-red-800
                        @elseif($invoice->status == 'cancelled') bg-gray-100 text-gray-800
                        @else bg-yellow-100 text-yellow-800 @endif">
                        {{ ucfirst($invoice->status) }}
                    </span>
                    @if($invoice->payment_method)
                        <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full bg-blue-100 text-blue-800">
                            {{ Invoice::getPaymentMethods()[$invoice->payment_method] }}
                        </span>
                    @endif
                </div>
            </div>
            
            <!-- Invoice Content -->
            <div class="border-t border-b border-gray-200 py-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Company Info -->
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-2">From</h3>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold text-gray-900">Jezdan Technology</p>
                            <p class="text-sm text-gray-600">Dar es Salaam, Tanzania</p>
                            <p class="text-sm text-gray-600">info@jezdantech.com</p>
                            <p class="text-sm text-gray-600">+255 123 456 789</p>
                        </div>
                    </div>
                    
                    <!-- Client Info -->
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Bill To</h3>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold text-gray-900">{{ $invoice->client_name }}</p>
                            <p class="text-sm text-gray-600">{{ $invoice->client_email }}</p>
                            @if($invoice->client_phone)
                                <p class="text-sm text-gray-600">{{ $invoice->client_phone }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                
                <!-- Invoice Items -->
                <div class="mt-8">
                    <h3 class="text-sm font-medium text-gray-900 mb-4">Invoice Details</h3>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="text-gray-700 whitespace-pre-wrap">{{ $invoice->description }}</p>
                    </div>
                </div>
                
                <!-- Amount Breakdown -->
                <div class="mt-8">
                    <div class="flex justify-end">
                        <div class="w-full md:w-1/2">
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Subtotal:</span>
                                        <span class="font-medium">{{ $invoice->formatted_amount }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Tax:</span>
                                        <span class="font-medium">TZS {{ number_format($invoice->tax, 2) }}</span>
                                    </div>
                                    <div class="border-t pt-2">
                                        <div class="flex justify-between">
                                            <span class="text-lg font-semibold text-gray-900">Total:</span>
                                            <span class="text-lg font-bold text-gray-900">{{ $invoice->formatted_total }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Due Date -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        @if($invoice->status === 'paid')
                            <span class="text-green-600 font-medium">Paid on {{ $invoice->paid_date->format('M d, Y') }}</span>
                        @else
                            Due on <span class="font-medium">{{ $invoice->due_date->format('M d, Y') }}</span>
                            @if($invoice->isOverdue())
                                <span class="ml-2 text-red-600 font-medium">(OVERDUE)</span>
                            @endif
                        @endif
                    </p>
                </div>
                
                <!-- Notes -->
                @if($invoice->notes)
                    <div class="mt-6">
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Notes</h3>
                        <div class="bg-blue-50 rounded-lg p-4">
                            <p class="text-gray-700 whitespace-pre-wrap">{{ $invoice->notes }}</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    <!-- Actions -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Actions</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Quick Status Update -->
                @if($invoice->status !== 'paid')
                    <div>
                        <form action="{{ route('admin.invoices.update', $invoice) }}" method="POST" class="space-y-3">
                            @csrf
                            @method('PUT')
                            <label class="block text-sm font-medium text-gray-700">Quick Status Update</label>
                            <select name="status" class="block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @foreach(Invoice::getStatuses() as $value => $label)
                                    <option value="{{ $value }}" {{ $invoice->status == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700">
                                Update Status
                            </button>
                        </form>
                    </div>
                @endif
                
                <!-- Other Actions -->
                <div class="space-y-3">
                    <label class="block text-sm font-medium text-gray-700">Other Actions</label>
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('admin.invoices.edit', $invoice) }}" 
                           class="px-4 py-2 bg-gray-600 text-white rounded-md text-sm hover:bg-gray-700 text-center">
                            <i class="fas fa-edit mr-2"></i>Edit Invoice
                        </a>
                        
                        @if($invoice->status !== 'paid')
                            <form action="{{ route('admin.invoices.mark-paid', $invoice) }}" method="POST">
                                @csrf
                                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-green-700 w-full"
                                        onclick="return confirm('Mark this invoice as paid?')">
                                    <i class="fas fa-check mr-2"></i>Mark as Paid
                                </button>
                            </form>
                        @endif
                        
                        <a href="{{ route('admin.invoices.pdf', $invoice) }}" 
                           class="px-4 py-2 bg-purple-600 text-white rounded-md text-sm hover:bg-purple-700 text-center">
                            <i class="fas fa-file-pdf mr-2"></i>Download PDF
                        </a>
                        
                        <form action="{{ route('admin.invoices.destroy', $invoice) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md text-sm hover:bg-red-700 w-full"
                                    onclick="return confirm('Are you sure you want to delete this invoice?')">
                                <i class="fas fa-trash mr-2"></i>Delete Invoice
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.invoices.index') }}" 
           class="px-4 py-2 border border-gray-300 rounded-md text-sm hover:bg-gray-50">
            <i class="fas fa-arrow-left mr-2"></i>Back to Invoices
        </a>
        
        <div class="flex items-center space-x-2">
            <a href="mailto:{{ $invoice->client_email }}" 
               class="px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-green-700">
                <i class="fas fa-envelope mr-2"></i>Email Invoice
            </a>
            @if($invoice->client_phone)
                <a href="tel:{{ $invoice->client_phone }}" 
                   class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700">
                    <i class="fas fa-phone mr-2"></i>Call Client
                </a>
            @endif
        </div>
    </div>
</div>
@endsection
