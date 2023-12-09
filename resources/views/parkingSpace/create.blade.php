@extends('layouts/layout')

@section('js')
    @vite('resources/js/create.js')
@endsection

@section('content')
    <script>
        let navBar = document.getElementById('header');
        navBar.className = 'reveal';
    </script>

    {{-- Include the Quill stylesheet --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    {{-- Include Quill script --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    {{-- Quill initialization script --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var options = {
                modules: {
                    toolbar: [
                        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                        ['bold', 'italic'],
                        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                        ['link'],
                        ['clean']
                    ],
                },
                theme: 'snow'
            };

            var editor = new Quill('#editor', options);
            console.log('Quill initialized');
        });
    </script>

    <main class="bg-zinc-100 mt-[50px]">
        <form method="POST" action="{{ route('parkingSpace.store') }}" class="mx-10 rounded-md shadow-xl p-4 bg-white">
            <h1 class="text-xl">Create listing</h1>
            @csrf
            <div id="formContent" class="flex flex-wrap flex-col lg:flex-row gap-6 w-full">
                <div class="w-full lg:w-1/2">
                    <label for="email" value="email">Title</label>
                    <input
                        class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                        id="email" type="text" name="email" required="required" autofocus="autofocus"
                        autocomplete="email">
                </div>
            </div>
            <div id="add" class="bg-gray-800 text-white w-[4%] mt-2 flex items-center justify-center">
                <p class="text-center text-justify">+</p>
            </div>
            <input id="inputCount" class="hidden" type="text" name="inputCount">
            <button class="lg:w-1/4 w-full self-end bg-zinc-200 hover:bg-green-100 mt rounded-md text-white"
                    type="submit">Submit
            </button>
        </form>
        <div class="pl-96 pr-96 pb-10">
            <div id="toolbar">
                <!-- Toolbar buttons will be added by Quill -->
            </div>
            <div id="editor" style="height: 400px;"></div>
            <button class="lg:w-1/4 w-full self-end bg-zinc-200 hover:bg-green-100 mt rounded-md text-white"
                    type="submit">Submit
            </button>
        </div>
    </main>
@endsection
