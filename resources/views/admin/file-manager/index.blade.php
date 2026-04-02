@extends('admin.layouts.app')

@section('title', 'File Manager')
@section('page-title', 'File Manager')

@section('content')
<div class="p-6">
    <!-- Breadcrumb Navigation -->
    @if($currentFolder)
        <div class="mb-6 flex items-center space-x-2 text-sm">
            <a href="{{ route('admin.file-manager.index') }}" class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-home mr-1"></i>Home
            </a>
            @foreach($currentFolder->breadcrumb as $crumb)
                <span class="text-gray-400">/</span>
                @if($crumb['id'] == $currentFolder->id)
                    <span class="text-gray-900 font-medium">{{ $crumb['name'] }}</span>
                @else
                    <a href="{{ route('admin.file-manager.index', ['folder_id' => $crumb['id']]) }}" class="text-blue-600 hover:text-blue-800">
                        {{ $crumb['name'] }}
                    </a>
                @endif
            @endforeach
        </div>
    @endif

    <!-- Header with Actions -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                {{ $currentFolder ? $currentFolder->original_name : 'File Manager' }}
                @if($currentFolder)
                    <span class="text-sm font-normal text-gray-600 ml-2">({{ $currentFolder->full_path }})</span>
                @endif
            </h1>
            <p class="text-gray-600 mt-1">
                {{ $currentFolder ? 'Manage files and folders in this location' : 'Manage and organize all your files' }}
            </p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.file-manager.create-folder', ['folder_id' => $currentFolder?->id, 'folder_name' => $currentFolder?->original_name]) }}" 
               class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700 flex items-center justify-center">
                <i class="fas fa-folder-plus mr-2"></i>
                Create Folder
            </a>
            <a href="{{ route('admin.file-manager.upload', ['folder_id' => $currentFolder?->id, 'folder_name' => $currentFolder?->original_name]) }}" 
               class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center justify-center">
                <i class="fas fa-upload mr-2"></i>
                Upload Files
            </a>
            <a href="{{ route('admin.file-manager.documents') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center justify-center">
                <i class="fas fa-file-alt mr-2"></i>
                Documents
            </a>
            <a href="{{ route('admin.file-manager.downloads') }}" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 flex items-center justify-center">
                <i class="fas fa-download mr-2"></i>
                Downloads
            </a>
            <a href="{{ route('admin.dashboard.mother') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 flex items-center justify-center">
                <i class="fas fa-tachometer-alt mr-2"></i>
                Dashboard
            </a>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8" id="statsContainer">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-folder text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Files</p>
                    <p class="text-2xl font-bold text-gray-900" id="totalFiles">-</p>
                    <p class="text-xs text-green-600" id="filesGrowth">-</span> this month</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-file-alt text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Documents</p>
                    <p class="text-2xl font-bold text-gray-900" id="documentsCount">-</p>
                    <p class="text-xs text-gray-500">Files</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-cloud-upload-alt text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Uploads</p>
                    <p class="text-2xl font-bold text-gray-900" id="uploadsCount">-</p>
                    <p class="text-xs text-gray-500">Files</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-orange-100 rounded-lg">
                    <i class="fas fa-download text-orange-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Downloads</p>
                    <p class="text-2xl font-bold text-gray-900" id="downloadsCount">-</p>
                    <p class="text-xs text-gray-500">Total</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                <input type="text" id="searchInput" placeholder="Search files..." class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                <select id="categoryFilter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="">All Categories</option>
                    <option value="documents">Documents</option>
                    <option value="uploads">Uploads</option>
                    <option value="downloads">Downloads</option>
                    <option value="images">Images</option>
                    <option value="videos">Videos</option>
                    <option value="general">General</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Visibility</label>
                <select id="visibilityFilter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="">All Files</option>
                    <option value="public">Public</option>
                    <option value="private">Private</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Sort By</label>
                <select id="sortBy" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="created_at">Created Date</option>
                    <option value="original_name">File Name</option>
                    <option value="file_size">File Size</option>
                    <option value="download_count">Downloads</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Files Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Size</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Uploaded By</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Visibility</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Downloads</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if($files->count() > 0)
                        @foreach($files as $file)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            @if($file->is_folder)
                                                <i class="fas fa-folder text-yellow-500 text-2xl"></i>
                                            @elseif(str_starts_with($file->mime_type, 'image/'))
                                                <img src="{{ asset('storage/' . $file->file_path) }}" alt="{{ $file->original_name }}" class="h-10 w-10 rounded object-cover">
                                            @else
                                                <i class="fas {{ getFileIcon($file->mime_type) }} text-gray-400 text-xl"></i>
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            @if($file->is_folder)
                                                <a href="{{ route('admin.file-manager.index', ['folder_id' => $file->id]) }}" class="text-sm font-medium text-blue-600 hover:text-blue-800">
                                                    {{ $file->original_name }}
                                                </a>
                                            @else
                                                <div class="text-sm font-medium text-gray-900">{{ $file->original_name }}</div>
                                            @endif
                                            <div class="text-sm text-gray-500">{{ $file->created_at->format('M d, Y') }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($file->is_folder)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Folder
                                        </span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                            {{ $file->category }}
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $file->is_folder ? '-' : $file->formatted_size }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $file->uploader ? $file->uploader->name : 'Unknown' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($file->is_folder)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                            Folder
                                        </span>
                                    @elseif($file->is_public)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Public
                                        </span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                            Private
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($file->is_folder)
                                        <span class="text-sm text-gray-500">-</span>
                                    @else
                                        <div class="flex items-center">
                                            <span class="text-sm font-medium text-gray-900">{{ $file->download_count }}</span>
                                            @if($file->download_count > 0)
                                                <span class="ml-2 text-xs text-green-600">
                                                    <i class="fas fa-arrow-up"></i>
                                                </span>
                                            @endif
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    @if($file->is_folder)
                                        <a href="{{ route('admin.file-manager.index', ['folder_id' => $file->id]) }}" class="text-blue-600 hover:text-blue-900 mr-3" title="Open Folder">
                                            <i class="fas fa-folder-open"></i>
                                        </a>
                                        @if($file->uploaded_by === auth('admin')->id())
                                            <button onclick="deleteFolder({{ $file->id }})" class="text-red-600 hover:text-red-900" title="Delete Folder">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        @endif
                                    @else
                                        <a href="{{ route('admin.file-manager.preview', $file) }}" class="text-blue-600 hover:text-blue-900 mr-3" target="_blank" title="Preview">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <button onclick="downloadFile({{ $file->id }})" class="text-green-600 hover:text-green-900 mr-3" title="Download">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        @if($file->uploaded_by === auth('admin')->id())
                                            <button onclick="editFile({{ $file->id }})" class="text-yellow-600 hover:text-yellow-900 mr-3" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button onclick="deleteFile({{ $file->id }})" class="text-red-600 hover:text-red-900" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center">
                                <div class="text-gray-500">
                                    <i class="fas fa-folder-open text-4xl text-gray-300 mb-4"></i>
                                    <p class="text-lg">No files found</p>
                                    <p class="text-sm mt-2">Upload some files to get started</p>
                                    <a href="{{ route('admin.file-manager.upload') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                        <i class="fas fa-upload mr-2"></i>
                                        Upload Files
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($files->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-700">
                        Showing <span class="font-medium">{{ $files->firstItem() }}</span> to <span class="font-medium">{{ $files->lastItem() }}</span> of <span class="font-medium">{{ $files->total() }}</span> results
                    </div>
                    <div class="flex space-x-2">
                        {{ $files->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

<!-- File Details Modal -->
<div id="fileModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
    <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-3/4 lg:w-1/2 shadow-lg rounded-lg bg-white">
        <div class="mt-3" id="modalContent">
            <!-- Modal content will be loaded here -->
        </div>
    </div>
</div>

<script>
let currentPage = 1;
let currentSort = 'created_at';
let currentOrder = 'desc';

// Load initial data
$(document).ready(function() {
    loadStats();
    loadFiles();
});

// Load statistics
function loadStats() {
    fetch('/admin/file-manager/stats')
        .then(response => response.json())
        .then(data => {
            document.getElementById('totalFiles').textContent = data.total_files || 0;
            document.getElementById('documentsCount').textContent = data.documents || 0;
            document.getElementById('uploadsCount').textContent = data.uploads || 0;
            document.getElementById('downloadsCount').textContent = data.total_downloads || 0;
            document.getElementById('filesGrowth').textContent = '+' + (data.growth_rate || 0) + '% this month';
        });
}

// Load files
function loadFiles(page = 1) {
    const search = document.getElementById('searchInput').value;
    const category = document.getElementById('categoryFilter').value;
    const visibility = document.getElementById('visibilityFilter').value;
    const sortBy = document.getElementById('sortBy').value;
    
    const params = new URLSearchParams({
        page: page,
        sort: currentSort,
        order: currentOrder
    });
    
    if (search) params.append('search', search);
    if (category) params.append('category', category);
    if (visibility) params.append('visibility', visibility);
    
    fetch(`/admin/file-manager?${params}`)
        .then(response => response.json())
        .then(data => {
            renderFiles(data.data);
            renderPagination(data);
            currentPage = page;
        });
}

// Render files table
function renderFiles(files) {
    const tbody = document.getElementById('filesTableBody');
    tbody.innerHTML = '';
    
    files.forEach(file => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <i class="fas ${getFileIcon(file.mime_type)} text-gray-400"></i>
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">${file.original_name}</div>
                        <div class="text-sm text-gray-500">${formatDate(file.created_at)}</div>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                    ${file.category}
                </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                ${file.formatted_size}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                ${file.uploader ? file.uploader.name : 'Unknown'}
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${file.is_public ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'}">
                    ${file.is_public ? 'Public' : 'Private'}
                </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                ${file.download_count}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <button onclick="viewFile(${file.id})" class="text-indigo-600 hover:text-indigo-900 mr-3">View</button>
                <button onclick="downloadFile(${file.id})" class="text-green-600 hover:text-green-900 mr-3">Download</button>
                <button onclick="editFile(${file.id})" class="text-yellow-600 hover:text-yellow-900 mr-3">Edit</button>
                <button onclick="deleteFile(${file.id})" class="text-red-600 hover:text-red-900">Delete</button>
            </td>
        `;
        tbody.appendChild(row);
    });
}

// Render pagination
function renderPagination(data) {
    const container = document.getElementById('paginationContainer');
    container.innerHTML = '';
    
    if (data.prev_page_url || data.next_page_url) {
        const pagination = document.createElement('div');
        pagination.className = 'flex items-center justify-between';
        pagination.innerHTML = `
            <div class="text-sm text-gray-700">
                Showing <span class="font-medium">${data.from || 0}</span> to <span class="font-medium">${data.to || 0}</span> of <span class="font-medium">${data.total}</span> results
            </div>
            <div class="flex space-x-2">
                ${data.prev_page_url ? `<button onclick="loadFiles(${data.current_page - 1})" class="px-3 py-1 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Previous</button>` : ''}
                <span class="px-3 py-1 bg-blue-600 text-white rounded">${data.current_page}</span>
                ${data.next_page_url ? `<button onclick="loadFiles(${data.current_page + 1})" class="px-3 py-1 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Next</button>` : ''}
            </div>
        `;
        container.appendChild(pagination);
    }
}

// Helper functions
function getFileIcon(mimeType) {
    if (mimeType.startsWith('image/')) return 'fa-image';
    if (mimeType.startsWith('video/')) return 'fa-video';
    if (mimeType.includes('pdf')) return 'fa-file-pdf';
    if (mimeType.includes('word') || mimeType.includes('document')) return 'fa-file-word';
    if (mimeType.includes('excel') || mimeType.includes('spreadsheet')) return 'fa-file-excel';
    if (mimeType.includes('powerpoint') || mimeType.includes('presentation')) return 'fa-file-powerpoint';
    if (mimeType.includes('zip') || mimeType.includes('rar')) return 'fa-file-archive';
    if (mimeType.includes('text')) return 'fa-file-alt';
    return 'fa-file';
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
}

function viewFile(id) {
    fetch(`/admin/file-manager/${id}`)
        .then(response => response.text())
        .then(html => {
            // Show modal with file details
            const modal = document.getElementById('fileModal');
            const content = document.getElementById('modalContent');
            // For now, just show a simple alert
            alert('File details view - to be implemented');
        });
}

function downloadFile(id) {
    window.open(`/admin/file-manager/${id}/download`, '_blank');
}

function editFile(id) {
    window.location.href = `/admin/file-manager/${id}/edit`;
}

function deleteFile(id) {
    if (confirm('Are you sure you want to delete this file?')) {
        fetch(`/admin/file-manager/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Failed to delete file: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error deleting file:', error);
            alert('Failed to delete file');
        });
    }
}

function deleteFolder(id) {
    if (confirm('Are you sure you want to delete this folder and all its contents? This action cannot be undone.')) {
        fetch(`/admin/file-manager/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Failed to delete folder: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error deleting folder:', error);
            alert('Failed to delete folder');
        });
    }
}

// Event listeners
document.getElementById('searchInput').addEventListener('input', () => loadFiles(1));
document.getElementById('categoryFilter').addEventListener('change', () => loadFiles(1));
document.getElementById('visibilityFilter').addEventListener('change', () => loadFiles(1));
document.getElementById('sortBy').addEventListener('change', (e) => {
    currentSort = e.target.value;
    loadFiles(1);
});
</script>

@php
    function getFileIcon($mimeType) {
        if (str_starts_with($mimeType, 'image/')) return 'fa-image';
        if (str_starts_with($mimeType, 'video/')) return 'fa-video';
        if (str_contains($mimeType, 'pdf')) return 'fa-file-pdf';
        if (str_contains($mimeType, 'word') || str_contains($mimeType, 'document')) return 'fa-file-word';
        if (str_contains($mimeType, 'excel') || str_contains($mimeType, 'spreadsheet')) return 'fa-file-excel';
        if (str_contains($mimeType, 'powerpoint') || str_contains($mimeType, 'presentation')) return 'fa-file-powerpoint';
        if (str_contains($mimeType, 'zip') || str_contains($mimeType, 'rar')) return 'fa-file-archive';
        if (str_contains($mimeType, 'text')) return 'fa-file-alt';
        return 'fa-file';
    }
@endphp
@endsection
