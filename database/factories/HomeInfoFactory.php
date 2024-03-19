<?php

namespace Database\Factories;

use App\Models\HomeInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Home;

class HomeInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomeInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $home = Home::first();
        if (!$home) {
            $home = Home::factory()->create();
        }

        return [
            'home_id' => $this->faker->word,
            'title' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'content' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
