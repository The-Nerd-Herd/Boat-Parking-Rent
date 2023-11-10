@extends('layouts/layout')

@section('content')
    <script>
        let navBar = document.getElementById('header');
        navBar.className = 'reveal';
    </script>

<main class="flex flex-col items items-center bg-zinc-100 gap-6 mt-[50px]">
    <h1 class="text-4xl font-semibold pt-[10px]">
        Welcome, {{$user->name}}
    </h1>
    <div class="flex lg:flex-row flex-col gap-5 w-full justify-center lg:p-0 pl-8 pr-8">
        <div class="flex lg:flex-row flex-col lg:w-[1020px] bg-white shadow-xl items-center justify-center rounded-md pl-5 pr-5 gap-5">
            <div class="w-full">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="w-full lg:pt-[8px]">
                @include('profile.partials.update-password-form')
            </div>
        </div>
        <div class="flex flex-row lg:w-[360px] items-center justify-center bg-white shadow-xl rounded-md pl-5 pr-5">
            <i class="fa fa-user" style="font-size: 200px"></i>
        </div>
    </div>
 <div class="grid grid-cols-3 grid-auto-rows gap-5 lg:w-[1400px] bg-white shadow-xl rounded-md p-5 mb-[10px]">
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
