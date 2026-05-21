<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
        'project_number',
        'title',
        'description',
        'client_id',
        'demo_request_id',
        'service_type',
        'price',
        'currency',
        'start_date',
        'end_date',
        'status',
        'progress_percentage',
        'current_stage',
        'stages_completed',
        'notes',
        'assigned_to',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date',
        'progress_percentage' => 'integer',
        'stages_completed' => 'array',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(ProjectTask::class)->orderBy('order');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(ProjectMessage::class)->latest();
    }

    public function completedTasks(): HasMany
    {
        return $this->tasks()->where('status', 'completed');
    }

    public function incompleteTasks(): HasMany
    {
        return $this->tasks()->where('status', '!=', 'completed');
    }

    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            'pending' => 'yellow',
            'in_progress' => 'blue',
            'development' => 'purple',
            'testing' => 'orange',
            'deployment' => 'indigo',
            'completed' => 'green',
            'cancelled' => 'red',
            default => 'gray',
        };
    }

    public function getStatusIconAttribute(): string
    {
        return match($this->status) {
            'pending' => 'fas fa-clock',
            'in_progress' => 'fas fa-spinner',
            'development' => 'fas fa-code',
            'testing' => 'fas fa-vial',
            'deployment' => 'fas fa-rocket',
            'completed' => 'fas fa-check-circle',
            'cancelled' => 'fas fa-times-circle',
            default => 'fas fa-question-circle',
        };
    }
}
