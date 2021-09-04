<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;

class ProductController extends Controller

                           /*APLICAR LOGICA DE NEGOCIO*/
//controlador para mostrar los datos de base de datos en una vista
{
    function __construct(){ //Funcion para auntenticar sesion y navegar por vistas
        $this -> middleware('auth');
    }

    //-----------------------------//
    function show(){
        $list = Product::all(); //select * from products
        return view('product/list',['products' => $list]);
    }

// Controlador para mostrar el formulario con los datos boton insertar y editar
    function form($id =null){
        $product = new Product();
        $brands = Brand::all();
        if ($id !=null) {
            $product = Product::findOrFail($id);
        }
        return view('product/form',[//Relacione los datos y traerlo en el formulario para editar
                    'product' => $product,
                    'brands' => $brands]);
    }


    //Controlador para guardar datos en la base datos
    function save(request $request){

        // Validaciones para los campos del formulario
    $request->validate([
        "name"=>'required|max:50',
        "cost"=>'required|numeric',
        "price"=>'required|numeric',
        "quantity"=>'required|numeric',
        "brand"=>'required|max:50',
        ]);
                     //Campos del formulario
        $product = new Product();
        if ($request -> id > 0) {
            $product = Product::findOrFail($request ->id); #Condicion para actualizar por id
        }
        $product ->name = $request ->name;
        $product ->cost = $request ->cost;
        $product ->price = $request ->price;
        $product ->quantity = $request ->quantity;
        $product ->brand_id = $request ->brand;

        $product ->save();

        return redirect('/products')->with('message', 'El producto ha sido guardado/actualizado'); #Variales de sesion
    }

    //Controlador para borrar por id los datos
    function delete($id){
        // select * from products where id=$id
        $product = Product::findOrFail($id);
        $product -> delete();

        return redirect('/products')->with('messageDelete', 'El producto ha sido borrado con exito'); #Variales de sesion;
    }
}
