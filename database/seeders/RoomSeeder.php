<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Room::create([
            'room_number' => 101,
            'room_type' => 'Deluxe Suite',
            'description' => 'Spacious room with sea view, king-size bed, and balcony.',
            'photos' => 'room1.jpg',
            'offer' => true,
            'price' => 200.00,
            'discount' => 20.00,
            'cancellation_policy' => 'Free cancellation within 24 hours.',
            'amenities' => 'WiFi, TV, AC, MiniBar',
        ]);

        Room::create([
            'room_number' => 102,
            'room_type' => 'Standard Room',
            'description' => 'Comfortable room with a queen-size bed and private bathroom.',
            'photos' => 'room2.jpg',
            'offer' => false,
            'price' => 120.00,
            'discount' => null,
            'cancellation_policy' => 'Non-refundable rate.',
            'amenities' => 'WiFi, TV, AC',
        ]);
    }
}
