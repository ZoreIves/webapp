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

Route::get('/about', function()
{
	return
	'<h2>Hello Word</h2>'

		.'Test Belajar Framework Laravel<br>'
		.'laravel emang kereeennnnn';

	// return View::make('hello');
});
Route::get('/', function()
{
	return View::make('hello');
});
