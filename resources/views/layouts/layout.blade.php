<!DOCTYPE HTML>
<html>
<head>
    <title>Boat park renting</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="./public/images/paper-boat.jpg">
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    @vite('resources/css/app.css')
    @yield('js')
</head>
<body>

<!-- Header -->
<header id="header" class="alt">
    @if(Request::is('/'))
    <a href="/" class="logo"><img class="scale-50" src="./images/paper-boat.jpg"></a>
    @else
        <a href="/" class="logo"><img class="scale-50" src="./../images/paper-boat.jpg"></a>
    @endif
    <a href="{{ route('login') }}">Login</a>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="/">Home</a></li>
        <li><a href="{{route('profile.edit')}}">Profile</a></li>
{{--        <li><a href="elements.html">Elements</a></li>--}}
    </ul>
</nav>

@yield('content')

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <p>Made with &#10084 by The Data Crusaders</p>
        <ul class="icons">

        </ul>
    </div>
</footer>


<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery.scrollex.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/util.js"></script>
<script src="/assets/js/main.js"></script>

</body>
</html>
