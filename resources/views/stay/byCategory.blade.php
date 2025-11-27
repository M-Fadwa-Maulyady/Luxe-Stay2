<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $kategori->nama_kategori }} — Luxe Stay</title>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
</head>

<body class="bg-gray-100">

<div class="max-w-6xl mx-auto py-10">

    <h1 class="text-3xl font-bold mb-6">
        Daftar {{ $kategori->nama_kategori }}
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        @forelse ($penginapan as $p)
        <div class="bg-white rounded-lg shadow p-4">
            <img 
                src="{{ asset('storage/'.$p->gambar) }}" 
                class="w-full h-40 object-cover rounded"
            >

            <h2 class="text-xl font-semibold mt-3">{{ $p->nama_penginapan }}</h2>

            <p class="text-sm text-gray-700 mt-2">
                {{ Str::limit($p->detail, 100) }}
            </p>

            <a href="#" class="block mt-4 text-blue-600 font-semibold">
                Lihat Detail →
            </a>
        </div>
        @empty
        <p class="col-span-3 text-center text-gray-500">
            Belum ada penginapan untuk kategori ini.
        </p>
        @endforelse

    </div>

</div>

</body>
</html>
