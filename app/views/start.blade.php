@extends('layouts.master')

@section('content')

<a class="btn-big" href="events/new">Skapa event</a>

@foreach ($events as $event)
    <div class="event">
        <div class="event-icon">
        </div>
        <div class="event-body">
            <h2><a href="{{ url('events/'.$event->id) }}">{{ $event->name }}</a></h2>
            <p class="event-body-location">{{ $event->location }}</p>
            <p class="event-body-time">{{ $event->nice_time }}</p>
        </div>
        <div class="event-btn">
            <a class="icon" href="#"></a>
        </div>
        <div style="clear:both;"></div>
    </div>
@endforeach
@stop