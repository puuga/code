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

// simple service
Route::group(array('prefix' => 'service/simple'), function() {
	Route::get('/', array('as' => 'service.simple', 'uses' => 'ServiceController@simpleService'));
	Route::get('form', array('as' => 'service.simple.form', 'uses' => 'ServiceController@simplePostForm'));
	Route::post('post', array('as' => 'service.simple.post', 'uses' => 'ServiceController@saveMessage'));
	Route::get('get', array('as' => 'service.simple.get', 'uses' => 'ServiceController@getMessage'));
	Route::get('get/{id}', array('as' => 'service.simple.get', 'uses' => 'ServiceController@getMessageById'));
	Route::post('update/{id}', array('as' => 'service.simple.update.do', 'uses' => 'ServiceController@updateMessage'));
	Route::get('update/{id}', array('as' => 'service.simple.update.form', 'uses' => 'ServiceController@simpleUpdateForm'));
});
