<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $fillable = [
        'first_Name', 'last_Name', 'orderDate', 'checkIn', 'checkOut', 'specialRequest', 'roomType', 'roomNumber', 'status',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'roomNumber', 'room_number');
    }
}
