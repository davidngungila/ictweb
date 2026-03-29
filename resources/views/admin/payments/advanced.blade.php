@extends('admin.layouts.app')

@section('page-title', 'Advanced Payments Management')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Advanced Payments Management</h1>
        <p class="text-gray-600 mt-1">Comprehensive payment processing, tracking, and reconciliation system</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button onclick="openModal('recordPaymentModal')" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            Record Payment
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-credit-card mr-2"></i>
            Process Batch
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-sync mr-2"></i>
            Reconcile
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Payments Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-dollar-sign text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Received</p>
                    <p class="text-2xl font-bold text-gray-900">$892.4K</p>
                    <p class="text-xs text-green-600">+23% this month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Success Rate</p>
                    <p class="text-2xl font-bold text-gray-900">98.7%</p>
                    <p class="text-xs text-green-600">Excellent</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-clock text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Pending</p>
                    <p class="text-2xl font-bold text-gray-900">$45.2K</p>
                    <p class="text-xs text-orange-600">12 transactions</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-exclamation-triangle text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Failed</p>
                    <p class="text-2xl font-bold text-gray-900">$1,847</p>
                    <p class="text-xs text-red-600">3 failures</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search Payments</label>
                <div class="relative">
                    <input type="text" placeholder="Search by ID, client, invoice..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>Completed</option>
                    <option>Pending</option>
                    <option>Failed</option>
                    <option>Refunded</option>
                    <option>Disputed</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Payment Method</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Methods</option>
                    <option>Bank Transfer</option>
                    <option>Credit Card</option>
                    <option>M-Pesa</option>
                    <option>PayPal</option>
                    <option>Cheque</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date Range</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Time</option>
                    <option>Today</option>
                    <option>This Week</option>
                    <option>This Month</option>
                    <option>This Quarter</option>
                    <option>This Year</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Amount Range</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Amounts</option>
                    <option>$0 - $100</option>
                    <option>$100 - $500</option>
                    <option>$500 - $1,000</option>
                    <option>$1,000 - $5,000</option>
                    <option>$5,000+</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Payments Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Recent Payments</h2>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">
                        <i class="fas fa-download mr-1"></i> Export
                    </button>
                    <button class="px-3 py-1 text-sm bg-green-600 text-white rounded hover:bg-green-700">
                        <i class="fas fa-file-excel mr-1"></i> Excel
                    </button>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Payment ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Method</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Payment 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#PAY-2026-001</div>
                            <div class="text-xs text-gray-500">Mar 29, 2026 09:15 AM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-blue-600 font-semibold text-xs">TC</span>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">TechCorp Industries</div>
                                    <div class="text-xs text-gray-500">Corporate</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#INV-2026-001</div>
                            <div class="text-xs text-gray-500">Web Development</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">$12,450.00</div>
                            <div class="text-xs text-green-600">Full payment</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                Bank Transfer
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 29, 2026</div>
                            <div class="text-xs text-gray-500">09:15 AM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button onclick="previewPayment('PAY-2026-001')" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="downloadPaymentReceipt('PAY-2026-001')" class="text-green-600 hover:text-green-900">
                                    <i class="fas fa-file-pdf"></i>
                                </button>
                                <button onclick="refundPayment('PAY-2026-001', 'TechCorp Industries')" class="text-orange-600 hover:text-orange-900">
                                    <i class="fas fa-undo"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Payment 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#PAY-2026-002</div>
                            <div class="text-xs text-gray-500">Mar 28, 2026 02:30 PM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-600 font-semibold text-xs">SM</span>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">StartUp Solutions</div>
                                    <div class="text-xs text-gray-500">Small Business</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#INV-2026-002</div>
                            <div class="text-xs text-gray-500">Web Development</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">$3,250.00</div>
                            <div class="text-xs text-green-600">Full payment</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                M-Pesa
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 28, 2026</div>
                            <div class="text-xs text-gray-500">02:30 PM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button onclick="previewPayment('PAY-2026-002')" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="downloadPaymentReceipt('PAY-2026-002')" class="text-green-600 hover:text-green-900">
                                    <i class="fas fa-file-pdf"></i>
                                </button>
                                <button onclick="refundPayment('PAY-2026-002', 'StartUp Solutions')" class="text-orange-600 hover:text-orange-900">
                                    <i class="fas fa-undo"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Payment 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#PAY-2026-003</div>
                            <div class="text-xs text-gray-500">Mar 27, 2026 11:45 AM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-orange-600 font-semibold text-xs">JD</span>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">John Doe Consulting</div>
                                    <div class="text-xs text-gray-500">Individual</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#INV-2026-003</div>
                            <div class="text-xs text-gray-500">Consulting</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">$850.00</div>
                            <div class="text-xs text-green-600">Full payment</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Credit Card
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 27, 2026</div>
                            <div class="text-xs text-gray-500">11:45 AM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button onclick="previewPayment('PAY-2026-003')" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="downloadPaymentReceipt('PAY-2026-003')" class="text-green-600 hover:text-green-900">
                                    <i class="fas fa-file-pdf"></i>
                                </button>
                                <button onclick="refundPayment('PAY-2026-003', 'John Doe Consulting')" class="text-orange-600 hover:text-orange-900">
                                    <i class="fas fa-undo"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Payment 4 - Failed -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#PAY-2026-004</div>
                            <div class="text-xs text-gray-500">Mar 26, 2026 04:20 PM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-red-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-red-600 font-semibold text-xs">AB</span>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Alpha Business</div>
                                    <div class="text-xs text-gray-500">Small Business</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#INV-2026-004</div>
                            <div class="text-xs text-gray-500">Marketing Services</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">$1,847.00</div>
                            <div class="text-xs text-red-600">Failed</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                PayPal
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 26, 2026</div>
                            <div class="text-xs text-gray-500">04:20 PM</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Failed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button onclick="previewPayment('PAY-2026-004')" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="retryPayment('PAY-2026-004', 'Alpha Business')" class="text-green-600 hover:text-green-900">
                                    <i class="fas fa-redo"></i>
                                </button>
                                <button onclick="deletePayment('PAY-2026-004', 'Alpha Business')" class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-700">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">234</span> results
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">Previous</button>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">Next</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Record Payment Modal -->
    <div id="recordPaymentModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative top-20 mx-auto p-5 border w-[600px] shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Record New Payment</h3>
                    <button onclick="closeModal('recordPaymentModal')" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <form onsubmit="handleRecordPayment(event)">
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Client</label>
                                <select required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select Client</option>
                                    <option>TechCorp Industries</option>
                                    <option>StartUp Solutions</option>
                                    <option>John Doe Consulting</option>
                                    <option>Alpha Business</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Invoice</label>
                                <select required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select Invoice</option>
                                    <option>#INV-2026-001 - $12,450.00</option>
                                    <option>#INV-2026-002 - $3,250.00</option>
                                    <option>#INV-2026-003 - $850.00</option>
                                    <option>#INV-2026-004 - $1,847.00</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Payment Amount</label>
                                <input type="number" required step="0.01" min="0" placeholder="0.00" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Payment Date</label>
                                <input type="date" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Payment Method</label>
                                <select required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select Method</option>
                                    <option>Bank Transfer</option>
                                    <option>Credit Card</option>
                                    <option>M-Pesa</option>
                                    <option>PayPal</option>
                                    <option>Cheque</option>
                                    <option>Cash</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Transaction ID</label>
                                <input type="text" placeholder="Bank reference, transaction ID..." class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Notes</label>
                            <textarea rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Payment details or notes..."></textarea>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" onclick="closeModal('recordPaymentModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Record Payment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Payment Preview Modal -->
    <div id="paymentPreviewModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative top-10 mx-auto p-5 border w-[700px] max-h-[90vh] overflow-y-auto shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Payment Receipt</h3>
                    <button onclick="closeModal('paymentPreviewModal')" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <!-- Payment Receipt Content -->
                <div class="bg-white border border-gray-200 rounded-lg p-8">
                    <!-- Receipt Header -->
                    <div class="text-center mb-8">
                        <div class="w-32 h-16 bg-green-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <span class="text-white font-bold text-xl">JT</span>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">PAYMENT RECEIPT</h2>
                        <p class="text-sm text-gray-600 mt-1">Confirmation of successful payment</p>
                    </div>

                    <!-- Payment Details -->
                    <div class="grid grid-cols-2 gap-8 mb-8">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900 mb-4">Payment Information</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Payment ID:</span>
                                    <span class="text-sm font-medium text-gray-900" id="receiptPaymentId">#PAY-2026-001</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Date:</span>
                                    <span class="text-sm font-medium text-gray-900" id="receiptDate">Mar 29, 2026</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Time:</span>
                                    <span class="text-sm font-medium text-gray-900" id="receiptTime">09:15 AM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Method:</span>
                                    <span class="text-sm font-medium text-gray-900" id="receiptMethod">Bank Transfer</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Status:</span>
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-900 mb-4">Client Information</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Name:</span>
                                    <span class="text-sm font-medium text-gray-900" id="receiptClient">TechCorp Industries</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Invoice:</span>
                                    <span class="text-sm font-medium text-gray-900" id="receiptInvoice">#INV-2026-001</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Email:</span>
                                    <span class="text-sm font-medium text-gray-900" id="receiptEmail">billing@techcorp.com</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Amount Breakdown -->
                    <div class="border-t border-gray-200 pt-4 mb-8">
                        <h3 class="text-sm font-medium text-gray-900 mb-4">Payment Details</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between text-lg">
                                <span class="text-gray-600">Invoice Amount:</span>
                                <span class="font-medium text-gray-900" id="receiptInvoiceAmount">$12,450.00</span>
                            </div>
                            <div class="flex justify-between text-sm text-gray-600">
                                <span>Tax (16% VAT):</span>
                                <span id="receiptTax">$1,992.00</span>
                            </div>
                            <div class="flex justify-between text-lg font-bold text-gray-900 border-t border-gray-200 pt-2">
                                <span>Total Paid:</span>
                                <span id="receiptTotal">$14,442.00</span>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="border-t border-gray-200 pt-4 text-center">
                        <p class="text-sm text-gray-600">
                            <strong>Thank you!</strong> Your payment has been processed successfully.<br>
                            <strong>Questions:</strong> Contact accounting@jezdantech.com<br>
                            <strong>Reference:</strong> Keep this receipt for your records.
                        </p>
                    </div>
                </div>
                
                <div class="mt-6 flex justify-end space-x-3">
                    <button onclick="closeModal('paymentPreviewModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                        Close
                    </button>
                    <button onclick="downloadPaymentReceipt('PAY-2026-001')" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                        <i class="fas fa-download mr-2"></i>Download PDF
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Payment Operations
    function previewPayment(paymentId) {
        // Load payment data based on ID
        const paymentData = {
            'PAY-2026-001': {
                id: '#PAY-2026-001',
                date: 'Mar 29, 2026',
                time: '09:15 AM',
                method: 'Bank Transfer',
                status: 'Completed',
                client: 'TechCorp Industries',
                invoice: '#INV-2026-001',
                email: 'billing@techcorp.com',
                invoiceAmount: '$12,450.00',
                tax: '$1,992.00',
                total: '$14,442.00'
            }
        };
        
        const data = paymentData[paymentId] || paymentData['PAY-2026-001'];
        
        // Update receipt modal with payment data
        document.getElementById('receiptPaymentId').textContent = data.id;
        document.getElementById('receiptDate').textContent = data.date;
        document.getElementById('receiptTime').textContent = data.time;
        document.getElementById('receiptMethod').textContent = data.method;
        document.getElementById('receiptClient').textContent = data.client;
        document.getElementById('receiptInvoice').textContent = data.invoice;
        document.getElementById('receiptEmail').textContent = data.email;
        document.getElementById('receiptInvoiceAmount').textContent = data.invoiceAmount;
        document.getElementById('receiptTax').textContent = data.tax;
        document.getElementById('receiptTotal').textContent = data.total;
        
        openModal('paymentPreviewModal');
    }

    function downloadPaymentReceipt(paymentId) {
        // Simulate PDF download
        showNotification('Success', `Downloading payment receipt ${paymentId} as PDF...`, 'success');
        
        // In real implementation, this would generate and download PDF
        setTimeout(() => {
            showNotification('Success', `Payment receipt ${paymentId} PDF downloaded successfully!`, 'success');
        }, 1500);
    }

    function refundPayment(paymentId, clientName) {
        confirmDelete(`Refund payment to ${clientName}?`, () => {
            showNotification('Success', `Refund processed for ${paymentId}`, 'success');
        });
    }

    function retryPayment(paymentId, clientName) {
        showNotification('Info', `Retrying payment for ${clientName}...`, 'info');
        // In real implementation, this would retry the failed payment
    }

    function deletePayment(paymentId, clientName) {
        confirmDelete(`Delete payment record ${paymentId} for ${clientName}?`, () => {
            showNotification('Success', `Payment record deleted successfully!`, 'success');
        });
    }

    function handleRecordPayment(event) {
        event.preventDefault();
        
        // Simulate API call
        showNotification('Success', 'Payment recorded successfully!', 'success');
        closeModal('recordPaymentModal');
        
        // Reset form
        event.target.reset();
    }
    </script>
</div>
@endsection
