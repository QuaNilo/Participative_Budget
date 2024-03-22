<?php

namespace Database\Factories;

use App\Models\Settings;
use Illuminate\Database\Eloquent\Factories\Factory;


class SettingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Settings::class;

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
            'address' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'map_lat' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'map_lng' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'nome_cm' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'email_cm' => $this->faker->email,
            'facebook' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'instagram' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'twitter' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'linkedin' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'youtube' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'website_cm' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'telephone_cm' => $this->faker->numerify('0##########'),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
