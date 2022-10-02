<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//
Route::resource('roles', App\Http\Controllers\RolController::class);

Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('administrativos', App\Http\Controllers\AdministrativoController::class);
Route::resource('tecnicos', App\Http\Controllers\TecnicoController::class);

Route::resource('routers', App\Http\Controllers\RouterController::class);
Route::resource('velocidads', App\Http\Controllers\VelocidadController::class);
Route::resource('plans', App\Http\Controllers\PlanController::class);
Route::resource('ciudads', App\Http\Controllers\CiudadController::class);

Route::resource('contrato-clientes', App\Http\Controllers\ContratoClienteController::class);