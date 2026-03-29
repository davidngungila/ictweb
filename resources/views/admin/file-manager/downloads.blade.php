@extends('admin.layouts.app')

@section('title', 'Downloads')
@section('page-title', 'Downloads')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Download Manager</h1>
            <p class="text-gray-600 mt-1">Track and manage all file downloads and access requests</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-download mr-2"></i>
                Generate Download Link
            </button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-chart-bar mr-2"></i>
                Download Analytics
            </button>
        </div>
    </div>

    <!-- Download Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Downloads</p>
                    <p class="text-2xl font-bold text-gray-900">8,947</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 34% this month
                    </p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-download text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Active Downloads</p>
                    <p class="text-2xl font-bold text-gray-900">23</p>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-spinner"></i> In progress
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-clock text-yellow-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Data Transferred</p>
                    <p class="text-2xl font-bold text-gray-900">45.7 TB</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-database"></i> This month
                    </p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-exchange-alt text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Unique Users</p>
                    <p class="text-2xl font-bold text-gray-900">1,234</p>
                    <p class="text-xs text-purple-600 mt-1">
                        <i class="fas fa-users"></i> Active users
                    </p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-user text-purple-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Download Trends -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <div class="lg:col-span-2 bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-chart-line mr-2 text-blue-600"></i>
                Download Trends
            </h3>
            <div class="space-y-4">
                <!-- Chart Placeholder -->
                <div class="bg-gray-50 rounded-lg p-8 h-64 flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-chart-area text-4xl text-gray-400 mb-4"></i>
                        <p class="text-gray-600">Download Volume Over Time</p>
                        <p class="text-sm text-gray-500">Last 30 days analytics</p>
                    </div>
                </div>
                
                <!-- Top Downloads -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-4 bg-blue-50 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-2">Most Downloaded Files</h4>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-700">Project_Proposal.pdf</span>
                                <span class="text-sm font-medium text-gray-900">234</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-700">Budget_Tracker.xlsx</span>
                                <span class="text-sm font-medium text-gray-900">189</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-700">Design_Guidelines.pdf</span>
                                <span class="text-sm font-medium text-gray-900">156</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-green-50 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-2">Top Downloaders</h4>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-700">Sarah Johnson</span>
                                <span class="text-sm font-medium text-gray-900">89</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-700">Michael Chen</span>
                                <span class="text-sm font-medium text-gray-900">76</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-700">Emma Davis</span>
                                <span class="text-sm font-medium text-gray-900">64</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Downloads -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-history mr-2 text-green-600"></i>
                Recent Downloads
            </h3>
            <div class="space-y-3">
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-blue-100 rounded-lg">
                        <i class="fas fa-file-pdf text-blue-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">Contract_Final.pdf</p>
                        <p class="text-xs text-gray-500">Sarah Johnson • 2 min ago</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-green-100 rounded-lg">
                        <i class="fas fa-file-excel text-green-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">Budget_Q4_2024.xlsx</p>
                        <p class="text-xs text-gray-500">Michael Chen • 15 min ago</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-purple-100 rounded-lg">
                        <i class="fas fa-file-image text-purple-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">Logo_Design.png</p>
                        <p class="text-xs text-gray-500">Emma Davis • 1 hour ago</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-red-100 rounded-lg">
                        <i class="fas fa-file-video text-red-600 text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">Demo_Video.mp4</p>
                        <p class="text-xs text-gray-500">Robert Kim • 2 hours ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Download Management -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900">Download Management</h3>
                <div class="flex items-center space-x-2">
                    <select class="px-3 py-1 border border-gray-300 rounded text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">All Files</option>
                        <option value="pdf">PDF</option>
                        <option value="doc">Documents</option>
                        <option value="image">Images</option>
                        <option value="video">Videos</option>
                        <option value="archive">Archives</option>
                    </select>
                    <select class="px-3 py-1 border border-gray-300 rounded text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">All Status</option>
                        <option value="completed">Completed</option>
                        <option value="in-progress">In Progress</option>
                        <option value="failed">Failed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                    <button class="text-gray-500 hover:text-gray-700" title="Export">
                        <i class="fas fa-download"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">File</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Downloaded By</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Size</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Speed</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <i class="fas fa-file-pdf text-red-500 mr-3"></i>
                                <div class="text-sm font-medium text-gray-900">Annual_Report_2024.pdf</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-6 w-6 rounded-full bg-blue-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">SJ</span>
                                </div>
                                <div class="ml-2 text-sm text-gray-900">Sarah Johnson</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            15.2 MB
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">100%</div>
                                <div class="w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            2.4 MB/s
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Dec 14, 2024 3:45 PM
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-900" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900" title="Share">
                                    <i class="fas fa-share"></i>
                                </button>
                                <button class="text-gray-600 hover:text-gray-900" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <i class="fas fa-file-image text-purple-500 mr-3"></i>
                                <div class="text-sm font-medium text-gray-900">Design_Assets.zip</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-6 w-6 rounded-full bg-green-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">MC</span>
                                </div>
                                <div class="ml-2 text-sm text-gray-900">Michael Chen</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            45.8 MB
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">75%</div>
                                <div class="w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            1.8 MB/s
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Dec 14, 2024 3:30 PM
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                In Progress
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-red-600 hover:text-red-900" title="Cancel">
                                    <i class="fas fa-stop"></i>
                                </button>
                                <button class="text-gray-600 hover:text-gray-900" title="Pause">
                                    <i class="fas fa-pause"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <i class="fas fa-file-video text-red-600 mr-3"></i>
                                <div class="text-sm font-medium text-gray-900">Demo_Video.mp4</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-6 w-6 rounded-full bg-purple-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">ED</span>
                                </div>
                                <div class="ml-2 text-sm text-gray-900">Emma Davis</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            89.3 MB
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">25%</div>
                                <div class="w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 25%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            0.8 MB/s
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Dec 14, 2024 3:15 PM
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                In Progress
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-red-600 hover:text-red-900" title="Cancel">
                                    <i class="fas fa-stop"></i>
                                </button>
                                <button class="text-gray-600 hover:text-gray-900" title="Pause">
                                    <i class="fas fa-pause"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <i class="fas fa-file-excel text-green-600 mr-3"></i>
                                <div class="text-sm font-medium text-gray-900">Budget_Tracker.xlsx</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-6 w-6 rounded-full bg-orange-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">RK</span>
                                </div>
                                <div class="ml-2 text-sm text-gray-900">Robert Kim</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            324 KB
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm text-gray-900 mr-2">100%</div>
                                <div class="w-16 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            3.2 MB/s
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Dec 14, 2024 2:45 PM
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-900" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900" title="Share">
                                    <i class="fas fa-share"></i>
                                </button>
                                <button class="text-gray-600 hover:text-gray-900" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="px-6 py-4 flex items-center justify-between border-t border-gray-200 sm:px-6">
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
                        <span class="font-medium">89</span> results
                    </p>
                    <div class="flex items-center space-x-2">
                        <button class="text-sm text-blue-600 hover:text-blue-900">
                            <i class="fas fa-pause mr-1"></i>Pause All
                        </button>
                        <button class="text-sm text-red-600 hover:text-red-900">
                            <i class="fas fa-stop mr-1"></i>Cancel All
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
                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-50 text-sm font-medium text-gray-700">...</span>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">9</a>
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
