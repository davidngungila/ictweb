@extends('admin.layouts.app')

@section('title', 'Upload Files')
@section('page-title', 'Upload Files')

@section('content')
<div class="p-6">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Upload Files</h1>
                    <p class="text-gray-600 mt-1">Upload and organize your files</p>
                </div>
                <a href="{{ route('admin.file-manager.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to File Manager
                </a>
            </div>
        </div>

        <!-- Upload Form -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <form id="uploadForm" enctype="multipart/form-data">
                    <div class="space-y-6">
                        <!-- File Upload Area -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Select Files *</label>
                            <div id="dropZone" class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-blue-500 transition-colors cursor-pointer">
                                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                <p class="text-gray-600 mb-2">Drag and drop files here or click to select</p>
                                <p class="text-sm text-gray-500">Maximum file size: 10MB per file • Multiple files supported</p>
                                <input type="file" id="fileInput" name="files[]" multiple class="hidden" accept="*/*">
                            </div>
                            
                            <!-- Selected Files Preview -->
                            <div id="filesPreview" class="mt-4 space-y-2"></div>
                            
                            <!-- Bulk Actions -->
                            <div id="bulkActions" class="mt-4 p-4 bg-gray-50 rounded-lg hidden">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm text-gray-700">
                                        <span id="selectedCount">0</span> files selected
                                        <span id="totalSize" class="ml-2 text-gray-500">(0 MB)</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button type="button" onclick="clearFiles()" class="px-3 py-1 text-sm bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                                            Clear All
                                        </button>
                                        <button type="button" onclick="document.getElementById('fileInput').click()" class="px-3 py-1 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">
                                            Add More Files
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                                <select name="category" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="">Select Category</option>
                                    <option value="documents">Documents</option>
                                    <option value="uploads">Uploads</option>
                                    <option value="downloads">Downloads</option>
                                    <option value="images">Images</option>
                                    <option value="videos">Videos</option>
                                    <option value="general">General</option>
                                </select>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="is_public" id="isPublic" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                <input type="hidden" name="is_public" value="0">
                                <label for="isPublic" class="ml-2 text-sm font-medium text-gray-700">
                                    Make files public (downloadable by anyone)
                                </label>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea name="description" rows="3" placeholder="Add a description for these files (optional)" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-end space-x-3">
                        <a href="{{ route('admin.file-manager.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                            Cancel
                        </a>
                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                            <i class="fas fa-upload mr-2"></i>
                            Upload Files
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Upload Progress -->
        <div id="uploadProgress" class="hidden mt-6">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Upload Progress</h3>
                <div id="progressContainer"></div>
            </div>
        </div>

        <!-- Upload Results -->
        <div id="uploadResults" class="hidden mt-6">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Upload Results</h3>
                <div id="resultsContainer"></div>
            </div>
        </div>
    </div>
</div>

<script>
let selectedFiles = [];

// Drop zone functionality
const dropZone = document.getElementById('dropZone');
const fileInput = document.getElementById('fileInput');
const filesPreview = document.getElementById('filesPreview');
const bulkActions = document.getElementById('bulkActions');
const selectedCount = document.getElementById('selectedCount');
const totalSize = document.getElementById('totalSize');

dropZone.addEventListener('click', () => fileInput.click());

dropZone.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropZone.classList.add('border-blue-500', 'bg-blue-50');
});

dropZone.addEventListener('dragleave', () => {
    dropZone.classList.remove('border-blue-500', 'bg-blue-50');
});

dropZone.addEventListener('drop', (e) => {
    e.preventDefault();
    dropZone.classList.remove('border-blue-500', 'bg-blue-50');
    handleFiles(e.dataTransfer.files);
});

fileInput.addEventListener('change', (e) => {
    handleFiles(e.target.files);
});

function handleFiles(files) {
    const newFiles = Array.from(files).filter(file => file.size <= 10 * 1024 * 1024); // 10MB limit
    const oversizedFiles = Array.from(files).filter(file => file.size > 10 * 1024 * 1024);
    
    // Add new files to selected files (avoid duplicates)
    newFiles.forEach(newFile => {
        if (!selectedFiles.some(existingFile => existingFile.name === newFile.name && existingFile.size === newFile.size)) {
            selectedFiles.push(newFile);
        }
    });
    
    // Show warning for oversized files
    if (oversizedFiles.length > 0) {
        const oversizedNames = oversizedFiles.map(f => f.name).join(', ');
        alert(`The following files exceed the 10MB limit and were skipped:\n${oversizedNames}`);
    }
    
    renderFilesPreview();
    updateBulkActions();
}

function renderFilesPreview() {
    filesPreview.innerHTML = '';
    
    if (selectedFiles.length === 0) {
        bulkActions.classList.add('hidden');
        return;
    }
    
    selectedFiles.forEach((file, index) => {
        const fileItem = document.createElement('div');
        fileItem.className = 'flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors';
        fileItem.innerHTML = `
            <div class="flex items-center flex-1">
                <i class="fas ${getFileIcon(file.type)} text-gray-400 mr-3"></i>
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-900 truncate" title="${file.name}">${file.name}</p>
                    <p class="text-xs text-gray-500">${formatFileSize(file.size)} • ${file.type || 'Unknown type'}</p>
                </div>
            </div>
            <button type="button" onclick="removeFile(${index})" class="ml-3 text-red-500 hover:text-red-700">
                <i class="fas fa-times"></i>
            </button>
        `;
        filesPreview.appendChild(fileItem);
    });
}

function updateBulkActions() {
    const totalFileSize = selectedFiles.reduce((total, file) => total + file.size, 0);
    
    selectedCount.textContent = selectedFiles.length;
    totalSize.textContent = `(${formatFileSize(totalFileSize)})`;
    
    if (selectedFiles.length > 0) {
        bulkActions.classList.remove('hidden');
    } else {
        bulkActions.classList.add('hidden');
    }
}

function clearFiles() {
    selectedFiles = [];
    fileInput.value = '';
    renderFilesPreview();
    updateBulkActions();
}

function removeFile(index) {
    selectedFiles.splice(index, 1);
    renderFilesPreview();
    updateBulkActions();
}

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

function formatFileSize(bytes) {
    const units = ['B', 'KB', 'MB', 'GB'];
    for (let i = 0; bytes > 1024 && i < units.length - 1; i++) {
        bytes /= 1024;
    }
    return bytes.toFixed(2) + ' ' + units[i];
}

// Form submission
document.getElementById('uploadForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    if (selectedFiles.length === 0) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Please select at least one file to upload'
        });
        return;
    }
    
    const formData = new FormData();
    selectedFiles.forEach(file => {
        formData.append('files[]', file);
    });
    
    formData.append('category', document.querySelector('select[name="category"]').value);
    formData.append('description', document.querySelector('textarea[name="description"]').value);
    
    // Handle checkbox properly - remove the hidden input and add the actual value
    const isPublicChecked = document.getElementById('isPublic').checked;
    formData.delete('is_public'); // Remove any existing value
    formData.append('is_public', isPublicChecked ? '1' : '0');
    
    // Show progress
    document.getElementById('uploadProgress').classList.remove('hidden');
    document.getElementById('progressContainer').innerHTML = `
        <div class="space-y-2">
            ${selectedFiles.map(file => `
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-700">${file.name}</span>
                    <span class="text-sm text-gray-500">Uploading...</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 0%"></div>
                </div>
            `).join('')}
        </div>
    `;
    
    try {
        const response = await fetch('/admin/file-manager', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            },
            body: formData
        });
        
        const result = await response.json();
        
        // Hide progress
        document.getElementById('uploadProgress').classList.add('hidden');
        
        // Show results
        document.getElementById('uploadResults').classList.remove('hidden');
        const resultsContainer = document.getElementById('resultsContainer');
        
        if (result.success) {
            resultsContainer.innerHTML = `
                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                    <h4 class="text-green-800 font-semibold mb-2">Upload Successful!</h4>
                    <p class="text-green-700">${result.message}</p>
                    ${result.errors && result.errors.length > 0 ? `
                        <div class="mt-3">
                            <p class="text-yellow-700 font-semibold">Some files had issues:</p>
                            <ul class="list-disc list-inside text-yellow-600 text-sm mt-1">
                                ${result.errors.map(error => `<li>${error}</li>`).join('')}
                            </ul>
                        </div>
                    ` : ''}
                    <div class="mt-4">
                        <a href="{{ route('admin.file-manager.index') }}" class="text-green-600 hover:text-green-800 font-medium">
                            View uploaded files →
                        </a>
                    </div>
                </div>
            `;
            
            // Reset form
            document.getElementById('uploadForm').reset();
            selectedFiles = [];
            renderFilesPreview();
        } else {
            resultsContainer.innerHTML = `
                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                    <h4 class="text-red-800 font-semibold mb-2">Upload Failed</h4>
                    <p class="text-red-700">${result.message}</p>
                    ${result.errors ? `
                        <div class="mt-3">
                            <ul class="list-disc list-inside text-red-600 text-sm">
                                ${Object.values(result.errors).flat().map(error => `<li>${error}</li>`).join('')}
                            </ul>
                        </div>
                    ` : ''}
                </div>
            `;
        }
    } catch (error) {
        console.error('Upload error:', error);
        document.getElementById('uploadProgress').classList.add('hidden');
        document.getElementById('uploadResults').classList.remove('hidden');
        document.getElementById('resultsContainer').innerHTML = `
            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <h4 class="text-red-800 font-semibold mb-2">Upload Error</h4>
                <p class="text-red-700">An unexpected error occurred during upload.</p>
            </div>
        `;
    }
});
</script>
@endsection
