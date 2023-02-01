<x-app-layout>
    <section class="bg-gradient-to-tr from-mblue to-dblue py-9">
        <div class="container mx-auto text-center">
            <h1 class="font-poppins font-semibold text-4xl text-white">Leave a message</h1>
        </div>
        <div class="container mx-auto h-full text-center mt-9">
            <div class="sm:w-3/5 mx-auto">
                <form class="flex flex-col items-center px-4 sm:px-0" id="contactform">
                    @csrf

                    <input type="text" name="name" id="name" class="mb-4 rounded border-none py-2 px-2.5 sm:w-full" placeholder="Name">
                    <input type="email" name="email" id="email" class="mb-4 rounded border-none py-2 px-2.5 sm:w-full" placeholder="Email">
                    <input type="text" name="phone" id="phone" class="mb-4 rounded border-none py-2 px-2.5 sm:w-full" placeholder="Phone">
                    <textarea name="message" id="message" rows="5" class="mb-4 rounded border-none py-2 px-2.5 sm:w-full" placeholder="Message"></textarea>
                    <button type="submit" class="font-poppins text-lg font-medium bg-white py-4 px-9 rounded-sm  text-center text-blue btn hover:scale-110">Submit</button>
                </form>
            </div>
            <p id="contmsg" class="text-white mt-2"></p>
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
                <p class="text-center mt-8 font-inter font-normal text-lg">Charlotte House, Charlotte Street <br>P.O.
                    Box N275 <br> Nassau, N.P., The Bahamas</p>
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


    <x-slot name="script">
        <script>

            // Contuctus
            $('form#contactform').submit(function(e) {
                e.preventDefault();
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var message = $('#message').val();
                $.ajax({
                    method: 'POST',
                    url: BASE_URL + 'contactUs/send',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        name,
                        phone,
                        email,
                        message
                    },
                    beforeSend: function () {
                        console.log('Log');
                     },
                    success: function(response) {
                        console.log(response.message);
                        if (response.status == "success") {
                            $('#contmsg').html(response.message);
                            $('form#contactform').trigger("reset");
                            setTimeout(function() {
                                $('#contmsg').html('');
                            }, 5000);
                        } else if (response.status == "error") {
                            $('#contmsg').html(response.message);
                            setTimeout(function() {
                                $('#contmsg').html('');
                            }, 5000);
                        }
                    },
                    error: function (request, status, error) {
                        console.log(error);
                    }
                });
            });
        </script>
    </x-slot>
</x-app-layout>
