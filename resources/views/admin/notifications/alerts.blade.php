@extends('admin.layouts.app')

@section('page-title', 'System Alerts')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">System Alerts</h1>
        <p class="text-gray-600 mt-1">Monitor and manage system alerts and notifications</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            Create Alert
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-check-double mr-2"></i>
            Mark All Read
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-bell-slash mr-2"></i>
            Silence All
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Alert Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 rounded-lg">
                    <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Critical Alerts</p>
                    <p class="text-2xl font-bold text-gray-900">3</p>
                    <p class="text-xs text-red-600">Requires immediate action</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-exclamation-circle text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Warning Alerts</p>
                    <p class="text-2xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-orange-600">Monitor closely</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-info-circle text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Info Alerts</p>
                    <p class="text-2xl font-bold text-gray-900">28</p>
                    <p class="text-xs text-gray-600">General notifications</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Resolved Today</p>
                    <p class="text-2xl font-bold text-gray-900">17</p>
                    <p class="text-xs text-green-600">Good progress</p>
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
                    <input type="text" placeholder="Search alerts..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Severity</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Severities</option>
                    <option>Critical</option>
                    <option>Warning</option>
                    <option>Info</option>
                    <option>Success</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>Unread</option>
                    <option>Read</option>
                    <option>Resolved</option>
                    <option>Dismissed</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Time Range</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>Last 24 Hours</option>
                    <option>Last 7 Days</option>
                    <option>Last 30 Days</option>
                    <option>Custom Range</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Alerts List -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Active Alerts</h2>
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
            <!-- Critical Alert 1 -->
            <div class="p-6 hover:bg-gray-50 bg-red-50 border-l-4 border-red-500">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-red-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Critical: Database Connection Failed</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Critical
                                </span>
                                <span class="text-xs text-gray-500">2 minutes ago</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Primary database server is not responding. Multiple connection attempts have failed. This may impact all system functionality.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-server mr-1"></i>DB-Server-01</span>
                                <span><i class="fas fa-clock mr-1"></i>Duration: 2m 15s</span>
                                <span><i class="fas fa-user mr-1"></i>System</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">
                                    Investigate
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Dismiss
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Critical Alert 2 -->
            <div class="p-6 hover:bg-gray-50 bg-red-50 border-l-4 border-red-500">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-hdd text-red-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Critical: Disk Space Almost Full</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Critical
                                </span>
                                <span class="text-xs text-gray-500">15 minutes ago</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Server storage is at 95% capacity. Immediate cleanup required to prevent system failure. Estimated time until full: 2 hours.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-server mr-1"></i>Web-Server-02</span>
                                <span><i class="fas fa-hdd mr-1"></i>95% Used</span>
                                <span><i class="fas fa-user mr-1"></i>System</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">
                                    Cleanup Now
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Snooze
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Warning Alert 1 -->
            <div class="p-6 hover:bg-gray-50 bg-orange-50 border-l-4 border-orange-500">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-exclamation-circle text-orange-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Warning: High Memory Usage</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                    Warning
                                </span>
                                <span class="text-xs text-gray-500">1 hour ago</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Memory usage has exceeded 80% threshold for the past hour. Consider restarting services or adding more resources.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-server mr-1"></i>App-Server-01</span>
                                <span><i class="fas fa-memory mr-1"></i>82% Used</span>
                                <span><i class="fas fa-user mr-1"></i>Monitor</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-orange-600 text-white px-3 py-1 rounded text-sm hover:bg-orange-700">
                                    View Details
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Acknowledge
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info Alert 1 -->
            <div class="p-6 hover:bg-gray-50 bg-blue-50 border-l-4 border-blue-500">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-info-circle text-blue-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Info: System Update Available</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Info
                                </span>
                                <span class="text-xs text-gray-500">3 hours ago</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            A new system update is available. Version 2.4.1 includes security patches and performance improvements.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-code-branch mr-1"></i>v2.4.1</span>
                                <span><i class="fas fa-shield-alt mr-1"></i>Security Update</span>
                                <span><i class="fas fa-user mr-1"></i>System</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                                    Update Now
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Schedule Later
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Alert -->
            <div class="p-6 hover:bg-gray-50 bg-green-50 border-l-4 border-green-500">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-check-circle text-green-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Success: Backup Completed</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Success
                                </span>
                                <span class="text-xs text-gray-500">6 hours ago</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Daily system backup completed successfully. All 1,247 files backed up to cloud storage.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-cloud mr-1"></i>Cloud Storage</span>
                                <span><i class="fas fa-file mr-1"></i>1,247 Files</span>
                                <span><i class="fas fa-user mr-1"></i>System</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">
                                    View Report
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Dismiss
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Warning Alert 2 -->
            <div class="p-6 hover:bg-gray-50 bg-orange-50 border-l-4 border-orange-500">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-users text-orange-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Warning: Unusual Login Activity</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                    Warning
                                </span>
                                <span class="text-xs text-gray-500">8 hours ago</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Multiple failed login attempts detected from IP address 185.220.101.182. This may be a brute force attack.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-globe mr-1"></i>185.220.101.182</span>
                                <span><i class="fas fa-times mr-1"></i>12 Failed Attempts</span>
                                <span><i class="fas fa-user mr-1"></i>Security</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-orange-600 text-white px-3 py-1 rounded text-sm hover:bg-orange-700">
                                    Block IP
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Monitor
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">6</span> of <span class="font-medium">43</span> alerts
                </div>
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">Previous</button>
                    <button class="px-3 py-1 text-sm bg-blue-600 text-white rounded-md">1</button>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">2</button>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">3</button>
                    <span class="px-3 py-1 text-sm text-gray-500">...</span>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">5</button>
                    <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
