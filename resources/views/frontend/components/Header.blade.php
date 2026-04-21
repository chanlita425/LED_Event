<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED Events</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        .nav-link {
            position: relative;
            display: inline-block;
            padding: 0 10px;
        }



        <style>.nav-link {
            position: relative;
            display: inline-block;
        }

        /* line starts from center (0 width, centered) */
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

        /* expand to full width from center */
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <div class="w-full bg-black border-b border-gray-800">

        <div class="max-w-6xl mx-auto flex items-center justify-between px-6 py-4">

            <!-- LEFT: MENU -->
            <ul class="flex items-center gap-6 text-white capitalize">

                <li class="relative group">

                    <a href="/" class="nav-link">home</a>

                    <div class="absolute group-hover:opacity-100 ">

                    </div>


                </li>
                <li><a class="nav-link" href="/services">services</a></li>
                <li><a class="nav-link" href="/projects">projects</a></li>
                <li><a class="nav-link" href="/why-us">why us</a></li>
                <li><a class="nav-link" href="/media">media</a></li>
                <li><a class="nav-link" href="/blog">blog</a></li>
                <li><a class="nav-link" href="/products">products</a></li>
                <li><a class="nav-link" href="/contact">contact</a></li>

            </ul>


            <!-- RIGHT: ICON -->
            <div class="text-white font-bold">
                ICON
            </div>

        </div>

    </div>

</body>

</html>
