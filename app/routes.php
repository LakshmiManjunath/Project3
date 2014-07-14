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

// Route for the index or Home page 
Route::get('/', function()
{
	return View::make('index');
});

// Route for Lorem Ipsum text generator, 'GET' method
Route::get('/lorem_ipsum', function()
{ 
	 return View::make('lorem_ipsum');
});

// Route for Lorem Ipsum text generator, 'POST' method
Route::post('/lorem_ipsum', function()
{
	 return View::make('lorem_ipsum');
});

// Route for User Information generator, 'GET' method
Route::get('/user_info', function()
{
	return View::make('user_info');
});

// Route for User Information generator, 'POST' method
Route::post('/user_info', function()
{
	return View::make('user_info');
});
