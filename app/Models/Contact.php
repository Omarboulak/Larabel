<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     use HasFactory;

    protected $fillable = [
        'first_name', 'email', 'phone', 'subject', 'comment'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
