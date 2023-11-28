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
        toggleBtnEl.addEventListener('click', () => {
            moreTextEl.classList.toggle('hidden');
            toggleBtnEl.classList.toggle('hidden');
            hideBtnEl.classList.toggle('hidden');
            houseRule.className = 'align-center text-black font-bold';
        });

        hideBtnEl.addEventListener('click', () => {
            moreTextEl.classList.toggle('hidden');
            toggleBtnEl.classList.toggle('hidden');
            hideBtnEl.classList.toggle('hidden');
            houseRule.className = 'align-center text-black font-bold bg-gradient-to-b from-black to-transparent text-transparent bg-clip-text';
        });
    });
</script>


@section('content')
    <script>
        let navBar = document.getElementById('header');
        navBar.className = 'reveal'
    </script>
    <main class="flex flex-col items items-center bg-zinc-100 gap-6">
        <section class="flex lg:flex-row flex-col items-start w-full gap-8 mt-[50px] p-8">
            <article class="flex p-8 bg-white shadow-xl rounded-md lg:w-[1400px] lg:h-[600px]">
                <img class="object-scale-down" src="{{$parkingSpace->picture}}" alt="image"/>
            </article>

            <div class="flex flex-col lg:h-[600px] lg:w-[1000px] justify-between">
                <h1 class="text-4xl">Parkeerplaats huren in {{$parkingSpace->city}}</h1>
                <p class="text-xl">{{$parkingSpace->street}} {{$parkingSpace->number}}</p>

                <!--Price info-->
                <div
                    class="bg-white w-full p-10 flex flex-col text-center rounded-md gap-5 lg:overflow-y-auto lg:h-[500px] shadow-xl">
                    <!--Boat length annual rate-->

                    <h1 class="text-xl font-semibold">Jaartarief</h1>
                    <table>
                        <tbody class="text-gray-400 lg:text-base text-sm ">
                        @foreach($parkingSpace->yearlyFees as $yearlyFees)
                            <tr class="border-b-2 border-t-0">
                                <td class="bg-white text-left">{{$yearlyFees->length}} meters</td>
                                <td class="bg-white text-right ">{{$yearlyFees->amount}} € / meter</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!--Monthly-->
                    <h1 class="text-xl font-semibold">Maandtarief</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Maandtarief</td>
                            <td class="bg-white text-right">Jaartarief / 10
                                €({{$parkingSpace->yearlyFees[0]->amount / 10}})
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Daily rates-->
                    <h1 class="text-xl font-semibold">Dagtarief </h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Dagtarief</td>
                            <td class="bg-white text-right">{{$parkingSpace->dailyTariff}} € per meter</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Special req.-->
                    <h1 class="text-xl font-semibold">Speciale vereisten</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        @foreach($parkingSpace->specialRequirements as $requirement)
                            <tr class="border-b-2 border-t-0">
                                <td class="bg-white text-left">{{$requirement->requirement}}</td>
                                <td class="bg-white text-right">{{$requirement->price}} €</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!--Additional req.-->
                    <h1 class="text-xl font-semibold">Aanvullende vereisten</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        @foreach($parkingSpace->additionalInformation as $information)
                            <tr class="border-b-2 border-t-0">
                                <td class="bg-white text-left">{{$information->information}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </section>

        <!--Contact info-->
        <form method="POST" action="{{route('email.send')}}"
              class="mx-10 rounded-md shadow-xl lg:w-2/4 flex flex-col gap-6 p-4 bg-white">
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
                        class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 "
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
            <button class="lg:w-1/4 w-full self-end bg-zinc-200 hover:bg-green-100 rounded-md text-white" type="submit">
                Submit
            </button>
        </form>

        {{--        House rules       --}}
        <section class=" w-full p-20">
            <div id="accordion-collapse" data-accordion="collapse"
                 class="bg-white rounded-xl shadow-xl pt-7 flex flex-col items-center">

                <h2 id="accordion-collapse-heading-1">
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
                                class="mt-4 bg-black hover:bg-gray-400 text-white py-2 px-4 rounded-full">Read More
                        </button>
                    </div>
                    <br>
                    <span class="hidden" id="more-text">
                    <div class="px-12">
                        @foreach($parkingSpace->houseRules as $articles)
                        <h3><strong class="text-black font-medium">{{$articles->title}}</strong></h3>
                        <br>
                            <ol class="text-black pl-4">
                        @foreach($articles->bulletPoints as $bulletpoints)
                            <li>{{$bulletpoints->text}}</li>
                        @endforeach
                            <br>
                        </ol>
                        @endforeach
                    </div>
                    </span>
                </h2>

                <button id="hide-btn" class="hidden mt-4 text-blue-500 focus:outline-none">Hide</button>
            </div>
        </section>
    </main>
@endsection
