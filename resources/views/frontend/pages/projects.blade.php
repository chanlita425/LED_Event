@extends('frontend.layouts.main')

<style>
    .nav-link {
        position: relative;
        display: inline-block;
        padding: 0 10px;
    }

    /* center line */
    .nav-link::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -8px;
        height: 2px;
        width: 0;
        background: black;
        /* change to white if dark bg */
        transition: 0.3s ease;
        transform: translateX(-50%);
    }

    /* hover animation */
    .nav-link:hover::after {
        width: 100%;
    }
</style>
@section('content')
    <div class="relative h-screen flex items-center justify-center bg-cover bg-center px-4"
    style="background-image: url('{{ asset('images/hero-section2.png') }}');">

    <!-- DARK OVERLAY -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- CONTENT -->
    <div class="relative z-10 flex flex-col items-center text-white text-center max-w-5xl">

        <h1 class="uppercase leading-tight
                   text-4xl sm:text-6xl md:text-7xl lg:text-[100px]">
            <span class="font-bold">our</span> projects
        </h1>

        <p class="mt-4
                  text-sm sm:text-base md:text-lg lg:text-[20px]">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br class="hidden sm:block" />
            nonummy nibh euismod tincidunt ut laoreet dolore magna.
        </p>

        <a href="/contact"
           class="mt-6 w-[183px] h-[44px] flex items-center justify-center bg-black">
            Contact Us
        </a>

    </div>
</div>

    <div class="max-w-6xl mx-auto my-30 px-5">
        <ul class="flex flex-wrap items-center justify-between gap-6 text-white">

            <li>
                <a href="" class="nav-link">All Projects</a>
            </li>

            <li>
                <a href="" class="nav-link">Concert Events</a>
            </li>

            <li>
                <a href="" class="nav-link">Corporate Events</a>
            </li>

            <li>
                <a href="" class="nav-link">Festival Events</a>
            </li>

            <li>
                <a href="" class="nav-link">Outdoor Events</a>
            </li>

        </ul>
    </div>


    <div>
        <!-- PROJECT 1 -->
        <div class="relative w-full h-[300px] sm:h-[350px] md:h-[406px] bg-cover bg-center"
            style="background-image: url('{{ asset('images/project1.jpg') }}');">

            <!-- OVERLAY -->
            <div class="absolute inset-0 bg-black/50 flex items-center">

                <div class="max-w-6xl mx-auto w-full px-5 sm:px-6 text-white">

                    <div class="max-w-xl">
                        <p class="text-lg sm:text-xl md:text-2xl font-bold">Project 01</p>

                        <p class="mt-3 text-sm sm:text-base md:text-lg">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
                        </p>
                    </div>

                </div>

            </div>
        </div>

        <!-- PROJECT 2 -->
        <div class="relative w-full h-[300px] sm:h-[350px] md:h-[406px] bg-cover bg-center mt-10"
            style="background-image: url('{{ asset('images/project2.jpg') }}');">

            <div class="absolute inset-0 bg-black/50 flex items-center">

                <div class="max-w-6xl mx-auto w-full px-5 sm:px-6 flex justify-end">

                    <div class="max-w-xl text-right text-white">
                        <p class="text-lg sm:text-xl md:text-2xl font-bold">Project 02</p>

                        <p class="mt-3 text-sm sm:text-base md:text-lg">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
                        </p>
                    </div>

                </div>

            </div>
        </div>

        <!-- PROJECT 3 -->
        <div class="relative w-full h-[300px] sm:h-[350px] md:h-[406px] bg-cover bg-center mt-10"
            style="background-image: url('{{ asset('images/project3.jpg') }}');">

            <div class="absolute inset-0 bg-black/50 flex items-center">

                <div class="max-w-6xl mx-auto w-full px-5 sm:px-6 text-white">

                    <div class="max-w-xl">
                        <p class="text-lg sm:text-xl md:text-2xl font-bold">Project 03</p>

                        <p class="mt-3 text-sm sm:text-base md:text-lg">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
                        </p>
                    </div>

                </div>

            </div>
        </div>

        <div class="flex items-center justify-center ">
            <button class="w-[327px] h-[67px] border border-white my-20 cursor-pointer">
            Find Out More
        </button>
        </div>
    </div>
@endsection
