<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\FaqTheme;

class FaqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faq::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faqTheme = FaqTheme::first();
        if (!$faqTheme) {
            $faqTheme = FaqTheme::factory()->create();
        }

        return [
            'question' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'answer' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'faq_theme_id' => $this->faker->word,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
