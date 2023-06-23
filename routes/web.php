<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\ventasController;


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
Route::get('productos/create',[productosController::class, 'create']);
Route::get('ventas/create',[ventasController::class, 'create']);
Route::post('productos',[productosController::class, 'store'])->name('productos.store');
Route::post('ventas',[ventasController::class, 'store'])->name('ventas.store');
Route::get('index', function () {
    return view('index');
});
Route::get('cart', function () {
    return view('cart');
});



