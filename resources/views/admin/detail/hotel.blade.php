<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel | Luxe Stay</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F5F1EF] text-gray-900">

    <!-- Back Button -->
    <!-- Back Button -->
<div class="p-6">
    <a href="/" class="text-xl hover:text-blue-900">
        &#8592;
    </a>
</div>


    <!-- Container -->
    <section class="max-w-6xl mx-auto px-6 pb-14">

        <!-- Hotel 1 -->
        <div class="flex justify-between gap-6 py-6 border-b border-gray-300">

            <!-- Left Info -->
            <div class="w-1/2">
                <h2 class="text-3xl font-bold text-blue-900 mb-3">Hilton Holten</h2>

                <div class="flex items-center mb-3">
                    <span class="text-yellow-600 text-lg">&#128205;</span>
                    <p class="ml-2 text-sm text-gray-700">Jl. Merdeka No. 88, Banda Aceh, Aceh 23233</p>
                </div>

                <div class="flex items-center gap-2 text-xs mb-4">
                    <span class="bg-gray-200 px-2 py-1 rounded">Wi-Fi Gratis</span>
                    <span class="bg-gray-200 px-2 py-1 rounded">Layanan Kamar 24 Jam</span>
                    <span class="bg-gray-200 px-2 py-1 rounded">4★</span>
                </div>

                <p class="text-sm text-gray-700 leading-relaxed mb-6 w-4/5">
                    Hilton Holten menghadirkan pengalaman menginap berkelas di jantung kota
                    dengan sentuhan kemewahan modern. Setiap kamar dirancang untuk kenyamanan maksimal,
                    dilengkapi fasilitas premium dan layanan eksklusif.
                </p>

                <a href="/hilton">
    <button class="bg-[#D8C07A] text-white font-bold px-6 py-2 rounded-lg">
        CHECK NOW
    </button>
</a>

            </div>

            <!-- Right Image & Price -->
            <div class="w-1/2 text-center">
                <img src="{{asset('storage/unnamed.jpg')}}" class="rounded-lg w-full h-56 object-cover mb-4">
                <p class="text-sm text-gray-700">Harga mulai: Rp 1.250.000 / malam</p>
            </div>
        </div>

        <!-- Hotel 2 -->
        <div class="flex justify-between gap-6 py-6">

            <!-- Left Info -->
            <div class="w-1/2">
                <h2 class="text-3xl font-bold text-blue-900 mb-3">Radisson Hotel</h2>

                <div class="flex items-center mb-3">
                    <span class="text-yellow-600 text-lg">&#128205;</span>
                    <p class="ml-2 text-sm text-gray-700">Jl. Pantai Lhoknga No. 17, Aceh Besar, Aceh 23354</p>
                </div>

                <div class="flex items-center gap-2 text-xs mb-4">
                    <span class="bg-gray-200 px-2 py-1 rounded">Wi-Fi Gratis</span>
                    <span class="bg-gray-200 px-2 py-1 rounded">Ruang rapat dan ballroom</span>
                    <span class="bg-gray-200 px-2 py-1 rounded">4★</span>
                </div>

                <p class="text-sm text-gray-700 leading-relaxed mb-6 w-4/5">
                    Radisson Hotel menawarkan pengalaman menginap premium dengan
                    perpaduan kenyamanan modern dan kemewahan elegan.
                    Terletak strategis di tepi pantai dengan pemandangan laut yang menakjubkan.
                </p>

                <a href="/radisson">
    <button class="bg-[#D8C07A] text-white font-bold px-6 py-2 rounded-lg">
        CHECK NOW
    </button>
</a>

            </div>

            <!-- Right Image & Price -->
            <div class="w-1/2 text-center">
                <img src="{{asset('storage/image.png')}}" class="rounded-lg w-full h-56 object-cover mb-4">
                <p class="text-sm text-gray-700">Harga mulai: Rp 1.750.000 / malam</p>
            </div>
        </div>

    </section>

</body>
</html>
