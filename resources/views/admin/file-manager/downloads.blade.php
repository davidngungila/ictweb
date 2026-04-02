@extends('admin.layouts.app')

@section('title', 'Downloads')
@section('page-title', 'Downloads')

@section('content')
<div class="p-6">
    <!-- Header with Actions -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Downloads</h1>
            <p class="text-gray-600 mt-1">Track and manage all file downloads and access requests</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.file-manager.upload') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center justify-center">
                <i class="fas fa-upload mr-2"></i>
                Upload Files
            </a>
            <a href="{{ route('admin.file-manager.documents') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center justify-center">
                <i class="fas fa-file-alt mr-2"></i>
                Documents
            </a>
            <a href="{{ route('admin.file-manager.index') }}" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 flex items-center justify-center">
                <i class="fas fa-folder mr-2"></i>
                All Files
            </a>
            <a href="{{ route('admin.dashboard.mother') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 flex items-center justify-center">
                <i class="fas fa-tachometer-alt mr-2"></i>
                Dashboard
            </a>
        </div>
    </div>

    <!-- Download Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Downloads</p>
                    <p class="text-2xl font-bold text-gray-900" id="totalDownloads">-</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> <span id="downloadsGrowth">-</span>% this month
                    </p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-download text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Public Files</p>
                    <p class="text-2xl font-bold text-gray-900" id="publicFilesCount">-</p>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-globe"></i> Available for download
                    </p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-share-alt text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Data Transferred</p>
                    <p class="text-2xl font-bold text-gray-900" id="dataTransferred">-</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-database"></i> Total
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-exchange-alt text-yellow-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Most Downloaded</p>
                    <p class="text-2xl font-bold text-gray-900" id="mostDownloaded">-</p>
                    <p class="text-xs text-purple-600 mt-1">
                        <i class="fas fa-trophy"></i> Top file downloads
                    </p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-crown text-purple-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Downloads Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900">Downloadable Files</h3>
                <div class="flex items-center space-x-2">
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Search files..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-64">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <select id="categoryFilter" class="px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">All Categories</option>
                        <option value="documents">Documents</option>
                        <option value="uploads">Uploads</option>
                        <option value="downloads">Downloads</option>
                        <option value="images">Images</option>
                        <option value="videos">Videos</option>
                        <option value="general">General</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">File</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Size</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Uploaded By</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Downloads</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Downloaded</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if($downloads->count() > 0)
                        @foreach($downloads as $file)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            @if(str_starts_with($file->mime_type, 'image/'))
                                                <img src="{{ asset('storage/' . $file->file_path) }}" alt="{{ $file->original_name }}" class="h-10 w-10 rounded object-cover">
                                            @else
                                                <i class="fas {{ getFileIcon($file->mime_type) }} text-gray-400"></i>
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $file->original_name }}</div>
                                            <div class="text-sm text-gray-500">{{ $file->created_at->format('M d, Y') }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        {{ $file->category }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $file->formatted_size }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $file->uploader ? $file->uploader->name : 'Unknown' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="text-sm font-medium text-gray-900">{{ $file->download_count }}</span>
                                        @if($file->download_count > 0)
                                            <span class="ml-2 text-xs text-green-600">
                                                <i class="fas fa-arrow-up"></i>
                                            </span>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if($file->last_downloaded_at)
                                        {{ $file->last_downloaded_at->diffForHumans() }}
                                    @else
                                        <span class="text-gray-400">Never</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button onclick="downloadFile({{ $file->id }})" class="text-green-600 hover:text-green-900 mr-3">
                                        <i class="fas fa-download"></i>
                                    </button>
                                    <a href="{{ route('admin.file-manager.preview', $file) }}" class="text-blue-600 hover:text-blue-900 mr-3" target="_blank">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    @if($file->uploaded_by === auth('admin')->id())
                                        <button onclick="editFile({{ $file->id }})" class="text-yellow-600 hover:text-yellow-900 mr-3">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button onclick="deleteFile({{ $file->id }})" class="text-red-600 hover:text-red-900">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center">
                                <div class="text-gray-500">
                                    <i class="fas fa-download text-4xl text-gray-300 mb-4"></i>
                                    <p class="text-lg">No downloadable files found</p>
                                    <p class="text-sm mt-2">Upload some files and make them public to see them here</p>
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
        @if($downloads->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-700">
                        Showing <span class="font-medium">{{ $downloads->firstItem() }}</span> to <span class="font-medium">{{ $downloads->lastItem() }}</span> of <span class="font-medium">{{ $downloads->total() }}</span> results
                    </div>
                    <div class="flex space-x-2">
                        {{ $downloads->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>

<script>
// Load real statistics
document.addEventListener('DOMContentLoaded', function() {
    loadDownloadsStats();
    setupEventListeners();
});

function loadDownloadsStats() {
    fetch('/admin/file-manager/stats')
        .then(response => response.json())
        .then(data => {
            // Update statistics
            document.getElementById('totalDownloads').textContent = data.total_downloads || 0;
            document.getElementById('publicFilesCount').textContent = data.public_files || 0;
            document.getElementById('dataTransferred').textContent = formatFileSize(data.total_size || 0);
            document.getElementById('mostDownloaded').textContent = data.most_downloaded || 0;
            document.getElementById('downloadsGrowth').textContent = data.growth_rate || 0;
        })
        .catch(error => {
            console.error('Error loading stats:', error);
        });
}

function setupEventListeners() {
    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function(e) {
        filterTable();
    });
    
    // Category filter
    document.getElementById('categoryFilter').addEventListener('change', function(e) {
        filterTable();
    });
}

function filterTable() {
    const searchValue = document.getElementById('searchInput').value.toLowerCase();
    const categoryValue = document.getElementById('categoryFilter').value;
    const rows = document.querySelectorAll('tbody tr');
    
    rows.forEach(row => {
        const fileName = row.querySelector('td:first-child .font-medium')?.textContent.toLowerCase() || '';
        const category = row.querySelector('td:nth-child(2) span')?.textContent.toLowerCase() || '';
        
        const matchesSearch = fileName.includes(searchValue);
        const matchesCategory = !categoryValue || category === categoryValue;
        
        row.style.display = matchesSearch && matchesCategory ? '' : 'none';
    });
}

function downloadFile(id) {
    window.open(`/admin/file-manager/${id}/download`, '_blank');
    
    // Update download count in table
    setTimeout(() => {
        location.reload();
    }, 1000);
}

function viewFile(id) {
    window.location.href = `/admin/file-manager/${id}`;
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

function formatFileSize(bytes) {
    const units = ['B', 'KB', 'MB', 'GB'];
    for (let i = 0; bytes > 1024 && i < units.length - 1; i++) {
        bytes /= 1024;
    }
    return bytes.toFixed(2) + ' ' + units[i];
}
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
