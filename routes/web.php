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

// editar




 //productos
Route::get('productos/create', [productosController::class, 'create'])->name('productos.create');
Route::post('productos', [productosController::class, 'store'])->name('productos.store');
Route::get('productos', [productosController::class, 'index'])->name('productos.index');

//administrador

Route::get('administradores/create', [administradoresController::class, 'create'])->name('administradores.create');
Route::post('administradores', [administradoresController::class, 'store'])->name('administradores.store');
Route::get('administradores', [administradoresController::class, 'index'])->name('administradores.index');

//ventas
Route::get('ventas/create', [ventasController::class, 'create'])->name('ventas.create');
Route::post('ventas', [ventasController::class, 'store'])->name('ventas.store');
Route::get('ventas', [ventasController::class, 'index'])->name('ventas.index');

//mensajes
Route::get('mensajes/create', [mensajesController::class, 'create'])->name('mensajes.create');
Route::post('mensajes', [mensajesController::class, 'store'])->name('mensajes.store');
Route::get('mensajes', [mensajesController::class, 'index'])->name('mensajes.index');

//abastecimientos
Route::get('abastecimientos/create', [AbastecimientosController::class, 'create'])->name('abastecimientos.create');
Route::post('abastecimientos', [AbastecimientosController::class, 'store'])->name('abastecimientos.store');
Route::get('abastecimientos', [AbastecimientosController::class, 'index'])->name('abastecimientos.index');

//pagos
Route::get('pagos/create', [pagosController::class, 'create'])->name('pagos.create');
Route::post('pagos', [pagosController::class, 'store'])->name('pagos.store');
Route::get('pagos', [pagosController::class, 'index'])->name('pagos.index');

//compras
Route::get('compras/create', [comprasController::class, 'create'])->name('compras.create');
Route::post('compras', [comprasController::class, 'store'])->name('compras.store');
Route::get('compras', [comprasController::class, 'index'])->name('compras.index');

 //users
Route::get('users/create', [usersController::class, 'create'])->name('users.create');
Route::post('users', [usersController::class, 'store'])->name('users.store');
Route::get('users', [usersController::class, 'index'])->name('users.index');

//editar
Route::get('users/{user}/edit', [usersController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [usersController::class, 'update'])->name('users.update');




//rutas para la interfas de la aplicacion
Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('registro', function () {
    return view('registro');
});
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('organico', function () {
    return view('organico');
})->name('organico');

Route::get('inorganico', function () {
    return view('inorganico');
})->name('inorganico');


Route::get('cart', function () {
    return view('cart');
})->name('cart');

Route::get('pqrs', function () {
    return view('pqrs');
})->name('pqrs');



Route::get('cursos/create', [productosController::class, 'create']);
