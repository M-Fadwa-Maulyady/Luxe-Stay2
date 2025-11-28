<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Booking - Luxe Stay</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0F2244] min-h-screen">

    <!-- NAVBAR -->
    <header class="w-full bg-[#0F2244] py-4 px-10 flex items-center justify-between">

        <!-- Logo -->
        <div class="bg-[#E8C784] px-6 py-4 rounded-br-2xl">
            <h1 class="text-3xl font-serif text-[#0F2244] tracking-wide">
                LUXE<br>
                <span class="text-sm">STAY</span>
            </h1>
        </div>

        <!-- Menu -->
        <nav>
            <ul class="flex space-x-10 text-white text-lg">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/stay/Hotel" class="hover:underline">Stay</a></li>
                <li><a href="#" class="hover:underline">Promo</a></li>
                <li><a href="/contact" class="hover:underline">Contact-us</a></li>
            </ul>
        </nav>

        <!-- ICON USER + DROPDOWN -->
        <div class="relative">
            <button class="peer p-2 rounded-full hover:bg-white/10 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5
                        2.239-5 5 2.239 5 5 5zm0 2c-3.86 0-7
                        3.141-7 7h2c0-2.757 2.243-5
                        5-5s5 2.243 5 5h2c0-3.859-3.14-7-7-7z" />
                </svg>
            </button>

            <div class="hidden peer-focus:flex peer-hover:flex hover:flex
                flex-col absolute right-0 mt-2 w-48 bg-white text-gray-800
                rounded-xl shadow-lg p-4 z-50">

                <a href="/profile" class="py-2 px-2 rounded hover:bg-gray-100">Profil</a>
                <a href="{{ route('user.history') }}" class="py-2 px-2 rounded hover:bg-gray-100">History</a>

                <hr class="my-2">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="py-2 px-2 text-red-600 rounded hover:bg-red-100 w-full text-left">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </header>


    <!-- CONTENT -->
    <section class="px-10 py-10">

        <h1 class="text-3xl font-bold text-white mb-6">Riwayat Booking</h1>

        @foreach($bookings as $b)
    <div class="bg-white rounded-xl shadow p-5 mb-6 flex gap-5">

        <!-- IMAGE -->
        <img src="{{ asset('storage/'.$b->penginapan->gambar) }}"
             class="w-40 h-28 rounded-lg object-cover shadow">

        <!-- INFO -->
        <div class="flex-1">

            <h2 class="text-xl font-bold text-[#0F2244]">
                {{ $b->penginapan->nama_penginapan }}
            </h2>

            <p class="text-gray-600 text-sm">
                {{ $b->checkin_date }} → {{ $b->checkout_date }}
            </p>

            <p class="text-gray-800 mt-1 font-semibold">
                Total: Rp {{ number_format($b->total_price,0,',','.') }}
            </p>

            <!-- STATUS -->
            <span class="
                px-3 py-1 text-white rounded text-sm mt-2 inline-block
                @if($b->status=='pending') bg-yellow-500
                @elseif($b->status=='accepted') bg-blue-600
                @elseif($b->status=='done') bg-green-600
                @endif">
                {{ ucfirst($b->status) }}
            </span>

            <!-- ⭐ RATING -->
            @if($b->status == 'done' && !$b->rating)
                <form action="{{ route('user.history.rating', $b->id) }}" method="POST" class="mt-4">
                    @csrf
                    <label class="font-semibold text-[#0F2244]">Beri Rating</label>
                    <select name="rating" class="border p-2 rounded w-32">
                        <option>1</option><option>2</option><option>3</option>
                        <option>4</option><option>5</option>
                    </select>

                    <textarea name="review"
                        placeholder="Tulis review (opsional)"
                        class="border p-2 rounded w-full mt-2"></textarea>

                    <button class="bg-[#E8C784] text-[#0F2244] rounded px-4 py-2 mt-3 font-semibold">
                        Kirim Rating
                    </button>
                </form>

            @elseif($b->rating)
                <p class="mt-3 text-yellow-600 text-lg font-semibold">
                    ★ {{ $b->rating }}/5
                </p>
                <p class="text-gray-600">{{ $b->review }}</p>
            @endif

        </div>

    </div>
@endforeach


    </section>

</body>

</html>
