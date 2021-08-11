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

Route::get('/', 'ConcertController@index');
Route::get('/concerts/create', 'ConcertController@create');
Route::get('/concerts/{concert}', 'ConcertController@show');
Route::post('/concerts/store', 'ConcertController@store');
Route::get('/concerts/{concert}/edit', 'ConcertController@edit');
Route::put('/concerts/{concert}', 'ConcertController@update');
Route::delete('/concerts/{concert}', 'ConcertController@delete');