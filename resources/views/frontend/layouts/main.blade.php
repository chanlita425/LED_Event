<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED Events</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen text-white bg-black">

    {{-- HEADER --}}
    @include('frontend.components.Header')

    {{-- PAGE CONTENT --}}
    <main class="flex-1 relative">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('frontend.components.Footer')

    {{-- 🔝 Scroll to Top Button --}}
    <div id="scrollTopBtn"
        class="fixed bottom-20 right-20 z-50 cursor-pointer hidden transition-all duration-300 hover:scale-110"
        onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">

        <img src="{{ asset('icons/down-arrow.png') }}" alt="scroll top"
            class="w-12 h-auto invert brightness-0 rotate-180">
    </div>

    {{-- JS --}}
    <script>
        const scrollBtn = document.getElementById("scrollTopBtn");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                scrollBtn.classList.remove("hidden");
            } else {
                scrollBtn.classList.add("hidden");
            }
        });
    </script>

</body>

</html>
