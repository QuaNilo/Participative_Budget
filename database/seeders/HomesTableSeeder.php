<?php

namespace Database\Seeders;

use App\Models\Home;
use Database\Factories\HomeFactory;
use Illuminate\Database\Seeder;

class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::factory()->create();
    }
}
