<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} |Under Development</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:ital,wght@0,600;1,500&display=swap"
        rel="stylesheet">
    {{-- @vite('resources/css/app.css') --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>

<body class="">
    <!-- component -->
    <div class="flex items-center justify-center h-screen bg-lblue">
        <div class="container">
            <div class="bg-white rounded-lg shadow-lg p-5 md:p-20 mx-2">
                <div class="text-center">
                    <div class="flex justify-center items-center"><img src="{{ asset('images/logo.png') }}"
                            alt="" srcset=""></div>

                    <h3 class='text-xl md:text-3xl my-10'>Our website is<br />
                        <strong>Under Development</strong>
                    </h3>
                </div>
                <div class="container mx-auto">
                    <div id="timer" class="flex justify-center items-center">
                        <div class="py-4 px-2 sm:px-4 mx-1 sm:mx-2 rounded bg-blue text-white" id="">
                            <p class="flex flex-col items-center"><span class="font-bold text-lg sm:text-4xl"
                                    id="days"></span><span class="">Days</span></p>
                        </div>
                        <div class="py-4 px-2 sm:px-4 mx-1 sm:mx-2 rounded bg-blue text-white" id="">
                            <p class="flex flex-col items-center"><span class="font-bold text-lg sm:text-4xl"
                                    id="hours"></span><span class="">Hours</span></p>
                        </div>
                        <div class="py-4 px-2 sm:px-4 mx-1 sm:mx-2 rounded bg-blue text-white" id="">
                            <p class="flex flex-col items-center"><span class="font-bold text-lg sm:text-4xl"
                                    id="minutes"></span><span class="">Minutes</span></p>
                        </div>
                        <div class="py-4 px-2 sm:px-4 mx-1 sm:mx-2 rounded bg-blue text-white" id="">
                            <p class="flex flex-col items-center"><span class="font-bold text-lg sm:text-4xl"
                                    id="seconds"></span><span class="">Seconds</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.script')
    <script>
        function makeTimer() {

            //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");
            var endTime = new Date("29 October 2022 9:56:00 GMT+01:00");
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

            if (hours < "10") {
                hours = "0" + hours;
            }
            if (minutes < "10") {
                minutes = "0" + minutes;
            }
            if (seconds < "10") {
                seconds = "0" + seconds;
            }

            $("#days").html(days);
            $("#hours").html(hours);
            $("#minutes").html(minutes);
            $("#seconds").html(seconds);

        }

        setInterval(function() {
            makeTimer();
        }, 1000);
    </script>
</body>

</html>
