<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = [ 
        'room_number', 'room_type', 'description', 'photos', 'offer', 'price', 'discount', 'cancellation_policy', 'amenities',
    ];
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;
}
