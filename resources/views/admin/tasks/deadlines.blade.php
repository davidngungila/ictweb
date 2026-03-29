@extends('admin.layouts.app')

@section('page-title', 'Deadlines')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Deadlines</h1>
        <p class="text-gray-600 mt-1">Track and manage project deadlines and milestones</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>
            New Deadline
        </button>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center">
            <i class="fas fa-calendar-alt mr-2"></i>
            Set Milestone
        </button>
        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center">
            <i class="fas fa-bell mr-2"></i>
            Reminders
        </button>
        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center">
            <i class="fas fa-cog mr-2"></i>
            Settings
        </button>
    </div>

    <!-- Deadline Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-calendar text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Deadlines</p>
                    <p class="text-2xl font-bold text-gray-900">47</p>
                    <p class="text-xs text-gray-600">This month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 rounded-lg">
                    <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Overdue</p>
                    <p class="text-2xl font-bold text-gray-900">8</p>
                    <p class="text-xs text-red-600">Requires attention</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-clock text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Due This Week</p>
                    <p class="text-2xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-orange-600">Upcoming</p>
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
                    <p class="text-2xl font-bold text-gray-900">27</p>
                    <p class="text-xs text-green-600">On time</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar View Toggle -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <h2 class="text-lg font-semibold text-gray-900">Deadline Calendar</h2>
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm">Month</button>
                    <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md text-sm hover:bg-gray-300">Week</button>
                    <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md text-sm hover:bg-gray-300">List</button>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <span class="text-sm font-medium text-gray-900">March 2024</span>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Calendar Grid -->
        <div class="grid grid-cols-7 gap-1 mt-4">
            <!-- Days of week -->
            <div class="text-center text-xs font-medium text-gray-500 py-2">Sun</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">Mon</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">Tue</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">Wed</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">Thu</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">Fri</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">Sat</div>

            <!-- Calendar days -->
            <div class="border border-gray-200 rounded p-2 min-h-[80px] bg-gray-50">
                <div class="text-sm text-gray-400">25</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px] bg-gray-50">
                <div class="text-sm text-gray-400">26</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px] bg-gray-50">
                <div class="text-sm text-gray-400">27</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px] bg-gray-50">
                <div class="text-sm text-gray-400">28</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px] bg-gray-50">
                <div class="text-sm text-gray-400">29</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">1</div>
                <div class="mt-1">
                    <div class="w-full h-1 bg-blue-500 rounded"></div>
                    <div class="text-xs text-blue-600 mt-1">Project Start</div>
                </div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">2</div>
            </div>

            <!-- More calendar days... -->
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">3</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">4</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">5</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">6</div>
                <div class="mt-1">
                    <div class="w-full h-1 bg-green-500 rounded"></div>
                    <div class="text-xs text-green-600 mt-1">Design Review</div>
                </div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">7</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">8</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">9</div>
            </div>

            <!-- Today -->
            <div class="border-2 border-blue-500 rounded p-2 min-h-[80px] bg-blue-50">
                <div class="text-sm font-bold text-blue-900">10</div>
                <div class="text-xs text-blue-600">Today</div>
                <div class="mt-1">
                    <div class="w-full h-1 bg-orange-500 rounded"></div>
                    <div class="text-xs text-orange-600 mt-1">Sprint Review</div>
                </div>
            </div>

            <!-- Continue with more days... -->
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">11</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">12</div>
                <div class="mt-1">
                    <div class="w-full h-1 bg-purple-500 rounded"></div>
                    <div class="text-xs text-purple-600 mt-1">Client Meeting</div>
                </div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">13</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">14</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">15</div>
                <div class="mt-1">
                    <div class="w-full h-1 bg-red-500 rounded"></div>
                    <div class="text-xs text-red-600 mt-1">Payment Fix</div>
                </div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">16</div>
            </div>
            <div class="border border-gray-200 rounded p-2 min-h-[80px]">
                <div class="text-sm font-medium text-gray-900">17</div>
            </div>
        </div>
    </div>

    <!-- Upcoming Deadlines -->
    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900">Upcoming Deadlines</h2>
                <div class="flex items-center space-x-2">
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-filter"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="divide-y divide-gray-200">
            <!-- Overdue Deadline -->
            <div class="p-6 hover:bg-gray-50 bg-red-50 border-l-4 border-red-500">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-red-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Payment Gateway Integration</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Overdue
                                </span>
                                <span class="text-xs text-red-600">10 days overdue</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Fix critical payment processing issues in the e-commerce platform. This affects all transactions and revenue generation.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-folder mr-1"></i>E-commerce Platform</span>
                                <span><i class="fas fa-user mr-1"></i>Tom Brown</span>
                                <span><i class="fas fa-priority-high mr-1"></i>Critical</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">
                                    Take Action
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Reschedule
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Due Today -->
            <div class="p-6 hover:bg-gray-50 bg-orange-50 border-l-4 border-orange-500">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-clock text-orange-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Sprint Review Meeting</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                    Due Today
                                </span>
                                <span class="text-xs text-gray-500">2:00 PM</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Weekly sprint review to discuss progress, blockers, and plan next sprint activities with the development team.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-folder mr-1"></i>E-commerce Platform</span>
                                <span><i class="fas fa-users mr-1"></i>Team Meeting</span>
                                <span><i class="fas fa-priority-high mr-1"></i>High</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-orange-600 text-white px-3 py-1 rounded text-sm hover:bg-orange-700">
                                    Join Meeting
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Due Tomorrow -->
            <div class="p-6 hover:bg-gray-50 bg-yellow-50 border-l-4 border-yellow-500">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-calendar-day text-yellow-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Client Presentation</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Due Tomorrow
                                </span>
                                <span class="text-xs text-gray-500">Mar 11, 10:00 AM</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Present the mobile banking app prototype to the client for review and feedback on the current progress.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-folder mr-1"></i>Mobile Banking App</span>
                                <span><i class="fas fa-user mr-1"></i>Emma Davis</span>
                                <span><i class="fas fa-priority-high mr-1"></i>High</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-yellow-600 text-white px-3 py-1 rounded text-sm hover:bg-yellow-700">
                                    Prepare
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Due This Week -->
            <div class="p-6 hover:bg-gray-50">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-calendar-week text-blue-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Database Migration</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Due This Week
                                </span>
                                <span class="text-xs text-gray-500">Mar 15, 11:59 PM</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Complete the database migration from the old system to the new infrastructure. Critical for system stability.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-folder mr-1"></i>CRM System</span>
                                <span><i class="fas fa-user mr-1"></i>Mike Wilson</span>
                                <span><i class="fas fa-priority-high mr-1"></i>High</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                                    Track Progress
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Due Next Week -->
            <div class="p-6 hover:bg-gray-50">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-calendar text-purple-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Analytics Dashboard Launch</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                    Due Next Week
                                </span>
                                <span class="text-xs text-gray-500">Mar 18, 9:00 AM</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Launch the new analytics dashboard for internal use. Includes real-time data visualization and reporting features.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-folder mr-1"></i>Analytics Dashboard</span>
                                <span><i class="fas fa-user mr-1"></i>David Kim</span>
                                <span><i class="fas fa-priority-medium mr-1"></i>Medium</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-purple-600 text-white px-3 py-1 rounded text-sm hover:bg-purple-700">
                                    Review Progress
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Due Next Month -->
            <div class="p-6 hover:bg-gray-50">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-green-600"></i>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-medium text-gray-900">Q2 Planning Session</h3>
                            <div class="flex items-center space-x-2">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Due Next Month
                                </span>
                                <span class="text-xs text-gray-500">Apr 1, 2:00 PM</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-3">
                            Quarterly planning session to set goals, objectives, and milestones for Q2 2024. All team leads required to attend.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-xs text-gray-500">
                                <span><i class="fas fa-folder mr-1"></i>Company Planning</span>
                                <span><i class="fas fa-users mr-1"></i>All Teams</span>
                                <span><i class="fas fa-priority-medium mr-1"></i>Medium</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">
                                    Schedule
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm hover:bg-gray-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deadline Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Deadline Distribution -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Deadline Distribution</h2>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Overdue</p>
                        <p class="text-sm font-medium text-gray-900">8 (17%)</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-red-600 h-2 rounded-full" style="width: 17%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">This Week</p>
                        <p class="text-sm font-medium text-gray-900">12 (25%)</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-orange-600 h-2 rounded-full" style="width: 25%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Next Week</p>
                        <p class="text-sm font-medium text-gray-900">15 (32%)</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-yellow-600 h-2 rounded-full" style="width: 32%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Later</p>
                        <p class="text-sm font-medium text-gray-900">12 (26%)</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 26%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Priority Breakdown -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Priority Breakdown</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-exclamation-triangle text-red-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Critical</p>
                            <p class="text-xs text-gray-500">Immediate action required</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">5</p>
                        <p class="text-xs text-red-600">11%</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-arrow-up text-orange-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">High</p>
                            <p class="text-xs text-gray-500">High priority tasks</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">18</p>
                        <p class="text-xs text-orange-600">38%</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-minus text-yellow-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Medium</p>
                            <p class="text-xs text-gray-500">Standard priority</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">16</p>
                        <p class="text-xs text-yellow-600">34%</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-arrow-down text-green-600 text-xs"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Low</p>
                        <p class="text-xs text-gray-500">Low priority tasks</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">8</p>
                        <p class="text-xs text-green-600">17%</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Deadlines -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Team Deadlines</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=Tom+Brown&background=F59E0B&color=fff" alt="Tom Brown" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Tom Brown</p>
                            <p class="text-xs text-gray-500">3 deadlines this week</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">1 overdue</p>
                        <p class="text-xs text-red-600">Action needed</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=8B5CF6&color=fff" alt="Emma Davis" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Emma Davis</p>
                            <p class="text-xs text-gray-500">2 deadlines this week</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">On track</p>
                        <p class="text-xs text-green-600">All on schedule</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=Mike+Wilson&background=EF4444&color=fff" alt="Mike Wilson" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Mike Wilson</p>
                            <p class="text-xs text-gray-500">4 deadlines this week</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">1 at risk</p>
                        <p class="text-xs text-orange-600">Monitor closely</p>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=David+Kim&background=059669&color=fff" alt="David Kim" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <p class="text-sm font-medium text-gray-900">David Kim</p>
                            <p class="text-xs text-gray-500">1 deadline this week</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-gray-900">On track</p>
                        <p class="text-xs text-green-600">Good progress</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
