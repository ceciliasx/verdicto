<x-app-layout>
    @section('styles')
        @vite('resources/css/lawyer_style.css')
    @endsection

    <x-search-box id="search" placeholder="Cari di sini..." />

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        {{-- 1. Lawyers Section --}}
        <section>
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-semibold text-2xl text-customWhite">Popular Lawyers</h2>
                <a href="{{ url('/lawyer') }}" class="group inline-flex items-center text-customWhite hover:text-customYellow font-medium transition-colors duration-150 ease-in-out">
                    <span class="mr-1">View All</span>
                    {{-- SVG Arrow Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-3.5 h-3.5 text-customWhite group-hover:fill-customYellow transition-colors duration-150 ease-in-out">
                        {{-- This is a standard "play" icon, which looks like a right-pointing triangle --}}
                        <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                    </svg>
                </a>
            </div>

            {{-- @php
                $lawyers = json_decode(file_get_contents(public_path('js/lawyers.json')), true);
            @endphp --}}


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- <div id="lawyerGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6"> --}}
                {{-- @foreach($lawyers as $lawyer)
                    <div class="cursor-pointer bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300"
                        onclick='openModal(@json($lawyer))'>
                        <img src="{{ $lawyer['image'] }}" alt="{{ $lawyer['name'] }}" class="w-100 h-60 rounded-[17px] mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-bold text-customBlue">{{ explode(',', $lawyer['name'])[0] }}</h3>
                        <p class="text-customYellow font-semibold text-lg">★ {{ $lawyer['rating'] }}</p>
                    </div>
                @endforeach --}}

                {{-- Lawyer Card 1 --}}
                <div onclick='openModal(lawyers[0])' class="cursor-pointer bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Rani.png') }}" alt="Rani" class="w-100 h-60 rounded-[17px] mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-bold text-customBlue">Rani</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.9</p>
                </div>

                {{-- <div onclick='openModal(lawyers[1])' class="cursor-pointer bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Budi.png') }}" alt="Budi" class="w-100 h-60 rounded-[17px] mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-bold text-customBlue">Budi</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.6</p>
                </div>

                <div onclick='openModal(lawyers[2])' class="cursor-pointer bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Andi.png') }}" alt="Andi" class="w-100 h-60 rounded-[17px] mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-bold text-customBlue">Andi</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.1</p>
                </div>

                <div onclick='openModal(lawyers[3])' class="cursor-pointer bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Farhat.png') }}" alt="Farhat" class="w-100 h-60 rounded-[17px] mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-bold text-customBlue">Farhat</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.8</p>
                </div> --}}

                {{-- <div class="bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Rani.png') }}" alt="Rani" class="w-100 h-60 rounded-[17px] mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-bold text-customBlue">Rani</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.9</p>
                </div>

                {{-- Lawyer Card 2 --}}
                <div class="bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Budi.png') }}" alt="Budi" class="w-100 h-60 rounded-[17px] mx-auto mb-4 object-cover object-top">
                    <h3 class="text-xl font-bold text-customBlue">Budi</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.6</p>
                </div>

                {{-- Lawyer Card 3 --}}
                <div class="bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Andi.png') }}" alt="Andi" class="w-100 h-60 rounded-[17px] mx-auto mb-4 object-cover object-top">
                    <h3 class="text-xl font-bold text-customBlue">Andi</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.1</p>
                </div>

                {{-- Lawyer Card 4 --}}
                <div class="bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Farhat.png') }}" alt="Maryo" class="w-100 h-60 rounded-[17px] mx-auto mb-4 object-cover object-top">
                    <h3 class="text-xl font-bold text-customBlue">Maryo</h3>
                    <p class="text-customYellow font-semibold text-lg">★ 4.8</p>
                </div>
            </div>
            {{-- <div id="lawyerModal" style="display: none;">
                <div id="modalContent"></div>
                <button id="closeModal">Close</button>
            </div> --}}
        </section>

        {{-- 2. Articles Section --}}
        <section class="my-8 md:my-12">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-semibold text-2xl text-customWhite">Popular Articles</h2>
                <a href="{{ url('/article') }}" class="group inline-flex items-center text-customWhite hover:text-customYellow font-medium transition-colors duration-150 ease-in-out">
                    <span class="mr-1">View All</span>
                    {{-- SVG Arrow Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-3.5 h-3.5 text-customWhite group-hover:fill-customYellow transition-colors duration-150 ease-in-out">
                        {{-- This is a standard "play" icon, which looks like a right-pointing triangle --}}
                        <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Article Card Example 2 --}}
                <div class="border-[10px] border-customWhite bg-customWhite rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Cover1.png') }}" alt="Another Article Title" class="w-full h-48 object-cover rounded-[7px]">
                    <div class="p-5 text-gray-800">
                        <h3 class="text-xl font-bold text-customBlue mb-2">Understanding Contract Law: Key Concepts</h3>
                        <p class="text-gray-600 text-sm mb-3">Exploring the essential elements that form a legally binding contract...</p>
                        <a href="#" class="text-customBlue hover:text-customYellow font-semibold">Read More →</a>
                    </div>
                </div>

                {{-- Article Card Example 2 --}}
                <div class="border-[10px] border-customWhite bg-customWhite rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Cover1.png') }}" alt="Another Article Title" class="w-full h-48 object-cover rounded-[7px]">
                    <div class="p-5 text-gray-800">
                        <h3 class="text-xl font-bold text-customBlue mb-2">Understanding Contract Law: Key Concepts</h3>
                        <p class="text-gray-600 text-sm mb-3">Exploring the essential elements that form a legally binding contract...</p>
                        <a href="#" class="text-customBlue hover:text-customYellow font-semibold">Read More →</a>
                    </div>
                </div>
                
                {{-- Article Card Example 2 --}}
                <div class="border-[10px] border-customWhite bg-customWhite rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/images/Cover1.png') }}" alt="Another Article Title" class="w-full h-48 object-cover rounded-[7px]">
                    <div class="p-5 text-gray-800">
                        <h3 class="text-xl font-bold text-customBlue mb-2">Understanding Contract Law: Key Concepts</h3>
                        <p class="text-gray-600 text-sm mb-3">Exploring the essential elements that form a legally binding contract...</p>
                        <a href="#" class="text-customBlue hover:text-customYellow font-semibold">Read More →</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    @section('scripts')
        @vite('resources/js/lawyer_script.js')
    @endsection

    <!-- Modal container -->
    <div id="detailModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg w-[90%] max-w-lg shadow-xl relative">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-black hover:text-red-500 font-bold text-xl">&times;</button>
        <div id="modalContent"></div>
    </div>
    </div>
</x-app-layout>