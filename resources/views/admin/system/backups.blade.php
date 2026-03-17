@extends('admin.layouts.app')

@section('title', 'Backups — FeedTan Admin Dashboard')

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
                        <li><a href="/admin/database" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-database text-xl"></i><span>Database</span></a></li>
                        <li><a href="/admin/backups" class="flex items-center gap-3 px-4 py-3 bg-slate-700 text-white rounded-lg"><i class="ph ph-backup text-xl"></i><span>Backups</span></a></li>
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
                            <h2 class="text-lg sm:text-xl font-semibold text-white">Backup Management</h2>
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
                <!-- Backup Stats -->
                <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mb-6 sm:mb-8">
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-100 flex items-center justify-center">
                                <i class="ph ph-backup text-emerald-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-emerald-600">Success</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">24</h3>
                        <p class="text-sm text-slate-500 mt-1">Total Backups</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                                <i class="ph ph-hard-drive text-blue-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-blue-600">2.4 GB</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">2.4 GB</h3>
                        <p class="text-sm text-slate-500 mt-1">Storage Used</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-amber-100 flex items-center justify-center">
                                <i class="ph ph-clock text-amber-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-amber-600">Daily</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">Auto</h3>
                        <p class="text-sm text-slate-500 mt-1">Backup Schedule</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                                <i class="ph ph-cloud text-purple-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-purple-600">Cloud</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">AWS</h3>
                        <p class="text-sm text-slate-500 mt-1">Storage Location</p>
                    </div>
                </div>

                <!-- Backup Actions -->
                <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200 mb-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold text-slate-900">Quick Actions</h3>
                        <button onclick="createBackup()" class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors text-sm">
                            <i class="ph ph-plus mr-2"></i>Create Backup
                        </button>
                    </div>
                    <div class="grid gap-4 md:grid-cols-3">
                        <button class="p-4 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors text-left">
                            <i class="ph ph-download text-blue-600 text-xl mb-2"></i>
                            <h4 class="font-medium text-slate-900">Download Backup</h4>
                            <p class="text-sm text-slate-500">Get latest backup file</p>
                        </button>
                        <button class="p-4 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors text-left">
                            <i class="ph ph-upload text-emerald-600 text-xl mb-2"></i>
                            <h4 class="font-medium text-slate-900">Restore Backup</h4>
                            <p class="text-sm text-slate-500">Restore from backup file</p>
                        </button>
                        <button class="p-4 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors text-left">
                            <i class="ph ph-gear text-purple-600 text-xl mb-2"></i>
                            <h4 class="font-medium text-slate-900">Schedule Settings</h4>
                            <p class="text-sm text-slate-500">Configure backup schedule</p>
                        </button>
                    </div>
                </div>

                <!-- Backup History -->
                <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-4">Backup History</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-slate-50 border-b border-slate-200">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Type</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Size</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">Mar 17, 2024 02:00 AM</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">Full Database</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">125.4 MB</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-emerald-100 text-emerald-800">Completed</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Download</button>
                                        <button class="text-amber-600 hover:text-amber-900">Restore</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">Mar 16, 2024 02:00 AM</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">Full Database</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">124.8 MB</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-emerald-100 text-emerald-800">Completed</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-2">Download</button>
                                        <button class="text-amber-600 hover:text-amber-900">Restore</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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

        function createBackup() {
            alert('Backup creation started...');
        }
    </script>
@endsection
