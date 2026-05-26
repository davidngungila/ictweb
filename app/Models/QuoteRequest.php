<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuoteRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'full_name',
        'email',
        'phone',
        'company',
        'service_id',
        'package_id',
        'vertical',
        'service_name',
        'package_name',
        'selected_addons',
        'budget_range',
        'timeline',
        'project_description',
        'how_heard',
        'status',
        'ip_address',
    ];

    protected $casts = [
        'selected_addons' => 'array',
        'service_id' => 'integer',
        'package_id' => 'integer',
    ];

    public static function generateReference(): string
    {
        return 'QR-' . now()->format('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
    }
}
