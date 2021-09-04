<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    function showBrand(){
        $listCategories = Categories::all(); //Select * from Categories
        return view('Categories/list', ['Categories' =>$listCategories]);
    }
    

}
