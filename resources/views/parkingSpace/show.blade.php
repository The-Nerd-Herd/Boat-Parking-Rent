@extends('layouts/layout')

@section('content')
<main class="flex flex-col items items-center bg-red-200 p-6 gap-6 self-center">
    <section class="flex lg:flex-row flex-col items-center w-full h-2/4 gap-6">
        <div class="h-2/4 w-2/4 mt-10 ml-10">
            <img src="images/banner1.jpg" alt="image" class="rounded-lg"/>

        </div>
        <div class="flex flex-col">
            <h1>Rent parking space of 100m in Vlissingen</h1>
            <p>Name of the street</p>
        </div>
    </section>
    <section class="w-full p-8">
        The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.
        The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.
    </section>
    <section class="w-full p-8 ">
        <h1>Parking rules</h1>
        <div class="grid grid-cols-5 gap-4">
            <div class="bg-red-100 p-6">1</div>
            <div class="bg-red-100 p-6">1</div>
            <div class="bg-red-100 p-6">1</div>
            <div class="bg-red-100 p-6">1</div>
            <div class="bg-red-100 p-6">1</div>
            <div class="bg-red-100 p-6">1</div>
            <div class="bg-red-100 p-6">1</div>
            <div class="bg-red-100 p-6">1</div>
            <div class="bg-red-100 p-6">1</div>
            <div class="bg-red-100 p-6">1</div>
        </div>
    </section>
</main>
@endsection
