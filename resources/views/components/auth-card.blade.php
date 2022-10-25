
<div class="bg-night">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 sm:py-9">
        <div class="hidden sm:block bg-auth-image max-h-[750px] overflow-hidden">
            <img src="{{asset('images/authbg.png')}}" alt="" class="w-full">
        </div>
        <div class="bg-gradient-to-tr from-mblue to-dblue flex justify-center items-center px-4 sm:px-0 py-9 sm:py-0">
            {{ $slot }}
        </div>
    </div>
</div>
