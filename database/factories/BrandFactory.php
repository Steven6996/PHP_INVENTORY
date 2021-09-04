<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    // Datos falsos de brand por faker para enviar a la tabla
    public function definition()
    {
        return [
            //Campos de la tabla brand
            'name'=> $this-> faker ->name(),
            'city'=> Str::random(10),
            'country'=> Str::random(10),

        ];
    }
}
