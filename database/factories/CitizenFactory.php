<?php

namespace Database\Factories;

use App\Models\Citizen;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

class CitizenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citizen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        $user = User::whereDoesntHave('citizen')->first();

        return [
            'user_id' => $this->faker->unique()->numberBetween(1,3),
            'CC' => $this->faker->text($this->faker->numberBetween(5, 40)),
            'occupation' => $this->faker->jobTitle(),
            'description' => $this->faker->text($this->faker->numberBetween(5, 90)),
            'CC_verified_at' => $this->faker->date('Y-m-d H:i:s'),
            'CC_verified' => Setting::find(1)->require_cc_vote_create == 1 ? 3 : 0,
            'address_verified' => Setting::find(1)->require_address_vote_create == 1 ? 3 : 0,
            'address_verified_at' => $this->faker->date('Y-m-d H:i:s'),
            'address' => $this->faker->address(),
            'localidade' => $this->faker->city(),
            'freguesia' => $this->faker->city(),
            'cod_postal' => $this->faker->postcode(),
            'telemovel' => $this->faker->phoneNumber(),
            'remember_token' => $this->faker->text($this->faker->numberBetween(5, 100)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
