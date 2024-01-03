<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CitizenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'CC' => $this->faker->unique()->numberBetween([100000000, 999999999]),
            'CC_verified_at' => now(),
            'CC_verified' => True,
            'address' => $this->faker->unique()->address
        ];
    }
}
