<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
            'picture' => 'https://placedog.net/500/280',
            'pet_id' => 1
        ]);
        DB::table('pictures')->insert([
            'picture' => 'https://placedog.net/500/280',
            'pet_id' => 2
        ]);
        DB::table('pictures')->insert([
            'picture' => 'https://placedog.net/500/280',
            'pet_id' => 3
        ]);
    }
}
