@extends('frontend.layouts.main')

@section('content')
    {{-- HERO SECTION --}}
    <div class="relative min-h-screen flex items-center justify-center bg-cover bg-center px-4 my-20"
        style="background-image: url('{{ asset('images/hero-section.jpg') }}');">

        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 py-10 lg:py-20 w-full">

            {{-- get in touch --}}
            <div class="bg-black p-5 sm:p-8">

                <div class="flex flex-col gap-5">
                    <p class="text-base sm:text-lg">Get in Touch</p>

                    <p class="text-3xl sm:text-5xl lg:text-[50px] leading-tight">
                        Let's Build Vision
                    </p>

                    <p class="text-sm sm:text-base">
                        Ready to start your project? Contact our team today for a free consultation and quote. We are here to
                        answer any questions you may have about our services.
                    </p>
                </div>

                <p class="my-5 text-xl sm:text-2xl lg:text-[30px]">Information</p>

                {{-- form --}}
                <form action="" class="flex flex-col gap-3">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-5">
                        <input type="text" placeholder="First Name"
                            class="outline-none border border-white px-3 py-2 w-full">

                        <input type="text" placeholder="Last Name"
                            class="outline-none border border-white px-3 py-2 w-full">
                    </div>

                    <input type="email" placeholder="Email Address"
                        class="outline-none border border-white px-3 py-2 w-full">

                    <select name="project_type" id="project_type" required
                        class="outline-none border border-white px-3 py-2 w-full text-black">
                        <option value="" disabled selected>Project Type</option>
                        <option value="web">Web Development</option>
                        <option value="mobile">Mobile App</option>
                        <option value="design">Design</option>
                    </select>

                    <textarea rows="5" placeholder="Your Message"
                        class="w-full outline-none border border-white px-3 py-2"></textarea>

                    <button class="bg-white w-full text-black font-bold py-2">
                        Send Message
                    </button>

                </form>

            </div>

            {{-- contact --}}
            <div class="flex flex-col gap-5 py-10 lg:py-15 text-center lg:text-left">

                <h1 class="text-4xl sm:text-6xl lg:text-[70px] font-bold">
                    Contact
                </h1>

                <p class="text-sm sm:text-base">
                    #159A, Street 2011, Dei Thmey Village, Khmuonh Commune, Sen Sok District, Phnom Penh.
                </p>

                <div class="text-sm sm:text-base">
                    <p>Phone: 015 999235</p>
                    <p>Email: Info@ledevents.asia </p>
                </div>

                {{-- icon --}}
                <div class="flex justify-center lg:justify-start">

                    <div class="flex items-center gap-3 sm:gap-4 text-black">

                        <a href="#"
                            class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                            <i class="fa-brands fa-square-youtube text-sm"></i>
                        </a>

                        <a href="#"
                            class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>

                        <a href="#"
                            class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                            <i class="fa-brands fa-tiktok text-sm"></i>
                        </a>

                        <a href="#"
                            class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                            <i class="fa-brands fa-instagram text-sm"></i>
                        </a>

                        <a href="#"
                            class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                            <i class="fa-brands fa-telegram text-sm"></i>
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
