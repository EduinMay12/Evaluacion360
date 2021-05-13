<?php

use App\Http\Controllers\PuestoController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('competencia', 'App\Http\Controllers\CompetenciaController');
Route::resource('puestos', PuestoController::class);
Route::post('puesto-competencia/{puesto}', [PuestoController::class, 'guardar_cp'])->name('puesto-competencia.guardar_cp');
Route::delete('puesto-competencia/{puesto}', [PuestoController::class, 'eliminar_cp'])->name('puesto-competencia.eliminar_cp');
Route::resource('nivel', 'App\Http\Controllers\NivelController');


