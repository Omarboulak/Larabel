<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Activity;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon'];

        return [
            'type' => $this->faker->randomElement($types),
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'datetime' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'paid' => $this->faker->boolean(50),
            'notes' => $this->faker->sentence(),
            'satisfaction' => $this->faker->optional()->numberBetween(0, 10),
        ];
    }
}
