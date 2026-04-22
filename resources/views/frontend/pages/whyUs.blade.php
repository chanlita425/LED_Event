@extends('frontend.layouts.main')

@section('content')
    <div class="relative h-screen flex items-center justify-center bg-cover bg-center px-4"
        style="background-image: url('{{ asset('images/hero-section2.png') }}');">

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- CONTENT -->
        <div class="relative z-10 flex flex-col items-center gap-5 text-white text-center">

            <h1
                class="uppercase leading-tight
                   text-4xl sm:text-6xl md:text-7xl lg:text-[90px] xl:text-[120px]">
                <span class="font-bold">why</span> choose us
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-[20px]">
                The Most Reliable Event Production
            </p>

            <p class="text-sm sm:text-base md:text-lg lg:text-[20px]">
                System in Cambodia
            </p>

            <a href="/contact" class="w-[183px] h-[44px] flex items-center justify-center cursor-pointer bg-black">
                Contact Us
            </a>

        </div>



    </div>

    <div class="relative xl:h-[100vh]  flex items-center justify-center overflow-hidden bg-black">

        <!-- 🔵 Top glow, black bottom -->
        <div
            class="absolute w-[1400px] aspect-square rounded-full
           bg-[radial-gradient(circle_at_top,#1100FF_0%,#0E00D480_40%,rgba(0,0,0,0)_100%)]
           blur-3xl opacity-70">
        </div>

        {{-- responsive mobile --}}
        <div class="flex flex-col items-center gap-5 md:hidden my-10">
            {{-- system --}}
            <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                <img src="{{ asset('icons/settings-gears.png') }}"
                    class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                <p></p>
                <p class="text-[20px]">System</p>
                <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt.</p>
            </div>


            {{-- backup --}}
            <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                <img src="{{ asset('icons/cloud-sync.png') }}"
                    class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                <p></p>
                <p class="text-[20px]">Backup</p>
                <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt.</p>
            </div>


            {{-- team --}}
            <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                <img src="{{ asset('icons/multiple-users-silhouette.png') }}"
                    class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                <p></p>
                <p class="text-[20px]">Team</p>
                <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt.</p>
            </div>


            {{-- team --}}
            <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                <img src="{{ asset('icons/high-quality.png') }}"
                    class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                <p></p>
                <p class="text-[20px]">Execution</p>
                <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt.</p>
            </div>


            {{-- team --}}
            <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                <img src="{{ asset('icons/badge.png') }}"
                    class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                <p></p>
                <p class="text-[20px]">Experience</p>
                <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt.</p>
            </div>

        </div>

        {{-- responsive tablet --}}
        <div class="hidden md:block xl:hidden px-5 py-10">
            <div class="grid md:grid-cols-3  items-center max-w-6xl mx-auto">

                <!-- ROW 1 LEFT -->
                <div
                    class="w-full md:w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative md:translate-y-0">
                    <img src="{{ asset('icons/settings-gears.png') }}" class="absolute top-5 right-5 w-[38px] invert" />
                    <p class="text-[20px]">System</p>
                    <p class="text-[12px]">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>

                <!-- ROW 1 GAP -->
                <div class="hidden md:block"></div>

                <!-- ROW 1 RIGHT -->
                <div class="w-full md:w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                    <img src="{{ asset('icons/cloud-sync.png') }}" class="absolute top-5 right-5 w-[38px] invert" />
                    <p class="text-[20px]">Backup</p>
                    <p class="text-[12px]">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>

                <!-- ROW 2 LEFT GAP -->
                <div class="hidden md:block"></div>

                <!-- ROW 2 CENTER -->
                <div class="w-full md:w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                    <img src="{{ asset('icons/multiple-users-silhouette.png') }}"
                        class="absolute top-5 right-5 w-[38px] invert" />
                    <p class="text-[20px]">Team</p>
                    <p class="text-[12px]">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>

                <!-- ROW 2 RIGHT GAP -->
                <div class="hidden md:block"></div>

                <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                    <img src="{{ asset('icons/high-quality.png') }}"
                        class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                    <p></p>
                    <p class="text-[20px]">Execution</p>
                    <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt.</p>
                </div>
                <div class="w-[239px] h-[239px]"></div>

                {{-- experience --}}
                <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                    <img src="{{ asset('icons/badge.png') }}"
                        class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                    <p></p>
                    <p class="text-[20px]">Experience</p>
                    <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt.</p>
                </div>
            </div>

        </div>

        {{-- responsive 1280 up --}}
        <div class="hidden xl:block">
            {{-- row 1 --}}
            <div class="flex items-center justify-between max-w-6xl mx-auto">
                {{-- system --}}
                <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                    <img src="{{ asset('icons/settings-gears.png') }}"
                        class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                    <p></p>
                    <p class="text-[20px]">System</p>
                    <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt.</p>
                </div>
                <div class="w-[239px] h-[239px]"></div>

                {{-- backup --}}
                <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                    <img src="{{ asset('icons/cloud-sync.png') }}"
                        class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                    <p></p>
                    <p class="text-[20px]">Backup</p>
                    <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt.</p>
                </div>
                <div class="w-[239px] h-[239px]"></div>

                {{-- team --}}
                <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                    <img src="{{ asset('icons/multiple-users-silhouette.png') }}"
                        class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                    <p></p>
                    <p class="text-[20px]">Team</p>
                    <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt.</p>
                </div>
            </div>
            {{-- row 2 --}}
            <div class="flex items-center justify-between max-w-6xl mx-auto">
                <div class="w-[239px] h-[239px]"></div>
                {{-- execution --}}
                <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                    <img src="{{ asset('icons/high-quality.png') }}"
                        class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                    <p></p>
                    <p class="text-[20px]">Execution</p>
                    <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt.</p>
                </div>
                <div class="w-[239px] h-[239px]"></div>

                {{-- experience --}}
                <div class="w-[239px] h-[239px] bg-black flex flex-col justify-end p-5 gap-3 relative">
                    <img src="{{ asset('icons/badge.png') }}"
                        class="absolute top-5 right-5 w-[38.78px] h-auto filter brightness-0 invert" />
                    <p></p>
                    <p class="text-[20px]">Experience</p>
                    <p class="text-[12px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt.</p>
                </div>
                <div class="w-[239px] h-[239px]"></div>
            </div>
        </div>
    </div>
@endsection
