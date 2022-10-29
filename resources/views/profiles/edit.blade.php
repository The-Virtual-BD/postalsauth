<x-app-layout>
    <div class="py-6">
        <div class="container mx-auto ">
            <x-profile class="rounded-t bg-white p-4 flex justify-start items-center shadow"></x-profile>
        </div>

        <div class="container mx-auto bg-white border-t border-lblue rounded-b-md shadow">
            <div class=" inline-flex" role="group">
                <button type="button" class="py-2 px-5 text-sm font-medium text-white bg-blue rounded-bl-md">
                    Profile
                </button>
                {{-- <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                Settings
                </button> --}}
            </div>
        </div>
        <div class="container mx-auto bg-white rounded-md p-4 mt-6 shadow">
            <form action="#" method="POST">
                @csrf
                @method('PATCH')
                <div class="">
                    <div class="grid grid-cols-6 gap-4">
                        <div class="col-span-6"><h3 class="font-poppins font-medium text-xl mb-2 uppercase text-blue">TYPE OF ACCOUNT</h3></div>
                        <div class="col-span-6">
                            <label for="type" class="block text-sm font-bold font-poppins">TYPE OF ACCOUNT</label>
                            <select id="type" name="type"
                                class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                                <option value="1">Personal</option>
                                <option value="2">Business</option>
                            </select>
                        </div>
                        {{-- Company details --}}
                        <div class="col-span-6 sm:col-span-3 companydetails hidden">
                            <label for="companyname" class="block text-sm font-bold font-poppins">Company
                                name</label>
                            <input type="text" name="companyname" id="companyname"
                                value="{{ Auth::user()->profile->companyname ?? '' }}"
                                class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                                required>
                        </div>
                        <div class="col-span-6 sm:col-span-3 companydetails hidden">
                            <label for="tin" class="block text-sm font-bold font-poppins">TIN number</label>
                            <input type="text" name="tin" id="tin"
                                value="{{ Auth::user()->profile->tin ?? '' }}"
                                class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                                required>
                        </div>
                        {{-- Company details end --}}

                        <div class="col-span-6 sm:col-span-3">
                            <label for="firstname" class="block text-sm font-bold font-poppins">First
                                name</label>
                            <input type="text" name="firstname" id="firstname"
                                value="{{ Auth::user()->firstname }}"
                                class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                                required>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="lastname" class="block text-sm font-bold font-poppins">Last name</label>
                            <input type="text" name="lastname" id="lastname"
                                value="{{ Auth::user()->lastname }}"
                                class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                                required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone" class="block text-sm font-bold font-poppins">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone }}"
                                class=" block w-full rounded-md bg-lgray focus:bg-white focus:ring-0 border-gray shadow-sm sm:text-sm"
                                required readonly>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block text-sm font-bold font-poppins">Email</label>
                            <input type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                                class=" block w-full rounded-md bg-lgray focus:bg-white focus:ring-0 border-gray shadow-sm sm:text-sm"
                                required readonly>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-bold font-poppins">Country</label>
                            <select id="country" name="country"
                                class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                                <x-country></x-country>
                            </select>
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="island" class="block text-sm font-bold font-poppins">Island</label>
                            <select id="island" name="island" class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                                <x-island></x-island>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="about" class="block text-sm font-bold font-poppins">Address</label>
                            <div class="mt-1">
                                <textarea id="about" name="about" rows="1"
                                    class="mt-1 block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm">{{ Auth::user()->profile->address ?? '' }}</textarea>
                            </div>
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="house" class="block text-sm font-bold font-poppins">Street/House
                                No.</label>
                            <input type="text" name="house" id="house"
                                value="{{ Auth::user()->profile->house ?? '' }}"
                                class="block w-full rounded-md border-blue bg-lblue focus:bg-white focus:ring-0 sm:text-sm"
                                required>
                        </div>
                        <div class="col-span-6"><h3 class="font-poppins font-medium text-xl mt-4 uppercase text-blue">Prefered Region</h3></div>

                        <div class="col-span-6">
                            <label for="region" class="block text-sm font-bold font-poppins">Prefered
                                Region</label>
                            <select id="region" name="region"
                                class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                                <option value="Bahamas" selected="true">Bahamas</option>
                            </select>
                        </div>

                        <div class="col-span-6"><h3 class="font-poppins font-medium text-xl mt-4 uppercase text-blue">Prefered location</h3></div>


                        <div class="col-span-6">
                            <label for="location" class="block text-sm font-bold font-poppins">Prefered
                                location</label>
                            <select id="location" name="location"
                                class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                                <option value="1">Locker: Fusion Superplex | Carmichael</option>
                                <option value="2">Store: Prince Charles, Prince Charles Dr.</option>
                                <option value="3">Drop Off: San Salvador</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 py-3 text-right mt-4">

                    <a href="{{route('myprofile')}}" class="px-2 py-1 rounded bg-red text-white hover:scale-105 focus:outline-none transition duration-150 ease-in-out">Cancel</a>
                    <x-primary-button>
                        {{ __('Update Information') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

    </div>

    <x-slot name="script">
        <script>
            $(document).ready(function() {

                if ($("#type").val() == 2) {
                    $(".companydetails").removeClass('hidden');
                }

                $("#type").change(function(e) {
                    if ($("#type").val() == 2) {
                        $(".companydetails").removeClass('hidden');
                    } else {
                        $(".companydetails").toggleClass('hidden');
                    }
                });

                $("#tin").inputFilter(function(value) {
                    return /^\d*$/.test(value); // Allow digits only, using a RegExp
                }, "Only digits allowed");
            });
        </script>
    </x-slot>

</x-app-layout>
