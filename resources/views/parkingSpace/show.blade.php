@extends('layouts/layout')

@section('content')
<main class="flex flex-col items items-center bg-red-200 p-6 gap-6">
    <section class="flex lg:flex-row flex-col w-full gap-8 mt-5 p-8">
        <div class="lg:w-2/4 flex items-center">
            <img src="images/banner1.jpg" alt="image" class=" rounded-lg"/>
        </div>
        <div class="flex flex-col">
            <h1 class="text-4xl">Rent parking space of 100m in Vlissingen</h1>
            <p class="text-xl">Name of the street</p>
            <div class="bg-red-800 h-full">
                lol
            </div>
        </div>
    </section>
    <section class="w-full p-8">
        The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.
        The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.
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
