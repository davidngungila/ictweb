@extends('admin.layouts.app')

@section('title', 'Project Details')
@section('page-title', 'Project Details')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Project Header -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-vial text-orange-600 text-xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">School Management System</h1>
                    <p class="text-gray-600">Web Application for ABC School</p>
                </div>
            </div>
            <div class="flex space-x-3">
                <a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                    <i class="fas fa-edit mr-2"></i>
                    Edit Project
                </a>
                <a href="#" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    <i class="fas fa-file-invoice mr-2"></i>
                    Generate Invoice
                </a>
            </div>
        </div>
    </div>

    <!-- Project Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Client Info -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Client Information</h3>
            <div class="space-y-3">
                <div>
                    <p class="text-sm text-gray-600">Name</p>
                    <p class="font-medium text-gray-900">John Doe</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Company</p>
                    <p class="font-medium text-gray-900">ABC School</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Email</p>
                    <p class="font-medium text-gray-900">john@abcschool.com</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Phone</p>
                    <p class="font-medium text-gray-900">+1 234 567 8900</p>
                </div>
            </div>
        </div>

        <!-- Project Details -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Project Details</h3>
            <div class="space-y-3">
                <div>
                    <p class="text-sm text-gray-600">Service</p>
                    <p class="font-medium text-gray-900">Web Development</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Price</p>
                    <p class="font-medium text-gray-900">$5,000</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Priority</p>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        Medium
                    </span>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Project Manager</p>
                    <p class="font-medium text-gray-900">Admin User</p>
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Timeline</h3>
            <div class="space-y-3">
                <div>
                    <p class="text-sm text-gray-600">Start Date</p>
                    <p class="font-medium text-gray-900">March 1, 2024</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">End Date</p>
                    <p class="font-medium text-gray-900">March 30, 2024</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Days Remaining</p>
                    <p class="font-medium text-orange-600">5 days</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Status</p>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                        🧪 Testing
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Progress Section -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Project Progress</h3>
        
        <!-- Progress Overview -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm font-medium text-gray-700">Overall Progress</span>
                <span class="text-sm font-medium text-gray-900">75%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-3">
                <div class="bg-gradient-to-r from-blue-500 to-green-500 h-3 rounded-full" style="width: 75%"></div>
            </div>
        </div>

        <!-- Project Stages -->
        <div class="grid grid-cols-1 md:grid-cols-7 gap-4">
            <div class="text-center">
                <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-check text-white"></i>
                </div>
                <p class="text-xs font-medium text-gray-900">Planning</p>
                <p class="text-xs text-gray-500">Completed</p>
            </div>
            
            <div class="text-center">
                <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-check text-white"></i>
                </div>
                <p class="text-xs font-medium text-gray-900">Design</p>
                <p class="text-xs text-gray-500">Completed</p>
            </div>
            
            <div class="text-center">
                <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-check text-white"></i>
                </div>
                <p class="text-xs font-medium text-gray-900">Development</p>
                <p class="text-xs text-gray-500">Completed</p>
            </div>
            
            <div class="text-center">
                <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-2 animate-pulse">
                    <i class="fas fa-spinner text-white"></i>
                </div>
                <p class="text-xs font-medium text-gray-900">Testing</p>
                <p class="text-xs text-gray-500">In Progress</p>
            </div>
            
            <div class="text-center">
                <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-rocket text-gray-500"></i>
                </div>
                <p class="text-xs font-medium text-gray-900">Deployment</p>
                <p class="text-xs text-gray-500">Pending</p>
            </div>
        </div>
    </div>

    <!-- Tasks and Messages -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Tasks -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">Tasks</h3>
                    <button class="text-blue-600 hover:text-blue-900">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="p-6 space-y-4">
                <!-- Task Item -->
                <div class="flex items-start space-x-3 p-3 bg-gray-50 rounded-lg">
                    <input type="checkbox" checked class="mt-1 rounded text-blue-600">
                    <div class="flex-1">
                        <p class="font-medium text-gray-900 line-through">Setup database schema</p>
                        <p class="text-sm text-gray-500">Completed on March 15, 2024</p>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Completed
                    </span>
                </div>
                
                <div class="flex items-start space-x-3 p-3 bg-gray-50 rounded-lg">
                    <input type="checkbox" class="mt-1 rounded text-blue-600">
                    <div class="flex-1">
                        <p class="font-medium text-gray-900">Implement user authentication</p>
                        <p class="text-sm text-gray-500">Due March 28, 2024</p>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        In Progress
                    </span>
                </div>
                
                <div class="flex items-start space-x-3 p-3 bg-gray-50 rounded-lg">
                    <input type="checkbox" class="mt-1 rounded text-blue-600">
                    <div class="flex-1">
                        <p class="font-medium text-gray-900">Write unit tests</p>
                        <p class="text-sm text-gray-500">Due March 30, 2024</p>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                        Todo
                    </span>
                </div>
            </div>
        </div>

        <!-- Messages -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">Messages</h3>
                    <button class="text-blue-600 hover:text-blue-900">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="p-6 space-y-4 max-h-96 overflow-y-auto">
                <!-- Message -->
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-100 rounded-lg p-3">
                            <p class="text-sm text-gray-900">Hi team, any updates on the testing phase?</p>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">John Doe - 2 hours ago</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-3 flex-row-reverse">
                    <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <div class="bg-blue-600 text-white rounded-lg p-3">
                            <p class="text-sm">Testing is going well! We've fixed 3 bugs and expect to complete by Friday.</p>
                        </div>
                        <p class="text-xs text-gray-500 mt-1 text-right">Admin - 1 hour ago</p>
                    </div>
                </div>
            </div>
            
            <!-- Message Input -->
            <div class="p-4 border-t border-gray-200">
                <div class="flex space-x-3">
                    <input type="text" placeholder="Type your message..." class="flex-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
