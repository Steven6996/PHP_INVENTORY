<?php
/*Ruta para llamar o traer el controlador  */

use App\Http\Controllers\BrandController;
use App\Http\Controllers\personaController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


//Route::get('/usuario', function () {
 //   return "Hola desde la ruta de usuario";
//});


/*Ruta para llamar o traer el controlador  */
Route::get('/usuario/{nombre_usuario?}',
[personaController::class , 'mostrarUsuario'])->where('nombre_usuario', '[A-Za-z]+');

/*Ruta para llamar o traer el controlador del producto */
Route::get('/products', [ProductController::class, 'show']);

/*Ruta para llamar o mostrar el formulario */
Route::get('/product/form',[ProductController::class, 'form'])->name('product.form');

/*Ruta para el boton insetar y editar */
Route::get('/product/form/{id?}',[ProductController::class, 'form'])->name('product.form');

/*Ruta para guardar los datos en la base de datos*/

Route::post('/product/save', [ProductController::class, 'save']) -> name('product.save');

/*Ruta para borrar datos por id */
route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*RUTAS EXCLUSIVAS PARA BRAND*/

/* - PRUEBAS*/
// Route::get('/brand/{show_brand?}',[BrandController::class, 'showBrand'])-> where('show_brand', '[a-zA-Z]+');

/**Ruta para llamar o motrar las marcas (tb Brand)*/
Route::get('/brands', [BrandController::class, 'showBrand']);

/*Ruta para llamar o mostrar el formulario */
Route::get('/brands/form{id?}', [BrandController::class, 'form'])->name('brand.form');

/*Ruta para guardar y actualizar datos en (tb brand)*/
Route::post('/brand/save', [BrandController::class, 'save'])->name('brand.save');

/*Ruta para borrar datos por el boton de borrar*/
Route::get('/brand/delete{id}', [BrandController::class,'delete'])->name('brand.delete');

