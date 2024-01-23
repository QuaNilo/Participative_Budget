<?php

namespace Database\Factories;

use App\Models\Proposal;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;
use App\Models\Edition;
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

        $random_number = random_int(1,6);
        if($random_number === 3)
        {
            $edition = Edition::factory()->create();
            if(random_int(1,2) == 1)
            {
                $winner['rank'] = random_int(1,10);
                $winner['winner'] = true;
            }
        }
        else
        {
            $edition = Edition::inRandomOrder()->first() ?? Edition::factory()->create();
            if($random_number === 4)
            {
                $winner['rank'] = random_int(1,10);
                $winner['winner'] = true;
            }
        }

        return [
            'user_id' => $user->id,
            'category_id' => $category->id,
            'edition_id' => $edition->id,
            'title' => $this->faker->text($this->faker->numberBetween(5, 40)),
            'content' => $this->faker->text($this->faker->numberBetween(5, 6555)),
            'summary' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'lat' => $this->faker->randomFloat(15, -90, 90),
            'lng' => $this->faker->randomFloat(15, -180, 180),
            'street' => $this->faker->sentence($this->faker->numberBetween(5, 30)),
            'postal_code' => $this->faker->numberBetween(10, 9999),
            'city' => $this->faker->text($this->faker->numberBetween(5, 30)),
            'freguesia' => $this->faker->text($this->faker->numberBetween(5, 30)),
            'winner' => $winner['winner'] ?? false,
            'rank' => $winner['rank'] ?? null,
            'status' => $this->faker->numberBetween(0,4),
            'budget_estimate' => $this->faker->numberBetween(0, 300000),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
