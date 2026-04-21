@extends('frontend.layouts.main')

@section('content')
    {{-- HERO SECTION --}}
    <div class="relative h-[100vh] flex items-center justify-center
            bg-cover bg-center"
        style="background-image: url('{{ asset('images/hero-section.jpg') }}');">

        <div class="max-w-6xl mx-auto grid grid-cols-2 gap-5">
            {{-- get in touch --}}
            <div class="bg-black px-3 py-5 ">
                <p>Get in Touch</p>
                <p>Let's Build Vision</p>
                <p>Ready to start your project? Contact our team today for a free consultation and quote. We are here to
                    answer any questions you may have about our services.</p>
                <p>Get in Touch</p>
                {{-- form --}}
                <form action="">
                    <div class="grid grid-cols-2">
                        <input type="text" name="" id="" placeholder="First Name">
                        <input type="text" name="" id="" placeholder="Last Name">
                    </div>
                    <input type="email" name="" id="">
                    <select name="" id="">
                        <option value="">Select an option</option>
                    </select>
                    <textarea name="message" id="" rows="5" placeholder="Your Message" class="w-full"></textarea>
                    <button class="bg-white w-full text-black font-bold py-2">Send Message</button>
                </form>

            </div>
            {{-- contact --}}
            <div>
                <h1>Contact Information</h1>
                <p>123 Main Street<br>
                    Anytown, USA 12345<br>
                    Phone: (123) 456-7890<br>
                    Email: info@company.com<br/>
                    Monday - Friday: 9:00 AM - 5:00 PM<br>
                </p>

            </div>
        </div>
    </div>
@endsection
