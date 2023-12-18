<section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
    <header>
        <a href="#">
            <img class="w-auto h-7 sm:h-8" src="https://merakiui.com/images/full-logo.svg" alt="">
        </a>
    </header>

    <main class="mt-8">
        <h2 class="text-gray-700 dark:text-gray-200">Hi,</h2>

        <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
            {{$data["surname"]}} Wants to rent your parking space.
        </p>

        <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
            Please call me on this phone number <b>{{$data["phone"]}}</b>
        </p>

        <p class="mt-8 text-gray-600 dark:text-gray-300">
            Thanks, <br>
            {{$data["surname"]}}
        </p>
    </main>
</section>
