@extends('layouts/layout')

@section('js')
    @vite('resources/js/create.js')
@endsection

@section('content')
    <script>
        let navBar = document.getElementById('header');
        navBar.className = 'reveal'
    </script>

    <style>
        input::file-selector-button {
            background: black;
            color: white;
            padding-bottom: 7px;
            padding-top: 7px;
        }
    </style>

    <main class="bg-zinc-100">
        <div class="px-[10rem] pt-[3rem]">
            <h1 class="text-[4rem] text-center">Create listing</h1>
            <form method="POST" action="{{route('parkingSpace.store')}}"
                  class=" rounded-md shadow-xl p-4 bg-white"
                  enctype="multipart/form-data">
                @csrf
                <div class=" w-full">
                    <div class="w-[80%]  mx-auto py-5">
                        <label for="title" value="text">Name of the post</label>
                        <input
                            class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                            type="text" name="title" required="required" autofocus="autofocus"
                            autocomplete="text">
                    </div>

                    <div class="flex w-[80%] mx-auto gap-4 py-5">
                        <div class="w-[40%] ">
                            <label for="street" value="text">City</label>
                            <input
                                class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                                type="text" name="city" required="required" autofocus="autofocus"
                                autocomplete="text">
                        </div>

                        <div class="w-[50%]">
                            <label for="street" value="text">Street</label>
                            <input
                                class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                                type="text" name="street" required="required" autofocus="autofocus"
                                autocomplete="text">
                        </div>

                        <div class="w-[15%] ">
                            <label class="" for="street" value="text">Street number</label>
                            <input
                                class="border-gray-300  bg-gray-100 text-black focus:border-black  focus:ring-black rounded-sm shadow-sm w-full"
                                type="number" name="streetNumber" required="required" autofocus="autofocus"
                                autocomplete="text">
                        </div>
                    </div>

                    <?php
                    function generateFeeInputGroup($label, $name, $priceName = false)
                    {
                        $html = '<div class="w-[80%] mx-auto">';
                        $html .= '<div class="flex justify-between">';
                        $html .= '<label for="' . $name . '" value="text">' . $label . '</label>';
                        $html .= '</div>';
                        $html .= '<div>';
                        $html .= '<div class="flex gap-4">';
                        $html .= '<input class="border-gray-300 bg-gray-100 text-black focus:border-black focus:ring-black rounded-sm shadow-sm" type="text" name="' . $name . '" required="required" autofocus="autofocus" autocomplete="text">';
                        if ($priceName) $html .= '<input class="border-gray-300 bg-gray-100 text-black focus:border-black focus:ring-black rounded-sm shadow-sm" type="text" name="' . $priceName . '" required="required" autofocus="autofocus" autocomplete="text">';
                        $html .= '<div id="' . $name . '" class="bg-gray-800 mb-4 text-white w-[4%] mt-2 flex items-center justify-center">';
                        $html .= '<p class="text-center">+</p>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';

                        return $html;
                    }


                    echo generateFeeInputGroup('Yearly fee (optional)', 'year', 'yearPrice');
                    echo generateFeeInputGroup('Monthly fee (optional)', 'month', 'monthPrice',);
                    echo generateFeeInputGroup('Daily fee', 'day', 'dayPrice');
                    echo generateFeeInputGroup('Special requirements (optional)', 'special', 'specialPrice');
                    echo generateFeeInputGroup('Additional (optional)', 'additional')
                    ?>
                </div>

                <div class="hidden">
                    <input id="yearCount" type="text" name="yearCount">
                    <input id="monthCount" type="text" name="monthCount">
                    <input id="dayCount" type="text" name="dayCount">
                    <input id="specialCount" type="text" name="specialCount">
                    <input id="additionalCount" type="text" name="additionalCount">
                </div>
                <div class="mt-2 flex justify-center">

                    <div>
                        <label>Image</label>
                        <input type="file" name="image" accept="image/png, image/jpeg">
                    </div>
                    <div>
                        <label>Pdf</label>
                        <input type="file" name="pdf" accept="application/pdf">
                    </div>
                </div>

                <div class="flex items-center justify-center py-4">
                    <button class="w-1/4 bg-zinc-200 hover:bg-green-100 rounded-md text-white" type="submit">Submit</button>
                </div>

            </form>
        </div>
    </main>

@endsection
