@extends('layouts/layout')


@section('content')
    <script>
        let navBar = document.getElementById('header');
        navBar.className = 'reveal'
    </script>
    <script src="/path/or/uri/to/tinymce.min.js" referrerpolicy="origin"></script>
<style>
    input::file-selector-button{
        background: black;
        color: white;
      padding-bottom: 7px;
        padding-top: 7px;
    }
</style>

    <main class="bg-zinc-100 mt-[50px]">
        <p>This is a test</p>


        <form method="POST" action="{{route('parkingSpace.store')}}" class="mx-10 rounded-md shadow-xl p-4 bg-white">
            <h1  class="text-xl">Create listing</h1>
            @csrf
            <div class="flex flex-col lg:flex-row gap-6 w-full">
                <div class="w-full lg:w-1/2">
                    <label for="email" value="email">Title</label>
                    <input  class=" bg-gray-100 text-black rounded-md shadow-sm block mt-1 " id="email" type="email" name="email" required="required" autofocus="autofocus" autocomplete="email">
                </div>

                <div class="w-full lg:w-1/2">
                    <label for="phone">Upload Picture</label>
                    <input  class="  bg-gray-100 text-black rounded-md shadow-sm block mt-1 " id="image" type="file"  name="phone" required="required" autofocus="autofocus" autocomplete="phone">
                </div>
            </div>

            <div class="flex flex-row justify-between gap-6 ">
                <div>
                    <label for="initials" >House Rules</label>
                    <input  class="  bg-gray-100 text-black rounded-md shadow-sm block mt-1 " id="initials" type="text" name="initials" maxlength="1"  autofocus="autofocus" autocomplete="name">
                </div>

            </div>

            <button class="lg:w-1/4 w-full self-end bg-zinc-200 hover:bg-green-100 mt rounded-md text-white" type="submit">Submit</button>
        </form>
    </main>

@endsection
