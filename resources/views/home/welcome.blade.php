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
            <div class="grid lg:grid-cols-2 grid-cols-1 lg:w-[85%] w-[90%] gap-y-[1.5rem] gap-x-[3rem] items-center self-center justify-center lg:p-10 p-1">
                <div class="lg:p-0 p-1">
                    <div class="box rounded-md overflow-hidden hover:scale-105 duration-100" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;">
                        <div class="image fit">
                            <img class="lg:h-[25rem] h-[15rem] lg:w-[43rem] object-none" src="images/ricardo.jpg" alt="img"/>
                        </div>
                        <div class="content pl-8 w-full h-[15.5rem]">
                            <header class="align-center">
                                <p>Neeltje Jans</p>
                                <h2>Ligplaatsverhuur van Ricardo Beuken</h2>
                            </header>
                            <footer class="align-center pt-6">
                                <a href="hardCoded" class="button alt">Lees meer</a>
                            </footer>
                        </div>
                    </div>
                </div>
                @foreach($parkingSpaces as $parkingSpace)
                    <div class="flex flex-col items-center">
                        <div class="box rounded-md overflow-hidden hover:scale-105 duration-100" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;">
                            <div>
                                <img class="lg:h-[25rem] h-[15rem] lg:w-[43rem]  object-none" src="{{$parkingSpace->picture}}" alt="img"/>
                            </div>
                            <div class="content pl-8 w-full h-[15.5rem]">
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
        <a href="{{route('parkingSpace.index')}}" class="button alt lg:w-[30%] lg:mb-0 mb-12 w-[50%]">Show all</a>
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
