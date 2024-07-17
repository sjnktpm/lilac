<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Ensure departments and designations are seeded first
        $this->call([
            DepartmentsTableSeeder::class,
            DesignationsTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
