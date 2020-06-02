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
        $this->call(AdvantageSeeder::class);
        $this->call(ConditionSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(TourSeeder::class);
    }
}
