@extends('layouts/layout')

<style>
    td{
        padding-top: 17px;
    }
</style>

@section('content')
    <script>
        let navBar = document.getElementById('header');
        navBar.className = 'reveal'
    </script>
    <main class="flex flex-col items items-center bg-zinc-100 gap-6">
        <section class="flex lg:flex-row flex-col items-start w-full gap-8 mt-[50px] p-8">
            <article class="flex p-8 bg-white shadow-xl rounded-md lg:w-[1400px] lg:h-[600px]">
                <img class="object-scale-down" src="images/ricardo.jpg" alt="image"/>
            </article>

            <div class="flex flex-col lg:h-[600px] lg:w-[1000px] justify-between">
                <h1 class="text-4xl">Parkeerplaats huren in Neeltje Jans</h1>
                <p class="text-xl">Straatnaam</p>

                <!--Price info-->
                <div class="bg-white w-full p-10 flex flex-col text-center rounded-md gap-5 lg:overflow-y-auto lg:h-[500px] shadow-xl">
                    <!--Boat length annual rate-->

                    <h1 class="text-xl font-semibold">Jaartarief</h1>
                    <table >
                        <tbody class="text-gray-400 lg:text-base text-sm ">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Eerste 7 meters</td>
                            <td class="bg-white text-right ">150 € / meter</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Volgende 5 meters (tot 12 meters)</td>
                            <td class="bg-white text-right">100 € per meter</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Elke meter boven de 12 (tot 18 meters)</td>
                            <td class="bg-white text-right">80 € per meter</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Ligplaats buiten ponton van langssteiger 10% opslag over totaal</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Monthly-->
                    <h1 class="text-xl font-semibold">Maandtarief</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Maandtarief </td>
                            <td class="bg-white text-right">Jaartarief / 10</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Daily rates-->
                    <h1 class="text-xl font-semibold">Dagtarief </h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Dagtarief</td>
                            <td class="bg-white text-right">1.5 € per meter</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Special req.-->
                    <h1 class="text-xl font-semibold">Speciale vereisten</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Lengte langer dan 18 meter</td>
                            <td class="bg-white text-right">Prijs op aanvraag</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Breedte Groter dan 5 meter</td>
                            <td class="bg-white text-right">prijs op aanvraag</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Additional req.-->
                    <h1 class="text-xl font-semibold">Aanvullende vereisten</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Prijzen zijn inclusief BTW</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Aan dit overzicht kunnen geen rechten worden ontleend</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Voor een ligplaatsaanvraag neemt u contact op met Hoop Maritiem BV</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">
                                Houd er rekening mee dat deze tarieven onderhevig zijn aan wijzigingen
                                Het is raadzaam om direct contact op te nemen met Hoop Maritiem BV voor de meest actuele prijzen en beschikbaarheid
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </section>

        <!--Contact info-->
        <form method="POST" action="{{route('email.send')}}" class="mx-10 lg:w-2/4 flex flex-col gap-6 p-4 bg-white">
            @csrf
            <h1>Contact the seller</h1>
            <div class="flex flex-col lg:flex-row gap-6 w-full">
                <div class="w-full lg:w-1/2">
                    <label for="email" value="email">Email</label>
                    <input  class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 " id="email" type="email" name="email" required="required" autofocus="autofocus" autocomplete="email">
                </div>

                <div class="w-full lg:w-1/2">
                    <label for="phone" >Phone</label>
                    <input  class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 " id="phone" type="text"  name="phone" required="required" autofocus="autofocus" autocomplete="phone">
                </div>
            </div>

            <div class="flex flex-row justify-between gap-6 ">
                <div>
                    <label for="initials" >Initial</label>
                    <input  class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 " id="initials" type="text" name="initials" maxlength="1"  autofocus="autofocus" autocomplete="name">
                </div>

                <div class="w-3/4">
                    <label for="surname" >Surname</label>
                    <input  class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" id="surname" type="text" name="surname" required="required" autofocus="autofocus" autocomplete="name">
                </div>
            </div>
            <button class="lg:w-1/4 self-end bg-zinc-200 hover:bg-green-100 rounded-md text-white" type="submit">Submit</button>
        </form>
    </main>
@endsection
