@extends('layouts/layout')

@section('content')
    <!-- Banner -->
    <section class="banner full">
        <article>
            <img src="images/banner1.jpg" alt=""/>
            <div class="inner">
                <header>
                    <p>Rent any boat parking space</p>
                    <h2>Boat Haven Rentals</h2>
                </header>
            </div>
        </article>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style2">
        <div class="inner">
            <div class="grid-style justify-center">
            @for($i = 0 ; $i<1; $i ++)
                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="images/ricardo.jpg" alt=""/>
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <p>Neeltje Jans</p>
                                <h2>Boat Haven - Ricardo Beuken</h2>
                            </header>
                            <p class="align-center pb-4"> Description placeholder</p>
                            <footer class="align-center">
                                <a href="{{ route('parkingSpace.show') }}" class="button alt">Learn More</a>
                            </footer>
                        </div>
                    </div>
                </div>
            @endfor
            </div>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
                <h2>Morbi maximus justo</h2>
            </header>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style2">
        <div class="inner">
            <header class="align-center">
                <p class="special">Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
                <h2>Morbi maximus justo</h2>
            </header>
            <div class="gallery">
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/pic01.jpg" alt=""/></a>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/pic02.jpg" alt=""/></a>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/pic03.jpg" alt=""/></a>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/pic04.jpg" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
