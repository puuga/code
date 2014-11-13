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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/helloworld', function()
{
	return "hello world";
});

Route::get('/welcome', array('as' => 'home', 'uses' => 'HomeController@showWelcome'));

//service
Route::get('/service/simple', array('as' => 'service.simple', 'uses' => 'ServiceController@simpleService'));
