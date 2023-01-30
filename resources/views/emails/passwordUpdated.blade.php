<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Poppins:wght@300;400;500;700&display=swap');

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        html,
        body {
            background: #eeeeee;
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
        }

        img {
            max-width: 100%;
        }

        /* This is what it makes reponsive. Double check before you use it! */
        @media only screen and (max-width: 480px) {
            table tr td {
                width: 100% !important;
                float: left;
            }
        }

        .bg-grd {

            background: radial-gradient(119.76% 198.28% at 102.53% -5.77%, #4361EE 0%, #0096C7 100%);
        }

        .btn {
            transition: all 300ms;
            padding: 0.5rem 1rem;
            --tw-border-opacity: 1;
            border-color: rgb(5 130 202);
            --tw-text-opacity: 1;
            color: #fff;
            border-width: 1px;
            border-radius: 0.25rem;
            width: 10rem;
            -webkit-appearance: button;
            cursor: pointer;
            text-transform: none;
        }

        .btn:hover {

            color: rgb(5 130 202);
            background-color: transparent;
            background: transparent;


        }


        .font-bold {
            font-weight: 700;
        }

        .font-normal {
            font-weight: 400;
        }

        .inline-flex {
            display: inline-flex !important;
        }

        .items-center {
            align-items: center !important;
        }

        .p-1 {
            padding: 0.25rem
                /* 4px */
                 !important;
        }


        .text-sm {
            font-size: 0.875rem
                /* 14px */
                 !important;
            line-height: 1.25rem
                /* 20px */
                 !important;
        }



        .uppercase {
            text-transform: uppercase !important;
        }

        .w-full {
            width: 100% !important;
        }

        /* flex */
        .flex {
            display: flex;
        }

        .justify-center {
            justify-content: center;
        }

        .items-center {
            align-items: center;
        }

        /* flex end */
        .text-center {
            text-align: center;
        }


        .text-blue {
            color: #217cda;
        }

        .text-white {
            color: #fff;
        }

        .text-lg {
            font-size: 1.125rem
                /* 18px */
                 !important;
            line-height: 1.75rem
                /* 28px */
                 !important;
        }

        .p-5 {
            padding: 1.25rem
                /* 20px */
                 !important;
        }

        .mt-4 {
            margin-top: 1rem
                /* 16px */
                 !important;
        }

        .mt-12 {
            margin-top: 3rem
                /* 48px */
                 !important;
        }

        .my-12 {
            margin-top: 3rem
                /* 48px */
                 !important;
            margin-bottom: 3rem
                /* 48px */
                 !important;
        }
        hr{
            border: 1px solid rgba(128, 128, 128, 0.1);
        }
    </style>
</head>

<body style="background: #eeeeee; padding: 10px; font-family: 'Open Sans', sans-serif, Helvetica, Arial;">
    <center>
        <!-- ** Table begins here
    ----------------------------------->
        <!-- Set table width to fixed width for Outlook(Outlook does not support max-width) -->
        <table width="100%" cellpadding="0" cellspacing="0" bgcolor="FFFFFF"
            style=" max-width: 600px !important; margin: 0 auto; background-color:transparent;">
            <tr>
                <td style="padding: 20px; text-align: center;">
                    <img src="{{ asset('images/logo.png') }}" alt="" srcset="" width="96px">
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: center;" class="bg-grd">
                    <h1 style="color: #ffffff" class="text-white font-raleway uppercase font-bold">Password Changed !</h1>
                </td>
            </tr>

            <tr class="" style="background-color: #ffffff;">
                <td class="p-5">
                    {{-- <p style="font-size:30px; margin: 5px;text-align:center">{{ $newsletter['title'] }}</p> --}}
                    <p class="font-raleway leading-6 text-center">
                        {{-- {{$msg}} --}}Your password has been changed.
                        <hr>
                        <p class="text-center">You can access in your account from
                            any device by going to</p>
                        <p class="text-center font-bold text-blue">https://postofficebahamas.com</p>
                    </p>
                    <center class="my-12">
                        <a href="https://postofficebahamas.com" style="color: #fff; text-decoration: none;"
                            target="_blank">
                            <button class="btn bg-grd" type="submit">
                                Visit Site
                            </button>
                        </a>
                    </center>
                </td>
            </tr>
            <tr class="bg-adam-light">
                <td>
                    <p style="text-align: center; color: #666666; font-size: 12px; margin: 20px 0;">
                        Copyright © {{ date('Y') }}. All rights reserved.<br />

                        Powered By <a href="https://www.sunrise-bahamas.net/" target="_blank" class="text-blue">SunRise
                            Communications</a> & <a href="https://thevirtualbd.com/" target="_blank"
                            class="text-blue">The Virtual BD</a>

                    </p>
                </td>
            </tr>

        </table>

    </center>
</body>

</html>
