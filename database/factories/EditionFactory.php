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
        $year_randomized = $this->faker->unique()->numberBetween(1990, 2024);
        return [
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'edition_end' => $this->faker->date('Y-m-d'),
            'edition_publish' => $this->faker->date('Y-m-d'),
            'status' => $this->faker->numberBetween(0,4),
            'identifier' => $year_randomized,
            'edition_number' => $this->faker->unique()->numberBetween(1, 50),
            'title' => $this->faker->unique()->text($this->faker->numberBetween(5, 60)),
            'description' => $this->faker->unique()->text($this->faker->numberBetween(5, 255)),
            'ano' => $year_randomized
        ];
    }
}
