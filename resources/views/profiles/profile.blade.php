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
                <button type="button" class="py-2 px-5 text-sm font-medium bg-lblue hover:text-white hover:bg-blue">
                    Account Documents
                </button>
                {{-- <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            Settings
            </button> --}}
            </div>
        </div>
        <div class="container mx-auto bg-white rounded-md p-4 mt-6 shadow">

            <div class="grid sm:grid-cols-6">
                {{-- Contact Informations --}}
                <div class="col-span-2">
                    <div class="grid grid-cols-2 mb-4">
                        <h3 class="font-poppins font-medium text-xl">Contact Information</h3>
                        <a href="{{ route('editprofile') }}" class=" text-sm text-white inline-block">
                            <div class="bg-blue rounded-md w-6 h-6 flex justify-center items-center"><span class="iconify"
                                    data-icon="clarity:pencil-solid"></span></div>
                        </a>
                    </div>
                    <div class="my-2">
                        <p class="text-base text-blue uppercase font-bold tracking-widest">Type of account</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Type of account :</p>
                        <p>Business</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Name :</p>
                        <p>{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Email :</p>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold ">Phone :</p>
                        <p>{{ Auth::user()->phone }}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold ">Country :</p>
                        <p>Bahamas</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold ">Island :</p>
                        <p>Nasau</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold ">STREET/ HOUSE NO :</p>
                        <p>112/2</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold ">Address :</p>
                        <p>121/B North Island, Nasau, Bahamas.</p>
                    </div>
                    <div class="mt-4 mb-2">
                        <p class="text-base text-blue uppercase font-bold tracking-widest">Prefered Region</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Prefered Region :</p>
                        <p>Bahamas</p>
                    </div>

                    <div class="mt-4 mb-2">
                        <p class="text-base text-blue uppercase font-bold tracking-widest">Prefered location</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Prefered location :</p>
                        <p>Store: Golden Gates, Carmichael Rd.</p>
                    </div>

                </div>

                {{-- Business Informations --}}
                <div class="col-span-2">
                    <div class="grid grid-cols-2 mb-4">
                        &nbsp;
                    </div>
                    <div class="my-2">
                        <p class="text-base text-blue uppercase font-bold tracking-widest">Business Information</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Company Name :</p>
                        <p>The Virtual BD</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">TIN No :</p>
                        <p>25658986465</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>
