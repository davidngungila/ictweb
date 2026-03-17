<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'member_type',
        'status',
        'registration_date',
        'member_id'
    ];

    protected $casts = [
        'registration_date' => 'date',
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function savingsAccounts()
    {
        return $this->hasMany(SavingsAccount::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function getActiveAttribute()
    {
        return $this->status === 'active';
    }

    public function getTotalSavingsAttribute()
    {
        return $this->savingsAccounts()->sum('balance');
    }

    public function getTotalLoansAttribute()
    {
        return $this->loans()->where('status', '!=', 'completed')->sum('amount');
    }
}
