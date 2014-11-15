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
Route::get('/service/simple/form', array('as' => 'service.simple.form', 'uses' => 'ServiceController@simplePostForm'));
Route::post('/service/simple/post', array('as' => 'service.simple.post', 'uses' => 'ServiceController@simplePostService'));
Route::get('/service/simple/get', array('as' => 'service.simple.get', 'uses' => 'ServiceController@simpleGetService'));
Route::get('/service/simple/get/{id}', array('as' => 'service.simple.get', 'uses' => 'ServiceController@simpleGetServiceById'));
