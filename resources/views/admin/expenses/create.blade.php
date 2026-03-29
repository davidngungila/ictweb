@extends('admin.layouts.app')

@section('title', 'Create Expense - Admin Panel')
@section('page-title', 'Create Expense')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Create New Expense</h1>
                    <p class="mt-1 text-sm text-gray-600">Record a new business expense</p>
                </div>
                <a href="{{ route('admin.expenses.index') }}" 
                   class="px-4 py-2 border border-gray-300 rounded-md text-sm hover:bg-gray-50">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Expenses
                </a>
            </div>
        </div>

        <!-- Create Form -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <form action="{{ route('admin.expenses.store') }}" method="POST">
                @csrf
                
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Expense Information -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Expense Information</h3>
                            
                            <div>
                                <label for="category" class="block text-sm font-medium text-gray-700">Category *</label>
                                <select id="category" name="category" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Select a category...</option>
                                    <option value="salaries">Salaries & Wages</option>
                                    <option value="rent">Rent & Utilities</option>
                                    <option value="marketing">Marketing & Advertising</option>
                                    <option value="equipment">Equipment & Supplies</option>
                                    <option value="software">Software & Subscriptions</option>
                                    <option value="other">Other Expenses</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">Description *</label>
                                <textarea id="description" name="description" rows="3" required
                                          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                          placeholder="Describe the expense..."></textarea>
                            </div>
                            
                            <div>
                                <label for="amount" class="block text-sm font-medium text-gray-700">Amount (TZS) *</label>
                                <input type="number" id="amount" name="amount" step="0.01" min="0" required
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       placeholder="0.00">
                            </div>
                            
                            <div>
                                <label for="expense_date" class="block text-sm font-medium text-gray-700">Expense Date *</label>
                                <input type="date" id="expense_date" name="expense_date" required
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                        
                        <!-- Payment Information -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Payment Information</h3>
                            
                            <div>
                                <label for="payment_method" class="block text-sm font-medium text-gray-700">Payment Method *</label>
                                <select id="payment_method" name="payment_method" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Select payment method...</option>
                                    <option value="cash">Cash</option>
                                    <option value="bank_transfer">Bank Transfer</option>
                                    <option value="mobile_money">Mobile Money</option>
                                    <option value="card">Credit/Debit Card</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="receipt_url" class="block text-sm font-medium text-gray-700">Receipt URL</label>
                                <input type="url" id="receipt_url" name="receipt_url"
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       placeholder="https://example.com/receipt.jpg">
                                <p class="mt-1 text-xs text-gray-500">Link to receipt image or document</p>
                            </div>
                            
                            <div>
                                <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                                <textarea id="notes" name="notes" rows="3"
                                          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                          placeholder="Add any additional notes about this expense..."></textarea>
                            </div>
                            
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-info-circle text-blue-400"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-blue-800">
                                            This expense will be submitted for approval. You will be notified when it's reviewed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Form Actions -->
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <a href="{{ route('admin.expenses.index') }}" 
                       class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 mr-3">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="px-4 py-2 bg-blue-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-blue-700">
                        Create Expense
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Set maximum date to today
document.getElementById('expense_date').max = new Date().toISOString().split('T')[0];
</script>
@endsection
