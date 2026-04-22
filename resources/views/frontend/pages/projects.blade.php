@extends('frontend.layouts.main')

@section('content')
    <div class="relative h-[100vh] flex items-center justify-center
            bg-cover bg-center"
        style="background-image: url('{{ asset('images/hero-section2.png') }}');">

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- CONTENT -->
        <div class="relative z-10 flex flex-col items-center gap-5 text-white">


            <h1 class="text-[120px] uppercase">
                <span class="font-bold">our</span> projects
            </h1>

            <p class="text-[20px] text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br/>
nonummy nibh euismod tincidunt ut laoreet dolore magn</p>



            <a href="/contact" class=" w-[183px] h-[44px] flex items-center justify-center cursor-pointer bg-black">Contact
                Us</a>


        </div>

    </div>
@endsection
