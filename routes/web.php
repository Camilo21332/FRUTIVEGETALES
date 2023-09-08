<?php

use App\Http\Controllers\AbastecimientosController;
use App\Http\Controllers\administradoresController;
use App\Http\Controllers\carrito_comprasController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\comprasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\ventasController;
use App\Http\Controllers\mensajesController;
use App\Http\Controllers\pagosController;
use App\Http\Controllers\pqrsController;
use App\Http\Controllers\rolsController;
use App\Http\Controllers\usersController;

use App\Models\administradores;
use App\Models\pqr;

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

 //users
 Route::get('users/create', [usersController::class, 'create'])->name('users.create');
 Route::post('users', [usersController::class, 'store'])->name('users.store');
 Route::get('users', [usersController::class, 'index'])->name('users.index');
 
 //editar
 Route::get('users/{user}/edit', [usersController::class, 'edit'])->name('users.edit');
 Route::put('users/{user}', [usersController::class, 'update'])->name('users.update');


 //productos
Route::get('productos/create', [productosController::class, 'create'])->name('productos.create');
Route::post('productos', [productosController::class, 'store'])->name('productos.store');
Route::get('productos', [productosController::class, 'index'])->name('productos.index');

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

//rols
Route::get('rols/create', [rolsController::class, 'create'])->name('rols.create');
Route::post('rols', [rolsController::class, 'store'])->name('rols.store');
Route::get('rols', [rolsController::class, 'index'])->name('rols.index');


//pqr
Route::get('pqrs/create', [pqrsController::class, 'create'])->name('pqrs.create');
Route::post('pqrs', [pqrsController::class, 'store'])->name('pqrs.store');
Route::get('pqrs', [pqrsController::class, 'index'])->name('pqrs.index');


//carrito de compras
Route::get('cars/create', [carrito_comprasController::class, 'create'])->name('cars.create');
Route::post('cars', [carrito_comprasController::class, 'store'])->name('cars.store');
Route::get('cars', [carrito_comprasController::class, 'index'])->name('cars.index');







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
