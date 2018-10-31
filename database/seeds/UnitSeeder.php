<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit')->insert([
        	'id' => 1,
            'nama_unit' => str_random(10),
            'id_seksyen' => 1,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);

        DB::table('unit')->insert([
        	'id' => 2,
            'nama_unit' => str_random(10),
            'id_seksyen' => 2,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);

        DB::table('unit')->insert([
        	'id' => 3,
            'nama_unit' => str_random(10),
            'id_seksyen' => 3,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
