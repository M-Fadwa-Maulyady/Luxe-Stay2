<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radisson | Luxe Stay</title>

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
            <h2 class="text-5xl font-bold text-blue-900">Radisson</h2>
            <div class="text-yellow-500 mt-2 text-lg">
                ★★★★★
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
        <img src="{{asset('image/radisson-main.jpg')}}"
             class="rounded-xl h-80 w-full object-cover shadow-lg hover:scale-[1.02] transition duration-300">
    </div>

    <!-- SMALL IMAGES GRID -->
    <div class="col-span-6 grid grid-cols-2 gap-4">
        <img src="{{asset('/image/radisson-1.jpg')}}"
             class="rounded-xl h-36 w-full object-cover shadow-md hover:scale-105 transition duration-300">

        <img src="{{asset('/image/radisson-2.jpg')}}"
             class="rounded-xl h-36 w-full object-cover shadow-md hover:scale-105 transition duration-300">

        <img src="{{asset('/image/radisson-3.jpg')}}"
             class="rounded-xl h-36 w-full object-cover shadow-md hover:scale-105 transition duration-300">

        <img src="{{asset('/image/radisson-4.jpg')}}"
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

            <div class="flex gap-10 text-sm mb-5 justify-center">
                <div class="flex flex-col items-center">
                    <i class="fa-solid fa-wifi text-xl"></i>
                    <span>Premium Wi-fi</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa-solid fa-spa text-xl"></i>
                    <span>Spa & Relax</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa-solid fa-person-swimming text-xl"></i>
                    <span>Infinity Pool</span>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa-solid fa-mug-hot text-xl"></i>
                    <span>Gourmet Breakfast</span>
                </div>
            </div>

            <hr class="my-4">

            <div class="grid grid-cols-2 text-sm leading-relaxed">
                <div>
                    <p>✔ Internet access</p>
                    <p>✔ Free valet parking</p>
                    <p>✔ Elevator</p>
                    <p>✔ Hand sanitizer</p>
                </div>
                <div>
                    <p>✔ Spa & sauna</p>
                    <p>✔ Fitness center</p>
                    <p>✔ Outdoor swimming pool</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT US -->
    <section class="px-12 mt-8">
        <h3 class="font-bold text-lg mb-2">About Us</h3>
        <p class="text-gray-700 text-sm leading-relaxed max-w-xl">
            Radisson membawa standar layanan internasional ke Banda Aceh.
            Dengan kenyamanan premium dan fasilitas kelas dunia,
            Radisson memastikan setiap tamu merasakan kemewahan sesungguhnya
            di setiap momen menginap.
        </p>
    </section>

    <!-- LOCATION -->
    <section class="px-12 mt-10 mb-12 grid grid-cols-2 gap-8">

        <iframe
            class="rounded-lg w-full h-80 border shadow-lg"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6817831216867!2d95.3185973!3d5.5482909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30396e9240317af9%3A0x4d02e0b8e754e665!2sBanda%20Aceh!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
            loading="lazy">
        </iframe>

        <div class="text-sm">
            <p>📍 Excellent score</p>
            <p>🏙️ Location rating</p>
            <p class="text-blue-900">📌 Premium location — close to business district</p>

            <div class="mt-6">
                <h4 class="font-bold text-gray-800 mb-2">Parking</h4>
                <p class="text-green-600">Free Valet</p>
            </div>
        </div>

    </section>

</body>
</html>
