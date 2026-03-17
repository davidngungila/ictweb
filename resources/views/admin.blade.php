@extends('admin-layout')

@section('title', 'Admin Dashboard — FeedTan Community Microfinance Group')

@section('content')
    <div class="min-h-screen bg-slate-50 flex">
        <!-- Mobile Menu Button -->
        <button id="sidebarToggle" class="lg:hidden fixed top-4 left-4 z-50 p-2 bg-slate-800 text-white rounded-lg">
            <i class="ph ph-list text-xl"></i>
        </button>

        <!-- Fixed Sidebar -->
        <aside id="sidebar" class="w-64 bg-slate-800 min-h-screen fixed left-0 top-0 z-40 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
            <div class="p-6 border-b border-slate-700">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <h1 class="text-xl font-bold text-white">Admin Dashboard</h1>
                        <span class="px-2 py-1 bg-emerald-600 text-white text-xs font-bold rounded-full">FeedTan</span>
                    </div>
                    <button id="closeSidebar" class="lg:hidden text-slate-400 hover:text-white">
                        <i class="ph ph-x text-xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Scrollable Navigation -->
            <nav class="p-4 h-[calc(100vh-88px)] overflow-y-auto">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 bg-slate-700 text-white rounded-lg">
                            <i class="ph ph-house text-xl"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                            <i class="ph ph-users text-xl"></i>
                            <span>Members</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                            <i class="ph ph-briefcase text-xl"></i>
                            <span>Loans</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                            <i class="ph ph-piggy-bank text-xl"></i>
                            <span>Savings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                            <i class="ph ph-calendar text-xl"></i>
                            <span>Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                            <i class="ph ph-article text-xl"></i>
                            <span>Articles</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                            <i class="ph ph-file-text text-xl"></i>
                            <span>Documents</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                            <i class="ph ph-chart-bar text-xl"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                            <i class="ph ph-gear text-xl"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
                
                <!-- Additional navigation items for scrolling demo -->
                <div class="mt-8 pt-8 border-t border-slate-700">
                    <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-4">System</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                                <i class="ph ph-database text-xl"></i>
                                <span>Database</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                                <i class="ph ph-backup text-xl"></i>
                                <span>Backups</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                                <i class="ph ph-shield-check text-xl"></i>
                                <span>Security</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                                <i class="ph ph-bell text-xl"></i>
                                <span>Notifications</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                                <i class="ph ph-clock-counter-clockwise text-xl"></i>
                                <span>Audit Logs</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <!-- Overlay for mobile -->
        <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden hidden"></div>

        <!-- Main Content Area -->
        <div class="flex-1 lg:ml-64">
            <!-- Fixed Header -->
            <header class="bg-slate-900 border-b border-slate-800 fixed top-0 left-0 right-0 z-30 lg:left-64">
                <div class="max-w-full px-4 sm:px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <button id="mobileSidebarToggle" class="lg:hidden text-slate-400 hover:text-white">
                                <i class="ph ph-list text-xl"></i>
                            </button>
                            <h2 class="text-lg sm:text-xl font-semibold text-white">Dashboard Overview</h2>
                        </div>
                        <div class="flex items-center gap-2 sm:gap-4">
                            <button class="text-slate-400 hover:text-white transition-colors">
                                <i class="ph ph-bell text-xl"></i>
                            </button>
                            <div class="hidden sm:flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-emerald-600 flex items-center justify-center">
                                    <span class="text-white text-sm font-bold">AD</span>
                                </div>
                                <span class="text-white text-sm">Admin User</span>
                            </div>
                            <a href="{{ url('/admin/login') }}" class="text-slate-400 hover:text-white transition-colors">
                                <i class="ph ph-sign-out text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Scrollable Main Content -->
            <main class="pt-16 sm:pt-20 p-4 sm:p-6">
                <!-- Stats Overview -->
                <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mb-6 sm:mb-8">
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-100 flex items-center justify-center">
                                <i class="ph ph-users text-emerald-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-emerald-600">+12%</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">10,247</h3>
                        <p class="text-sm text-slate-500 mt-1">Total Members</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                                <i class="ph ph-briefcase text-blue-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-blue-600">+8%</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">3,456</h3>
                        <p class="text-sm text-slate-500 mt-1">Active Loans</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                                <i class="ph ph-piggy-bank text-purple-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-purple-600">+15%</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">TZS 45M</h3>
                        <p class="text-sm text-slate-500 mt-1">Total Savings</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-amber-100 flex items-center justify-center">
                                <i class="ph ph-calendar text-amber-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-amber-600">+3</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">12</h3>
                        <p class="text-sm text-slate-500 mt-1">Upcoming Events</p>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid gap-6 lg:grid-cols-2 mb-6 sm:mb-8">
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Loan Applications Trend</h3>
                        <div class="h-48 sm:h-64 bg-slate-50 rounded-lg flex items-center justify-center">
                            <p class="text-slate-500 text-sm sm:text-base">Chart Placeholder - Loan Applications Over Time</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Revenue Overview</h3>
                        <div class="h-48 sm:h-64 bg-slate-50 rounded-lg flex items-center justify-center">
                            <p class="text-slate-500 text-sm sm:text-base">Chart Placeholder - Monthly Revenue</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="grid gap-6 lg:grid-cols-3">
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Recent Activities</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 sm:gap-4 p-3 hover:bg-slate-50 rounded-lg transition-colors">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-emerald-100 flex items-center justify-center">
                                    <i class="ph ph-check text-emerald-600 text-sm sm:text-base"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-slate-900 truncate">New loan approved</p>
                                    <p class="text-xs text-slate-500">John Doe - TZS 500,000</p>
                                </div>
                                <span class="text-xs text-slate-400 whitespace-nowrap">2 min ago</span>
                            </div>

                            <div class="flex items-center gap-3 sm:gap-4 p-3 hover:bg-slate-50 rounded-lg transition-colors">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i class="ph ph-user-plus text-blue-600 text-sm sm:text-base"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-slate-900 truncate">New member registered</p>
                                    <p class="text-xs text-slate-500">Jane Smith - Business Account</p>
                                </div>
                                <span class="text-xs text-slate-400 whitespace-nowrap">15 min ago</span>
                            </div>

                            <div class="flex items-center gap-3 sm:gap-4 p-3 hover:bg-slate-50 rounded-lg transition-colors">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-purple-100 flex items-center justify-center">
                                    <i class="ph ph-piggy-bank text-purple-600 text-sm sm:text-base"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-slate-900 truncate">Savings deposit</p>
                                    <p class="text-xs text-slate-500">Mike Johnson - TZS 50,000</p>
                                </div>
                                <span class="text-xs text-slate-400 whitespace-nowrap">1 hour ago</span>
                            </div>

                            <div class="flex items-center gap-3 sm:gap-4 p-3 hover:bg-slate-50 rounded-lg transition-colors">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-amber-100 flex items-center justify-center">
                                    <i class="ph ph-calendar text-amber-600 text-sm sm:text-base"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-slate-900 truncate">Event registration</p>
                                    <p class="text-xs text-slate-500">Business Workshop - 5 attendees</p>
                                </div>
                                <span class="text-xs text-slate-400 whitespace-nowrap">2 hours ago</span>
                            </div>

                            <div class="flex items-center gap-3 sm:gap-4 p-3 hover:bg-slate-50 rounded-lg transition-colors">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-rose-100 flex items-center justify-center">
                                    <i class="ph ph-x text-rose-600 text-sm sm:text-base"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-slate-900 truncate">Loan application rejected</p>
                                    <p class="text-xs text-slate-500">Sarah Wilson - Insufficient collateral</p>
                                </div>
                                <span class="text-xs text-slate-400 whitespace-nowrap">3 hours ago</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Quick Actions</h3>
                        <div class="space-y-3">
                            <button class="w-full flex items-center gap-3 px-3 sm:px-4 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors text-sm">
                                <i class="ph ph-plus-circle text-lg sm:text-xl"></i>
                                <span>New Loan Application</span>
                            </button>
                            <button class="w-full flex items-center gap-3 px-3 sm:px-4 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">
                                <i class="ph ph-user-plus text-lg sm:text-xl"></i>
                                <span>Add Member</span>
                            </button>
                            <button class="w-full flex items-center gap-3 px-3 sm:px-4 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors text-sm">
                                <i class="ph ph-calendar-plus text-lg sm:text-xl"></i>
                                <span>Create Event</span>
                            </button>
                            <button class="w-full flex items-center gap-3 px-3 sm:px-4 py-3 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors text-sm">
                                <i class="ph ph-article text-lg sm:text-xl"></i>
                                <span>New Article</span>
                            </button>
                            <button class="w-full flex items-center gap-3 px-3 sm:px-4 py-3 border border-slate-200 text-slate-700 rounded-lg hover:bg-slate-50 transition-colors text-sm">
                                <i class="ph ph-download text-lg sm:text-xl"></i>
                                <span>Generate Report</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Pending Tasks -->
                <div class="mt-6 sm:mt-8 bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-4">Pending Tasks</h3>
                    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                        <div class="p-3 sm:p-4 border border-amber-200 bg-amber-50 rounded-lg">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="ph ph-clock text-amber-600"></i>
                                <span class="text-sm font-bold text-amber-600">Pending Review</span>
                            </div>
                            <p class="text-sm text-slate-700 mb-2">5 loan applications awaiting approval</p>
                            <a href="#" class="text-sm text-amber-600 font-bold hover:text-amber-700">Review Now →</a>
                        </div>

                        <div class="p-3 sm:p-4 border border-blue-200 bg-blue-50 rounded-lg">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="ph ph-bell text-blue-600"></i>
                                <span class="text-sm font-bold text-blue-600">Notifications</span>
                            </div>
                            <p class="text-sm text-slate-700 mb-2">12 new member verifications needed</p>
                            <a href="#" class="text-sm text-blue-600 font-bold hover:text-blue-700">Verify Now →</a>
                        </div>

                        <div class="p-3 sm:p-4 border border-purple-200 bg-purple-50 rounded-lg">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="ph ph-calendar text-purple-600"></i>
                                <span class="text-sm font-bold text-purple-600">Upcoming</span>
                            </div>
                            <p class="text-sm text-slate-700 mb-2">3 events scheduled for this week</p>
                            <a href="#" class="text-sm text-purple-600 font-bold hover:text-purple-700">View Calendar →</a>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Simple Footer -->
            <footer class="bg-slate-800 border-t border-slate-700 py-4 sm:py-6">
                <div class="px-4 sm:px-6">
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-2">
                        <p class="text-slate-400 text-xs sm:text-sm">© 2024 FeedTan Community Microfinance Group. All rights reserved.</p>
                        <p class="text-slate-500 text-xs">Admin Portal v1.0</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
        // Sidebar toggle functionality
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const mobileSidebarToggle = document.getElementById('mobileSidebarToggle');
        const closeSidebar = document.getElementById('closeSidebar');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeSidebarFunc() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Event listeners
        sidebarToggle.addEventListener('click', openSidebar);
        mobileSidebarToggle.addEventListener('click', openSidebar);
        closeSidebar.addEventListener('click', closeSidebarFunc);
        sidebarOverlay.addEventListener('click', closeSidebarFunc);

        // Close sidebar on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !sidebar.classList.contains('-translate-x-full')) {
                closeSidebarFunc();
            }
        });
    </script>
@endsection
