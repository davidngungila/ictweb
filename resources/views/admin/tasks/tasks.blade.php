@extends('admin.layouts.app')

@section('page-title', 'Tasks')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Tasks</h1>
        <p class="text-gray-600 mt-1">Manage and track all tasks and assignments</p>
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

    <!-- Task Statistics -->
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

    <!-- Filters and Search -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
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
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Priority</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Priorities</option>
                    <option>High</option>
                    <option>Medium</option>
                    <option>Low</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Assignee</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Assignees</option>
                    <option>John Doe</option>
                    <option>Sarah Smith</option>
                    <option>Alex Johnson</option>
                    <option>Unassigned</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Task Board View -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-semibold text-gray-900">Task Board</h2>
            <div class="flex items-center space-x-2">
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-th"></i>
                </button>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-list"></i>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
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
                                High
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
                                High
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
