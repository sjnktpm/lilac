<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            ['name' => 'Manager', 'created_at' => Carbon::now()],
            ['name' => 'Developer', 'created_at' => Carbon::now()],
            ['name' => 'Owner', 'created_at' => Carbon::now()],
        ]);
    }
}
