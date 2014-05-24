<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gör't nu!</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.1/angular.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 
	<link rel="stylesheet" href="/css/style.css">
    <script src="/js/location.js"></script>
</head>

<body onload="getLocation()">
	@include('partials.navbar')

	@yield('content')
</body>
</html>
