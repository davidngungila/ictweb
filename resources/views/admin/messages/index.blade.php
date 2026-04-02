@extends('admin.layouts.app')

@section('title', 'Messages Management')
@section('page-title', 'Messages Management')

@section('content')
<div class="p-6">
    <!-- Header with Actions -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Messages</h1>
            <p class="text-gray-600 mt-1">Manage customer inquiries and support messages</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('messages.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center justify-center">
                <i class="fas fa-plus mr-2"></i>
                New Message
            </a>
            <a href="{{ route('messages.export') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center justify-center">
                <i class="fas fa-download mr-2"></i>
                Export
            </a>
            <a href="{{ route('dashboard.mother') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 flex items-center justify-center">
                <i class="fas fa-tachometer-alt mr-2"></i>
                Dashboard
            </a>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8" id="statsContainer">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-envelope text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Messages</p>
                    <p class="text-2xl font-bold text-gray-900" id="totalMessages">-</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-envelope-open text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Unread</p>
                    <p class="text-2xl font-bold text-gray-900" id="unreadMessages">-</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Resolved</p>
                    <p class="text-2xl font-bold text-gray-900" id="resolvedMessages">-</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-reply text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Replied</p>
                    <p class="text-2xl font-bold text-gray-900" id="repliedMessages">-</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="bg-white rounded-lg shadow p-6 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                <input type="text" id="searchInput" placeholder="Search messages..." 
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select id="statusFilter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="">All Status</option>
                    <option value="new">New</option>
                    <option value="in-progress">In Progress</option>
                    <option value="resolved">Resolved</option>
                    <option value="closed">Closed</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Priority</label>
                <select id="priorityFilter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="">All Priority</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                    <option value="urgent">Urgent</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Read Status</label>
                <select id="readFilter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="">All</option>
                    <option value="unread">Unread</option>
                    <option value="read">Read</option>
                </select>
            </div>
        </div>
        
        <div class="flex justify-end mt-4 space-x-3">
            <button onclick="resetFilters()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                <i class="fas fa-redo mr-2"></i>Reset
            </button>
            <button onclick="applyFilters()" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <i class="fas fa-filter mr-2"></i>Apply Filters
            </button>
        </div>
    </div>

    <!-- Messages Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Messages List</h2>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" onclick="sortTable('name')">
                            Name <i class="fas fa-sort text-gray-400"></i>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" onclick="sortTable('email')">
                            Email <i class="fas fa-sort text-gray-400"></i>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Subject
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" onclick="sortTable('status')">
                            Status <i class="fas fa-sort text-gray-400"></i>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" onclick="sortTable('priority')">
                            Priority <i class="fas fa-sort text-gray-400"></i>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" onclick="sortTable('created_at')">
                            Date <i class="fas fa-sort text-gray-400"></i>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200" id="messagesTableBody">
                    <!-- Messages will be loaded here -->
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                            <i class="fas fa-spinner fa-spin text-3xl mb-3"></i>
                            <p>Loading messages...</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-700" id="paginationInfo">
                    Showing 0 to 0 of 0 results
                </div>
                <div class="flex space-x-2" id="paginationLinks">
                    <!-- Pagination links will be loaded here -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Message Details Modal -->
<div id="messageModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
    <div class="relative top-20 mx-auto p-5 border w-[800px] shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900">Message Details</h3>
                <button onclick="closeModal('messageModal')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div id="messageDetails">
                <!-- Message details will be loaded here -->
            </div>
        </div>
    </div>
</div>

<script>
let currentPage = 1;
let currentSort = 'created_at';
let currentOrder = 'desc';

// Load messages
async function loadMessages(page = 1) {
    try {
        const search = document.getElementById('searchInput').value;
        const status = document.getElementById('statusFilter').value;
        const priority = document.getElementById('priorityFilter').value;
        const readStatus = document.getElementById('readFilter').value;
        
        const params = new URLSearchParams({
            page: page,
            sort: currentSort,
            order: currentOrder,
            search: search,
            status: status,
            priority: priority,
            read_status: readStatus
        });
        
        const response = await fetch(`/admin/messages/data?${params}`);
        const data = await response.json();
        
        displayMessages(data.data);
        updatePagination(data);
        currentPage = page;
        
    } catch (error) {
        console.error('Error loading messages:', error);
    }
}

// Display messages in table
function displayMessages(messages) {
    const tbody = document.getElementById('messagesTableBody');
    
    if (messages.length === 0) {
        tbody.innerHTML = `
            <tr>
                <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                    <i class="fas fa-inbox text-3xl mb-3"></i>
                    <p>No messages found</p>
                </td>
            </tr>
        `;
        return;
    }
    
    tbody.innerHTML = messages.map(message => `
        <tr class="${message.read_at ? '' : 'bg-blue-50'}">
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    ${!message.read_at ? '<div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>' : ''}
                    <div class="text-sm font-medium text-gray-900">${message.name}</div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">${message.email}</div>
            </td>
            <td class="px-6 py-4">
                <div class="text-sm text-gray-900 max-w-xs truncate">${message.subject}</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${getStatusClass(message.status)}">
                    ${message.status}
                </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${getPriorityClass(message.priority)}">
                    ${message.priority}
                </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                ${formatDate(message.created_at)}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <button onclick="viewMessage(${message.id})" class="text-blue-600 hover:text-blue-900 mr-3">
                    <i class="fas fa-eye"></i>
                </button>
                <button onclick="editMessage(${message.id})" class="text-green-600 hover:text-green-900 mr-3">
                    <i class="fas fa-edit"></i>
                </button>
                <button onclick="deleteMessage(${message.id}, '${message.name}')" class="text-red-600 hover:text-red-900">
                    <i class="fas fa-trash"></i>
                </button>
            </td>
        </tr>
    `).join('');
}

// Load statistics
async function loadStats() {
    try {
        const response = await fetch('/admin/messages/stats');
        const stats = await response.json();
        
        document.getElementById('totalMessages').textContent = stats.total;
        document.getElementById('unreadMessages').textContent = stats.unread;
        document.getElementById('resolvedMessages').textContent = stats.resolved;
        document.getElementById('repliedMessages').textContent = stats.replied;
    } catch (error) {
        console.error('Error loading stats:', error);
    }
}

// View message details
async function viewMessage(id) {
    try {
        const response = await fetch(`/admin/messages/${id}`);
        const message = await response.json();
        
        document.getElementById('messageDetails').innerHTML = `
            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <p class="text-gray-900">${message.name}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <p class="text-gray-900">${message.email}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone</label>
                        <p class="text-gray-900">${message.phone || 'N/A'}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Priority</label>
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${getPriorityClass(message.priority)}">
                            ${message.priority}
                        </span>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700">Subject</label>
                    <p class="text-gray-900">${message.subject}</p>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700">Message</label>
                    <p class="text-gray-900 whitespace-pre-wrap">${message.message}</p>
                </div>
                
                <div class="flex justify-end space-x-3 pt-4 border-t">
                    ${!message.read_at ? `<button onclick="markAsRead(${message.id})" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Mark as Read</button>` : ''}
                    ${!message.replied_at ? `<button onclick="markAsReplied(${message.id})" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Mark as Replied</button>` : ''}
                    <button onclick="editMessage(${message.id})" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700">Edit</button>
                    <button onclick="closeModal('messageModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Close</button>
                </div>
            </div>
        `;
        
        document.getElementById('messageModal').classList.remove('hidden');
        
    } catch (error) {
        console.error('Error loading message:', error);
    }
}

// Helper functions
function getStatusClass(status) {
    const classes = {
        'new': 'bg-blue-100 text-blue-800',
        'in-progress': 'bg-yellow-100 text-yellow-800',
        'resolved': 'bg-green-100 text-green-800',
        'closed': 'bg-gray-100 text-gray-800'
    };
    return classes[status] || 'bg-gray-100 text-gray-800';
}

function getPriorityClass(priority) {
    const classes = {
        'low': 'bg-gray-100 text-gray-800',
        'medium': 'bg-blue-100 text-blue-800',
        'high': 'bg-orange-100 text-orange-800',
        'urgent': 'bg-red-100 text-red-800'
    };
    return classes[priority] || 'bg-gray-100 text-gray-800';
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
}

function sortTable(column) {
    if (currentSort === column) {
        currentOrder = currentOrder === 'asc' ? 'desc' : 'asc';
    } else {
        currentSort = column;
        currentOrder = 'desc';
    }
    loadMessages(currentPage);
}

function applyFilters() {
    loadMessages(1);
}

function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('priorityFilter').value = '';
    document.getElementById('readFilter').value = '';
    loadMessages(1);
}

function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
}

function editMessage(id) {
    window.location.href = `/admin/messages/${id}/edit`;
}

function deleteMessage(id, name) {
    if (confirm(`Are you sure you want to delete message from "${name}"?`)) {
        fetch(`/admin/messages/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                loadMessages(currentPage);
                loadStats();
                alert('Message deleted successfully');
            } else {
                alert('Error deleting message: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error deleting message:', error);
            alert('Error deleting message');
        });
    }
}

async function markAsRead(id) {
    try {
        const response = await fetch(`/admin/messages/${id}/mark-read`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            }
        });
        
        if (response.ok) {
            loadMessages(currentPage);
            loadStats();
            closeModal('messageModal');
        }
    } catch (error) {
        console.error('Error marking as read:', error);
    }
}

async function markAsReplied(id) {
    try {
        const response = await fetch(`/admin/messages/${id}/mark-replied`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            }
        });
        
        if (response.ok) {
            loadMessages(currentPage);
            loadStats();
            closeModal('messageModal');
        }
    } catch (error) {
        console.error('Error marking as replied:', error);
    }
}

// Pagination functions (similar to clients)
function updatePagination(data) {
    document.getElementById('paginationInfo').textContent = 
        `Showing ${data.from || 0} to ${data.to || 0} of ${data.total} results`;
    
    const paginationLinks = document.getElementById('paginationLinks');
    paginationLinks.innerHTML = '';
    
    if (data.prev_page_url) {
        paginationLinks.innerHTML += `
            <button onclick="loadMessages(${data.current_page - 1})" class="px-3 py-1 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                Previous
            </button>
        `;
    }
    
    for (let i = 1; i <= data.last_page; i++) {
        const isActive = i === data.current_page;
        paginationLinks.innerHTML += `
            <button onclick="loadMessages(${i})" class="px-3 py-1 ${isActive ? 'bg-blue-600 text-white' : 'bg-gray-300 text-gray-700'} rounded hover:bg-${isActive ? 'blue' : 'gray'}-400">
                ${i}
            </button>
        `;
    }
    
    if (data.next_page_url) {
        paginationLinks.innerHTML += `
            <button onclick="loadMessages(${data.current_page + 1})" class="px-3 py-1 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                Next
            </button>
        `;
    }
}

// Load data on page load
document.addEventListener('DOMContentLoaded', function() {
    loadMessages();
    loadStats();
});
</script>
@endsection
