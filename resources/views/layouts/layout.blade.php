<!DOCTYPE HTML>
<html>
<head>
    <title>Boat park renting</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css"/>
    @vite('resources/css/app.css');
</head>
<body>

<!-- Header -->
<header id="header" class="alt">
    <a href="{{ route('login') }}">Login</a>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a>Profile</a></li>
{{--        <li><a href="elements.html">Elements</a></li>--}}
    </ul>
</nav>

@yield('content')

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <p>Made with &#10084 by The Data Crusaders</p>
        <ul class="icons">
{{--            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>--}}
{{--            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>--}}
{{--            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>--}}
{{--            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>--}}
        </ul>
    </div>
</footer>


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
