@vite('resources/css/app.css')

<section class="w-full h-full px-6 py-8 mx-auto bg-white dark:bg-gray-900">
    <main class="w-full h-full flex flex-col justify-center items-center">
        <div class="flex w-90% lg:w-1/2 bg-gray-100 flex-col items-center rounded-lg shadow-2xl lg:p-0">
            <header class="w-full flex flex-row justify-between items-center bg-black h-15">
                <div class="h-full">
                    <img src="/images/paper-boat.jpg" class="h-full z-99 scale-50" alt="boat">
                </div>
                <a class="text-gray-300 justify-between mr-2" href="https://ligplaatsenzeeland.nl/">
                    ligplaatsenzeeland.nl
                </a>
            </header>
            <div class="p-4">
                <h1 class="text-3xl lg:text-5xl mt-2">Buyer found !</h1>
                <div class="mt-2 justify-center">

                    <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300 lg:text-xl">
                        <!--//$data["surname"]}}-->Someone wants to rent your parking space.
                    </p>
                <h2 class="text-3xl bold mt-10"> Information about potential buyer</h2>
                    <ul class="mt-5">
                        <div class="mt-2 leading-loose text-gray-600 dark:text-gray-300 text-wrap">
                            <b><!--//$data["phone"]}}</b>--> Name:</b> S. Potocnak
                        </div>
                        <div class="mt-2 leading-loose text-gray-600 dark:text-gray-300 text-wrap">
                            <b><!--//$data["phone"]}}</b>--> Phone number:</b> +421 000 000 000
                        </div>
                        <div class="mt-2 leading-loose text-gray-600 dark:text-gray-300 text-wrap">
                            <b><!--//$data["phone"]}}</b>--> Email:</b> simon.potocnak@gmail.com
                        </div>
                    </ul>
                    <p class="mt-8 text-gray-600 dark:text-gray-300">
                        Please contact the seller with above mentioned information ! <br>
                        <!--$data["surname"]}}-->
                    </p>
                </div>
            </div>
            <footer class="w-full h-10 flex flex-col items-center bg-black h-15 mt-10">
                <p class="text-zinc-500 mt-2">Made with &#10084 by The Data Crusaders</p>
            </footer>
        </div>
    </main>
</section>
