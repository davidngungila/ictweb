@extends('admin.layouts.app')

@section('title', 'Create Folder')
@section('page-title', 'Create Folder')

@section('content')
<div class="p-6">
    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Create New Folder</h1>
                    <p class="text-gray-600 mt-1">Create a new folder to organize your files</p>
                </div>
                <a href="{{ request()->get('folder_id') ? route('admin.file-manager.index', ['folder_id' => request()->get('folder_id')]) : route('admin.file-manager.index') }}" 
                   class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back
                </a>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <form id="createFolderForm" onsubmit="handleCreateFolder(event)">
                    <div class="space-y-6">
                        <div>
                            <label for="folderName" class="block text-sm font-medium text-gray-700 mb-2">
                                Folder Name *
                            </label>
                            <input type="text" 
                                   id="folderName" 
                                   name="folder_name" 
                                   required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   placeholder="Enter folder name">
                        </div>

                        <div>
                            <label for="folderDescription" class="block text-sm font-medium text-gray-700 mb-2">
                                Description
                            </label>
                            <textarea id="folderDescription" 
                                      name="folder_description" 
                                      rows="3" 
                                      class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                      placeholder="Optional folder description"></textarea>
                        </div>

                        @if(request()->get('folder_id'))
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Parent Folder
                                </label>
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                    <i class="fas fa-folder text-yellow-500 mr-2"></i>
                                    <span class="text-sm text-gray-700">
                                        Creating in: {{ request()->get('folder_name') ?? 'Parent Folder' }}
                                    </span>
                                </div>
                                <input type="hidden" name="parent_id" value="{{ request()->get('folder_id') }}">
                            </div>
                        @endif

                        <div class="flex justify-end space-x-3 pt-4 border-t">
                            <a href="{{ request()->get('folder_id') ? route('admin.file-manager.index', ['folder_id' => request()->get('folder_id')]) : route('admin.file-manager.index') }}" 
                               class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                                Cancel
                            </a>
                            <button type="submit" 
                                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center">
                                <i class="fas fa-folder-plus mr-2"></i>
                                Create Folder
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function handleCreateFolder(event) {
    event.preventDefault();
    
    const formData = new FormData(event.target);
    
    fetch('{{ route('admin.file-manager.store') }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: data.message,
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                // Redirect back to folder
                window.location.href = '{{ request()->get('folder_id') ? route('admin.file-manager.index', ['folder_id' => request()->get('folder_id')]) : route('admin.file-manager.index') }}';
            });
        } else {
            // Show error message
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: data.message || 'Failed to create folder',
                confirmButtonColor: '#3B82F6'
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'An unexpected error occurred. Please try again.',
            confirmButtonColor: '#3B82F6'
        });
    });
}
</script>
@endsection
