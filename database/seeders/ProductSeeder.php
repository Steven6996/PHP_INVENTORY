<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //llama o trae el model products y factory productfactory y ejecuta que se crea datos falso

        Product::factory(30)->create();
    }
}
