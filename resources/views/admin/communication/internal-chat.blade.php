@extends('admin.layouts.app')

@section('page-title', 'Internal Chat')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Internal Chat</h1>
        <p class="text-gray-600 mt-1">Team communication and messaging platform</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            New Chat
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-users mr-2"></i>
            Create Group
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-video mr-2"></i>
            Start Video Call
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Chat Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-comments text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Active Chats</p>
                    <p class="text-2xl font-bold text-gray-900">24</p>
                    <p class="text-xs text-green-600">+3 from yesterday</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-users text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Team Members Online</p>
                    <p class="text-2xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-green-600">All active</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-paper-plane text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Messages Today</p>
                    <p class="text-2xl font-bold text-gray-900">156</p>
                    <p class="text-xs text-green-600">+12% from average</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-clock text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Avg Response Time</p>
                    <p class="text-2xl font-bold text-gray-900">2.3m</p>
                    <p class="text-xs text-green-600">-30s improvement</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Chat Interface -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Chat List -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow">
                <div class="p-4 border-b border-gray-200">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-900">Conversations</h2>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">24</span>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search conversations..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>
                
                <div class="divide-y divide-gray-200 max-h-96 overflow-y-auto">
                    <!-- Chat Item 1 -->
                    <div class="p-4 hover:bg-gray-50 cursor-pointer transition-colors">
                        <div class="flex items-start">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=3B82F6&color=fff" alt="John Doe" class="w-10 h-10 rounded-full">
                            <div class="ml-3 flex-1">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900">John Doe</p>
                                    <span class="text-xs text-gray-500">2m ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Hey, can you review the latest designs?</p>
                                <div class="flex items-center mt-1">
                                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                                    <span class="text-xs text-gray-500">Active now</span>
                                </div>
                            </div>
                            <div class="ml-2">
                                <span class="bg-blue-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Item 2 -->
                    <div class="p-4 hover:bg-gray-50 cursor-pointer transition-colors">
                        <div class="flex items-start">
                            <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=10B981&color=fff" alt="Sarah Smith" class="w-10 h-10 rounded-full">
                            <div class="ml-3 flex-1">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900">Sarah Smith</p>
                                    <span class="text-xs text-gray-500">15m ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">The client approved the proposal!</p>
                                <div class="flex items-center mt-1">
                                    <span class="w-2 h-2 bg-gray-400 rounded-full mr-2"></span>
                                    <span class="text-xs text-gray-500">Away</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Item 3 -->
                    <div class="p-4 hover:bg-gray-50 cursor-pointer transition-colors">
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-users text-purple-600"></i>
                            </div>
                            <div class="ml-3 flex-1">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900">Development Team</p>
                                    <span class="text-xs text-gray-500">1h ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Mike: Code review completed</p>
                                <div class="flex items-center mt-1">
                                    <span class="text-xs text-gray-500">8 members</span>
                                </div>
                            </div>
                            <div class="ml-2">
                                <span class="bg-blue-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">5</span>
                            </div>
                        </div>
                    </div>

                    <!-- More chat items... -->
                    <div class="p-4 hover:bg-gray-50 cursor-pointer transition-colors">
                        <div class="flex items-start">
                            <img src="https://ui-avatars.com/api/?name=Alex+Johnson&background=F59E0B&color=fff" alt="Alex Johnson" class="w-10 h-10 rounded-full">
                            <div class="ml-3 flex-1">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900">Alex Johnson</p>
                                    <span class="text-xs text-gray-500">2h ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Thanks for the quick response!</p>
                                <div class="flex items-center mt-1">
                                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                                    <span class="text-xs text-gray-500">Active now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Window -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow h-full">
                <!-- Chat Header -->
                <div class="p-4 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=3B82F6&color=fff" alt="John Doe" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">John Doe</p>
                                <div class="flex items-center">
                                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                                    <span class="text-xs text-gray-500">Active now</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <i class="fas fa-phone"></i>
                            </button>
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <i class="fas fa-video"></i>
                            </button>
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Messages -->
                <div class="p-4 h-96 overflow-y-auto">
                    <!-- Message 1 -->
                    <div class="flex items-start mb-4">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=3B82F6&color=fff" alt="John Doe" class="w-8 h-8 rounded-full">
                        <div class="ml-3 max-w-xs lg:max-w-md">
                            <div class="bg-gray-100 rounded-lg p-3">
                                <p class="text-sm text-gray-900">Hey, can you review the latest designs when you get a chance?</p>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">10:30 AM</p>
                        </div>
                    </div>

                    <!-- Message 2 -->
                    <div class="flex items-start mb-4 justify-end">
                        <div class="mr-3 max-w-xs lg:max-w-md">
                            <div class="bg-blue-600 text-white rounded-lg p-3">
                                <p class="text-sm">Sure! I'll take a look right now. Which designs are you referring to?</p>
                            </div>
                            <p class="text-xs text-gray-500 mt-1 text-right">10:32 AM</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Admin&background=6366F1&color=fff" alt="Admin" class="w-8 h-8 rounded-full">
                    </div>

                    <!-- Message 3 -->
                    <div class="flex items-start mb-4">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=3B82F6&color=fff" alt="John Doe" class="w-8 h-8 rounded-full">
                        <div class="ml-3 max-w-xs lg:max-w-md">
                            <div class="bg-gray-100 rounded-lg p-3">
                                <p class="text-sm text-gray-900">The homepage redesign and the dashboard mockups. They're in the shared folder.</p>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">10:33 AM</p>
                        </div>
                    </div>

                    <!-- Typing Indicator -->
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=6366F1&color=fff" alt="Admin" class="w-8 h-8 rounded-full">
                        <div class="ml-3">
                            <div class="bg-gray-100 rounded-lg p-3">
                                <div class="flex space-x-1">
                                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
                                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message Input -->
                <div class="p-4 border-t border-gray-200">
                    <div class="flex items-center space-x-2">
                        <button class="p-2 text-gray-400 hover:text-gray-600">
                            <i class="fas fa-paperclip"></i>
                        </button>
                        <input type="text" placeholder="Type a message..." class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <button class="p-2 text-gray-400 hover:text-gray-600">
                            <i class="fas fa-smile"></i>
                        </button>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
