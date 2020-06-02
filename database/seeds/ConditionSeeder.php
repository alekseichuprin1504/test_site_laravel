<?php

use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conditions')->insert([
            [
                'time' => '1 день( 9-00 - 20-00)',
                'days' => 'Будние дни',
                'price' => '80'
            ],
        ]);

        DB::table('conditions')->insert([
            [
                'time' => '1 день( 9-00 - 20-00)',
                'days' => 'Выходные дни	',
                'price' => '150'
            ],
        ]);

        DB::table('conditions')->insert([
            [
                'time' => '1 день( 9-00 - 20-00)	',
                'days' => 'Праздничный день	',
                'price' => '250
'
            ],
        ]);
    }
}
