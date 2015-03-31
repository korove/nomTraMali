<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('h', function()
{
	return View::make('hello');
});

// Route::get('/', function()
// {
// 	return View::make('index');
// });
Route::get('/', 'HomeController@getRegister');
Route::get('i', 'HomeController@getHome');
Route::get('register', 'HomeController@getRegister');