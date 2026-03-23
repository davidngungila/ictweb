<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiaPaymentRecord extends Model
{
    protected $fillable = [
        'member_id',
        'gawio_la_fia',
        'fia_iliyokomaa',
        'jumla',
        'malipo_vya_vipande',
        'loan',
        'kiasi_baki',
        'status',
        'notes'
    ];

    protected $casts = [
        'gawio_la_fia' => 'decimal:2',
        'fia_iliyokomaa' => 'decimal:2',
        'jumla' => 'decimal:2',
        'malipo_vya_vipande' => 'decimal:2',
        'kiasi_baki' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function confirmation()
    {
        return $this->belongsTo(FiaPaymentConfirmation::class, 'member_id', 'member_id');
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function($q) use ($search) {
            $q->where('member_id', 'like', "%{$search}%")
              ->orWhere('loan', 'like', "%{$search}%");
        });
    }
}
