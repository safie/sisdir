<?php

use Illuminate\Database\Seeder;

class SeksyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('seksyen')->insert([ //mengisi data di database
                'nama_seksyen' => $faker->name,
                'singkatan_seksyen' => $faker->company, //email unique sehingga tidak ada yang sama
                'alamat_seksyen' => $faker->address,
            ]);
        }
    }
}
