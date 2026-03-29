@extends('admin.layouts.app')

@section('page-title', 'Financial Overview')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Financial Overview</h1>
        <p class="text-gray-600 mt-1">Comprehensive financial dashboard with real-time insights and analytics</p>
    </div>

    <!-- Financial Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-dollar-sign text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Revenue</p>
                    <p class="text-2xl font-bold text-gray-900">$1,235,428</p>
                    <p class="text-xs text-green-600">+18.3% this quarter</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-arrow-up text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Net Profit</p>
                    <p class="text-2xl font-bold text-gray-900">$892,628</p>
                    <p class="text-xs text-green-600">+22.1% growth</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 rounded-lg">
                    <i class="fas fa-arrow-down text-red-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Expenses</p>
                    <p class="text-2xl font-bold text-gray-900">$342,800</p>
                    <p class="text-xs text-red-600">+12.4% this quarter</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-percentage text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Profit Margin</p>
                    <p class="text-2xl font-bold text-gray-900">72.3%</p>
                    <p class="text-xs text-green-600">Healthy</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
        <button onclick="window.location.href='{{ route('admin.invoices.advanced') }}'" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-file-invoice mr-2"></i>
            Manage Invoices
        </button>
        <button onclick="window.location.href='{{ route('admin.expenses.advanced') }}'" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-receipt mr-2"></i>
            Track Expenses
        </button>
        <button onclick="window.location.href='{{ route('admin.payments.advanced') }}'" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-credit-card mr-2"></i>
            Process Payments
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-chart-line mr-2"></i>
            Generate Reports
        </button>
    </div>

    <!-- Revenue Chart -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Revenue Trend</h2>
            <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-chart-line text-4xl text-gray-400 mb-4"></i>
                    <p class="text-sm text-gray-600">Revenue Chart</p>
                    <p class="text-xs text-gray-500">Interactive chart would display here</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Expense Breakdown</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                        <span class="text-sm font-medium text-gray-900">Software & Licenses</span>
                    </div>
                    <span class="text-sm font-bold text-gray-900">$45,280</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                        <span class="text-sm font-medium text-gray-900">Office Operations</span>
                    </div>
                    <span class="text-sm font-bold text-gray-900">$38,450</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-purple-500 rounded-full mr-3"></div>
                        <span class="text-sm font-medium text-gray-900">Marketing</span>
                    </div>
                    <span class="text-sm font-bold text-gray-900">$28,920</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-orange-500 rounded-full mr-3"></div>
                        <span class="text-sm font-medium text-gray-900">Equipment</span>
                    </div>
                    <span class="text-sm font-bold text-gray-900">$125,680</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-red-500 rounded-full mr-3"></div>
                        <span class="text-sm font-medium text-gray-900">Travel & Entertainment</span>
                    </div>
                    <span class="text-sm font-bold text-gray-900">$104,470</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Transactions -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Recent Transactions</h2>
                <button class="text-blue-600 hover:text-blue-900 text-sm">
                    View All Transactions →
                </button>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 29, 2026</div>
                            <div class="text-xs text-gray-500">09:15 AM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Payment Received
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">TechCorp Industries - Invoice #001</div>
                            <div class="text-xs text-gray-500">Web Development Services</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-green-600">+$14,442.00</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 28, 2026</div>
                            <div class="text-xs text-gray-500">02:30 PM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                Invoice Sent
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">StartUp Solutions - Project Alpha</div>
                            <div class="text-xs text-gray-500">Mobile App Development</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">$8,750.00</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 27, 2026</div>
                            <div class="text-xs text-gray-500">11:45 AM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Expense
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">Office Depot - Office Supplies</div>
                            <div class="text-xs text-gray-500">Standing Desks & Chairs</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-red-600">-$2,450.00</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Approved
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
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
                                TZS {{ number_format(45000000, 0) }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-green-600 font-medium">
                        +12.5%
                    </span>
                    <span class="text-gray-500">from last month</span>
                </div>
            </div>
        </div>

        <!-- Total Expenses -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-red-500 rounded-md p-3">
                        <i class="fas fa-receipt text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Expenses
                            </dt>
                            <dd class="text-lg font-medium text-gray-900">
                                TZS {{ number_format(12000000, 0) }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-red-600 font-medium">
                        +8.3%
                    </span>
                    <span class="text-gray-500">from last month</span>
                </div>
            </div>
        </div>

        <!-- Net Profit -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                        <i class="fas fa-chart-line text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Net Profit
                            </dt>
                            <dd class="text-lg font-medium text-gray-900">
                                TZS {{ number_format(33000000, 0) }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-green-600 font-medium">
                        +15.2%
                    </span>
                    <span class="text-gray-500">from last month</span>
                </div>
            </div>
        </div>

        <!-- Pending Invoices -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Pending Invoices
                            </dt>
                            <dd class="text-lg font-medium text-gray-900">
                                TZS {{ number_format(8500000, 0) }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <span class="text-yellow-600 font-medium">
                        8 invoices
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
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Invoices -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="text-lg font-medium text-gray-900">Recent Invoices</h3>
                <a href="{{ route('admin.invoices.advanced') }}" class="text-sm text-blue-600 hover:text-blue-500">
                    View all
                </a>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="p-4 hover:bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-900">INV-2024-001</p>
                            <p class="text-sm text-gray-500">ABC Company • Web Development</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">TZS 5,000,000</p>
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                Paid
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 hover:bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-900">INV-2024-002</p>
                            <p class="text-sm text-gray-500">XYZ Ltd • Mobile App</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">TZS 3,500,000</p>
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 hover:bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-900">INV-2024-003</p>
                            <p class="text-sm text-gray-500">Tech Corp • Cybersecurity</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">TZS 7,200,000</p>
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                Paid
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Expenses -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="text-lg font-medium text-gray-900">Recent Expenses</h3>
                <a href="{{ route('admin.expenses.index') }}" class="text-sm text-blue-600 hover:text-blue-500">
                    View all
                </a>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="p-4 hover:bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Office Rent</p>
                            <p class="text-sm text-gray-500">March 2024</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">TZS 2,000,000</p>
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                Approved
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 hover:bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Marketing Campaign</p>
                            <p class="text-sm text-gray-500">Digital Ads</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">TZS 500,000</p>
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                Approved
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 hover:bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Software Licenses</p>
                            <p class="text-sm text-gray-500">Annual Subscription</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">TZS 300,000</p>
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
