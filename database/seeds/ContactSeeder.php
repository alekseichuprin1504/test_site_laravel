<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'name' => 'Телефон',
                'contacts' => '0637777777',
            ],
        ]);

        DB::table('contacts')->insert([
            [
                'name' => 'Скайп',
                'contacts' => 'skype@mail.ru',
            ],
        ]);
    }
}
