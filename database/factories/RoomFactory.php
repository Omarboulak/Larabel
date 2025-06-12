<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomTypes = ['Single Bed', 'Double Bed', 'Double Superior', 'Suite'];
        $roomNumber = $this->faker->unique()->numberBetween(100, 999);

        return [
            'room_number' => $roomNumber,
            'room_type' => $this->faker->randomElement($roomTypes),
            'description' => $this->faker->paragraph(3),
            'photos' => 'img/rooms/luxury-room.jpg',
            'offer' => $this->faker->boolean(30),
            'price' => $this->faker->randomFloat(2, 80, 300),
            'discount' => $this->faker->optional()->randomFloat(2, 10, 50),
            'cancellation_policy' => 'Free cancellation within 48 hours.',
            'amenities' => 'WiFi,Parking,AC,Breakfast',
        ];
    }
}
