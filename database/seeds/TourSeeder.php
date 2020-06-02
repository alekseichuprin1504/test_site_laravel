<?php

use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert([
            [
                'name' => 'Тур "Остров ХОРТИЦА"',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed tempora asperiores dolore nihil!',
                'image' => '2.jpg'
            ],
        ]);

        DB::table('tours')->insert([
            [
                'name' => 'Тур "Дубовка"',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed tempora asperiores dolore nihil!',
                'image' => '2.jpg'
            ],
        ]);

        DB::table('tours')->insert([
            [
                'name' => 'Тур "Дубовка"',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed tempora asperiores dolore nihil!',
                'image' => '2.jpg'
            ],
        ]);

        DB::table('tours')->insert([
            [
                'name' => 'Тур "Дубовка"',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed tempora asperiores dolore nihil!',
                'image' => '2.jpg'
            ],
        ]);

        
    }
}
