@extends('layouts.master')

@section('content')
  <p>This is result.</p>
  @foreach ($messages as $message)
    <p>
      {{ $message->id }},
      {{ $message->message }},
      {{ $message->timestamp }}
      {{ link_to_route('service.simple.get', 'link', $parameters = array($message->id), $attributes = array()) }}
      {{ link_to_route('service.simple.update.form', 'update', $parameters = array($message->id), $attributes = array()) }}
    </p>
  @endforeach
@stop
