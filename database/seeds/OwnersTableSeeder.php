<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            'address' => 'Av. Siempreviva 123',
            'city' => 'Querétaro',
            'state' => 'Querétaro',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
