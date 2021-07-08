<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vaccines')->insert([
            'vaccine' => 'Parvovirus',
            'date' => now(),
            'pet_id' => 1
        ]);
        DB::table('vaccines')->insert([
            'vaccine' => 'Parvovirus',
            'date' => now(),
            'pet_id' => 2
        ]);
        DB::table('vaccines')->insert([
            'vaccine' => 'Parvovirus',
            'date' => now(),
            'pet_id' => 3
        ]);

        DB::table('vaccines')->insert([
            'vaccine' => 'Moquillo',
            'date' => now(),
            'pet_id' => 1
        ]);
        DB::table('vaccines')->insert([
            'vaccine' => 'Moquillo',
            'date' => now(),
            'pet_id' => 2
        ]);
        DB::table('vaccines')->insert([
            'vaccine' => 'Moquillo',
            'date' => now(),
            'pet_id' => 3
        ]);

        DB::table('vaccines')->insert([
            'vaccine' => 'Rabia',
            'date' => now(),
            'pet_id' => 1
        ]);
    }
}
