<?php

namespace Database\Factories;

use App\Models\Citizen;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

class CitizenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citizen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Create or retrieve a random user
        $user = User::whereDoesntHave('citizen')->first();



        return [
            'user_id' => $this->faker->unique()->numberBetween(1,3),
            'CC' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'CC_verified_at' => $this->faker->date('Y-m-d H:i:s'),
            'CC_verified' => $this->faker->boolean,
            'address' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'remember_token' => $this->faker->text($this->faker->numberBetween(5, 100)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
