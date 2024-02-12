<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;


class ChapterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chapter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'regulation_id' => $this->faker->word,
            'title' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'subtitle' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'description' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
