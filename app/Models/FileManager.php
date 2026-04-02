<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class FileManager extends Model
{
    protected $fillable = [
        'filename',
        'original_name',
        'mime_type',
        'file_path',
        'file_size',
        'category',
        'description',
        'uploaded_by',
        'is_public',
        'parent_id',
        'folder_path',
        'is_folder',
        'download_count',
        'last_downloaded_at',
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'is_folder' => 'boolean',
        'download_count' => 'integer',
        'last_downloaded_at' => 'datetime',
    ];

    public function uploader(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'uploaded_by');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(FileManager::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(FileManager::class, 'parent_id')->orderBy('is_folder', 'desc')->orderBy('original_name');
    }

    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }

    public function getFormattedSizeAttribute(): string
    {
        $bytes = $this->file_size;
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        
        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }
        
        return round($bytes, 2) . ' ' . $units[$i];
    }

    public function getDownloadUrlAttribute(): string
    {
        return route('admin.file-manager.download', $this);
    }

    public function incrementDownloadCount(): void
    {
        $this->increment('download_count');
        $this->update(['last_downloaded_at' => now()]);
    }

    // Folder related methods
    public function getFullPathAttribute(): string
    {
        if ($this->is_folder) {
            return $this->folder_path ? $this->folder_path . '/' . $this->original_name : $this->original_name;
        }
        return $this->folder_path ? $this->folder_path : 'Root';
    }

    public function getBreadcrumbAttribute(): array
    {
        $breadcrumb = [];
        $current = $this;
        
        while ($current) {
            array_unshift($breadcrumb, [
                'id' => $current->id,
                'name' => $current->original_name,
                'is_folder' => $current->is_folder
            ]);
            $current = $current->parent;
        }
        
        return $breadcrumb;
    }

    public function isRootFolder(): bool
    {
        return $this->is_folder && $this->parent_id === null;
    }

    public function getFolderContents()
    {
        return $this->children()->with('uploader')->get();
    }

    // Scopes
    public function scopeRootFolders($query)
    {
        return $query->where('is_folder', true)->where('parent_id', null);
    }

    public function scopeFolders($query)
    {
        return $query->where('is_folder', true);
    }

    public function scopeFiles($query)
    {
        return $query->where('is_folder', false);
    }

    public function scopeInFolder($query, $folderId)
    {
        return $query->where('parent_id', $folderId);
    }

    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopePublic($query)
    {
        return $query->where('is_public', true);
    }

    public function scopePrivate($query)
    {
        return $query->where('is_public', false);
    }

    public function deleteFile(): bool
    {
        if (Storage::disk('public')->exists($this->file_path)) {
            Storage::disk('public')->delete($this->file_path);
        }
        
        return $this->delete();
    }
}
