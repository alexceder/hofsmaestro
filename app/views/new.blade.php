@extends('layouts.master')

@section('content')

<form method="post" action="/events">

<div class="input-wrapper input-wrapper-name"><input placeholder="Namn på eventet.." name="name"></div>
<div class="input-wrapper input-wrapper-location"><input placeholder="Plats.." name="location"></div>
<div class="input-wrapper input-wrapper-time"><input placeholder="Tid.." name="time"></div>

<input type="submit" class="btn-big btn-big-center" value="Skapa event">

</form>

@stop