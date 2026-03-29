@extends('admin.layouts.app')

@section('title', 'Advanced Contact Messages Management')
@section('page-title', 'Advanced Contact Messages Management')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header with Quick Actions -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Advanced Contact Messages</h1>
            <p class="text-gray-600 mt-1">Intelligent message management and communication system</p>
        </div>
        <div class="flex space-x-3">
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                    <i class="fas fa-reply mr-2"></i>
                    Quick Reply
                    <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </button>
                <div x-show="open" @click.away="open = false" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 transform scale-95"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave-end="opacity-0 transform scale-95"
                     class="absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-envelope mr-2"></i>Reply to All
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-users mr-2"></i>Bulk Reply
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-robot mr-2"></i>AI Assistant Reply
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-file-alt mr-2"></i>Template Reply
                        </a>
                    </div>
                </div>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-download mr-2"></i>
                Advanced Export
            </button>
        </div>
    </div>

    <!-- Advanced Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Messages</p>
                    <p class="text-2xl font-bold text-gray-900">234</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 18% from last month
                    </p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-envelope text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Unread</p>
                    <p class="text-2xl font-bold text-gray-900">18</p>
                    <p class="text-xs text-red-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 5 new today
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-clock text-yellow-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Replied</p>
                    <p class="text-2xl font-bold text-gray-900">156</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 12% from last month
                    </p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-reply text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Important</p>
                    <p class="text-2xl font-bold text-gray-900">42</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 8% from last month
                    </p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-star text-purple-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Message Analytics Chart -->
    <div class="bg-white rounded-lg shadow p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Message Volume & Response Time</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="text-center">
                <div class="text-3xl font-bold text-blue-600">2.3 hrs</div>
                <div class="text-sm text-gray-600">Avg Response Time</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-down"></i> 15% faster
                </div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-green-600">89%</div>
                <div class="text-sm text-gray-600">Response Rate</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-up"></i> 5% improvement
                </div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-purple-600">4.8</div>
                <div class="text-sm text-gray-600">Customer Satisfaction</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-up"></i> 0.3 points
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters and Search -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Advanced search (name, email, subject, content...)" 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full lg:w-80">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Status</option>
                    <option value="unread">Unread</option>
                    <option value="read">Read</option>
                    <option value="replied">Replied</option>
                    <option value="archived">Archived</option>
                    <option value="flagged">Flagged</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Categories</option>
                    <option value="general">General Inquiry</option>
                    <option value="support">Technical Support</option>
                    <option value="sales">Sales</option>
                    <option value="partnership">Partnership</option>
                    <option value="complaint">Complaint</option>
                    <option value="feedback">Feedback</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Priority</option>
                    <option value="urgent">Urgent</option>
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Sources</option>
                    <option value="website">Website Form</option>
                    <option value="email">Direct Email</option>
                    <option value="social">Social Media</option>
                    <option value="phone">Phone Call</option>
                    <option value="referral">Referral</option>
                </select>
                
                <input type="date" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="From Date">
                <input type="date" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="To Date">
            </div>
            
            <div class="flex space-x-2">
                <button class="text-gray-500 hover:text-gray-700" title="Advanced Filters">
                    <i class="fas fa-filter"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="Sort Options">
                    <i class="fas fa-sort"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="AI Categorize">
                    <i class="fas fa-brain"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="Save View">
                    <i class="fas fa-save"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Advanced Messages Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <input type="checkbox" class="rounded border-gray-300">
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sender</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Source</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Advanced Message 1 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-12 w-12 flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="https://picsum.photos/seed/contact1/100/100.jpg" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Robert Kimani</div>
                                    <div class="text-sm text-gray-500">Nairobi, KE</div>
                                    <div class="flex items-center mt-1">
                                        <span class="text-xs text-gray-500">
                                            <i class="fas fa-building text-blue-400"></i> ABC School
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900 font-medium">Web Development Quote Request</div>
                            <div class="text-sm text-gray-600 truncate max-w-xs">Looking for a professional e-commerce website for my retail business with advanced features...</div>
                            <div class="flex items-center mt-1">
                                <span class="text-xs text-gray-500">
                                    <i class="fas fa-paperclip text-gray-400"></i> 2 attachments
                                </span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Sales
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                <i class="fas fa-fire mr-1"></i>Urgent
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-globe mr-1"></i>Website
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 29, 2024</div>
                            <div class="text-xs text-gray-500">10:30 AM</div>
                            <div class="flex items-center mt-1">
                                <span class="text-xs text-orange-600">
                                    <i class="fas fa-clock"></i> 2 hours ago
                                </span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Unread
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-1">
                                <button class="text-blue-600 hover:text-blue-900 p-1" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900 p-1" title="Reply">
                                    <i class="fas fa-reply"></i>
                                </button>
                                <button class="text-purple-600 hover:text-purple-900 p-1" title="AI Reply">
                                    <i class="fas fa-robot"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-900 p-1" title="Mark Important">
                                    <i class="fas fa-star"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900 p-1" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Advanced Message 2 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-12 w-12 flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="https://picsum.photos/seed/contact2/100/100.jpg" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Grace Mwangi</div>
                                    <div class="text-sm text-gray-500">Dar es Salaam, TZ</div>
                                    <div class="flex items-center mt-1">
                                        <span class="text-xs text-gray-500">
                                            <i class="fas fa-building text-purple-400"></i> Tech Solutions
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900 font-medium">Technical Support Issue</div>
                            <div class="text-sm text-gray-600 truncate max-w-xs">Having trouble accessing the client portal after recent update. Getting error messages...</div>
                            <div class="flex items-center mt-1">
                                <span class="text-xs text-gray-500">
                                    <i class="fas fa-bug text-red-400"></i> Bug Report
                                </span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Support
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                <i class="fas fa-exclamation-triangle mr-1"></i>High
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                <i class="fas fa-envelope mr-1"></i>Email
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 29, 2024</div>
                            <div class="text-xs text-gray-500">9:15 AM</div>
                            <div class="flex items-center mt-1">
                                <span class="text-xs text-green-600">
                                    <i class="fas fa-check-circle"></i> Replied
                                </span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Replied
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-1">
                                <button class="text-blue-600 hover:text-blue-900 p-1" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-purple-600 hover:text-purple-900 p-1" title="Follow Up">
                                    <i class="fas fa-bell"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-900 p-1" title="Forward">
                                    <i class="fas fa-share"></i>
                                </button>
                                <button class="text-gray-600 hover:text-gray-900 p-1" title="Archive">
                                    <i class="fas fa-archive"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900 p-1" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Advanced Message 3 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-12 w-12 flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="https://picsum.photos/seed/contact3/100/100.jpg" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">James Okello</div>
                                    <div class="text-sm text-gray-500">Kampala, UG</div>
                                    <div class="flex items-center mt-1">
                                        <span class="text-xs text-gray-500">
                                            <i class="fas fa-building text-orange-400"></i> East Africa Bank
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900 font-medium">Partnership Opportunity</div>
                            <div class="text-sm text-gray-600 truncate max-w-xs">Interested in exploring partnership opportunities with Jezdan Technology for banking solutions...</div>
                            <div class="flex items-center mt-1">
                                <span class="text-xs text-gray-500">
                                    <i class="fas fa-handshake text-blue-400"></i> Partnership
                                </span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Partnership
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                <i class="fas fa-fire mr-1"></i>Urgent
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                <i class="fab fa-linkedin mr-1"></i>Social
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 28, 2024</div>
                            <div class="text-xs text-gray-500">3:45 PM</div>
                            <div class="flex items-center mt-1">
                                <span class="text-xs text-orange-600">
                                    <i class="fas fa-clock"></i> 1 day ago
                                </span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Unread
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-1">
                                <button class="text-blue-600 hover:text-blue-900 p-1" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900 p-1" title="Reply">
                                    <i class="fas fa-reply"></i>
                                </button>
                                <button class="text-purple-600 hover:text-purple-900 p-1" title="Assign">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-900 p-1" title="Mark Important">
                                    <i class="fas fa-star"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900 p-1" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Advanced Pagination with Bulk Actions -->
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Previous
                </a>
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Next
                </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div class="flex items-center space-x-4">
                    <p class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of{' '}
                        <span class="font-medium">234</span> results
                    </p>
                    <div class="flex items-center space-x-2">
                        <button class="text-sm text-blue-600 hover:text-blue-900">
                            <i class="fas fa-reply mr-1"></i>Reply to All
                        </button>
                        <button class="text-sm text-green-600 hover:text-green-900">
                            <i class="fas fa-archive mr-1"></i>Archive Selected
                        </button>
                        <button class="text-sm text-purple-600 hover:text-purple-900">
                            <i class="fas fa-star mr-1"></i>Mark Important
                        </button>
                        <button class="text-sm text-red-600 hover:text-red-900">
                            <i class="fas fa-download mr-1"></i>Export Selected
                        </button>
                    </div>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" aria-current="page" class="relative inline-flex items-center px-4 py-2 border border-blue-500 bg-blue-50 text-sm font-medium text-blue-600">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">...</span>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">24</a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
