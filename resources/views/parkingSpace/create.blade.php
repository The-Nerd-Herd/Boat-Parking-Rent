@extends('layouts/layout')

@section('js')
    @vite('resources/js/create.js')
@endsection

@section('content')
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

    <style>
        input::file-selector-button {
            background: black;
            color: white;
            padding-bottom: 7px;
            padding-top: 7px;
        }
    </style>

    <main class="bg-zinc-100 pb-10">
        <div class="sm:px-[10rem] pt-[3rem]">
            <h1 class="sm:text-[4rem] text-[3rem] text-center">Maak een vermelding</h1>
            <form id="identifier" method="POST" action="{{route('parkingSpace.store')}}"
                  class=" rounded-md shadow-xl mx-6 sm:mx-0 sm:p-4 p-2 bg-white"
                  enctype="multipart/form-data">
                @csrf
                <div class=" w-full ">
                    <div class="w-[80%]  mx-auto py-5">
                        <label for="title" value="text">Naam van het bericht<span class="text-red-600">*</span></label>
                        <input
                            class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                            type="text" name="title" required="required" autofocus="autofocus"
                            value="{{old('title')}}"
                            autocomplete="text"
                        placeholder="">
                    </div>

                    <div class="flex w-[80%] mx-auto gap-4 py-5">
                        <div class="w-[40%] ">
                            <label for="street" value="text">Stad<span class="text-red-600">*</span></label>
                            <input
                                class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
          .)                      type="text" name="city" required="required" autofocus="autofocus"
                                value="{{old('city')}}"
                                autocomplete="text">
                        </div>

                        <div class="w-[50%]">
                            <label for="street" value="text">Straat <span class="text-red-600">*</span></label>
                            <input
                                class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                                type="text" name="street" required="required" autofocus="autofocus"
                                value="{{old('street')}}"
                                autocomplete="text">
                        </div>

                        <div class="w-[15%] ">
                            <label class="" for="street" value="text">Nummer</label>
                            <input
                                class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                                type="number" name="streetNumber" autofocus="autofocus"
                                value="{{old('streetNumber')}}"
                                autocomplete="text">
                        </div>
                    </div>

                    <?php
                    function generateFeeInputGroupCreate($label, $name, $priceName = false)
                    {
                        $html = '<div class="w-[80%] mx-auto">';
                        $html .= '<div class="flex justify-between">';
                        $html .= '<label for="' . $name . '" value="text">' . $label . '</label>';
                        $html .= '</div>';
                        $html .= '<div>';
                        $html .= '<div class="flex gap-4">';
                        $html .= '<input class="border-gray-300 bg-gray-100 text-black focus:border-black focus:ring-black rounded-sm shadow-sm" type="text" name="' . $name . '" placeholder="Eerste 15 meter"';
                        if ($name == "day") $html .= ' required="required"';
                        $html .= ' autofocus="autofocus" autocomplete="text">';
                        if ($priceName) {
                            $html .= '<input class="border-gray-300 bg-gray-100 text-black focus:border-black focus:ring-black rounded-sm shadow-sm" type="text" name="' . $priceName . '" placeholder="50 €" ';
                            if ($name == "day") $html .= ' required="required"';
                            $html .= ' autofocus="autofocus" autocomplete="text">';
                        }
                        $html .= '<div id="' . $name . '" class="bg-gray-800 mb-4 text-white h-[2rem] w-[5rem] mt-2 flex items-center justify-center">';
                        $html .= '<p class="text-center">+</p>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';

                        return $html;
                    }


                    echo generateFeeInputGroupCreate('Jaar Tarief', 'year', 'yearPrice');
                    echo generateFeeInputGroupCreate('Maand Tarief', 'month', 'monthPrice',);
                    echo generateFeeInputGroupCreate('Dag Tarief <span class="text-red-600">*</span>', 'day', 'dayPrice');
                    echo generateFeeInputGroupCreate('Speciale vereisten', 'special', 'specialPrice');
                    echo generateFeeInputGroupCreate('Aanvullende vereisten', 'additional')
                    ?>
                </div>
                <div class="mt-[3rem] flex flex-col sm:flex-row gap-5 justify-center">

                    <div>
                        <label for="image">Afbeelding</label>
                        <input type="file" name="image" accept="image/png, image/jpeg">
                    </div>
                    <div>
                        <label for="pdf">Pdf</label>
                        <input type="file" name="pdf" accept="application/pdf">
                    </div>
                </div>

                <!-- Quill rich text editor -->
                <div class="w-full flex flex-col">
                    <h2 class="text-xl items-center pb-5 mt-5">Schrijf je huisregels</h2>
                    <div id="toolbar">
                        <!-- Toolbar buttons will be added by Quill -->
                    </div>
                    <div id="editor" style="height: 400px;" ></div>
                </div>
                <textarea id="hiddenArea" name="houseRules" style="display:none" class="w-full flex flex-col items-center"></textarea>

                <div class="mt-[3rem] flex items-center justify-center py-4">
                    <button class="w-1/4 bg-zinc-200 hover:bg-green-100 rounded-md text-white" type="submit">Submit
                    </button>
                </div>
                <div class="hidden">
                    <input id="yearCount" type="text" name="yearCount">
                    <input id="monthCount" type="text" name="monthCount">
                    <input id="dayCount" type="text" name="dayCount">
                    <input id="specialCount" type="text" name="specialCount">
                    <input id="additionalCount" type="text" name="additionalCount">
                </div>
            </form>
        </div>
    </main>
@endsection
