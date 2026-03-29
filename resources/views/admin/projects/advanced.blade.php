@extends('admin.layouts.app')

@section('page-title', 'Advanced Projects Management')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Advanced Projects Management</h1>
        <p class="text-gray-600 mt-1">Comprehensive project tracking, resource allocation, and performance analytics</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            New Project
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-users mr-2"></i>
            Assign Team
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-chart-gantt mr-2"></i>
            Timeline View
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Project Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-folder-open text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Active Projects</p>
                    <p class="text-2xl font-bold text-gray-900">47</p>
                    <p class="text-xs text-green-600">+3 this month</p>
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
                    <p class="text-2xl font-bold text-gray-900">156</p>
                    <p class="text-xs text-gray-600">76.8% success rate</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-users text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Team Members</p>
                    <p class="text-2xl font-bold text-gray-900">89</p>
                    <p class="text-xs text-gray-600">Across all projects</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-dollar-sign text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Budget</p>
                    <p class="text-2xl font-bold text-gray-900">$2.4M</p>
                    <p class="text-xs text-green-600">$1.8M utilized</p>
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
                    <input type="text" placeholder="Search projects..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>Planning</option>
                    <option>In Progress</option>
                    <option>Testing</option>
                    <option>Completed</option>
                    <option>On Hold</option>
                    <option>Cancelled</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Priority</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Priority</option>
                    <option>Critical</option>
                    <option>High</option>
                    <option>Medium</option>
                    <option>Low</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Department</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Departments</option>
                    <option>Development</option>
                    <option>Design</option>
                    <option>Marketing</option>
                    <option>Sales</option>
                    <option>Operations</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date Range</label>
                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
        </div>
    </div>

    <!-- Projects Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Projects Overview</h2>
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
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <input type="checkbox" class="rounded border-gray-300">
                        </th>
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
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-globe text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">E-commerce Platform</div>
                                    <div class="text-sm text-gray-500">Web Development</div>
                                    <div class="text-sm text-gray-500">Project ID: PRJ-001</div>
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
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=10B981&color=fff" alt="John" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=F59E0B&color=fff" alt="Sarah" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Alex+Johnson&background=EF4444&color=fff" alt="Alex" class="w-6 h-6 rounded-full border-2 border-white">
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
                            <div class="text-sm text-gray-900">$125,000</div>
                            <div class="text-sm text-gray-500">$97,500 spent</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Jan 15 - Jun 30</div>
                            <div class="text-sm text-green-600">On track</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                In Progress
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-2">View</button>
                            <button class="text-gray-600 hover:text-gray-900">Edit</button>
                        </td>
                    </tr>

                    <!-- Project 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-mobile-alt text-green-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Mobile Banking App</div>
                                    <div class="text-sm text-gray-500">Mobile Development</div>
                                    <div class="text-sm text-gray-500">Project ID: PRJ-002</div>
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
                                <img src="https://ui-avatars.com/api/?name=Mike+Wilson&background=8B5CF6&color=fff" alt="Mike" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=EC4899&color=fff" alt="Emma" class="w-6 h-6 rounded-full border-2 border-white">
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
                            <div class="text-sm text-gray-900">$180,000</div>
                            <div class="text-sm text-gray-500">$81,000 spent</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Feb 1 - Aug 15</div>
                            <div class="text-sm text-orange-600">2 weeks behind</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                At Risk
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-2">View</button>
                            <button class="text-gray-600 hover:text-gray-900">Edit</button>
                        </td>
                    </tr>

                    <!-- Project 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-paint-brush text-purple-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Brand Redesign</div>
                                    <div class="text-sm text-gray-500">Design Project</div>
                                    <div class="text-sm text-gray-500">Project ID: PRJ-003</div>
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
                            <div class="text-sm text-gray-900">$45,000</div>
                            <div class="text-sm text-gray-500">$41,400 spent</div>
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
                            <button class="text-blue-600 hover:text-blue-900 mr-2">View</button>
                            <button class="text-gray-600 hover:text-gray-900">Edit</button>
                        </td>
                    </tr>

                    <!-- Project 4 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-gray-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-check-circle text-gray-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">CRM System</div>
                                    <div class="text-sm text-gray-500">Software Development</div>
                                    <div class="text-sm text-gray-500">Project ID: PRJ-004</div>
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
                            <div class="text-sm text-gray-900">$95,000</div>
                            <div class="text-sm text-gray-500">$92,000 spent</div>
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
                            <button class="text-blue-600 hover:text-blue-900 mr-2">View</button>
                            <button class="text-gray-600 hover:text-gray-900">Archive</button>
                        </td>
                    </tr>

                    <!-- Project 5 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-chart-line text-orange-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Analytics Dashboard</div>
                                    <div class="text-sm text-gray-500">Data Visualization</div>
                                    <div class="text-sm text-gray-500">Project ID: PRJ-005</div>
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
                            <div class="text-sm text-gray-900">$75,000</div>
                            <div class="text-sm text-gray-500">$18,750 spent</div>
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
                            <button class="text-blue-600 hover:text-blue-900 mr-2">View</button>
                            <button class="text-gray-600 hover:text-gray-900">Edit</button>
                        </td>
                    </tr>

                    <!-- Project 6 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-exclamation-triangle text-red-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">API Integration</div>
                                    <div class="text-sm text-gray-500">Backend Development</div>
                                    <div class="text-sm text-gray-500">Project ID: PRJ-006</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <img src="https://ui-avatars.com/api/?name=CloudTech&background=DC2626&color=fff" alt="CloudTech" class="w-8 h-8 rounded-full mr-3">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">CloudTech Solutions</div>
                                    <div class="text-sm text-gray-500">Cloud Services</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex -space-x-2">
                                <img src="https://ui-avatars.com/api/?name=Kevin+Lee&background=059669&color=fff" alt="Kevin" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Rachel+Green&background=7C3AED&color=fff" alt="Rachel" class="w-6 h-6 rounded-full border-2 border-white">
                                <img src="https://ui-avatars.com/api/?name=Mark+Johnson&background=DB2777&color=fff" alt="Mark" class="w-6 h-6 rounded-full border-2 border-white">
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-1 mr-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-red-600 h-2 rounded-full" style="width: 15%"></div>
                                    </div>
                                </div>
                                <span class="text-sm text-gray-900">15%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$110,000</div>
                            <div class="text-sm text-gray-500">$16,500 spent</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 15 - Jun 30</div>
                            <div class="text-sm text-red-600">3 weeks behind</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Critical
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-red-600 hover:text-red-900 mr-2">Urgent</button>
                            <button class="text-gray-600 hover:text-gray-900">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-700">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">47</span> results
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

    <!-- Project Performance Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">
        <!-- Project Timeline -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Project Timeline</h2>
            <div class="space-y-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0 w-3 h-3 bg-green-500 rounded-full"></div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <p class="text-sm font-medium text-gray-900">Brand Redesign</p>
                            <p class="text-xs text-gray-500">92% Complete</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="flex-shrink-0 w-3 h-3 bg-blue-500 rounded-full"></div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <p class="text-sm font-medium text-gray-900">E-commerce Platform</p>
                            <p class="text-xs text-gray-500">78% Complete</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 78%"></div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="flex-shrink-0 w-3 h-3 bg-yellow-500 rounded-full"></div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <p class="text-sm font-medium text-gray-900">Mobile Banking App</p>
                            <p class="text-xs text-gray-500">45% Complete</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="flex-shrink-0 w-3 h-3 bg-orange-500 rounded-full"></div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <p class="text-sm font-medium text-gray-900">Analytics Dashboard</p>
                            <p class="text-xs text-gray-500">25% Complete</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-orange-500 h-2 rounded-full" style="width: 25%"></div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="flex-shrink-0 w-3 h-3 bg-red-500 rounded-full"></div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <p class="text-sm font-medium text-gray-900">API Integration</p>
                            <p class="text-xs text-gray-500">15% Complete</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-red-500 h-2 rounded-full" style="width: 15%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resource Allocation -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Resource Allocation</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-code text-blue-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Development</p>
                            <p class="text-xs text-gray-500">32 team members</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">68% allocated</p>
                        <p class="text-xs text-orange-600">High demand</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-palette text-purple-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Design</p>
                            <p class="text-xs text-gray-500">12 team members</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">85% allocated</p>
                        <p class="text-xs text-red-600">At capacity</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-bullhorn text-green-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Marketing</p>
                            <p class="text-xs text-gray-500">18 team members</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">45% allocated</p>
                        <p class="text-xs text-green-600">Available</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-chart-line text-orange-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Sales</p>
                            <p class="text-xs text-gray-500">15 team members</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">72% allocated</p>
                        <p class="text-xs text-orange-600">Busy</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-cogs text-gray-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Operations</p>
                            <p class="text-xs text-gray-500">12 team members</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">58% allocated</p>
                        <p class="text-xs text-gray-600">Moderate</p>
                    </div>
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
                        <p class="text-sm font-medium text-gray-900">$2.4M</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">$1.8M utilized (75%)</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Development Projects</p>
                        <p class="text-sm font-medium text-gray-900">$890K</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 82%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">$730K spent</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Design Projects</p>
                        <p class="text-sm font-medium text-gray-900">$320K</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-purple-600 h-2 rounded-full" style="width: 68%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">$218K spent</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Marketing Projects</p>
                        <p class="text-sm font-medium text-gray-900">$450K</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-orange-600 h-2 rounded-full" style="width: 71%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">$320K spent</p>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Operations</p>
                        <p class="text-sm font-medium text-gray-900">$140K</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gray-600 h-2 rounded-full" style="width: 89%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">$125K spent</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
