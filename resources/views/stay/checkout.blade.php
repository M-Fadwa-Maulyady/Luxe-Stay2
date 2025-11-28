<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | {{ $p->nama_penginapan }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F5F1EF] text-gray-900">

    <!-- Back -->
    <div class="p-6">
        <a href="javascript:history.back()" class="text-2xl text-gray-700 hover:text-gray-900">&#8592;</a>
    </div>

    <section class="max-w-4xl mx-auto px-6 pb-20">

        <!-- Title -->
        <h1 class="text-4xl font-bold text-blue-900 mb-6">Checkout</h1>

        <!-- CARD -->
        <div class="bg-white rounded-xl shadow p-6">

            <!-- HEADER -->
            <div class="flex gap-4">
                <img src="{{ asset('storage/'.$p->gambar) }}" class="w-40 h-28 rounded-lg object-cover shadow">

                <div>
                    <h2 class="text-2xl font-bold text-blue-900">{{ $p->nama_penginapan }}</h2>
                    <p class="text-gray-600">{{ $p->alamat ?? 'Alamat belum tersedia' }}</p>

                    @if($p->harga)
                    <p class="mt-2 font-semibold text-yellow-700">
                        Mulai dari: Rp {{ number_format($p->harga, 0, ',', '.') }} / malam
                    </p>
                    @endif
                </div>
            </div>

            <hr class="my-6 border-gray-300">

            <!-- FORM -->
            <form action="{{ route('stay.checkout.store', $p->id) }}" method="POST" class="text-sm">
                @csrf

                <input type="hidden" name="total_night" id="total_night_input">
                <input type="hidden" name="total_price" id="total_price_input">

                <div class="grid grid-cols-2 gap-6">

                    <!-- LEFT FORM -->
                    <div>

                        <label class="font-semibold">Nama Lengkap</label>
                        <input type="text" name="nama"
                               class="w-full mt-1 mb-4 p-3 rounded-lg border border-gray-300"
                               required>

                        <label class="font-semibold">Email</label>
                        <input type="email" name="email"
                               class="w-full mt-1 mb-4 p-3 rounded-lg border border-gray-300"
                               required>

                        <label class="font-semibold">No. Telepon</label>
                        <input type="text" name="telepon"
                               class="w-full mt-1 mb-4 p-3 rounded-lg border border-gray-300"
                               required>

                    </div>

                    <!-- RIGHT FORM -->
                    <div>

                        <label class="font-semibold">Check-in</label>
                        <input type="date" name="checkin_date" id="checkin"
                               class="w-full mt-1 mb-4 p-3 rounded-lg border border-gray-300"
                               required>

                        <label class="font-semibold">Check-out</label>
                        <input type="date" name="checkout_date" id="checkout"
                               class="w-full mt-1 mb-4 p-3 rounded-lg border border-gray-300"
                               required>

                        <label class="font-semibold">Total Malam</label>
                        <input type="text" id="total_night"
                               class="w-full mt-1 mb-4 p-3 rounded-lg border border-gray-300 bg-gray-100"
                               readonly>

                        <label class="font-semibold">Total Harga</label>
                        <input type="text" id="total_price"
                               class="w-full mt-1 mb-4 p-3 rounded-lg border border-gray-300 bg-gray-100"
                               readonly>

                    </div>
                </div>

                <!-- BUTTON SUBMIT -->
                <div class="text-right mt-6">
                    <button class="bg-[#D8C07A] px-6 py-3 text-white font-bold rounded-xl shadow">
                        CONFIRM BOOKING
                    </button>
                </div>

            </form>

        </div>

    </section>


    <!-- TOTAL CALCULATION -->
    <script>
        let price = {{ $p->harga ?? 0 }};

        function calculateTotal() {
            let checkin = document.getElementById("checkin").value;
            let checkout = document.getElementById("checkout").value;

            if (checkin && checkout) {
                let date1 = new Date(checkin);
                let date2 = new Date(checkout);
                let diffTime = date2 - date1;

                let nights = diffTime / (1000 * 3600 * 24);

                document.getElementById("total_night").value = nights + " malam";
                document.getElementById("total_price").value = "Rp " + (nights * price).toLocaleString("id-ID");

                document.getElementById("total_night_input").value = nights;
                document.getElementById("total_price_input").value = nights * price;
            }
        }

        document.getElementById("checkin").addEventListener("change", calculateTotal);
        document.getElementById("checkout").addEventListener("change", calculateTotal);
    </script>

</body>
</html>
