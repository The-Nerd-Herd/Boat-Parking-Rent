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
    @include('profile.partials.delete-user-pop-up')
    <h1 class="text-4xl font-semibold pt-[25px] pb-[20px]">
        Welcome, {{$user->name}}
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
        <div class="snap-center lg:snap-none flex flex-col lg:w-[360px] items-center justify-center bg-white shadow-xl rounded-md pl-5 pr-5">
            <i class="fa fa-user" style="font-size: 200px"></i>
            <button class="w-1/2 rounded-lg mt-10 hover:bg-red-500" onclick="openPupup">Delete account</button>
        </div>
    </div>
    <h1 class="text-4xl font-semibold pt-[10px] pb-[10px]">
        Your listings
    </h1>
    <div class="w-full h-full grid lg:grid-cols-3 grid-cols-1 grid-auto-rows gap-5 lg:w-[1450px]  bg-white shadow-xl rounded-md p-5 mb-[10px]">
        @foreach($parkingSpaces as $space)
            <div class="flex flex-col items-center bg-gray-200 shadow-md justify-center transform duration-75 hover:scale-105 hover:shadow-2xl scale-100 rounded-md">
                <a href="{{route('parkingSpace.show', $space->id)}}"><img  src="{{$space->picture}}"></a>
                <div class="flex row items-center h-6 gap-10 w-full justify-center lg:gap-6 p-10">
                    <a class="hover:cursor-pointer text-center p-3 text-white rounded-md hover:bg-orange-500 bg-orange-600">
                        <i class="fa-solid fa-edit" ></i>
                    </a>
                    <a class="hover:cursor-pointer text-center p-3 text-white rounded-md hover:bg-red-500 bg-red-600">
                        <i class="fa-solid fa-trash-can hover:fa-spin" ></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div id="mask" disabled="true" class="absolute h-full w-full z-50 blur bg-transparent-200">

    </div>

</main>
@endsection
