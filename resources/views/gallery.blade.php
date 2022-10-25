@extends('layouts.app')
@section('title')
    Gallery
@endsection
@section('content')
    <div class="bg-gradient-to-tr from-mblue to-dblue text-center py-9">
        <h1 class="font-poppins font-semibold text-4xl text-white">Gallery</h1>
    </div>
    <div class="container mx-auto">

        <div
            class="text-sm font-medium text-center text-gray-500 border-b border-blue dark:text-gray-400 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px tabs-nav">
                <li class="mr-2" id="photobtn">
                    <button
                        class="inline-block p-4 rounded-t-lg border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Photos</button>
                </li>
                <li class="mr-2" id="videobtn">
                    <button
                        class="inline-block p-4 text-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500">Videos</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="" id="photos">
        <div class="container mx-auto py-9 grid grid-cols-1 sm:grid-cols-3 gap-5 px-4 sm:px-0">

            @foreach ($photomedias as $galary)
                {{-- Item --}}
                <div class="">
                    <div class="shadow-md bg-cover">
                        <img src="http://admintwst.z4id.com{{ $galary->photo }}" alt="" class="w-full rounded-sm">
                        <div class="py-6 px-7">
                            <p class="font-inter text-sm font-light text-black">{{ $galary->short_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="py-9 flex justify-center items-center">
            <a href="#"
                class="btn bg-gradient-to-tr from-mblue to-dblue text-center py-2 px-4 rounded-sm text-white hover:scale-110 hover:shadow-lg">Load
                More</a>
        </div>
    </div>

    {{-- Videos --}}
    <div id="videos" class="hidden">
        <div class="container mx-auto py-9 grid grid-cols-1 sm:grid-cols-3 gap-5 px-4 sm:px-0">



            @foreach ($videomedias as $galary)
                {{-- Item --}}
                <div class="">
                    <div class="shadow-md bg-cover">
                        <div class="relative group" onclick="showvideoModal('{{$galary->vlink}}')">
                            <img src="http://admintwst.z4id.com{{ $galary->photo }}" alt=""
                                class="w-full rounded-sm">
                            <span
                                class="iconify text-6xl text-blue absolute top-1/2 left-1/2 group-hover:text-white -translate-x-1/2 -translate-y-1/2"
                                data-icon="bi:play-circle"></span>
                        </div>
                        <div class="py-6 px-7">
                            <p class="font-inter text-sm font-light text-black">{{ $galary->short_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="py-9 flex justify-center items-center">
            <a href="#"
                class="btn bg-gradient-to-tr from-mblue to-dblue text-center py-2 px-4 rounded-sm text-white hover:scale-110 hover:shadow-lg">Load More</a>
        </div>
    </div>

    {{-- Video Modal --}}
    <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="videoModal">
        <div class="fixed inset-0 z-10 overflow-y-auto bg-black bg-opacity-75">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-6xl h-[600px]">
                    <iframe id="videoIframe" class="w-full h-full" src="" title="YouTube video player"  frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#videos').addClass('hidden');
            $('#photobtn').addClass('border-b-2 border-blue');
            $('#photobtn').click(function() {
                $('#photobtn').addClass('border-b-2 border-blue');
                $('#videobtn').removeClass('border-b-2 border-blue');
                $('#photos').removeClass('hidden');
                $('#videos').toggleClass('hidden');
            });

            $('#videobtn').click(function() {
                $('#photobtn').removeClass('border-b-2 border-blue');
                $('#videobtn').addClass('border-b-2 border-blue');

                $('#photos').toggleClass('hidden');
                $('#videos').removeClass('hidden');
            });


        });
        $('#videoModal').click(function(e) {
            e.preventDefault();
            $('#videoModal').toggleClass('hidden');
            $('#videoIframe').attr('src', '');
        });

        function showvideoModal(videolink) {
            let vlink = videolink;
            $('#videoModal').toggleClass('hidden');
            $('#videoIframe').attr('src', vlink);
        };
    </script>
@endsection
