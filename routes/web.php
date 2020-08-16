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
})->name('welcome');
Route::resource('ideias', 'IdeiasController');
Route::get('ideias', 'IdeiasController@index')->name('ideias');
Route::post('ideias/store', 'IdeiasController@store')->name('ideias.store');
Route::get('ideias/delete/{id}', 'IdeiasController@destroy')->name('ideias.delete');