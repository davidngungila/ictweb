<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class PackageOrder extends Model
{
    protected $fillable = [
        'order_number',
        'payment_page_token',
        'client_name',
        'client_email',
        'client_phone',
        'company_name',
        'service_id',
        'package_id',
        'selected_features',
        'selected_addons',
        'total_price',
        'advance_payment',
        'remaining_balance',
        'status',
        'payment_reference',
        'payment_token',
        'payment_status',
        'failure_reason',
        'notes',
        'payment_plan',
        'timeline_priority',
    ];

    protected $casts = [
        'selected_features' => 'array',
        'selected_addons' => 'array',
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

    /**
     * Opaque token for public payment URLs (no sequential order id in the path).
     */
    public static function generateUniquePaymentPageToken(): string
    {
        for ($i = 0; $i < 25; $i++) {
            $token = bin2hex(random_bytes(16));
            if (! self::where('payment_page_token', $token)->exists()) {
                return $token;
            }
        }

        return bin2hex(random_bytes(16));
    }

    public function ensurePaymentPageToken(): void
    {
        if (! Schema::hasColumn($this->getTable(), 'payment_page_token')) {
            return;
        }
        if ($this->payment_page_token !== null && $this->payment_page_token !== '') {
            return;
        }
        $this->forceFill([
            'payment_page_token' => self::generateUniquePaymentPageToken(),
        ])->save();
    }
}
