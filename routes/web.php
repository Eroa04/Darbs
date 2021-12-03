<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SesionController;
use App\Models\User;
use App\Http\Controllers\ObraController;
use Dotenv\Exception\ValidationException;
use Illuminate\Validation\ValidationException as ValidationValidationException;

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

Route::get('dashboard',function() {
    return view('dashboard.master');
});

Route::get('inicio',function(){
    return view('inicio.index');
});

Route::view('ingreso', 'login.index')->name('login')->middleware('guest');

Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);

Route::resource('obras', App\Http\Controllers\ObraController::class);

Route::resource('actividades', App\Http\Controllers\ActividadController::class);

Route::post('ingreso', [SesionController::class,'login']);
Route::post('cerrar', [SesionController::class,'logout']);
