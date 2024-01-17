<?php

namespace Database\Factories;

use App\Models\Edition;
use App\Models\EditionWinner;
use App\Models\Proposal;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;
use App\Models\ProposalWinner;
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
        $user = User::inRandomOrder()->first() ?? User::factory()->create();
        $category = Category::inRandomOrder()->first() ?? Category::factory()->create();

        $random_number = random_int(1,3);
        if($random_number == 2)
        {
            $edition = Edition::factory()->create();
        }
        else
        {
            $edition = Edition::inRandomOrder()->first() ?? Edition::factory()->create();
        }

        if($random_number == 2)
        {
            $editionWinner = EditionWinner::factory(['edition_id' => $edition->id])->create();
        }

        return [
            'user_id' => $user->id,
            'category_id' => $category->id,
            'edition_id' => $edition->id,
            'edition_winners_id' => $editionWinner->id ?? null,
            'content' => $this->faker->text($this->faker->numberBetween(5, 6465)),
            'coordinateX' => $this->faker->randomFloat(15, -180, 180),
            'coordinateY' => $this->faker->randomFloat(15, -90, 90),
            'summary' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'title' => $this->faker->text($this->faker->numberBetween(5, 30)),
            'status' => $this->faker->numberBetween(0,4),
            'budget_estimate' => $this->faker->numberBetween(0, 300000),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
