@extends('admin.layouts.app')

@section('page-title', 'Advanced Expenses Management')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Advanced Expenses Management</h1>
        <p class="text-gray-600 mt-1">Comprehensive expense tracking, categorization, and budget management</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button onclick="openModal('createExpenseModal')" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            New Expense
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-receipt mr-2"></i>
            Scan Receipt
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-chart-pie mr-2"></i>
            Budget Report
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Expenses Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-dollar-sign text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Expenses</p>
                    <p class="text-2xl font-bold text-gray-900">$342.8K</p>
                    <p class="text-xs text-red-600">+12% this month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-piggy-bank text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Budget Used</p>
                    <p class="text-2xl font-bold text-gray-900">68.5%</p>
                    <p class="text-xs text-orange-600">$85.2K remaining</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-receipt text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Pending Claims</p>
                    <p class="text-2xl font-bold text-gray-900">23</p>
                    <p class="text-xs text-orange-600">5 urgent</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-chart-line text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Avg Daily</p>
                    <p class="text-2xl font-bold text-gray-900">$1,142</p>
                    <p class="text-xs text-green-600">On track</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search Expenses</label>
                <div class="relative">
                    <input type="text" placeholder="Search by description, vendor..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Categories</option>
                    <option>Office Supplies</option>
                    <option>Software & Licenses</option>
                    <option>Marketing</option>
                    <option>Travel</option>
                    <option>Utilities</option>
                    <option>Salaries</option>
                    <option>Equipment</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>Approved</option>
                    <option>Pending</option>
                    <option>Rejected</option>
                    <option>Draft</option>
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
                    <option>$0 - $50</option>
                    <option>$50 - $200</option>
                    <option>$200 - $500</option>
                    <option>$500 - $1,000</option>
                    <option>$1,000+</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Expenses Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Recent Expenses</h2>
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
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vendor</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Expense 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 28, 2026</div>
                            <div class="text-xs text-gray-500">10:30 AM</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">Office Furniture - Standing Desks</div>
                            <div class="text-xs text-gray-500">Ergonomic workstations for development team</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                Equipment
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Office Depot</div>
                            <div class="text-xs text-gray-500">Business Account</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">$2,450.00</div>
                            <div class="text-xs text-gray-500">5 units</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button onclick="previewExpense(1)" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="editExpense(1)" class="text-gray-600 hover:text-gray-900">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deleteExpense(1, 'Office Furniture')" class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Expense 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 27, 2026</div>
                            <div class="text-xs text-gray-500">2:15 PM</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">Adobe Creative Cloud License</div>
                            <div class="text-xs text-gray-500">Annual subscription for design team</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                Software
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Adobe Inc.</div>
                            <div class="text-xs text-gray-500">Online Purchase</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">$599.88</div>
                            <div class="text-xs text-gray-500">Annual</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button onclick="previewExpense(2)" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="editExpense(2)" class="text-gray-600 hover:text-gray-900">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deleteExpense(2, 'Adobe License')" class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Expense 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 26, 2026</div>
                            <div class="text-xs text-gray-500">11:45 AM</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">Client Lunch Meeting</div>
                            <div class="text-xs text-gray-500">Business lunch with TechCorp executives</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                Meals
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Nairobi Restaurant</div>
                            <div class="text-xs text-gray-500">Downtown</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">$185.50</div>
                            <div class="text-xs text-gray-500">4 people</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <button onclick="previewExpense(3)" class="text-blue-600 hover:text-blue-900">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="editExpense(3)" class="text-gray-600 hover:text-gray-900">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deleteExpense(3, 'Client Lunch')" class="text-red-600 hover:text-red-900">
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">156</span> results
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">Previous</button>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">Next</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Expense Modal -->
    <div id="createExpenseModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative top-20 mx-auto p-5 border w-[600px] shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Create New Expense</h3>
                    <button onclick="closeModal('createExpenseModal')" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <form onsubmit="handleCreateExpense(event)">
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                                <input type="date" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                                <select required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select Category</option>
                                    <option>Office Supplies</option>
                                    <option>Software & Licenses</option>
                                    <option>Marketing</option>
                                    <option>Travel</option>
                                    <option>Utilities</option>
                                    <option>Salaries</option>
                                    <option>Equipment</option>
                                    <option>Meals & Entertainment</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <input type="text" required placeholder="Brief description of expense" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Vendor</label>
                                <input type="text" required placeholder="Vendor or supplier name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Amount</label>
                                <input type="number" required step="0.01" min="0" placeholder="0.00" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Receipt</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="file" accept="image/*,.pdf" class="hidden" id="receiptFile">
                                    <div class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 cursor-pointer">
                                        <i class="fas fa-upload mr-2"></i>Choose File
                                    </div>
                                </label>
                                <span id="receiptFileName" class="text-sm text-gray-600">No file chosen</span>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Notes</label>
                            <textarea rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Additional details or notes..."></textarea>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" onclick="closeModal('createExpenseModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Create Expense
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Expense Preview Modal -->
    <div id="expensePreviewModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative top-20 mx-auto p-5 border w-[600px] shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Expense Details</h3>
                    <button onclick="closeModal('expensePreviewModal')" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-600">Date</p>
                                <p class="font-medium text-gray-900" id="previewDate">Mar 28, 2026</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Amount</p>
                                <p class="font-medium text-gray-900" id="previewAmount">$2,450.00</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Category</p>
                                <p class="font-medium text-gray-900" id="previewCategory">Equipment</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Status</p>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Approved
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Description</p>
                        <p class="font-medium text-gray-900" id="previewDescription">Office Furniture - Standing Desks</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Vendor</p>
                        <p class="font-medium text-gray-900" id="previewVendor">Office Depot</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Notes</p>
                        <p class="text-gray-900" id="previewNotes">Ergonomic workstations for development team - 5 units purchased to improve workplace ergonomics and productivity.</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Receipt</p>
                        <div class="border border-gray-200 rounded-lg p-4 bg-center">
                            <div class="w-32 h-32 bg-gray-200 rounded flex items-center justify-center">
                                <i class="fas fa-file-image text-gray-400 text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6 flex justify-end space-x-3">
                    <button onclick="closeModal('expensePreviewModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                        Close
                    </button>
                    <button onclick="editExpense(1)" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-edit mr-2"></i>Edit
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Expense Operations
    function previewExpense(expenseId) {
        // Load expense data based on ID
        const expenseData = {
            1: {
                date: 'Mar 28, 2026',
                amount: '$2,450.00',
                category: 'Equipment',
                description: 'Office Furniture - Standing Desks',
                vendor: 'Office Depot',
                notes: 'Ergonomic workstations for development team - 5 units purchased to improve workplace ergonomics and productivity.'
            }
        };
        
        const data = expenseData[expenseId] || expenseData[1];
        
        // Update preview modal with expense data
        document.getElementById('previewDate').textContent = data.date;
        document.getElementById('previewAmount').textContent = data.amount;
        document.getElementById('previewCategory').textContent = data.category;
        document.getElementById('previewDescription').textContent = data.description;
        document.getElementById('previewVendor').textContent = data.vendor;
        document.getElementById('previewNotes').textContent = data.notes;
        
        openModal('expensePreviewModal');
    }

    function editExpense(expenseId) {
        closeModal('expensePreviewModal');
        showNotification('Info', `Opening expense #${expenseId} for editing...`, 'info');
        // In real implementation, open edit modal with expense data
    }

    function deleteExpense(expenseId, expenseName) {
        confirmDelete(expenseName, () => {
            showNotification('Success', `Expense "${expenseName}" deleted successfully!`, 'success');
            closeModal('expensePreviewModal');
        });
    }

    function handleCreateExpense(event) {
        event.preventDefault();
        
        // Simulate API call
        showNotification('Success', 'Expense created successfully!', 'success');
        closeModal('createExpenseModal');
        
        // Reset form
        event.target.reset();
        document.getElementById('receiptFileName').textContent = 'No file chosen';
    }

    // File upload handling
    document.getElementById('receiptFile').addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name || 'No file chosen';
        document.getElementById('receiptFileName').textContent = fileName;
    });
    </script>
</div>
@endsection
