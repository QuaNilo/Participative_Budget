<?php

namespace Database\Factories;

use App\Models\Editions;
use Illuminate\Database\Eloquent\Factories\Factory;


class EditionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Editions::class;

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
            'status' => $this->faker->word,
            'identifier' => $this->faker->text($this->faker->numberBetween(5, 255))
        ];
    }
}
