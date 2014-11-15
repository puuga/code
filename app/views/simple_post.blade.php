@extends('layouts.master')

@section('content')
  <p>add</p>
  {{ Form::open(array('url' => '/service/simple/post', 'method' => 'post')) }}
    {{ Form::label('message', 'send message to service') }}
    {{ Form::text('message', null, array('placeholder'=>'message')) }}
    <br/>
    {{ Form::submit('sent!') }}
  {{ Form::close() }}
@stop
