<?php

namespace Database\Factories;

use App\Models\Regulation;
use Illuminate\Database\Eloquent\Factories\Factory;


class RegulationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Regulation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'description' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'author' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
