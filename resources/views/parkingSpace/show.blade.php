@extends('layouts/layout')

<style>
    td{
        padding-top: 17px;
    }
    tr {

    }
</style>

@section('content')
    <main class="flex flex-col items items-center bg-zinc-100 gap-6">
        <section class="flex lg:flex-row flex-col items-start b w-full gap-8 mt-[50px] p-8">
            <article class="flex">
                <img class="shadow-xl" src="images/banner1.jpg" alt="image"/>
            </article>

            <!--Price info-->
            <div class="flex flex-col">
                <h1 class="text-4xl">Rent parking space of 100m in Vlissingen</h1>
                <p class="text-xl">Name of the street</p>
                <div class="bg-white w-full p-2 flex flex-col text-center rounded-md gap-5  shadow-xl">
                    <!--Boat length annual rate-->

                    <h1 class="text-xl">Boat length annual rate</h1>
                    <table >
                        <tbody class="text-gray-400 lg:text-base text-sm ">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">First 7 meters</td>
                            <td class="bg-white text-right ">150 € / meter</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Next 5 meters (up to 12 meters)</td>
                            <td class="bg-white text-right">100 € per meter</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Every meter above 12 (up to 18 meters)</td>
                            <td class="bg-white text-right">80 € per meter</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Mooring outside pontoon or longitudinal jetty 10% surcharge
                                on total
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Monthly-->
                    <h1 class="text-xl">Monthly rate</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Monthly rate</td>
                            <td class="bg-white text-right">Annual rate / 10</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Daily rates-->
                    <h1 class="text-xl">Daily rate</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Daily rate</td>
                            <td class="bg-white text-right">1.5 €</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Special req.-->
                    <h1 class="text-xl">Special requirements</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Length above 18 meters</td>
                            <td class="bg-white text-right">Price on request</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Width above 5 meters</td>
                            <td class="bg-white text-right">Price on request</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Additional req.-->
                    <h1 class="text-xl">Additional requirements</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Prices include VAT</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">No rights can be derived from this overview</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">For berth request, please contact Hoop Maritiem BV</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Please note that these rates are subject to change, it's
                                advisable to contact Hoop Maritiem BV directly for the most up-to-date pricing and
                                availability
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </section>

        <!--Contact info-->
        <section class="w-full p-8 ">
            <h1 class="text-2xl">Contact info</h1>
            <h2 class="text-xl">e-mail</h2>
            <p class="text-lg">ricardobeuken@hotmail.com</p>
        </section>
        <section class="w-full p-8 ">
            <h1>Parking rules</h1>
            <div class="grid grid-cols-5 gap-4">
                @for( $i = 0; $i < 10; $i++)
                    <div class="bg-red-100 p-6 rounded-md text-center">1</div>
                @endfor
            </div>
        </section>
    </main>
@endsection
