<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-customWhite py-2 shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current" />
                    </a>
                </div>
            </div>
            
            <!-- Navigation Links -->
            <div id="links" class="hidden sm:flex items-center">
                <ul class="direct flex space-x-6">
                    <li>
                        <a href="{{ route('dashboard') }}"
                        class="text-lg text-customFont hover:underline hover:underline-offset-8 hover:text-customYellow
                        {{ request()->routeIs('dashboard') ? 'underline underline-offset-8 decoration-customYellow text-customYellow font-semibold' : '' }}">
                        Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('lawyers.index') }}"
                        class="text-lg text-customFont hover:underline hover:underline-offset-8 hover:text-customYellow
                        {{ request()->routeIs('lawyers.index') ? 'underline underline-offset-8 decoration-customYellow text-customYellow font-semibold' : '' }}">
                        Pengacara
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('article.index') }}"
                        class="text-lg text-customFont hover:underline hover:underline-offset-8 hover:text-customYellow
                        {{ request()->routeIs('article.index') ? 'underline underline-offset-8 decoration-customYellow text-customYellow font-semibold' : '' }}">
                        Artikel
                        </a>
                    </li>
                    @auth
                        @if(Auth::user()->role === 'lawyer')
                            <li>
                                <a href="{{ route('lawyer.edit') }}"
                                class="text-lg text-customFont hover:underline hover:underline-offset-8 hover:text-customYellow
                                {{ request()->routeIs('lawyer.edit') ? 'underline underline-offset-8 decoration-customYellow text-customYellow font-semibold' : '' }}">
                                Data
                                </a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>

            <!-- Display Profile Picture -->
            @php
                $user = Auth::user();
                $photoUrl = $user->photo_path
                    ? asset('storage/' . $user->photo_path)
                    : asset('storage/profile-pictures/default-profile.png');
            @endphp

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-full text-customWhite bg-customBlue hover:text-customBlue hover:bg-customWhite hover:border-customBlue focus:outline-none transition ease-in-out duration-120">
                            <div>{{ Auth::user()->name }}</div>
                            
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profil') }}
                        </x-dropdown-link>
                        
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            
                            <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Keluar') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <img src="{{ $photoUrl }}" alt="{{ $user->name }}" class="w-10 h-10 rounded-full object-cover border-2 border-customBlue shadow-sm">
                </div>
            </div>
            
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-customWhite text-customFont shadow-md">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Beranda') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('lawyers.index')" :active="request()->routeIs('lawyers.index')">
                {{ __('Pengacara') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('article.index')" :active="request()->routeIs('article.index')">
                {{ __('Artikel') }}
            </x-responsive-nav-link>
            @auth
                @if(Auth::user()->role === 'lawyer')
                    <x-responsive-nav-link :href="route('lawyer.edit')" :active="request()->routeIs('lawyer.edit')">
                        {{ __('Data') }}
                    </x-responsive-nav-link>
                @endif
            @endauth
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t">
            <div class="px-4">
                <div class="font-medium text-base">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profil') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Keluar') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
