<?php

namespace Database\Factories;

use App\Models\Chat;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

class ChatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         // Create or retrieve a random user
        $receiver = User::inRandomOrder()->first() ?? User::factory()->create();
         // Create or retrieve a random user
        $sender = User::inRandomOrder()->first() ?? User::factory()->create();

       if ($receiver == $sender){
           while($receiver == $sender)
           {
                $receiver = User::inRandomOrder()->first() ?? User::factory()->create();
           }
        }
        return [
            'sender_id' => $sender->id,
            'receiver_id' => $receiver->id,
            'content' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
