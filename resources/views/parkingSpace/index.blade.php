@extends('layouts.layout')

@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script>
        let navBar = document.getElementById('header');
        navBar.className = 'reveal'
    </script>

    <main class="flex flex-col mt-[45px]">
        <section class="w-full h-20 flex flex-row-reverse items-center bg-black px-10 fixed z-[99]">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-white hover:bg-gray-200  focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Sort by<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="{{route('parkingSpace.old-new')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Old-New</a>
                    </li>
                    <li>
                        <a href="{{route('parkingSpace.new-old')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">New-Old</a>
                    </li>
                </ul>
            </div>
        </section>
        <div class="w-full bg-gray-100 flex items-center flex-col mt-14">
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
        </div>
    </main>
@endsection
