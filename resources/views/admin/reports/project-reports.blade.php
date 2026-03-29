@extends('admin.layouts.app')

@section('page-title', 'Project Reports')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Project Reports</h1>
        <p class="text-gray-600 mt-1">Comprehensive project management and performance analytics</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-download mr-2"></i>
            Export Report
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-calendar-alt mr-2"></i>
            Schedule Report
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-share-alt mr-2"></i>
            Share Report
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Project Overview Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-folder-open text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Projects</p>
                    <p class="text-2xl font-bold text-gray-900">147</p>
                    <p class="text-xs text-green-600">+12 this month</p>
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
                    <p class="text-xs text-gray-600">60.5% completion rate</p>
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
                    <p class="text-2xl font-bold text-gray-900">47</p>
                    <p class="text-xs text-gray-600">32% active projects</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-clock text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Avg Duration</p>
                    <p class="text-2xl font-bold text-gray-900">45 days</p>
                    <p class="text-xs text-green-600">-3 days improvement</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date Range</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>Last 30 Days</option>
                    <option>Last 3 Months</option>
                    <option>Last 6 Months</option>
                    <option>Last Year</option>
                    <option>Custom Range</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Project Status</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>Completed</option>
                    <option>In Progress</option>
                    <option>On Hold</option>
                    <option>Cancelled</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Project Type</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Types</option>
                    <option>Web Development</option>
                    <option>Mobile App</option>
                    <option>Design</option>
                    <option>Consulting</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Team</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Teams</option>
                    <option>Development</option>
                    <option>Design</option>
                    <option>Marketing</option>
                    <option>Sales</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Project Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Project Timeline -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Project Timeline</h2>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-expand-alt"></i>
                </button>
            </div>
            <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-chart-gantt text-4xl text-gray-400 mb-2"></i>
                    <p class="text-gray-500">Project timeline chart will be displayed here</p>
                    <p class="text-sm text-gray-400">Gantt chart view</p>
                </div>
            </div>
        </div>

        <!-- Resource Allocation -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Resource Allocation</h2>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-expand-alt"></i>
                </button>
            </div>
            <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-users text-4xl text-gray-400 mb-2"></i>
                    <p class="text-gray-500">Resource allocation chart will be displayed here</p>
                    <p class="text-sm text-gray-400">Team distribution</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Performance Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Project Performance</h2>
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
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Team</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Budget</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Timeline</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Project 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-globe text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">E-commerce Platform</div>
                                    <div class="text-sm text-gray-500">Web Development</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <img src="https://ui-avatars.com/api/?name=TechCorp&background=3B82F6&color=fff" alt="TechCorp" class="w-8 h-8 rounded-full mr-3">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">TechCorp Inc.</div>
                                    <div class="text-sm text-gray-500">Enterprise Client</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex -space-x-2">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=3B82F6&color=fff" alt="John" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=10B981&color=fff" alt="Sarah" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Alex+Johnson&background=F59E0B&color=fff" alt="Alex" class="w-6 h-6 rounded-full border-2 border-white">
                                <div class="w-6 h-6 bg-gray-300 rounded-full border-2 border-white flex items-center justify-center">
                                    <span class="text-xs text-gray-600">+2</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-1 mr-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-green-600 h-2 rounded-full" style="width: 78%"></div>
                                    </div>
                                </div>
                                <span class="text-sm text-gray-900">78%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$45,000</div>
                            <div class="text-sm text-gray-500">$38,500 spent</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 15 - Jun 30</div>
                            <div class="text-sm text-green-600">On track</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                        </td>
                    </tr>

                    <!-- Project 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-mobile-alt text-green-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Mobile Banking App</div>
                                    <div class="text-sm text-gray-500">Mobile Development</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <img src="https://ui-avatars.com/api/?name=FinanceBank&background=10B981&color=fff" alt="FinanceBank" class="w-8 h-8 rounded-full mr-3">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Finance Bank</div>
                                    <div class="text-sm text-gray-500">Financial Services</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex -space-x-2">
                                <img src="https://ui-avatars.com/api/?name=Mike+Wilson&background=EF4444&color=fff" alt="Mike" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=8B5CF6&color=fff" alt="Emma" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Chris+Lee&background=06B6D4&color=fff" alt="Chris" class="w-6 h-6 rounded-full border-2 border-white">
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-1 mr-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 45%"></div>
                                    </div>
                                </div>
                                <span class="text-sm text-gray-900">45%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$62,000</div>
                            <div class="text-sm text-gray-500">$27,900 spent</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Apr 1 - Aug 15</div>
                            <div class="text-sm text-orange-600">2 weeks behind</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                At Risk
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                        </td>
                    </tr>

                    <!-- Project 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-paint-brush text-purple-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Brand Redesign</div>
                                    <div class="text-sm text-gray-500">Design Project</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <img src="https://ui-avatars.com/api/?name=StartupCo&background=8B5CF6&color=fff" alt="StartupCo" class="w-8 h-8 rounded-full mr-3">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">StartupCo</div>
                                    <div class="text-sm text-gray-500">Tech Startup</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex -space-x-2">
                                <img src="https://ui-avatars.com/api/?name=Lisa+Anderson&background=EC4899&color=fff" alt="Lisa" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Tom+Brown&background=F59E0B&color=fff" alt="Tom" class="w-6 h-6 rounded-full border-2 border-white">
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-1 mr-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-green-600 h-2 rounded-full" style="width: 92%"></div>
                                    </div>
                                </div>
                                <span class="text-sm text-gray-900">92%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$18,000</div>
                            <div class="text-sm text-gray-500">$16,560 spent</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Feb 1 - Mar 31</div>
                            <div class="text-sm text-green-600">1 week ahead</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                On Track
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                        </td>
                    </tr>

                    <!-- Project 4 - Completed -->
                    <tr class="hover:bg-gray-50 bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-gray-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-check-circle text-gray-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">CRM System</div>
                                    <div class="text-sm text-gray-500">Software Development</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <img src="https://ui-avatars.com/api/?name=SalesPro&background=6B7280&color=fff" alt="SalesPro" class="w-8 h-8 rounded-full mr-3">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">SalesPro Ltd.</div>
                                    <div class="text-sm text-gray-500">SaaS Company</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex -space-x-2">
                                <img src="https://ui-avatars.com/api/?name=David+Kim&background=059669&color=fff" alt="David" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Anna+White&background=DC2626&color=fff" alt="Anna" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=James+Chen&background=7C3AED&color=fff" alt="James" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Nina+Patel&background=DB2777&color=fff" alt="Nina" class="w-6 h-6 rounded-full border-2 border-white">
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-1 mr-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
                                    </div>
                                </div>
                                <span class="text-sm text-gray-900">100%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$35,000</div>
                            <div class="text-sm text-gray-500">$34,200 spent</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Jan 1 - Feb 28</div>
                            <div class="text-sm text-green-600">Completed</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                        </td>
                    </tr>

                    <!-- Project 5 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-chart-line text-orange-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Analytics Dashboard</div>
                                    <div class="text-sm text-gray-500">Data Visualization</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <img src="https://ui-avatars.com/api/?name=DataCorp&background=F59E0B&color=fff" alt="DataCorp" class="w-8 h-8 rounded-full mr-3">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">DataCorp</div>
                                    <div class="text-sm text-gray-500">Analytics Company</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex -space-x-2">
                                <img src="https://ui-avatars.com/api/?name=Ryan+Moore&background=84CC16&color=fff" alt="Ryan" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Sophie+Turner&background=A855F7&color=fff" alt="Sophie" class="w-6 h-6 rounded-full border-2 border-white">
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-1 mr-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-orange-600 h-2 rounded-full" style="width: 25%"></div>
                                    </div>
                                </div>
                                <span class="text-sm text-gray-900">25%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$28,000</div>
                            <div class="text-sm text-gray-500">$7,000 spent</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">May 1 - Jul 31</div>
                            <div class="text-sm text-gray-500">On schedule</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                On Hold
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Team Performance -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Top Performing Teams -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Top Performing Teams</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-code text-blue-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Development</p>
                            <p class="text-xs text-gray-500">8 members</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">92% on-time</p>
                        <p class="text-xs text-green-600">+5% efficiency</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-palette text-purple-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Design</p>
                            <p class="text-xs text-gray-500">4 members</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">88% on-time</p>
                        <p class="text-xs text-green-600">+3% efficiency</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-bullhorn text-green-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Marketing</p>
                            <p class="text-xs text-gray-500">6 members</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">85% on-time</p>
                        <p class="text-xs text-red-600">-2% efficiency</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Health -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Project Health</h2>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Healthy Projects</p>
                        <p class="text-sm font-medium text-gray-900">68%</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 68%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">32 of 47 projects</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">At Risk</p>
                        <p class="text-sm font-medium text-gray-900">21%</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-orange-600 h-2 rounded-full" style="width: 21%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">10 of 47 projects</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Critical</p>
                        <p class="text-sm font-medium text-gray-900">11%</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-red-600 h-2 rounded-full" style="width: 11%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">5 of 47 projects</p>
                </div>
            </div>
        </div>

        <!-- Budget Utilization -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Budget Utilization</h2>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Total Budget</p>
                        <p class="text-sm font-medium text-gray-900">$188,000</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 73%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">$137,560 spent (73%)</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Under Budget</p>
                        <p class="text-sm font-medium text-gray-900">$50,440</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 27%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">27% remaining</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Cost Efficiency</p>
                        <p class="text-sm font-medium text-gray-900">94%</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-purple-600 h-2 rounded-full" style="width: 94%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">6% under estimates</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
