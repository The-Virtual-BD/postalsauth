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
        <div class="grid grid-cols-2 sm:grid-cols-6 mb-4">
            <h3 class="font-poppins font-medium text-xl col-span-1">Personal Information</h3>
            <a href="{{route('editprofile')}}" class=" text-sm text-white inline-block col-span-1 sm:col-span-5" ><div class="bg-blue rounded-md w-6 h-6 flex justify-center items-center"><span class="iconify" data-icon="clarity:pencil-solid"></span></div></a>
        </div>

        <div class=" grid grid-cols-2 sm:grid-cols-6">
            <div class="col-span-1">
                <p>Name :</p>
                <p>Email :</p>
                <p>Phone :</p>
                <p>NIB Number :</p>
                <p>Date of Birth :</p>
                <p>Gender :</p>
                <p>Country of Birth :</p>
                <p>Island of Birth :</p>
                <p>Country of Citizenship :</p>
            </div>
            <div class="col-span-1 sm:col-span-5">

                <p>{{Auth::user()->firstname.' '.Auth::user()->lastname}}</p>
                <p>{{Auth::user()->email}}</p>
                <p>{{Auth::user()->phone}}</p>
                <p>{{Auth::user()->nib}}</p>
                <p>10 / 02 / 1991</p>
                <p>Male</p>
                <p>Bangladesh</p>
                <p>Bangladesh</p>
                <p>Bangladesh</p>
            </div>
        </div>
    </div>

</div>

</x-app-layout>
