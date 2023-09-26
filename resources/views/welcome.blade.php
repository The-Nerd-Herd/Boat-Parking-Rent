@extends('layouts/layout')

@section('content')
    <!-- Banner -->
    <section class="banner full">
        <article>
            <img src="images/banner1.jpg" alt=""/>
            <div class="inner">
                <header>
                    <p>Huur eventuele ligplaatsen</p>
                    <h2>Boot Ligplaats Verhuur</h2>
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
                        <div class="content pl-8">
                            <header class="align-center">
                                <p>Neeltje Jans</p>
                                <h2>Ligplaatsverhuur van Ricardo Beuken</h2>
                            </header>
                            <p class="align-center pb-6"> Ligplaatsen te huur bij Neeltje Jans</p>
                            <footer class="align-center">
                                <a class="button alt">Learn More</a>
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
                <p>Ontdek uw perfecte ligplaats vandaag bij</p>
                <h2>Neeltje Jans</h2>
            </header>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style2">
        <div class="inner">
            <div class="gallery">
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/neeltjeJans1.jpg" alt=""/></a>
                    </div>
                </div>
                <div>
                    <div class="image fit">
                        <a href="#"><img src="images/neeltjeJans2.jpg" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
