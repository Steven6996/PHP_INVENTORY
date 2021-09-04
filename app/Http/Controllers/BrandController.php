<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Brand;
class BrandController extends Controller
{
                /*APLICAR LOGICA DE NEGOCIO PARA BRAND*/
    // function showBrand($show_brand = null){
    //     if ($show_brand == null) {
    //         return 'Debe ingresar una marca registrada';
    //     }
    //     return 'Nombre marca = '.$show_brand;
    // }

    // Metodo mostrar los registros de la tabla brand
    function showBrand(){
        $listBrand = Brand::all(); //Select * from brands
        return view('brand/list', ['brands' =>$listBrand]);
    }

    // Metodo mostrar el formulario para agregar y editar marcar
     function form ($id = null)
    {    $brand = new Brand();
        if ($id !=null) {
            $brand = Brand::findOrFail($id);
        }
        return view('brand/form',['brand' => $brand]);
    }


    // Metodo guardar los datos enviados y editados por el formulario
     function save (Request $request)
    {

        $request ->validate([
            "name" => 'required|max:50',
            "city" => 'required|max:50',
            "country" =>'required|max:50',

        ]);
        $brand = new Brand();
        if ($request -> id !=null) {
            $brand = Brand::findOrFail($request -> id);
        }
        $brand -> name = $request -> name;
        $brand -> city = $request -> city;
        $brand -> country = $request -> country;

        $brand -> save();

        return redirect('/brands')->with('message', 'Los datos han sido actualizados');#variables de sesion

    }



    function delete($id){
        // select * from products where id=$id
        $brand =Brand::findOrFail($id);
        $brand -> delete();

        return redirect('/brands')->with('message', 'la marca ha sido borrado con exito'); #Variales de sesion;
    }


}
