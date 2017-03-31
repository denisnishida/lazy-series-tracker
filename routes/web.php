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

Route::get('/callback', '\Auth0\Login\Auth0Controller@callback');
// Route::get('/callback', function() {
//     //dd(Auth0::getUser());
//     return view('index');
// });

Route::get('/logout', function() {
    Auth::logout();
    return Redirect::home();
});

Route::get('/', function () {
    return view('welcome');

    //you can check if user authenticated with Auth::check()
        //if (Auth::check()) dd('LOGGED IN',Auth::user());

        //return view('index');
});
