<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageOrder extends Model
{
    protected $fillable = [
        'order_number',
        'client_name',
        'client_email',
        'client_phone',
        'service_id',
        'package_id',
        'selected_features',
        'total_price',
        'advance_payment',
        'remaining_balance',
        'status',
        'notes',
    ];

    protected $casts = [
        'selected_features' => 'array',
        'total_price' => 'decimal:2',
        'advance_payment' => 'decimal:2',
        'remaining_balance' => 'decimal:2',
    ];

    public static function generateOrderNumber()
    {
        $prefix = 'ORD';
        $date = date('Ymd');
        $lastOrder = self::where('order_number', 'like', "{$prefix}{$date}%")->orderBy('id', 'desc')->first();
        $sequence = $lastOrder ? (int) substr($lastOrder->order_number, -4) + 1 : 1;
        return $prefix . $date . str_pad($sequence, 4, '0', STR_PAD_LEFT);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
