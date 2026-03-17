@extends('admin-layout')

@section('title', 'Savings Management — FeedTan Admin Dashboard')

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
                    <li><a href="/admin/savings" class="flex items-center gap-3 px-4 py-3 bg-slate-700 text-white rounded-lg"><i class="ph ph-piggy-bank text-xl"></i><span>Savings</span></a></li>
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
                            <h2 class="text-lg sm:text-xl font-semibold text-white">Savings Management</h2>
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
                <!-- Savings Stats Overview -->
                <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mb-6 sm:mb-8">
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
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-100 flex items-center justify-center">
                                <i class="ph ph-users text-emerald-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-emerald-600">+8%</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">8,456</h3>
                        <p class="text-sm text-slate-500 mt-1">Active Savers</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                                <i class="ph ph-trend-up text-blue-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-blue-600">+12%</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">TZS 3.2M</h3>
                        <p class="text-sm text-slate-500 mt-1">This Month</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-amber-100 flex items-center justify-center">
                                <i class="ph ph-percent text-amber-600 text-lg sm:text-xl"></i>
                            </div>
                            <span class="text-xs font-bold text-amber-600">8.5%</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">8.5%</h3>
                        <p class="text-sm text-slate-500 mt-1">Avg Interest Rate</p>
                    </div>
                </div>

                <!-- Savings Management Tools -->
                <div class="bg-white rounded-xl shadow-sm p-4 sm:p-6 border border-slate-200 mb-6">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                        <h3 class="text-lg font-bold text-slate-900">Savings Management</h3>
                        <div class="flex flex-wrap gap-2">
                            <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors text-sm">
                                <i class="ph ph-plus mr-2"></i>New Savings Account
                            </button>
                            <button class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors text-sm">
                                <i class="ph ph-currency-dollar mr-2"></i>Process Deposit
                            </button>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">
                                <i class="ph ph-download mr-2"></i>Export Statement
                            </button>
                        </div>
                    </div>

                    <!-- Search and Filters -->
                    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4 mb-6">
                        <div class="relative">
                            <input type="text" placeholder="Search accounts..." class="w-full pl-10 pr-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <i class="ph ph-search absolute left-3 top-3 text-slate-400"></i>
                        </div>
                        <select class="px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option>All Account Types</option>
                            <option>Regular Savings</option>
                            <option>Fixed Deposit</option>
                            <option>Children Savings</option>
                            <option>Group Savings</option>
                        </select>
                        <select class="px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Dormant</option>
                            <option>Closed</option>
                            <option>Frozen</option>
                        </select>
                        <input type="date" class="px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                </div>

                <!-- Savings Accounts Table -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-slate-50 border-b border-slate-200">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                                        <input type="checkbox" class="rounded border-slate-300 text-purple-600 focus:ring-purple-500">
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Account</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Account Number</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Type</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Balance</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Interest Rate</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Last Activity</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded border-slate-300 text-purple-600 focus:ring-purple-500">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0">
                                                <div class="h-10 w-10 rounded-full bg-emerald-100 flex items-center justify-center">
                                                    <span class="text-emerald-600 font-bold text-sm">JD</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-slate-900">John Doe</div>
                                                <div class="text-sm text-slate-500">john.doe@email.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">SAV-2024-0001</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Regular</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">TZS 450,000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">8.5%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-emerald-100 text-emerald-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Mar 18, 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <button class="text-purple-600 hover:text-purple-900" title="View Details"><i class="ph ph-eye"></i></button>
                                            <button class="text-emerald-600 hover:text-emerald-900" title="Deposit"><i class="ph ph-plus-circle"></i></button>
                                            <button class="text-blue-600 hover:text-blue-900" title="Withdraw"><i class="ph ph-minus-circle"></i></button>
                                            <button class="text-amber-600 hover:text-amber-900" title="Statement"><i class="ph ph-file-text"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded border-slate-300 text-purple-600 focus:ring-purple-500">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0">
                                                <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                                    <span class="text-blue-600 font-bold text-sm">JS</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-slate-900">Jane Smith</div>
                                                <div class="text-sm text-slate-500">jane.smith@business.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">SAV-2024-0002</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Fixed</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">TZS 1,200,000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">10.0%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-emerald-100 text-emerald-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Mar 17, 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <button class="text-purple-600 hover:text-purple-900" title="View Details"><i class="ph ph-eye"></i></button>
                                            <button class="text-emerald-600 hover:text-emerald-900" title="Deposit"><i class="ph ph-plus-circle"></i></button>
                                            <button class="text-blue-600 hover:text-blue-900" title="Withdraw"><i class="ph ph-minus-circle"></i></button>
                                            <button class="text-amber-600 hover:text-amber-900" title="Statement"><i class="ph ph-file-text"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded border-slate-300 text-purple-600 focus:ring-purple-500">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0">
                                                <div class="h-10 w-10 rounded-full bg-amber-100 flex items-center justify-center">
                                                    <span class="text-amber-600 font-bold text-sm">MJ</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-slate-900">Mike Johnson</div>
                                                <div class="text-sm text-slate-500">mike.j@email.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">SAV-2024-0003</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Children</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">TZS 75,000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">12.0%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-emerald-100 text-emerald-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Mar 15, 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <button class="text-purple-600 hover:text-purple-900" title="View Details"><i class="ph ph-eye"></i></button>
                                            <button class="text-emerald-600 hover:text-emerald-900" title="Deposit"><i class="ph ph-plus-circle"></i></button>
                                            <button class="text-blue-600 hover:text-blue-900" title="Withdraw"><i class="ph ph-minus-circle"></i></button>
                                            <button class="text-amber-600 hover:text-amber-900" title="Statement"><i class="ph ph-file-text"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded border-slate-300 text-purple-600 focus:ring-purple-500">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0">
                                                <div class="h-10 w-10 rounded-full bg-slate-100 flex items-center justify-center">
                                                    <span class="text-slate-600 font-bold text-sm">SW</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-slate-900">Sarah Wilson</div>
                                                <div class="text-sm text-slate-500">sarah.w@email.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">SAV-2024-0004</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Regular</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">TZS 230,000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900">8.5%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-slate-100 text-slate-800">Dormant</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">Jan 10, 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <button class="text-purple-600 hover:text-purple-900" title="View Details"><i class="ph ph-eye"></i></button>
                                            <button class="text-emerald-600 hover:text-emerald-900" title="Activate"><i class="ph ph-play"></i></button>
                                            <button class="text-amber-600 hover:text-amber-900" title="Statement"><i class="ph ph-file-text"></i></button>
                                            <button class="text-red-600 hover:text-red-900" title="Close"><i class="ph ph-x-circle"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="bg-slate-50 px-4 py-3 flex items-center justify-between border-t border-slate-200 sm:px-6">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <button class="relative inline-flex items-center px-4 py-2 border border-slate-300 text-sm font-medium rounded-md text-slate-700 bg-white hover:bg-slate-50">Previous</button>
                            <button class="ml-3 relative inline-flex items-center px-4 py-2 border border-slate-300 text-sm font-medium rounded-md text-slate-700 bg-white hover:bg-slate-50">Next</button>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-slate-700">
                                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">234</span> results
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    <button class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-slate-300 bg-white text-sm font-medium text-slate-500 hover:bg-slate-50">
                                        <i class="ph ph-caret-left"></i>
                                    </button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-slate-300 bg-purple-50 text-sm font-medium text-purple-600">1</button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-slate-300 bg-white text-sm font-medium text-slate-700 hover:bg-slate-50">2</button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-slate-300 bg-white text-sm font-medium text-slate-700 hover:bg-slate-50">3</button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-slate-300 bg-white text-sm font-medium text-slate-700 hover:bg-slate-50">4</button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-slate-300 bg-white text-sm font-medium text-slate-700 hover:bg-slate-50">5</button>
                                    <button class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-slate-300 bg-white text-sm font-medium text-slate-500 hover:bg-slate-50">
                                        <i class="ph ph-caret-right"></i>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Savings Analytics -->
                <div class="grid gap-6 lg:grid-cols-2 mt-6">
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Savings Growth Trend</h3>
                        <div class="h-64 bg-slate-50 rounded-lg flex items-center justify-center">
                            <p class="text-slate-500">Savings Growth Chart</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Account Type Distribution</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-3 h-3 rounded-full bg-purple-500"></div>
                                    <span class="text-sm text-slate-700">Regular Savings</span>
                                </div>
                                <span class="text-sm font-bold text-slate-900">5,678 (67.1%)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-3 h-3 rounded-full bg-blue-500"></div>
                                    <span class="text-sm text-slate-700">Fixed Deposit</span>
                                </div>
                                <span class="text-sm font-bold text-slate-900">1,234 (14.6%)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                    <span class="text-sm text-slate-700">Children Savings</span>
                                </div>
                                <span class="text-sm font-bold text-slate-900">987 (11.7%)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-3 h-3 rounded-full bg-amber-500"></div>
                                    <span class="text-sm text-slate-700">Group Savings</span>
                                </div>
                                <span class="text-sm font-bold text-slate-900">557 (6.6%)</span>
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
