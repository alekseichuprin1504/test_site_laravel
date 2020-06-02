<?php

use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advantages')->insert([
            [
                'name' => 'Что мы предлагаем',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'logo' => '20.jpg'
            ],
        ]);

        DB::table('advantages')->insert([
            [
                'name' => 'Что мы предлагаем2',
                'text' => '2Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'logo' => '20.jpg'
            ],
        ]);

        DB::table('advantages')->insert([
            [
                'name' => 'Что мы предлагаем3',
                'text' => '3Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'logo' => '20.jpg'
            ],
        ]);

        DB::table('advantages')->insert([
            [
                'name' => 'Что мы предлагаем4',
                'text' => '4Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'logo' => '20.jpg'
            ],
        ]);


    }
}
