@extends('admin.layouts.app')

@section('title', 'Create Invoice - Admin Panel')
@section('page-title', 'Create Invoice')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Create New Invoice</h1>
                    <p class="mt-1 text-sm text-gray-600">Generate a new invoice for your client</p>
                </div>
                <a href="{{ route('admin.invoices.index') }}" 
                   class="px-4 py-2 border border-gray-300 rounded-md text-sm hover:bg-gray-50">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Invoices
                </a>
            </div>
        </div>

        <!-- Create Form -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <form action="{{ route('admin.invoices.store') }}" method="POST">
                @csrf
                
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Client Information -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Client Information</h3>
                            
                            <div>
                                <label for="demo_request_id" class="block text-sm font-medium text-gray-700">Demo Request (Optional)</label>
                                <select id="demo_request_id" name="demo_request_id" 
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Select a demo request...</option>
                                    @foreach($demoRequests as $demoRequest)
                                        <option value="{{ $demoRequest->id }}">
                                            {{ $demoRequest->company_name }} - {{ $demoRequest->demo_type }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="mt-1 text-xs text-gray-500">Link to a completed demo request</p>
                            </div>
                            
                            <div>
                                <label for="client_name" class="block text-sm font-medium text-gray-700">Client Name *</label>
                                <input type="text" id="client_name" name="client_name" required
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       placeholder="Enter client name">
                            </div>
                            
                            <div>
                                <label for="client_email" class="block text-sm font-medium text-gray-700">Client Email *</label>
                                <input type="email" id="client_email" name="client_email" required
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       placeholder="client@example.com">
                            </div>
                            
                            <div>
                                <label for="client_phone" class="block text-sm font-medium text-gray-700">Client Phone</label>
                                <input type="tel" id="client_phone" name="client_phone"
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       placeholder="+255 123 456 789">
                            </div>
                        </div>
                        
                        <!-- Invoice Details -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Invoice Details</h3>
                            
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">Description *</label>
                                <textarea id="description" name="description" rows="3" required
                                          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                          placeholder="Describe the services or products being invoiced"></textarea>
                            </div>
                            
                            <div>
                                <label for="amount" class="block text-sm font-medium text-gray-700">Amount (TZS) *</label>
                                <input type="number" id="amount" name="amount" step="0.01" min="0" required
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       placeholder="0.00" oninput="calculateTotal()">
                            </div>
                            
                            <div>
                                <label for="tax" class="block text-sm font-medium text-gray-700">Tax (TZS) *</label>
                                <input type="number" id="tax" name="tax" step="0.01" min="0" value="0" required
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       placeholder="0.00" oninput="calculateTotal()">
                            </div>
                            
                            <div>
                                <label for="due_date" class="block text-sm font-medium text-gray-700">Due Date *</label>
                                <input type="date" id="due_date" name="due_date" required
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            
                            <div>
                                <div class="bg-gray-50 rounded-lg p-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-700">Total Amount:</span>
                                        <span class="text-lg font-bold text-gray-900">TZS <span id="total-amount">0.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional Information -->
                    <div class="mt-6 pt-6 border-t">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Additional Information</h3>
                        
                        <div>
                            <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                            <textarea id="notes" name="notes" rows="3"
                                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                      placeholder="Add any additional notes or payment instructions..."></textarea>
                        </div>
                    </div>
                </div>
                
                <!-- Form Actions -->
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <a href="{{ route('admin.invoices.index') }}" 
                       class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 mr-3">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="px-4 py-2 bg-blue-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-blue-700">
                        Create Invoice
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function calculateTotal() {
    const amount = parseFloat(document.getElementById('amount').value) || 0;
    const tax = parseFloat(document.getElementById('tax').value) || 0;
    const total = amount + tax;
    document.getElementById('total-amount').textContent = total.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

// Set minimum date to today
document.getElementById('due_date').min = new Date().toISOString().split('T')[0];
</script>
@endsection
