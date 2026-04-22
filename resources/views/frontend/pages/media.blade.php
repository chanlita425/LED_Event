@extends('frontend.layouts.main')

@section('content')
    {{-- HERO SECTION --}}
    <div class="relative h-screen flex items-center justify-center bg-cover bg-center px-4"
        style="background-image: url('{{ asset('images/hero-section.jpg') }}');">

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- CONTENT -->
        <div class="relative z-10 flex flex-col items-center text-white text-center">

            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-10">

            <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-[90px]  leading-tight font-bold">
                Media
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-[20px]">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</br>
                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            </p>

            <a href="/contact" class="bg-black w-[183px] h-[44px] cursor-pointer flex items-center justify-center my-5">
                Contact Us
            </a>


        </div>
    </div>
    @endsection
