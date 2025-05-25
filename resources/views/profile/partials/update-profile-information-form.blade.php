<section>
    <header>
        <h2 class="text-lg font-medium text-customWhite">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-customWhite">
            {{ __("Update your account's profile information.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                            {{ __('Your email address is unverified.') }}
                            
                            <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>
                        
                        @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                        @endif
                    </div>
                @endif
        </div>

        <div>
            <x-input-label for="phone" :value="__('Phone Number')" />
            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)" required pattern="08[0-9]{8,13}" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>
        
        <div>
            <x-input-label for="gender" :value="__('Gender')" />

            <div class="flex items-center gap-4 mt-2">
                <label class="inline-flex items-center text-customWhite">
                    <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }} class="form-radio text-customYellow">
                    <span class="ml-2">Male</span>
                </label>

                <label class="inline-flex items-center text-customWhite">
                    <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }} class="form-radio text-customYellow">
                    <span class="ml-2">Female</span>
                </label>

                <label class="inline-flex items-center text-customWhite">
                    <input type="radio" name="gender" value="others" {{ old('gender') == 'others' ? 'checked' : '' }} class="form-radio text-customYellow">
                    <span class="ml-2">Others</span>
                </label>
            </div>

            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="role" :value="__('Role')" />
            <select id="role" name="role" required class="mt-1 block w-full border-gray-300 group-hover:block:bg-customYellow rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 transition duration-120 ease-in-out">
                <option class="hover:bg-customYellow" value="">-- Select Role --</option>
                <option value="client" {{ old('role') == 'client' ? 'selected' : '' }}>Client</option>
                <option value="lawyer" {{ old('role') == 'lawyer' ? 'selected' : '' }}>Lawyer</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="city" :value="__('City')" />
            <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" :value="old('city', $user->city)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('city')" />
        </div>
                
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
            </div>
    </form>
</section>
