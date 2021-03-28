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

Route::post('/creatUser', 'HomeController@store')->name('user.store');
Route::put('/editarUser/{id}', 'HomeController@update')->name('user.edit');
Route::delete('/userDelet/{id}','HomeController@destroy')->name('deletar');
Route::any('/PesquisarUser', 'HomeController@search')->name('user.search');
Route::get('/','HomeController@index')->name('index');
Route::get('/editar/{id}','HomeController@show')->name('editar');
