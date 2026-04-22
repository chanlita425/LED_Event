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
    <div class="bg-black ">
        
        <div class="max-w-6xl mx-auto grid grid-cols-3 gap-5 my-20">
            {{-- left --}}
            <div>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-[48px] h-[48px]">
                    <div class="uppercase text-[22px] ">
                        <p class="font-bold">LED</p>
                        <p>Events</p>
                    </div>

                </div>
                <p class="mt-5">LED EVENTS aims to build a high-performance, SEO-driven website to generate qualified
                    leads, build strong trust, support long-term content growth, position as a premium event
                    production company, and support expansion to Southeast Asia.</p>
            </div>
            {{-- center --}}
            <div class="flex flex-col items-center ">
                <p class="text-[20px] font-semibold">Company</p>
                <ul class="flex flex-col mt-5 gap-4">
                    <li><a href="">Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Projects</a></li>
                    <li><a href="">Why Us</a></li>
                    <li><a href="">Media</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            {{-- right --}}
            <div>
                <!-- Title -->
                <p class="text-[20px] font-semibold">Contact</p>

                <!-- Content -->
                <div class="flex flex-col mt-5 gap-4">

                    <!-- Address -->
                    <p class="flex items-center gap-2">
                        <i class="fa-solid fa-location-dot"></i>
                        123 Main Street, City, Country
                    </p>

                    <!-- Phone -->
                    <p class="flex items-center gap-2">
                        <i class="fa-solid fa-phone"></i>
                        +1 (123) 456-7890
                    </p>

                    <!-- Email -->
                    <p class="flex items-center gap-2">
                        <i class="fa-solid fa-envelope"></i>
                        info@gmail.com
                    </p>

                    <!-- Social -->
                    <div class="mt-4">
                        <p class="mb-2">Follow us on</p>

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
