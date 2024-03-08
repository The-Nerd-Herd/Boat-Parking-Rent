@extends('emails.email-layout')
@section("email-content")
                <h1 class="text-3xl lg:text-5xl mt-2">Buyer found !</h1>
                <div class="mt-2 justify-center">

                    <p class=" leading-loose text-gray-600 dark:text-gray-300 lg:text-xl">
                        <!--//$data["surname"]}}-->Someone wants to rent your parking space.
                    </p>
                <h2 class="text-xl bold mt-5"> Information <about></about> potential buyer</h2>
                    <ul class="mt-5">
                        <div class="mt-2 leading-loose text-gray-600 dark:text-gray-300 text-wrap">
                            <b><!--//$data["phone"]}}</b>--> Name:</b> S. Potocnak
                        </div>
                        <div class="mt-2 leading-loose text-gray-600 dark:text-gray-300 text-wrap">
                            <b><!--//$data["phone"]}}</b>--> Phone number:</b> +421 000 000 000
                        </div>
                        <div class="mt-2  leading-loose text-gray-600 dark:text-gray-300 text-wrap">
                            <b><!--//$data["phone"]}}</b>--> Email: </b><a class="underline" href="https://mail.google.com/mail/u/0/#inbox?compose=new">simon.potocnak@gmail.com</a>
                        </div>
                    </ul>
                    <p class="mt-8 text-gray-600 dark:text-gray-300">
                        Please contact the buyer with above mentioned information ! <br>
                        <!--$data["surname"]}}-->
                    </p>
                </div>
@endsection
