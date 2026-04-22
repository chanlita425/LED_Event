@extends('frontend.layouts.main')

@section('content')
    {{-- hero section --}}
    <div class="relative h-[100vh] flex items-center justify-center bg-cover bg-center px-4"
        style="background-image: url('{{ asset('images/hero-section2.png') }}');">

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 flex flex-col items-center gap-5 text-white text-center">

            <h1 class="text-5xl sm:text-7xl md:text-9xl lg:text-[120px] font-bold">
                Blog
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-[20px]">
                The Most Reliable Event Production<br />
                System in Cambodia
            </p>

            <a href="/contact"
                class="w-[183px] h-[44px] flex items-center justify-center cursor-pointer bg-black">
                Contact Us
            </a>

        </div>
    </div>

    {{-- article --}}
    <div class="py-20 md:py-30 bg-black relative overflow-hidden">

        <!-- glow -->
        <div
            class="absolute bottom-[-200px] left-1/2 -translate-x-1/2
           w-[900px] md:w-[1400px] aspect-square rounded-full
           bg-[radial-gradient(circle_at_center,#1100FF_0%,#0E00D480_35%,rgba(0,0,0,0.9)_70%,rgba(0,0,0,1)_100%)]
           blur-3xl opacity-90 pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10 space-y-16 md:space-y-30">

            {{-- ARTICLE 1 --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 items-center">

                <img src="{{ asset('images/article1.jpg') }}"
                    class="w-full h-[220px] md:h-[290px] object-cover md:col-span-2" />

                <div class="py-3 md:py-5 flex flex-col gap-4 md:gap-5">

                    <p class="text-xl md:text-[30px] font-bold">Article 01</p>

                    <p class="text-sm md:text-base line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat.
                    </p>

                    <button class="w-[183px] h-[44px] border border-white cursor-pointer">
                        Read More
                    </button>

                    <p class="text-base md:text-[20px]">
                        Link <span> / </span> www.example.com
                    </p>

                </div>
            </div>

            {{-- ARTICLE 2 --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 items-center">

                <div class="py-3 md:py-5 flex flex-col gap-4 md:gap-5">

                    <p class="text-xl md:text-[30px] font-bold">Article 02</p>

                    <p class="text-sm md:text-base line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat.
                    </p>

                    <button class="w-[183px] h-[44px] border border-white cursor-pointer">
                        Read More
                    </button>

                    <p class="text-base md:text-[20px]">
                        Link <span> / </span> www.example.com
                    </p>

                </div>

                <img src="{{ asset('images/article1.jpg') }}"
                    class="w-full h-[220px] md:h-[290px] object-cover md:col-span-2" />

            </div>

            {{-- ARTICLE 3 --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 items-center">

                <img src="{{ asset('images/article1.jpg') }}"
                    class="w-full h-[220px] md:h-[290px] object-cover md:col-span-2" />

                <div class="py-3 md:py-5 flex flex-col gap-4 md:gap-5">

                    <p class="text-xl md:text-[30px] font-bold">Article 03</p>

                    <p class="text-sm md:text-base line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat.
                    </p>

                    <button class="w-[183px] h-[44px] border border-white cursor-pointer">
                        Read More
                    </button>

                    <p class="text-base md:text-[20px]">
                        Link <span> / </span> www.example.com
                    </p>

                </div>
            </div>

            {{-- ARTICLE 4 --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 items-center">

                <div class="py-3 md:py-5 flex flex-col gap-4 md:gap-5">

                    <p class="text-xl md:text-[30px] font-bold">Article 04</p>

                    <p class="text-sm md:text-base line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat.
                    </p>

                    <button class="w-[183px] h-[44px] border border-white cursor-pointer">
                        Read More
                    </button>

                    <p class="text-base md:text-[20px]">
                        Link <span> / </span> www.example.com
                    </p>

                </div>

                <img src="{{ asset('images/article1.jpg') }}"
                    class="w-full h-[220px] md:h-[290px] object-cover md:col-span-2" />

            </div>

        </div>
    </div>
@endsection
