<x-app-layout>
<div class="py-6">
    <div class="container mx-auto ">
        <x-profile class="rounded bg-white p-4 flex justify-start items-center shadow"></x-profile>
    </div>

    <div class="container mx-auto bg-white mt-4">
        <div class=" inline-flex shadow-sm" role="group">
            <button type="button" class="py-2 px-5 text-sm font-medium text-white bg-blue">
                Standby
            </button>
            <button type="button" class="py-2 px-5 text-sm font-medium text-blue bg-lblue">
                Invoiced
            </button>
            <button type="button" class="py-2 px-5 text-sm font-medium text-blue bg-lblue">
                Invoice Pending
            </button>
            <button type="button" class="py-2 px-5 text-sm font-medium text-blue bg-lblue">
                Booking
            </button>
            <button type="button" class="py-2 px-5 text-sm font-medium text-blue bg-lblue">
                Canceled
            </button>
            {{-- <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            Settings
            </button> --}}
        </div>
    </div>
    <div class="container mx-auto bg-white rounded-md p-4 mt-6 shadow">
        <table id="packageTable" class="display text-center">
            <thead>
                <tr>
                    <th>AWB</th>
                    <th>Commodity</th>
                    <th>image</th>
                    <th>tracking number</th>
                    <th>location</th>
                    <th>Return</th>
                    <th>receipt</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>203222</td>
                    <td>ProductZ</td>
                    <td><img src="{{asset('images/avatar.png')}}" alt="" class="w-4"></td>
                    <td>854462</td>
                    <td>NAS</td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                </tr>
                <tr>
                    <td>203222</td>
                    <td>ProductZ</td>
                    <td><img src="{{asset('images/avatar.png')}}" alt="" class="w-4"></td>
                    <td>854462</td>
                    <td>NAS</td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                </tr>
                <tr>
                    <td>203222</td>
                    <td>ProductZ</td>
                    <td><img src="{{asset('images/avatar.png')}}" alt="" class="w-4"></td>
                    <td>854462</td>
                    <td>NAS</td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                </tr>
                <tr>
                    <td>203222</td>
                    <td>ProductZ</td>
                    <td><img src="{{asset('images/avatar.png')}}" alt="" class="w-4"></td>
                    <td>854462</td>
                    <td>NAS</td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                </tr>
                <tr>
                    <td>203222</td>
                    <td>ProductZ</td>
                    <td><img src="{{asset('images/avatar.png')}}" alt="" class="w-4"></td>
                    <td>854462</td>
                    <td>NAS</td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                </tr>
                <tr>
                    <td>203222</td>
                    <td>ProductZ</td>
                    <td><img src="{{asset('images/avatar.png')}}" alt="" class="w-4"></td>
                    <td>854462</td>
                    <td>NAS</td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                </tr>
                <tr>
                    <td>203222</td>
                    <td>ProductZ</td>
                    <td><img src="{{asset('images/avatar.png')}}" alt="" class="w-4"></td>
                    <td>854462</td>
                    <td>NAS</td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                    <td><button class="flex justify-center items-center text-blue font-semibold "><span class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                </tr>
            </tbody>

        </table>

    </div>

</div>


<x-slot name="script">

    <script>
        $('#packageTable').DataTable({
            searching: false,
            paging: false,
            info: false
        });

    </script>
</x-slot>
</x-app-layout>
