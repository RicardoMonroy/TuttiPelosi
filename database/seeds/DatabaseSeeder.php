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
        $this->call([UsersTableSeeder::class]);
        // $this->call(OwnersTableSeeder::class);
        // $this->call(PetsTableSeeder::class);
        // $this->call(VaccinesTableSeeder::class);
        // $this->call(PicturesTableSeeder::class);
        // $this->call(PhonesTableSeeder::class);
    }
}
