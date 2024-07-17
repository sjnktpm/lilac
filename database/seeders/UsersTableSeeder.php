<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'John Doe', 'fk_department' => 1, 'fk_designation' => 1, 'phone_number' => '1234567890', 'created_at' => Carbon::now()],
            ['name' => 'Jane Smith', 'fk_department' => 2, 'fk_designation' => 2, 'phone_number' => '0987654321', 'created_at' => Carbon::now()],
            ['name' => 'Jane Smith Test', 'fk_department' => 3, 'fk_designation' => 3, 'phone_number' => '098765432132', 'created_at' => Carbon::now()],
        ]);
    }
}
