@extends('layouts/layout')

<style>
    td {
        padding-top: 17px;
    }
</style>

<script>
    window.addEventListener('load', function () {
        const houseRule = document.getElementById('houseRuleHead');
        const toggleBtnEl = document.getElementById('toggle-btn');
        const moreTextEl = document.getElementById('more-text');
        const hideBtnEl = document.getElementById('hide-btn');
        const contactPDF = document.getElementById('contactPDF');
        const contactForm = document.getElementById('contactForm');

        toggleBtnEl.addEventListener('click', () => {
            moreTextEl.classList.toggle('hidden');
            toggleBtnEl.classList.toggle('hidden');
            hideBtnEl.classList.toggle('hidden');
            contactPDF.classList.replace('lg:grid-cols-2', 'lg:grid-cols-1');
            contactForm.classList.replace('lg:w-full', 'lg:w-[45rem]');
            houseRule.className = 'align-center text-black font-bold';
        });

        hideBtnEl.addEventListener('click', () => {
            moreTextEl.classList.toggle('hidden');
            toggleBtnEl.classList.toggle('hidden');
            hideBtnEl.classList.toggle('hidden');
            contactPDF.classList.replace('lg:grid-cols-1', 'lg:grid-cols-2');
            contactForm.classList.replace('lg:w-[45rem]', 'lg:w-full');
            houseRule.className = 'align-center text-black font-bold bg-gradient-to-b from-black to-transparent text-transparent bg-clip-text';
        });
    });

    function updateContentEditableAttribute() {
        // Select the Quill editor element by its class
        var quillEditor = document.querySelector('.ql-editor');

        // Check if the Quill editor element is present
        if (quillEditor) {
            // Set the contenteditable attribute to 'false'
            quillEditor.setAttribute('contenteditable', 'false');

            console.log('Quill editor contenteditable attribute set to false.');

            // Remove the .ql-clipboard div
            var qlClipboard = document.querySelector('.ql-clipboard');
            if (qlClipboard) {
                qlClipboard.parentNode.removeChild(qlClipboard);
                console.log('.ql-clipboard div is deleted.');
            } else {
                console.log('.ql-clipboard div not found.');
            }
        } else {
            console.log('Quill editor element not found.');
        }
    }

    // Example of how to use the function
    document.addEventListener("DOMContentLoaded", function() {
        // Wait for the DOM to be ready
        updateContentEditableAttribute();
    });
</script>


@section('content')
    <main class="flex flex-col items items-center bg-zinc-100 gap-6">
        <section class="flex lg:flex-row flex-col items-start w-full gap-8 mt-[50px] px-8 pt-8 pb-3">
            <article class="flex lg:p-8 p-3 bg-white shadow-xl rounded-md lg:w-[1400px] lg:h-[600px]">
                <img class="object-scale-down rounded-md mx-auto" src="/storage/{{$parkingSpace->picture}}" alt="image"/>
            </article>

            <div class="flex flex-col lg:h-[600px] lg:w-[1000px] justify-between">
                <h1 class="text-4xl">Parkeerplaats huren in {{$parkingSpace->city}}</h1>
                <p class="text-xl lg:pb-0 pb-4">{{$parkingSpace->street}} {{$parkingSpace->number}}</p>

                <!--Price info-->
                <div
                    class="bg-white w-full p-10 flex flex-col text-center rounded-md gap-5 lg:overflow-y-auto lg:h-[500px] shadow-xl">
                    <!--Boat length annual rate-->

                    @php
                        function renderFees($fees, $title) {
                            if ($fees->count() <=0 ) return;
                                echo "<h1 class='text-xl font-semibold'>$title</h1>";
                                echo "<table>";
                                echo "<tbody class='text-gray-400 text-sm lg:text-base'>";
                                foreach ($fees as $fee) {
                                    echo "<tr class='border-b-2 border-t-0'>";
                                    echo "<td class='bg-white text-left'>$fee->text</td>";
                                    if ($fee->price !== null) {
                                        echo "<td class='bg-white text-right'>$fee->price</td>";
                                    }
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                        }
                    @endphp

                        <!-- Yearly -->
                    @php renderFees($parkingSpace->yearly, 'Jaartarief'); @endphp

                        <!-- Monthly -->
                    @php renderFees($parkingSpace->monthly, 'Maandtarief'); @endphp

                        <!-- Daily rates -->
                    @php renderFees($parkingSpace->daily, 'Dagtarief'); @endphp

                        <!-- Special requirements -->
                    @php renderFees($parkingSpace->special, 'Speciale vereisten'); @endphp

                        <!-- Additional requirements -->
                    @php renderFees($parkingSpace->additional, 'Aanvullende vereisten'); @endphp

                </div>
            </div>
        </section>

        <div id="contactPDF" class="grid lg:grid-cols-2 grid-cols-1 w-full px-8 pb-8 gap-8 place-items-center">
        {{--        House rules       --}}
        <section class="w-full">
            <div id="accordion-collapse" data-accordion="collapse"
                 class="bg-white rounded-xl shadow-xl pb-0 lg:pt-[4rem] pt-5 items-center wrapper break-words h-full">
                @if(!empty($parkingSpace->pdf_path))
                    <a class="button alt lg:z-10 lg:absolute lg:right-5 lg:top-5 lg:w-1/4 w-[16.95rem] lg:m-0 ml-[1.25rem] mb-7" href="/storage/{{$parkingSpace->pdf_path}}" target="_blank">PDF - Reglement</a>
                @endif
                <h2 id="accordion-collapse-heading-1" class="lg:px-0 px-5">
                    <div class="align-center">
                        <strong class="text-black font-bold">Havenreglement</strong>
                    </div>
                    <div id="houseRuleHead"
                         class="align-center text-center text-black font-bold bg-gradient-to-b from-black to-transparent text-transparent bg-clip-text">
                        <!-- Title -->
                        <h1 class="align-center text-black font-bold">Noordlandhaven binnen/{{$parkingSpace->city}}</h1>
                        <br>
                        <p>Dit Reglement geldt in de haven van:</p>
                        <p>“{{$parkingSpace->street}}”</p>
                        {{--                        turning date from database into d-m-y date format--}}
                        <p>Datum: {{date('d-m-y',strtotime($parkingSpace->created_at))}}</p>
                        <button id="toggle-btn"
                                class="alt button mt-[2.2rem]">Lees Meer
                        </button>
                    </div>
                    <br>
                </h2>
                    <div class="hidden" id="more-text">
                        <div class="p-10">
                        {!! $parkingSpace->rules !!}
                        </div>
                    </div>

                <div class="flex flex-col items-center lg:px-0 px-5">
                <button id="hide-btn" class="hidden alt button my-4">Verbergen</button>
                </div>
            </div>
        </section>
            <!--Contact info-->
            <form method="POST" action="{{route('email.send')}}"
                  class="rounded-md shadow-xl lg:w-full w-full flex flex-col bg-white h-full mb-0 p-5 gap-3" id="contactForm">
                <h1 class="text-xl">Contact the seller</h1>
                @csrf
                <div class="flex flex-col lg:flex-row gap-6 w-full">
                    <div class="w-full lg:w-1/2">
                        <label for="email" value="email">Email</label>
                        <input
                            class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 "
                            id="email" type="email" name="email" required="required" autofocus="autofocus"
                            autocomplete="email">
                    </div>

                    <div class="w-full lg:w-1/2">
                        <label for="phone">Phone</label>
                        <input
                            class="border-gray-300 bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 "
                            id="phone" type="text" name="phone" required="required" autofocus="autofocus"
                            autocomplete="phone">
                    </div>
                </div>

                <div class="flex flex-row justify-between gap-6 ">
                    <div>
                        <label for="initials">Initial</label>
                        <input
                            class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 "
                            id="initials" type="text" name="initials" maxlength="1" autofocus="autofocus"
                            autocomplete="name">
                    </div>

                    <div class="w-3/4">
                        <label for="surname">Surname</label>
                        <input
                            class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full"
                            id="surname" type="text" name="surname" required="required" autofocus="autofocus"
                            autocomplete="name">
                    </div>
                </div>
                <button class="lg:w-1/4 w-full button alt self-end lg:mt-0 mt-4" type="submit">
                    Submit
                </button>
            </form>
        </div>
    </main>
@endsection
