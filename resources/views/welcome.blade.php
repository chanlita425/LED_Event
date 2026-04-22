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

            <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-[90px] uppercase leading-tight">
                <span class="font-bold">led</span> events
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-[20px]">
                The Most Reliable Event Production
            </p>

            <p class="text-sm sm:text-base md:text-lg lg:text-[20px]">
                System in Cambodia
            </p>

            <div class="my-5 flex flex-col sm:flex-row gap-4 sm:gap-10">
                <button class="border w-[183px] h-[44px] cursor-pointer">
                    Explore More
                </button>

                <a href="/contact" class="bg-black w-[183px] h-[44px] cursor-pointer flex items-center justify-center">
                    Contact Us
                </a>
            </div>

        </div>
    </div>


    {{-- why us --}}
    <div class="bg-black relative overflow-hidden px-5">

        <!-- 🔵 Visible bottom glow -->
        <div
            class="absolute bottom-[200px] left-1
           w-[1400px] aspect-square rounded-full
           bg-[radial-gradient(circle_at_center,#1100FF_0%,#0E00D480_35%,rgba(0,0,0,0.9)_70%,rgba(0,0,0,1)_100%)]
           blur-3xl opacity-90 pointer-events-none">
        </div>
        <div class="max-w-6xl mx-auto relative z-10">

            {{-- header --}}
            <div id="why-us" class="pt-16 grid grid-cols-1 md:grid-cols-3 items-center gap-5">

                <h1 class="text-2xl md:text-[40px] uppercase">
                    why led events
                </h1>

                <div class="md:col-span-2">
                    <p class="w-full h-1 rounded-full bg-white"></p>
                </div>

            </div>

            {{-- features --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 my-10">

                <div class="flex flex-col gap-2">
                    <p class="text-sm">01</p>
                    <p class="text-lg md:text-[20px] font-bold">System</p>
                    <p class="md:w-[270px]">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-sm">02</p>
                    <p class="text-lg md:text-[20px] font-bold">Reliability</p>
                    <p class="md:w-[270px]">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-sm">03</p>
                    <p class="text-lg md:text-[20px] font-bold">Experience</p>
                    <p class="md:w-[270px]">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>

            </div>

            <p class="w-full h-1 rounded-full bg-white"></p>

        </div>

        {{-- services --}}
        <div id="services" class="mt-16 max-w-6xl mx-auto px-5 mt-20">
            <h1 class="text-2xl md:text-[40px] uppercase font-bold">
                our services
            </h1>

            <p class="text-sm md:text-base mt-3">
                LED Event Services Cambodia for corporate events, exhibitions, and concerts.
                We provide high-quality LED screens and visual solutions.
            </p>
        </div>

        {{-- carousel --}}
        <div class="relative mt-16 max-w-6xl mx-auto px-5">

            {{-- arrows (hide on mobile) --}}
            <img src="{{ asset('icons/bleach.png') }}"
                class="hidden md:block absolute -left-16 top-1/2 -translate-y-1/2 w-8 rotate-270 invert brightness-0 cursor-pointer">

            <img src="{{ asset('icons/bleach.png') }}"
                class="hidden md:block absolute -right-16 top-1/2 -translate-y-1/2 w-8 rotate-90 invert brightness-0 cursor-pointer">

            {{-- cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">

                {{-- item --}}
                <div class="p-5 border rounded-md">
                    <img src="{{ asset('images/image1.png') }}" class="rounded-md w-full h-48 md:h-60 object-cover">

                    <div class="p-3 md:p-5 flex flex-col gap-3">
                        <p class="font-bold">LED Screen Rental</p>
                        <p class="text-sm line-clamp-3">
                            High-resolution LED screens for events.
                        </p>
                        <button class="border py-2 text-sm">Read More</button>
                    </div>
                </div>

                {{-- repeat --}}
                <div class="p-5 border rounded-md">
                    <img src="{{ asset('images/image2.png') }}" class="rounded-md w-full h-48 md:h-60 object-cover">

                    <div class="p-3 md:p-5 flex flex-col gap-3">
                        <p class="font-bold">LED Screen Rental</p>
                        <p class="text-sm line-clamp-3">
                            High-resolution LED screens for events.
                        </p>
                        <button class="border py-2 text-sm">Read More</button>
                    </div>
                </div>

                <div class="p-5 border rounded-md">
                    <img src="{{ asset('images/image3.png') }}" class="rounded-md w-full h-48 md:h-60 object-cover">

                    <div class="p-3 md:p-5 flex flex-col gap-3">
                        <p class="font-bold">LED Screen Rental</p>
                        <p class="text-sm line-clamp-3">
                            High-resolution LED screens for events.
                        </p>
                        <button class="border py-2 text-sm">Read More</button>
                    </div>
                </div>

            </div>
        </div>

    </div>



    {{-- feature project --}}
    <div id="features" class="my-20">

        <!-- TITLE -->
        <p class="max-w-6xl mx-auto my-20 text-2xl sm:text-3xl md:text-[40px] px-5">
            Feature Project
        </p>

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

    </div>

    {{-- how we work --}}
    <div id="how-we-work" class="max-w-6xl mx-auto px-4 sm:px-6">

        <!-- TITLE -->
        <p class="text-2xl sm:text-3xl md:text-[40px] font-bold pb-10 sm:pb-16">
            How We Work
        </p>

        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 sm:gap-10 pb-20">

            <!-- item -->
            <div class="space-y-3">
                <p class="text-3xl sm:text-4xl font-bold">01</p>
                <p class="text-sm sm:text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.
                </p>
            </div>

            <!-- item -->
            <div class="space-y-3">
                <p class="text-3xl sm:text-4xl font-bold">02</p>
                <p class="text-sm sm:text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.
                </p>
            </div>

            <!-- item -->
            <div class="space-y-3">
                <p class="text-3xl sm:text-4xl font-bold">03</p>
                <p class="text-sm sm:text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.
                </p>
            </div>

            <!-- item -->
            <div class="space-y-3">
                <p class="text-3xl sm:text-4xl font-bold">04</p>
                <p class="text-sm sm:text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.
                </p>
            </div>

            <!-- item -->
            <div class="space-y-3">
                <p class="text-3xl sm:text-4xl font-bold">05</p>
                <p class="text-sm sm:text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.
                </p>
            </div>

            <!-- item -->
            <div class="space-y-3">
                <p class="text-3xl sm:text-4xl font-bold">06</p>
                <p class="text-sm sm:text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.
                </p>
            </div>

        </div>
    </div>

    <div>

        <!-- HERO -->
        <div class="relative h-[300px] sm:h-[400px] md:h-[500px] w-full bg-cover bg-center"
            style="background-image: url('{{ asset('images/article1.jpg') }}');">

            <div class="absolute inset-0 bg-black/50"></div>

            <div class="absolute inset-0 flex items-center justify-center text-white px-4">
                <p class="text-lg sm:text-2xl md:text-3xl text-center max-w-2xl">
                    The Most Reliable Event Production System in Cambodia
                </p>
            </div>
        </div>

        <!-- GRID -->
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                <!-- item -->
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('images/article1.jpg') }}"
                        class="w-full h-52 sm:h-56 md:h-60 object-cover transition-transform duration-300 group-hover:scale-110">

                    <!-- overlay -->
                    <div
                        class="absolute inset-0 bg-black/60
                    opacity-100 sm:opacity-0 sm:group-hover:opacity-100
                    transition duration-300 flex flex-col justify-end text-white p-4 cursor-pointer">

                        <p class="text-base sm:text-lg font-bold mb-1 sm:mb-2">
                            Project Title
                        </p>

                        <p class="text-xs sm:text-sm line-clamp-3 sm:line-clamp-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                    </div>
                </div>

                <div class="relative group overflow-hidden">
                    <img src="{{ asset('images/article1.jpg') }}"
                        class="w-full h-52 sm:h-56 md:h-60 object-cover transition-transform duration-300 group-hover:scale-110">

                    <!-- overlay -->
                    <div
                        class="absolute inset-0 bg-black/60
                    opacity-100 sm:opacity-0 sm:group-hover:opacity-100
                    transition duration-300 flex flex-col justify-end text-white p-4 cursor-pointer">

                        <p class="text-base sm:text-lg font-bold mb-1 sm:mb-2">
                            Project Title
                        </p>

                        <p class="text-xs sm:text-sm line-clamp-3 sm:line-clamp-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                    </div>
                </div>
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('images/article1.jpg') }}"
                        class="w-full h-52 sm:h-56 md:h-60 object-cover transition-transform duration-300 group-hover:scale-110">

                    <!-- overlay -->
                    <div
                        class="absolute inset-0 bg-black/60
                    opacity-100 sm:opacity-0 sm:group-hover:opacity-100
                    transition duration-300 flex flex-col justify-end text-white p-4 cursor-pointer">

                        <p class="text-base sm:text-lg font-bold mb-1 sm:mb-2">
                            Project Title
                        </p>

                        <p class="text-xs sm:text-sm line-clamp-3 sm:line-clamp-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                    </div>
                </div>
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('images/article1.jpg') }}"
                        class="w-full h-52 sm:h-56 md:h-60 object-cover transition-transform duration-300 group-hover:scale-110">

                    <!-- overlay -->
                    <div
                        class="absolute inset-0 bg-black/60
                    opacity-100 sm:opacity-0 sm:group-hover:opacity-100
                    transition duration-300 flex flex-col justify-end text-white p-4 cursor-pointer">

                        <p class="text-base sm:text-lg font-bold mb-1 sm:mb-2">
                            Project Title
                        </p>

                        <p class="text-xs sm:text-sm line-clamp-3 sm:line-clamp-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                    </div>
                </div>
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('images/article1.jpg') }}"
                        class="w-full h-52 sm:h-56 md:h-60 object-cover transition-transform duration-300 group-hover:scale-110">

                    <!-- overlay -->
                    <div
                        class="absolute inset-0 bg-black/60
                    opacity-100 sm:opacity-0 sm:group-hover:opacity-100
                    transition duration-300 flex flex-col justify-end text-white p-4 cursor-pointer">

                        <p class="text-base sm:text-lg font-bold mb-1 sm:mb-2">
                            Project Title
                        </p>

                        <p class="text-xs sm:text-sm line-clamp-3 sm:line-clamp-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                    </div>
                </div>
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('images/article1.jpg') }}"
                        class="w-full h-52 sm:h-56 md:h-60 object-cover transition-transform duration-300 group-hover:scale-110">

                    <!-- overlay -->
                    <div
                        class="absolute inset-0 bg-black/60
                    opacity-100 sm:opacity-0 sm:group-hover:opacity-100
                    transition duration-300 flex flex-col justify-end text-white p-4 cursor-pointer">

                        <p class="text-base sm:text-lg font-bold mb-1 sm:mb-2">
                            Project Title
                        </p>

                        <p class="text-xs sm:text-sm line-clamp-3 sm:line-clamp-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                    </div>
                </div>
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('images/article1.jpg') }}"
                        class="w-full h-52 sm:h-56 md:h-60 object-cover transition-transform duration-300 group-hover:scale-110">

                    <!-- overlay -->
                    <div
                        class="absolute inset-0 bg-black/60
                    opacity-100 sm:opacity-0 sm:group-hover:opacity-100
                    transition duration-300 flex flex-col justify-end text-white p-4 cursor-pointer">

                        <p class="text-base sm:text-lg font-bold mb-1 sm:mb-2">
                            Project Title
                        </p>

                        <p class="text-xs sm:text-sm line-clamp-3 sm:line-clamp-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                    </div>
                </div>
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('images/article1.jpg') }}"
                        class="w-full h-52 sm:h-56 md:h-60 object-cover transition-transform duration-300 group-hover:scale-110">

                    <!-- overlay -->
                    <div
                        class="absolute inset-0 bg-black/60
                    opacity-100 sm:opacity-0 sm:group-hover:opacity-100
                    transition duration-300 flex flex-col justify-end text-white p-4 cursor-pointer">

                        <p class="text-base sm:text-lg font-bold mb-1 sm:mb-2">
                            Project Title
                        </p>

                        <p class="text-xs sm:text-sm line-clamp-3 sm:line-clamp-4">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                    </div>
                </div>

            </div>

            <!-- BUTTON -->
            <button
                class="border border-white w-full sm:w-[327px] h-[50px] sm:h-[67px]
                   flex items-center justify-center mx-auto mt-10 cursor-pointer text-sm sm:text-base">
                Find Out More
            </button>

        </div>

    </div>
@endsection
