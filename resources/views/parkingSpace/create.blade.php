@extends('layouts/layout')

@section('js')
    @vite('resources/js/create.js')
@endsection

{{-- Quill initialization script --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            modules: {
                toolbar: [
                    ['bold' ,'italic', 'underline', 'strike'],        // toggled buttons
                    ['blockquote'],

                    [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                    [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                    [{ 'direction': 'rtl' }],                         // text direction

                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],  // custom dropdown

                    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                    [{ 'font': [] }],
                    [{ 'align': [] }],

                    ['clean']
                ],
            },
            theme: 'snow'
        };

        var editor = new Quill('#editor', options);
        console.log('Quill initialized');

        $(document).ready(function() {
            $('#identifier').on('submit', function() {
                $('#hiddenArea').val($('#editor').html());
            });
        });
    });
</script>

@section('content')
    <main class="bg-zinc-100 mt-[50px]">
        <form id="identifier" method="POST" action="{{ route('parkingSpace.store') }}" class="mx-10 rounded-md shadow-xl p-4 bg-white">
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
            <!-- Quill rich text editor -->
            <div class="w-full flex flex-col">
                <h2 class="text-xl items-center pb-5">Schrijf je huisregels</h2>
                <div id="toolbar">
                    <!-- Toolbar buttons will be added by Quill -->
                </div>
                <div id="editor" style="height: 400px;" ></div>
            </div>
                <textarea id="hiddenArea" name="houseRules" style="display:none" class="w-full flex flex-col items-center"></textarea>
                <button class="lg:w-1/4 w-full self-end bg-zinc-200 hover:bg-green-100 mt rounded-md text-white"
                        type="submit">Submit
                </button>
        </form>
    </main>
@endsection
