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
            <h3 class="font-poppins font-medium text-xl mb-4">Personal Information</h3>
            <div class="col-span-5">
                <form action="#" method="POST">
                  @csrf
                  @method('PATCH')
                    <div class="">
                      <div class="grid grid-cols-6 gap-4">
                        <div class="col-span-6">
                            <label for="type" class="block text-sm font-medium text-gray-700">Account Type</label>
                            <select id="type" name="type" class=" block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                              <option value="1">Personal</option>
                              <option value="2">Business</option>
                            </select>
                        </div>
                        {{-- Company details --}}
                        <div class="col-span-6 sm:col-span-3 companydetails hidden">
                          <label for="companyname" class="block text-sm font-medium text-gray-700">Company name</label>
                          <input type="text" name="companyname" id="companyname" value="{{Auth::user()->profile->companyname ?? ''}}" class=" block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3 companydetails hidden">
                          <label for="tin" class="block text-sm font-medium text-gray-700">TIN number</label>
                          <input type="text" name="tin" id="tin" value="{{Auth::user()->profile->tin ?? ''}}" class=" block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>
                        {{-- Company details end--}}

                        <div class="col-span-6 sm:col-span-3">
                          <label for="firstname" class="block text-sm font-medium text-gray-700">First name</label>
                          <input type="text" name="firstname" id="firstname" value="{{Auth::user()->firstname}}" class=" block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="lastname" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="lastname" id="lastname" value="{{Auth::user()->lastname}}" class=" block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                          <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                          <input type="text" name="phone" id="phone" value="{{Auth::user()->phone}}" class=" block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                          <input type="email" name="email" id="email" value="{{Auth::user()->email}}" class=" block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                          <select id="country" name="country" class=" block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <x-country></x-country>
                          </select>
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                          <label for="island" class="block text-sm font-medium text-gray-700">Island</label>
                          <select id="island" name="island" class=" block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <x-island></x-island>
                          </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="about" class="block text-sm font-medium text-gray-700">Address</label>
                            <div class="mt-1">
                              <textarea id="about" name="about" rows="1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{Auth::user()->profile->address ?? ''}}</textarea>
                            </div>
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="house" class="block text-sm font-medium text-gray-700">Street/House No.</label>
                            <input type="text" name="house" id="house" value="{{Auth::user()->profile->house ?? ''}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>


                        <div class="col-span-6">
                            <label for="region" class="block text-sm font-medium text-gray-700">Prefered Region</label>
                            <select id="region" name="region" class=" block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                              <option value="Bahamas" selected="true">Bahamas</option>
                            </select>
                        </div>

                        <div class="col-span-6">
                            <label for="location" class="block text-sm font-medium text-gray-700">Prefered location</label>
                            <select id="location" name="location" class=" block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                              <option value="1">Locker: Fusion Superplex | Carmichael</option>
                              <option value="2">Store: Prince Charles, Prince Charles Dr.</option>
                              <option value="3">Drop Off: San Salvador</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <x-primary-button>
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <x-slot name="script">
        <script>
            $(document).ready(function() {

                if ($("#type").val() == 2) {
                    $(".companydetails").removeClass('hidden');
                }

                $("#type").change(function (e) {
                    if ($("#type").val() == 2) {
                        $(".companydetails").removeClass('hidden');
                    } else {
                        $(".companydetails").toggleClass('hidden');
                    }
                });

                $("#phone, #tin").inputFilter(function(value) {
                    return /^\d*$/.test(value);    // Allow digits only, using a RegExp
                },"Only digits allowed");
            });
        </script>
    </x-slot>

    </x-app-layout>
