<x-app-layout>

    {{-- Hero --}}
    <div class="hero">
        <img src="{{ asset('images/Banner.png') }}" alt="" class="w-full">
    </div>
    {{-- Minister --}}
    <div class="container mx-auto minister grid grid-cols-1 sm:grid-cols-4 py-20 sm:gap-14">
        <div class="flex justify-center items-center">
            <img src="{{ asset('images/team/JENNIFER-JOHNSON.jpg') }}" class="border-blue rounded-full border-4 w-72"
                alt="Mabelene Miller">
        </div>
        <div class="col-span-3 flex flex-col justify-center p-8 sm:p-0 text-center sm:text-left">
            <p class="font-inter text-xl font-light">Welcome to a new and improved postal experience. We at the Bahamas Post
                Office are cognizant of the demand of our customers for a postal product that is efficient, timely, and
                flexible enough to adapt to an ever-evolving postal market. We heard you and made the bold steps to upgrade,
                transform, and expand our services, using the latest technological applications to bring to you, the
                customer, a superior postal product. <br>You will find that our online e-commerce postal delivery service is
                user-friendly to individual shopper, and small business entrepreneurial operators, alike. <br>Your Bahamas
                Postal service, will ship it, and deliver it, at the best price, and with better service.</p>
            <h2 class="font-semibold text-2xl text-black mt-7">Jennifer Johnson<br>Postmaster General</h2>
        </div>
    </div>
    {{-- Team --}}
    <div class="bg-lblue py-9">
        <div class="container mx-auto text-center">
            <h2 class="font-poppins font-semibold text-4xl text-black">Meet the Executive Team</h2>
            <p class="bg-blue inline-block p-1 rounded text-white mt-2 px-4">Get in touch with our team</p>
        </div>

        <div class="container mx-auto team grid grid-cols-1 sm:grid-cols-4 pt-9 gap-4 px-4 sm:px-0 owl-carousel owl-theme">

            {{-- JENNIFER JOHNSON --}}
            <div class="item bg-white drop-shadow-md">
                <img src="{{ asset('images/team/JENNIFER-JOHNSON.jpg') }}" alt="" srcset=""
                    class="w-full  rounded-sm">
                <div class="text-center py-7">
                    <h3 class="font-inter text-base font-semibold text-black">Jennifer Johnson</h3>
                    <p class="font-inter text-base text-black font-normal">Postmaster General</p>
                    <div class="flex justify-center items-center mt-2">
                        <a href="mailto:jenniferjohnson@bahamas.gov.bs"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="eva:email-fill"></span></a>
                        <a href="tel:+302-5800"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="ci:phone"></span></a>
                    </div>
                </div>
            </div>

            {{-- MABELENE MILLER --}}
            <div class="item bg-white drop-shadow-md">
                <img src="{{ asset('images/team/MABELENE-MILLER.jpg') }}" alt="" srcset=""
                    class="w-full  rounded-sm">
                <div class="text-center py-7">
                    <h3 class="font-inter text-base font-semibold text-black">Mabelene Miller</h3>
                    <p class="font-inter text-base text-black font-normal">Sr Assistant Secretary Admin</p>
                    <div class="flex justify-center items-center mt-2">
                        <a href="mailto:mabelene1@yahoo.com"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="eva:email-fill"></span></a>
                        <a href="tel:+302-5800"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="ci:phone"></span></a>
                    </div>
                </div>
            </div>

            {{-- STEPHEN WHYLLY --}}
            <div class="item bg-white drop-shadow-md">
                <img src="{{ asset('images/team/STEPHEN-WHYLLY.jpg') }}" alt="" srcset=""
                    class="w-full rounded-sm">
                <div class="text-center py-7">
                    <h3 class="font-inter text-base font-semibold text-black">Steven Whylly</h3>
                    <p class="font-inter text-base text-black font-normal">Sr. Superintendent</p>
                    <div class="flex justify-center items-center mt-2">
                        <a href="mailto:stephenwhylly@bahamas.gov.bs"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="eva:email-fill"></span></a>
                        <a href="tel:+302-5800"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="ci:phone"></span></a>
                    </div>
                </div>
            </div>

            {{-- BETTY SWEETING --}}
            <div class="item bg-white drop-shadow-md">
                <img src="{{ asset('images/team/BETTY-SWEETING.jpg') }}" alt="" srcset=""
                    class="w-full rounded-sm">
                <div class="text-center py-7">
                    <h3 class="font-inter text-base font-semibold text-black">Betty Sweeting</h3>
                    <p class="font-inter text-base text-black font-normal">Sr. Superintendent Cashier’s Office</p>
                    <div class="flex justify-center items-center mt-2">
                        <a href="mailto:bettysweeting@bahamas.gov.bs"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="eva:email-fill"></span></a>
                        <a href="tel:+302-5800"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="ci:phone"></span></a>
                    </div>
                </div>
            </div>


            {{-- PETER BETHELL --}}
            <div class="item bg-white drop-shadow-md">
                <img src="{{ asset('images/team/PETER-BETHELL.jpg') }}" alt="" srcset=""
                    class="w-full rounded-sm">
                <div class="text-center py-7">
                    <h3 class="font-inter text-base font-semibold text-black">Peter Bethel</h3>
                    <p class="font-inter text-base text-black font-normal">Accountant Admin</p>
                    <div class="flex justify-center items-center mt-2">
                        <a href="mailto:peterbethell@bahamas.gov.bs"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="eva:email-fill"></span></a>
                        <a href="tel:+302-5800"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="ci:phone"></span></a>
                    </div>
                </div>
            </div>

            {{-- CHERYL KEMP --}}
            <div class="item bg-white drop-shadow-md">
                <img src="{{ asset('images/team/CHERYL-KEMP.jpg') }}" alt="" srcset=""
                    class="w-full rounded-sm">
                <div class="text-center py-7">
                    <h3 class="font-inter text-base font-semibold text-black">Cheryl Kemp</h3>
                    <p class="font-inter text-base text-black font-normal">Superintendent Parcel Post Operations</p>
                    <div class="flex justify-center items-center mt-2">
                        <a href="mailto:cheryldenicekemp@bahamas.gov.bs"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="eva:email-fill"></span></a>
                        <a href="tel:+302-5800"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="ci:phone"></span></a>
                    </div>
                </div>
            </div>

            {{-- SUZLA WHYLLY --}}
            <div class="item bg-white drop-shadow-md">
                <img src="{{ asset('images/team/SUZLA-WHYLLY.jpg') }}" alt="" srcset=""
                    class="w-full rounded-sm">
                <div class="text-center py-7">
                    <h3 class="font-inter text-base font-semibold text-black">Suzla Whylly</h3>
                    <p class="font-inter text-base text-black font-normal">Financial Officer</p>
                    <div class="flex justify-center items-center mt-2">
                        <a href="mailto:suzlawhylly@bahamas.gov.bs"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="eva:email-fill"></span></a>
                        <a href="tel:+302-5800"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="ci:phone"></span></a>
                    </div>
                </div>
            </div>

            {{-- VALDERINE HENFIELD --}}
            <div class="item bg-white drop-shadow-md">
                <img src="{{ asset('images/img.jpg') }}" alt="" srcset="" class="w-full rounded-sml">
                <div class="text-center py-7">
                    <h3 class="font-inter text-base font-semibold text-black">Valderine Henfield</h3>
                    <p class="font-inter text-base text-black font-normal">Sr. Assistant Secretary HR</p>
                    <div class="flex justify-center items-center mt-2">
                        <a href="mailto:valderinehenfield@bahamas.gov.bs"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="eva:email-fill"></span></a>
                        <a href="tel:+302-5800"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="ci:phone"></span></a>
                    </div>
                </div>
            </div>

            {{-- SHEILA GIBSON --}}
            <div class="item bg-white drop-shadow-md">
                <img src="{{ asset('images/img.jpg') }}" alt="" srcset="" class="w-full rounded-sm">
                <div class="text-center py-7">
                    <h3 class="font-inter text-base font-semibold text-black">Sheila Gibson</h3>
                    <p class="font-inter text-base text-black font-normal">Sr. Superintendent Savings Bank</p>
                    <div class="flex justify-center items-center mt-2">
                        <a href="mailto:sheilagibson@bahamas.gov.bs"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="eva:email-fill"></span></a>
                        <a href="tel:+302-5800"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="ci:phone"></span></a>
                    </div>
                </div>
            </div>

            {{-- APRIL SIMMS --}}
            <div class="item bg-white drop-shadow-md">
                <img src="{{ asset('images/img.jpg') }}" alt="" srcset="" class="w-full rounded-sm">
                <div class="text-center py-7">
                    <h3 class="font-inter text-base font-semibold text-black">Apryl Simmons</h3>
                    <p class="font-inter text-base text-black font-normal">Sr. Superintendent NP & Family Islands</p>
                    <div class="flex justify-center items-center mt-2">
                        <a href="mailto:aprilsimms@bahamas.gov.bs"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="eva:email-fill"></span></a>
                        <a href="tel:+302-5800"><span class="iconify text-blue text-3xl mx-2"
                                data-icon="ci:phone"></span></a>

                    </div>
                </div>
            </div>


        </div>
    </div>

    {{-- What we offer --}}
    <div class="py-9">
        <div class="container mx-auto text-center">
            <h2 class="font-poppins font-semibold text-4xl text-black">What we offer</h2>
            <p class="bg-blue inline-block p-1 rounded text-white mt-2 px-4">Get you know what we offer</p>
        </div>
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 pt-9 gap-4 px-4 sm:px-0">
            <div
                class="hwo shadow-md bg-gradient-to-tr from-mblue to-dblue transition-all text-white   rounded-sm flex justify-center items-center flex-col py-12 text-center">
                <span class="iconify text-6xl " data-icon="mdi:email-fast"></span>
                <p class="font-inter font-bold text-2xl  mt-9">Courier Service</p>
            </div>
            <div
                class="hwo shadow-md bg-gradient-to-tr from-mblue to-dblue transition-all text-white  rounded-sm flex justify-center items-center flex-col py-12 text-center">
                <span class="iconify text-5xl " data-icon="fa6-solid:money-bill-transfer"></span>
                <p class="font-inter font-bold text-2xl  mt-9">Money Order Service</p>
            </div>
            <div
                class="hwo shadow-md bg-gradient-to-tr from-mblue to-dblue transition-all text-white  rounded-sm flex justify-center items-center flex-col py-12 text-center">
                <span class="iconify text-5xl " data-icon="entypo:shopping-cart"></span>
                <p class="font-inter font-bold text-2xl  mt-9">E-commerce Service</p>
            </div>
        </div>
    </div>
    {{-- We deliver --}}
    <div class="py-9 bg-lblue ">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-4 sm:px-0">
            <div class="col-span-2">
                <h2 class="font-poppins font-semibold text-4xl text-black">We Deliver</h2>
                <p class="bg-blue inline-block p-1 rounded text-white mt-2 px-4">We deliver right on time</p>
                <p class="font-inter font-normal text-lg sm:text-2xl text-black mt-4">The new Postal courier service will
                    now offer delivery services to your home and businesses. This option is available for online payments at
                    check out.</p>
                <button
                    class="btn font-poppins justify-between items-center p-2.5 border border-blue rounded text-blue mt-9 hidden sm:flex hover:text-white hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue">
                    Calculate <span class="iconify ml-3" data-icon="bi:arrow-right"></span>
                </button>
            </div>
            <div class="flex justify-center flex-col">
                <img src="{{ asset('images/We Deliver Img.jpg') }}" alt=""
                    class="w-full mt-4 sm:mt-0 drop-shadow-md">

                <button
                    class="btn flex font-poppins mx-auto justify-between items-center p-2.5 border border-blue rounded text-blue hover:text-white hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue mt-9 sm:hidden text-center">
                    Calculate <span class="iconify ml-3" data-icon="bi:arrow-right"></span>
                </button>
            </div>
        </div>

    </div>

    {{-- How it Works --}}
    <div class="py-9">
        <div class="container mx-auto text-center">
            <h2 class="font-poppins font-semibold text-4xl text-black">How it Works</h2>
            <p class="bg-blue inline-block p-1 rounded text-white mt-2 px-4">Get you know how it works</p>
        </div>

        <div class="container mx-auto team grid grid-cols-2 sm:grid-cols-4 pt-9 gap-4 px-4 sm:px-0">
            {{-- option 1 --}}
            <div class="">
                <div class="drop-shadow-md bg-lblue bg-cover">

                    <img src="{{ asset('images/HIW Img 01.png') }}" alt="" srcset=""
                        class="w-full rounded-sm">
                    <div class="text-center py-7">
                        <p class="font-poppins font-medium text-base p-2 sm:text-lg text-blue">Place an order online & <br>
                            ship to Bahamas Postal Service US</p>
                    </div>
                </div>
            </div>
            {{-- option 2 --}}
            <div class="">
                <div class="drop-shadow-md bg-lblue bg-cover sm:mt-10">

                    <img src="{{ asset('images/HIW Img 02.png') }}" alt="" srcset=""
                        class="w-full rounded-sm">
                    <div class="text-center py-7">
                        <p class="font-poppins font-medium text-base p-2 sm:text-lg text-blue">Your package is received &
                            <br>
                            shipped to Bahamas Postal Service Nassau
                        </p>
                    </div>
                </div>
            </div>
            {{-- option 3 --}}
            <div class="">
                <div class="drop-shadow-md bg-lblue bg-cover">

                    <img src="{{ asset('images/HIW Img 03.png') }}" alt="" srcset=""
                        class="w-full rounded-sm">
                    <div class="text-center py-7">
                        <p class="font-poppins font-medium text-base p-2 sm:text-lg text-blue">Bahamas Postal Service then
                            processes the <br>
                            item for Customs clearance</p>
                    </div>
                </div>
            </div>
            {{-- option 4 --}}
            <div class="">
                <div class="drop-shadow-md bg-lblue bg-cover  sm:mt-10">

                    <img src="{{ asset('images/HIW Img 04.png') }}" alt="" srcset=""
                        class="w-full rounded-sm">
                    <div class="text-center py-7">
                        <p class="font-poppins font-medium text-base p-2 sm:text-lg text-blue">Packages are now available
                            for in store pickup or delivery services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Map --}}
    <div class="container bg-lblue mx-auto grid grid-cols-1 sm:grid-cols-4 sm:mb-9">
        <div class="sm:col-span-2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3721347.293650991!2d-78.21059121043754!3d24.376842708069564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbahamas%20post%20office!5e0!3m2!1sen!2sbd!4v1662291425960!5m2!1sen!2sbd"
                class="w-full" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="sm:col-span-2 flex justify-center flex-col px-10 md:px-20 py-4 sm:p-0">
            <div class="text-center">
                <h2 class="font-poppins font-semibold text-4xl text-black">Sign up now</h2>
                <p class="bg-blue inline-block p-1 rounded text-white mt-2 px-4">To get next day delivery</p>
            </div>
            <div class="">
                <form action="" method="post" class="flex flex-col items-center py-10 justify-center">
                    <input type="email" name="" id="" placeholder="Email Address"
                        class="w-full  drop-shadow-md rounded p-2 mb-4">
                    <button type="submit"
                        class="btn w-40 border border-blue rounded py-2 px-4 text-blue hover:text-white hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue">Sign
                        Up</button>
                </form>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script>
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 4,
                loop: true,
                pagination: true,
                dot: true,
                nav: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        dot: true,
                        nav: false
                    },
                    600: {
                        items: 3,
                        dot: true,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: false,
                        dot: true,
                        loop: true,
                        pagination: true
                    }
                }
            });
            </script>
    </x-slot>
</x-app-layout>
