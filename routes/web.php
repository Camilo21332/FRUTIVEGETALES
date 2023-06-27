<?php

use App\Http\Controllers\AbastecimientosController;
use App\Http\Controllers\administradoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\ventasController;
use App\Http\Controllers\mensajesController;
use App\Http\Controllers\pagosController;
use App\Models\administradores;

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
Route::get('productos/create', [productosController::class, 'create']);
Route::get('administradores/create', [administradoresController::class, 'create']);
Route::get('ventas/create', [ventasController::class, 'create']);
Route::get('mensajes/create', [mensajesController::class, 'create']);
Route::get('abastecimientos/create', [AbastecimientosController::class, 'create']);
Route::get('pagos/create', [pagosController::class, 'create']);



Route::post('productos', [productosController::class, 'store'])->name('productos.store');
Route::post('ventas', [ventasController::class, 'store'])->name('ventas.store');
Route::post('administradores', [administradoresController::class, 'store'])->name('administradores.store');
Route::post('mensajes', [mensajesController::class, 'store'])->name('mensajes.store');
Route::post('abastecimientos', [AbastecimientosController::class, 'store'])->name('abastecimientos.store');
Route::post('pagos', [pagosController::class, 'store'])->name('pagos.store');



Route::get('index', function () {
    return view('index');
});
Route::get('cart', function () {
    return view('cart');
});

Route::get('cursos/create', [productosController::class, 'create']);
