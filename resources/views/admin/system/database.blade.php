@extends('admin.layouts.app')

@section('title', 'Database Management — FeedTan Admin Dashboard')

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
            
            <nav class="p-4 h-[calc(100vh-88px)] overflow-y-auto">
                <ul class="space-y-2">
                    <li><a href="/admin" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-house text-xl"></i><span>Dashboard</span></a></li>
                    <li><a href="/admin/members" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-users text-xl"></i><span>Members</span></a></li>
                    <li><a href="/admin/loans" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-briefcase text-xl"></i><span>Loans</span></a></li>
                    <li><a href="/admin/savings" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-piggy-bank text-xl"></i><span>Savings</span></a></li>
                    <li><a href="/admin/events" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-calendar text-xl"></i><span>Events</span></a></li>
                    <li><a href="/admin/articles" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-article text-xl"></i><span>Articles</span></a></li>
                    <li><a href="/admin/documents" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-file-text text-xl"></i><span>Documents</span></a></li>
                    <li><a href="/admin/reports" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-chart-bar text-xl"></i><span>Reports</span></a></li>
                    <li><a href="/admin/settings" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-gear text-xl"></i><span>Settings</span></a></li>
                </ul>
                
                <div class="mt-8 pt-8 border-t border-slate-700">
                    <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-4">System</h3>
                    <ul class="space-y-2">
                        <li><a href="/admin/database" class="flex items-center gap-3 px-4 py-3 bg-slate-700 text-white rounded-lg"><i class="ph ph-database text-xl"></i><span>Database</span></a></li>
                        <li><a href="/admin/backups" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-backup text-xl"></i><span>Backups</span></a></li>
                        <li><a href="/admin/security" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-shield-check text-xl"></i><span>Security</span></a></li>
                        <li><a href="/admin/notifications" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-bell text-xl"></i><span>Notifications</span></a></li>
                        <li><a href="/admin/audit" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-clock-counter-clockwise text-xl"></i><span>Audit Logs</span></a></li>
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
                            <h2 class="text-lg sm:text-xl font-semibold text-white">Database Management</h2>
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
                            <a href="/admin/login" class="text-slate-400 hover:text-white transition-colors">
                                <i class="ph ph-sign-out text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Scrollable Main Content -->
            <main class="pt-16 sm:pt-20 p-4 sm:p-6">
                <!-- Database Stats -->
                <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mb-6 sm:mb-8">
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                                <i class="ph ph-database text-blue-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-blue-600">MySQL</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">8.0</h3>
                        <p class="text-sm text-slate-500 mt-1">Database Version</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-100 flex items-center justify-center">
                                <i class="ph ph-hard-drive text-emerald-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-emerald-600">2.4 GB</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">2.4 GB</h3>
                        <p class="text-sm text-slate-500 mt-1">Database Size</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                                <i class="ph ph-table text-purple-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-purple-600">12</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">12</h3>
                        <p class="text-sm text-slate-500 mt-1">Total Tables</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-amber-100 flex items-center justify-center">
                                <i class="ph ph-activity text-amber-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-amber-600">Good</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">98%</h3>
                        <p class="text-sm text-slate-500 mt-1">Performance</p>
                    </div>
                </div>

                <!-- Database Tables -->
                <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200 mb-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold text-slate-900">Database Tables</h3>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">
                            <i class="ph ph-refresh mr-2"></i>Refresh
                        </button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-slate-50 border-b border-slate-200">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Table Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Rows</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Size</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Engine</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">members</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">10,247</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">45.2 MB</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">InnoDB</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">View</button>
                                        <button class="text-amber-600 hover:text-amber-900">Optimize</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">loans</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">3,456</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">28.7 MB</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">InnoDB</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">View</button>
                                        <button class="text-amber-600 hover:text-amber-900">Optimize</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">savings_accounts</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">8,456</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">52.1 MB</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">InnoDB</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">View</button>
                                        <button class="text-amber-600 hover:text-amber-900">Optimize</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Database Operations -->
                <div class="grid gap-6 lg:grid-cols-2">
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Database Operations</h3>
                        <div class="space-y-3">
                            <button class="w-full px-4 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm text-left">
                                <i class="ph ph-download mr-2"></i>Export Database
                            </button>
                            <button class="w-full px-4 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors text-sm text-left">
                                <i class="ph ph-upload mr-2"></i>Import Database
                            </button>
                            <button class="w-full px-4 py-3 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors text-sm text-left">
                                <i class="ph ph-arrows-clockwise mr-2"></i>Run Migration
                            </button>
                            <button class="w-full px-4 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors text-sm text-left">
                                <i class="ph ph-funnel mr-2"></i>Optimize Tables
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Query Monitor</h3>
                        <div class="space-y-3">
                            <div class="p-3 bg-slate-50 rounded-lg">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-slate-900">Slow Queries</span>
                                    <span class="text-xs text-amber-600">2</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2">
                                    <div class="bg-amber-600 h-2 rounded-full" style="width: 20%"></div>
                                </div>
                            </div>
                            <div class="p-3 bg-slate-50 rounded-lg">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-slate-900">Connections</span>
                                    <span class="text-xs text-emerald-600">15/100</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2">
                                    <div class="bg-emerald-600 h-2 rounded-full" style="width: 15%"></div>
                                </div>
                            </div>
                            <div class="p-3 bg-slate-50 rounded-lg">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-slate-900">Cache Hit Rate</span>
                                    <span class="text-xs text-blue-600">94%</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 94%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
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

        sidebarToggle.addEventListener('click', openSidebar);
        mobileSidebarToggle.addEventListener('click', openSidebar);
        closeSidebar.addEventListener('click', closeSidebarFunc);
        sidebarOverlay.addEventListener('click', closeSidebarFunc);

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !sidebar.classList.contains('-translate-x-full')) {
                closeSidebarFunc();
            }
        });
    </script>
@endsection
