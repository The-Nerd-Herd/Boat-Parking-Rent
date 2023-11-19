@extends('layouts/layout')

@section('content')
    <script>
        let navBar = document.getElementById('header');
        navBar.className = 'reveal';
    </script>
    <style>
        ::-webkit-scrollbar {
            height: 4px;
        }
    </style>

<main class="flex flex-col items items-center bg-zinc-100 gap-6 mt-[50px]">
    <h1 class="text-4xl font-semibold pt-[25px] pb-[20px]">
        Welcome, {{$user->name}}
    </h1>
    <div class="snap-mandatory snap-x lg:snap-none overflow-x-scroll flex flex-row gap-5 w-full justify-center lg:p-0 pl-8 pr-8">
        <div class="flex flex-row lg:w-[1020px] bg-white shadow-xl items-center justify-center rounded-md pl-5 pr-5 gap-5 lg:ml-0 ml-[600px]">
            <div class="snap-center lg:snap-none lg:w-full w-[300px]">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="snap-center lg:snap-none lg:w-full w-[300px] pt-[8px]">
                @include('profile.partials.update-password-form')
            </div>
        </div>
        <div class="snap-center lg:snap-none flex flex-row lg:w-[360px] items-center justify-center bg-white shadow-xl rounded-md pl-5 pr-5">
            <i class="fa fa-user" style="font-size: 200px"></i>
        </div>
    </div>
    <h1 class="text-4xl font-semibold pt-[10px] pb-[10px]">
        Your listings
    </h1>
 <div class="grid lg:grid-cols-3 grid-cols-1 grid-auto-rows gap-5 lg:w-[1400px] bg-white shadow-xl rounded-md p-5 mb-[10px]">
     <img src="images/pic02.jpg" alt="rental property">
     <img src="images/pic03.jpg" alt="rental property">
     <img src="images/pic01.jpg" alt="rental property">
     <img src="images/pic04.jpg" alt="rental property">
     <img src="images/pic03.jpg" alt="rental property">
     <img src="images/pic01.jpg" alt="rental property">
 </div>
    <!-- @include('profile.partials.delete-user-form')-->
</main>
@endsection
