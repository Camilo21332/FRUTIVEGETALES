<?php

use App\Http\Controllers\AbastecimientosController;
use App\Http\Controllers\administradoresController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\comprasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\ventasController;
use App\Http\Controllers\mensajesController;
use App\Http\Controllers\pagosController;
use App\Http\Controllers\usersController;

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
//clientes
Route::get('clientes/create', [clientesController::class, 'create'])->name('clientes.create'); 
Route::post('clientes', [clientesController::class, 'store'])->name('clientes.store');
Route::get('clientes', [clientesController::class, 'index'])->name('clientes.index');

 //productos
Route::get('productos/create', [productosController::class, 'create'])->name('productos.create');
Route::post('productos', [productosController::class, 'store'])->name('productos.store');
Route::get('productos', [productosController::class, 'index'])->name('productos.index');
//administrador
Route::get('administradores/create', [administradoresController::class, 'create']);
Route::post('administradores', [administradoresController::class, 'store'])->name('administradores.store');

//ventas
Route::get('ventas/create', [ventasController::class, 'create']);
Route::post('ventas', [ventasController::class, 'store'])->name('ventas.store');

//mensajes
Route::get('mensajes/create', [mensajesController::class, 'create']);
Route::post('mensajes', [mensajesController::class, 'store'])->name('mensajes.store');

//abastecimientos
Route::get('abastecimientos/create', [AbastecimientosController::class, 'create']);
Route::post('abastecimientos', [AbastecimientosController::class, 'store'])->name('abastecimientos.store');

//pagos
Route::get('pagos/create', [pagosController::class, 'create']);
Route::post('pagos', [pagosController::class, 'store'])->name('pagos.store');

//compras
Route::get('compras/create', [comprasController::class, 'create']);
Route::post('compras', [comprasController::class, 'store'])->name('compras.store');

 //users
Route::get('users/create', [usersController::class, 'create']);
Route::post('users', [usersController::class, 'store'])->name('users.store');

Route::get('index', function () {
    return view('index');
});
Route::get('cart', function () {
    return view('cart');
});

Route::get('cursos/create', [productosController::class, 'create']);
