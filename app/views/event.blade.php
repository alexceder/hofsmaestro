@extends('layouts.master')

@section('content')

<a class="btn-big no-icon" href="/">Tillbaka</a>

<div class="event-single">
    <img src="/gfx/volleyball.png">
    <h2>{{ $event->name }}</h2>
    <p><span class="event-body-location">{{ $event->location }}</span></p>
    <p><span class="event-body-time">{{ $event->nice_time }}</span></p>
    <p><span class="event-body-user">{{ $event->num_people }}/{{ $event->max_num_people }}</span></p>
    <p>{{ $event->description }}</p>
</div>

<a class="btn-big btn-big-center" href="#">Anmäl</a>

@stop