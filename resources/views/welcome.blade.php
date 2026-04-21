@extends('frontend.layouts.main')

@section('content')
    {{-- HERO SECTION --}}
    <div class="relative h-[100vh] flex items-center justify-center
            bg-cover bg-center"
        style="background-image: url('{{ asset('images/hero-section.jpg') }}');" >

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- CONTENT -->
        <div class="relative z-10 flex flex-col items-center text-white">

            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-10" >

            <h1 class="text-[120px] uppercase">
                <span class="font-bold">led</span> events
            </h1>

            <p class="text-[20px]">The Most Reliable Event Production</p>
            <p class="text-[20px]">System in Cambodia</p>

            <div class="my-5 flex gap-10">
                <button class="border w-[183px] h-[44px] cursor-pointer">Explore More</button>
                <button class="bg-black w-[183px] h-[44px] cursor-pointer">Contact Us</button>
            </div>

        </div>

    </div>

    <div class="bg-[#05004F]">
        {{-- led event --}}
        <div class="max-w-6xl mx-auto ">
            <div id="why-us" class="pt-20 grid grid-cols-3 items-center ">

                <!-- TITLE -->
                <h1 class="text-[40px] uppercase ">
                    why led events
                </h1>

                <!-- LINE (take 2 columns) -->
                <div class="col-span-2">
                    <p class="w-full h-1 rounded-full bg-white"></p>
                </div>



            </div>


            <div class="grid grid-cols-3 my-10">
                {{-- system --}}
                <div class="flex flex-col gap-2">
                    <p class="text-[15px]">01</p>
                    <p class="text-[20px] font-bold">System</p>
                    <p class="w-[270px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod
                        tincidunt ut
                        laoreet dolore magna aliquam erat volutpat.</p>
                </div>

                {{-- reliability --}}
                <div class="flex flex-col gap-2">
                    <p class="text-[15px]">02</p>
                    <p class="text-[20px] font-bold">Reliability</p>
                    <p class="w-[270px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod
                        tincidunt ut
                        laoreet dolore magna aliquam erat volutpat.</p>
                </div>
                {{-- experience --}}
                <div class="flex flex-col gap-2">
                    <p class="text-[15px]">03</p>
                    <p class="text-[20px] font-bold">Experience</p>
                    <p class="w-[270px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod
                        tincidunt ut
                        laoreet dolore magna aliquam erat volutpat.</p>
                </div>
            </div>


            <p class="w-full h-1 rounded-full bg-white"></p>

        </div>

        {{-- our service --}}
        <div id="services" class=" mt-20 max-w-6xl mx-auto">
            <h1 class="text-[40px] uppercase font-bold">
                our services
            </h1>

            <p>
                LED Event Services Cambodia for corporate events, exhibitions, and concerts.<br />
                We provide high-quality LED screens and visual solutions to enhance audience engagement and event impact in
                Phnom Penh.
            </p>
        </div>


        {{-- carousel --}}
        <div class="grid grid-cols-3 gap-5 max-w-6xl mx-auto mt-20">
            {{-- item 1 --}}
            <div class="p-5 border rounded-md">
                <img src="{{ asset('images/image1.png') }}" alt="image1" class="rounded-md w-full h-60 object-cover">
                <div class="p-5 flex flex-col gap-3">
                    <p>LED Screen Rental</p>
                    <p>We provide high-resolution LED screen rental in Cambodia for indoor and outdoor events.</p>
                    <button class="border">Read More</button>
                </div>
            </div>

            {{-- item 2 --}}
            <div class="p-5 border rounded-md">
                <img src="{{ asset('images/image2.png') }}" alt="image2" class="rounded-md w-full h-60 object-cover">
                <div class="p-5 flex flex-col gap-3">
                    <p>LED Screen Rental</p>
                    <p>We provide high-resolution LED screen rental in Cambodia for indoor and outdoor events.</p>
                    <button class="border">Read More</button>
                </div>
            </div>

            {{-- item 3 --}}
            <div class="p-5 border rounded-md">
                <img src="{{ asset('images/image3.png') }}" alt="image3" class="rounded-md w-full h-60 object-cover">
                <div class="p-5 flex flex-col gap-3">
                    <p>LED Screen Rental</p>
                    <p>We provide high-resolution LED screen rental in Cambodia for indoor and outdoor events.</p>
                    <button class="border">Read More</button>
                </div>
            </div>
        </div>


        {{-- feature project --}}
        <div id="features" class="my-20">

            <p class="max-w-6xl mx-auto my-20 text-[40px]">Feature Project</p>
            <!-- PROJECT 1 -->
            <div class="w-full h-[406px] bg-cover bg-center"
                style="background-image: url('{{ asset('images/project1.jpg') }}');">

                <!-- OVERLAY -->
                <div class="w-full h-full bg-black/50 flex items-center">

                    <div class="max-w-6xl mx-auto w-full text-white px-6">

                        <!-- CONTENT -->
                        <div class="max-w-xl">
                            <p class="text-2xl font-bold">Project 01</p>

                            <p class="mt-3">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- PROJECT 2 -->
            <div class="w-full h-[406px] bg-cover bg-center mt-10"
                style="background-image: url('{{ asset('images/project2.jpg') }}');">

                <!-- OVERLAY -->
                <div class="w-full h-full bg-black/50 flex items-center">

                    <div class="max-w-6xl mx-auto w-full px-6 flex justify-end">

                        <!-- CONTENT -->
                        <div class="max-w-xl text-right text-white">

                            <p class="text-2xl font-bold">Project 02</p>

                            <p class="mt-3">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
                            </p>

                        </div>

                    </div>

                </div>

            </div>
            <!-- PROJECT 1 -->
            <div class="w-full h-[406px] bg-cover bg-center mt-10"
                style="background-image: url('{{ asset('images/project3.jpg') }}');">

                <!-- OVERLAY -->
                <div class="w-full h-full bg-black/50 flex items-center">

                    <div class="max-w-6xl mx-auto w-full text-white px-6">

                        <!-- CONTENT -->
                        <div class="max-w-xl">
                            <p class="text-2xl font-bold">Project 03</p>

                            <p class="mt-3">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- how we work --}}
        <div id="how-we-work" class="max-w-6xl mx-auto">
            <p>How We Work</p>
            <div class="grid grid-cols-3 gap-10">
                <div>
                    <p>01</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet</p>
                </div>
                <div>
                    <p>01</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet</p>
                </div>
                <div>
                    <p>01</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-10 mt-10 mb-20">
                <div>
                    <p>01</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet</p>
                </div>
                <div >
                    <p>01</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet</p>
                </div>
                <div>
                    <p>01</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
    </div>
@endsection
