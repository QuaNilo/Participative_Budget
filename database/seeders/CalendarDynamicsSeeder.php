<?php
namespace Database\Seeders;

use App\Models\CalendarDynamic;
use App\Models\Role;
use App\Models\User;
use BladeUI\Icons\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CalendarDynamicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CalendarDynamic::factory(9)->create();
    }
}
