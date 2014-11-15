<?php

class ServiceController extends BaseController {

  /*
  |--------------------------------------------------------------------------
  | Default Home Controller
  |--------------------------------------------------------------------------
  |
  | You may wish to use controllers instead of, or in addition to, Closure
  | based routes. That's great! Here is an example controller method to
  | get you started. To route to this controller, just add the route:
  |
  |	Route::get('/', 'HomeController@showWelcome');
  |
  */

  public function simpleService()
  {
    return Response::json(array('message' => 'Hello world'));
  }

  public function simplePostForm()
  {
    return View::make('simple_post');
  }

  public function simplePostService()
  {
    if ( Input::has('message') )
    {
      $message = Input::get('message', 'null');
      DB::insert( "INSERT INTO thesis.simple_message (message) VALUES (?)", array($message) );
      return Response::json(array('message' => $message, 'command'=>'add', 'result'=>'success'));
    }
    else
    {
      return Response::json(array('message' => $message, 'command'=>'add', 'result'=>'unsuccess'));
    }
  }

}
