<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Luxe Stay</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" />

    <style>
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeUp { animation: fadeUp .7s forwards; }
    </style>
</head>

<body class="bg-white text-gray-900">

    <!-- NAVBAR -->
    <nav class="w-full bg-[#0F2244] text-white px-10 py-4 flex items-center justify-between">

        <!-- Logo -->
        <div class="bg-[#E8C784] px-6 py-4 rounded-br-2xl text-black text-center leading-tight">
            <h1 class="text-2xl font-bold tracking-[4px]">LUXE</h1>
            <p class="text-xs tracking-[3px]">STAY</p>
        </div>

        <!-- Menu -->
        <ul class="flex gap-10 font-semibold">
            <li><a href="{{ route('landing') }}" class="hover:text-[#E8C784]">Home</a></li>
            <li><a href="/stay/Hotel" class="hover:text-[#E8C784]">Stay</a></li>
            <li><a href="#promo" class="hover:text-[#E8C784]">Promo</a></li>
            <li><a href="/contact" class="border-b-2 border-[#E8C784] pb-1">Contact-us</a></li>
        </ul>

        <!-- USER ICON -->
        <div class="relative">
            <button class="text-2xl hover:text-[#E8C784] transition">
                <i class="fa-solid fa-user"></i>
            </button>
        </div>

    </nav>

    <!-- TITLE -->
    <div class="bg-[#0F2244] text-white text-center py-10">
        <h1 class="text-4xl font-bold tracking-wide animate-fadeUp">CONTACT-US</h1>
    </div>

    <!-- CONTENT WRAPPER -->
    <div class="px-10 md:px-28 py-16 animate-fadeUp">
         @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="text-2xl font-bold text-[#0F2244] mb-4">WE ARE HERE FOR YOU</h2>
        

        <p class="text-gray-700 mb-10 max-w-3xl">
            If you have any questions about accommodation, booking, or inquiries, our team is ready to help.
            Please reach out to our support desk and we will get back to you as soon as possible.
        </p>

        <!-- CONTACT FORM -->
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="font-semibold">Name</label>
                <input type="text" name="name"
                       class="w-full border rounded-lg p-3 mt-1"
                       placeholder="Enter your name" required>
            </div>

            <div>
                <label class="font-semibold">Email Address</label>
                <input type="email" name="email"
                       class="w-full border rounded-lg p-3 mt-1"
                       placeholder="Enter your email" required>
            </div>

            <div>
                <label class="font-semibold">Message</label>
                <textarea name="message" rows="6"
                          class="w-full border rounded-lg p-3 mt-1"
                          placeholder="Write your message..." required></textarea>
            </div>

            <button type="submit"
                class="bg-[#E8C784] text-[#0F2244] px-6 py-2 rounded-lg font-semibold hover:scale-105 transition">
                Submit
            </button>
        </form>

    </div>

    <!-- FOOTER -->
    <footer class="bg-[#0F2244] text-white py-10 mt-10 text-center">
        <p class="font-semibold text-lg">Hubungi Kami</p>
        <p class="text-gray-300">Email: farn@luxestay.com | Telp: +62 821 7979 3306</p>
        <p class="mt-4 text-sm text-gray-400">© 2025 Luxe Stay. All rights reserved.</p>
    </footer>

</body>

</html>
