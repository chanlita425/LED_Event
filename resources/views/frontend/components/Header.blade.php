<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED Events</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        html{
            scroll-behavior: smooth;
        }
        .nav-link {
            position: relative;
            display: inline-block;
            padding: 0 10px;
        }

        /* center underline */
        .nav-link::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -17px;
            height: 2px;
            width: 0;
            background: white;
            transition: 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

    </style>
</head>

<body>

    <div class="absolute top-0 left-0 w-full z-50">

        <!-- HEADER TOP -->
        <div class="w-full border-b border-gray-800">
            <div class="max-w-6xl mx-auto flex items-center py-5 px-6">
                <div class="flex items-center gap-3"> <img src="{{ asset('images/logo.png') }}" alt="LED Events Logo"
                        class="h-10">
                    <p class="uppercase"> <span class="font-bold">led</span> events </p>
                </div>
            </div>
        </div>
        <!-- NAVBAR -->
        <div class="w-full bg-black border-b border-gray-800 relative">
            <div class="max-w-6xl mx-auto flex items-center justify-between px-6 py-4">
                <!-- MENU -->
                <ul class="flex items-center gap-6 text-white capitalize">
                    <!-- HOME (MEGA MENU) -->
                    <li class="group">
                        <a href="/" class="nav-link">home</a>
                        <!-- FLEX MEGA MENU -->
                        <div
                            class="absolute left-0 top-full w-full bg-black/95 border-t border-gray-800 opacity-70 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 ">
                            <div class="max-w-6xl mx-auto px-6 py-6 flex items-start gap-10 text-white">
                                <a href="{{ route('home') }}#why-us" class="hover:opacity-70">Why Us</a>
                                <a href="{{ route('home') }}#services" class="hover:opacity-70">Our
                                    Service</a>
                                    <a href="{{ route('home') }}#features" class="hover:opacity-70">Features</a>

                                <a href="{{ route('home') }}#how-we-work" class="hover:opacity-70">How We
                                    Work</a>
                            </div>
                        </div>
                    </li>
                    <!-- OTHER LINKS -->
                    <li class="group">
                        <a class="nav-link" href="{{ route('services') }}">services</a>
                        <div
                            class="absolute left-0 top-full w-full bg-black/95 border-t border-gray-800 opacity-70 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 ">
                            <div class="max-w-6xl mx-auto px-6 py-6 flex items-start gap-10 text-white">
                                <a href="{{ route('home') }}#why-us" class="hover:opacity-70">LED Screen Retail</a>
                                <a href="{{ route('home') }}#services" class="hover:opacity-70">Stage Rental</a>
                                <a href="#" class="hover:opacity-70">Sound System</a>
                                <a href="#" class="hover:opacity-70">Lighting Production</a>
                                <a href="#" class="hover:opacity-70">Full Event Production</a>
                            </div>
                        </div>
                    </li>
                    <li class="group"><a class="nav-link" >projects</a>
                        <div
                            class="absolute left-0 top-full w-full bg-black/95 border-t border-gray-800 opacity-70 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 ">
                            <div class="max-w-6xl mx-auto px-6 py-6 flex items-start gap-10 text-white">
                                <a href="{{ route('home') }}#why-us" class="hover:opacity-70">All projects</a>
                                <a href="{{ route('home') }}#services" class="hover:opacity-70">Concert Events</a>
                                <a href="#" class="hover:opacity-70">Coporate Events</a>
                                <a href="#" class="hover:opacity-70">Festival Events</a>
                                <a href="#" class="hover:opacity-70">Outdoor Events</a>
                            </div>
                        </div>
                    </li>
                    <li class="group"><a class="nav-link" href="/why-us">why us</a>
                        <div
                            class="absolute left-0 top-full w-full bg-black/95 border-t border-gray-800 opacity-70 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 ">
                            <div class="max-w-6xl mx-auto px-6 py-6 flex items-start gap-10 text-white">
                                <a href="/why-us" class="hover:opacity-70">System</a>
                                <a href="/services" class="hover:opacity-70">Backup</a>
                                <a href="#" class="hover:opacity-70">Team</a>
                                <a href="#" class="hover:opacity-70">Execution</a>
                                <a href="#" class="hover:opacity-70">Experience</a>
                            </div>
                        </div>
                    </li>
                    <li class="group"><a class="nav-link" href="/media">media</a>
                        <div
                            class="absolute left-0 top-full w-full bg-black/95 border-t border-gray-800 opacity-70 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 ">
                            <div class="max-w-6xl mx-auto px-6 py-6 flex items-start gap-10 text-white">
                                <a href="/why-us" class="hover:opacity-70">Event Videos</a>
                                <a href="/services" class="hover:opacity-70">Gallery</a>
                                <a href="#" class="hover:opacity-70">Behind the Scenes</a>

                            </div>
                        </div>
                    </li>
                    <li class="group"><a class="nav-link" href="/blog">blog</a>
                        <div
                            class="absolute left-0 top-full w-full bg-black/95 border-t border-gray-800 opacity-70 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 ">
                            <div class="max-w-6xl mx-auto px-6 py-6 flex items-start gap-10 text-white">
                                <a href="/why-us" class="hover:opacity-70">All Articles</a>
                                <a href="/services" class="hover:opacity-70">Event Gruides</a>
                                <a href="#" class="hover:opacity-70">LED Knowledge</a>
                                <a href="#" class="hover:opacity-70">Production Tips</a>
                            </div>
                        </div>
                    </li>
                    <li class="group"><a class="nav-link" href="/products">products</a>
                        <div
                            class="absolute left-0 top-full w-full bg-black/95 border-t border-gray-800 opacity-70 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 ">
                            <div class="max-w-6xl mx-auto px-6 py-6 flex items-start gap-10 text-white">
                                <a href="/why-us" class="hover:opacity-70">Fog & Effects </a>
                                <a href="/services" class="hover:opacity-70">LED Display Sales</a>
                            </div>
                        </div>
                    </li>
                    <li class="group"><a class="nav-link" href="/contact">contact</a>
                    </li>
                </ul>
                <!-- RIGHT -->
                <div class="text-white font-bold">
                    <div class="flex items-center gap-4 text-black">

                        <a href="#"
                            class="w-7 h-7 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                            <i class="fa-brands fa-square-youtube text-sm"></i>
                        </a>

                        <a href="#"
                            class="w-7 h-7 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>

                        <a href="#"
                            class="w-7 h-7 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                            <i class="fa-brands fa-tiktok text-sm"></i>
                        </a>

                        <a href="#"
                            class="w-7 h-7 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                            <i class="fa-brands fa-instagram text-sm"></i>
                        </a>

                        <a href="#"
                            class="w-7 h-7 flex items-center justify-center bg-white rounded-full hover:bg-gray-200 transition">
                            <i class="fa-brands fa-telegram text-sm"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
