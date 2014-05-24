@extends('layouts.master')

@section('content')
    <div class="event">
        <h2>{{ $event->name }}</h2>
        <h3>{{ $event->location }}</h3>
        <p>{{ $event->description }}</p>
    </div>
@stop