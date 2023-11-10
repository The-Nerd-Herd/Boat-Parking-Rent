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
                    <input  class="bg-gray-100 text-black rounded-md shadow-sm block mt-1" id="image" type="file"  name="phone" required="required" autofocus="autofocus" autocomplete="phone">
                </div>
            </div>

            <div class="flex flex-row justify-between gap-6 mt-5">
                <div class="mt-5 w-full lg:w-1/2">
                    <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                        <h2 class="text-left text-black has-text-weight-bold rounded-md block mt-1 pb-2">Upload File</h2>
                        @csrf
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="chooseFile">
                        </div>
                    </form>
            </div>

            <button class="lg:w-1/4 w-full self-end bg-zinc-200 hover:bg-green-100 mt rounded-md text-white" type="submit">Submit</button>
            </div>
    </main>

@endsection
