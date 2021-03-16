<?php

use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;
use App\Models\Almacen;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pruebas', function () {

    $producto = Producto::find(17);

    foreach ($producto->almacens as $almacen) {
        return $almacen->nombre;
    }
});

Route::get('/', function () {

    $productos = Producto::all();
    $categorias = Categoria::all();
    $almacenes = Almacen::all();

    return view('index', compact('productos', 'categorias', 'almacenes'));
});

Route::resource('productos', ProductoController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('almacenes', AlmacenController::class);
