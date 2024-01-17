<?php

namespace Database\Factories;

use App\Models\Edition;
use App\Models\EditionWinner;
use Illuminate\Database\Eloquent\Factories\Factory;


class EditionWinnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EditionWinner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $edition = Edition::inRandomOrder()->first();
        return [
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'edition_id' => $edition->id,
            'rank' => $this->faker->numberBetween(1, 10)
        ];
    }
}
