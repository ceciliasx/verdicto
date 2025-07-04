@props(['placeholder' => 'Search...', 'id' => 'search'])

<form action="{{ route('lawyers.index') }}" method="GET" class="text-center my-8">
    <div class="relative w-full max-w-2xl mx-auto">
        <span class="absolute inset-y-0 left-0 flex items-center pl-4">
            <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
            </svg>
        </span>
        <input
            type="text"
            name="search"
            id="{{ $id }}"
            placeholder="{{ $placeholder }}"
            value="{{ request('search') }}"
            class="w-full py-3 pl-16 pr-4 text-lg text-gray-700 bg-white border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-customYellow focus:border-transparent shadow-md"
        />
    </div>
</form>