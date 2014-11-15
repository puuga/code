<?php

class ServiceController extends BaseController {

  public function simpleService()
  {
    return Response::json(array('message' => 'Hello world'));
  }

  public function simplePostForm()
  {
    return View::make('simple_post');
  }

  public function simpleUpdateForm($id)
  {
    $message = Message::find($id);

    return View::make('simple_update', array('message' => $message));
  }

  public function saveMessage()
  {
    if ( Input::has('message') )
    {
      //$message = Input::get('message', 'null');
      //DB::insert( "INSERT INTO thesis.simple_message (message) VALUES (?)", array($message) );
      $message = new Message;
      $message->message = Input::get('message', 'null');
      $message->save();

      return Response::json(array('message' => $message, 'command'=>'add', 'result'=>'success'));
    }
    else
    {
      return Response::json(array('message' => $message, 'command'=>'add', 'result'=>'unsuccess'));
    }
  }

  public function updateMessage($id)
  {
    $message = Message::find($id);

		// Check vehicle exists
		if (! $message) {
			return Response::json(array('message' => $message, 'command'=>'update', 'result'=>'unsuccess'));
		}

    if (Input::has('message')) {
			$message->message = Input::get('message');
		}

    $message->save();

    return Response::json(array('message' => $message, 'command'=>'update', 'result'=>'success'));
  }

  public function getMessage()
  {
    //$results = DB::select('select * from thesis.simple_message');
    $results = Message::query()->get();

    return View::make('simple_get', array('messages' => $results));
  }

  public function getMessageById($id)
  {
    //$results = DB::select('select * from thesis.simple_message where auto_id=?', array($id));
    $results = Message::query()->where('id',$id)->get();

    return View::make('simple_get', array('messages' => $results));
  }

}
