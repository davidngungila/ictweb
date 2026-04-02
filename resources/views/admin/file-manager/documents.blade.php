@extends('admin.layouts.app')

@section('title', 'Documents')
@section('page-title', 'Documents')

@section('content')
<div class="p-6">
    <!-- Header with Actions -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Documents</h1>
            <p class="text-gray-600 mt-1">Manage and organize all your documents</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.file-manager.upload') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center justify-center">
                <i class="fas fa-upload mr-2"></i>
                Upload Documents
            </a>
            <a href="{{ route('admin.file-manager.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center justify-center">
                <i class="fas fa-folder mr-2"></i>
                All Files
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

    <!-- Storage Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Storage</p>
                    <p class="text-2xl font-bold text-gray-900" id="totalStorage">-</p>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-database"></i> <span id="availableStorage">-</span> available
                    </p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-hdd text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Documents</p>
                    <p class="text-2xl font-bold text-gray-900" id="documentsCount">{{ $documents->total() }}</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> <span id="newThisWeek">-</span> new this week
                    </p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-file-alt text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Public Files</p>
                    <p class="text-2xl font-bold text-gray-900" id="publicFilesCount">-</p>
                    <p class="text-xs text-purple-600 mt-1">
                        <i class="fas fa-share"></i> Accessible to all
                    </p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-share-alt text-purple-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Downloads</p>
                    <p class="text-2xl font-bold text-gray-900" id="totalDownloads">-</p>
                    <p class="text-xs text-yellow-600 mt-1">
                        <i class="fas fa-download"></i> All time
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-download text-yellow-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- File Browser Interface -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <!-- Toolbar -->
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <!-- Breadcrumb -->
                    <div class="flex items-center text-sm text-gray-600">
                        <a href="#" class="hover:text-gray-900">Home</a>
                        <i class="fas fa-chevron-right mx-2 text-xs"></i>
                        <a href="#" class="hover:text-gray-900">Projects</a>
                        <i class="fas fa-chevron-right mx-2 text-xs"></i>
                        <a href="#" class="hover:text-gray-900">E-commerce</a>
                        <i class="fas fa-chevron-right mx-2 text-xs"></i>
                        <span class="text-gray-900">Documents</span>
                    </div>
                </div>
                
                <div class="flex items-center space-x-2">
                    <div class="relative">
                        <input type="text" placeholder="Search files..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-64">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="text-gray-500 hover:text-gray-700" title="Grid View">
                        <i class="fas fa-th"></i>
                    </button>
                    <button class="text-gray-500 hover:text-gray-700" title="List View">
                        <i class="fas fa-list"></i>
                    </button>
                    <button class="text-gray-500 hover:text-gray-700" title="Sort">
                        <i class="fas fa-sort"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Documents Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">Documents</h3>
                    <div class="flex items-center space-x-2">
                        <div class="relative">
                            <input type="text" id="searchInput" placeholder="Search documents..." 
                                   class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-64">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Document</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Size</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Uploaded By</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Uploaded Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if($documents->count() > 0)
                            @foreach($documents as $document)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                @if(str_starts_with($document->mime_type, 'image/'))
                                                    <img src="{{ asset('storage/' . $document->file_path) }}" alt="{{ $document->original_name }}" class="h-10 w-10 rounded object-cover">
                                                @else
                                                    <i class="fas {{ getFileIcon($document->mime_type) }} text-gray-400"></i>
                                                @endif
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $document->original_name }}</div>
                                                @if($document->description)
                                                    <div class="text-sm text-gray-500">{{ Str::limit($document->description, 50) }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $document->formatted_size }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $document->uploader ? $document->uploader->name : 'Unknown' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $document->created_at->format('M d, Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('admin.file-manager.preview', $document) }}" class="text-blue-600 hover:text-blue-900 mr-3" target="_blank">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <button onclick="downloadDocument({{ $document->id }})" class="text-green-600 hover:text-green-900 mr-3">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        @if($document->uploaded_by === auth('admin')->id())
                                            <button onclick="editDocument({{ $document->id }})" class="text-yellow-600 hover:text-yellow-900 mr-3">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button onclick="deleteDocument({{ $document->id }})" class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <div class="text-gray-500">
                                        <i class="fas fa-file-alt text-4xl text-gray-300 mb-4"></i>
                                        <p class="text-lg">No documents found</p>
                                        <p class="text-sm mt-2">Upload some documents to see them here</p>
                                        <a href="{{ route('admin.file-manager.upload') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                            <i class="fas fa-upload mr-2"></i>
                                            Upload Documents
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            @if($documents->hasPages())
                <div class="px-6 py-4 border-t border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-700">
                            Showing <span class="font-medium">{{ $documents->firstItem() }}</span> to <span class="font-medium">{{ $documents->lastItem() }}</span> of <span class="font-medium">{{ $documents->total() }}</span> results
                        </div>
                        <div class="flex space-x-2">
                            {{ $documents->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>

<script>
// Load real statistics
document.addEventListener('DOMContentLoaded', function() {
    loadDocumentsStats();
    setupEventListeners();
});

function loadDocumentsStats() {
    fetch('/admin/file-manager/stats')
        .then(response => response.json())
        .then(data => {
            // Update statistics
            document.getElementById('totalStorage').textContent = formatFileSize(data.total_size || 0);
            document.getElementById('availableStorage').textContent = formatFileSize(data.available_storage || 0);
            document.getElementById('documentsCount').textContent = data.documents_count || 0;
            document.getElementById('newThisWeek').textContent = data.new_this_week || 0;
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
}

function filterTable() {
    const searchValue = document.getElementById('searchInput').value.toLowerCase();
    const rows = document.querySelectorAll('tbody tr');
    
    rows.forEach(row => {
        const fileName = row.querySelector('td:first-child .font-medium')?.textContent.toLowerCase() || '';
        const matchesSearch = fileName.includes(searchValue);
        row.style.display = matchesSearch ? '' : 'none';
    });
}

function viewDocument(id) {
    window.location.href = `/admin/file-manager/${id}`;
}

function downloadDocument(id) {
    window.open(`/admin/file-manager/${id}/download`, '_blank');
}

function editDocument(id) {
    window.location.href = `/admin/file-manager/${id}/edit`;
}

function deleteDocument(id) {
    if (confirm('Are you sure you want to delete this document?')) {
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
                alert('Failed to delete document: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error deleting document:', error);
            alert('Failed to delete document');
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

    function getFileIconColor($mimeType) {
        if (str_starts_with($mimeType, 'image/')) return 'text-purple-500';
        if (str_starts_with($mimeType, 'video/')) return 'text-red-600';
        if (str_contains($mimeType, 'pdf')) return 'text-red-500';
        if (str_contains($mimeType, 'word') || str_contains($mimeType, 'document')) return 'text-blue-600';
        if (str_contains($mimeType, 'excel') || str_contains($mimeType, 'spreadsheet')) return 'text-green-600';
        if (str_contains($mimeType, 'powerpoint') || str_contains($mimeType, 'presentation')) return 'text-orange-600';
        if (str_contains($mimeType, 'zip') || str_contains($mimeType, 'rar')) return 'text-yellow-600';
        if (str_contains($mimeType, 'text')) return 'text-gray-500';
        return 'text-gray-400';
    }
@endphp
@endsection
