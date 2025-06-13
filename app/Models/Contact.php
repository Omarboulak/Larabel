<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     use HasFactory;

    protected $fillable = [
        'booking_id', 'date', 'first_name', 'last_name', 'email', 'phone', 'subject','comment', 'archive',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
