<x-app-layout>
    <div class="bg-gradient-to-tr from-mblue to-dblue text-center py-9">
        <h1 class="font-poppins font-semibold text-4xl text-white">Jobs</h1>
    </div>
    <div class="py-6 ">
        <div class="grid grid-cols-1 sm:grid-cols-3 container mx-auto py-4 gap-6">
                @foreach ($jobs as $job)
                    <div class="bg-white rounded-md drop-shadow p-4">
                        <p class="text-black font-poppins font-semibold text-lg mb-4">{{ $job->jobTitle }}</p>
                        <p class="bg-gradient-to-tr from-mblue to-dblue px-2 inline-block text-white rounded-sm">
                            @if ($job->jobType == 1)
                                Full Time
                            @elseif ($job->jobType == 2)
                                Part Time
                            @else
                                Remote
                            @endif
                        </p>
                        @php
                            $newDate = date('d-m-Y', strtotime($job->created_at));
                        @endphp
                        <p class="flex items-center text-blue"><span class="iconify mr-4"
                                data-icon="uis:calender"></span>{{ $newDate }}</p>
                        <p class="flex items-center text-blue"><span class="iconify mr-4"
                                data-icon="carbon:location-filled"></span>{{ $job->island }}</p>
                        <p class="my-4">{{\Illuminate\Support\Str::words($job->description, 50, '...')}}
                        </p>
                        <a href="{{ route('jobs.show', $job->id) }}"><x-button>{{ __('Read More') }}</x-button></a>
                    </div>
                @endforeach
        </div>
    </div>
</x-app-layout>
