<?php

use App\Http\Controllers\ProductoController;
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
});

Route::controller(ProductoController::class)->group(function () {
//el primero es la ruta y el segundo parametro es el nombre de la function del controlador
    Route::get('productos', 'index');
    Route::get('productos/create', 'create');
    Route::post('productos', 'store');
    Route::get('productos/{id}/edit', 'edit');
    Route::put('productos/{id}', 'update');
    Route::get('productos/{id}/elim', 'show');
    Route::delete('productoselim/{id}', 'destroy');

});
