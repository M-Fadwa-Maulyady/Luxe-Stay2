<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Stay | Temukan Penginapan Impianmu</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- GOOGLE FONTS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:wght@400;600;700;900&family=Roboto:wght@300;400&display=swap"
        rel="stylesheet">

    <!-- TAILWIND CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'luxe-dark': '#0d1b2a',
                        'luxe-accent': '#f4b41a',
                    },
                    fontFamily: {
                        montserrat: ['Montserrat', 'sans-serif'],
                        playfair: ['Playfair Display', 'serif'],
                        roboto: ['Roboto', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
    @keyframes dropdownFade {
        0% { opacity: 0; transform: translateY(-10px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .dropdown-animate {
        animation: dropdownFade 0.25s ease-out;
    }
</style>
</head>

<body class="bg-gray-50 text-gray-900 opacity-0 animate-fadeIn">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 w-full z-20 flex justify-between items-center px-10 py-4 text-white animate-slideDown backdrop-blur-md bg-black/20">
        <div class="bg-[#e5c38d] text-black px-6 py-4 rounded-br-[50px] text-center leading-tight font-montserrat">
            <div class="text-xl font-extrabold tracking-[4px]">LUXE</div>
            <div class="text-xs font-semibold tracking-[4px] opacity-70">S T A Y</div>
        </div>

        <ul class="flex gap-10 mx-auto font-montserrat">
            <li><a class="border-b-2 border-white pb-1 font-semibold" href="#">Home</a></li>
            <li><a class="hover:text-luxe-accent transition" href="#stay">Stay</a></li>
            <li><a class="hover:text-luxe-accent transition" href="#promo">Promo</a></li>
            <li><a class="hover:text-luxe-accent transition" href="{{ route('contact.index') }}">Contact us</a></li>
        </ul>

        <!-- USER DROPDOWN -->
<div class="relative z-50">
    <button id="userBtn" class="text-white text-2xl hover:text-luxe-accent cursor-pointer transition">
        <i class="fa-solid fa-user"></i>
    </button>

    <div id="userMenu"
        class="hidden absolute right-0 mt-3 bg-white text-black py-2 w-40 rounded-lg shadow-lg border">
        <a href="/profile" class="block px-4 py-2 hover:bg-gray-100 text-sm">Profil</a>
        <a href="{{ route('user.history') }}" class="block px-4 py-2 hover:bg-gray-100 text-sm">History</a>
        <a href="/login" class="block px-4 py-2 hover:bg-red-100 text-sm text-red-600">Login</a>
    </div>
</div>
    </nav>

    <!-- HERO SECTION -->
    <section class="relative h-[90vh] bg-cover bg-center animate-zoomIn"
        style="background-image: url('{{asset('image/background-image.png')}}');">

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 flex flex-col justify-center h-full pl-16 text-white animate-fadeUp delay-200">
            <p class="font-montserrat text-lg tracking-wide">WELCOME TO</p>
            <h1 class="font-playfair text-8xl font-bold leading-none">LUXE</h1>
            <p class="font-playfair text-2xl tracking-[0.4em] mt-2">S T A Y</p>
            <p class="font-roboto text-base mt-6 max-w-xl">kemewahan yang bisa Anda rasakan di setiap langkah.</p>

            <a href="#stay"
                class="mt-8 w-fit bg-luxe-accent text-black px-6 py-3 rounded-lg font-semibold hover:scale-110 transition font-montserrat">
                BOOK NOW
            </a>
        </div>
    </section>

    <!-- STAY SECTION -->
    <section id="stay" class="bg-luxe-dark text-white py-16 text-center">
        <h2 class="text-3xl font-bold mb-10 font-montserrat animate-fadeUp">Temukan Penginapan Impianmu!</h2>

        <div class="flex justify-center flex-wrap gap-8 px-6">

            <a href="{{ $hotel ? url('/stay/'.$hotel->id) : '#' }}" class="cardStay">
    <img
        src="{{ $hotelImg ? asset('storage/'.$hotelImg->gambar) : 'https://via.placeholder.com/300' }}"
        class="rounded-lg mb-3 h-40 w-full object-cover">
    <h3 class="text-xl font-semibold font-montserrat">Hotel</h3>
</a>

<a href="{{ $villa ? url('/stay/'.$villa->id) : '#' }}" class="cardStay">
    <img
        src="{{ $villaImg ? asset('storage/'.$villaImg->gambar) : 'https://via.placeholder.com/300' }}"
        class="rounded-lg mb-3 h-40 w-full object-cover">
    <h3 class="text-xl font-semibold font-montserrat">Villa</h3>
</a>

<a href="{{ $apartemen ? url('/stay/'.$apartemen->id) : '#' }}" class="cardStay">
    <img
        src="{{ $aptImg ? asset('storage/'.$aptImg->gambar) : 'https://via.placeholder.com/300' }}"
        class="rounded-lg mb-3 h-40 w-full object-cover">
    <h3 class="text-xl font-semibold font-montserrat">Apartemen</h3>
</a>


        </div>
    </section>

    <!-- PROMO SECTION -->
<section id="promo" class="py-16 text-center bg-white">
    <h2 class="text-3xl font-bold mb-8 text-luxe-dark font-montserrat animate-fadeUp">
        Jangan sampai kelewatan promo!
    </h2>

    <div class="flex justify-center flex-wrap gap-6 px-6">

        @if ($promo->count() > 0)
    @foreach ($promo as $p)
        <div class="promoCard">
            <div class="h-60 overflow-hidden">
                <img src="{{ asset('storage/'.$p->gambar) }}"
                     class="w-full h-full object-cover transition hover:scale-110 duration-500">
            </div>

            <div class="p-4 text-white">
                <h3 class="text-2xl font-bold mb-1 font-montserrat">
                    PROMO: {{ $p->nama_penginapan }}
                </h3>

                <p class="text-sm text-luxe-accent mb-3">
                    {{ $p->promo_text ?? 'Promo spesial untuk Anda!' }}
                </p>

                <a href="{{ url('/stay/detail/'.$p->id) }}"
                   class="inline-block bg-luxe-accent text-luxe-dark px-4 py-2 rounded-lg font-semibold hover:scale-105 transition">
                    Lihat Detail
                </a>
            </div>
        </div>
    @endforeach
@else
    <p class="text-gray-600 text-center w-full">
        Belum ada promo tersedia saat ini.
    </p>
@endif


    </div>
</section>


    <!-- FOOTER -->
    <!-- FOOTER BARU -->
<footer class="bg-[#0d1b2a] text-white pt-14 pb-10 relative">

    <!-- Segitiga kecil di atas -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-0 h-0 
        border-l-[25px] border-l-transparent 
        border-r-[25px] border-r-transparent 
        border-b-[25px] border-b-[#0d1b2a]">
    </div>

    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">

        <!-- LOGO & CONTACT -->
        <div>
            <h2 class="font-playfair text-2xl font-bold tracking-wider">LUXE</h2>
            <p class="tracking-[0.4em] text-sm opacity-70 mb-4">S T A Y</p>

            <p class="text-sm opacity-80 leading-relaxed">
                Tel: +62 821 7979 3306<br>
                luxury.luxestay@gmail.com
            </p>
        </div>

        <!-- MENU -->
        <div class="space-y-2">
            <p class="font-semibold mb-2">About Us</p>
            <p class="font-semibold mb-2">Contact</p>
            <p class="font-semibold mb-2">Terms & Conditions</p>
        </div>

        <!-- SOCIAL -->
        <div class="space-y-3">
            <p class="font-semibold mb-2">Social Media</p>
            <div class="flex items-center gap-3">
                <i class="fa-brands fa-facebook"></i> Facebook
            </div>
            <div class="flex items-center gap-3">
                <i class="fa-brands fa-twitter"></i> Twitter
            </div>
            <div class="flex items-center gap-3">
                <i class="fa-brands fa-instagram"></i> Instagram
            </div>
        </div>

        <!-- NEWSLETTER -->
        <div>
            <p class="font-semibold mb-3">Subscribe to our newsletter</p>
            <div class="flex">
                <input 
                    type="email" 
                    placeholder="Email Address"
                    class="w-full px-3 py-2 rounded-l-md text-black text-sm outline-none"
                >
                <button class="bg-[#f4b41a] px-5 py-2 rounded-r-md text-black font-semibold text-sm">
                    OK
                </button>
            </div>
        </div>

    </div>
</footer>


    <!-- ANIMATIONS + CARD STYLE -->
    <style>
        @keyframes fadeIn { from { opacity: 0 } to { opacity: 1 } }
        @keyframes fadeUp { from { opacity:0; transform:translateY(20px) } to { opacity:1; transform:translateY(0) } }
        @keyframes slideDown { from { transform:translateY(-30px) } to { transform:translateY(0) } }
        @keyframes zoomIn { from { transform:scale(1.05)} to { transform:scale(1) } }

        .animate-fadeIn { animation: fadeIn .8s forwards }
        .animate-fadeUp { animation: fadeUp .8s forwards }
        .animate-slideDown { animation: slideDown .8s forwards }
        .animate-zoomIn { animation: zoomIn 1.1s forwards }

        .delay-200 { animation-delay: .2s }
        .delay-500 { animation-delay: .5s }

        .cardStay, .promoCard {
            background: rgba(255,255,255,0.08);
            padding: 1rem;
            border-radius: 12px;
            width: 16rem;
            transition: .4s;
            animation: fadeUp 1s forwards;
        }

        .cardStay:hover, .promoCard:hover {
            transform: translateY(-8px) scale(1.05);
        }

        .promoCard {
            background: #0d1b2a;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(244,180,26,0.3);
        }
    </style>

    <!-- DROPDOWN SCRIPT (HARUS DI BAWAH) -->
    <script>
    const userBtn = document.getElementById("userBtn");
    const userMenu = document.getElementById("userMenu");

    userBtn.addEventListener("click", (e) => {
        e.stopPropagation();

        // toggle
        userMenu.classList.toggle("hidden");

        // jika muncul → kasih animasi
        if (!userMenu.classList.contains("hidden")) {
            userMenu.classList.remove("dropdown-animate");
            void userMenu.offsetWidth;
            userMenu.classList.add("dropdown-animate");
        }
    });

    document.addEventListener("click", (e) => {
        if (!userMenu.contains(e.target)) {
            userMenu.classList.add("hidden");
        }
    });


</script>
</body>
</html>
