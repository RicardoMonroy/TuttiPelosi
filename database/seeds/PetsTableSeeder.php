<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            'tag' => '000000',
            'pin' => '0000',
            'name' => 'Oliver',
            'description' => 'Un Grán Danés todo menso',
            'dog_breed' => 'Grán Danés',
            'age' => 5,
            'sex' => 'Macho',
            'color' => 'Negro',
            'special_cares' => 'Suele golpearse porque está todo tonto',
            'personality' => 'Bobalicón',
            'owner_id' => 1
        ]);
        DB::table('pets')->insert([
            'tag' => '000001',
            'pin' => '2321',
            'name' => 'Lilith',
            'description' => 'Perrilla loca',
            'dog_breed' => 'Boxer',
            'age' => 7,
            'sex' => 'Hembra',
            'color' => 'Café',
            'special_cares' => 'Salta bastante, es quisquillosa para comer',
            'personality' => 'Mensa',
            'owner_id' => 1
        ]);
        DB::table('pets')->insert([
            'tag' => '000002',
            'pin' => '4642',
            'name' => 'Morgana',
            'description' => 'Es incansable',
            'dog_breed' => 'Pitbull',
            'age' => 6,
            'sex' => 'Hembra',
            'color' => 'Negro',
            'special_cares' => 'Ella es indestructible',
            'personality' => 'Nada la detiene',
            'owner_id' => 1
        ]);
    }
}
