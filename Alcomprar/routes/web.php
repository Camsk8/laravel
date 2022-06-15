<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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
Route::get('/', function(){
    return 'Bienvenidos aprendices ADSI';
});
Route::get('/datosPersonales','App\Http\Controllers\UsuarioController@datosPersonales');
Route::get('estudios','App\Http\Controllers\UsuarioController@estudios');
Route::get('numeros','App\Http\Controllers\UsuarioController@numeros');