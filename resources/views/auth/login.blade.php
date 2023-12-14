<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class=" text-center text-5xl my-7">Log in</h2>
        <!-- Email Address -->
        <div>

            <label for="email" value="email">Email</label>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">

            <label for="password" value="password">Password</label>
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-transparent border-gray-300 dark:border-gray-700 text-black shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 " href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>

            <div class="flex items-center">
                <a class="ml-3 underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 " href="{{ route('register') }}">
                    {{ __('Register Here') }}
                </a>

            </div>
        </div>
        <div class="flex flex-row items-center justify-center">
            <x-primary-button class="ml-3 text-2xl font-sans">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
