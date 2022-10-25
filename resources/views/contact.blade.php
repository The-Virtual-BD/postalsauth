<x-app-layout>
<section class="bg-gradient-to-tr from-mblue to-dblue py-9">
    <div class="container mx-auto text-center">
        <h1 class="font-poppins font-semibold text-4xl text-white">Leave a message</h1>
    </div>
    <div class="container mx-auto h-full text-center mt-9">
        <div class="sm:w-3/5 mx-auto">
            <form action="" method="post" class="flex flex-col items-center px-4 sm:px-0" id="contactform">
                <input type="text" name="" id="" class="mb-4 rounded-sm py-2 px-2.5 sm:w-full" placeholder="Name">
                <input type="email" name="" id="" class="mb-4 rounded-sm py-2 px-2.5 sm:w-full" placeholder="Email">
                <textarea name="" id="" rows="5" class="mb-4 rounded-sm py-2 px-2.5 sm:w-full" placeholder="Message"></textarea>
                <button type="submit" class="font-poppins text-lg font-medium bg-white py-4 px-9 rounded-sm  text-center text-blue btn hover:scale-110">Submit</button>
            </form>
        </div>
    </div>
</section>

<div class="bg-lblue py-9">
    <div class="container mx-auto text-center">
        <h2 class="font-poppins font-semibold text-4xl text-black">Contact Us</h2>
        <p class="bg-blue inline-block p-1 rounded text-white mt-2">Visit our office location</p>
    </div>
    <div class="container mx-auto grid sm:grid-cols-3 sm:gap-5 grid-cols-1 mt-8 px-4 sm:px-0">
        <div class="bg-white mb-4 sm:mb-0 drop-shadow-md rounded-sm py-10 px-16 flex flex-col items-center">
            <span class="iconify text-6xl text-blue" data-icon="carbon:location-filled"></span>
            <p class="text-center mt-8 font-inter font-normal text-lg">Charlotte House, Charlotte Street <br>P.O. Box N275 <br> Nassau, N.P., The Bahamas</p>
        </div>
        <div class="bg-white mb-4 sm:mb-0 drop-shadow-md rounded-sm py-10 px-16 flex flex-col items-center">
            <span class="iconify text-6xl text-blue" data-icon="eva:email-fill"></span>
            <p class="text-center mt-8 font-inter font-normal text-lg">info@postbahamas.com</p>
        </div>
        <div class="bg-white mb-4 sm:mb-0 drop-shadow-md rounded-sm py-10 px-16 flex flex-col items-center">
            <span class="iconify text-6xl text-blue" data-icon="carbon:phone-filled"></span>
            <p class="text-center mt-8 font-inter font-normal text-lg">302-5800<br>302-5822</p>
        </div>
    </div>
</div>
</x-app-layout>
