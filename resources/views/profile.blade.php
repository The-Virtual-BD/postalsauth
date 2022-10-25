@extends('layouts.app')
@section('title')
Rates
@endsection
@section('content')
<div class="bg-lblue py-6">
    <div class="container mx-auto  ">
        <div class="rounded-t bg-white p-4 flex justify-start items-center">
            <div class="mx-6">
                <img src="{{asset('images/avatarbig.png')}}" alt="" class="w-24 h-auto">
            </div>
            <div class="">
                <h3 class="font-poppins font-medium text-xl">Ishtiuq Ahmed Chowdhury</h3>
                <p>Phone: +880 1674 668 544</p>
                <p>Email: ahmedishtiuq@gmail.com</p>
                <p>Suite: #28794</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto bg-white border-t border-lblue rounded-b-md">
        <div class=" inline-flex shadow-sm" role="group">
            <button type="button" class="py-2 px-5 text-sm font-medium text-white bg-blue rounded-bl-md">
            Profile
            </button>
            {{-- <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            Settings
            </button> --}}
        </div>
    </div>
    <div class="container mx-auto bg-white rounded-md p-4 mt-6">
        <div class="grid grid-cols-6 mb-4">
            <h3 class="font-poppins font-medium text-xl">Personal Information</h3>
                <a href="#" class="  text-sm text-white inline-block" ><div class="bg-blue rounded-md w-6 h-6 flex justify-center items-center"><span class="iconify" data-icon="clarity:pencil-solid"></span></div></a>
        </div>

        <div class=" grid grid-cols-6">
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
            <div class="col-span-5">

                <p>Ishtiuq Ahmed Chowdhury</p>
                <p>ahmedishtiuq@gmail.com</p>
                <p>+880 1674 668544</p>
                <p>123456789</p>
                <p>10 / 02 / 1991</p>
                <p>Male</p>
                <p>Bangladesh</p>
                <p>Bangladesh</p>
                <p>Bangladesh</p>
            </div>
        </div>
    </div>

</div>


@endsection
@section('script')

@endsection
