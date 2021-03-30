<header class="px-4 py-4 md:px-8 lg:px-16">
    <!-- header row -->
    <div class="flex justify-between">
        <!-- hamburger menu on mobile -->
        <a href="#menu-open" id="menu-button" title="Open Menu" aria-label="Open Menu"
            class="md:hidden p-2
            rounded-full hover:fill-current hover:text-blue
            focus:outline-none focus:bg-blue focus:bg-opacity-10
            focus:ring-2 focus:ring-blue focus:ring-opacity-40">
            <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2949A3" width="42px" height="42px"
            role="presentation" focusable="false" aria-label="trigram for heaven symbol">
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" /></svg>
        </a>

        <!-- brand -->
        <a class="text-blue-dark text-3xl py-3 font-bold" href="/">
            scholarboatph
        </a>

        <!-- nav links on desktop -->
        <nav class="md:flex flex-row hidden">
            <a class="text-lg font-bold p-4 text-gray-500 hover:text-black transition" href="/">Home</a>
            <a class="text-lg font-bold p-4 text-gray-500 hover:text-black transition" href="/scholarships">Scholarships</a>
            <a class="text-lg font-bold p-4 text-gray-500 hover:text-black transition" href="/institutions">Institutions</a>
            <a class="text-lg font-bold p-4 text-gray-500 hover:text-black transition" href="/about">About</a>
            
            <!-- check login admin profile -->
            @auth
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex m-2 text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
            @endauth
        </nav>
    </div>
</header>
