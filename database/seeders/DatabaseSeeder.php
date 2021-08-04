<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->reset_db();
        $this->call(CategoriesSeeder::class);
        $this->call(OverturesSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(UsersSeeder::class);
    }

    private function reset_db()
    {
        DB::table('categories')->truncate();
        DB::table('overtures')->truncate();
        DB::table('employees')->truncate();
        DB::table('users')->truncate();
    }
}
