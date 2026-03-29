@extends('admin.layouts.app')

@section('title', 'Messages')
@section('page-title', 'Messages')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Messages</h1>
            <p class="text-gray-600 mt-1">Manage client communications and support requests</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-reply mr-2"></i>
                Reply All
            </button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-archive mr-2"></i>
                Archive Selected
            </button>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 flex items-center">
                <i class="fas fa-star mr-2"></i>
                Mark Important
            </button>
            <button class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700 flex items-center">
                <i class="fas fa-download mr-2"></i>
                Export Selected
            </button>
        </div>
    </div>

    <!-- Message Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Messages</p>
                    <p class="text-2xl font-bold text-gray-900">1,247</p>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 23% this week
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
                    <p class="text-2xl font-bold text-gray-900">34</p>
                    <p class="text-xs text-red-600 mt-1">
                        <i class="fas fa-exclamation-circle"></i> Requires attention
                    </p>
                </div>
                <div class="p-3 bg-red-100 rounded-lg">
                    <i class="fas fa-envelope-open text-red-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Response Rate</p>
                    <p class="text-2xl font-bold text-gray-900">94.2%</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 2% improvement
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
                    <p class="text-sm text-gray-600">Avg. Response Time</p>
                    <p class="text-2xl font-bold text-gray-900">2.4h</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-down"></i> 30min faster
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-clock text-yellow-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Message Interface -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="flex h-96">
            <!-- Message List -->
            <div class="w-1/3 border-r border-gray-200">
                <div class="p-4 border-b border-gray-200">
                    <div class="relative">
                        <input type="text" placeholder="Search messages..." 
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>
                
                <div class="overflow-y-auto h-full">
                    <!-- Message Item 1 -->
                    <div class="p-4 border-b border-gray-200 hover:bg-gray-50 cursor-pointer bg-blue-50">
                        <div class="flex items-start space-x-3">
                            <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-sm font-medium">SJ</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900 truncate">Sarah Johnson</p>
                                    <span class="text-xs text-gray-500">2h ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Project update needed for e-commerce...</p>
                                <div class="flex items-center mt-1">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800">Urgent</span>
                                    <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">Project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Message Item 2 -->
                    <div class="p-4 border-b border-gray-200 hover:bg-gray-50 cursor-pointer">
                        <div class="flex items-start space-x-3">
                            <div class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-sm font-medium">MC</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900 truncate">Michael Chen</p>
                                    <span class="text-xs text-gray-500">5h ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Mobile app testing feedback...</p>
                                <div class="flex items-center mt-1">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">Feedback</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Message Item 3 -->
                    <div class="p-4 border-b border-gray-200 hover:bg-gray-50 cursor-pointer">
                        <div class="flex items-start space-x-3">
                            <div class="h-10 w-10 rounded-full bg-purple-500 flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-sm font-medium">ED</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900 truncate">Emma Davis</p>
                                    <span class="text-xs text-gray-500">1d ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Design mockups ready for review...</p>
                                <div class="flex items-center mt-1">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-purple-100 text-purple-800">Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- More messages... -->
                    <div class="p-4 border-b border-gray-200 hover:bg-gray-50 cursor-pointer">
                        <div class="flex items-start space-x-3">
                            <div class="h-10 w-10 rounded-full bg-orange-500 flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-sm font-medium">RK</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900 truncate">Robert Kim</p>
                                    <span class="text-xs text-gray-500">2d ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Invoice question regarding payment...</p>
                                <div class="flex items-center mt-1">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-yellow-100 text-yellow-800">Billing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Message Content -->
            <div class="flex-1 flex flex-col">
                <!-- Message Header -->
                <div class="p-4 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center">
                                <span class="text-white text-sm font-medium">SJ</span>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Sarah Johnson</h3>
                                <p class="text-xs text-gray-500">sarah.johnson@clientcompany.com</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-star"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-archive"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Message Body -->
                <div class="flex-1 p-6 overflow-y-auto">
                    <div class="mb-4">
                        <h4 class="text-lg font-medium text-gray-900 mb-2">Project Update Needed</h4>
                        <div class="flex items-center space-x-4 text-sm text-gray-500 mb-4">
                            <span><i class="fas fa-calendar mr-1"></i>Dec 14, 2024 at 2:30 PM</span>
                            <span><i class="fas fa-paperclip mr-1"></i>2 attachments</span>
                        </div>
                    </div>
                    
                    <div class="prose max-w-none">
                        <p class="text-gray-700 mb-4">
                            Hi Team,
                        </p>
                        <p class="text-gray-700 mb-4">
                            I hope this message finds you well. I wanted to reach out regarding the current status of our e-commerce platform project. We've been reviewing the recent updates and have some feedback that I'd like to discuss.
                        </p>
                        <p class="text-gray-700 mb-4">
                            Specifically, we're concerned about the following areas:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 mb-4 space-y-2">
                            <li>The checkout process seems to be taking longer than expected</li>
                            <li>We've noticed some issues with the mobile responsiveness on certain pages</li>
                            <li>The payment integration needs some additional testing before we can go live</li>
                        </ul>
                        <p class="text-gray-700 mb-4">
                            Could we schedule a call this week to discuss these points and plan the next steps? We're aiming to launch by the end of the month, so timely resolution would be greatly appreciated.
                        </p>
                        <p class="text-gray-700 mb-4">
                            I've attached some screenshots and error logs that might help with troubleshooting.
                        </p>
                        <p class="text-gray-700">
                            Best regards,<br>
                            Sarah Johnson<br>
                            Project Manager<br>
                            Client Company Inc.
                        </p>
                    </div>
                    
                    <!-- Attachments -->
                    <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                        <h5 class="text-sm font-medium text-gray-900 mb-3">Attachments</h5>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between p-2 bg-white rounded border border-gray-200">
                                <div class="flex items-center">
                                    <i class="fas fa-file-image text-blue-500 mr-3"></i>
                                    <div>
                                        <p class="text-sm text-gray-900">checkout_screenshot.png</p>
                                        <p class="text-xs text-gray-500">2.4 MB</p>
                                    </div>
                                </div>
                                <button class="text-blue-600 hover:text-blue-700">
                                    <i class="fas fa-download"></i>
                                </button>
                            </div>
                            <div class="flex items-center justify-between p-2 bg-white rounded border border-gray-200">
                                <div class="flex items-center">
                                    <i class="fas fa-file-alt text-green-500 mr-3"></i>
                                    <div>
                                        <p class="text-sm text-gray-900">error_logs.txt</p>
                                        <p class="text-xs text-gray-500">156 KB</p>
                                    </div>
                                </div>
                                <button class="text-blue-600 hover:text-blue-700">
                                    <i class="fas fa-download"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Reply Area -->
                <div class="p-4 border-t border-gray-200">
                    <div class="flex items-start space-x-3">
                        <div class="h-8 w-8 rounded-full bg-gray-500 flex items-center justify-center flex-shrink-0">
                            <span class="text-white text-xs font-medium">AD</span>
                        </div>
                        <div class="flex-1">
                            <textarea placeholder="Type your reply..." 
                                      class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none" 
                                      rows="3"></textarea>
                            <div class="mt-2 flex items-center justify-between">
                                <div class="flex space-x-2">
                                    <button class="text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-paperclip"></i>
                                    </button>
                                    <button class="text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-image"></i>
                                    </button>
                                    <button class="text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-smile"></i>
                                    </button>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 text-sm text-gray-600 hover:text-gray-700">Save Draft</button>
                                    <button class="px-4 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                                        <i class="fas fa-paper-plane mr-1"></i> Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
        <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 rounded-lg">
                    <i class="fas fa-exclamation-circle text-red-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Urgent Messages</p>
                    <p class="text-xs text-gray-500">8 require immediate attention</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-clock text-blue-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Pending Replies</p>
                    <p class="text-xs text-gray-500">15 awaiting response</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Resolved Today</p>
                    <p class="text-xs text-gray-500">23 issues closed</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-users text-purple-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Active Clients</p>
                    <p class="text-xs text-gray-500">47 online now</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
