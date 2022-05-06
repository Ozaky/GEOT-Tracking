<?php

use App\Http\Controllers\C_conductore;
use App\Http\Controllers\C_ruta;
use App\Http\Controllers\C_vehiculo;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('inicio.index');
//});

Route::view('/', 'inicio/index');

Route::view('/login', 'login');

Route::post('login', function (){

    $credentials = request()->only('email', 'password');

    request()->session()->regenerate();
    if(Auth::attempt($credentials)){
        return redirect('/');
       }
       return redirect('login');
  });



Route::delete('conductor/{Con_id}', [C_conductore::class, 'destroy'])->name('aa');

Route::resource('conductor', C_conductore::class);

Route::resource('vehiculos', C_vehiculo::class);

Route::resource('ruta', C_ruta::class);

