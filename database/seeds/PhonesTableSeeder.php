<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            'number' => '4422671358',
            'name' => 'Móvil',
            'owner_id' => 1,
        ]);
    }
}
