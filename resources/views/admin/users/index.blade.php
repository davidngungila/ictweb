@extends('admin.layouts.app')

@section('title', 'User Management - Admin Panel')
@section('page-title', 'User Management')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">User Management</h1>
                <p class="mt-1 text-sm text-gray-600">Manage admin users and permissions</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-green-700">
                    <i class="fas fa-user-plus mr-2"></i>Add Admin User
                </button>
            </div>
        </div>
    </div>

    <!-- User Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <i class="fas fa-users text-blue-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Admin Users</p>
                    <p class="text-2xl font-semibold text-gray-900">3</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Active Users</p>
                    <p class="text-2xl font-semibold text-gray-900">2</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-full">
                    <i class="fas fa-crown text-purple-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Super Admins</p>
                    <p class="text-2xl font-semibold text-gray-900">1</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Users Table -->
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="min-w-full divide-y divide-gray-200">
            <div class="bg-gray-50 px-6 py-3">
                <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium text-gray-900">
                        Admin Users
                    </h3>
                </div>
            </div>
            
            <div class="bg-white divide-y divide-gray-200">
                <!-- User 1 - Super Admin -->
                <div class="hover:bg-gray-50">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center space-x-4">
                                    <div>
                                        <div class="flex items-center space-x-3">
                                            <h4 class="text-sm font-medium text-gray-900">Super Admin</h4>
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">
                                                Super Admin
                                            </span>
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        </div>
                                        <p class="text-sm text-gray-500">admin@jezdantech.com</p>
                                    </div>
                                </div>
                                
                                <div class="mt-2 flex items-center space-x-6 text-sm text-gray-500">
                                    <span>
                                        <i class="fas fa-calendar mr-1"></i>
                                        Created: Jan 1, 2024
                                    </span>
                                    <span>
                                        <i class="fas fa-sign-in-alt mr-1"></i>
                                        Last login: Today at 2:30 PM
                                    </span>
                                    <span>
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        IP: 192.168.1.100
                                    </span>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                    Edit
                                </button>
                                <button class="text-gray-600 hover:text-gray-900 text-sm font-medium">
                                    Reset Password
                                </button>
                                <button class="text-red-600 hover:text-red-900 text-sm font-medium" disabled>
                                    Deactivate
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User 2 - Regular Admin -->
                <div class="hover:bg-gray-50">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center space-x-4">
                                    <div>
                                        <div class="flex items-center space-x-3">
                                            <h4 class="text-sm font-medium text-gray-900">John Manager</h4>
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                                Admin
                                            </span>
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        </div>
                                        <p class="text-sm text-gray-500">john@jezdantech.com</p>
                                    </div>
                                </div>
                                
                                <div class="mt-2 flex items-center space-x-6 text-sm text-gray-500">
                                    <span>
                                        <i class="fas fa-calendar mr-1"></i>
                                        Created: Feb 15, 2024
                                    </span>
                                    <span>
                                        <i class="fas fa-sign-in-alt mr-1"></i>
                                        Last login: Yesterday at 4:15 PM
                                    </span>
                                    <span>
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        IP: 192.168.1.101
                                    </span>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                    Edit
                                </button>
                                <button class="text-gray-600 hover:text-gray-900 text-sm font-medium">
                                    Reset Password
                                </button>
                                <button class="text-orange-600 hover:text-orange-900 text-sm font-medium">
                                    Deactivate
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User 3 - Inactive Admin -->
                <div class="hover:bg-gray-50">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center space-x-4">
                                    <div>
                                        <div class="flex items-center space-x-3">
                                            <h4 class="text-sm font-medium text-gray-900">Sarah Assistant</h4>
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                                Admin
                                            </span>
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                                Inactive
                                            </span>
                                        </div>
                                        <p class="text-sm text-gray-500">sarah@jezdantech.com</p>
                                    </div>
                                </div>
                                
                                <div class="mt-2 flex items-center space-x-6 text-sm text-gray-500">
                                    <span>
                                        <i class="fas fa-calendar mr-1"></i>
                                        Created: Mar 1, 2024
                                    </span>
                                    <span>
                                        <i class="fas fa-sign-in-alt mr-1"></i>
                                        Last login: 2 weeks ago
                                    </span>
                                    <span>
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        IP: 192.168.1.102
                                    </span>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                    Edit
                                </button>
                                <button class="text-gray-600 hover:text-gray-900 text-sm font-medium">
                                    Reset Password
                                </button>
                                <button class="text-green-600 hover:text-green-900 text-sm font-medium">
                                    Activate
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Permissions Overview -->
    <div class="mt-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Role Permissions</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Super Admin Permissions -->
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="text-md font-semibold text-gray-900 mb-3">Super Admin</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Full system access
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                User management
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Financial management
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                System settings
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Content management
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Admin Permissions -->
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="text-md font-semibold text-gray-900 mb-3">Admin</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Dashboard access
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Demo request management
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Contact management
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Basic financial reporting
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-times text-red-500 mr-2"></i>
                                User management (limited)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
