<?php

namespace Database\Factories;

use App\Models\CalendarDynamic;
use Illuminate\Database\Eloquent\Factories\Factory;


class CalendarDynamicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CalendarDynamic::class;

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
            'date' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'text' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'description' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'phase' => $this->faker->unique()->numberBetween(1,25)
        ];
    }
}
