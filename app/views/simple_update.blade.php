@extends('layouts.master')

@section('content')
  <p>update</p>
  {{ Form::open(array('url' => '/service/simple/update/'.$message->id, 'method' => 'post')) }}
    {{ Form::label('message', 'update message to service') }}
    {{ Form::text('message', $message->message, array('placeholder'=>$message->message)) }}
    <br/>
    {{ Form::submit('sent!') }}
  {{ Form::close() }}
@stop
