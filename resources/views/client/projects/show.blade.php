@extends('layouts.app')

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
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-comment mr-2"></i>
                    Contact Team
                </button>
                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    <i class="fas fa-download mr-2"></i>
                    Download Files
                </button>
            </div>
        </div>
    </div>

    <!-- Project Progress -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <h2 class="text-lg font-semibold text-gray-900 mb-6">Project Progress</h2>
        
        <!-- Overall Progress -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm font-medium text-gray-700">Overall Progress</span>
                <span class="text-sm font-medium text-gray-900">75%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-3">
                <div class="bg-gradient-to-r from-blue-500 to-green-500 h-3 rounded-full" style="width: 75%"></div>
            </div>
            <p class="text-sm text-gray-600 mt-2">Great progress! Your project is in the testing phase.</p>
        </div>

        <!-- Project Timeline -->
        <div class="space-y-4">
            <h3 class="text-md font-medium text-gray-900">Project Timeline</h3>
            
            <div class="space-y-3">
                <!-- Completed Stage -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                    </div>
                    <div class="flex-1">
                        <div class="bg-green-50 border border-green-200 rounded-lg p-3">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium text-gray-900">Planning</p>
                                    <p class="text-sm text-gray-600">Requirements gathering and project setup</p>
                                </div>
                                <span class="text-xs text-green-600">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Completed Stage -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                    </div>
                    <div class="flex-1">
                        <div class="bg-green-50 border border-green-200 rounded-lg p-3">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium text-gray-900">Design</p>
                                    <p class="text-sm text-gray-600">UI/UX design and mockups</p>
                                </div>
                                <span class="text-xs text-green-600">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Completed Stage -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                    </div>
                    <div class="flex-1">
                        <div class="bg-green-50 border border-green-200 rounded-lg p-3">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium text-gray-900">Development</p>
                                    <p class="text-sm text-gray-600">Core functionality implementation</p>
                                </div>
                                <span class="text-xs text-green-600">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Current Stage -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center animate-pulse">
                        <i class="fas fa-spinner text-white"></i>
                    </div>
                    <div class="flex-1">
                        <div class="bg-orange-50 border border-orange-200 rounded-lg p-3">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium text-gray-900">Testing 🧪</p>
                                    <p class="text-sm text-gray-600">Quality assurance and bug fixing</p>
                                </div>
                                <span class="text-xs text-orange-600">In Progress</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Stage -->
                <div class="flex items-center space-x-3 opacity-60">
                    <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                        <i class="fas fa-clock text-gray-500"></i>
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-3">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium text-gray-900">Deployment 🚀</p>
                                    <p class="text-sm text-gray-600">Launch and go-live</p>
                                </div>
                                <span class="text-xs text-gray-500">Upcoming</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Details -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Project Info -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Project Information</h3>
            <div class="space-y-3">
                <div>
                    <p class="text-sm text-gray-600">Service Type</p>
                    <p class="font-medium text-gray-900">Web Development</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Total Price</p>
                    <p class="font-medium text-gray-900">$5,000</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Start Date</p>
                    <p class="font-medium text-gray-900">March 1, 2024</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Expected Completion</p>
                    <p class="font-medium text-gray-900">March 30, 2024</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Project Manager</p>
                    <p class="font-medium text-gray-900">Admin User</p>
                </div>
            </div>
        </div>

        <!-- Deliverables -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Project Deliverables</h3>
            <div class="space-y-3">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span class="text-sm text-gray-900">Responsive web application</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span class="text-sm text-gray-900">Admin dashboard</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span class="text-sm text-gray-900">Student management system</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span class="text-sm text-gray-900">Grade reporting system</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-spinner text-orange-500"></i>
                    <span class="text-sm text-gray-900">Documentation and training</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Communication -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Project Communication</h3>
        </div>
        <div class="p-6">
            <!-- Messages -->
            <div class="space-y-4 mb-4 max-h-64 overflow-y-auto">
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-100 rounded-lg p-3">
                            <p class="text-sm text-gray-900">Hi team, any updates on the testing phase?</p>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">You - 2 hours ago</p>
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
                        <p class="text-xs text-gray-500 mt-1 text-right">Project Manager - 1 hour ago</p>
                    </div>
                </div>
            </div>
            
            <!-- Message Input -->
            <div class="border-t pt-4">
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
