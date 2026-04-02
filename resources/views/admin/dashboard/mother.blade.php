@extends('admin.layouts.app')

@section('page-title', 'Management Dashboard')

@section('content')
<div class="p-6">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Management Dashboard</h1>
        <p class="text-gray-600 mt-1">Complete overview and management of all system modules</p>
    </div>

    <!-- Quick Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
        <!-- Demo Requests Stats -->
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-calendar-check text-purple-600 text-xl"></i>
                </div>
                <a href="{{ route('admin.demo-requests.advanced') }}" class="text-purple-600 hover:text-purple-800 text-sm">
                    View All →
                </a>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Demo Requests</h3>
            <div class="text-3xl font-bold text-gray-900 mb-2" id="demoRequestsCount">-</div>
            <div class="text-sm text-gray-600">
                <span class="text-green-600" id="demoRequestsGrowth">-</span> this month
            </div>
        </div>

        <!-- Messages Stats -->
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-envelope text-blue-600 text-xl"></i>
                </div>
                <a href="{{ route('admin.messages.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">
                    View All →
                </a>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Messages</h3>
            <div class="text-3xl font-bold text-gray-900 mb-2" id="messagesCount">-</div>
            <div class="text-sm text-gray-600">
                <span class="text-orange-600" id="messagesUnread">-</span> unread
            </div>
        </div>

        <!-- Projects Stats -->
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-project-diagram text-green-600 text-xl"></i>
                </div>
                <a href="{{ route('admin.projects.advanced') }}" class="text-green-600 hover:text-green-800 text-sm">
                    View All →
                </a>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Projects</h3>
            <div class="text-3xl font-bold text-gray-900 mb-2" id="projectsCount">-</div>
            <div class="text-sm text-gray-600">
                <span class="text-blue-600" id="projectsActive">-</span> in progress
            </div>
        </div>

        <!-- Services Stats -->
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-cogs text-orange-600 text-xl"></i>
                </div>
                <a href="{{ route('admin.services.advanced') }}" class="text-orange-600 hover:text-orange-800 text-sm">
                    View All →
                </a>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Services</h3>
            <div class="text-3xl font-bold text-gray-900 mb-2" id="servicesCount">-</div>
            <div class="text-sm text-gray-600">
                <span class="text-purple-600" id="servicesFeatured">-</span> featured
            </div>
        </div>

        <!-- File Manager Stats -->
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-red-100 rounded-lg">
                    <i class="fas fa-folder text-red-600 text-xl"></i>
                </div>
                <a href="{{ route('admin.file-manager.index') }}" class="text-red-600 hover:text-red-800 text-sm">
                    View All →
                </a>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">File Manager</h3>
            <div class="text-3xl font-bold text-gray-900 mb-2" id="fileManagerCount">-</div>
            <div class="text-sm text-gray-600">
                <span class="text-green-600" id="fileManagerGrowth">-</span> this month
            </div>
        </div>
    </div>

    <!-- Module Management Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        <!-- Demo Requests Module -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Demo Requests</h2>
                        <p class="text-gray-600 text-sm mt-1">Manage demo requests and scheduling</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.demo-requests.create') }}" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors text-sm">
                            <i class="fas fa-plus mr-2"></i>New Request
                        </a>
                        <a href="{{ route('admin.demo-requests.export') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors text-sm">
                            <i class="fas fa-download mr-2"></i>Export
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div>
                        <div class="text-2xl font-bold text-purple-600" id="demoNewCount">-</div>
                        <div class="text-sm text-gray-600">New</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-blue-600" id="demoScheduledCount">-</div>
                        <div class="text-sm text-gray-600">Scheduled</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-green-600" id="demoCompletedCount">-</div>
                        <div class="text-sm text-gray-600">Completed</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages Module -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Messages</h2>
                        <p class="text-gray-600 text-sm mt-1">Handle customer inquiries and support</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.messages.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm">
                            <i class="fas fa-plus mr-2"></i>New Message
                        </a>
                        <a href="{{ route('admin.messages.export') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors text-sm">
                            <i class="fas fa-download mr-2"></i>Export
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div>
                        <div class="text-2xl font-bold text-orange-600" id="messagesNewCount">-</div>
                        <div class="text-sm text-gray-600">Unread</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-blue-600" id="messagesInProgressCount">-</div>
                        <div class="text-sm text-gray-600">In Progress</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-green-600" id="messagesResolvedCount">-</div>
                        <div class="text-sm text-gray-600">Resolved</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects Module -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Projects</h2>
                        <p class="text-gray-600 text-sm mt-1">Track and manage project progress</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.projects.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors text-sm">
                            <i class="fas fa-plus mr-2"></i>New Project
                        </a>
                        <a href="{{ route('admin.projects.export') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors text-sm">
                            <i class="fas fa-download mr-2"></i>Export
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div>
                        <div class="text-2xl font-bold text-yellow-600" id="projectsPlanningCount">-</div>
                        <div class="text-sm text-gray-600">Planning</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-blue-600" id="projectsInProgressCount">-</div>
                        <div class="text-sm text-gray-600">In Progress</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-green-600" id="projectsCompletedCount">-</div>
                        <div class="text-sm text-gray-600">Completed</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Module -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Services</h2>
                        <p class="text-gray-600 text-sm mt-1">Manage service offerings and pricing</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.services.create') }}" class="bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700 transition-colors text-sm">
                            <i class="fas fa-plus mr-2"></i>New Service
                        </a>
                        <a href="{{ route('admin.services.export') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors text-sm">
                            <i class="fas fa-download mr-2"></i>Export
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div>
                        <div class="text-2xl font-bold text-green-600" id="servicesActiveCount">-</div>
                        <div class="text-sm text-gray-600">Active</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-purple-600" id="servicesInactiveCount">-</div>
                        <div class="text-sm text-gray-600">Inactive</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-orange-600" id="servicesCategoriesCount">-</div>
                        <div class="text-sm text-gray-600">Categories</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- File Manager Module -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">File Manager</h2>
                        <p class="text-gray-600 text-sm mt-1">Upload, organize, and manage files</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.file-manager.upload') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors text-sm">
                            <i class="fas fa-upload mr-2"></i>Upload
                        </a>
                        <a href="{{ route('admin.file-manager.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors text-sm">
                            <i class="fas fa-folder mr-2"></i>Files
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div>
                        <div class="text-2xl font-bold text-blue-600" id="fileManagerTotalCount">-</div>
                        <div class="text-sm text-gray-600">Total Files</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-green-600" id="fileManagerDocumentsCount">-</div>
                        <div class="text-sm text-gray-600">Documents</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-orange-600" id="fileManagerDownloadsCount">-</div>
                        <div class="text-sm text-gray-600">Downloads</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-900">Recent Activity</h2>
            <p class="text-gray-600 text-sm mt-1">Latest updates across all modules</p>
        </div>
        <div class="p-6">
            <div class="space-y-4" id="recentActivity">
                <!-- Activity items will be loaded here -->
                <div class="text-center text-gray-500 py-8">
                    <i class="fas fa-spinner fa-spin text-2xl mb-2"></i>
                    <p>Loading recent activity...</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Load dashboard statistics
async function loadDashboardStats() {
    try {
        // Load Demo Requests stats
        const demoResponse = await fetch('/admin/demo-requests/stats');
        const demoStats = await demoResponse.json();
        updateDemoStats(demoStats);

        // Load Messages stats
        const messagesResponse = await fetch('/admin/messages/stats');
        const messagesStats = await messagesResponse.json();
        updateMessagesStats(messagesStats);

        // Load Projects stats
        const projectsResponse = await fetch('/admin/projects/stats');
        const projectsStats = await projectsResponse.json();
        updateProjectsStats(projectsStats);

        // Load Services stats
        const servicesResponse = await fetch('/admin/services/stats');
        const servicesStats = await servicesResponse.json();
        updateServicesStats(servicesStats);

        // Load File Manager stats
        const fileManagerResponse = await fetch('/admin/file-manager/stats');
        const fileManagerStats = await fileManagerResponse.json();
        updateFileManagerStats(fileManagerStats);

    } catch (error) {
        console.error('Error loading dashboard stats:', error);
    }
}

function updateDemoStats(stats) {
    document.getElementById('demoRequestsCount').textContent = stats.total;
    document.getElementById('demoRequestsGrowth').textContent = `+${stats.growth_rate}%`;
    document.getElementById('demoNewCount').textContent = stats.new;
    document.getElementById('demoScheduledCount').textContent = stats.scheduled;
    document.getElementById('demoCompletedCount').textContent = stats.completed;
}

function updateMessagesStats(stats) {
    document.getElementById('messagesCount').textContent = stats.total;
    document.getElementById('messagesUnread').textContent = stats.unread;
    document.getElementById('messagesNewCount').textContent = stats.new;
    document.getElementById('messagesInProgressCount').textContent = stats.in_progress;
    document.getElementById('messagesResolvedCount').textContent = stats.resolved;
}

function updateProjectsStats(stats) {
    document.getElementById('projectsCount').textContent = stats.total;
    document.getElementById('projectsActive').textContent = stats.in_progress;
    document.getElementById('projectsPlanningCount').textContent = stats.planning;
    document.getElementById('projectsInProgressCount').textContent = stats.in_progress;
    document.getElementById('projectsCompletedCount').textContent = stats.completed;
}

function updateServicesStats(stats) {
    document.getElementById('servicesCount').textContent = stats.total;
    document.getElementById('servicesFeatured').textContent = stats.featured;
    document.getElementById('servicesActiveCount').textContent = stats.active;
    document.getElementById('servicesInactiveCount').textContent = stats.inactive;
    document.getElementById('servicesCategoriesCount').textContent = stats.categories;
}

function updateFileManagerStats(stats) {
    document.getElementById('fileManagerCount').textContent = stats.total_files;
    document.getElementById('fileManagerGrowth').textContent = `+${stats.growth_rate}%`;
    document.getElementById('fileManagerTotalCount').textContent = stats.total_files;
    document.getElementById('fileManagerDocumentsCount').textContent = stats.documents;
    document.getElementById('fileManagerDownloadsCount').textContent = stats.total_downloads;
}

// Load stats on page load
document.addEventListener('DOMContentLoaded', loadDashboardStats);
</script>
@endsection
