<?php

namespace Database\Factories;

use App\Models\Edition;
use Illuminate\Database\Eloquent\Factories\Factory;


class EditionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Edition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'edition_end' => $this->faker->date('Y-m-d'),
            'edition_publish' => $this->faker->date('Y-m-d'),
            'status' => $this->faker->numberBetween(0,4),
            'identifier' => $this->faker->unique()->numberBetween(1990, 2024)
        ];
    }
}
