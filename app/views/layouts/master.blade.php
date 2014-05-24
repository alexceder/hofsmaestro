<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gör't nu!</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>

<nav class="menu slide-menu-right">
    <ul>
        <li><button class="close-menu">Close &rarr;</button></li>
        <li><a href="/events">Alla event</a></li>
        <li><a href="/events/my">Mina event</a></li>
        <li><a href="/settings">Inställningar</a></li>
        <li><a href="/events/random">Slumpa event</a></li>
    </ul>
</nav>

@include('partials.navbar')

@yield('content')

<script src="/js/classie.js"></script>
<script src="/js/nav.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.js"></script>
<script>
(function() {
    $('.event-btn').on('click', function() {
        $(this).toggleClass('active');
        console.log('asd');
    });
})();
</script>
</body>
</html>
