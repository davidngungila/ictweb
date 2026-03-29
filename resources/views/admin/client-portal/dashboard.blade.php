@extends('admin.layouts.app')

@section('title', 'Client Portal Dashboard')
@section('page-title', 'Client Portal Dashboard')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Client Portal Dashboard</h1>
            <p class="text-gray-600 mt-1">Overview of client portal activity and statistics</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-plus mr-2"></i>
                Add Client
            </button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-download mr-2"></i>
                Export Data
            </button>
        </div>
    </div>

    <!-- Advanced Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Active Clients</p>
                    <p class="text-2xl font-bold text-gray-900">234</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 12% increase
                    </p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-users text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Projects</p>
                    <p class="text-2xl font-bold text-gray-900">567</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 8% increase
                    </p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-folder-open text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Completion Rate</p>
                    <p class="text-2xl font-bold text-gray-900">87.3%</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 3% improvement
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-chart-line text-yellow-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Active Sessions</p>
                    <p class="text-2xl font-bold text-gray-900">89</p>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-circle"></i> Live now
                    </p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-signal text-purple-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity and Quick Stats -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- Recent Activity -->
        <div class="lg:col-span-2 bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-clock mr-2 text-blue-600"></i>
                Recent Client Activity
            </h3>
            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-green-100 rounded-lg">
                        <i class="fas fa-sign-in-alt text-green-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">Sarah Johnson logged in</p>
                        <p class="text-xs text-gray-500">Client Portal • 2 minutes ago</p>
                    </div>
                    <div class="text-xs text-gray-500">Web</div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-blue-100 rounded-lg">
                        <i class="fas fa-folder-open text-blue-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">Michael Chen viewed project details</p>
                        <p class="text-xs text-gray-500">E-commerce Platform • 15 minutes ago</p>
                    </div>
                    <div class="text-xs text-gray-500">Mobile</div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-purple-100 rounded-lg">
                        <i class="fas fa-comment text-purple-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">Emma Davis sent message</p>
                        <p class="text-xs text-gray-500">Mobile App Development • 1 hour ago</p>
                    </div>
                    <div class="text-xs text-gray-500">Web</div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-yellow-100 rounded-lg">
                        <i class="fas fa-file-invoice text-yellow-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">Robert Brown viewed invoice #1234</p>
                        <p class="text-xs text-gray-500">Website Redesign • 2 hours ago</p>
                    </div>
                    <div class="text-xs text-gray-500">Web</div>
                </div>
            </div>
        </div>

        <!-- Portal Statistics -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-chart-bar mr-2 text-purple-600"></i>
                Portal Statistics
            </h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">Daily Logins</span>
                    <span class="text-sm font-medium text-gray-900">156</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">Avg. Session Time</span>
                    <span class="text-sm font-medium text-gray-900">12m 34s</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">Pages/Session</span>
                    <span class="text-sm font-medium text-gray-900">8.4</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">Bounce Rate</span>
                    <span class="text-sm font-medium text-gray-900">24.3%</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">Satisfaction</span>
                    <span class="text-sm font-medium text-green-600">4.7/5</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Client Projects Overview -->
    <div class="bg-white rounded-lg shadow p-6 mb-8">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                <i class="fas fa-folder-open mr-2 text-green-600"></i>
                Recent Client Projects
            </h3>
            <a href="#" class="text-blue-600 text-sm hover:text-blue-700">View All Projects →</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Activity</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">SJ</span>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">E-commerce Platform</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                In Progress
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">75%</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            2 hours ago
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">MC</span>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">Michael Chen</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mobile App Development</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Review
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">95%</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            5 hours ago
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-user-plus text-blue-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">New Clients</p>
                    <p class="text-xs text-gray-500">12 this week</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-folder-plus text-green-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">New Projects</p>
                    <p class="text-xs text-gray-500">8 this week</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-comment text-yellow-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Messages</p>
                    <p class="text-xs text-gray-500">34 unread</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-file-invoice text-purple-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-900">Invoices</p>
                    <p class="text-xs text-gray-500">23 pending</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
