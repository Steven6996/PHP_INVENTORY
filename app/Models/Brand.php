<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Busca la tabla de la base datos llamada brands
class Brand extends Model
{
    use HasFactory;


    //Aqui se hace la relacion de brand a product
    function products(){
        return $this -> hasMany(Product::class);
    }
}
