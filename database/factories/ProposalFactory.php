<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Proposal;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

class ProposalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proposal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::first();
        if (!$user) {
            $user = User::factory()->create();
        }

        $category = Category::first();
        if (!$category) {
            $category = Category::factory()->create();
        }

        return [
            'user_id' => $user->id,
            'category_id' => $category->id,
            'content' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'summary' => $this->faker->text($this->faker->numberBetween(5,255)),
            'title' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'status' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
