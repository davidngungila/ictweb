<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemoRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'demo_type',
        'company_name',
        'contact_person',
        'job_title',
        'email',
        'phone',
        'country',
        'city',
        'preferred_date',
        'preferred_time',
        'attendees',
        'language',
        'message',
        'urgency',
        'status',
        'estimated_value',
        'notes',
    ];

    protected $casts = [
        'preferred_date' => 'date',
        'preferred_time' => 'time',
        'estimated_value' => 'decimal:2',
        'urgency' => 'string',
        'status' => 'string',
    ];

    public static function getStatuses()
    {
        return [
            'pending' => 'Pending',
            'contacted' => 'Contacted',
            'scheduled' => 'Scheduled',
            'completed' => 'Completed',
            'cancelled' => 'Cancelled',
        ];
    }

    public static function getUrgencies()
    {
        return [
            'low' => 'Low (1-3 months)',
            'medium' => 'Medium (2-4 weeks)',
            'high' => 'High (1-2 weeks)',
        ];
    }

    public function getFormattedValueAttribute()
    {
        return 'TZS ' . number_format($this->estimated_value, 2);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeByUrgency($query, $urgency)
    {
        return $query->where('urgency', $urgency);
    }
}
