@extends('layouts.app')
@section('title')
Rates
@endsection
@section('content')
<div class="bg-gradient-to-tr from-mblue to-dblue text-center py-9">
    <h1 class="font-poppins font-semibold text-4xl text-white">Rates</h1>
</div>
<div class="sm:container mx-auto py-9 px-2 sm:px-0">
    <div class="border border-blue rounded-sm">
        <div class="bg-gradient-to-tr from-mblue to-dblue text-white rounded-sm px-5 py-4 text-center font-bold">
            <h2>Box Rental</h2>
        </div>
        <table class="w-full table-auto font-inter">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-2 sm:px-6 text-left">Service</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Size</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Price</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left" rowspan="3">
                        Annul Private Box Rental
                    </td>
                    <td class="border border-blue text-center">Small</td>
                    <td class="border border-blue text-center">$30.00</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Medium</td>
                    <td class="border border-blue text-center">$50.00</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Large</td>
                    <td class="border border-blue text-center">$80.00</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="border border-blue rounded-sm mt-9">
        <div class="bg-gradient-to-tr from-mblue to-dblue text-white rounded-sm px-5 py-4 text-center font-bold">
            <h2>Sale Of Stamps</h2>
        </div>
        <table class="w-full table-auto font-inter">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-2 sm:px-6 text-left">Service</th>
                    <th class="py-3 px-2 sm:px-6 text-center" colspan="16">Price</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left" rowspan="3">
                        Stamp sales denominations
                    </td>
                    <td class="border border-blue text-center">.05c,.10c,15c,.20c<br/>.25c,.30c,.40c,<br/>.50c,.60c,.65c,.70c</td>
                    {{-- <td class="border border-blue text-center">.10c</td>
                    <td class="border border-blue text-center">.15c</td>
                    <td class="border border-blue text-center">.20c</td>
                    <td class="border border-blue text-center">.25c</td>
                    <td class="border border-blue text-center">.30c</td>
                    <td class="border border-blue text-center">.40c</td>
                    <td class="border border-blue text-center">.50c</td>
                    <td class="border border-blue text-center">.60c</td>
                    <td class="border border-blue text-center">.65c</td>
                    <td class="border border-blue text-center">.70c</td>
                    <td class="border border-blue text-center">.80c</td>
                    <td class="border border-blue text-center">1$</td>
                    <td class="border border-blue text-center">2$</td>
                    <td class="border border-blue text-center">5$</td>
                    <td class="border border-blue text-center">10$</td> --}}
                </tr>
            </tbody>
        </table>
    </div>
    <div class="border border-blue rounded-sm mt-9">
        <div class="bg-gradient-to-tr from-mblue to-dblue text-white rounded-sm px-5 py-4  text-center font-bold">
            <h2>Letter Delivery</h2>
        </div>
        <table class="w-full table-auto font-inter">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-2 sm:px-6 text-left">Service</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Location</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Price</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left" rowspan="2">
                        Registered Letter Delivery
                    </td>
                    <td class="border border-blue text-center">Domestic</td>
                    <td class="border border-blue text-center">.80c</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">International</td>
                    <td class="border border-blue text-center">1.50$</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="border border-blue rounded-sm mt-9">
        <div class="bg-gradient-to-tr from-mblue to-dblue text-white rounded-sm px-5 py-4  text-center font-bold">
            <h2>Parcel Delivery</h2>
        </div>
        <table class="w-full table-auto font-inter">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-2 sm:px-6 text-left">Service</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Country</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Weight</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Price</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left" rowspan="12">
                        Air parcel post
                    </td>
                    <td class="border border-blue text-center" rowspan="4">Canada</td>
                    <td class="border border-blue text-center">Up to 2 lbs.</td>
                    <td class="border border-blue text-center">15.40$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 2 to 5 lbs.</td>
                    <td class="border border-blue text-center">20.50$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 5 to 11 lbs</td>
                    <td class="border border-blue text-center">35.70$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 11 to 44 lbs</td>
                    <td class="border border-blue text-center">61.10$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center" rowspan="4">UK</td>
                    <td class="border border-blue text-center">Up to 2 lbs.</td>
                    <td class="border border-blue text-center">21.80$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 2 to 5 lbs.</td>
                    <td class="border border-blue text-center">30.30$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 5 to 11 lbs.</td>
                    <td class="border border-blue text-center">55.70$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 11 to 44 lbs.</td>
                    <td class="border border-blue text-center">98.00$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center" rowspan="4">USA</td>
                    <td class="border border-blue text-center">Up to 2 lbs.</td>
                    <td class="border border-blue text-center">13.20$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 2 to 5 lbs.</td>
                    <td class="border border-blue text-center">16.15$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 5 to 11 lbs.</td>
                    <td class="border border-blue text-center">24.80$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 11 to 44 lbs.</td>
                    <td class="border border-blue text-center">39.30$</td>
                </tr>
            </tbody>
        </table>
        <table class="w-full table-auto font-inter">
            <thead class="">
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-2 sm:px-6 text-left">Service</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Country</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Weight</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Price</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left" rowspan="4">
                        Surface postal
                    </td>
                    <td class="border border-blue text-center" rowspan="4">USA</td>
                    <td class="border border-blue text-center">Up to 2 lbs.</td>
                    <td class="border border-blue text-center">8.45$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 2 to 5 lbs.</td>
                    <td class="border border-blue text-center">17.10$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 5 to 11 lbs.</td>
                    <td class="border border-blue text-center">30.90$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 11 to 44 lbs.</td>
                    <td class="border border-blue text-center">53.80$</td>
                </tr>
            </tbody>
        </table>
        <table class="w-full table-auto font-inter">
            <thead class="">
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-2 sm:px-6 text-left">Service</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Country</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Weight</th>
                    <th class="py-3 px-2 sm:px-6 text-center">Price</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left" rowspan="5">
                        Small packets
                    </td>
                    <td class="border border-blue text-center" rowspan="5">Overseas</td>
                    <td class="border border-blue text-center">Up to 4 oz.</td>
                    <td class="border border-blue text-center">0.50$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 4 oz. up to 8 oz.</td>
                    <td class="border border-blue text-center">1.00$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 8 oz. up to 1 lb.</td>
                    <td class="border border-blue text-center">1.75$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 1 lb to 2 lbs.</td>
                    <td class="border border-blue text-center">3.00$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-center">Over 2 lbs to 4 lbs.</td>
                    <td class="border border-blue text-center">4.20$</td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue text-left p-4" colspan="4">Note: *Incoming parcels are assessed a processing fee of 1.50$</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="border border-blue rounded-sm mt-9">
        <div class="bg-gradient-to-tr from-mblue to-dblue text-white rounded-sm px-5 py-4  text-center font-bold">
            <h2>Others</h2>
        </div>
        <table class="w-full table-auto font-inter">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-2 sm:px-6 text-left">Service</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left">
                        1. General Delivery (for customer without postal boxes)
                    </td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left">
                        2. EMS (Express Mail Service) $16.50
                    </td>
                </tr>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left">
                        3. Pre-paid Postage
                    </td>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left">
                        4. Bulk Mailing Service
                    </td>
                </tr>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left">
                        5. Terminal Dues (ie receipts of payment for foreing mail delivery)
                    </td>
                </tr>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left">
                        6. Philatelic materials
                    </td>
                </tr>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left">
                        7. Postal money order and telgraph sales
                    </td>
                </tr>
                </tr>
                <tr class="border border-blue">
                    <td class="border border-blue py-3 px-2 sm:px-6 text-left">
                        8. Personal saving deposit accounts
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</div>


@endsection
@section('script')

@endsection
