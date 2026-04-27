<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'demo_request_id',
        'client_name',
        'client_email',
        'client_phone',
        'description',
        'amount',
        'tax',
        'total',
        'due_date',
        'status',
        'payment_method',
        'paid_date',
        'notes',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'tax' => 'decimal:2',
        'total' => 'decimal:2',
        'due_date' => 'date',
        'paid_date' => 'date',
    ];

    public static function getStatuses()
    {
        return [
            'pending' => 'Pending',
            'paid' => 'Paid',
            'overdue' => 'Overdue',
            'cancelled' => 'Cancelled',
        ];
    }

    public static function generateInvoiceNumber()
    {
        $prefix = 'INV';
        $date = date('Ymd');
        $lastInvoice = self::where('invoice_number', 'like', "{$prefix}{$date}%")->orderBy('id', 'desc')->first();
        $sequence = $lastInvoice ? (int) substr($lastInvoice->invoice_number, -4) + 1 : 1;
        return $prefix . $date . str_pad($sequence, 4, '0', STR_PAD_LEFT);
    }

    public static function getPaymentMethods()
    {
        return [
            'cash' => 'Cash',
            'bank_transfer' => 'Bank Transfer',
            'mobile_money' => 'Mobile Money',
            'card' => 'Credit/Debit Card',
        ];
    }

    public function demoRequest()
    {
        return $this->belongsTo(DemoRequest::class);
    }

    public function getFormattedAmountAttribute()
    {
        return 'TZS ' . number_format($this->amount, 2);
    }

    public function getFormattedTotalAttribute()
    {
        return 'TZS ' . number_format($this->total, 2);
    }

    public function isOverdue()
    {
        return $this->status === 'pending' && $this->due_date < now();
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeOverdue($query)
    {
        return $query->where('status', 'pending')
                    ->where('due_date', '<', now());
    }
}
