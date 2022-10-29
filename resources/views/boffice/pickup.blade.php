<x-app-layout>
<div class="py-6">
    <div class="container mx-auto ">
        <x-profile class="rounded bg-white p-4 flex justify-start items-center shadow"></x-profile>
    </div>
    <div class="container mx-auto bg-white rounded-md p-4 mt-6 shadow">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <div class="grid grid-cols-6 gap-4">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="trackingNumber" class="block text-sm font-bold font-poppins">Order Tracking Number</label>
                        <input type="text" name="trackingNumber" id="trackingNumber"
                            value="{{ Auth::user()->profile->tin ?? '' }}"
                            class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                            required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="supplier" class="block text-sm font-bold font-poppins">Store/ Supplier</label>
                        <select id="supplier" name="supplier" class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                            <option value="1">Amazon</option>
                            <option value="2">Alibaba</option>
                            <option value="3">Wallmart</option>
                            <option value="4">Ebay</option>
                            <option value="5">Ali-express</option>
                        </select>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="date" class="block text-sm font-bold font-poppins">Date</label>
                        <input type="date" name="date" id="date"
                            class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                            required>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="lastname" class="block text-sm font-bold font-poppins">Time</label>
                        <input type="time" name="time" id="time"
                            class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                            required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="contactPerson" class="block text-sm font-bold font-poppins">Contact person</label>
                        <input type="text" name="contactPerson" id="contactPerson"
                            class="  block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                            required >
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="contactemail" class="block text-sm font-bold font-poppins">Contact Email</label>
                        <input type="email" name="contactemail" id="contactemail" class="  block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                            required>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="pickupAddress" class="block text-sm font-bold font-poppins">Pickup Address</label>
                        <div class="mt-1">
                            <textarea id="pickupAddress" name="pickupAddress" rows="1"
                                class="mt-1 block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm">{{ Auth::user()->profile->address ?? '' }}</textarea>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="about" class="block text-sm font-bold font-poppins">Note for packages</label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="1"
                                class="mt-1 block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm">{{ Auth::user()->profile->address ?? '' }}</textarea>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="location" class="block text-sm font-bold font-poppins">Pickup location</label>
                        <select id="location" name="location"
                            class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                            <option value="1">Locker: Fusion Superplex | Carmichael</option>
                            <option value="2">Store: Prince Charles, Prince Charles Dr.</option>
                            <option value="3">Drop Off: San Salvador</option>
                        </select>
                    </div>


                    <div class="col-span-6 sm:col-span-3">
                        <label class="block text-sm font-bold font-poppins" for="recept">Upload Receipt</label>
                        <input class="py-2  px-2 block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm" id="recept" name="recept" type="file">

                    </div>

                </div>
            </div>
            <div class="bg-gray-50 py-3 text-right mt-4">
                <button type="reset" class="px-2 py-1 rounded bg-lblue text-black hover:scale-105 focus:outline-none transition duration-150 ease-in-out hover:shadow">Reset</button>
                <x-primary-button>
                    {{ __('Save') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>



<!-- Main modal -->
<div id="pickupconfirm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto bg-[rgba(0,0,0,.32)]  overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="absolute p-4 w-full max-w-2xl h-full md:h-auto left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-end items-start p-4 rounded-t">
                <button class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-red rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white closemodal" >
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 text-center">
                <h2 class="text-red text-4xl">Stop!</h2>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Іf you are requesting a package to be picked up in a surrounding area please press continue. If you are having a package delivered from a store such as Amazon or Walmart please press incoming packages.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 justify-center">
                <button class="px-2 py-1 border border-blue rounded text-blue hover:bg-gradient-to-tr  hover:from-mblue hover:to-dblue hover:text-white hover:scale-105 focus:outline-none transition duration-150 ease-in-out closemodal" >Continue</button>
                <a href="{{route('incomming')}}">
                    <button class="px-2 py-1 bg-gradient-to-tr rounded from-mblue to-dblue text-white hover:scale-105 focus:outline-none transition duration-150 ease-in-out">Incomming Package</button>
                </a>
            </div>
        </div>
    </div>
</div>



<x-slot name="script">
    <script>
        $(document).ready(function () {
            $('#pickupconfirm').toggleClass('hidden');

            $('.closemodal').click(function (e) {
                e.preventDefault();
                $('#pickupconfirm').toggleClass('hidden');
            });


            $("#trackingNumber").inputFilter(function(value) {
                    return /^\d*$/.test(value); // Allow digits only, using a RegExp
            }, "Only digits allowed");
        });

    </script>
</x-slot>
</x-app-layout>
