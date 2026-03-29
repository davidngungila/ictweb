@extends('admin.layouts.app')

@section('title', 'My Projects')
@section('page-title', 'My Projects')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">My Projects</h1>
            <p class="text-gray-600 mt-1">Manage and track all your client projects</p>
        </div>
        <div class="flex space-x-3">
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    New Project
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
                            <i class="fas fa-laptop-code mr-2"></i>Web Development
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-mobile-alt mr-2"></i>Mobile App
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-paint-brush mr-2"></i>Design Project
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-cog mr-2"></i>Consulting
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-rocket mr-2"></i>Custom Solution
                        </a>
                    </div>
                </div>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-filter mr-2"></i>
                Filter
            </button>
        </div>
    </div>

    <!-- Project Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Projects</p>
                    <p class="text-2xl font-bold text-gray-900">24</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 3 new this month
                    </p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-folder text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">In Progress</p>
                    <p class="text-2xl font-bold text-gray-900">8</p>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-clock"></i> Active work
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-spinner text-yellow-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Completed</p>
                    <p class="text-2xl font-bold text-gray-900">14</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-check"></i> Delivered
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
                    <p class="text-sm text-gray-600">Avg. Duration</p>
                    <p class="text-2xl font-bold text-gray-900">45d</p>
                    <p class="text-xs text-gray-600 mt-1">
                        <i class="fas fa-calendar"></i> Days
                    </p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-clock text-purple-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search projects..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full lg:w-64">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Status</option>
                    <option value="planning">Planning</option>
                    <option value="in-progress">In Progress</option>
                    <option value="review">Review</option>
                    <option value="completed">Completed</option>
                    <option value="on-hold">On Hold</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Types</option>
                    <option value="web">Web Development</option>
                    <option value="mobile">Mobile App</option>
                    <option value="design">Design</option>
                    <option value="consulting">Consulting</option>
                    <option value="other">Other</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Time Period</option>
                    <option value="this-week">This Week</option>
                    <option value="this-month">This Month</option>
                    <option value="last-month">Last Month</option>
                    <option value="this-year">This Year</option>
                </select>
            </div>
            
            <div class="flex space-x-2">
                <button class="text-gray-500 hover:text-gray-700" title="Grid View">
                    <i class="fas fa-th"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="List View">
                    <i class="fas fa-list"></i>
                </button>
                <button class="text-gray-500 hover:text-gray-700" title="Export">
                    <i class="fas fa-download"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Project Card 1 -->
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-blue-100 rounded-lg">
                        <i class="fas fa-laptop-code text-blue-600 text-lg"></i>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        In Progress
                    </span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">E-commerce Platform</h3>
                <p class="text-sm text-gray-600 mb-4">Full-featured online shopping platform with payment integration and inventory management.</p>
                
                <div class="space-y-3">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Progress</span>
                        <span class="text-gray-900">75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: 75%"></div>
                    </div>
                    
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Timeline</span>
                        <span class="text-gray-900">45 days</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                
                <div class="mt-4 flex items-center justify-between">
                    <div class="flex -space-x-2">
                        <div class="h-6 w-6 rounded-full bg-blue-500 border-2 border-white flex items-center justify-center">
                            <span class="text-white text-xs font-medium">SJ</span>
                        </div>
                        <div class="h-6 w-6 rounded-full bg-green-500 border-2 border-white flex items-center justify-center">
                            <span class="text-white text-xs font-medium">MC</span>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500">
                        Last updated: 2 days ago
                    </div>
                </div>
            </div>
            <div class="px-6 py-3 bg-gray-50 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <button class="text-blue-600 text-sm hover:text-blue-700">View Details</button>
                    <div class="flex space-x-2">
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-share"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Card 2 -->
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-green-100 rounded-lg">
                        <i class="fas fa-mobile-alt text-green-600 text-lg"></i>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        Review
                    </span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Mobile Banking App</h3>
                <p class="text-sm text-gray-600 mb-4">iOS and Android banking application with secure transactions and real-time notifications.</p>
                
                <div class="space-y-3">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Progress</span>
                        <span class="text-gray-900">95%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: 95%"></div>
                    </div>
                    
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Timeline</span>
                        <span class="text-gray-900">60 days</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                    </div>
                </div>
                
                <div class="mt-4 flex items-center justify-between">
                    <div class="flex -space-x-2">
                        <div class="h-6 w-6 rounded-full bg-purple-500 border-2 border-white flex items-center justify-center">
                            <span class="text-white text-xs font-medium">ED</span>
                        </div>
                        <div class="h-6 w-6 rounded-full bg-orange-500 border-2 border-white flex items-center justify-center">
                            <span class="text-white text-xs font-medium">RK</span>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500">
                        Last updated: 1 day ago
                    </div>
                </div>
            </div>
            <div class="px-6 py-3 bg-gray-50 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <button class="text-blue-600 text-sm hover:text-blue-700">View Details</button>
                    <div class="flex space-x-2">
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-share"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Card 3 -->
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-purple-100 rounded-lg">
                        <i class="fas fa-paint-brush text-purple-600 text-lg"></i>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Completed
                    </span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Brand Redesign</h3>
                <p class="text-sm text-gray-600 mb-4">Complete brand identity redesign including logo, color palette, and marketing materials.</p>
                
                <div class="space-y-3">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Progress</span>
                        <span class="text-gray-900">100%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                    </div>
                    
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Timeline</span>
                        <span class="text-gray-900">30 days</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                    </div>
                </div>
                
                <div class="mt-4 flex items-center justify-between">
                    <div class="flex -space-x-2">
                        <div class="h-6 w-6 rounded-full bg-pink-500 border-2 border-white flex items-center justify-center">
                            <span class="text-white text-xs font-medium">LM</span>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500">
                        Completed: 1 week ago
                    </div>
                </div>
            </div>
            <div class="px-6 py-3 bg-gray-50 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <button class="text-blue-600 text-sm hover:text-blue-700">View Details</button>
                    <div class="flex space-x-2">
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-download"></i>
                        </button>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-share"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 mt-6">
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">9</span> of{' '}
                    <span class="font-medium">24</span> results
                </p>
                <div class="flex items-center space-x-2">
                    <button class="text-sm text-blue-600 hover:text-blue-900">
                        <i class="fas fa-edit mr-1"></i>Bulk Edit
                    </button>
                    <button class="text-sm text-green-600 hover:text-green-900">
                        <i class="fas fa-download mr-1"></i>Export Selected
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
@endsection
