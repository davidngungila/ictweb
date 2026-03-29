@extends('admin.layouts.app')

@section('title', 'Advanced Integrations Management')
@section('page-title', 'Advanced Integrations Management')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header with Quick Actions -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Advanced Integrations Management</h1>
            <p class="text-gray-600 mt-1">Third-party service integrations and API connections management</p>
        </div>
        <div class="flex space-x-3">
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    Add Integration
                    <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </button>
                <div x-show="open" @click.away="open = false" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 transform scale-95"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave-end="opacity-0 transform scale-95"
                     class="absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fab fa-stripe mr-2"></i>Payment Gateway
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fab fa-google mr-2"></i>Google Services
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fab fa-microsoft mr-2"></i>Microsoft 365
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fab fa-slack mr-2"></i>Team Communication
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fab fa-aws mr-2"></i>Cloud Services
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-plug mr-2"></i>Custom API
                        </a>
                    </div>
                </div>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-download mr-2"></i>
                Export Config
            </button>
        </div>
    </div>

    <!-- Advanced Analytics Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Integrations</p>
                    <p class="text-2xl font-bold text-gray-900">24</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 4 new this month
                    </p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-plug text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Active</p>
                    <p class="text-2xl font-bold text-gray-900">18</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 75% success rate
                    </p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">API Calls</p>
                    <p class="text-2xl font-bold text-gray-900">1.2M</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 18% increase
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-exchange-alt text-yellow-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Errors</p>
                    <p class="text-2xl font-bold text-gray-900">0.8%</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-down"></i> 0.3% decrease
                    </p>
                </div>
                <div class="p-3 bg-red-100 rounded-lg">
                    <i class="fas fa-exclamation-triangle text-red-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Integration Performance Analytics -->
    <div class="bg-white rounded-lg shadow p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Integration Performance Analytics</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="text-3xl font-bold text-blue-600">99.2%</div>
                <div class="text-sm text-gray-600">Uptime</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-up"></i> 0.5% improvement
                </div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-green-600">124ms</div>
                <div class="text-sm text-gray-600">Avg. Response Time</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-down"></i> 12ms faster
                </div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-yellow-600">847K</div>
                <div class="text-sm text-gray-600">Daily API Calls</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-up"></i> 22% increase
                </div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-purple-600">94%</div>
                <div class="text-sm text-gray-600">Data Sync Success</div>
                <div class="text-xs text-green-600 mt-1">
                    <i class="fas fa-arrow-up"></i> 3% improvement
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters and Search -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Advanced search (integration name, API, status...)" 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full lg:w-80">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="error">Error</option>
                    <option value="testing">Testing</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Categories</option>
                    <option value="payment">Payment Processing</option>
                    <option value="communication">Communication</option>
                    <option value="analytics">Analytics & Tracking</option>
                    <option value="storage">Cloud Storage</option>
                    <option value="crm">CRM & Sales</option>
                    <option value="custom">Custom APIs</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Protocols</option>
                    <option value="rest">REST API</option>
                    <option value="graphql">GraphQL</option>
                    <option value="soap">SOAP</option>
                    <option value="webhook">Webhooks</option>
                    <option value="oauth">OAuth 2.0</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Data Types</option>
                    <option value="realtime">Real-time</option>
                    <option value="batch">Batch Processing</option>
                    <option value="streaming">Streaming</option>
                    <option value="scheduled">Scheduled</option>
                </select>
            </div>
            
            <div class="flex space-x-2">
                <button class="text-gray-500 hover:text-gray-700" title="Advanced Filters">
                    <i class="fas fa-filter"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="Sort Options">
                    <i class="fas fa-sort"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="API Monitor">
                    <i class="fas fa-heartbeat"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="Test All">
                    <i class="fas fa-vial"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Advanced Integrations Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <input type="checkbox" class="rounded border-gray-300">
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Integration</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Protocol</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">API Calls</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Response Time</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Success Rate</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Advanced Integration 1 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-12 w-12 flex-shrink-0 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fab fa-stripe text-blue-600 text-lg"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Stripe Payment Gateway</div>
                                    <div class="text-sm text-gray-500">Secure payment processing and subscription management</div>
                                    <div class="flex items-center mt-1">
                                        <span class="text-xs text-gray-500">
                                            <i class="fas fa-shield-alt text-green-400"></i> PCI Compliant
                                        </span>
                                        <span class="text-xs text-gray-500 ml-2">
                                            <i class="fas fa-check-circle text-blue-400"></i> Verified
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Payment Processing
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">REST API</div>
                                <div class="ml-2 flex items-center">
                                    <i class="fas fa-lock text-green-500 text-xs"></i>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500">OAuth 2.0</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">45.2K</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 78%"></div>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500">Daily avg</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">89ms</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="text-xs text-green-600">Fast</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">99.8%</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 99%"></div>
                                </div>
                            </div>
                            <div class="text-xs text-green-600">Excellent</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-1">
                                <button class="text-blue-600 hover:text-blue-900 p-1" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900 p-1" title="Configure">
                                    <i class="fas fa-cog"></i>
                                </button>
                                <button class="text-purple-600 hover:text-purple-900 p-1" title="Test Connection">
                                    <i class="fas fa-vial"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-900 p-1" title="View Logs">
                                    <i class="fas fa-file-alt"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900 p-1" title="Disable">
                                    <i class="fas fa-pause"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Advanced Integration 2 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-12 w-12 flex-shrink-0 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <i class="fab fa-slack text-purple-600 text-lg"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Slack Integration</div>
                                    <div class="text-sm text-gray-500">Team communication and notification system</div>
                                    <div class="flex items-center mt-1">
                                        <span class="text-xs text-gray-500">
                                            <i class="fas fa-bell text-yellow-400"></i> Real-time
                                        </span>
                                        <span class="text-xs text-gray-500 ml-2">
                                            <i class="fas fa-users text-blue-400"></i> Team Ready
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Communication
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">Webhooks</div>
                                <div class="ml-2 flex items-center">
                                    <i class="fas fa-sync text-blue-500 text-xs"></i>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500">Real-time</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">12.8K</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-500 h-2 rounded-full" style="width: 62%"></div>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500">Daily avg</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">156ms</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                            <div class="text-xs text-yellow-600">Moderate</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900">98.5%</div>
                                <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 98%"></div>
                                </div>
                            </div>
                            <div class="text-xs text-yellow-600">Good</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-1">
                                <button class="text-blue-600 hover:text-blue-900 p-1" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900 p-1" title="Configure">
                                    <i class="fas fa-cog"></i>
                                </button>
                                <button class="text-purple-600 hover:text-purple-900 p-1" title="Test Connection">
                                    <i class="fas fa-vial"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-900 p-1" title="View Logs">
                                    <i class="fas fa-file-alt"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900 p-1" title="Disable">
                                    <i class="fas fa-pause"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Advanced Pagination with Bulk Actions -->
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Previous
                </a>
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Next
                </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div class="flex items-center space-x-4">
                    <p class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of{' '}
                        <span class="font-medium">24</span> results
                    </p>
                    <div class="flex items-center space-x-2">
                        <button class="text-sm text-blue-600 hover:text-blue-900">
                            <i class="fas fa-vial mr-1"></i>Test All
                        </button>
                        <button class="text-sm text-green-600 hover:text-green-900">
                            <i class="fas fa-download mr-1"></i>Export Config
                        </button>
                        <button class="text-sm text-purple-600 hover:text-purple-900">
                            <i class="fas fa-heartbeat mr-1"></i>API Monitor
                        </button>
                    </div>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" aria-current="page" class="relative inline-flex items-center px-4 py-2 border border-blue-500 bg-blue-50 text-sm font-medium text-blue-600">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
