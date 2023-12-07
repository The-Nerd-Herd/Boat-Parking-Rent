@extends('layouts.layout')

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
    <section id="one" class="wrapper style2 flex flex-col items-center">
            <div class="grid-style w-[90%] items-center self-center justify-center">
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
                                <a href="hardCoded" class="button alt">Lees meer</a>
                            </footer>
                        </div>
                    </div>
                </div>
                @foreach($parkingSpaces as $parkingSpace)
                    <div class="flex flex-col items-center">
                        <div class="box flex flex-col items-center">
                            <div>
                                <img class="w-full h-[500px]" src="{{$parkingSpace->picture}}" alt="img"/>
                            </div>
                            <div class="content pl-8">
                                <header class="align-center">
                                    <p>{{$parkingSpace->title}}</p>
                                    <h2>{{$parkingSpace->user->name}}</h2>
                                </header>
                                <p class="align-center pb-6"> {{$parkingSpace->description}}</p>
                                <footer class="align-center">
                                    <a href="{{route('parkingSpace.show', $parkingSpace->id)}}" class="button alt">Lees meer</a>
                                </footer>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="{{route('parkingSpace.index')}}" class="button alt">Lees meer</a>

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
