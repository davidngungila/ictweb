@extends('admin.layouts.app')

@section('page-title', 'Performance Analytics')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Performance Analytics</h1>
        <p class="text-gray-600 mt-1">System performance metrics and operational analytics</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-download mr-2"></i>
            Export Report
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-chart-line mr-2"></i>
            Generate Insights
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-bell mr-2"></i>
            Set Alerts
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Performance Overview Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-tachometer-alt text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">System Uptime</p>
                    <p class="text-2xl font-bold text-gray-900">99.9%</p>
                    <p class="text-xs text-green-600">Excellent</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-clock text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Avg Response Time</p>
                    <p class="text-2xl font-bold text-gray-900">1.2s</p>
                    <p class="text-xs text-green-600">-0.3s improvement</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-users text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Active Users</p>
                    <p class="text-2xl font-bold text-gray-900">3,847</p>
                    <p class="text-xs text-green-600">+12% from last week</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-server text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Server Load</p>
                    <p class="text-2xl font-bold text-gray-900">42%</p>
                    <p class="text-xs text-green-600">Optimal range</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Time Period Filter -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Time Period</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>Last 24 Hours</option>
                    <option>Last 7 Days</option>
                    <option>Last 30 Days</option>
                    <option>Last 3 Months</option>
                    <option>Last Year</option>
                    <option>Custom Range</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Metric Type</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Metrics</option>
                    <option>Performance</option>
                    <option>Usage</option>
                    <option>System Health</option>
                    <option>User Activity</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Environment</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Environments</option>
                    <option>Production</option>
                    <option>Staging</option>
                    <option>Development</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Comparison</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>No Comparison</option>
                    <option>Previous Period</option>
                    <option>Same Time Last Week</option>
                    <option>Same Time Last Month</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Performance Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Response Time Trend -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Response Time Trend</h2>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-expand-alt"></i>
                </button>
            </div>
            <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-chart-line text-4xl text-gray-400 mb-2"></i>
                    <p class="text-gray-500">Response time trend chart will be displayed here</p>
                    <p class="text-sm text-gray-400">Last 30 days performance</p>
                </div>
            </div>
        </div>

        <!-- System Load -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900">System Load</h2>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-expand-alt"></i>
                </button>
            </div>
            <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-chart-area text-4xl text-gray-400 mb-2"></i>
                    <p class="text-gray-500">System load chart will be displayed here</p>
                    <p class="text-sm text-gray-400">CPU, Memory, Disk usage</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Metrics Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Performance Metrics</h2>
                <div class="flex items-center space-x-2">
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-download"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Metric</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Value</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Previous</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Change</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alert Level</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Metric 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-tachometer-alt text-green-600 text-xs"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Page Load Time</div>
                                    <div class="text-sm text-gray-500">Average page rendering</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            1.2s
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            1.5s
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-green-600 text-sm">-0.3s</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Good
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Normal
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                        </td>
                    </tr>

                    <!-- Metric 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-server text-blue-600 text-xs"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">CPU Usage</div>
                                    <div class="text-sm text-gray-500">Processor utilization</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            42%
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            38%
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-orange-600 text-sm">+4%</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Good
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Normal
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                        </td>
                    </tr>

                    <!-- Metric 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-memory text-purple-600 text-xs"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Memory Usage</div>
                                    <div class="text-sm text-gray-500">RAM utilization</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            67%
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            65%
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-orange-600 text-sm">+2%</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Warning
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                Monitor
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                        </td>
                    </tr>

                    <!-- Metric 4 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-hdd text-orange-600 text-xs"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Disk Usage</div>
                                    <div class="text-sm text-gray-500">Storage utilization</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            78%
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            75%
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-orange-600 text-sm">+3%</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Warning
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                Monitor
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                        </td>
                    </tr>

                    <!-- Metric 5 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-network-wired text-green-600 text-xs"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Network I/O</div>
                                    <div class="text-sm text-gray-500">Network throughput</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            125 Mbps
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            118 Mbps
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-green-600 text-sm">+7 Mbps</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Good
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Normal
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                        </td>
                    </tr>

                    <!-- Metric 6 - Critical -->
                    <tr class="hover:bg-gray-50 bg-red-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-exclamation-triangle text-red-600 text-xs"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Error Rate</div>
                                    <div class="text-sm text-gray-500">System error percentage</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 font-medium">
                            2.8%
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            1.2%
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-red-600 text-sm">+1.6%</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Critical
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Alert
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-red-600 hover:text-red-900">Investigate</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Performance Insights -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Top Issues -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Performance Issues</h2>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                        <i class="fas fa-exclamation-triangle text-red-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">High Error Rate</p>
                        <p class="text-xs text-gray-500">Error rate increased by 133%</p>
                        <p class="text-xs text-red-600">Immediate attention required</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                        <i class="fas fa-hdd text-orange-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">Disk Space Low</p>
                        <p class="text-xs text-gray-500">78% disk usage</p>
                        <p class="text-xs text-orange-600">Consider cleanup</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                        <i class="fas fa-memory text-yellow-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">Memory Usage Rising</p>
                        <p class="text-xs text-gray-500">67% memory usage</p>
                        <p class="text-xs text-yellow-600">Monitor closely</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optimization Opportunities -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Optimization Opportunities</h2>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                        <i class="fas fa-rocket text-green-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">Database Optimization</p>
                        <p class="text-xs text-gray-500">Potential 20% performance gain</p>
                        <p class="text-xs text-green-600">High impact</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                        <i class="fas fa-compress text-blue-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">Image Compression</p>
                        <p class="text-xs text-gray-500">Reduce page load by 15%</p>
                        <p class="text-xs text-blue-600">Medium impact</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                        <i class="fas fa-code text-purple-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">Code Minification</p>
                        <p class="text-xs text-gray-500">Reduce file size by 25%</p>
                        <p class="text-xs text-purple-600">Low effort</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance Score -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Performance Score</h2>
            <div class="text-center mb-6">
                <div class="text-4xl font-bold text-gray-900">78/100</div>
                <p class="text-sm text-gray-500">Overall Performance</p>
            </div>
            
            <div class="space-y-3">
                <div>
                    <div class="flex items-center justify-between mb-1">
                        <p class="text-sm font-medium text-gray-900">Speed</p>
                        <p class="text-sm text-gray-900">85/100</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 85%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1">
                        <p class="text-sm font-medium text-gray-900">Reliability</p>
                        <p class="text-sm text-gray-900">92/100</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 92%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1">
                        <p class="text-sm font-medium text-gray-900">Efficiency</p>
                        <p class="text-sm text-gray-900">67/100</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-yellow-600 h-2 rounded-full" style="width: 67%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1">
                        <p class="text-sm font-medium text-gray-900">Scalability</p>
                        <p class="text-sm text-gray-900">71/100</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-orange-600 h-2 rounded-full" style="width: 71%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
