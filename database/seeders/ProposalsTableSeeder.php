<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProposalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proposal::factory(20)->create();
    }
}
