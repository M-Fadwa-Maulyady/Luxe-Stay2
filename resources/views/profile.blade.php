<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Luxe Stay</title>
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
                <li><a href="#" class="font-semibold underline">Home</a></li>
                <li><a href="#" class="hover:underline">Stay</a></li>
                <li><a href="#" class="hover:underline">Promo</a></li>
                <li><a href="#" class="hover:underline">Contact-us</a></li>
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

                <a href="#" class="py-2 px-2 rounded hover:bg-gray-100">Profil</a>
                <a href="#" class="py-2 px-2 rounded hover:bg-gray-100">History</a>

                <hr class="my-2">

                <a href="#" class="py-2 px-2 rounded text-red-600 hover:bg-red-100">Logout</a>
            </div>
        </div>
    </header>

    <!-- CONTENT -->
    <section class="px-10 py-10 grid grid-cols-1 lg:grid-cols-2 gap-10">

        <!-- INFORMASI AKUN -->
        <div class="bg-[#2C3E5E] rounded-2xl p-10 text-white">
            <h2 class="text-2xl font-semibold mb-6">Informasi Akun</h2>

            <div class="space-y-5">

                <div>
                    <label class="block mb-1">Username</label>
                    <input type="text" value="User"
                        class="w-full rounded-lg px-4 py-2 text-black focus:ring focus:ring-blue-300">
                </div>

                <div>
                    <label class="block mb-1">Mail</label>
                    <input type="email" value="User@gmail.com"
                        class="w-full rounded-lg px-4 py-2 text-black focus:ring focus:ring-blue-300">
                </div>

                <div>
                    <label class="block mb-1">Password</label>
                    <input type="password" value="*********"
                        class="w-full rounded-lg px-4 py-2 text-black focus:ring focus:ring-blue-300">
                </div>

                <div>
                    <label class="block mb-1">Nomor Telepon</label>
                    <input type="text" value="08********"
                        class="w-full rounded-lg px-4 py-2 text-black focus:ring focus:ring-blue-300">
                </div>

                <div>
                    <label class="block mb-1">Alamat</label>
                    <input type="text"
                        class="w-full rounded-lg px-4 py-2 text-black focus:ring focus:ring-blue-300">
                </div>

                <!-- BUTTON SIMPAN -->
                <button id="btnSimpan"
                    class="w-full bg-[#5C6EF8] py-2 rounded-lg text-white font-semibold flex justify-center items-center space-x-2">
                    <span>💾</span> <span>Simpan</span>
                </button>
            </div>
        </div>

        <!-- FOTO PROFIL -->
        <div class="bg-[#2C3E5E] rounded-2xl p-10 text-white flex flex-col items-center justify-center">
            <h2 class="text-2xl font-semibold mb-6 self-start">Foto Profil</h2>

            <div class="bg-white rounded-full w-40 h-40 flex items-center justify-center mb-4 overflow-hidden">
                <img id="previewFoto" src="https://via.placeholder.com/150" class="w-full h-full object-cover"
                    alt="Foto Profil">
            </div>

            <input type="file" id="uploadFoto" accept="image/*" class="text-sm">
        </div>

    </section>

    <!-- SCRIPT -->
    <script>
        // PREVIEW FOTO
        document.getElementById('uploadFoto').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                document.getElementById('previewFoto').src = URL.createObjectURL(file);
            }
        });

        // PINDAH KE LANDING
        document.getElementById('btnSimpan').addEventListener('click', function () {
            window.location.href = "/landing"; // halaman tujuan
        });

        document.getElementById('btnSimpan').addEventListener('click', function () {
        window.location.href = "{{ route('landing') }}";
        });
    </script>



</body>

</html>
