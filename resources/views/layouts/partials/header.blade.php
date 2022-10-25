{{-- Header --}}
<header class=" shadow-md">
    <div class="container mx-auto px-2.5 grid grid-cols-2 md:grid-cols-4 ">
        <div class="flex justify-start items-center">
            <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="BPS" class="w-15"></a>
        </div>
        <div class="hidden md:flex col-span-2 items-center justify-center">
            <ul class="flex justify-between items-center nav-main" id="nav-main">
                <li class=" py-5 mx-2 cursor-pointer hover:text-blue font-semibold font-inter text-base"><a
                        href="{{ route('index') }}">Home</a></li>
                <li class=" py-5 mx-2 cursor-pointer hover:text-blue font-semibold font-inter text-base relative"><a
                        href="{{ route('service') }}">Our Services</a>
                    {{-- <ul class="absolute bg-gradient-to-tr from-mblue to-dblue py-3 b-full submenu top-full z-50 hidden w-40">
                        <li class="text-white px-4 hover:bg-white hover:text-blue"><a href="">Courier</a></li>
                        <li class="text-white px-4 hover:bg-white hover:text-blue"><a href="">Money Order</a></li>
                    </ul> --}}
                </li>
                <li class=" py-5 mx-2 cursor-pointer hover:text-blue font-semibold font-inter text-base relative">
                    Opportunities
                    <ul class="absolute bg-white shadow-md py-3 b-full submenu top-full left-0 z-50 hidden w-40">
                        <li><a href="{{ route('jobs.index') }}"
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Jobs</a>
                        </li>
                        <li><a href=""
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Training</a>
                        </li>
                    </ul>
                </li>
                <li class=" py-5 mx-2 cursor-pointer hover:text-blue font-semibold font-inter text-base"><a
                        href="{{ route('about') }}">About Us</a></li>
                <li class=" py-5 mx-2 cursor-pointer hover:text-blue font-semibold font-inter text-base"><a
                        href="{{ route('contact') }}">Contact</a></li>
                <li class=" py-5 mx-2 cursor-pointer hover:text-blue font-semibold font-inter text-base relative">More
                    <ul class="absolute bg-white shadow-md py-3 b-full submenu top-full z-50 hidden w-40">
                        <li><a href="{{ route('galaries.index') }}"
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Photo
                                Gallery</a></li>
                        <li><a href="{{ route('faq') }}"
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">FAQ</a>
                        </li>
                        <li><a href="{{ route('rates') }}"
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Rates</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="hidden md:flex justify-end items-center">
            <ul class="nav-main flex items-center">
                <li class=" py-5 mx-4 cursor-pointer hover:text-blue font-inter text-base relative">
                    <div
                        class="after:bg-red after:absolute after:z-30 after:content-[''] after:w-2 after:h-2 relative after:top-0 after:right-0 after:rounded">
                        <span class="iconify text-2xl text-gray  " data-icon="bxs:bell"></span>
                    </div>

                    <ul class="absolute bg-white shadow-md py-3 b-full submenu top-full z-50 hidden w-40 font-semibold">
                        <li>
                            <a href=""
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">2
                                Message</a>
                        </li>
                        <li><a href=""
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">3
                                Notification</a>
                        </li>
                    </ul>
                </li>
                <li class=" py-5 mx-4 cursor-pointer hover:text-blue font-inter text-base relative">
                    <span class="flex justify-center items-center"><img src="{{ asset('images/avatar.png') }}"
                            alt="" class="w-10 h-auto mr-2">Mehedi</span>
                    <ul class="absolute bg-white shadow-md py-3 b-full submenu top-full z-50 hidden w-40 font-semibold">
                        <li>
                            <a href="{{ route('profile') }}"
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Profile</a>
                        </li>
                        <li><a href="{{ route('rates') }}"
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Logout</a>
                        </li>
                    </ul>
                </li>

                <li class=" py-5 cursor-pointer hover:text-blue font-semibold font-inter text-base relative">
                    <button
                        class="flex justify-between items-center px-2 py-1 bg-gradient-to-tr from-mblue to-dblue text-white hover:scale-110 rounded transition-all">Backoffice
                        <span class="iconify" data-icon="akar-icons:chevron-down"></span></button>
                    <ul class="absolute bg-white shadow-md py-3 b-full submenu top-full z-50 hidden w-40">
                        <li><a href="{{ route('packages') }}"
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Manage
                                Package</a></li>
                        <li><a href="{{ route('pickup') }}"
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Pickup</a>
                        </li>
                        <li><a href="{{ route('incomming') }}"
                                class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Incoming
                                Package</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        {{-- <div class="hidden md:flex justify-end items-center">
            <a href="{{ route('login') }}"
                class="btn border border-blue rounded py-2 px-4 text-blue hover:text-white hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue">Login</a>
            <a href="{{ route('register') }}"
                class="btn ml-3 py-2 px-4 rounded bg-gradient-to-tr from-mblue to-dblue text-white hover:scale-110">Sign
                Up</a>
        </div> --}}
        <div class="flex justify-end items-center md:hidden">
            <span class="iconify text-4xl text-blue" id="menuToggle" data-icon="charm:menu-hamburger"></span>
        </div>
    </div>



    {{-- Mobile menu --}}
    <div id="mobileMenu"
        class="absolute bg-gradient-to-tr from-mblue to-dblue right-0 py-3 hidden md:hidden z-50 text-white font-inter">
        <ul id="mobile-nav-main" class="mobile-nav-main">
            <li class="px-4 leading-7"><a href="{{ route('index') }}">Home</a></li>
            <li class="px-4 leading-7"><a href="{{ route('service') }}">Our Services</a></li>
            <li class="px-4 leading-7 relative">Opportunities
                <ul class="absolute bg-white shadow-md py-3 b-full submenu right-full top-0 z-50 hidden w-40">
                    <li><a href="{{ route('jobs.index') }}"
                            class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Jobs</a>
                    </li>
                    <li><a href=""
                            class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Training</a>
                    </li>
                </ul>
            </li>
            <li class="px-4 leading-7"><a href="{{ route('about') }}">About Us</a></li>
            <li class="px-4 leading-7"><a href="{{ route('contact') }}">Contact</a></li>
            <li class="px-4 leading-7 relative">More
                <ul class="absolute bg-white shadow-md py-3 b-full submenu right-full top-0 z-50 hidden w-40">
                    <li><a href="{{ route('galaries.index') }}"
                            class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Photo
                            Gallery</a></li>
                    <li><a href="{{ route('faq') }}"
                            class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">FAQ</a>
                    </li>
                    <li><a href="{{ route('rates') }}"
                            class="w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white">Rates</a>
                    </li>
                </ul>
            </li>
            <li class="px-4 leading-7"><a href="{{ route('login') }}" class="">Profile</a></li>
            <li class="px-4 leading-7"><a href="{{ route('login') }}" class="">Logout</a></li>
            <li class="px-4 leading-7"><a href="{{ route('login') }}" class="">Login</a></li>
            <li class="px-4 leading-7"><a href="{{ route('register') }}" class="">Sign Up</a></li>
        </ul>
    </div>
</header>
