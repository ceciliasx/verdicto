<section>
    <header>
        <h2 class="text-lg font-medium text-customWhite">
            {{ __('Informasi Pengacara') }}
        </h2>

        <p class="mt-1 text-sm text-customWhite">
            {{ __("Perbarui informasi akun pengacara Anda.") }}
        </p>
    </header>

    <form action="{{ route('lawyer.update') }}" method="POST" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('PUT')
        <div>
            <x-input-label for="license" :value="__('Lisensi (PDF)')" />
            <x-text-input id="license" name="license" type="file" accept=".pdf" class="mt-1 block w-full" :value="old('license', $user->license)"/>
            <x-input-error class="mt-2" :messages="$errors->get('license')" />
        </div>
        <div>
            <x-input-label for="portfolio" :value="__('Portofolio (PDF/DOC/DOCX)')" />
            <x-text-input id="portfolio" name="portfolio" type="file" accept=".pdf,.doc,.docx" class="mt-1 block w-full" :value="old('portfolio', $user->portfolio)"/>
            <x-input-error class="mt-2" :messages="$errors->get('portfolio')" />
        </div>
        <div>
            <x-input-label for="education" :value="__('Riwayat Pendidikan')" />
            <textarea name="education" id="education" rows="3" class="mt-1 block w-full border-customWhite bg-customWhite text-customFont focus:border-customBlue focus:ring-customBlue rounded-md shadow-sm">{{ old('education', $user->education) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('education')" />
        </div>
        <div>
            <x-input-label for="domicile" :value="__('Domisili')" />
            <x-text-input id="domicile" name="domicile" class="mt-1 block w-full" :value="old('domicile', $user->domicile)"/>
            <x-input-error class="mt-2" :messages="$errors->get('domicile')" />
        </div>
        <div>
            <x-input-label for="schedule" :value="__('Jadwal')" />
            <textarea name="schedule" id="schedule" rows="3" class="mt-1 block w-full border-customWhite bg-customWhite text-customFont focus:border-customBlue focus:ring-customBlue rounded-md shadow-sm">{{ old('schedule', $user->schedule) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('schedule')" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>
            
            @if (session('success'))
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >
                    {{ session('success') }}
                </p>
            @endif

        </div>
    </form>
</section>