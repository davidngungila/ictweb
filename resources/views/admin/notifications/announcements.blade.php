@extends('admin.layouts.app')

@section('page-title', 'Announcements')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Announcements</h1>
        <p class="text-gray-600 mt-1">Manage system announcements and company communications</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            New Announcement
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-paper-plane mr-2"></i>
            Send to All
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-calendar-alt mr-2"></i>
            Schedule
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Announcement Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-bullhorn text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Announcements</p>
                    <p class="text-2xl font-bold text-gray-900">47</p>
                    <p class="text-xs text-green-600">+3 this month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-eye text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Views</p>
                    <p class="text-2xl font-bold text-gray-900">3,847</p>
                    <p class="text-xs text-green-600">+12% from last week</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-users text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Active Recipients</p>
                    <p class="text-2xl font-bold text-gray-900">1,247</p>
                    <p class="text-xs text-gray-600">Currently active</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-chart-line text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Engagement Rate</p>
                    <p class="text-2xl font-bold text-gray-900">78%</p>
                    <p class="text-xs text-green-600">+5% improvement</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                <div class="relative">
                    <input type="text" placeholder="Search announcements..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Type</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Types</option>
                    <option>System Update</option>
                    <option>Company News</option>
                    <option>Product Launch</option>
                    <option>Maintenance</option>
                    <option>Policy Change</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Scheduled</option>
                    <option>Draft</option>
                    <option>Archived</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date Range</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>Last 7 Days</option>
                    <option>Last 30 Days</option>
                    <option>Last 3 Months</option>
                    <option>Last Year</option>
                    <option>Custom Range</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Announcements List -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Recent Announcements</h2>
                <div class="flex items-center space-x-2">
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-filter"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="divide-y divide-gray-200">
            <!-- Announcement 1 - Active -->
            <div class="p-6 hover:bg-gray-50">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-bullhorn text-blue-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">System Maintenance Scheduled</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    System Update
                                </span>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                                <span class="text-xs text-gray-500">2 hours ago</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            We will be performing scheduled system maintenance on Saturday, March 30th from 2:00 AM to 6:00 AM EST. During this time, some services may be temporarily unavailable.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-user mr-1"></i>Admin Team</span>
                                <span><i class="fas fa-eye mr-1"></i>1,247 views</span>
                                <span><i class="fas fa-calendar mr-1"></i>Mar 30, 2024</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                                    Edit
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Archive
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Announcement 2 - Active -->
            <div class="p-6 hover:bg-gray-50">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-rocket text-green-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">New Feature Launch: Advanced Analytics</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Product Launch
                                </span>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                                <span class="text-xs text-gray-500">1 day ago</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            We're excited to announce the launch of our new Advanced Analytics dashboard! Get real-time insights, detailed reports, and powerful data visualization tools.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-user mr-1"></i>Product Team</span>
                                <span><i class="fas fa-eye mr-1"></i>892 views</span>
                                <span><i class="fas fa-calendar mr-1"></i>Mar 29, 2024</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">
                                    View Demo
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Share
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Announcement 3 - Scheduled -->
            <div class="p-6 hover:bg-gray-50 bg-purple-50">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-purple-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Q2 Company Town Hall Meeting</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                    Company News
                                </span>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                    Scheduled
                                </span>
                                <span class="text-xs text-gray-500">Scheduled for Apr 1</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Join us for our Q2 Town Hall meeting on April 1st at 3:00 PM EST. We'll discuss company achievements, upcoming projects, and answer your questions.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-user mr-1"></i>HR Team</span>
                                <span><i class="fas fa-users mr-1"></i>All Staff</span>
                                <span><i class="fas fa-calendar mr-1"></i>Apr 1, 2024</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-purple-600 text-white px-3 py-1 rounded text-sm hover:bg-purple-700">
                                    Send Now
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Announcement 4 - Draft -->
            <div class="p-6 hover:bg-gray-50 bg-gray-50">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-edit text-gray-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">New Partnership Announcement</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                    Company News
                                </span>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Draft
                                </span>
                                <span class="text-xs text-gray-500">Last edited 3 days ago</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            We're thrilled to announce our new strategic partnership with TechCorp Inc. This collaboration will bring enhanced features and better service to our customers.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-user mr-1"></i>Marketing Team</span>
                                <span><i class="fas fa-edit mr-1"></i>In Progress</span>
                                <span><i class="fas fa-calendar mr-1"></i>TBD</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                                    Continue Editing
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Announcement 5 - Archived -->
            <div class="p-6 hover:bg-gray-50 opacity-75">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-archive text-gray-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Holiday Schedule 2024</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Policy Change
                                </span>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Archived
                                </span>
                                <span class="text-xs text-gray-500">Dec 15, 2023</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Please note the updated holiday schedule for 2024. The office will be closed on the following dates: [List of holidays].
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-user mr-1"></i>HR Team</span>
                                <span><i class="fas fa-eye mr-1"></i>2,156 views</span>
                                <span><i class="fas fa-calendar mr-1"></i>Dec 15, 2023</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Restore
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Announcement 6 - Active -->
            <div class="p-6 hover:bg-gray-50">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-shield-alt text-orange-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Security Policy Update</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                    Policy Change
                                </span>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                                <span class="text-xs text-gray-500">5 days ago</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            We've updated our security policies to enhance data protection. Please review the new guidelines and ensure compliance by April 15th.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-user mr-1"></i>Security Team</span>
                                <span><i class="fas fa-eye mr-1"></i>567 views</span>
                                <span><i class="fas fa-calendar mr-1"></i>Mar 25, 2024</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-orange-600 text-white px-3 py-1 rounded text-sm hover:bg-orange-700">
                                    View Policy
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Archive
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-700">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">6</span> of <span class="font-medium">47</span> announcements
                </div>
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">Previous</button>
                    <button class="px-3 py-1 text-sm bg-blue-600 text-white rounded-md">1</button>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">2</button>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">3</button>
                    <span class="px-3 py-1 text-sm text-gray-500">...</span>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">8</button>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
