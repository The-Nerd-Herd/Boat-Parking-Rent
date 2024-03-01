<section>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
            <div>
                <x-input-label for="current_password" :value="__('Huidig Wachtwoord')" />
                <x-text-input id="current_password" name="current_password" type="password" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')"/>
            </div>

            <div>
                <x-input-label for="password" :value="__('Nieuw Wachtwoord')" />
                <x-text-input id="password" name="password" type="password" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')"/>
            </div>

            <div>
                <x-input-label for="password_confirmation" :value="__('Bevestig Wachtwoord')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"/>
            </div>

            <div class="flex items-center gap-4 h-[30px]">
                <button class="button alt">{{ __('Opslaan') }}</button>

                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Opgeslagen.') }}</p>
                @endif
            </div>
    </form>
</section>
