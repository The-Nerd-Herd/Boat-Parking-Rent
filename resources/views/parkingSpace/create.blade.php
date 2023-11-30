@extends('layouts/layout')

@section('js')
    <<<<<<< HEAD
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
        <form method="POST" action="{{route('parkingSpace.store')}}" class="mx-10 rounded-md shadow-xl p-4 bg-white"
              enctype="multipart/form-data">
            <h1 class="text-xl">Create listing</h1>
            @csrf
            <div class="flex flex-wrap flex-col lg:flex-row gap-6 w-full">
                <div class="w-full lg:w-1/2">

                    <label for="title" value="text">Title</label>
                    <input
                        class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                        id="text" type="text" name="title" required="required" autofocus="autofocus"
                        autocomplete="text">
                </div>

                <div class="w-full lg:w-1/2">
                    <label for="street" value="text">Street</label>
                    <input
                        class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                        id="text" type="text" name="street" required="required" autofocus="autofocus"
                        autocomplete="text">
                </div>

                <div class="w-full lg:w-1/2">
                    <label for="year" value="text">Year</label>
                    <input
                        class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                        id="text" type="text" name="year" required="required" autofocus="autofocus" autocomplete="text">
                    <div id="year" class="bg-gray-800 text-white w-[4%] mt-2 flex items-center justify-center">
                        <p class="text-center">+</p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <label for="month" value="text">month</label>
                    <input
                        class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                        id="text" type="text" name="month" required="required" autofocus="autofocus"
                        autocomplete="text">
                    <div id="month" class="bg-gray-800 text-white w-[4%] mt-2 flex items-center justify-center">
                        <p class="text-center">+</p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <label for="day" value="text">Day</label>
                    <input
                        class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                        id="text" type="text" name="day" required="required" autofocus="autofocus" autocomplete="text">
                    <div id="day" class="bg-gray-800 text-white w-[4%] mt-2 flex items-center justify-center">
                        <p class="text-center">+</p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <label for="special" value="text">special</label>
                    <input
                        class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                        id="text" type="text" name="special" required="required" autofocus="autofocus"
                        autocomplete="text">
                    <div id="special" class="bg-gray-800 text-white w-[4%] mt-2 flex items-center justify-center">
                        <p class="text-center">+</p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <label for="additional" value="text">additional</label>
                    <input
                        class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                        id="text" type="text" name="additional" required="required" autofocus="autofocus"
                        autocomplete="text">
                    <div id="additional" class="bg-gray-800 text-white w-[4%] mt-2 flex items-center justify-center">
                        <p class="text-center">+</p>
                    </div>
                </div>
            </div>

            <input id="yearCount" class="hidden" type="text" name="yearCount">
            <input id="monthCount" class="hidden" type="text" name="monthCount">
            <input id="dayCount" class="hidden" type="text" name="dayCount">
            <input id="specialCount" class="hidden" type="text" name="specialCount">
            <input id="additionalCount" class="hidden" type="text" name="additionalCount">
            {{-- TinyMCE text editor --}}
            <h1>Write your House Rules</h1>
            <div class="mt-2 flex justify-center">
                <textarea id="editor" name="editorContent">Hello, World!</textarea>
                <button class="lg:w-1/4 w-full self-end bg-zinc-200 hover:bg-green-100 mt rounded-md text-white"
                        type="submit">Submit
                </button>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" accept="image/png, image/jpeg">
                </div>
                <div>
                    <label>Pdf</label>
                    <input type="file" name="pdf" accept="application/pdf">
                </div>
            </div>
        </form>
    </main>

@endsection
