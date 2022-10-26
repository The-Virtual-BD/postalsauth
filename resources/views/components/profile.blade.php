<div  {{ $attributes}}>
    <div class="mx-6">
        <img src="{{asset('images/avatarbig.png')}}" alt="" class="w-24 h-auto">
    </div>
    <div class="font-inter">
        <h3 class="font-poppins font-medium text-xl">{{Auth::user()->firstname.' '.Auth::user()->lastname}}</h3>
        <p>Phone: {{Auth::user()->phone}}</p>
        <p>Email: {{Auth::user()->email}}</p>
        <p class="text-blue font-bold">Suite: #{{Auth::user()->suite}}</p>
    </div>
</div>
