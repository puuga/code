@extends('layouts.master')

@section('content')
  <p>This is result.</p>
  @foreach ($messages as $message)
    <p>
      {{ $message->auto_id }},
      {{ $message->message }},
      {{ $message->timestamp }}
      {{ link_to_route('service.simple.get', 'link', $parameters = array($message->auto_id), $attributes = array()) }}
    </p>
  @endforeach
@stop
