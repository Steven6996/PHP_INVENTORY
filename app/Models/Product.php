<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    ///Aqui se hace la relacion de product a brand
    function brand(){
        return $this->belongsTo(Brand::class);
    }
}
