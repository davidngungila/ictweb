@extends('admin.layouts.app')

@section('page-title', 'Advanced Tasks Management')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Advanced Tasks Management</h1>
        <p class="text-gray-600 mt-1">Comprehensive task tracking, assignment, and project management system</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            New Task
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-user-plus mr-2"></i>
            Assign Tasks
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-download mr-2"></i>
            Export Tasks
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Task Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-tasks text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Tasks</p>
                    <p class="text-2xl font-bold text-gray-900">247</p>
                    <p class="text-xs text-green-600">+12 this week</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Completed</p>
                    <p class="text-2xl font-bold text-gray-900">89</p>
                    <p class="text-xs text-gray-600">36% completion rate</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-spinner text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">In Progress</p>
                    <p class="text-2xl font-bold text-gray-900">98</p>
                    <p class="text-xs text-gray-600">40% active tasks</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 rounded-lg">
                    <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Overdue</p>
                    <p class="text-2xl font-bold text-gray-900">23</p>
                    <p class="text-xs text-red-600">Requires attention</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                <div class="relative">
                    <input type="text" placeholder="Search tasks..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>To Do</option>
                    <option>In Progress</option>
                    <option>Review</option>
                    <option>Completed</option>
                    <option>Cancelled</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Priority</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Priorities</option>
                    <option>Critical</option>
                    <option>High</option>
                    <option>Medium</option>
                    <option>Low</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Assignee</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Team Members</option>
                    <option>John Doe</option>
                    <option>Sarah Smith</option>
                    <option>Alex Johnson</option>
                    <option>Mike Wilson</option>
                    <option>Unassigned</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Due Date</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Dates</option>
                    <option>Overdue</option>
                    <option>Today</option>
                    <option>This Week</option>
                    <option>This Month</option>
                    <option>No Due Date</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Task Views Toggle -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <h2 class="text-lg font-semibold text-gray-900">Task Management</h2>
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm">
                        <i class="fas fa-th-large mr-2"></i>Board View
                    </button>
                    <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md text-sm hover:bg-gray-300">
                        <i class="fas fa-list mr-2"></i>List View
                    </button>
                    <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md text-sm hover:bg-gray-300">
                        <i class="fas fa-calendar mr-2"></i>Calendar View
                    </button>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-sync-alt"></i>
                </button>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-filter"></i>
                </button>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-download"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Kanban Board View -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-8">
        <!-- To Do Column -->
        <div class="bg-gray-50 rounded-lg p-4">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-medium text-gray-900">To Do</h3>
                <span class="bg-gray-200 text-gray-700 text-xs font-medium px-2.5 py-0.5 rounded">37</span>
            </div>
            <div class="space-y-3">
                <!-- Task 1 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-200 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            Critical
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-ellipsis-h text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">Fix database connection issues</h4>
                    <p class="text-xs text-gray-500 mb-3">Resolve critical database connectivity problems affecting production</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=3B82F6&color=fff" alt="John Doe" class="w-6 h-6 rounded-full mr-2">
                            <span class="text-xs text-gray-500">John Doe</span>
                        </div>
                        <span class="text-xs text-gray-500">Due: Mar 30</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>3
                        <i class="fas fa-comment ml-2 mr-1"></i>5
                        <i class="fas fa-clock ml-2 mr-1"></i>2h
                    </div>
                </div>

                <!-- Task 2 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-200 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Medium
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-ellipsis-h text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">Update user documentation</h4>
                    <p class="text-xs text-gray-500 mb-3">Review and update user manual for new features</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=10B981&color=fff" alt="Sarah Smith" class="w-6 h-6 rounded-full mr-2">
                            <span class="text-xs text-gray-500">Sarah Smith</span>
                        </div>
                        <span class="text-xs text-gray-500">Due: Apr 2</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>1
                        <i class="fas fa-comment ml-2 mr-1"></i>2
                        <i class="fas fa-clock ml-2 mr-1"></i>4h
                    </div>
                </div>

                <!-- Task 3 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-200 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Low
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-ellipsis-h text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">Organize team meeting notes</h4>
                    <p class="text-xs text-gray-500 mb-3">Compile and organize notes from last week's team meetings</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-6 h-6 bg-gray-300 rounded-full mr-2"></div>
                            <span class="text-xs text-gray-500">Unassigned</span>
                        </div>
                        <span class="text-xs text-gray-500">Due: Apr 5</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>0
                        <i class="fas fa-comment ml-2 mr-1"></i>1
                        <i class="fas fa-clock ml-2 mr-1"></i>1h
                    </div>
                </div>
            </div>
        </div>

        <!-- In Progress Column -->
        <div class="bg-blue-50 rounded-lg p-4">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-medium text-gray-900">In Progress</h3>
                <span class="bg-blue-200 text-blue-700 text-xs font-medium px-2.5 py-0.5 rounded">98</span>
            </div>
            <div class="space-y-3">
                <!-- Task 4 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-200 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            Critical
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-ellipsis-h text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">Implement user authentication</h4>
                    <p class="text-xs text-gray-500 mb-3">Add OAuth2 integration for secure user login</p>
                    <div class="w-full bg-gray-200 rounded-full h-1.5 mb-3">
                        <div class="bg-blue-600 h-1.5 rounded-full" style="width: 65%"></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=Alex+Johnson&background=F59E0B&color=fff" alt="Alex Johnson" class="w-6 h-6 rounded-full mr-2">
                            <span class="text-xs text-gray-500">Alex Johnson</span>
                        </div>
                        <span class="text-xs text-gray-500">65% complete</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>5
                        <i class="fas fa-comment ml-2 mr-1"></i>8
                        <i class="fas fa-clock ml-2 mr-1"></i>6h
                    </div>
                </div>

                <!-- Task 5 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-200 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Medium
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-ellipsis-h text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">Design new landing page</h4>
                    <p class="text-xs text-gray-500 mb-3">Create mockups for the new marketing landing page</p>
                    <div class="w-full bg-gray-200 rounded-full h-1.5 mb-3">
                        <div class="bg-blue-600 h-1.5 rounded-full" style="width: 40%"></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=8B5CF6&color=fff" alt="Emma Davis" class="w-6 h-6 rounded-full mr-2">
                            <span class="text-xs text-gray-500">Emma Davis</span>
                        </div>
                        <span class="text-xs text-gray-500">40% complete</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>2
                        <i class="fas fa-comment ml-2 mr-1"></i>3
                        <i class="fas fa-clock ml-2 mr-1"></i>3h
                    </div>
                </div>

                <!-- Task 6 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-200 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Low
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-ellipsis-h text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">Update dependencies</h4>
                    <p class="text-xs text-gray-500 mb-3">Update all npm packages to latest stable versions</p>
                    <div class="w-full bg-gray-200 rounded-full h-1.5 mb-3">
                        <div class="bg-blue-600 h-1.5 rounded-full" style="width: 80%"></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=Mike+Wilson&background=EF4444&color=fff" alt="Mike Wilson" class="w-6 h-6 rounded-full mr-2">
                            <span class="text-xs text-gray-500">Mike Wilson</span>
                        </div>
                        <span class="text-xs text-gray-500">80% complete</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>0
                        <i class="fas fa-comment ml-2 mr-1"></i>1
                        <i class="fas fa-clock ml-2 mr-1"></i>2h
                    </div>
                </div>
            </div>
        </div>

        <!-- Review Column -->
        <div class="bg-yellow-50 rounded-lg p-4">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-medium text-gray-900">Review</h3>
                <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-2.5 py-0.5 rounded">23</span>
            </div>
            <div class="space-y-3">
                <!-- Task 7 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-yellow-200 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            High
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-ellipsis-h text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">API performance optimization</h4>
                    <p class="text-xs text-gray-500 mb-3">Optimize API endpoints for better response times</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=David+Kim&background=059669&color=fff" alt="David Kim" class="w-6 h-6 rounded-full mr-2">
                            <span class="text-xs text-gray-500">David Kim</span>
                        </div>
                        <span class="text-xs text-gray-500">Ready for review</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>3
                        <i class="fas fa-comment ml-2 mr-1"></i>6
                        <i class="fas fa-clock ml-2 mr-1"></i>4h
                    </div>
                </div>

                <!-- Task 8 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-yellow-200 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Medium
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-ellipsis-h text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">Mobile app UI improvements</h4>
                    <p class="text-xs text-gray-500 mb-3">Enhance user interface based on feedback</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=Lisa+Anderson&background=EC4899&color=fff" alt="Lisa Anderson" class="w-6 h-6 rounded-full mr-2">
                            <span class="text-xs text-gray-500">Lisa Anderson</span>
                        </div>
                        <span class="text-xs text-gray-500">Pending approval</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>4
                        <i class="fas fa-comment ml-2 mr-1"></i>5
                        <i class="fas fa-clock ml-2 mr-1"></i>3h
                    </div>
                </div>
            </div>
        </div>

        <!-- Completed Column -->
        <div class="bg-green-50 rounded-lg p-4">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-medium text-gray-900">Completed</h3>
                <span class="bg-green-200 text-green-700 text-xs font-medium px-2.5 py-0.5 rounded">89</span>
            </div>
            <div class="space-y-3">
                <!-- Task 9 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-green-200 hover:shadow-md transition-shadow cursor-pointer opacity-75">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Done
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-check text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">Setup CI/CD pipeline</h4>
                    <p class="text-xs text-gray-500 mb-3">Configure automated deployment pipeline</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=Tom+Brown&background=F59E0B&color=fff" alt="Tom Brown" class="w-6 h-6 rounded-full mr-2">
                            <span class="text-xs text-gray-500">Tom Brown</span>
                        </div>
                        <span class="text-xs text-green-600">Completed</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>2
                        <i class="fas fa-comment ml-2 mr-1"></i>4
                        <i class="fas fa-clock ml-2 mr-1"></i>5h
                    </div>
                </div>

                <!-- Task 10 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-green-200 hover:shadow-md transition-shadow cursor-pointer opacity-75">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Done
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-check text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">Fix responsive design issues</h4>
                    <p class="text-xs text-gray-500 mb-3">Resolve mobile layout problems</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=Chris+Lee&background=06B6D4&color=fff" alt="Chris Lee" class="w-6 h-6 rounded-full mr-2">
                            <span class="text-xs text-gray-500">Chris Lee</span>
                        </div>
                        <span class="text-xs text-green-600">Completed</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>1
                        <i class="fas fa-comment ml-2 mr-1"></i>2
                        <i class="fas fa-clock ml-2 mr-1"></i>2h
                    </div>
                </div>
            </div>
        </div>

        <!-- Cancelled Column -->
        <div class="bg-red-50 rounded-lg p-4">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-medium text-gray-900">Cancelled</h3>
                <span class="bg-red-200 text-red-700 text-xs font-medium px-2.5 py-0.5 rounded">12</span>
            </div>
            <div class="space-y-3">
                <!-- Task 11 -->
                <div class="bg-white rounded-lg p-4 shadow-sm border border-red-200 hover:shadow-md transition-shadow cursor-pointer opacity-75">
                    <div class="flex items-start justify-between mb-2">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                            Cancelled
                        </span>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-times text-xs"></i>
                        </button>
                    </div>
                    <h4 class="text-sm font-medium text-gray-900 mb-2">Legacy system migration</h4>
                    <p class="text-xs text-gray-500 mb-3">Migrate data from old CRM system</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=Ryan+Moore&background=84CC16&color=fff" alt="Ryan Moore" class="w-6 h-6 rounded-full mr-2">
                            <span class="text-xs text-gray-500">Ryan Moore</span>
                        </div>
                        <span class="text-xs text-red-600">Cancelled</span>
                    </div>
                    <div class="flex items-center mt-2 text-xs text-gray-400">
                        <i class="fas fa-paperclip mr-1"></i>0
                        <i class="fas fa-comment ml-2 mr-1"></i>1
                        <i class="fas fa-clock ml-2 mr-1"></i>0h
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Task Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Team Performance -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Team Performance</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=3B82F6&color=fff" alt="John Doe" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">John Doe</p>
                            <p class="text-xs text-gray-500">12 tasks completed</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">92%</p>
                        <p class="text-xs text-green-600">On-time delivery</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=10B981&color=fff" alt="Sarah Smith" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Sarah Smith</p>
                            <p class="text-xs text-gray-500">8 tasks completed</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">88%</p>
                        <p class="text-xs text-green-600">On-time delivery</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=Alex+Johnson&background=F59E0B&color=fff" alt="Alex Johnson" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Alex Johnson</p>
                            <p class="text-xs text-gray-500">15 tasks completed</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">85%</p>
                        <p class="text-xs text-orange-600">3 tasks delayed</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=Mike+Wilson&background=EF4444&color=fff" alt="Mike Wilson" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Mike Wilson</p>
                            <p class="text-xs text-gray-500">6 tasks completed</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">95%</p>
                        <p class="text-xs text-green-600">Excellent performance</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=8B5CF6&color=fff" alt="Emma Davis" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Emma Davis</p>
                            <p class="text-xs text-gray-500">10 tasks completed</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">90%</p>
                        <p class="text-xs text-green-600">Good performance</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Task Distribution -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Task Distribution</h2>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">To Do</p>
                        <p class="text-sm font-medium text-gray-900">37 (15%)</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gray-600 h-2 rounded-full" style="width: 15%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">In Progress</p>
                        <p class="text-sm font-medium text-gray-900">98 (40%)</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 40%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Review</p>
                        <p class="text-sm font-medium text-gray-900">23 (9%)</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-yellow-600 h-2 rounded-full" style="width: 9%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Completed</p>
                        <p class="text-sm font-medium text-gray-900">89 (36%)</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 36%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Cancelled</p>
                        <p class="text-sm font-medium text-gray-900">12 (5%)</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-red-600 h-2 rounded-full" style="width: 5%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Priority Breakdown -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Priority Breakdown</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-exclamation-triangle text-red-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Critical</p>
                            <p class="text-xs text-gray-500">Immediate action required</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">18</p>
                        <p class="text-xs text-red-600">7% of total</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-arrow-up text-orange-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">High</p>
                            <p class="text-xs text-gray-500">High priority tasks</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">67</p>
                        <p class="text-xs text-orange-600">27% of total</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-minus text-yellow-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Medium</p>
                            <p class="text-xs text-gray-500">Standard priority</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">89</p>
                        <p class="text-xs text-yellow-600">36% of total</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-arrow-down text-green-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Low</p>
                            <p class="text-xs text-gray-500">Low priority tasks</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">73</p>
                        <p class="text-xs text-green-600">30% of total</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
