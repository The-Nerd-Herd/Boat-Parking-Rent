@extends('layouts/layout')

@section('js')
    @vite('resources/js/create.js')
@endsection

@section('content')
    <script>
        let navBar = document.getElementById('header');
        navBar.className = 'reveal'
    </script>

    {{-- TinyMCE initialization plus api key --}}
    <script
        src="https://cdn.tiny.cloud/1/0ewhjfzvt26dow7nw6xdawboqwvw2nn3w4ocvfrjphnaptyh/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"
    ></script>

    {{-- TinyMCE configuration --}}
    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'powerpaste casechange searchreplace autolink directionality visualblocks visualchars image link media mediaembed codesample table charmap pagebreak nonbreaking anchor tableofcontents insertdatetime advlist lists checklist wordcount tinymcespellchecker editimage help formatpainter permanentpen charmap linkchecker emoticons advtable export autosave',
            toolbar: 'undo redo print spellcheckdialog formatpainter | blocks fontfamily fontsize | bold italic underline forecolor backcolor | link image | alignleft aligncenter alignright alignjustify',
            height: '600px',
            width: '1600px'
        });
    </script>

    <style>
        input::file-selector-button {
            background: black;
            color: white;
            padding-bottom: 7px;
            padding-top: 7px;
        }
    </style>

    <main class="bg-zinc-100 mt-[50px]">
        <form method="POST" action="{{route('parkingSpace.store')}}" class="mx-10 rounded-md shadow-xl p-4 bg-white">
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

            {{-- TinyMCE text editor --}}
            <h1>Write your House Rules</h1>
            <div class="mt-2 flex justify-center">
                <textarea id="editor" name="editorContent">Hello, World!</textarea>

            </div>
        </form>
    </main>

@endsection
