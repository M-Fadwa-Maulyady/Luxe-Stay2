<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $kategori->nama_kategori }} | Luxe Stay</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F5F1EF] text-gray-900">

    <!-- Back Button -->
    <div class="p-6">
        <a href="/" class="text-2xl text-gray-700 hover:text-gray-900">&#8592;</a>
    </div>

    <section class="max-w-6xl mx-auto px-6 pb-14">

        @foreach ($penginapan as $p)
        <div class="flex gap-6 justify-between border-b border-gray-300 pb-10 mb-10">

            <!-- LEFT -->
            <div class="w-1/2">

                <h2 class="text-4xl font-bold text-blue-900 mb-3">
                    {{ $p->nama_penginapan }}
                </h2>

                <!-- Lokasi (optional, kalau kamu punya kolom lokasi nanti) -->
                @if ($p->lokasi ?? false)
                <div class="flex items-center text-sm mb-3">
                    <span class="text-yellow-600 text-lg">&#128205;</span>
                    <p class="ml-2">{{ $p->lokasi }}</p>
                </div>
                @endif

                <!-- Fasilitas -->
                <div class="flex gap-2 mb-4 text-xs flex-wrap">
                    @foreach ($p->fasilitas as $f)
                        <span class="bg-gray-200 px-3 py-1 rounded">{{ $f->nama_fasilitas }}</span>
                    @endforeach
                </div>

                <!-- Deskripsi -->
                <p class="text-sm text-gray-700 leading-relaxed mb-6">
                    {{ Str::limit($p->detail, 200) }}
                </p>

                <!-- Button -->
                <a href="/stay/detail/{{ $p->id }}">
                    <button class="bg-[#D8C07A] text-white font-bold px-6 py-2 rounded-lg">
                        CHECK NOW
                    </button>
                </a>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="w-1/2 text-center">
                <img src="{{ asset('storage/' . $p->gambar) }}"
                     class="rounded-lg w-full h-56 object-cover mb-4">

                @if ($p->harga ?? false)
                    <p class="text-sm text-gray-700">Harga mulai: Rp {{ number_format($p->harga, 0, ',', '.') }} / malam</p>
                @endif
            </div>

        </div>
        @endforeach

    </section>

</body>
</html>
