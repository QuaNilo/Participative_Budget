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
        $user = User::whereDoesntHave('citizen')->first();

        return [
            'user_id' => $this->faker->unique()->numberBetween(1,3),
            'CC' => $this->faker->text($this->faker->numberBetween(5, 40)),
            'occupation' => $this->faker->text($this->faker->numberBetween(5, 80)),
            'description' => $this->faker->text($this->faker->numberBetween(5, 90)),
            'CC_verified_at' => $this->faker->date('Y-m-d H:i:s'),
            'CC_verified' => $this->faker->boolean,
            'address' => $this->faker->text($this->faker->numberBetween(5, 40)),
            'localidade' => $this->faker->sentence($this->faker->numberBetween(5, 20)),
            'freguesia' => $this->faker->text($this->faker->numberBetween(5, 40)),
            'cod_postal' => $this->faker->numberBetween(1000, 9000),
            'telemovel' => $this->faker->numberBetween(111111111, 999999999),
            'remember_token' => $this->faker->text($this->faker->numberBetween(5, 100)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
