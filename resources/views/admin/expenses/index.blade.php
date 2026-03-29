@extends('admin.layouts.app')

@section('title', 'Expenses - Admin Panel')
@section('page-title', 'Expenses')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Expenses</h1>
                <p class="mt-1 text-sm text-gray-600">Track and manage business expenses</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-green-700">
                    <i class="fas fa-plus mr-2"></i>Add Expense
                </button>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white shadow rounded-lg p-4 mb-6">
        <form method="GET" action="{{ route('admin.expenses.index') }}" class="flex flex-wrap items-center gap-4">
            <div class="flex items-center space-x-2">
                <label class="text-sm font-medium text-gray-700">Category:</label>
                <select name="category" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">All Categories</option>
                    <option value="salaries">Salaries</option>
                    <option value="rent">Rent</option>
                    <option value="utilities">Utilities</option>
                    <option value="marketing">Marketing</option>
                    <option value="equipment">Equipment</option>
                    <option value="software">Software</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="flex items-center space-x-2">
                <label class="text-sm font-medium text-gray-700">Status:</label>
                <select name="status" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">All Statuses</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
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
            
            <a href="{{ route('admin.expenses.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm hover:bg-gray-50">
                Clear
            </a>
        </form>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 rounded-full">
                    <i class="fas fa-receipt text-red-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Expenses</p>
                    <p class="text-2xl font-semibold text-gray-900">TZS 12M</p>
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
                    <p class="text-2xl font-semibold text-gray-900">TZS 850K</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Approved</p>
                    <p class="text-2xl font-semibold text-gray-900">TZS 11.15M</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <i class="fas fa-calendar text-blue-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">This Month</p>
                    <p class="text-2xl font-semibold text-gray-900">TZS 3.2M</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Expenses Table -->
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="min-w-full divide-y divide-gray-200">
            <div class="bg-gray-50 px-6 py-3">
                <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium text-gray-900">
                        All Expenses
                    </h3>
                </div>
            </div>
            
            <div class="bg-white divide-y divide-gray-200">
                <!-- Expense 1 -->
                <div class="hover:bg-gray-50">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center space-x-4">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">EXP-2024-001</h4>
                                        <p class="text-sm text-gray-500">Office Rent • March 2024</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                            Approved
                                        </span>
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                            Bank Transfer
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="mt-2 flex items-center space-x-6 text-sm text-gray-500">
                                    <span>
                                        <i class="fas fa-tag mr-1"></i>
                                        Rent & Utilities
                                    </span>
                                    <span>
                                        <i class="fas fa-calendar mr-1"></i>
                                        Mar 1, 2024
                                    </span>
                                    <span>
                                        <i class="fas fa-dollar-sign mr-1"></i>
                                        TZS 2,000,000
                                    </span>
                                    <span>
                                        <i class="fas fa-user mr-1"></i>
                                        Admin
                                    </span>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                    View
                                </button>
                                <button class="text-gray-600 hover:text-gray-900 text-sm font-medium">
                                    Edit
                                </button>
                                <button class="text-green-600 hover:text-green-900 text-sm font-medium">
                                    Receipt
                                </button>
                                <button class="text-red-600 hover:text-red-900 text-sm font-medium">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expense 2 -->
                <div class="hover:bg-gray-50">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center space-x-4">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">EXP-2024-002</h4>
                                        <p class="text-sm text-gray-500">Marketing Campaign • Digital Ads</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                            Approved
                                        </span>
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">
                                            Mobile Money
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="mt-2 flex items-center space-x-6 text-sm text-gray-500">
                                    <span>
                                        <i class="fas fa-tag mr-1"></i>
                                        Marketing
                                    </span>
                                    <span>
                                        <i class="fas fa-calendar mr-1"></i>
                                        Mar 15, 2024
                                    </span>
                                    <span>
                                        <i class="fas fa-dollar-sign mr-1"></i>
                                        TZS 500,000
                                    </span>
                                    <span>
                                        <i class="fas fa-user mr-1"></i>
                                        Admin
                                    </span>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                    View
                                </button>
                                <button class="text-gray-600 hover:text-gray-900 text-sm font-medium">
                                    Edit
                                </button>
                                <button class="text-green-600 hover:text-green-900 text-sm font-medium">
                                    Receipt
                                </button>
                                <button class="text-red-600 hover:text-red-900 text-sm font-medium">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expense 3 -->
                <div class="hover:bg-gray-50">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center space-x-4">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">EXP-2024-003</h4>
                                        <p class="text-sm text-gray-500">Software Licenses • Annual Subscription</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
                                            Card
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="mt-2 flex items-center space-x-6 text-sm text-gray-500">
                                    <span>
                                        <i class="fas fa-tag mr-1"></i>
                                        Software
                                    </span>
                                    <span>
                                        <i class="fas fa-calendar mr-1"></i>
                                        Mar 20, 2024
                                    </span>
                                    <span>
                                        <i class="fas fa-dollar-sign mr-1"></i>
                                        TZS 300,000
                                    </span>
                                    <span>
                                        <i class="fas fa-user mr-1"></i>
                                        John Doe
                                    </span>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                    View
                                </button>
                                <button class="text-gray-600 hover:text-gray-900 text-sm font-medium">
                                    Edit
                                </button>
                                <button class="text-green-600 hover:text-green-900 text-sm font-medium">
                                    Approve
                                </button>
                                <button class="text-red-600 hover:text-red-900 text-sm font-medium">
                                    Reject
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expense 4 -->
                <div class="hover:bg-gray-50">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center space-x-4">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">EXP-2024-004</h4>
                                        <p class="text-sm text-gray-500">Employee Salaries • March 2024</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                            Approved
                                        </span>
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                            Bank Transfer
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="mt-2 flex items-center space-x-6 text-sm text-gray-500">
                                    <span>
                                        <i class="fas fa-tag mr-1"></i>
                                        Salaries
                                    </span>
                                    <span>
                                        <i class="fas fa-calendar mr-1"></i>
                                        Mar 25, 2024
                                    </span>
                                    <span>
                                        <i class="fas fa-dollar-sign mr-1"></i>
                                        TZS 8,500,000
                                    </span>
                                    <span>
                                        <i class="fas fa-user mr-1"></i>
                                        Admin
                                    </span>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                    View
                                </button>
                                <button class="text-gray-600 hover:text-gray-900 text-sm font-medium">
                                    Edit
                                </button>
                                <button class="text-green-600 hover:text-green-900 text-sm font-medium">
                                    Receipt
                                </button>
                                <button class="text-red-600 hover:text-red-900 text-sm font-medium">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
                <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Previous
                </button>
                <button class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Next
                </button>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium">1</span>
                        to
                        <span class="font-medium">10</span>
                        of
                        <span class="font-medium">47</span>
                        results
                    </p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <button class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Previous</span>
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            1
                        </button>
                        <button class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            2
                        </button>
                        <button class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            3
                        </button>
                        <button class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
