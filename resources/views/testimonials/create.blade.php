<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-lg font-semibold text-customFont">Buat Testimoni</h2>

        @if (session('status'))
            <div class="text-green-600 mb-4">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('testimonials.store') }}">
            @csrf
            <div class="mb-4">
                <label for="content" class="block font-normal text-customFont">Apa kata Anda tentang Verdicto?</label>
                <textarea name="content" id="content" rows="4" class="text-gray-800 w-full border border-gray-300 rounded p-2 mt-1" required></textarea>
                @error('content')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <x-primary-button>{{ __('Kirim') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>