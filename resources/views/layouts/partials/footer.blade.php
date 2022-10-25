{{-- Footer --}}
<footer class="">
    <div class="bg-gradient-to-tr from-mblue to-dblue bottom-0 py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4">
            <div class="flex justify-center md:justify-start mb-8">
                <x-application-logo class="w-24 h-24" />
            </div>
            <div class="text-center md:text-left mb-8 md:mb-0">
                <h3 class="font-poppins font-semibold text-lg text-white">Helpful Links</h3>
                <ul>
                    <li class="font-inter font-medium text-base leading-8 text-white">Sell online</li>
                    <li class="font-inter font-medium text-base leading-8 text-white">Features</li>
                    <li class="font-inter font-medium text-base leading-8 text-white">Examples</li>
                    <li class="font-inter font-medium text-base leading-8 text-white">Website editors</li>
                    <li class="font-inter font-medium text-base leading-8 text-white">Online retail</li>
                </ul>
            </div>
            <div class="text-center md:text-left mb-8 md:mb-0">
                <h3 class="font-poppins font-semibold text-lg text-white">Other Bahamas Sites</h3>
                <ul>
                    <li class="font-inter font-medium text-base leading-8 text-white">Postal Services</li>
                    <li class="font-inter font-medium text-base leading-8 text-white"><a href="">Mission & Vision</a></li>
                    <li class="font-inter font-medium text-base leading-8 text-white"><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="text-center md:text-left mb-8 md:mb-0">
                <h3 class="font-poppins font-semibold text-lg text-white">Other Pages</h3>
                <ul>
                    <li class="font-inter font-medium text-base leading-8 text-white"><a href="{{route('galaries')}}">Photo Gallery</a></li>
                    <li class="font-inter font-medium text-base leading-8 text-white"><a href="{{route('faq')}}">FAQ</a></li>
                    <li class="font-inter font-medium text-base leading-8 text-white"><a href="{{route('about')}}">About Us</a></li>
                    <li class="font-inter font-medium text-base leading-8 text-white"><a href="{{route('rates')}}">Rates</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center py-3">
        <p>&copy; 2022. All rights reserved.</p>
        <p>Powered By <a href="https://www.sunrise-bahamas.net/" class="text-blue" target="_blank">SunRise Communications</a> & <a href="https://www.thevirtualbd.com/" class="text-blue" target="_blank">The Virtual BD</a></p>
    </div>
</footer>
