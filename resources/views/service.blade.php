@extends('layouts.app')
@section('title')
Services
@endsection
@section('content')
<div class="bg-gradient-to-tr from-mblue to-dblue text-center py-9">
    <h1 class="font-poppins font-semibold text-4xl text-white">Services</h1>
</div>
<div class="py-9 bg-lblue ">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-4 sm:px-0">
        <div class="col-span-2">
            <h2 class="font-poppins font-semibold text-4xl text-black">Courier Services</h2>
            <p class="bg-blue inline-block p-1 rounded text-white mt-2 px-4">We deliver on right time</p>
            <p class="font-inter font-normal sm:text-2xl text-black mt-4">We deliver to homes and businesses. Use our delivery Calculator to get your delivery estimate or add delivery as you check out. We deliver to both residential and commercial locations. You can get an estimate of your delivery cost by using our delivery Calculator, or you can add delivery when you check out.</p>
            <button class="btn font-poppins justify-between items-center p-2.5 border border-blue rounded text-blue mt-9 hidden sm:flex hover:text-white hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue">
                Calculate <span class="iconify ml-3" data-icon="bi:arrow-right"></span>
            </button>
        </div>
        <div class="flex justify-center flex-col">
            <img src="{{asset('images/We Deliver Img.jpg')}}" alt="" class="w-full mt-4 sm:mt-0 drop-shadow-md">
        </div>
    </div>
</div>
<div class="py-9 ">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-4 sm:px-0">
        <div class="hidden sm:flex justify-center flex-col ">
            <img src="{{asset('images/We Deliver Img.jpg')}}" alt="" class="w-full mt-4 sm:mt-0 drop-shadow-md">
        </div>
        <div class="col-span-2">
            <h2 class="font-poppins font-semibold text-4xl text-black">Savings Bank & Services</h2>
            <p class="bg-blue inline-block p-1 rounded text-white mt-2 px-4">We deliver on right time</p>
            <p class="font-inter font-normal sm:text-2xl text-black mt-4">We deliver to homes and businesses. Use our delivery Calculator to get your delivery estimate or add delivery as you check out. We deliver to both residential and commercial locations. You can get an estimate of your delivery cost by using our delivery Calculator, or you can add delivery when you check out.</p>
            <button class="btn font-poppins justify-between items-center p-2.5 border border-blue rounded text-blue mt-9 hidden sm:flex hover:text-white hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue">
                Calculate <span class="iconify ml-3" data-icon="bi:arrow-right"></span>
            </button>
        </div>
        <div class="flex sm:hidden justify-center flex-col">
            <img src="{{asset('images/We Deliver Img.jpg')}}" alt="" class="w-full mt-4 sm:mt-0 drop-shadow-md">
        </div>

    </div>
</div>
<div class="py-9 bg-lblue ">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-4 sm:px-0">
        <div class="col-span-2">
            <h2 class="font-poppins font-semibold text-4xl text-black">Postal Stamps Services</h2>
            <p class="bg-blue inline-block p-1 rounded text-white mt-2 px-4">We deliver on right time</p>
            <p class="font-inter font-normal sm:text-2xl text-black mt-4">We deliver to homes and businesses. Use our delivery Calculator to get your delivery estimate or add delivery as you check out. We deliver to both residential and commercial locations. You can get an estimate of your delivery cost by using our delivery Calculator, or you can add delivery when you check out.</p>
            <button class="btn font-poppins justify-between items-center p-2.5 border border-blue rounded text-blue mt-9 hidden sm:flex hover:text-white hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue">
                Calculate <span class="iconify ml-3" data-icon="bi:arrow-right"></span>
            </button>
        </div>
        <div class="flex justify-center flex-col">
            <img src="{{asset('images/We Deliver Img.jpg')}}" alt="" class="w-full mt-4 sm:mt-0 drop-shadow-md">
        </div>
    </div>
</div>

@endsection
@section('script')

@endsection
