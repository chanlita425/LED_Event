<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        li {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="bg-black border-white border-t-1 mt-20">

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 md:gap-5 lg:gap-2 my-20 px-3 md:px-10 lg:px-6 xl:px-6">
            {{-- left --}}
            <div>
                <div class="flex items-center justify-center lg:justify-normal gap-3">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-[48px] h-[48px]">
                    <div class="uppercase text-[22px] ">
                        <p class="font-bold">LED</p>
                        <p>Events</p>
                    </div>

                </div>
                <p class="mt-5 text-center lg:text-left">LED EVENTS aims to build a high-performance, SEO-driven website to generate qualified
                    leads, build strong trust, support long-term content growth, position as a premium event
                    production company, and support expansion to Southeast Asia.</p>
            </div>
            {{-- center --}}
            <div class="flex flex-col md:items-center ">
                <p class="text-[20px] font-bold">Company</p>
                <ul class="flex flex-col mt-5 gap-4">
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/projects">Projects</a></li>
                    <li><a href="/why-us">Why Us</a></li>
                    <li><a href="/media">Media</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            {{-- right --}}
            <div>
                <!-- Title -->
                <p class="text-[20px] font-bold">Contact</p>

                <!-- Content -->
                <div class="flex flex-col mt-5 gap-4">

                    <!-- Address -->
                    <p class="flex items-center gap-2">
                        <i class="fa-solid fa-location-dot"></i>
                        #159A, Street 2011, Dei Thmey Village, Khmuonh Commune, Sen Sok District, Phnom Penh.
                    </p>

                    <!-- Phone -->
                    <p class="flex items-center gap-2">
                        <i class="fa-brands fa-telegram text-sm "></i>
                        015 999 235
                    </p>

                    <!-- Email -->
                    <p class="flex items-center gap-2">
                        <i class="fa-solid fa-envelope"></i>
                        Info@ledevents.asia
                    </p>

                    <!-- Social -->
                    <div class="mt-4">
                        <p class="mb-2 font-bold">Follow us on</p>

                        <div class="flex items-center gap-4">
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                                <i class="fa-brands fa-youtube text-sm text-black"></i>
                            </a>

                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                                <i class="fa-brands fa-facebook-f text-sm text-black"></i>
                            </a>

                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                                <i class="fa-brands fa-tiktok text-sm text-black"></i>
                            </a>

                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                                <i class="fa-brands fa-instagram text-sm text-black"></i>
                            </a>

                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                                <i class="fa-brands fa-telegram text-sm text-black"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>

</html>
