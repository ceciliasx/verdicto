<section>
    <header>
        <h2 class="text-lg font-medium text-customWhite">
            {{ __('Foto Profil') }}
        </h2>

        <p class="mt-1 text-sm text-customWhite">
            {{ __("Perbarui foto profil akun Anda.") }}
        </p>
    </header>

    @php
        $user = Auth::user();
        $photoUrl = $user->photo_path
            ? asset('storage/' . $user->photo_path)
            : asset('storage/profile-pictures/default-profile.png');
    @endphp
    
    {{-- Flash message --}}
    @if (session('status'))
        <div class="mt-4 text-green-600 text-sm">
            {{ session('status') }}
        </div>
    @endif
    
    {{-- Display current profile picture --}}
    <div class="mt-4">
        <label class="block font-medium text-sm text-customWhite">Foto Profil Saat Ini</label>
        <img src="{{ $photoUrl }}?t={{ time() }}" alt="Foto Profil"
             class="mt-2 rounded-full w-24 h-24 object-cover border border-gray-300">
    </div>
    
    {{-- Live preview before upload --}}
    <img id="preview" class="mt-4 rounded-full w-24 h-24 object-cover border border-dashed border-gray-400 hidden" />


    {{-- Upload form --}}
    <form method="POST" action="{{ route('profile.picture.update') }}" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PATCH')
    
        <div>
            <label for="photo" class="block font-medium text-sm text-customWhite">Unggah Foto Baru</label>
            <div class="mt-4">
                <label for="photo"
                    class="cursor-pointer inline-flex items-center px-4 py-2 bg-customWhite border border-transparent rounded-md font-semibold text-xs text-customFont hover:text-customWhite uppercase tracking-widest hover:bg-customYellow focus:bg-customWhite active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-120">
                    Pilih Foto
                </label>

                <input id="photo" type="file" name="photo" accept="image/*" class="hidden">

                @error('photo')
                    <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="mt-4 flex items-center gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>
    
            {{-- Delete button --}}
            @if ($user->photo_path)
                <form method="POST" action="{{ route('profile.picture.delete') }}"
                      onsubmit="return confirm('Yakin ingin menghapus foto profil?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-sm text-red-600 hover:underline">
                        Hapus Foto
                    </button>
                </form>
            @endif
        </div>
    </form>
    
    {{-- JS: Preview selected image before upload --}}
    <script>
        document.getElementById('photo').addEventListener('change', function (event) {
            const preview = document.getElementById('preview');
            const file = event.target.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
            }
        });
    </script>
</section>