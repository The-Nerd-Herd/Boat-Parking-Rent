<!DOCTYPE HTML>
<html>
<head>
    <title>Boat park renting</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="./public/images/paper-boat.jpg">
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/jquery.min.js')
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
    <div class="flex lg:gap-6 gap-1 justify-end h-[80%] w-full lg:pr-10 pr-3 my-1.5">
        @if (auth()->check())
            <form method="POST" class="h-full flex items-center flex-col justify-center" action="{{route('logout')}}">
                @csrf
                @method('POST')
                <div class="flex items-center h-full flex-col">
                    <button class="flex items-center text-center justify-center w-20 h-full rounded-lg hover:bg-black" type="submit"><p class="text-white m-0 hover:text-white text-opacity-50">LOG OUT</p></button>
                </div>
            </form>
        @else
            <a class="flex items-center text-black justify-center w-20 h-full rounded-lg hover:bg-black" href="{{ route('login') }}"><p class="text-white m-0 hover:text-white text-opacity-50">LOGIN</p></a>
        @endif
            <div class="flex transform duration-100 flex-col items-center justify-center h-full w-20 rounded-lg">
                <a href="#menu"><p class="text-white m-0 hover:text-white text-opacity-50">MENU</p></a>
            </div>
    </div>
</header>

<!-- Nav -->
<nav id="menu" >
    <ul class="links">
        <li><a href="/" class="my-3">Home</a></li>
        <li><a href="@if(auth()->check()){{route('profile.edit')}}@else{{route('login')}}@endif" class="my-3">Profile</a></li>
        {{--<li><a href="elements.html">Elements</a></li>--}}
    </ul>
</nav>
<!-- Body -->
<section class="flex flex-col">
 @yield('content')
</section>


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
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    let navBar = document.getElementById('header');
    navBar.className = 'reveal';

    // it werk
    document.addEventListener('DOMContentLoaded', function () {
        let menuLink = document.querySelector('a[href="#menu"]');
        let menuSection = document.getElementById('menu');

        if (menuLink && menuSection) {
            menuLink.addEventListener('click', function (e) {
                e.preventDefault();
                menuSection.scrollIntoView({ behavior: 'smooth' });
            });
        }
    });
</script>
@yield('scripts')

</body>
</html>
