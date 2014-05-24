@extends('layouts.master')

@section('content')
@foreach ($events as $event)
    <div class="event">
        <h2><a href="{{ url('events/'.$event->id) }}">{{ $event->name }}</a></h2>
        <h3>{{ $event->location }}</h3>
        <p>{{ $event->description }}</p>
    </div>
@endforeach
    <div style="clear:both;"></div>
@stop