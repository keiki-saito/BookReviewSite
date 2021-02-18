<?php

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
        // $this->call(UsersTableSeeder::class);
         $this->call(YearTableSeeder::class);
         $this->call(BookTableSeeder::class);
         $this->call(BookTableSeeder02::class);
         $this->call(BookTableSeeder03::class);
         $this->call(BookTableSeeder04::class);
         $this->call(BookTableSeeder05::class);
    }
}
