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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('personas', function () {
    return view('personas.index');
});

Route::get('personas/edit', function () {
    return view('personas.edit');
});

Route::get('competencias', function () {
    return view('competencias.index');
});

Route::get('competencias/create', function () {
    return view('competencias.create');
});

Route::get('puestos', function () {
    return view('puestos.index');
});