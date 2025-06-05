<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-customWhite leading-tight">
        </h2>
    </x-slot>

    <div class="py-2 bg-customBlue text-customWhite">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- 1. Search Bar Section --}}
            <section class="text-center my-8 md:my-12">
                <div class="inline-block relative w-full max-w-2xl">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                        <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <input type="text" placeholder="Find a Lawyer"
                           class="w-full py-4 pl-12 pr-4 text-lg text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-customYellow focus:border-transparent shadow-md">
                </div>
            </section>

            {{-- 2. Lawyers Section --}}
            <section class="my-8 md:my-12">
                <div class="flex justify-between items-center mb-6 px-2">
                    <h2 class="text-3xl font-semibold text-customWhite">Popular Lawyers</h2>
                    <a href="#" class="group inline-flex items-center text-customWhite hover:text-customYellow font-medium transition-colors duration-150 ease-in-out">
                        <span class="mr-1">View All</span>
                        {{-- SVG Arrow Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-3.5 h-3.5 text-customWhite group-hover:fill-customYellow transition-colors duration-150 ease-in-out">
                            {{-- This is a standard "play" icon, which looks like a right-pointing triangle --}}
                            <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                        </svg>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    {{-- Lawyer Card 1 --}}
                    <div class="bg-customWhite p-3 rounded-[20px] shadow-lg text-gray-800 text-center transform hover:scale-105 transition-transform duration-300">
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
            </section>

            {{-- 3. Articles Section --}}
            <section class="my-8 md:my-12">
                <div class="flex justify-between items-center mb-6 px-2">
                    <h2 class="text-3xl font-semibold text-customWhite">Articles</h2>
                    <a href="#" class="group inline-flex items-center text-customWhite hover:text-customYellow font-medium transition-colors duration-150 ease-in-out">
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
    </div>
</x-app-layout>