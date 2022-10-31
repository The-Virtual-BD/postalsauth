<x-app-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}" class="sm:w-4/5">
            @csrf
            <h1 class="font-semibold text-white text-center text-4xl mb-7">SIGN UP</h1>
            <!-- First Name -->
            <div>
                <x-input-label for="firstname" :value="__('First Name')" />

                <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div>
                <x-input-label for="lastname" :value="__('Last Name')" />

                <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required />

                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Phone Number -->
            <div>
                <x-input-label for="phone" :value="__('Phone Number')" />

                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />

                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- NIB Number -->
            <div>
                <x-input-label for="nib" :value="__('NIB Number')" />

                <x-text-input id="nib" class="block mt-1 w-full" type="text" name="nib" :value="old('nib')" required />

                <x-input-error :messages="$errors->get('nib')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Accept-->
            <div class="block mt-4">
                <label for="policy" class="inline-flex items-center">
                    <input id="policy" type="checkbox" class="rounded border-white text-blue shadow-sm" name="remember" required>
                    <span class="ml-2 text-sm text-white">{{ __('Accept Terms & Conditions') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:text-gray" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-secondary-button class="ml-4">
                    {{ __('Register') }}
                </x-secondary-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
