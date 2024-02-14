<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;


class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $chapter = Chapter::withCount('articles')
            ->having('articles_count', '<', 6)
            ->first();
        return [
            'chapter_id' => $chapter->id ?? $this->faker->numberBetween(1,3),
            'title' => $this->faker->text($this->faker->numberBetween(5, 60)),
            'description' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
