<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $p->nama_penginapan }} | Luxe Stay</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F5F1EF] text-gray-900">

    <!-- Back Button -->
    <div class="p-6">
        <a href="javascript:history.back()" class="text-2xl text-gray-700 hover:text-gray-900">&#8592;</a>
    </div>

    <section class="max-w-6xl mx-auto px-6 pb-14">

        <!-- TITLE -->
        <h1 class="text-4xl font-bold text-blue-900 mb-2">{{ $p->nama_penginapan }}</h1>

        <!-- STAR RATING (optional placeholder) -->
        <div class="flex text-yellow-500 mb-6">
            ★★★★★
        </div>

        <!-- IMAGE GALLERY -->
        <div class="flex gap-4">

            <!-- MAIN IMAGE -->
            <div class="w-1/2">
                <img src="{{ asset('storage/' . $p->gambar) }}"
                     class="rounded-lg w-full h-[330px] object-cover shadow">
            </div>

            <!-- GALLERY LIST -->
            <div class="w-1/2 grid grid-cols-2 gap-4">
                @if($p->gallery)
                    @foreach ($p->gallery as $img)
                        <img src="{{ asset('storage/' . $img) }}"
                             class="rounded-lg h-[155px] object-cover shadow">
                    @endforeach
                @else
                    <div class="text-gray-500">No gallery available.</div>
                @endif
            </div>

        </div>


        <!-- TABS -->
        <div class="mt-10 border-b border-gray-400 pb-2 flex gap-10 text-lg font-semibold text-gray-700">
            <button onclick="showTab('facilities')" id="btnFacilities" class="tab-active">Facilities</button>
            <button onclick="showTab('highlights')" id="btnHighlights">Highlights</button>
            <button onclick="showTab('about')" id="btnAbout">About Us</button>
            <button onclick="showTab('location')" id="btnLocation">Location</button>
        </div>


        <!-- CONTENT WRAPPER -->
        <div class="mt-6 flex gap-6">

            <!-- LEFT CONTENT -->
            <div class="w-2/3">

                <!-- FACILITIES TAB -->
                <div id="tabFacilities" class="tab-content">
                    <h3 class="text-xl font-bold mb-3">Facilities</h3>

                    <div class="grid grid-cols-2 gap-x-6 text-sm">
                        @foreach ($p->fasilitas as $f)
                            <p>✔ {{ $f->nama_fasilitas }}</p>
                        @endforeach
                    </div>
                </div>

                <!-- HIGHLIGHTS TAB -->
                <div id="tabHighlights" class="tab-content hidden">
                    <h3 class="text-xl font-bold mb-3">Highlights</h3>
                    <p class="text-gray-700 leading-relaxed">
                        {{ $p->highlight ?? 'Tidak ada highlight.' }}
                    </p>
                </div>

                <!-- ABOUT TAB -->
                <div id="tabAbout" class="tab-content hidden">
                    <h3 class="text-xl font-bold mb-3">About Us</h3>
                    <p class="text-gray-700 leading-relaxed">{{ $p->detail }}</p>
                </div>

            </div>

            <!-- RIGHT CONTENT – MAP -->
            <div class="w-1/3">

                <h3 class="text-xl font-bold mb-3">Location</h3>

                <div id="tabLocation" class="tab-content">

                    @if($p->latitude && $p->longitude)
                        <iframe
                            width="100%"
                            height="280"
                            class="rounded-lg shadow"
                            frameborder="0"
                            src="https://www.google.com/maps?q={{ $p->latitude }},{{ $p->longitude }}&hl=id&z=15&output=embed">
                        </iframe>

                        <p class="text-sm mt-2 text-gray-700">
                            📍 {{ $p->alamat }}
                        </p>
                    @else
                        <p class="text-gray-500 text-sm">Lokasi belum ditambahkan.</p>
                    @endif

                </div>

            </div>
        </div>

        <!-- BOOK NOW BUTTON -->
        <div class="mt-10 text-right">
            <button class="bg-[#D8C07A] px-6 py-3 text-white mt-4 font-bold rounded-xl shadow">
                BOOK NOW
            </button>
        </div>

    </section>


    <!-- TAB SCRIPT -->
    <script>
        function showTab(tab) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            document.getElementById('tab' + capitalize(tab)).classList.remove('hidden');

            document.querySelectorAll('button[id^="btn"]').forEach(btn => {
                btn.classList.remove('tab-active');
            });

            document.getElementById('btn' + capitalize(tab)).classList.add('tab-active');
        }

        function capitalize(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        }
    </script>

    <!-- ACTIVE TAB STYLE -->
    <style>
        .tab-active {
            border-bottom: 3px solid #D8C07A;
            padding-bottom: 6px;
            color: #D8C07A;
        }
    </style>

</body>
</html>
