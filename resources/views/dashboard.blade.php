<x-app-layout>
    @section('styles')
        @vite('resources/css/lawyer_style.css')
    @endsection

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <x-search-box id="search" placeholder="Cari di sini..." />

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        {{-- 1. Lawyers Section --}}
        <section>
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-semibold text-2xl text-customWhite">Rekomendasi Pengacara</h2>
                <a href="{{ url('lawyers') }}" class="group inline-flex items-center text-customWhite hover:text-customYellow font-medium transition-colors duration-150 ease-in-out">
                    <span class="mr-1">Lihat Semua</span>
                    {{-- SVG Arrow Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-3.5 h-3.5 text-customWhite group-hover:fill-customYellow transition-colors duration-150 ease-in-out">
                        <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                    </svg>
                </a>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Lawyer Card 1 (Rani) --}}
                <div onclick="openModal(lawyers[0])" class="cursor-pointer bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Rani.png') }}" alt="Rani" class="w-full h-60 rounded-[17px] mx-auto mb-4 object-cover object-top">
                    <h3 class="text-lg font-bold text-customBlue">Rani Puspita Dewi, S.H., M.H.</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.9</p>
                </div>

                {{-- Lawyer Card 2 (Budi) --}}
                <div onclick="openModal(lawyers[1])" class="cursor-pointer bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Budi.png') }}" alt="Budi" class="w-full h-60 rounded-[17px] mx-auto mb-4 object-cover object-top">
                    <h3 class="text-lg font-bold text-customBlue">Budi Koestadi, S.H., M.H.</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.9</p>
                </div>

                {{-- Lawyer Card 3 (Andi) --}}
                <div onclick="openModal(lawyers[2])" class="cursor-pointer bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Andi.png') }}" alt="Andi" class="w-full h-60 rounded-[17px] mx-auto mb-4 object-cover object-top">
                    <h3 class="text-lg font-bold text-customBlue">Andi Darmawan, S.H., M.H.</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.9</p>
                </div>

                {{-- Lawyer Card 4 (Maryo) --}}
                <div onclick="openModal(lawyers[3])" class="cursor-pointer bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Maryo.png') }}" alt="Maryo" class="w-full h-60 rounded-[17px] mx-auto mb-4 object-cover object-top">
                    <h3 class="text-lg font-bold text-customBlue">Maryo Sunandar, S.H., M.H.</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.9</p>
                </div>
            </div>
        </section>

        {{-- 2. Articles Section --}}
        <section class="my-8 md:my-12">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-semibold text-2xl text-customWhite">Rekomendasi Artikel</h2>
                <a href="{{ url('/articles') }}" class="group inline-flex items-center text-customWhite hover:text-customYellow font-medium transition-colors duration-150 ease-in-out">
                    <span class="mr-1">Lihat Semua</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-3.5 h-3.5 text-customWhite group-hover:fill-customYellow transition-colors duration-150 ease-in-out">
                        <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">
                {{-- Article Card 1 --}}
                <a href="{{ route('article.show', ['id' => 1]) }}" class="block transform hover:scale-105 transition-transform duration-300">
                    <div class="border-[10px] border-customWhite bg-customWhite shadow-lg overflow-hidden h-full p-[3px] rounded-[20px]">
                        <img src="{{ asset('assets/images/Cover1.png') }}" alt="Article Title" class="w-full h-48 object-cover rounded-[17px]">
                        <div class="p-5 text-gray-800">
                            <h3 class="text-xl font-bold text-customBlue mb-2">Dasar Hukum Keterbukaan Informasi</h3>
                            <p class="text-gray-600 text-sm mb-3">Dasar hukum keterbukaan informasi publik di Indonesia adalah Undang-Undang...</p>
                            <span class="text-customBlue font-semibold">Baca Lebih →</span>
                        </div>
                    </div>
                </a>

                {{-- Article Card 2 --}}
                <a href="{{ route('article.show', ['id' => 2]) }}" class="block transform hover:scale-105 transition-transform duration-300">
                    <div class="border-[10px] border-customWhite bg-customWhite shadow-lg overflow-hidden h-full p-[3px] rounded-[20px]">
                        <img src="https://londonsba.org.uk/wp-content/uploads/2023/09/closeup-shot-person-writing-book-with-gavel-table-1.jpg" alt="Article Title" class="w-full h-48 object-cover rounded-[17px]">
                        <div class="p-5 text-gray-800">
                            <h3 class="text-xl font-bold text-customBlue mb-2">Mitos Positivisme Hukum</h3>
                            <p class="text-gray-600 text-sm mb-3">Polemik dan kecurigaan mencuat setiap kali proses penyelidikan...</p>
                            <span class="text-customBlue font-semibold">Baca Lebih →</span>
                        </div>
                    </div>
                </a>

                {{-- Article Card 3 --}}
                <a href="{{ route('article.show', ['id' => 3]) }}" class="block transform hover:scale-105 transition-transform duration-300">
                    <div class="border-[10px] border-customWhite bg-customWhite shadow-lg overflow-hidden h-full p-[3px] rounded-[20px]">
                        <img src="https://cdn0-production-images-kly.akamaized.net/2kjnefq7e62SMvPs80_TZwxBJA8=/0x984:4168x3333/800x450/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4521473/original/034839000_1690870751-3776960_77429.jpg" alt="Article Title" class="w-full h-48 object-cover rounded-[17px]">
                        <div class="p-5 text-gray-800">
                            <h3 class="text-xl font-bold text-customBlue mb-2">Disabilitas dan Kesetaraan di Hadapan Hukum</h3>
                            <p class="text-gray-600 text-sm mb-3">Kasus yang menimpa Agus, seorang penyandang disabilitas...</p>
                            <span class="text-customBlue font-semibold">Baca Lebih →</span>
                        </div>
                    </div>
                </a>

            </div>
        </section>

        {{-- 3. Testimonials Section --}}
        @include('components.testimonials', ['testimonials' => $testimonials])
        @if (session('status'))
            <div class="text-green-500 text-center mb-4">
                {{ session('status') }}
            </div>
        @endif

    </div>
    
    <div class="modal" id="lawyerModal" style="display: none;">
        <div class="modal-box">
            <span class="close" id="closeModal">&times;</span>
            <div id="modalContent"></div>
        </div>
    </div>

    @section('scripts')
        @vite('resources/js/lawyer_script.js')
    @endsection
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

</x-app-layout>