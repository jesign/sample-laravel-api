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

Route::get('/hello', 'UserController@sample');
Route::post('storeUser', 'UserController@store');

Route::get('/task', 'TaskController@index');
Route::post('/task', 'TaskController@store');