<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-customWhite leading-tight">
            {{ __('Sunting Data Pengacara') }}
        </h2>
    </x-slot>

    <div class="pt-0">
        <div class="max-w-7xl pb-6 mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-customFont shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('lawyeraccess.partials.update-license-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>