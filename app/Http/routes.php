<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('register',function(){
	return view('register');
});
Route::post('register','UserController@add');
Route::get('login',function(){
	return view('login');
});
Route::post('login','UserController@check');
Route::get('artistprofile',function(){
	return view('artistprofile');
});
Route::get('customer',function(){
	return view('customer');
});

Route::get('/artist','ArtistController@check');
Route::post('/artist','ArtistController@add');