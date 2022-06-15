<?php

use App\Http\Controllers\hojaVidaController;
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
Route::get('/templete',[hojaVidaController::class,'vistaTemplete']);
Route::get('/datosPersonales',[hojaVidaController::class,'datosPersonales']);
Route::get('/estudios',[hojaVidaController::class,'estudios']);
Route::get('/experiencias',[hojaVidaController::class,'experiencias']);
Route::get('/tablamultiplicar',[hojaVidaController::class,'tablamultiplicar']);