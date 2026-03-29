@extends('admin.layouts.app')

@section('title', 'Progress Tracking')
@section('page-title', 'Progress Tracking')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Progress Tracking</h1>
            <p class="text-gray-600 mt-1">Monitor and analyze project progress across all clients</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-chart-line mr-2"></i>
                Generate Report
            </button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-sync mr-2"></i>
                Refresh Data
            </button>
        </div>
    </div>

    <!-- Overall Progress Overview -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <div class="lg:col-span-2 bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-chart-line mr-2 text-blue-600"></i>
                Overall Progress Overview
            </h3>
            <div class="space-y-6">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Total Portfolio Progress</span>
                        <span class="text-sm font-bold text-gray-900">78.5%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gradient-to-r from-blue-500 to-green-500 h-3 rounded-full" style="width: 78.5%"></div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="text-center p-4 bg-blue-50 rounded-lg">
                        <div class="text-2xl font-bold text-blue-600">24</div>
                        <div class="text-sm text-gray-600">Active Projects</div>
                    </div>
                    <div class="text-center p-4 bg-green-50 rounded-lg">
                        <div class="text-2xl font-bold text-green-600">18</div>
                        <div class="text-sm text-gray-600">On Schedule</div>
                    </div>
                    <div class="text-center p-4 bg-yellow-50 rounded-lg">
                        <div class="text-2xl font-bold text-yellow-600">6</div>
                        <div class="text-sm text-gray-600">At Risk</div>
                    </div>
                </div>
                
                <!-- Progress Chart Placeholder -->
                <div class="bg-gray-50 rounded-lg p-6 h-64 flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-chart-area text-4xl text-gray-400 mb-4"></i>
                        <p class="text-gray-600">Progress Trend Chart</p>
                        <p class="text-sm text-gray-500">Last 30 days performance</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="space-y-6">
            <!-- Progress Metrics -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-tachometer-alt mr-2 text-purple-600"></i>
                    Key Metrics
                </h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">Avg. Completion Rate</span>
                        <span class="text-sm font-medium text-green-600">87.3%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">On-Time Delivery</span>
                        <span class="text-sm font-medium text-green-600">92.1%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">Client Satisfaction</span>
                        <span class="text-sm font-medium text-blue-600">4.8/5</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">Budget Adherence</span>
                        <span class="text-sm font-medium text-yellow-600">78.5%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">Team Efficiency</span>
                        <span class="text-sm font-medium text-green-600">91.2%</span>
                    </div>
                </div>
            </div>
            
            <!-- Recent Milestones -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-flag mr-2 text-green-600"></i>
                    Recent Milestones
                </h3>
                <div class="space-y-3">
                    <div class="flex items-start space-x-3">
                        <div class="p-1 bg-green-100 rounded-full mt-1">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900">E-commerce Phase 1 Complete</p>
                            <p class="text-xs text-gray-500">2 days ago</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="p-1 bg-green-100 rounded-full mt-1">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900">Mobile App Beta Released</p>
                            <p class="text-xs text-gray-500">3 days ago</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="p-1 bg-yellow-100 rounded-full mt-1">
                            <i class="fas fa-clock text-yellow-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900">Website Design Review</p>
                            <p class="text-xs text-gray-500">Tomorrow</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="p-1 bg-gray-100 rounded-full mt-1">
                            <i class="fas fa-flag text-gray-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900">API Integration Complete</p>
                            <p class="text-xs text-gray-500">Next week</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detailed Project Progress -->
    <div class="bg-white rounded-lg shadow mb-8">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                    <i class="fas fa-tasks mr-2 text-blue-600"></i>
                    Project Progress Details
                </h3>
                <div class="flex space-x-2">
                    <button class="text-gray-500 hover:text-gray-700" title="Export">
                        <i class="fas fa-download"></i>
                    </button>
                    <button class="text-gray-500 hover:text-gray-700" title="Print">
                        <i class="fas fa-print"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Timeline</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Budget</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Update</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">E-commerce Platform</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-6 w-6 rounded-full bg-blue-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">SJ</span>
                                </div>
                                <div class="ml-2 text-sm text-gray-900">Sarah Johnson</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">75%</div>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">80%</div>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">65%</div>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                On Track
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            2 days ago
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3">View</button>
                            <button class="text-gray-600 hover:text-gray-900">Edit</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Mobile Banking App</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-6 w-6 rounded-full bg-green-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">MC</span>
                                </div>
                                <div class="ml-2 text-sm text-gray-900">Michael Chen</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">95%</div>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">100%</div>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">90%</div>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Review
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            1 day ago
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3">View</button>
                            <button class="text-gray-600 hover:text-gray-900">Edit</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Brand Redesign</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-6 w-6 rounded-full bg-purple-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">ED</span>
                                </div>
                                <div class="ml-2 text-sm text-gray-900">Emma Davis</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">100%</div>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">100%</div>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">95%</div>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            1 week ago
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3">View</button>
                            <button class="text-gray-600 hover:text-gray-900">Archive</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Progress Alerts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Projects At Risk -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-exclamation-triangle mr-2 text-yellow-600"></i>
                Projects At Risk
            </h3>
            <div class="space-y-4">
                <div class="p-4 border border-yellow-200 rounded-lg bg-yellow-50">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="text-sm font-medium text-gray-900">CRM Integration</h4>
                        <span class="text-xs text-yellow-600">High Risk</span>
                    </div>
                    <p class="text-xs text-gray-600 mb-2">Timeline exceeded by 15 days, budget overruns detected</p>
                    <div class="flex items-center justify-between">
                        <div class="text-xs text-gray-500">Client: Tech Solutions Inc.</div>
                        <button class="text-xs text-yellow-600 hover:text-yellow-700">Take Action</button>
                    </div>
                </div>
                
                <div class="p-4 border border-red-200 rounded-lg bg-red-50">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="text-sm font-medium text-gray-900">API Development</h4>
                        <span class="text-xs text-red-600">Critical</span>
                    </div>
                    <p class="text-xs text-gray-600 mb-2">Technical blockers identified, client communication needed</p>
                    <div class="flex items-center justify-between">
                        <div class="text-xs text-gray-500">Client: Global Retail Co.</div>
                        <button class="text-xs text-red-600 hover:text-red-700">Urgent Review</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Upcoming Deadlines -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-calendar-alt mr-2 text-red-600"></i>
                Upcoming Deadlines
            </h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 border border-gray-200 rounded-lg">
                    <div>
                        <h4 class="text-sm font-medium text-gray-900">Website Launch</h4>
                        <p class="text-xs text-gray-500">E-commerce Platform</p>
                    </div>
                    <div class="text-right">
                        <div class="text-sm font-medium text-red-600">Tomorrow</div>
                        <div class="text-xs text-gray-500">Dec 15, 2024</div>
                    </div>
                </div>
                
                <div class="flex items-center justify-between p-3 border border-gray-200 rounded-lg">
                    <div>
                        <h4 class="text-sm font-medium text-gray-900">Design Review</h4>
                        <p class="text-xs text-gray-500">Mobile App UI</p>
                    </div>
                    <div class="text-right">
                        <div class="text-sm font-medium text-yellow-600">3 days</div>
                        <div class="text-xs text-gray-500">Dec 17, 2024</div>
                    </div>
                </div>
                
                <div class="flex items-center justify-between p-3 border border-gray-200 rounded-lg">
                    <div>
                        <h4 class="text-sm font-medium text-gray-900">Beta Testing</h4>
                        <p class="text-xs text-gray-500">Banking App</p>
                    </div>
                    <div class="text-right">
                        <div class="text-sm font-medium text-blue-600">1 week</div>
                        <div class="text-xs text-gray-500">Dec 22, 2024</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
