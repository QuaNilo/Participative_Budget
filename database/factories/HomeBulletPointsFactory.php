<?php

namespace Database\Factories;

use App\Models\HomeBulletPoints;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Home;

class HomeBulletPointsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomeBulletPoints::class;

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
            'bullet_point' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
