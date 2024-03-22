<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;


class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'require_cc_vote_create' => $this->faker->boolean,
            'require_address_vote_create' => $this->faker->boolean,
            'allow_change_lang' => $this->faker->boolean,
            'map_lat' => $this->faker->latitude,
            'map_lng' => $this->faker->longitude,
            'email_cm' => $this->faker->email,
            'facebook' => $this->faker->url(),
            'instagram' => $this->faker->url(),
            'twitter' => $this->faker->url(),
            'linkedin' => $this->faker->url(),
            'youtube' => $this->faker->url(),
            'website_cm' => $this->faker->url(),
            'telephone_cm' => $this->faker->numerify('0##########'),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'nome_cm' => $this->faker->company(),
            'address' => $this->faker->address()
        ];
    }
}
