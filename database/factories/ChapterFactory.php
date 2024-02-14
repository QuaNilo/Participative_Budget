<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Chapter;
use App\Models\Regulation;
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
        Article::factory(6)->create();

        return [
            'regulation_id' => Regulation::first()->id,
            'title' => $this->faker->text($this->faker->numberBetween(5, 30)),
            'subtitle' => $this->faker->text($this->faker->numberBetween(5, 30)),
            'description' => $this->faker->text($this->faker->numberBetween(5, 60)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
