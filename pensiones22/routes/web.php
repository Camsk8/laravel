<?php

use App\Http\Controllers\Ejercicio1Controller;
use App\Http\Controllers\Ejercicio2Controller;
use App\Http\Controllers\Ejercicio3Controller;
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
Route::get('/', function(){
    return view ('Template.template');
});
Route::get('/Ejercicio1',[Ejercicio1Controller::class,'Ejercicio1']);
//
Route::post('resultado_ejercicio1',[Ejercicio1Controller::class,'resultado_ejercicio1'])->name('resultado_ejercicio1');
Route::get('Ejercicio2',[Ejercicio2Controller::class,'Ejercicio2'])->name('Ejercicio2');
Route::post('/resultado_Ej2',[Ejercicio2Controller::class,'resultado_Ej2'])->name('resultado_Ej2');
Route:: get('/Ejercicio3',[Ejercicio3Controller::class,'Ejercicio3'])->name('Ejercicio3');
Route::post('/resultado_Ej3',[Ejercicio3Controller::class,'resultado_Ej3'])->name('resultado_Ej3');