@extends('master')
@section('main-content')
	<h1>Find location</h1>
    
    <p id="showLocation">location.</p>
    <button onclick="getLocation()">Get pos</button>

    <script src="js/location.js"></script>
@stop