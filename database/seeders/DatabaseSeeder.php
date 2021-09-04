<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        //Corre o ejecutar el seeder ProductSeeder para crear datos

        $this->call([
            BrandSeeder::class,
            ProductSeeder::class,
            UserSeeder::class
        ]);

        //Corre o ejecutar el seeder BrandSeeder para crear datos
        // $this->call([

        // ]);


    }
}
