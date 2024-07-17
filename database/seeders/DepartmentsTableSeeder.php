<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            ['name' => 'HR', 'created_at' => Carbon::now()],
            ['name' => 'IT', 'created_at' => Carbon::now()],
            ['name' => 'CEO', 'created_at' => Carbon::now()],
        ]);
    }
}
