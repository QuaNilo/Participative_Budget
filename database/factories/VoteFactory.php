<?php

namespace Database\Factories;

use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Proposal;
use App\Models\User;

class VoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // Create or retrieve a random user
        $user = User::inRandomOrder()->first() ?? User::factory()->create();

        // Create or retrieve a random proposal
        $proposal = Proposal::inRandomOrder()->first() ?? Proposal::factory()->create();

        return [
            'user_id' => $user->id,
            'proposal_id' => $proposal->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
