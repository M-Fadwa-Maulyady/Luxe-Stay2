<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartemen Center Point | Luxe Stay</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
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
    <a href="/apartemen" class="text-2xl hover:text-blue-900">&#8592;</a>
</div>

<!-- Header -->
<div class="px-12 flex justify-between items-start">
    <div>
        <h2 class="text-5xl font-bold text-blue-900">Apartemen Center Point</h2>
        <div class="text-yellow-500 mt-2 text-lg">★★★★☆</div>
    </div>

    <a href="#booking" class="bg-[#D8C07A] text-white px-6 py-3 rounded-lg font-semibold shadow hover:opacity-90 transition">
        BOOK NOW
    </a>
</div>

<!-- Gallery -->
<section class="px-12 mt-6 grid grid-cols-12 gap-6">
    <div class="col-span-6">
        <img src="{{asset('/image/Rectangle 1095 (3).png')}}" class="rounded-xl h-80 w-full object-cover shadow-lg">
    </div>
    <div class="col-span-6 grid grid-cols-2 gap-4">
        <img src="{{asset('/image/apcp1.png')}}" class="rounded-xl h-36 object-cover shadow">
        <img src="{{asset('/image/apcp2.png')}}" class="rounded-xl h-36 object-cover shadow">
        <img src="{{asset('/image/apcp3.png')}}" class="rounded-xl h-36 object-cover shadow">
        <img src="{{asset('/image/apcp4.png')}}" class="rounded-xl h-36 object-cover shadow">
    </div>
</section>

<!-- Tabs -->
<div class="px-12 mt-8 border-b border-gray-400">
    <ul class="flex justify-center gap-14 text-sm font-semibold">
        <li class="active-tab">Facilities</li>
        <li class="cursor-pointer hover:text-blue-900">Highlights</li>
        <li class="cursor-pointer hover:text-blue-900">About Us</li>
        <li class="cursor-pointer hover:text-blue-900">Location</li>
    </ul>
</div>

<!-- Facilities -->
<section class="px-12 mt-6">
    <div class="border border-gray-400 rounded-lg p-5">

        <div class="flex gap-10 text-sm mb-5 justify-center">
            <div class="flex flex-col items-center"><i class="fa-solid fa-wifi text-xl"></i><span>Free Wi-Fi</span></div>
            <div class="flex flex-col items-center"><i class="fa-solid fa-car text-xl"></i><span>Parking</span></div>
            <div class="flex flex-col items-center"><i class="fa-solid fa-kitchen-set text-xl"></i><span>Dapur</span></div>
            <div class="flex flex-col items-center"><i class="fa-solid fa-elevator text-xl"></i><span>Lift</span></div>
        </div>

        <hr class="my-4">

        <div class="grid grid-cols-2 text-sm leading-relaxed">
            <div>
                <p>✔ Pusat Kota</p>
                <p>✔ Family Friendly</p>
                <p>✔ Sistem Keamanan 24 Jam</p>
            </div>
            <div>
                <p>✔ Fully Furnished</p>
                <p>✔ Room Service</p>
                <p>✔ AC</p>
            </div>
        </div>

    </div>
</section>

<!-- About -->
<section class="px-12 mt-8 max-w-xl">
    <h3 class="font-bold text-lg mb-2">About Us</h3>
    <p class="text-sm text-gray-700 leading-relaxed">
        Apartemen Center Point menawarkan hunian modern di pusat kota,
        dekat pusat perbelanjaan dan transportasi, cocok untuk perjalanan keluarga maupun bisnis.
    </p>
</section>

<!-- Booking & Map -->
<section id="booking" class="px-12 mt-10 mb-14 grid grid-cols-2 gap-8">

        <iframe class="rounded-lg w-full h-80 border shadow-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6817831216867!2d95.3185973!3d5.5482909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30396e9240317af9%3A0x4d02e0b8e754e665!2sPantai%20Aceh!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid">
        </iframe>
</section>

</body>
</html>
