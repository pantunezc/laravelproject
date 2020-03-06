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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::middleware(['auth'])->group(function () {

    //canal

    Route::get('canals', 'CanalController@index')->name('canals.index');
    Route::get('canals/create', 'CanalController@create')->name('canals.create')->middleware('role:admin');
    Route::post('canals/store', 'CanalController@store')->name('canals.store')->middleware('role:admin');
    Route::get('canals/{canal}/edit', 'CanalController@edit')->name('canals.edit')->middleware('role:admin');
    Route::put('canals/{canal}', 'CanalController@update')->name('canals.update')->middleware('role:admin');
    Route::get('canals/{canal}', 'CanalController@show')->name('canals.show');
    Route::delete('canals/{canal}', 'CanalController@destroy')->name('canals.destroy')->middleware('role:admin');

    //programa

    Route::get('programes', 'ProgramaController@index')->name('programes.index');
    Route::get('programes/create', 'ProgramaController@create')->name('programes.create')->middleware('role:admin');
    Route::post('programes/store', 'ProgramaController@store')->name('programes.store')->middleware('role:admin');
    Route::get('programes/{programa}/edit', 'ProgramaController@edit')->name('programes.edit')->middleware('role:admin');
    Route::put('programes/{programa}', 'ProgramaController@update')->name('programes.update')->middleware('role:admin');
    Route::get('programes/{programa}', 'ProgramaController@show')->name('programes.show');
    Route::delete('programes/{programa}', 'ProgramaController@destroy')->name('programes.destroy')->middleware('role:admin');

    //graella

    Route::get('graelles', 'GraellaController@index')->name('graelles.index');
    Route::get('graelles/create', 'GraellaController@create')->name('graelles.create')->middleware('role:admin');;
    Route::post('graelles/store', 'GraellaController@store')->name('graelles.store')->middleware('role:admin');
    Route::get('graelles/{graella}/edit', 'GraellaController@edit')->name('graelles.edit')->middleware('role:admin');
    Route::put('graelles/{graella}', 'GraellaController@update')->name('graelles.update')->middleware('role:admin');
    Route::get('graelles/{graella}', 'GraellaController@show')->name('graelles.show');
    Route::delete('graelles/{graella}', 'GraellaController@destroy')->name('graelles.destroy')->middleware('role:admin');

});