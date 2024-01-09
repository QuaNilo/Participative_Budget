<?php

namespace Database\Factories;

use App\Models\Proposal;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;
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

        return [
            'user_id' => $this->faker->word,
            'category_id' => $this->faker->word,
            'content' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'coordinateX' => $this->faker->randomFloat(15, -180, 180),
            'coordinateY' => $this->faker->randomFloat(15, -90, 90),
            'summary' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'title' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'status' => $this->faker->word,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
