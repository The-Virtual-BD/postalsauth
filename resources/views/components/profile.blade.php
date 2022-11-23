<div  {{ $attributes}}>
    <div class="mx-6">
        <img src="{{ Auth::user()->profile->photo ? asset(Auth::user()->profile->photo) : asset('images/avatarbig.png') }}" alt="" class="w-24 h-24 rounded-full">
    </div>
    <div class="font-inter">
        <h3 class="font-poppins font-medium text-xl">{{Auth::user()->firstname.' '.Auth::user()->lastname}}</h3>
        <p>NIB: {{Auth::user()->nib}}</p>
        <p>Email: {{Auth::user()->email}}</p>
        <p class="text-blue font-bold">Suite: #{{Auth::user()->suite}}</p>
    </div>
</div>
