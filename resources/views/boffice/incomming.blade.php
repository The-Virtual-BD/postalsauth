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
                        {{ __('Update Information') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>




    <x-slot name="script">
        <script>
            $(document).ready(function () {

                $("#trackingNumber").inputFilter(function(value) {
                        return /^\d*$/.test(value); // Allow digits only, using a RegExp
                }, "Only digits allowed");
            });

        </script>
    </x-slot>
    </x-app-layout>
