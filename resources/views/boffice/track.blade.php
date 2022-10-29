<x-app-layout>
    <div class="py-6">
        <div class="container mx-auto p-4 sm:p-0">
            <h2 class="uppercase font-bold text-base">tracking number: #854462</h2>
        </div>
        <div class="container mx-auto bg-white rounded-md mt-6 shadow ">
            <div class="grid sm:grid-cols-2 gap-4">
                <div class="flex justify-between gap-4 p-4">
                    <img src="{{ asset('images/package.png') }}" alt="">
                    <div class="">
                        <p class="font-bold text-base mb-4">ProductZ</p>
                        <p class="text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>

                </div>
                <div class="text-sm p-4">
                    <p class="font-bold text-base mb-4">ProductZ</p>
                    <p>West Bay Street <br> P.O. Box CB-10990 <br> Nassau, N.P., The Bahamas</p>
                </div>
            </div>

            <hr class="text-lgray">
            <div class="p-4">
                <p>Preparing to filght on October 29, 2022</p>

                <div class="w-full bg-gray rounded-full h-2.5 dark:bg-gray mt-8 mb-4">
                    <div class="bg-blue h-2.5 rounded-full" style="width: 45%"></div>
                </div>
                <div class="grid grid-cols-4">
                    <div class="">
                        <p class="text-poppins font-bold text-blue text-sm">Listed</p>
                        <p class="text-sm">Order placed on October 29, 2022</p>
                    </div>
                    <div class="">
                        <p class="text-poppins font-bold text-blue text-sm">Invoiced</p>
                        <p class="text-sm">Order placed on October 29, 2022</p>
                    </div>
                    <div class="">
                        <p class="text-poppins font-bold text-blue text-sm">Invoice Pending</p>
                    </div>
                    <div class="">
                        <p class="text-poppins font-bold text-blue text-sm">Delivered</p>
                    </div>

                </div>

            </div>
        </div>
    </div>





    <x-slot name="script">
        <script>
            $(document).ready(function() {});
        </script>
    </x-slot>
</x-app-layout>
