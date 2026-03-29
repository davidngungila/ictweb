@extends('layouts.app')

@section('title', 'Invoice Details')
@section('page-title', 'Invoice Details')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Invoice Header -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-6">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center space-x-4">
                    <div class="h-12 w-12 bg-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-cog text-white"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Jezdan Technology</h1>
                        <p class="text-gray-600">Professional IT Solutions</p>
                    </div>
                </div>
                <div class="text-right">
                    <h2 class="text-2xl font-bold text-gray-900">INVOICE</h2>
                    <p class="text-gray-600">#INV-2024-001</p>
                </div>
            </div>

            <!-- Invoice Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 mb-2">BILL TO:</h3>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="font-medium text-gray-900">John Doe</p>
                        <p class="text-gray-600">ABC School</p>
                        <p class="text-gray-600">john@abcschool.com</p>
                        <p class="text-gray-600">+1 234 567 8900</p>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 mb-2">INVOICE DETAILS:</h3>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Invoice Date:</span>
                                <span class="font-medium text-gray-900">March 25, 2024</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Due Date:</span>
                                <span class="font-medium text-gray-900">April 10, 2024</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Status:</span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Pending
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invoice Items -->
            <div class="mb-8">
                <h3 class="text-sm font-semibold text-gray-900 mb-4">INVOICE ITEMS:</h3>
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit Price</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div>
                                        <p class="font-medium text-gray-900">School Management System Development</p>
                                        <p class="text-sm text-gray-500">Complete web application with admin dashboard</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$5,000.00</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">$5,000.00</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div>
                                        <p class="font-medium text-gray-900">Additional Features</p>
                                        <p class="text-sm text-gray-500">Custom reporting modules</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$250.00</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">$500.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Invoice Summary -->
            <div class="flex justify-end mb-8">
                <div class="w-full md:w-1/3">
                    <div class="bg-gray-50 rounded-lg p-4 space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal:</span>
                            <span class="font-medium text-gray-900">$5,500.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tax (10%):</span>
                            <span class="font-medium text-gray-900">$550.00</span>
                        </div>
                        <div class="border-t pt-2">
                            <div class="flex justify-between">
                                <span class="text-lg font-semibold text-gray-900">Total:</span>
                                <span class="text-lg font-bold text-gray-900">$6,050.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Section -->
            <div class="border-t pt-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Payment Information</h3>
                
                <!-- Payment Status -->
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-6">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-triangle text-yellow-600 mr-3"></i>
                        <div>
                            <p class="font-medium text-yellow-800">Payment Pending</p>
                            <p class="text-sm text-yellow-600">This invoice is due on April 10, 2024</p>
                        </div>
                    </div>
                </div>

                <!-- Payment Methods -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-medium text-gray-900 mb-3">Bank Transfer</h4>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p><strong>Bank:</strong> National Bank of Tanzania</p>
                            <p><strong>Account Name:</strong> Jezdan Technology Ltd</p>
                            <p><strong>Account Number:</strong> 0123456789012</p>
                            <p><strong>Swift Code:</strong> NTANZTZXXX</p>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-medium text-gray-900 mb-3">Mobile Money</h4>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p><strong>M-Pesa:</strong> +255 123 456 789</p>
                            <p><strong>Tigo Pesa:</strong> +255 123 456 789</p>
                            <p><strong>Airtel Money:</strong> +255 123 456 789</p>
                            <p class="text-xs text-gray-500 mt-2">Reference: INV-2024-001</p>
                        </div>
                    </div>
                </div>

                <!-- Online Payment Button -->
                <div class="mt-6 text-center">
                    <button class="bg-green-600 text-white px-8 py-3 rounded-lg hover:bg-green-700 font-medium">
                        <i class="fas fa-credit-card mr-2"></i>
                        Pay Online with Card
                    </button>
                </div>
            </div>

            <!-- Notes -->
            <div class="mt-8 pt-6 border-t">
                <h3 class="text-sm font-semibold text-gray-900 mb-2">Notes:</h3>
                <p class="text-sm text-gray-600">
                    Thank you for your business! Please make payment by the due date to avoid late fees. 
                    If you have any questions about this invoice, please contact us at finance@jezdantech.com.
                </p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center space-x-4">
            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                <i class="fas fa-download mr-2"></i>
                Download PDF
            </button>
            <button class="bg-gray-600 text-white px-6 py-2 rounded-lg hover:bg-gray-700">
                <i class="fas fa-print mr-2"></i>
                Print Invoice
            </button>
            <a href="{{ route('client.invoices') }}" class="border border-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-50">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Invoices
            </a>
        </div>
    </div>
</div>
@endsection
