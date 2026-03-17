@extends('admin-layout')

@section('title', 'Events Management — FeedTan Admin Dashboard')

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
                    <li><a href="/admin/events" class="flex items-center gap-3 px-4 py-3 bg-slate-700 text-white rounded-lg"><i class="ph ph-calendar text-xl"></i><span>Events</span></a></li>
                    <li><a href="/admin/articles" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-article text-xl"></i><span>Articles</span></a></li>
                    <li><a href="/admin/documents" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-file-text text-xl"></i><span>Documents</span></a></li>
                    <li><a href="/admin/reports" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-chart-bar text-xl"></i><span>Reports</span></a></li>
                    <li><a href="/admin/settings" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-gear text-xl"></i><span>Settings</span></a></li>
                </ul>
                
                <div class="mt-8 pt-8 border-t border-slate-700">
                    <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-4">System</h3>
                    <ul class="space-y-2">
                        <li><a href="/admin/database" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors"><i class="ph ph-database text-xl"></i><span>Database</span></a></li>
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
                            <h2 class="text-lg sm:text-xl font-semibold text-white">Events Management</h2>
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
                <!-- Events Stats Overview -->
                <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mb-6 sm:mb-8">
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
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-100 flex items-center justify-center">
                                <i class="ph ph-users text-emerald-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-emerald-600">+25%</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">456</h3>
                        <p class="text-sm text-slate-500 mt-1">Total Attendees</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                                <i class="ph ph-check-circle text-blue-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-blue-600">28</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">28</h3>
                        <p class="text-sm text-slate-500 mt-1">Past Events</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                                <i class="ph ph-star text-purple-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-purple-600">4.8</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">4.8</h3>
                        <p class="text-sm text-slate-500 mt-1">Avg Rating</p>
                    </div>
                </div>

                <!-- Events Management Tools -->
                <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200 mb-6">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                        <h3 class="text-lg font-bold text-slate-900">Event Management</h3>
                        <div class="flex flex-wrap gap-2">
                            <button class="px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors text-sm">
                                <i class="ph ph-plus mr-2"></i>Create New Event
                            </button>
                            <button class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors text-sm">
                                <i class="ph ph-calendar-plus mr-2"></i>Schedule Event
                            </button>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">
                                <i class="ph ph-download mr-2"></i>Export Calendar
                            </button>
                        </div>
                    </div>

                    <!-- Search and Filters -->
                    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4 mb-6">
                        <div class="relative">
                            <input type="text" placeholder="Search events..." class="w-full pl-10 pr-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            <i class="ph ph-search absolute left-3 top-3 text-slate-400"></i>
                        </div>
                        <select class="px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            <option>All Status</option>
                            <option>Upcoming</option>
                            <option>Ongoing</option>
                            <option>Completed</option>
                            <option>Cancelled</option>
                        </select>
                        <select class="px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            <option>All Types</option>
                            <option>Workshop</option>
                            <option>Seminar</option>
                            <option>Training</option>
                            <option>Networking</option>
                        </select>
                        <input type="date" class="px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                    </div>
                </div>

                <!-- Events Grid -->
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center">
                            <i class="ph ph-chalkboard text-white text-4xl"></i>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="px-2 py-1 bg-amber-100 text-amber-800 text-xs font-semibold rounded-full">Workshop</span>
                                <span class="text-xs text-slate-500">Mar 25, 2024</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Business Planning Workshop</h3>
                            <p class="text-sm text-slate-600 mb-4">Learn effective business planning strategies for small and medium enterprises.</p>
                            <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                <span><i class="ph ph-map-pin mr-1"></i>Training Center</span>
                                <span><i class="ph ph-clock mr-1"></i>9:00 AM</span>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 rounded-full bg-emerald-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-blue-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-purple-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-amber-100 border-2 border-white flex items-center justify-center">
                                        <span class="text-xs font-bold text-amber-700">+12</span>
                                    </div>
                                </div>
                                <span class="text-sm font-medium text-emerald-600">15 registered</span>
                            </div>
                            <div class="flex gap-2">
                                <button class="flex-1 px-3 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors text-sm">View Details</button>
                                <button class="px-3 py-2 border border-slate-300 text-slate-700 rounded-lg hover:bg-slate-50 transition-colors text-sm">Edit</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center">
                            <i class="ph ph-presentation text-white text-4xl"></i>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">Seminar</span>
                                <span class="text-xs text-slate-500">Mar 28, 2024</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Financial Literacy Seminar</h3>
                            <p class="text-sm text-slate-600 mb-4">Master budgeting and investment basics for personal and business finance.</p>
                            <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                <span><i class="ph ph-video-camera mr-1"></i>Online</span>
                                <span><i class="ph ph-clock mr-1"></i>2:00 PM</span>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 rounded-full bg-emerald-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-blue-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-purple-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-amber-100 border-2 border-white flex items-center justify-center">
                                        <span class="text-xs font-bold text-amber-700">+28</span>
                                    </div>
                                </div>
                                <span class="text-sm font-medium text-emerald-600">31 registered</span>
                            </div>
                            <div class="flex gap-2">
                                <button class="flex-1 px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">View Details</button>
                                <button class="px-3 py-2 border border-slate-300 text-slate-700 rounded-lg hover:bg-slate-50 transition-colors text-sm">Edit</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center">
                            <i class="ph ph-coffee text-white text-4xl"></i>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="px-2 py-1 bg-emerald-100 text-emerald-800 text-xs font-semibold rounded-full">Networking</span>
                                <span class="text-xs text-slate-500">Apr 02, 2024</span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">Networking Breakfast</h3>
                            <p class="text-sm text-slate-600 mb-4">Connect with fellow entrepreneurs and build valuable business relationships.</p>
                            <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                                <span><i class="ph ph-map-pin mr-1"></i>Headquarters</span>
                                <span><i class="ph ph-clock mr-1"></i>8:00 AM</span>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 rounded-full bg-emerald-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-blue-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-purple-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-amber-100 border-2 border-white flex items-center justify-center">
                                        <span class="text-xs font-bold text-amber-700">+8</span>
                                    </div>
                                </div>
                                <span class="text-sm font-medium text-emerald-600">11 registered</span>
                            </div>
                            <div class="flex gap-2">
                                <button class="flex-1 px-3 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors text-sm">View Details</button>
                                <button class="px-3 py-2 border border-slate-300 text-slate-700 rounded-lg hover:bg-slate-50 transition-colors text-sm">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event Calendar -->
                <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200 mt-6">
                    <h3 class="text-lg font-bold text-slate-900 mb-4">Event Calendar</h3>
                    <div class="h-64 bg-slate-50 rounded-lg flex items-center justify-center">
                        <p class="text-slate-500">Interactive Calendar View</p>
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
