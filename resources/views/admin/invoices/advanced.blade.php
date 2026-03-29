@extends('admin.layouts.app')

@section('page-title', 'Advanced Invoices Management')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Advanced Invoices Management</h1>
        <p class="text-gray-600 mt-1">Comprehensive invoice tracking, generation, and financial management</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button onclick="openModal('createInvoiceModal')" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            New Invoice
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-file-invoice mr-2"></i>
            Generate Batch
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-chart-line mr-2"></i>
            Reports
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Invoices Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-file-invoice text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Invoices</p>
                    <p class="text-2xl font-bold text-gray-900">847</p>
                    <p class="text-xs text-green-600">+124 this month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-dollar-sign text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Revenue</p>
                    <p class="text-2xl font-bold text-gray-900">$1.24M</p>
                    <p class="text-xs text-green-600">+18% growth</p>
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
                    <p class="text-2xl font-bold text-gray-900">23</p>
                    <p class="text-xs text-orange-600">5 overdue</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-percentage text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Paid Rate</p>
                    <p class="text-2xl font-bold text-gray-900">94.2%</p>
                    <p class="text-xs text-green-600">Excellent</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search Invoices</label>
                <div class="relative">
                    <input type="text" placeholder="Search by invoice #, client..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>Paid</option>
                    <option>Pending</option>
                    <option>Overdue</option>
                    <option>Draft</option>
                    <option>Cancelled</option>
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
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Client Type</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Clients</option>
                    <option>Corporate</option>
                    <option>Small Business</option>
                    <option>Individual</option>
                    <option>Non-Profit</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Invoices Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Recent Invoices</h2>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">
                        <i class="fas fa-download mr-1"></i> Export
                    </button>
                    <button class="px-3 py-1 text-sm bg-green-600 text-white rounded hover:bg-green-700">
                        <i class="fas fa-file-pdf mr-1"></i> PDF All
                    </button>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice #</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Due Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Invoice 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#INV-2026-001</div>
                            <div class="text-xs text-gray-500">Mar 15, 2026</div>
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
                            <div class="text-sm font-medium text-gray-900">$12,450.00</div>
                            <div class="text-xs text-gray-500">Professional Services</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Apr 15, 2026</div>
                            <div class="text-xs text-orange-600">3 days overdue</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                Overdue
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button onclick="previewInvoice('INV-2026-001')" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="downloadInvoicePDF('INV-2026-001')" class="text-green-600 hover:text-green-900">
                                    <i class="fas fa-file-pdf"></i>
                                </button>
                                <button onclick="editInvoice('INV-2026-001')" class="text-gray-600 hover:text-gray-900">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Invoice 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#INV-2026-002</div>
                            <div class="text-xs text-gray-500">Mar 14, 2026</div>
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
                            <div class="text-sm font-medium text-gray-900">$3,250.00</div>
                            <div class="text-xs text-gray-500">Web Development</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Apr 14, 2026</div>
                            <div class="text-xs text-green-600">Paid</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Paid
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button onclick="previewInvoice('INV-2026-002')" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="downloadInvoicePDF('INV-2026-002')" class="text-green-600 hover:text-green-900">
                                    <i class="fas fa-file-pdf"></i>
                                </button>
                                <button onclick="editInvoice('INV-2026-002')" class="text-gray-600 hover:text-gray-900">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Invoice 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#INV-2026-003</div>
                            <div class="text-xs text-gray-500">Mar 13, 2026</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-purple-600 font-semibold text-xs">JD</span>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">John Doe Consulting</div>
                                    <div class="text-xs text-gray-500">Individual</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">$850.00</div>
                            <div class="text-xs text-gray-500">Consulting</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Apr 13, 2026</div>
                            <div class="text-xs text-yellow-600">Due in 2 days</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button onclick="previewInvoice('INV-2026-003')" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="downloadInvoicePDF('INV-2026-003')" class="text-green-600 hover:text-green-900">
                                    <i class="fas fa-file-pdf"></i>
                                </button>
                                <button onclick="editInvoice('INV-2026-003')" class="text-gray-600 hover:text-gray-900">
                                    <i class="fas fa-edit"></i>
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">847</span> results
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">Previous</button>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">Next</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Invoice Preview Modal -->
    <div id="invoicePreviewModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative top-10 mx-auto p-5 border w-[900px] max-h-[90vh] overflow-y-auto shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Invoice Preview</h3>
                    <button onclick="closeModal('invoicePreviewModal')" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <!-- Invoice Content -->
                <div class="bg-white border border-gray-200 rounded-lg p-8">
                    <!-- Invoice Header -->
                    <div class="flex justify-between items-start mb-8">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">INVOICE</h2>
                            <p class="text-sm text-gray-600 mt-1">Invoice #: <span id="previewInvoiceNumber">INV-2026-001</span></p>
                            <p class="text-sm text-gray-600">Date: March 15, 2026</p>
                            <p class="text-sm text-gray-600">Due: April 15, 2026</p>
                        </div>
                        <div class="text-right">
                            <div class="w-32 h-16 bg-blue-600 rounded-lg flex items-center justify-center">
                                <span class="text-white font-bold text-xl">JT</span>
                            </div>
                            <p class="text-sm font-medium text-gray-900 mt-2">Jezdan Technology</p>
                            <p class="text-sm text-gray-600">123 Business Ave, Suite 100</p>
                            <p class="text-sm text-gray-600">Nairobi, Kenya 00100</p>
                            <p class="text-sm text-gray-600">contact@jezdantech.com</p>
                        </div>
                    </div>

                    <!-- Bill To -->
                    <div class="mb-8">
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Bill To:</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-medium text-gray-900" id="previewClientName">TechCorp Industries</p>
                            <p class="text-sm text-gray-600" id="previewClientAddress">456 Corporate Blvd, Floor 12</p>
                            <p class="text-sm text-gray-600" id="previewClientCity">Nairobi, Kenya 00100</p>
                            <p class="text-sm text-gray-600" id="previewClientEmail">billing@techcorp.com</p>
                        </div>
                    </div>

                    <!-- Invoice Items -->
                    <div class="mb-8">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="text-left py-3 text-sm font-medium text-gray-900">Description</th>
                                    <th class="text-center py-3 text-sm font-medium text-gray-900">Quantity</th>
                                    <th class="text-right py-3 text-sm font-medium text-gray-900">Unit Price</th>
                                    <th class="text-right py-3 text-sm font-medium text-gray-900">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-100">
                                    <td class="py-4 text-sm text-gray-900">Professional Web Development Services</td>
                                    <td class="py-4 text-center text-sm text-gray-900">40 hours</td>
                                    <td class="py-4 text-right text-sm text-gray-900">$250.00</td>
                                    <td class="py-4 text-right text-sm font-medium text-gray-900">$10,000.00</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-4 text-sm text-gray-900">UI/UX Design Consultation</td>
                                    <td class="py-4 text-center text-sm text-gray-900">10 hours</td>
                                    <td class="py-4 text-right text-sm text-gray-900">$150.00</td>
                                    <td class="py-4 text-right text-sm font-medium text-gray-900">$1,500.00</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-4 text-sm text-gray-900">Project Management</td>
                                    <td class="py-4 text-center text-sm text-gray-900">6 hours</td>
                                    <td class="py-4 text-right text-sm text-gray-900">$150.00</td>
                                    <td class="py-4 text-right text-sm font-medium text-gray-900">$900.00</td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-4 text-sm text-gray-900">Quality Assurance & Testing</td>
                                    <td class="py-4 text-center text-sm text-gray-900">2 hours</td>
                                    <td class="py-4 text-right text-sm text-gray-900">$25.00</td>
                                    <td class="py-4 text-right text-sm font-medium text-gray-900">$50.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="border-t border-gray-200">
                                    <td colspan="3" class="py-4 text-right text-sm font-medium text-gray-900">Subtotal:</td>
                                    <td class="py-4 text-right text-sm font-medium text-gray-900">$12,450.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="py-2 text-right text-sm text-gray-600">Tax (16% VAT):</td>
                                    <td class="py-2 text-right text-sm text-gray-600">$1,992.00</td>
                                </tr>
                                <tr class="border-t border-gray-200">
                                    <td colspan="3" class="py-4 text-right text-lg font-bold text-gray-900">Total:</td>
                                    <td class="py-4 text-right text-lg font-bold text-gray-900">$14,442.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <!-- Footer Notes -->
                    <div class="border-t border-gray-200 pt-4">
                        <p class="text-sm text-gray-600">
                            <strong>Payment Terms:</strong> Net 30 days. Late payments subject to 1.5% monthly interest.<br>
                            <strong>Payment Methods:</strong> Bank Transfer, M-Pesa, Credit Card<br>
                            <strong>Questions:</strong> Contact accounting@jezdantech.com
                        </p>
                    </div>
                </div>
                
                <div class="mt-6 flex justify-end space-x-3">
                    <button onclick="closeModal('invoicePreviewModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                        Close
                    </button>
                    <button onclick="downloadInvoicePDF('INV-2026-001')" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                        <i class="fas fa-download mr-2"></i>Download PDF
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Invoice Modal -->
    <div id="createInvoiceModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative top-20 mx-auto p-5 border w-[700px] shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Create New Invoice</h3>
                    <button onclick="closeModal('createInvoiceModal')" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <form onsubmit="handleCreateInvoice(event)">
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Client</label>
                                <select required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select Client</option>
                                    <option>TechCorp Industries</option>
                                    <option>StartUp Solutions</option>
                                    <option>John Doe Consulting</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Invoice Date</label>
                                <input type="date" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Due Date</label>
                                <input type="date" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Payment Terms</label>
                                <select required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option>Net 15</option>
                                    <option>Net 30</option>
                                    <option>Net 45</option>
                                    <option>Due on Receipt</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Invoice Items</label>
                            <div class="space-y-2">
                                <div class="grid grid-cols-4 gap-2 items-center">
                                    <input type="text" placeholder="Description" class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <input type="number" placeholder="Qty" class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <input type="number" placeholder="Unit Price" step="0.01" class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <button type="button" class="px-3 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="button" class="mt-2 px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                <i class="fas fa-plus mr-2"></i>Add Item
                            </button>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Notes</label>
                            <textarea rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Additional notes or payment instructions..."></textarea>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" onclick="closeModal('createInvoiceModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Create Invoice
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    // Invoice Operations
    function previewInvoice(invoiceId) {
        // Load invoice data based on ID
        const invoiceData = {
            'INV-2026-001': {
                number: 'INV-2026-001',
                client: 'TechCorp Industries',
                address: '456 Corporate Blvd, Floor 12',
                city: 'Nairobi, Kenya 00100',
                email: 'billing@techcorp.com'
            }
        };
        
        const data = invoiceData[invoiceId] || invoiceData['INV-2026-001'];
        
        // Update preview modal with invoice data
        document.getElementById('previewInvoiceNumber').textContent = data.number;
        document.getElementById('previewClientName').textContent = data.client;
        document.getElementById('previewClientAddress').textContent = data.address;
        document.getElementById('previewClientCity').textContent = data.city;
        document.getElementById('previewClientEmail').textContent = data.email;
        
        openModal('invoicePreviewModal');
    }

    function downloadInvoicePDF(invoiceId) {
        // Simulate PDF download
        showNotification('Success', `Downloading invoice ${invoiceId} as PDF...`, 'success');
        
        // In real implementation, this would generate and download PDF
        setTimeout(() => {
            showNotification('Success', `Invoice ${invoiceId} PDF downloaded successfully!`, 'success');
        }, 1500);
    }

    function editInvoice(invoiceId) {
        // Simulate opening edit modal with invoice data
        showNotification('Info', `Opening invoice ${invoiceId} for editing...`, 'info');
    }

    function handleCreateInvoice(event) {
        event.preventDefault();
        
        // Simulate API call
        showNotification('Success', 'Invoice created successfully!', 'success');
        closeModal('createInvoiceModal');
        
        // Reset form
        event.target.reset();
    }
    </script>
</div>
@endsection
