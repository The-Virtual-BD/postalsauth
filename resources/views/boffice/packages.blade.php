<x-app-layout>
    <div class="py-6">
        <div class="container mx-auto ">
            <x-profile class="rounded bg-white p-4 flex justify-start items-center shadow"></x-profile>
        </div>
        <div class="tabs container mx-auto border-none mt-4">

            <ul class="inline-flex shadow-sm font-inter text-lg" id="tabs-nav">
                <li class="py-2 px-5 text-sm font-medium text-blue bg-lblue  hover:text-white hover:bg-blue"><a
                        href="#standbyTable">Standby</a></li>
                <li class="py-2 px-5 text-sm font-medium text-blue bg-lblue hover:text-white hover:bg-blue"><a
                        href="#invoicedTable">Invoiced</a></li>
                <li class="py-2 px-5 text-sm font-medium text-blue bg-lblue hover:text-white hover:bg-blue"><a
                        href="#pendinginvoiceTable">Invoice Pending </a>
                <li class="py-2 px-5 text-sm font-medium text-blue bg-lblue hover:text-white hover:bg-blue"><a
                        href="#bookingTable">Booking</a></li>
                <li class="py-2 px-5 text-sm font-medium text-blue bg-lblue hover:text-white hover:bg-blue"><a
                        href="#cancledTable">Canceled</a></li>
            </ul>
            <div class="container mx-auto mt-6" id="tabs-content">
                <table id="standbyTable" class="tab-content text-left">
                    <thead class="uppercase bg-lblue font-poppins tracking-wider text-xs">
                        <tr>
                            <th>AWB</th>
                            <th>Commodity</th>
                            <th>image</th>
                            <th>tracking number</th>
                            <th>location</th>
                            <th>Return</th>
                            <th>receipt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                        </tr>
                    </tbody>

                </table>

                <table id="invoicedTable" class="tab-content text-left">
                    <thead class="uppercase bg-lblue font-poppins tracking-wider text-xs">
                        <tr>
                            <th>AWB</th>
                            <th>Commodity</th>
                            <th>image</th>
                            <th>tracking number</th>
                            <th>location</th>
                            <th>Receipt</th>
                            <th>Invoice</th>
                            <th>Amt Due</th>
                            <th>package</th>
                            <th>delivery</th>
                            <th>pin code</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td>100$</td>
                            <td>50</td>
                            <td>NAS</td>
                            <td>98766</td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td>100$</td>
                            <td>50</td>
                            <td>NAS</td>
                            <td>98766</td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td>100$</td>
                            <td>50</td>
                            <td>NAS</td>
                            <td>98766</td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td>100$</td>
                            <td>50</td>
                            <td>NAS</td>
                            <td>98766</td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td>100$</td>
                            <td>50</td>
                            <td>NAS</td>
                            <td>98766</td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td>100$</td>
                            <td>50</td>
                            <td>NAS</td>
                            <td>98766</td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td>100$</td>
                            <td>50</td>
                            <td>NAS</td>
                            <td>98766</td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td>100$</td>
                            <td>50</td>
                            <td>NAS</td>
                            <td>98766</td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td>100$</td>
                            <td>50</td>
                            <td>NAS</td>
                            <td>98766</td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td>100$</td>
                            <td>50</td>
                            <td>NAS</td>
                            <td>98766</td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>

                    </tbody>

                </table>

                <table id="pendinginvoiceTable" class="tab-content text-left">
                    <thead class="uppercase bg-lblue font-poppins tracking-wider text-xs">
                        <tr>
                            <th>AWB</th>
                            <th>Commodity</th>
                            <th>image</th>
                            <th>tracking number</th>
                            <th>location</th>
                            <th>Return</th>
                            <th>Receipt</th>
                            <th>Invoice</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td>NAS</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                    </tbody>

                </table>

                <table id="bookingTable" class="tab-content text-left">
                    <thead class="uppercase bg-lblue font-poppins tracking-wider text-xs">
                        <tr>
                            <th>AWB</th>
                            <th>Commodity</th>
                            <th>tracking number</th>
                            <th>Return</th>
                            <th>Receipt</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                    </tbody>

                </table>

                <table id="cancledTable" class="tab-content text-left">
                    <thead class="uppercase bg-lblue font-poppins tracking-wider text-xs">
                        <tr>
                            <th>AWB</th>
                            <th>Commodity</th>
                            <th>image</th>
                            <th>tracking number</th>
                            <th>Return</th>
                            <th>Receipt</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                        <tr>
                            <td>203222</td>
                            <td>ProductZ</td>
                            <td><img src="{{ asset('images/avatar.png') }}" alt="" class="w-4"></td>
                            <td>854462</td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-upload"></span> Upload</button></td>
                            <td><button class="flex justify-center items-center text-blue font-semibold "><span
                                        class="iconify" data-icon="bxs:cloud-download"></span>Download</button></td>
                            <td><a href="{{ route('track') }}" class="flex justify-center items-center text-blue font-semibold ">Track</a></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

    </div>


    <x-slot name="script">
        <script>
            $('#standbyTable').DataTable({
                searching: false,
                paging: false,
                info: false
            });
            $('#invoicedTable').DataTable({
                searching: false,
                paging: false,
                info: false
            });
            $('#pendinginvoiceTable').DataTable({
                searching: false,
                paging: false,
                info: false
            });
            $('#bookingTable').DataTable({
                searching: false,
                paging: false,
                info: false
            });
            $('#cancledTable').DataTable({
                searching: false,
                paging: false,
                info: false
            });



            $('#standbyTable tbody tr:odd').css('background-color', 'rgb(233 247 255)');
            $('#invoicedTable tbody tr:odd').css('background-color', 'rgb(233 247 255)');
            $('#pendinginvoiceTable tbody tr:odd').css('background-color', 'rgb(233 247 255)');
            $('#bookingTable tbody tr:odd').css('background-color', 'rgb(233 247 255)');
            $('#cancledTable tbody tr:odd').css('background-color', 'rgb(233 247 255)');

            $('th').css('border-bottom', 'none');
            $('table.dataTable.no-footer').css('border-bottom', 'none');
            // Show the first tab and hide the rest
            $('#tabs-nav li:first-child').removeClass('text-blue bg-lblue').addClass('text-white bg-blue');
            $('.tab-content').hide();
            $('.tab-content:first').show();

            // Click function
            $('#tabs-nav li').click(function() {
                $('#tabs-nav li').removeClass('text-white bg-blue').addClass('text-blue bg-lblue');
                $(this).removeClass('text-blue bg-lblue').addClass('text-white bg-blue');
                $('.tab-content').hide();

                var activeTab = $(this).find('a').attr('href');
                $(activeTab).fadeIn();
                return false;
            });
        </script>
    </x-slot>
</x-app-layout>
