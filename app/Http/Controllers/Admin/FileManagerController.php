<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FileManagerController extends Controller
{
    public function index(Request $request)
    {
        $folderId = $request->get('folder_id');
        $currentFolder = null;
        
        if ($folderId) {
            $currentFolder = FileManager::findOrFail($folderId);
            if (!$currentFolder->is_folder) {
                abort(404, 'Not a folder');
            }
        }
        
        $query = FileManager::with('uploader', 'parent');
        
        // Filter by folder
        if ($folderId) {
            $query->where('parent_id', $folderId);
        } else {
            // Show root level items (no parent)
            $query->whereNull('parent_id');
        }
        
        // Filter by category
        if ($request->has('category') && $request->category !== '') {
            $query->where('category', $request->category);
        }
        
        // Search by filename or description
        if ($request->has('search') && $request->search !== '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('original_name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        
        // Filter by visibility (only for files, not folders)
        if ($request->has('visibility') && $request->visibility !== '') {
            if ($request->visibility === 'public') {
                $query->where(function($q) {
                    $q->where('is_public', true)
                      ->orWhere('is_folder', true); // Show all folders
                });
            } elseif ($request->visibility === 'private') {
                $query->where(function($q) {
                    $q->where('is_public', false)
                      ->where('is_folder', false); // Only private files
                });
            }
        }
        
        // Sorting: folders first, then files
        $query->orderBy('is_folder', 'desc');
        
        // Additional sorting
        $sortColumn = $request->get('sort', 'original_name');
        $sortOrder = $request->get('order', 'asc');
        $query->orderBy($sortColumn, $sortOrder);
        
        $files = $query->paginate(20);
        
        if ($request->ajax()) {
            return response()->json($files);
        }
        
        return view('admin.file-manager.index', compact('files', 'currentFolder'));
    }
    
    public function upload()
    {
        return view('admin.file-manager.upload');
    }
    
    public function store(Request $request)
    {
        // Handle folder creation
        if ($request->has('create_folder') && $request->create_folder) {
            $validator = Validator::make($request->all(), [
                'folder_name' => 'required|string|max:255',
                'parent_id' => 'nullable|exists:file_managers,id',
            ]);
            
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }
            
            $parent = $request->parent_id ? FileManager::find($request->parent_id) : null;
            $folderPath = $parent ? ($parent->folder_path ? $parent->folder_path . '/' . $parent->original_name : $parent->original_name) : '';
            
            $folder = FileManager::create([
                'original_name' => $request->folder_name,
                'filename' => 'folder_' . time(),
                'mime_type' => 'folder',
                'file_path' => '',
                'file_size' => 0,
                'category' => 'general',
                'description' => $request->folder_description,
                'uploaded_by' => auth('admin')->id(),
                'is_public' => false,
                'parent_id' => $request->parent_id,
                'folder_path' => $folderPath,
                'is_folder' => true,
            ]);
            
            return response()->json([
                'success' => true,
                'message' => 'Folder created successfully',
                'folder' => $folder
            ]);
        }
        
        // Handle file upload
        $validator = Validator::make($request->all(), [
            'files.*' => 'required|file|max:10240', // 10MB max
            'category' => 'required|in:documents,uploads,downloads,images,videos,general',
            'description' => 'nullable|string|max:500',
            'is_public' => 'sometimes|boolean',
            'parent_id' => 'nullable|exists:file_managers,id',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        $uploadedFiles = [];
        $errors = [];
        
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                try {
                    $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('file-manager', $filename, 'public');
                    
                    // Get folder path
                    $parent = $request->parent_id ? FileManager::find($request->parent_id) : null;
                    $folderPath = $parent ? ($parent->folder_path ? $parent->folder_path . '/' . $parent->original_name : $parent->original_name) : '';
                    
                    $fileManager = FileManager::create([
                        'filename' => $filename,
                        'original_name' => $file->getClientOriginalName(),
                        'mime_type' => $file->getMimeType(),
                        'file_path' => $filePath,
                        'file_size' => $file->getSize(),
                        'category' => $request->category,
                        'description' => $request->description,
                        'uploaded_by' => auth('admin')->id(),
                        'is_public' => $request->boolean('is_public', false),
                        'parent_id' => $request->parent_id,
                        'folder_path' => $folderPath,
                        'is_folder' => false,
                    ]);
                    
                    $uploadedFiles[] = $fileManager;
                } catch (\Exception $e) {
                    $errors[] = 'Failed to upload file: ' . $file->getClientOriginalName() . '. Error: ' . $e->getMessage();
                }
            }
        }
        
        return response()->json([
            'success' => true,
            'message' => count($uploadedFiles) . ' file(s) uploaded successfully',
            'uploaded_files' => $uploadedFiles,
            'errors' => $errors
        ]);
    }
    
    public function documents()
    {
        $documents = FileManager::where('category', 'documents')
            ->with('uploader')
            ->orderBy('created_at', 'desc')
            ->paginate(20);
            
        return view('admin.file-manager.documents', compact('documents'));
    }
    
    public function downloads()
    {
        $downloads = FileManager::where('is_public', true)
            ->with('uploader')
            ->orderBy('download_count', 'desc')
            ->paginate(20);
            
        return view('admin.file-manager.downloads', compact('downloads'));
    }
    
    public function preview(FileManager $fileManager)
    {
        if (!$fileManager->is_public && $fileManager->uploaded_by !== auth('admin')->id()) {
            abort(403, 'Unauthorized access to this file');
        }
        
        $filePath = storage_path('app/public/' . $fileManager->file_path);
        
        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }
        
        // Determine file type and preview strategy
        $mimeType = $fileManager->mime_type;
        $previewData = null;
        
        if (str_starts_with($mimeType, 'image/')) {
            // For images, return the image directly
            return response()->file($filePath);
        } elseif (str_contains($mimeType, 'pdf')) {
            // For PDFs, return file info for PDF.js viewer
            $previewData = [
                'type' => 'pdf',
                'url' => asset('storage/' . $fileManager->file_path),
                'name' => $fileManager->original_name,
                'size' => $fileManager->formatted_size
            ];
        } elseif (str_contains($mimeType, 'text') || str_contains($mimeType, 'csv') || str_contains($mimeType, 'json')) {
            // For text files, read content
            $content = file_get_contents($filePath);
            $previewData = [
                'type' => 'text',
                'content' => $content,
                'name' => $fileManager->original_name,
                'size' => $fileManager->formatted_size
            ];
        } elseif (str_contains($mimeType, 'word') || str_contains($mimeType, 'document') || str_contains($mimeType, 'openxmlformats-officedocument.wordprocessingml.document')) {
            // For Word documents, show formatted info table
            $previewData = [
                'type' => 'word',
                'name' => $fileManager->original_name,
                'size' => $fileManager->formatted_size,
                'mime_type' => $mimeType,
                'file_info' => $this->getFileInfo($filePath, $fileManager),
                'description' => $fileManager->description,
                'uploaded_by' => $fileManager->uploader->name ?? 'Unknown',
                'uploaded_at' => $fileManager->created_at->format('M d, Y H:i'),
                'download_count' => $fileManager->download_count,
                'last_downloaded' => $fileManager->last_downloaded_at ? $fileManager->last_downloaded_at->format('M d, Y H:i') : 'Never'
            ];
        } elseif (str_contains($mimeType, 'excel') || str_contains($mimeType, 'spreadsheet') || str_contains($mimeType, 'openxmlformats-officedocument.spreadsheetml.sheet')) {
            // For Excel files, show formatted info table
            $previewData = [
                'type' => 'excel',
                'name' => $fileManager->original_name,
                'size' => $fileManager->formatted_size,
                'mime_type' => $mimeType,
                'file_info' => $this->getFileInfo($filePath, $fileManager),
                'description' => $fileManager->description,
                'uploaded_by' => $fileManager->uploader->name ?? 'Unknown',
                'uploaded_at' => $fileManager->created_at->format('M d, Y H:i'),
                'download_count' => $fileManager->download_count,
                'last_downloaded' => $fileManager->last_downloaded_at ? $fileManager->last_downloaded_at->format('M d, Y H:i') : 'Never'
            ];
        } elseif (str_contains($mimeType, 'powerpoint') || str_contains($mimeType, 'presentation') || str_contains($mimeType, 'openxmlformats-officedocument.presentationml.presentation')) {
            // For PowerPoint files, show formatted info table
            $previewData = [
                'type' => 'powerpoint',
                'name' => $fileManager->original_name,
                'size' => $fileManager->formatted_size,
                'mime_type' => $mimeType,
                'file_info' => $this->getFileInfo($filePath, $fileManager),
                'description' => $fileManager->description,
                'uploaded_by' => $fileManager->uploader->name ?? 'Unknown',
                'uploaded_at' => $fileManager->created_at->format('M d, Y H:i'),
                'download_count' => $fileManager->download_count,
                'last_downloaded' => $fileManager->last_downloaded_at ? $fileManager->last_downloaded_at->format('M d, Y H:i') : 'Never'
            ];
        } elseif (str_contains($mimeType, 'xml') || str_contains($mimeType, 'html') || str_contains($mimeType, 'javascript') || str_contains($mimeType, 'css') || str_contains($mimeType, 'php')) {
            // For code files, read content with syntax highlighting
            $content = file_get_contents($filePath);
            $previewData = [
                'type' => 'code',
                'content' => $content,
                'name' => $fileManager->original_name,
                'size' => $fileManager->formatted_size,
                'language' => $this->getCodeLanguage($mimeType)
            ];
        } else {
            // For other files, show detailed file info table
            $previewData = [
                'type' => 'info',
                'name' => $fileManager->original_name,
                'size' => $fileManager->formatted_size,
                'mime_type' => $mimeType,
                'file_info' => $this->getFileInfo($filePath, $fileManager),
                'description' => $fileManager->description,
                'uploaded_by' => $fileManager->uploader->name ?? 'Unknown',
                'uploaded_at' => $fileManager->created_at->format('M d, Y H:i'),
                'download_count' => $fileManager->download_count,
                'last_downloaded' => $fileManager->last_downloaded_at ? $fileManager->last_downloaded_at->format('M d, Y H:i') : 'Never',
                'category' => $fileManager->category,
                'is_public' => $fileManager->is_public ? 'Yes' : 'No'
            ];
        }
        
        return view('admin.file-manager.preview', compact('fileManager', 'previewData'));
    }

    /**
     * Get detailed file information
     */
    private function getFileInfo($filePath, $fileManager)
    {
        $fileInfo = [];
        
        if (file_exists($filePath)) {
            $fileInfo['file_size'] = $fileManager->formatted_size;
            $fileInfo['file_size_bytes'] = $fileManager->file_size;
            $fileInfo['mime_type'] = $fileManager->mime_type;
            $fileInfo['extension'] = pathinfo($fileManager->original_name, PATHINFO_EXTENSION);
            $fileInfo['last_modified'] = date('M d, Y H:i', filemtime($filePath));
            
            // Get file permissions
            $fileInfo['permissions'] = substr(sprintf('%o', fileperms($filePath)), -4);
            
            // Check if file is readable/writable
            $fileInfo['readable'] = is_readable($filePath) ? 'Yes' : 'No';
            $fileInfo['writable'] = is_writable($filePath) ? 'Yes' : 'No';
        }
        
        return $fileInfo;
    }

    /**
     * Get code language for syntax highlighting
     */
    private function getCodeLanguage($mimeType)
    {
        $languages = [
            'text/html' => 'html',
            'text/css' => 'css',
            'text/javascript' => 'javascript',
            'application/javascript' => 'javascript',
            'application/json' => 'json',
            'text/xml' => 'xml',
            'application/xml' => 'xml',
            'text/php' => 'php',
            'application/x-php' => 'php',
            'text/x-python' => 'python',
            'text/x-java-source' => 'java',
            'text/x-c' => 'c',
            'text/x-c++' => 'cpp',
        ];
        
        return $languages[$mimeType] ?? 'text';
    }

    public function download(FileManager $fileManager)
    {
        if (!$fileManager->is_public && $fileManager->uploaded_by !== auth('admin')->id()) {
            abort(403, 'Unauthorized access to this file');
        }
        
        $filePath = storage_path('app/public/' . $fileManager->file_path);
        
        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }
        
        $fileManager->incrementDownloadCount();
        
        return response()->download($filePath, $fileManager->original_name, [
            'Content-Type' => $fileManager->mime_type,
        ]);
    }
    
    public function show(FileManager $fileManager)
    {
        $fileManager->load('uploader');
        return view('admin.file-manager.show', compact('fileManager'));
    }
    
    public function edit(FileManager $fileManager)
    {
        if ($fileManager->uploaded_by !== auth('admin')->id()) {
            abort(403, 'Unauthorized to edit this file');
        }
        
        $fileManager->load('uploader');
        return view('admin.file-manager.edit', compact('fileManager'));
    }
    
    public function update(Request $request, FileManager $fileManager)
    {
        if ($fileManager->uploaded_by !== auth('admin')->id()) {
            abort(403, 'Unauthorized to edit this file');
        }
        
        $validator = Validator::make($request->all(), [
            'description' => 'nullable|string|max:500',
            'category' => 'required|in:documents,uploads,downloads,images,videos,general',
            'is_public' => 'sometimes|boolean',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        $fileManager->update([
            'description' => $request->description,
            'category' => $request->category,
            'is_public' => $request->boolean('is_public', false),
        ]);
        
        return response()->json([
            'success' => true,
            'message' => 'File updated successfully',
            'file' => $fileManager
        ]);
    }
    
    public function destroy(FileManager $fileManager)
    {
        if ($fileManager->uploaded_by !== auth('admin')->id()) {
            abort(403, 'Unauthorized to delete this file');
        }
        
        if ($fileManager->deleteFile()) {
            return response()->json([
                'success' => true,
                'message' => 'File deleted successfully'
            ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Failed to delete file'
        ], 500);
    }
    
    public function stats()
    {
        $stats = [
            'total_files' => FileManager::count(),
            'total_size' => FileManager::sum('file_size'),
            'documents' => FileManager::category('documents')->count(),
            'uploads' => FileManager::category('uploads')->count(),
            'downloads' => FileManager::category('downloads')->count(),
            'public_files' => FileManager::public()->count(),
            'private_files' => FileManager::private()->count(),
            'total_downloads' => FileManager::sum('download_count'),
            'new_this_month' => FileManager::whereMonth('created_at', now()->month)->count(),
            'growth_rate' => $this->calculateGrowthRate()
        ];
        
        return response()->json($stats);
    }
    
    private function calculateGrowthRate()
    {
        $thisMonth = FileManager::whereMonth('created_at', now()->month)->count();
        $lastMonth = FileManager::whereMonth('created_at', now()->subMonth()->month)->count();
        
        if ($lastMonth == 0) {
            return $thisMonth > 0 ? 100 : 0;
        }
        
        return round((($thisMonth - $lastMonth) / $lastMonth * 100), 2);
    }
}
