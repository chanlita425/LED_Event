@extends('frontend.layouts.main')

@section('content')
    {{-- HERO SECTION --}}
    <div class="relative h-[100vh] flex items-center justify-center
            bg-cover bg-center"
        style="background-image: url('{{ asset('images/hero-section.jpg') }}');">

        <div class="max-w-6xl mx-auto grid grid-cols-2 gap-50 py-20 mt-30 ">
            {{-- get in touch --}}
            <div class="bg-black p-5 ">
                <div class="flex flex-col gap-5">
                    <p class="text-[20px]">Get in Touch</p>
                    <p class="text-[50px]">Let's Build Vision</p>
                    <p>Ready to start your project? Contact our team today for a free consultation and quote. We are here to
                        answer any questions you may have about our services.</p>
                </div>
                <p class="my-5 text-[30px]">Information</p>
                {{-- form --}}
                <form action="" class="flex flex-col gap-3">
                    <div class="grid grid-cols-2 gap-5">
                        <input type="text" name="" id="" placeholder="First Name"
                            class="outline-none border-white border px-3 py-1">
                        <input type="text" name="" id="" placeholder="Last Name"
                            class="outline-none border-white border  px-3 py-1">
                    </div>
                    <input type="email" name="" id="" placeholder="Email Address"
                        class="outline-none border-white border  px-3 py-1">
                    <select name="project_type" id="project_type" required
                        class=" outline-none border-white border  px-3 py-1">
                        <option value="" disabled selected class="text-white">Project Type</option>
                        <option value="web" class="text-black">Web Development</option>
                        <option value="mobile" class="text-black">Mobile App</option>
                        <option value="design" class="text-black">Design</option>
                    </select>
                    <textarea name="message" id="" rows="5" placeholder="Your Message"
                        class="w-full outline-none border-white border  px-3 py-1"></textarea>
                    <button class="bg-white w-full text-black font-bold py-2">Send Message</button>
                </form>

            </div>
            {{-- contact --}}
            <div class="flex flex-col gap-5  py-15 ">
                <h1 class="text-[70px] font-bold">Contact </h1>
                <p>123 Main Street<br>
                    Anytown, USA 12345
                </p>
                <div>
                    <p> Phone: (123) 456-7890</p>
                    <p>Email: info@company.com</p>
                    <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                </div>
                {{-- icon --}}
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
@endsection
