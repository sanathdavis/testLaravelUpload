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

Route::get('/user/{user}', 'TaskController@user');
Route::get('/task', 'TaskController@index');
Route::get('/task/create', 'TaskController@create');
Route::post('/task/create', 'TaskController@save');
Route::get('/task/{task}', 'TaskController@edit');
Route::patch('/task/{task}', 'TaskController@update');
