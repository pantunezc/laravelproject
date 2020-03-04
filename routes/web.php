<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//canal

Route::get('canals', 'CanalController@index')->name('canals.index');
Route::get('canals/create', 'CanalController@create')->name('canals.create');
Route::post('canals/store', 'CanalController@store')->name('canals.store');
Route::get('canals/{canal}/edit', 'CanalController@edit')->name('canals.edit');
Route::put('canals/{canal}', 'CanalController@update')->name('canals.update');
Route::get('canals/{canal}', 'CanalController@show')->name('canals.show');
Route::delete('canals/{canal}', 'CanalController@destroy')->name('canals.destroy');

//programa

Route::get('programes', 'ProgramaController@index')->name('programes.index');
Route::get('programes/create', 'ProgramaController@create')->name('programes.create');
Route::post('programes/store', 'ProgramaController@store')->name('programes.store');
Route::get('programes/{programa}/edit', 'ProgramaController@edit')->name('programes.edit');
Route::put('programes/{programa}', 'ProgramaController@update')->name('programes.update');
Route::get('programes/{programa}', 'ProgramaController@show')->name('programes.show');
Route::delete('programes/{programa}', 'ProgramaController@destroy')->name('programes.destroy');
