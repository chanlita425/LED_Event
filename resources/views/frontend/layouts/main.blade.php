<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED Events</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex flex-col min-h-screen bg-black text-white">

    {{-- HEADER --}}
    @include('frontend.components.Header')

    {{-- PAGE CONTENT --}}
    <main class="flex-1">
        @yield('content')
    </main>



</body>
</html>
