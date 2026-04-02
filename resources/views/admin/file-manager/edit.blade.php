@extends('admin.layouts.app')

@section('title', 'Edit File')
@section('page-title', 'Edit File')

@section('content')
<div class="p-6">
    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Edit File</h1>
                    <p class="text-gray-600 mt-1">Update file information</p>
                </div>
                <a href="{{ route('admin.file-manager.show', $fileManager) }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to File
                </a>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <form id="editFileForm" onsubmit="handleUpdateFile(event)">
                    <input type="hidden" name="id" value="{{ $fileManager->id }}">
                    
                    <div class="space-y-6">
                        <!-- File Preview -->
                        <div class="flex items-center justify-center p-6 bg-gray-50 rounded-lg">
                            @if(str_starts_with($fileManager->mime_type, 'image/'))
                                <img src="{{ asset('storage/' . $fileManager->file_path) }}" alt="{{ $fileManager->original_name }}" class="max-w-full max-h-32 rounded-lg shadow">
                            @else
                                <div class="text-center">
                                    <i class="fas {{ getFileIcon($fileManager->mime_type) }} text-4xl text-gray-400 mb-2"></i>
                                    <p class="text-sm text-gray-600">{{ $fileManager->original_name }}</p>
                                </div>
                            @endif
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                                <select name="category" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                                    <option value="">Select Category</option>
                                    <option value="documents" {{ $fileManager->category === 'documents' ? 'selected' : '' }}>Documents</option>
                                    <option value="uploads" {{ $fileManager->category === 'uploads' ? 'selected' : '' }}>Uploads</option>
                                    <option value="downloads" {{ $fileManager->category === 'downloads' ? 'selected' : '' }}>Downloads</option>
                                    <option value="images" {{ $fileManager->category === 'images' ? 'selected' : '' }}>Images</option>
                                    <option value="videos" {{ $fileManager->category === 'videos' ? 'selected' : '' }}>Videos</option>
                                    <option value="general" {{ $fileManager->category === 'general' ? 'selected' : '' }}>General</option>
                                </select>
                            </div>
                            <div class="flex items-center justify-end">
                                <div class="flex items-center">
                                    <input type="checkbox" name="is_public" id="isPublic" {{ $fileManager->is_public ? 'checked' : '' }} class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded">
                                    <label for="isPublic" class="ml-2 text-sm font-medium text-gray-700">
                                        Make file public (downloadable by anyone)
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea name="description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">{{ $fileManager->description ?? '' }}</textarea>
                        </div>
                        
                        <!-- File Information (Read-only) -->
                        <div class="bg-gray-50 rounded-lg p-4">
                            <h3 class="text-sm font-semibold text-gray-700 mb-3">File Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div>
                                    <span class="text-gray-600">Original Name:</span>
                                    <p class="font-medium text-gray-900">{{ $fileManager->original_name }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-600">File Size:</span>
                                    <p class="font-medium text-gray-900">{{ $fileManager->formatted_size }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-600">File Type:</span>
                                    <p class="font-medium text-gray-900">{{ $fileManager->mime_type }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-600">Uploaded By:</span>
                                    <p class="font-medium text-gray-900">{{ $fileManager->uploader ? $fileManager->uploader->name : 'Unknown' }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-600">Upload Date:</span>
                                    <p class="font-medium text-gray-900">{{ $fileManager->created_at->format('M d, Y H:i') }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-600">Downloads:</span>
                                    <p class="font-medium text-gray-900">{{ $fileManager->download_count }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-end space-x-3">
                        <a href="{{ route('admin.file-manager.show', $fileManager) }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                            Cancel
                        </a>
                        <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors">
                            <i class="fas fa-save mr-2"></i>
                            Update File
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function handleUpdateFile(event) {
    event.preventDefault();
    
    const formData = new FormData(event.target);
    const fileId = formData.get('id');
    
    fetch(`/admin/file-manager/${fileId}`, {
        method: 'PUT',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: data.message,
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                window.location.href = `/admin/file-manager/${fileId}`;
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message
            });
        }
    })
    .catch(error => {
        console.error('Error updating file:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Failed to update file'
        });
    });
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
