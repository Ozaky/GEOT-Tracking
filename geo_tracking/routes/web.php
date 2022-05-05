<?php

use App\Http\Controllers\C_conductore;
use App\Http\Controllers\C_ruta;
use App\Http\Controllers\C_vehiculo;
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
    return view('inicio.index');
});

Route::get('ejemplo', [C_vehiculo::class, 'util'])->name('aa');

Route::resource('conductor', C_conductore::class);

Route::resource('vehiculos', C_vehiculo::class);

Route::resource('ruta', C_ruta::class);
