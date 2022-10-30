{{-- Header --}}
<header class=" shadow-md">
    <div class="container mx-auto px-2.5 grid grid-cols-3 md:grid-cols-4 ">
        <div class="flex justify-start items-center">
            <a href="{{ route('index') }}">
                <x-application-logo class="w-15" />
            </a>
        </div>
        <div class="hidden md:flex col-span-2 items-center justify-center">
            <ul class="flex justify-between items-center nav-main" id="nav-main">
                <li>
                    <x-nav-url :href="route('index')" :active="request()->routeIs('index')">
                        {{ __('Home') }}
                    </x-nav-url>
                </li>
                <li>
                    <x-nav-url :href="route('service')" :active="request()->routeIs('service')">
                        {{ __('Our Services') }}
                    </x-nav-url>
                </li>
                <li class="py-5 mx-2 cursor-pointer hover:text-blue font-semibold font-inter text-base">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="flex justify-between items-center">
                                <span>Opportunities</span>
                                <span class="iconify ml-1" data-icon="akar-icons:chevron-down"></span>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <x-nav-link :href="route('jobs.index')" :active="request()->routeIs('jobs.index')">
                                {{ __('Jobs') }}
                            </x-nav-link>
                            <x-nav-link :href="route('jobs.index')" :active="request()->routeIs('jobs.index')">
                                {{ __('Training') }}
                            </x-nav-link>
                        </x-slot>
                    </x-dropdown>
                </li>
                <li>
                    <x-nav-url :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About Us') }}
                    </x-nav-url>
                </li>
                <li>
                    <x-nav-url :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-nav-url>
                </li>
                <li class="py-5 mx-2 cursor-pointer hover:text-blue font-semibold font-inter text-base">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="flex justify-between items-center">
                                <span>More</span>
                                <span class="iconify ml-1" data-icon="akar-icons:chevron-down"></span>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <x-nav-link :href="route('galaries')" :active="request()->routeIs('galaries')">
                                {{ __('Photo Gallery') }}
                            </x-nav-link>
                            <x-nav-link :href="route('faq')" :active="request()->routeIs('faq')">
                                {{ __('FAQ') }}
                            </x-nav-link>
                            <x-nav-link :href="route('rates')" :active="request()->routeIs('rates')">
                                {{ __('Rates') }}
                            </x-nav-link>
                        </x-slot>
                    </x-dropdown>
                </li>

            </ul>
        </div>


        {{-- Only for auth user --}}
        @auth
            <div class="">
                <div class="hidden md:flex justify-end items-center">
                    <ul class="nav-main flex items-center">
                        <li class=" py-5 mx-4 cursor-pointer hover:text-blue font-inter text-base relative">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <div
                                        class="after:bg-red after:absolute after:z-30 after:content-[''] after:w-2 after:h-2 relative after:top-0 after:right-0 after:rounded">
                                        <span class="iconify text-2xl text-gray  " data-icon="bxs:bell"></span>
                                    </div>
                                </x-slot>

                                <x-slot name="content">
                                    <x-nav-link :href="route('myprofile')" :active="request()->routeIs('myprofile')">
                                        {{ __('2 Message') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('myprofile')" :active="request()->routeIs('myprofile')">
                                        {{ __('3 Notification') }}
                                    </x-nav-link>
                                </x-slot>
                            </x-dropdown>
                        </li>
                        <li class="py-5 mx-4 hover:text-blue">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <span class="flex justify-center items-center"><img
                                            src="{{ asset('images/avatar.png') }}" alt=""
                                            class="w-10 h-auto mr-2">{{ Auth::user()->firstname }}</span>
                                </x-slot>

                                <x-slot name="content">
                                    <x-nav-link :href="route('myprofile')" :active="request()->routeIs('myprofile')">
                                        {{ __('Profile') }}
                                    </x-nav-link>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </li>
                        <li>
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex justify-between items-center px-2 py-1 bg-gradient-to-tr rounded from-mblue to-dblue text-white hover:scale-105 focus:outline-none transition duration-150 ease-in-out">
                                        <div>Backoffice</div>
                                        <span class="iconify ml-1" data-icon="akar-icons:chevron-down"></span>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-nav-link :href="route('packages')" :active="request()->routeIs('packages')">
                                        {{ __('Manage Packages') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('pickup')" :active="request()->routeIs('pickup')">
                                        {{ __('Pickup') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('incomming')" :active="request()->routeIs('incomming')">
                                        {{ __('Incoming Package') }}
                                    </x-nav-link>
                                </x-slot>
                            </x-dropdown>
                        </li>


                    </ul>
                </div>
                <div class="col-span-2 sm:hidden">
                    <ul class="nav-main flex items-center gap-2 sm:gap-0">
                        <li class=" py-5 mx-4 cursor-pointer hover:text-blue font-inter text-base relative">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <div
                                        class="after:bg-red after:absolute after:z-30 after:content-[''] after:w-2 after:h-2 relative after:top-0 after:right-0 after:rounded">
                                        <span class="iconify text-2xl text-gray  " data-icon="bxs:bell"></span>
                                    </div>
                                </x-slot>

                                <x-slot name="content">
                                    <x-nav-link :href="route('myprofile')" :active="request()->routeIs('myprofile')">
                                        {{ __('2 Message') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('myprofile')" :active="request()->routeIs('myprofile')">
                                        {{ __('3 Notification') }}
                                    </x-nav-link>
                                </x-slot>
                            </x-dropdown>
                        </li>
                        <li class="py-5 mx-4 hover:text-blue">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <span class="flex justify-center items-center"><img
                                            src="{{ asset('images/avatar.png') }}" alt=""
                                            class="w-10 h-auto mr-2">{{ Auth::user()->firstname }}</span>
                                </x-slot>

                                <x-slot name="content">
                                    <x-nav-link :href="route('myprofile')" :active="request()->routeIs('myprofile')">
                                        {{ __('Profile') }}
                                    </x-nav-link>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </li>
                        <li class="flex justify-end items-center">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-nav-link :href="route('service')" :active="request()->routeIs('service')">
                                        {{ __('Our Services') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('jobs.index')" :active="request()->routeIs('jobs.index')">
                                        {{ __('Jobs') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                                        {{ __('Training') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                                        {{ __('About US') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                                        {{ __('Contact') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('galaries')" :active="request()->routeIs('galaries')">
                                        {{ __('Photo Gallery') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('faq')" :active="request()->routeIs('faq')">
                                        {{ __('FAQ') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('rates')" :active="request()->routeIs('rates')">
                                        {{ __('Rates') }}
                                    </x-nav-link>
                                    <hr class="text-blue">
                                    <x-nav-link :href="route('packages')" :active="request()->routeIs('packages')">
                                        {{ __('Manage Packages') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('pickup')" :active="request()->routeIs('pickup')">
                                        {{ __('Pickup') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('incomming')" :active="request()->routeIs('incomming')">
                                        {{ __('Incoming Package') }}
                                    </x-nav-link>
                                </x-slot>
                            </x-dropdown>
                        </li>


                    </ul>
                </div>
            </div>
        @endauth

        @guest
            <div class="flex justify-end items-center gap-3 col-span-2">
                <a href="{{ route('login') }}"
                    class="px-2 py-1 border border-blue rounded text-blue hover:bg-gradient-to-tr  hover:from-mblue hover:to-dblue hover:text-white hover:scale-105 focus:outline-none transition duration-150 ease-in-out">Login</a>
                <a href="{{ route('register') }}"
                    class="px-2 py-1 bg-gradient-to-tr rounded from-mblue to-dblue text-white hover:scale-105 focus:outline-none transition duration-150 ease-in-out">Sign
                    Up</a>
                <ul>
                    <li class="sm:hidden">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-nav-link :href="route('service')" :active="request()->routeIs('service')">
                                    {{ __('Our Services') }}
                                </x-nav-link>
                                <x-nav-link :href="route('jobs.index')" :active="request()->routeIs('jobs.index')">
                                    {{ __('Jobs') }}
                                </x-nav-link>
                                <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                                    {{ __('Training') }}
                                </x-nav-link>
                                <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                                    {{ __('About US') }}
                                </x-nav-link>
                                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                                    {{ __('Contact') }}
                                </x-nav-link>
                                <x-nav-link :href="route('galaries')" :active="request()->routeIs('galaries')">
                                    {{ __('Photo Gallery') }}
                                </x-nav-link>
                                <x-nav-link :href="route('faq')" :active="request()->routeIs('faq')">
                                    {{ __('FAQ') }}
                                </x-nav-link>
                                <x-nav-link :href="route('rates')" :active="request()->routeIs('rates')">
                                    {{ __('Rates') }}
                                </x-nav-link>
                            </x-slot>
                        </x-dropdown>
                    </li>
                </ul>
            </div>
        @endguest
    </div>

</header>
