@extends('layouts.app')

@section('title', 'My Dashboard')
@section('page-title', 'My Dashboard')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Welcome Header -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg shadow-lg p-8 mb-8 text-white">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold mb-2">Welcome back, John!</h1>
                <p class="text-blue-100">Track your projects and stay updated with the latest progress</p>
            </div>
            <div class="hidden md:block">
                <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4">
                    <p class="text-sm text-blue-100">Active Projects</p>
                    <p class="text-3xl font-bold">3</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-folder-open text-blue-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Projects</p>
                    <p class="text-2xl font-bold text-gray-900">5</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-spinner text-yellow-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">In Progress</p>
                    <p class="text-2xl font-bold text-gray-900">3</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Completed</p>
                    <p class="text-2xl font-bold text-gray-900">2</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-envelope text-purple-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Unread Messages</p>
                    <p class="text-2xl font-bold text-gray-900">2</p>
                </div>
            </div>
        </div>
    </div>

    <!-- My Projects -->
    <div class="bg-white rounded-lg shadow mb-8">
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">My Projects</h2>
                <a href="{{ route('client.projects') }}" class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
        <div class="p-6 space-y-4">
            <!-- Project Card -->
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">School Management System</h3>
                        <p class="text-sm text-gray-600">Web Application</p>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                        🧪 Testing
                    </span>
                </div>
                
                <!-- Progress Bar -->
                <div class="mb-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-gray-600">Progress</span>
                        <span class="text-sm font-medium text-gray-900">75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full" style="width: 75%"></div>
                    </div>
                </div>
                
                <!-- Project Info -->
                <div class="grid grid-cols-3 gap-4 text-sm">
                    <div>
                        <p class="text-gray-600">Price</p>
                        <p class="font-medium text-gray-900">$5,000</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Timeline</p>
                        <p class="font-medium text-gray-900">Mar 1-30</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Days Left</p>
                        <p class="font-medium text-orange-600">5 days</p>
                    </div>
                </div>
                
                <!-- Actions -->
                <div class="flex space-x-3 mt-4">
                    <a href="{{ route('client.projects.show', 1) }}" class="flex-1 bg-blue-600 text-white text-center py-2 rounded-lg hover:bg-blue-700">
                        View Details
                    </a>
                    <a href="#" class="flex-1 border border-gray-300 text-gray-700 text-center py-2 rounded-lg hover:bg-gray-50">
                        Send Message
                    </a>
                </div>
            </div>
            
            <!-- Another Project Card -->
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">Mobile Banking App</h3>
                        <p class="text-sm text-gray-600">iOS & Android Application</p>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        🔵 In Progress
                    </span>
                </div>
                
                <!-- Progress Bar -->
                <div class="mb-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-gray-600">Progress</span>
                        <span class="text-sm font-medium text-gray-900">45%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full" style="width: 45%"></div>
                    </div>
                </div>
                
                <!-- Project Info -->
                <div class="grid grid-cols-3 gap-4 text-sm">
                    <div>
                        <p class="text-gray-600">Price</p>
                        <p class="font-medium text-gray-900">$8,000</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Timeline</p>
                        <p class="font-medium text-gray-900">Mar 15-Apr 30</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Days Left</p>
                        <p class="font-medium text-green-600">25 days</p>
                    </div>
                </div>
                
                <!-- Actions -->
                <div class="flex space-x-3 mt-4">
                    <a href="{{ route('client.projects.show', 2) }}" class="flex-1 bg-blue-600 text-white text-center py-2 rounded-lg hover:bg-blue-700">
                        View Details
                    </a>
                    <a href="#" class="flex-1 border border-gray-300 text-gray-700 text-center py-2 rounded-lg hover:bg-gray-50">
                        Send Message
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Recent Activity</h2>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <!-- Activity Item -->
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-blue-100 rounded-lg">
                        <i class="fas fa-code text-blue-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">
                            <span class="font-medium">Development phase completed</span> for School Management System
                        </p>
                        <p class="text-xs text-gray-500 mt-1">2 days ago</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-green-100 rounded-lg">
                        <i class="fas fa-check text-green-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">
                            <span class="font-medium">Milestone achieved:</span> User authentication system implemented
                        </p>
                        <p class="text-xs text-gray-500 mt-1">3 days ago</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-3">
                    <div class="p-2 bg-purple-100 rounded-lg">
                        <i class="fas fa-comment text-purple-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-900">
                            <span class="font-medium">New message</span> from project manager about Mobile Banking App
                        </p>
                        <p class="text-xs text-gray-500 mt-1">5 days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
