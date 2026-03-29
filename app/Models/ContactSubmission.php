<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'status',
        'notes',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public static function getStatuses()
    {
        return [
            'new' => 'New',
            'read' => 'Read',
            'replied' => 'Replied',
            'closed' => 'Closed',
        ];
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function markAsRead()
    {
        $this->status = 'read';
        $this->save();
    }

    public function markAsReplied()
    {
        $this->status = 'replied';
        $this->save();
    }

    public function close()
    {
        $this->status = 'closed';
        $this->save();
    }
}
