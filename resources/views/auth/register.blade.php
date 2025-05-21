<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        {{-- <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone Number')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div> --}}

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
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        {{-- <!-- Gender -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <div class="flex gap-4 mt-1">
                <label class="inline-flex items-center text-customWhite">
                    <input type="radio" name="gender" value="male" class="text-customYellow focus:ring-indigo-500" {{ old('gender', $user->gender) == 'male' ? 'checked' : '' }} required>
                    <span class="ml-2">Male</span>
                </label>
                <label class="inline-flex items-center text-customWhite">
                    <input type="radio" name="gender" value="female" class="text-customYellow focus:ring-indigo-500" {{ old('gender', $user->gender) == 'female' ? 'checked' : '' }} required>
                    <span class="ml-2">Female</span>
                </label>
                <label class="inline-flex items-center text-customWhite">
                    <input type="radio" name="gender" value="other" class="text-customYellow focus:ring-indigo-500" {{ old('gender', $user->gender) == 'other' ? 'checked' : '' }} required>
                    <span class="ml-2">Other</span>
                </label>
            </div>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Terms Checkbox -->
        <div class="mt-4">
            <label class="inline-flex items-start">
                <input type="checkbox" name="terms" class="rounded mt-1 text-customYellow focus:ring-indigo-500" {{ old('terms') ? 'checked' : '' }} required>
                <span class="ml-2 text-sm text-customWhite">
                    {{ __('I understand and accept the') }} 
                    <a href="#" class="underline hover:text-customYellow">{{ __('terms and conditions') }}</a>.
                </span>
            </label>
            <x-input-error :messages="$errors->get('terms')" class="mt-2" />
        </div> --}}

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-customWhite hover:text-customYellow rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
