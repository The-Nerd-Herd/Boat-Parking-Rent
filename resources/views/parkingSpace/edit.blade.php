@extends('layouts/layout')

@section('js')
    @vite('resources/js/edit.js')
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
        <div class="px-[10rem] pt-[3rem]">
            <h1 class="text-[4rem] text-center">Vermelding bewerken</h1>
            <form id="identifier" method="POST" action="{{route('parkingSpace.update',$parkingSpace)}}"
                  class=" rounded-md shadow-xl p-4 bg-white"
                  enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class=" w-full">
                    <div class="w-[80%]  mx-auto py-5">
                        <label for="title" value="text">Naam van het bericht<span class="text-red-600">*</span></label>
                        <input
                            class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                            type="text" name="title" required="required" autofocus="autofocus"
                            autocomplete="text" value="{{$parkingSpace->title}}">
                    </div>

                    <div class="flex w-[80%] mx-auto gap-4 py-5">
                        <div class="w-[40%] ">
                            <label for="street" value="text">Stad<span class="text-red-600">*</span></label>
                            <input
                                class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                                type="text" name="city" required="required" autofocus="autofocus"
                                autocomplete="text" value="{{$parkingSpace->city}}">
                        </div>

                        <div class="w-[50%]">
                            <label for="street" value="text">Straat<span class="text-red-600">*</span></label>
                            <input
                                class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                                type="text" name="street" required="required" autofocus="autofocus"
                                autocomplete="text" value="{{$parkingSpace->street}}">
                        </div>

                        <div class="w-[15%] ">
                            <label class="" for="street" value="text">Nummer (opt.)</label>
                            <input
                                class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                                type="number" name="streetNumber" autofocus="autofocus"
                                autocomplete="text" value="{{$parkingSpace->number}}">
                        </div>
                    </div>

                    <?php
                    function generateFeeInputGroup($label, $name, $value , $priceName = false)
                    {
                        $text ="";
                        $price ="";
                        if ($value->count() > 0){
                            $text= $value[0]->text;
                            $price= $value[0]->price;
                        }
                        $html = '<div class="w-[80%] mx-auto">';
                        $html .= '<div class="flex justify-between">';
                        $html .= '<label for="' . $name . '" value="text">' . $label . '</label>';
                        $html .= '</div>';
                        $html .= '<div>';
                        $html .= '<div class="flex gap-4">';
                        $html .= '<input class="border-gray-300 bg-gray-100 text-black focus:border-black focus:ring-black rounded-sm shadow-sm" type="text" name="' . $name . '"';
                        if ($name == "day") $html .= ' required="required"';
                        $html .= ' autofocus="autofocus" autocomplete="text"';
                        $html .= 'value="'. $text .'">';
                        if ($priceName) {
                            $html .= '<input class="border-gray-300 bg-gray-100 text-black focus:border-black focus:ring-black rounded-sm shadow-sm" type="text" name="' . $priceName . '"';
                            if ($name == "day") $html .= ' required="required"';
                            $html .= ' autofocus="autofocus" autocomplete="text" value="'. $price .'" >';
                        }
                        $html .= '<div id="' . $name . '" class="bg-gray-800 mb-4 text-white h-[2rem] w-[5rem] mt-2 flex items-center justify-center">';
                        $html .= '<p class="text-center">+</p>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';

                        return $html;
                    }

                    function generateFeeInputs( $name, $value , $priceName = false)
                    {
                        $html = "";
                        for($i=1; $i<$value->count();$i++){
                            $text=$value[$i]->text;
                            $price=$value[$i]->price;
                        $html .= '<div class="w-[80%] mx-auto">';
                        $html .= '<div>';
                        $html .= '<div class="flex gap-4">';
                        $html .= '<input class="border-gray-300 bg-gray-100 text-black focus:border-black focus:ring-black rounded-sm shadow-sm" type="text" name="' . $name . $i . '"';
                        if ($name == "day") $html .= ' required="required"';
                        $html .= ' autofocus="autofocus" autocomplete="text"';
                        $html .= 'value="'. $text .'">';
                        if ($priceName) {
                            $html .= '<input class="border-gray-300 bg-gray-100 text-black focus:border-black focus:ring-black rounded-sm shadow-sm" type="text" name="' . $priceName . $i . '"';
                            if ($name == "day") $html .= ' required="required"';
                            $html .= ' autofocus="autofocus" autocomplete="text" value="'. $price .'" >';
                        }
                        $html .= '<div id="' . $name.$i . 'Delete" class="bg-gray-800 mb-4 text-white h-[2rem] w-[5rem] mt-2 flex items-center justify-center">';
                        $html .= '<p class="text-center">-</p>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';

                        }
                        return $html;
                    }



                    echo generateFeeInputGroup('Jaar tarief (opt.)', 'year', $parkingSpace->yearly, 'yearPrice');
                    echo generateFeeInputs('year',$parkingSpace->yearly,'yearPrice');
                    echo generateFeeInputGroup('Maand tarief (opt.)', 'month',$parkingSpace->monthly, 'monthPrice');
                    echo generateFeeInputs('month',$parkingSpace->monthly,'monthPrice');
                    echo generateFeeInputGroup('Dag Tarief <span class="text-red-600">*</span>', 'day', $parkingSpace->daily, 'dayPrice');
                    echo generateFeeInputs('day',$parkingSpace->daily,'dayPrice');
                    echo generateFeeInputGroup('Speciale vereisten (opt.)', 'special', $parkingSpace->special, 'specialPrice');
                    echo generateFeeInputs('special',$parkingSpace->special,'specialPrice');
                    echo generateFeeInputGroup('Aanvullende vereisten (opt.)', 'additional', $parkingSpace->additional);
                    echo generateFeeInputs('additional',$parkingSpace->additional);
                    ?>
                </div>
                <div class="mt-[3rem] flex justify-center">

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
                    <h2 class="text-xl items-center pb-5">Schrijf je huisregels</h2>
                    <div id="toolbar">
                        <!-- Toolbar buttons will be added by Quill -->
                    </div>
                    <div id="editor" style="height: 400px;" >{!! $parkingSpace->rules !!}</div>
                </div>
                <textarea id="hiddenArea" name="houseRules" style="display:none" class="w-full flex flex-col items-center" ></textarea>

                <div class="mt-[3rem] flex items-center justify-center py-4">
                    <button class="w-1/4 bg-zinc-200 hover:bg-green-100 rounded-md text-white" type="submit">Submit
                    </button>
                </div>
                <div class="hidden">
                    <input id="yearCount" type="text" name="yearCount" value="{{$parkingSpace->yearly->count()}}">
                    <input id="monthCount" type="text" name="monthCount" value="{{$parkingSpace->monthly->count()}}">
                    <input id="dayCount" type="text" name="dayCount" value="{{$parkingSpace->daily->count()}}">
                    <input id="specialCount" type="text" name="specialCount" value="{{$parkingSpace->special->count()}}">
                    <input id="additionalCount" type="text" name="additionalCount" value="{{$parkingSpace->additional->count()}}">
                </div>
            </form>
        </div>
    </main>
@endsection
