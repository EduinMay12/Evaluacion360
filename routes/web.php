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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('competencia', 'App\Http\Controllers\CompetenciaController');
    Route::resource('puesto', 'App\Http\Controllers\PuestoController');
    Route::resource('nivel', 'App\Http\Controllers\NivelController');

    Route::resource('profile', 'App\Http\Controllers\ProfileController');
    Route::resource('user', 'App\Http\Controllers\UserController');
	Route::post('profile/edit', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@update_avatar']);
	Route::get('profile/edit', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile/edit', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});