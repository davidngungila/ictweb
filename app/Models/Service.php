<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category',
        'base_price',
        'icon',
        'color',
        'status',
        'features',
        'estimated_days',
    ];

    protected $casts = [
        'base_price' => 'decimal:2',
        'status' => 'string',
        'features' => 'array',
        'estimated_days' => 'integer',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function activeProjects(): HasMany
    {
        return $this->projects()->where('status', '!=', 'completed');
    }
}
