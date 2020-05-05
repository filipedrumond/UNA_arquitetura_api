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

Route::get('/teste',function(){
    return view('teste');
});

Route::post('/clube', 'ClubesController@create');
Route::delete('/clube/{id}', 'ClubesController@delete');
Route::put('/clube/{id}', 'ClubesController@update');

Route::get('/clube', 'ClubesController@getAll');
Route::get('/clube/{id}', 'ClubesController@getById');
