@extends('admin.layouts.app')

@section('title', 'Preview - ' . $fileManager->original_name)
@section('page-title', 'Document Preview')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center space-x-4">
            <a href="{{ URL::previous() }}" class="text-gray-600 hover:text-gray-900">
                <i class="fas fa-arrow-left mr-2"></i>
                Back
            </a>
            <div>
                <h1 class="text-2xl font-bold text-gray-900">{{ $fileManager->original_name }}</h1>
                <p class="text-sm text-gray-600">
                    Uploaded by {{ $fileManager->uploader ? $fileManager->uploader->name : 'Unknown' }} on {{ $fileManager->created_at->format('M d, Y \a\t H:i') }}
                </p>
            </div>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ route('admin.file-manager.download', $fileManager) }}" 
               class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-download mr-2"></i>
                Download
            </a>
            @if($fileManager->uploaded_by === auth('admin')->id())
                <a href="{{ route('admin.file-manager.edit', $fileManager) }}" 
                   class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                    <i class="fas fa-edit mr-2"></i>
                    Edit
                </a>
            @endif
        </div>
    </div>

    <!-- File Info Bar -->
    <div class="bg-white rounded-lg shadow p-4 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-blue-100 rounded-lg">
                    <i class="fas {{ getFileIcon($fileManager->mime_type) }} text-blue-600"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">File Type</p>
                    <p class="text-sm font-medium text-gray-900">{{ $fileManager->mime_type }}</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-green-100 rounded-lg">
                    <i class="fas fa-database text-green-600"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Size</p>
                    <p class="text-sm font-medium text-gray-900">{{ $fileManager->formatted_size }}</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-purple-100 rounded-lg">
                    <i class="fas fa-folder text-purple-600"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Category</p>
                    <p class="text-sm font-medium text-gray-900">{{ ucfirst($fileManager->category) }}</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-yellow-100 rounded-lg">
                    <i class="fas fa-eye text-yellow-600"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Downloads</p>
                    <p class="text-sm font-medium text-gray-900">{{ $fileManager->download_count }}</p>
                </div>
            </div>
        </div>
        @if($fileManager->description)
            <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-sm text-gray-600 mb-1">Description</p>
                <p class="text-sm text-gray-900">{{ $fileManager->description }}</p>
            </div>
        @endif
    </div>

    <!-- Preview Area -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Preview</h3>
        </div>
        
        <div class="p-6">
            @if($previewData['type'] == 'pdf')
                <!-- PDF Preview -->
                <div class="pdf-preview">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <button onclick="previousPage()" class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <span class="text-sm text-gray-600">
                                Page: <span id="page-num">1</span> / <span id="page-count">1</span>
                            </span>
                            <button onclick="nextPage()" class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button onclick="zoomOut()" class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                                <i class="fas fa-search-minus"></i>
                            </button>
                            <span class="text-sm text-gray-600" id="zoom-level">100%</span>
                            <button onclick="zoomIn()" class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg overflow-auto" style="height: 600px;">
                        <canvas id="pdf-canvas" class="mx-auto"></canvas>
                    </div>
                </div>
                
            @elseif($previewData['type'] == 'text')
                <!-- Text File Preview -->
                <div class="text-preview">
                    <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                        <pre class="text-sm text-gray-800 whitespace-pre-wrap max-h-96 overflow-y-auto">{{ $previewData['content'] }}</pre>
                    </div>
                </div>
                
            @elseif($previewData['type'] == 'code')
                <!-- Code File Preview -->
                <div class="code-preview">
                    <div class="mb-3 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">{{ $previewData['language'] }}</span>
                            <span class="text-sm text-gray-600">{{ $previewData['size'] }}</span>
                        </div>
                        <button onclick="copyCode()" class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 text-sm">
                            <i class="fas fa-copy mr-1"></i>Copy
                        </button>
                    </div>
                    <div class="bg-gray-900 rounded-lg p-4 border border-gray-200 overflow-auto" style="max-height: 600px;">
                        <pre class="text-sm text-gray-100 font-mono whitespace-pre-wrap"><code>{{ $previewData['content'] }}</code></pre>
                    </div>
                </div>
                
            @elseif(in_array($previewData['type'], ['word', 'excel', 'powerpoint']))
                <!-- Office Document Preview -->
                <div class="office-preview">
                    <div class="mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="p-4 bg-{{ $previewData['type'] == 'word' ? 'blue' : ($previewData['type'] == 'excel' ? 'green' : 'orange') }}-100 rounded-lg">
                                <i class="fas fa-file-{{ $previewData['type'] }} text-{{ $previewData['type'] == 'word' ? 'blue' : ($previewData['type'] == 'excel' ? 'green' : 'orange') }}-600 text-3xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">{{ ucfirst($previewData['type']) }} Document</h3>
                                <p class="text-sm text-gray-600">{{ $previewData['name'] }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Document Information Table -->
                    <div class="bg-gray-50 rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">File Name</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['name'] }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">File Size</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['size'] }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">File Type</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['mime_type'] }}</td>
                                </tr>
                                @if(isset($previewData['file_info']['extension']))
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Extension</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['file_info']['extension'] }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Uploaded By</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['uploaded_by'] }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Uploaded At</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['uploaded_at'] }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Download Count</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['download_count'] }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Last Downloaded</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['last_downloaded'] }}</td>
                                </tr>
                                @if($previewData['description'])
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Description</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $previewData['description'] }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="mt-6 flex justify-center space-x-4">
                        <a href="{{ route('admin.file-manager.download', $fileManager) }}" 
                           class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 inline-flex items-center">
                            <i class="fas fa-download mr-2"></i>
                            Download {{ ucfirst($previewData['type']) }} File
                        </a>
                        @if($fileManager->uploaded_by === auth('admin')->id())
                            <a href="{{ route('admin.file-manager.edit', $fileManager) }}" 
                               class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 inline-flex items-center">
                                <i class="fas fa-edit mr-2"></i>
                                Edit File Info
                            </a>
                        @endif
                    </div>
                </div>
                
            @elseif($previewData['type'] == 'info')
                <!-- General File Information -->
                <div class="info-preview">
                    <div class="mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="p-4 bg-gray-100 rounded-lg">
                                <i class="fas {{ getFileIcon($fileManager->mime_type) }} text-gray-600 text-3xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">File Information</h3>
                                <p class="text-sm text-gray-600">{{ $previewData['name'] }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Complete File Information Table -->
                    <div class="bg-gray-50 rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">File Name</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['name'] }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">File Size</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['size'] }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">MIME Type</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['mime_type'] }}</td>
                                </tr>
                                @if(isset($previewData['file_info']['extension']))
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Extension</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['file_info']['extension'] }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Category</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ ucfirst($previewData['category']) }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Visibility</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $previewData['is_public'] == 'Yes' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                            {{ $previewData['is_public'] }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Uploaded By</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['uploaded_by'] }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Uploaded At</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['uploaded_at'] }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Download Count</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['download_count'] }}</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Last Downloaded</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['last_downloaded'] }}</td>
                                </tr>
                                @if(isset($previewData['file_info']['last_modified']))
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Last Modified</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['file_info']['last_modified'] }}</td>
                                </tr>
                                @endif
                                @if(isset($previewData['file_info']['permissions']))
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Permissions</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['file_info']['permissions'] }}</td>
                                </tr>
                                @endif
                                @if(isset($previewData['file_info']['readable']))
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Readable</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['file_info']['readable'] }}</td>
                                </tr>
                                @endif
                                @if(isset($previewData['file_info']['writable']))
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Writable</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $previewData['file_info']['writable'] }}</td>
                                </tr>
                                @endif
                                @if($previewData['description'])
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Description</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $previewData['description'] }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="mt-6 flex justify-center space-x-4">
                        <a href="{{ route('admin.file-manager.download', $fileManager) }}" 
                           class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 inline-flex items-center">
                            <i class="fas fa-download mr-2"></i>
                            Download File
                        </a>
                        @if($fileManager->uploaded_by === auth('admin')->id())
                            <a href="{{ route('admin.file-manager.edit', $fileManager) }}" 
                               class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 inline-flex items-center">
                                <i class="fas fa-edit mr-2"></i>
                                Edit File Info
                            </a>
                        @endif
                    </div>
                </div>
                
            @endif
        </div>
    </div>
</div>

<script>
// PDF Preview functionality
let pdfDoc = null;
let pageNum = 1;
let pageRendering = false;
let pageNumPending = null;
let scale = 1.0;
let canvas = document.getElementById('pdf-canvas');
let ctx = canvas.getContext('2d');

@if($previewData['type'] == 'pdf')
/**
 * Get page info from document, resize canvas accordingly, and render page.
 * @param num Page number.
 */
function renderPage(num) {
    pageRendering = true;
    // Using promise to fetch the page
    pdfDoc.getPage(num).then(function(page) {
        const viewport = page.getViewport({scale: scale});
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        // Render PDF page into canvas context
        const renderContext = {
            canvasContext: ctx,
            viewport: viewport
        };
        const renderTask = page.render(renderContext);

        // Wait for rendering to finish
        renderTask.promise.then(function() {
            pageRendering = false;
            if (pageNumPending !== null) {
                // New page rendering is pending
                renderPage(pageNumPending);
                pageNumPending = null;
            }
        });
    });

    // Update page counters
    document.getElementById('page-num').textContent = num;
}

/**
 * If another page rendering in progress, waits until the rendering is
 * finised. Otherwise, executes rendering immediately.
 */
function queueRenderPage(num) {
    if (pageRendering) {
        pageNumPending = num;
    } else {
        renderPage(num);
    }
}

/**
 * Displays previous page.
 */
function previousPage() {
    if (pageNum <= 1) {
        return;
    }
    pageNum--;
    queueRenderPage(pageNum);
}

/**
 * Displays next page.
 */
function nextPage() {
    if (pageNum >= pdfDoc.numPages) {
        return;
    }
    pageNum++;
    queueRenderPage(pageNum);
}

/**
 * Zoom in
 */
function zoomIn() {
    if (scale < 2.0) {
        scale += 0.25;
        updateZoomLevel();
        queueRenderPage(pageNum);
    }
}

/**
 * Zoom out
 */
function zoomOut() {
    if (scale > 0.5) {
        scale -= 0.25;
        updateZoomLevel();
        queueRenderPage(pageNum);
    }
}

/**
 * Update zoom level display
 */
function updateZoomLevel() {
    document.getElementById('zoom-level').textContent = Math.round(scale * 100) + '%';
}

/**
 * Asynchronously downloads PDF.
 */
function loadPDF() {
    const url = '{{ $previewData['url'] }}';
    
    pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
        pdfDoc = pdfDoc_;
        document.getElementById('page-count').textContent = pdfDoc.numPages;
        
        // Initial/first page rendering
        renderPage(pageNum);
    }).catch(function(error) {
        console.error('Error loading PDF:', error);
        document.querySelector('.pdf-preview').innerHTML = `
            <div class="text-center py-12">
                <i class="fas fa-exclamation-triangle text-4xl text-yellow-500 mb-4"></i>
                <p class="text-gray-600">Unable to load PDF preview. Please <a href="{{ route('admin.file-manager.download', $fileManager) }}" class="text-blue-600 hover:text-blue-800">download the file</a> to view it.</p>
            </div>
        `;
    });
}

// Load PDF when page loads
document.addEventListener('DOMContentLoaded', function() {
    loadPDF();
});
@endif

// Copy code function
function copyCode() {
    const codeElement = document.querySelector('.code-preview code');
    if (codeElement) {
        navigator.clipboard.writeText(codeElement.textContent).then(() => {
            // Show success message
            const button = document.querySelector('button[onclick="copyCode()"]');
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="fas fa-check mr-1"></i>Copied!';
            button.classList.add('bg-green-200', 'text-green-700');
            
            setTimeout(() => {
                button.innerHTML = originalText;
                button.classList.remove('bg-green-200', 'text-green-700');
            }, 2000);
        }).catch(err => {
            console.error('Failed to copy code:', err);
        });
    }
}

// Handle keyboard shortcuts
document.addEventListener('keydown', function(e) {
    // Escape key to go back
    if (e.key === 'Escape') {
        window.history.back();
    }
    
    // Ctrl/Cmd + D to download
    if ((e.ctrlKey || e.metaKey) && e.key === 'd') {
        e.preventDefault();
        window.location.href = '{{ route('admin.file-manager.download', $fileManager) }}';
    }
    
    @if($previewData['type'] == 'pdf')
    // Arrow keys for PDF navigation
    if (e.key === 'ArrowLeft') {
        previousPage();
    } else if (e.key === 'ArrowRight') {
        nextPage();
    } else if (e.key === '+' || e.key === '=') {
        zoomIn();
    } else if (e.key === '-' || e.key === '_') {
        zoomOut();
    }
    @endif
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
