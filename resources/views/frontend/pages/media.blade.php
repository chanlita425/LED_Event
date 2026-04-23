@extends('frontend.layouts.main')

@section('content')
    {{-- HERO --}}
    <div class="relative h-screen flex items-center justify-center bg-cover bg-center px-4"
        style="background-image: url('{{ asset('images/hero-section.jpg') }}');">

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 flex flex-col items-center text-white text-center">
            <img src="{{ asset('images/logo.png') }}" class="w-10">

            <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-[90px] font-bold">
                Media
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-[20px] mt-3">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,<br>
                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            </p>

            <a href="/contact" class="bg-black w-[183px] h-[44px] flex items-center justify-center mt-5">
                Contact Us
            </a>
        </div>
    </div>


    {{-- EVENT VIDEOS --}}
    <div class="mt-20 max-w-6xl mx-auto px-5">
        <h1 class="text-2xl md:text-[40px] font-bold">
            Event Videos
        </h1>
    </div>


    {{-- CAROUSEL --}}
    <div class="relative mt-10 max-w-6xl mx-auto px-5">

        <!-- LEFT -->
        <button onclick="prevSlide()"
            class="absolute left-5 sm:left-4 top-1/2 -translate-y-1/2 z-20
           xl:-left-16 2xl:-left-24
           w-10 h-10 flex items-center justify-center
           bg-white/80 text-black rounded-full cursor-pointer transition">
            ‹
        </button>

        <!-- RIGHT -->
        <button onclick="nextSlide()"
            class="absolute right-5 sm:right-4 top-1/2 -translate-y-1/2 z-20
           xl:-right-16 2xl:-right-24
           w-10 h-10 flex items-center justify-center
           bg-white/80 text-black rounded-full cursor-pointer transition">
            ›
        </button>
        <!-- container -->
        <div class="overflow-hidden">
            <div id="carousel" class="flex transition-transform duration-500 ease-in-out"></div>
        </div>

    </div>


    {{-- JS --}}
    <script>
        const mediaItems = [{
                title: "LED Screen Rental",
                desc: "High-resolution LED screens for events.",
                img: "{{ asset('images/image1.png') }}"
            },
            {
                title: "Stage Lighting",
                desc: "Professional lighting solutions.",
                img: "{{ asset('images/image2.png') }}"
            },
            {
                title: "Audio System",
                desc: "Clear and powerful sound system.",
                img: "{{ asset('images/image3.png') }}"
            },
            {
                title: "Event Setup",
                desc: "Full event production setup.",
                img: "{{ asset('images/image1.png') }}"
            },
            {
                title: "Live Streaming",
                desc: "Stream your events professionally.",
                img: "{{ asset('images/image2.png') }}"
            },
            {
                title: "Visual Effects",
                desc: "Creative visual experience.",
                img: "{{ asset('images/image3.png') }}"
            }
        ];

        const container = document.getElementById("carousel");

        let currentIndex = 0;

        // responsive visible cards
        function getVisibleCards() {
            if (window.innerWidth < 640) return 1;
            if (window.innerWidth < 1024) return 2;
            return 3;
        }

        function renderCards() {
            container.innerHTML = "";

            mediaItems.forEach(item => {
                container.innerHTML += `
        <div class="w-full sm:w-1/2 lg:w-1/3 flex-shrink-0 px-2">
            <div class="bg-gradient-to-b from-[#383535] to-[#000000]
                p-5 border border-[#272727] rounded-md">

                <img src="${item.img}" class="rounded-md w-full h-48 object-cover">

                <div class="p-3 flex flex-col gap-3 text-white">
                    <p class="font-bold">${item.title}</p>
                    <p class="text-sm">${item.desc}</p>
                    <button class="border py-2 text-sm">Read More</button>
                </div>

            </div>
        </div>
        `;
            });
        }

        function updateCarousel() {
            const visible = getVisibleCards();
            const percent = 100 / visible;
            container.style.transform = `translateX(-${currentIndex * percent}%)`;
        }

        function nextSlide() {
            const visible = getVisibleCards();
            if (currentIndex < mediaItems.length - visible) {
                currentIndex++;
                updateCarousel();
            }
        }

        function prevSlide() {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        }

        // re-render on resize
        window.addEventListener('resize', () => {
            currentIndex = 0;
            updateCarousel();
        });

        renderCards();
    </script>
@endsection
