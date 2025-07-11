<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'doctor_id',
        'reservation_date',
        'start_time',
        'end_time',
        'status',
        'total_amount',
        'payment_status',
        'cancellation_reason',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doctor()
    {
        return $this->belongsTo(User::class,'doctor_id');
    }
}
