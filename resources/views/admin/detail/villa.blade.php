<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa | Luxe Stay</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F5F1EF] text-gray-900">

    <!-- Back Button -->
    <div class="p-6">
        <a href="/" class="text-2xl text-gray-700 hover:text-gray-900">&#8592;</a>
    </div>

    <section class="max-w-6xl mx-auto px-6 pb-14">

        <!-- Villa 1 -->
        <div class="flex gap-6 justify-between border-b border-gray-300 pb-10 mb-10">
            <!-- Left -->
            <div class="w-1/2">

                <h2 class="text-4xl font-bold text-blue-900 mb-3">Villa Hawai</h2>

                <!-- Location -->
                <div class="flex items-center text-sm mb-3">
                    <span class="text-yellow-600 text-lg">&#128205;</span>
                    <p class="ml-2">Jl. Pantai Pasir Putih No. 12, Desa Lamreh, Kecamatan Mesjid Raya, Aceh Besar</p>
                </div>

                <!-- Facilities -->
                <div class="flex gap-2 mb-4 text-xs">
                    <span class="bg-gray-200 px-3 py-1 rounded">Wi-Fi Gratis</span>
                    <span class="bg-gray-200 px-3 py-1 rounded">Restoran tepi kolam</span>
                    <span class="bg-gray-200 px-3 py-1 rounded">4★</span>
                </div>

                <!-- Description -->
                <p class="text-sm text-gray-700 leading-relaxed mb-6">
                    Villa Hawai menghadirkan pengalaman menginap berkelas di jantung kota
                    dengan sentuhan kemewahan tropis. Setiap kamar dirancang dengan interior alami
                    dan suasana tenang, menghadirkan kenyamanan maksimal bagi tamu.
                    Nikmati hidangan lezat di restoran terbuka dan layanan eksklusif sepanjang hari.
                </p>

                <!-- Button -->
                <a href="/hawai">
    <button class="bg-[#D8C07A] text-white font-bold px-6 py-2 rounded-lg">
        CHECK NOW
    </button>
</a>
            </div>

            <!-- Right -->
            <div class="w-1/2 text-center">
                <img src="{{asset('/image/Rectangle 1095.png')}}" class="rounded-lg w-full h-56 object-cover mb-4">
                <p class="text-sm text-gray-700">Harga mulai: Rp 2.250.000 / malam</p>
            </div>
        </div>

        <!-- Villa 2 -->
        <div class="flex gap-6 justify-between">

            <!-- Left -->
            <div class="w-1/2">

                <h2 class="text-4xl font-bold text-blue-900 mb-3">Villa Tropis</h2>

                <div class="flex items-center text-sm mb-3">
                    <span class="text-yellow-600 text-lg">&#128205;</span>
                    <p class="ml-2">Jl. Pantai Ujong Batee No. 5, Desa Ujong Batee, Kecamatan Lhoknga, Aceh Besar</p>
                </div>

                <div class="flex gap-2 mb-4 text-xs">
                    <span class="bg-gray-200 px-3 py-1 rounded">Wi-Fi Gratis</span>
                    <span class="bg-gray-200 px-3 py-1 rounded">Kolam renang pribadi</span>
                    <span class="bg-gray-200 px-3 py-1 rounded">4★</span>
                </div>

                <p class="text-sm text-gray-700 leading-relaxed mb-6">
                    Villa Tropis menawarkan pengalaman menginap yang tenang di tengah alam tropis.
                    Didesain dengan sentuhan kayu alami dan suasana privat untuk kenyamanan maksimal.
                </p>

                            <a href="/tropis">
    <button class="bg-[#D8C07A] text-white font-bold px-6 py-2 rounded-lg">
        CHECK NOW
    </button>
</a>
            </div>

            <div class="w-1/2 text-center">
                <img src="{{asset('/image/Rectangle 1095 (1).png')}}" class="rounded-lg w-full h-56 object-cover mb-4">
                <p class="text-sm text-gray-700">Harga mulai: Rp 2.750.000 / malam</p>
            </div>
        </div>

    </section>

</body>
</html>
