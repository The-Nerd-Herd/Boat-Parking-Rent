@extends('layouts/layout')
@section('js')
    @vite('resources/js/user-delete-popup.js')
@endsection
@section('content')

    <style>
        ::-webkit-scrollbar {
            height: 4px;
        }
    </style>
<main class="flex flex-col items items-center bg-zinc-100 h-full w-full  gap-6 mt-[50px]">
    <h1 class="text-4xl font-semibold pt-[25px] pb-[20px]">
        Welkom, {{$user->name}}
    </h1>
    <div class="snap-mandatory snap-x lg:snap-none overflow-x-scroll flex flex-row gap-5 w-full justify-center lg:p-0 pl-8 pr-8">
        <div class="flex flex-row lg:w-[1070px] bg-white shadow-xl items-center justify-center rounded-md pl-5 pr-5 gap-5 lg:ml-0 ml-[600px]">
            <div class="snap-center lg:snap-none lg:w-full w-[300px]">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="snap-center lg:snap-none lg:w-full w-[300px] pt-[8px]">
                @include('profile.partials.update-password-form')
            </div>
        </div>
        <div class="snap-center lg:snap-none flex flex-col lg:w-[360px] w-[15rem] items-center justify-center bg-white shadow-xl rounded-md px-10">
            <i class="fa fa-user" style="font-size: 200px"></i>
            <button id="deleteUserButton" class="lg:w-1/2 rounded-lg mt-10 hover:bg-red-500 sm:w-full">Account Verwijderen</button>
        </div>
    </div>
    <h1 class="text-4xl font-semibold pt-[10px] pb-[10px]">
        Uw Vermeldingen
    </h1>
        @if(sizeof($parkingSpaces) >= 1)
        <a class="button alt" href="{{route('parkingSpace.create')}}" >Creëren</a>
        <div class="w-full text-center grid lg:grid-cols-3 grid-cols-1 grid-auto-rows gap-10 lg:w-[1450px] rounded-md p-5 mb-[10px]">
            @foreach($parkingSpaces as $space)
                <div class="flex flex-col items-center bg-white justify-center hover:scale-105 duration-100 rounded-md overflow-hidden" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;">
                    <a href="{{route('parkingSpace.show', $space->id)}}" class="block w-full h-[250px] overflow-hidden">
                        <img src="storage/{{$space->picture}}" alt="img" class="w-full h-full object-cover object-center">
                    </a>
                    <div class="flex row items-center h-6 gap-10 w-full justify-center lg:gap-10 pl-[4.5rem] p-10">
                        <a href="{{ route('parkingSpace.edit', $space) }}" class="hover:cursor-pointer text-center p-3 text-white rounded-md hover:bg-orange-500 bg-orange-600">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                        <form action="{{ route('parkingSpace.destroy', $space) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="pt-7">
                                <button type="submit" class="hover:cursor-pointer text-center p-3 rounded-md hover:bg-red-500 bg-red-600">
                                    <i class="fa-solid fa-trash-can hover:fa-spin text-white"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        @else
            <h1 class="text-xl font-semibold pb-[15px]">
                Uw heeft momenteel geen vermeldingen,
                <a class="button alt" href="{{route('parkingSpace.create')}}" >Creëren</a>
            </h1>
        @endif
    <div id="mask" class="absolute backdrop-filter backdrop-blur-[20px] h-[100%]  w-full z-50 bg-gray-600 bg-opacity-25 " style="display: none">
        <div class="h-full w-full flex items-center justify-center mb-2">
            @include('profile.partials.delete-user-pop-up')
        </div>
    </div>

</main>
@endsection
