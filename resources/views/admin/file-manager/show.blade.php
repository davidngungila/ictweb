@extends('admin.layouts.app')

@section('title', 'File Details')
@section('page-title', 'File Details')

@section('content')
<div class="p-6">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">File Details</h1>
                    <p class="text-gray-600 mt-1">View and manage file information</p>
                </div>
                <div class="flex space-x-3">
                    <a href="{{ route('admin.file-manager.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Back to Files
                    </a>
                    <a href="{{ route('admin.file-manager.edit', $fileManager) }}" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors">
                        <i class="fas fa-edit mr-2"></i>
                        Edit
                    </a>
                </div>
            </div>
        </div>

        <!-- File Content -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <div class="space-y-6">
                    <!-- File Preview -->
                    <div class="flex items-center justify-center p-8 bg-gray-50 rounded-lg">
                        @if(str_starts_with($fileManager->mime_type, 'image/'))
                            <img src="{{ asset('storage/' . $fileManager->file_path) }}" alt="{{ $fileManager->original_name }}" class="max-w-full max-h-64 rounded-lg shadow">
                        @else
                            <div class="text-center">
                                <i class="fas {{ getFileIcon($fileManager->mime_type) }} text-6xl text-gray-400 mb-4"></i>
                                <p class="text-gray-600">{{ $fileManager->original_name }}</p>
                            </div>
                        @endif
                    </div>

                    <!-- File Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">File Information</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">File Name:</span>
                                    <span class="text-sm font-medium text-gray-900">{{ $fileManager->original_name }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">File Size:</span>
                                    <span class="text-sm font-medium text-gray-900">{{ $fileManager->formatted_size }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">File Type:</span>
                                    <span class="text-sm font-medium text-gray-900">{{ $fileManager->mime_type }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Category:</span>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                        {{ $fileManager->category }}
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Visibility:</span>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $fileManager->is_public ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                        {{ $fileManager->is_public ? 'Public' : 'Private' }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Upload Details</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Uploaded By:</span>
                                    <span class="text-sm font-medium text-gray-900">{{ $fileManager->uploader ? $fileManager->uploader->name : 'Unknown' }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Upload Date:</span>
                                    <span class="text-sm font-medium text-gray-900">{{ $fileManager->created_at->format('M d, Y H:i') }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Last Modified:</span>
                                    <span class="text-sm font-medium text-gray-900">{{ $fileManager->updated_at->format('M d, Y H:i') }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Download Count:</span>
                                    <span class="text-sm font-medium text-gray-900">{{ $fileManager->download_count }}</span>
                                </div>
                                @if($fileManager->last_downloaded_at)
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600">Last Downloaded:</span>
                                        <span class="text-sm font-medium text-gray-900">{{ $fileManager->last_downloaded_at->format('M d, Y H:i') }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if($fileManager->description)
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Description</h3>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="text-gray-900">{{ $fileManager->description }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="pt-6 border-t flex justify-end space-x-3">
                        <form action="{{ route('admin.file-manager.destroy', $fileManager) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this file?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                                <i class="fas fa-trash mr-2"></i>
                                Delete File
                            </button>
                        </form>
                        <a href="{{ route('admin.file-manager.download', $fileManager) }}" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                            <i class="fas fa-download mr-2"></i>
                            Download
                        </a>
                        <a href="{{ route('admin.file-manager.edit', $fileManager) }}" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors">
                            <i class="fas fa-edit mr-2"></i>
                            Edit File
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
