<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-customWhite border border-transparent rounded-md font-semibold text-xs text-customFont hover:text-customWhite uppercase tracking-widest hover:bg-customYellow focus:bg-customWhite active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-120']) }}>
    {{ $slot }}
</button>
