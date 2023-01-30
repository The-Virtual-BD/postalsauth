<x-app-layout>
    <div class=" sm:py-9">
        <div class="sm:grid sm:grid-cols-3 container mx-auto sm:gap-5">
            <div class="shadow-md col-span-2 py-9 bg-white px-12">
                @php
                    $newDate = date('M-d-Y', strtotime($job->created_at));
                @endphp
                <p class="font-inter font-thin text-base text-black">{{ $newDate }}</p>
                <h1 class="font-poppins font-semibold text-3xl text-black">{{ $job->jobTitle }}</h1>
                <p class="bg-gradient-to-tr from-mblue to-dblue px-2 inline-block text-white rounded-sm mb-7">
                    @if ($job->jobType == 1)
                        Full Time
                    @elseif ($job->jobType == 2)
                        Part Time
                    @else
                        Remote
                    @endif
                </p>
                <p class="font-semibold text-base">Last Application Date: @php
                    echo date('M-d-Y', strtotime($job->lastDate));
                @endphp</p>
                <p class="font-semibold text-base underline">Job Description: </p>
                <p class="my-2 text-base font-normal font-inter">{{ $job->description }}</p>
                <div class="flex justify-between items-center mt-10 flex-wrap">
                    <div class="">
                        <a class="bg-gradient-to-tr from-mblue to-dblue text-center py-2 px-4 rounded-sm text-white"
                            href="">Apply Now</a>
                    </div>
                    <div class="flex items-center mt-5 sm:mt-0">
                        <a href="" class="mr-3">Share:</a>

                        {{-- <span class="iconify mx-1 text-3xl text-blue" data-icon="entypo-social:linkedin-with-circle"></span> --}}

                        <a class="btn-floating btn btn-tw" type="button" role="button" title="Share on facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank" rel="noopener"><span class="iconify mx-1 text-3xl text-blue" data-icon="entypo-social:facebook-with-circle"></span></a>
                        <a class="btn-floating btn btn-tw" type="button" role="button" title="Share on twitter" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fparse.com" rel="noopener"><span class="iconify mx-1 text-3xl text-blue" data-icon="entypo-social:twitter-with-circle"></span></a>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block">
                {{-- Item --}}
                <div class="">
                    <div class="shadow-md py-6 px-7 bg-white">
                        <h2 class="font-poppins font-semibold text-lg text-black">A/C Technician</h2>
                        <p class="bg-gradient-to-tr from-mblue to-dblue p-1 text-xs inline rounded-sm text-white">Full-time
                            Job</p>
                        <p class=" mt-5 text-base flex items-center text-black"><span class="iconify text-blue mr-2.5"
                                data-icon="bi:calendar-fill"></span>August 22, 2022</p>
                        <p class="mb-5 text-base flex items-center text-black"><span class="iconify text-blue mr-2.5"
                                data-icon="carbon:location-filled"></span>CocoCay, The Bahamas</p>
                        <p class="font-inter text-base font-light text-black mb-4">There are many variations of passages of
                            Lorem Ipsum available, but the majority have suffered alteration in some form. but the majority
                            have suffered alteration in some form.but the majority have suffered alteration.</p>
                        <a href=""
                            class="bg-gradient-to-tr from-mblue to-dblue text-center py-2 px-4 rounded-sm text-white">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
