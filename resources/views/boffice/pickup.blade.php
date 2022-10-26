<x-app-layout>
<div class="py-6">
    <div class="container mx-auto ">
        <x-profile class="rounded bg-white p-4 flex justify-start items-center shadow"></x-profile>
    </div>

{{-- ===================================== --}}
<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
        </li>
    </ul>
</div>
<div id="myTabContent">
    <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
</div>

{{-- ================================ --}}
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
