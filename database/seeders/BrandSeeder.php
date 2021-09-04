<?php

namespace Database\Seeders;

use App\Models\Brand;//Se llamo al modelo brand
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Aqui llama a la fabrica brand y el modelo brand y asi lograr sacar los datos falsos*/
        Brand::factory(10)->create();
    }
}
