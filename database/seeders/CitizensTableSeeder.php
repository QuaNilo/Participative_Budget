<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitizensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Citizen::factory(3)->create();
    }
}
