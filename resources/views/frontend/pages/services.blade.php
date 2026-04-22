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
                <span class="font-bold">our</span> services
            </h1>

            <p class="text-[20px] text-center">LED Event Services Cambodia for corporate events, exhibitions, and
                concerts.<br />
                We provide high-quality LED screens and visual solutions to enhance audience <br />engagement and event
                impact in
                Phnom Penh.</p>



            <a href="/contact" class=" w-[183px] h-[44px] flex items-center justify-center cursor-pointer bg-black">Contact
                Us</a>


        </div>

    </div>

    <div class="relative w-full overflow-hidden">

        <!-- 🔵 TOP GLOW (full width) -->
        <div
            class="absolute top-[-200px] left-1/2 -translate-x-1/2
        w-[1200px] aspect-square rounded-full
        bg-[radial-gradient(circle_at_center,#1100FF_0%,#0E00D480_40%,transparent_80%)]
        blur-3xl opacity-70 pointer-events-none">
        </div>

        <!-- 🔵 BOTTOM GLOW -->
        <div
            class="absolute bottom-[-200px] left-1/2 -translate-x-1/2
        w-[1200px] aspect-square rounded-full
        bg-[radial-gradient(circle_at_center,#1100FF_0%,#0E00D480_40%,transparent_80%)]
        blur-3xl opacity-70 pointer-events-none">
        </div>

        <!-- CONTENT -->
        <div class="max-w-7xl mx-auto px-5 py-20 space-y-10 relative z-10">

            <!-- CARD 1 -->
            <div
                class="bg-black/80 backdrop-blur-sm p-5 rounded-xl
        grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-20 border border-white">

                <img src="{{ asset('images/article1.jpg') }}" class="rounded-md w-full h-[220px] md:h-[276px] object-cover">

                <div class="flex flex-col justify-between">
                    <div class="py-3 md:py-5">
                        <p class="text-xl md:text-[30px] mb-2">LED Screen Rental</p>
                        <p class="text-sm md:text-base line-clamp-4">
                            We provide high-resolution LED screen rental in Cambodia for indoor and outdoor events.
                        </p>
                    </div>

                    <a href="/contact"
                        class="w-[123px] h-[35px] border border-white
                flex items-center justify-center text-sm
                ">
                        Contact Us
                    </a>
                </div>
            </div>

            <!-- CARD 2 -->
            <div
                class="bg-black/80 backdrop-blur-sm p-5 rounded-xl
        grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-20 border border-white">

                <img src="{{ asset('images/article1.jpg') }}" class="rounded-md w-full h-[220px] md:h-[276px] object-cover">

                <div class="flex flex-col justify-between">
                    <div class="py-3 md:py-5">
                        <p class="text-xl md:text-[30px] mb-2">LED Screen Rental</p>
                        <p class="text-sm md:text-base line-clamp-4">
                            We provide high-resolution LED screen rental in Cambodia for indoor and outdoor events.
                        </p>
                    </div>

                    <a href="/contact"
                        class="w-[123px] h-[35px] border border-white
                flex items-center justify-center text-sm
                ">
                        Contact Us
                    </a>
                </div>
            </div>

            <!-- CARD 3 -->
            <div
                class="bg-black/80 backdrop-blur-sm p-5 rounded-xl
        grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-20 border border-white">

                <img src="{{ asset('images/article1.jpg') }}" class="rounded-md w-full h-[220px] md:h-[276px] object-cover">

                <div class="flex flex-col justify-between">
                    <div class="py-3 md:py-5">
                        <p class="text-xl md:text-[30px] mb-2">LED Screen Rental</p>
                        <p class="text-sm md:text-base line-clamp-4">
                            We provide high-resolution LED screen rental in Cambodia for indoor and outdoor events.
                        </p>
                    </div>

                    <a href="/contact"
                        class="w-[123px] h-[35px] border border-white
                flex items-center justify-center text-sm
                ">
                        Contact Us
                    </a>
                </div>
            </div>

            <!-- CARD 4 -->
            <div
                class="bg-black/80 backdrop-blur-sm p-5 rounded-xl
        grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-20 border border-white">

                <img src="{{ asset('images/article1.jpg') }}" class="rounded-md w-full h-[220px] md:h-[276px] object-cover">

                <div class="flex flex-col justify-between">
                    <div class="py-3 md:py-5">
                        <p class="text-xl md:text-[30px] mb-2">LED Screen Rental</p>
                        <p class="text-sm md:text-base line-clamp-4">
                            We provide high-resolution LED screen rental in Cambodia for indoor and outdoor events.
                        </p>
                    </div>

                    <a href="/contact"
                        class="w-[123px] h-[35px] border border-white
                flex items-center justify-center text-sm
                ">
                        Contact Us
                    </a>
                </div>
            </div>

            <!-- CARD 5 -->
            <div
                class="bg-black/80 backdrop-blur-sm p-5 rounded-xl
        grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-20 border border-white">

                <img src="{{ asset('images/article1.jpg') }}" class="rounded-md w-full h-[220px] md:h-[276px] object-cover">

                <div class="flex flex-col justify-between">
                    <div class="py-3 md:py-5">
                        <p class="text-xl md:text-[30px] mb-2">LED Screen Rental</p>
                        <p class="text-sm md:text-base line-clamp-4">
                            We provide high-resolution LED screen rental in Cambodia for indoor and outdoor events.
                        </p>
                    </div>

                    <a href="/contact"
                        class="w-[123px] h-[35px] border border-white
                flex items-center justify-center text-sm
                ">
                        Contact Us
                    </a>
                </div>
            </div>

            <!-- CARD 6 -->
            <div
                class="bg-black/80 backdrop-blur-sm p-5 rounded-xl
        grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-20 border border-white">

                <img src="{{ asset('images/article1.jpg') }}" class="rounded-md w-full h-[220px] md:h-[276px] object-cover">

                <div class="flex flex-col justify-between">
                    <div class="py-3 md:py-5">
                        <p class="text-xl md:text-[30px] mb-2">LED Screen Rental</p>
                        <p class="text-sm md:text-base line-clamp-4">
                            We provide high-resolution LED screen rental in Cambodia for indoor and outdoor events.
                        </p>
                    </div>

                    <a href="/contact"
                        class="w-[123px] h-[35px] border border-white
                flex items-center justify-center text-sm
                ">
                        Contact Us
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
