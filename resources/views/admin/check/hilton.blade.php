<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilton Holten | Luxe Stay</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

    <!-- TAILWIND CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .active-tab {
            border-bottom: 3px solid #0d1b2a;
            font-weight: 700;
        }
    </style>
</head>

<body class="bg-[#F5F1EF] text-gray-900">

    <!-- Back Button -->
    <div class="p-6">
        <a href="/hotel" class="text-2xl hover:text-blue-900">
            &#8592;
        </a>
    </div>

    <!-- Header Title -->
    <div class="px-12 flex justify-between items-start">
        <div>
            <h2 class="text-5xl font-bold text-blue-900">Hilton Holten</h2>
            <div class="text-yellow-500 mt-2 text-lg">
                ★★★★☆
            </div>
        </div>

        <a href="#booking"
           class="bg-[#D8C07A] text-white px-6 py-3 rounded-lg font-semibold shadow hover:opacity-90 transition">
           BOOK NOW
        </a>
    </div>

    <!-- Main Image Section -->
<section class="px-12 mt-6 grid grid-cols-12 gap-6">

    <!-- BIG IMAGE -->
    <div class="col-span-6">
        <img src="{{asset('storage/unnamed.jpg')}}"
             class="rounded-xl h-80 w-full object-cover shadow-lg hover:scale-[1.02] transition duration-300">
    </div>

    <!-- SMALL IMAGES GRID -->
    <div class="col-span-6 grid grid-cols-2 gap-4">
        <img src="{{asset('/image/1 (1).png')}}"
             class="rounded-xl h-36 w-full object-cover shadow-md hover:scale-105 transition duration-300">

        <img src="{{asset('/image/1 (2).png')}}"
             class="rounded-xl h-36 w-full object-cover shadow-md hover:scale-105 transition duration-300">

        <img src="{{asset('/image/1 (3).png')}}"
             class="rounded-xl h-36 w-full object-cover shadow-md hover:scale-105 transition duration-300">

        <img src="{{asset('/image/1 (4).png')}}"
             class="rounded-xl h-36 w-full object-cover shadow-md hover:scale-105 transition duration-300">
    </div>

</section>


    <!-- TAB MENU -->
    <div class="px-12 mt-8 border-b border-gray-400">
        <ul class="flex justify-center gap-14 text-sm font-semibold">
            <li class="active-tab">Facilities</li>
            <li class="cursor-pointer hover:text-blue-900">Highlights</li>
            <li class="cursor-pointer hover:text-blue-900">About Us</li>
            <li class="cursor-pointer hover:text-blue-900">Location</li>
        </ul>
    </div>

    <!-- FACILITIES -->
    <section class="px-12 mt-6">
        <div class="border border-gray-400 rounded-lg p-5">

            <!-- Top Facility Icons -->
            <div class="flex gap-10 text-sm mb-5 justify-center">
                <div class="flex flex-col items-center">
                    <i class="fa-solid fa-wifi text-xl"></i>
                    <span>Top Wi-fi</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa-solid fa-people-group text-xl"></i>
                    <span>Check-in (24hour)</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa-solid fa-bus text-xl"></i>
                    <span>Airport transfer</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa-solid fa-bread-slice text-xl"></i>
                    <span>Great Breakfast</span>
                </div>
            </div>

            <hr class="my-4">

            <!-- Facility List -->
            <div class="grid grid-cols-2 text-sm leading-relaxed">
                <div>
                    <p>✔ Internet access</p>
                    <p>✔ Elevator</p>
                    <p>✔ Car park</p>
                    <p>✔ Hand sanitizer</p>
                </div>
                <div>
                    <p>✔ Spa (Indonesian)</p>
                    <p>✔ Fitness center</p>
                    <p>✔ Pool (Kids)</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT US -->
    <section class="px-12 mt-8">
        <h3 class="font-bold text-lg mb-2">About Us</h3>
        <p class="text-gray-700 text-sm leading-relaxed max-w-xl">
            Hilton Holten merupakan hotel bintang lima yang berlokasi strategis di jantung Kota Banda Aceh.
            Berdiri dengan mengusung konsep kemewahan modern dan kenyamanan maksimal,
            Hilton Holten hadir untuk memberikan pengalaman menginap tak terlupakan bagi setiap tamu.
        </p>
    </section>


    <!-- LOCATION -->
    <!-- LOCATION -->
    <section class="px-12 mt-10 mb-12 grid grid-cols-2 gap-8">

        <!-- GOOGLE MAPS EMBED -->
        <iframe
            class="rounded-lg w-full h-80 border shadow-lg"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6817831216867!2d95.3185973!3d5.5482909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30396e9240317af9%3A0x4d02e0b8e754e665!2sBanda%20Aceh!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
            loading="lazy">
        </iframe>

        <div class="text-sm">
            <p>📍 Exceptional score</p>
            <p>🏙️ Location rating</p>
            <p class="text-blue-900">📌 Exceptional location - near Banda Aceh city center</p>

            <div class="mt-6">
                <h4 class="font-bold text-gray-800 mb-2">Parking</h4>
                <p class="text-green-600">Free</p>
            </div>
        </div>

    </section>
</html>
