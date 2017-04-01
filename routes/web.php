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

Route::get('/', 'Tracker@show');

Auth::routes();

// Route::get('/home', 'HomeController@index');
Route::get('/home', 'Tracker@show');

Route::get('/addseries', [
    'middleware' => ['auth'],
    'uses' => 'Tracker@show_series_form'
]);

Route::get('/delete/{id}', [
    'middleware' => ['auth'],
    'uses' => 'Tracker@delete'
]);

Route::post('/register_series', [
    'middleware' => ['auth'],
    'uses' => 'Tracker@store_series'
]);
