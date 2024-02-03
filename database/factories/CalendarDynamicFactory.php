<?php

namespace Database\Factories;

use App\Models\CalendarDynamic;
use Carbon\Carbon;
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
            'date' => $this->faker->date('Y-m-d'),
            'text' => $this->faker->sentence(),
            'description' => $this->faker->text($this->faker->numberBetween(30,90)),
            'phase' => $this->faker->unique()->numberBetween(1, 10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
