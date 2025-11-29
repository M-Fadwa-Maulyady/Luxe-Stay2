<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Luxe Stay</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0F2244] min-h-screen">

<header class="w-full bg-[#0F2244] py-4 px-10 flex items-center justify-between">
    <div class="bg-[#E8C784] px-6 py-4 rounded-br-2xl">
        <h1 class="text-3xl font-serif text-[#0F2244] tracking-wide">
            LUXE<br><span class="text-sm">STAY</span>
        </h1>
    </div>

    <nav>
        <ul class="flex space-x-10 text-white text-lg">
            <li><a href="/" class="hover:underline">Home</a></li>
            <li><a href="/stay/Hotel" class="hover:underline">Stay</a></li>
            <li><a href="#promo" class="hover:underline">Promo</a></li>
            <li><a href="/contact" class="hover:underline">Contact-us</a></li>
        </ul>
    </nav>
</header>

<section class="px-10 py-10 grid grid-cols-1 lg:grid-cols-2 gap-10">

    <!-- FORM UPDATE PROFIL -->
    <form id="profileForm"
      action="{{ route('profile.update') }}"
      method="POST"
      enctype="multipart/form-data"
      class="bg-[#2C3E5E] rounded-2xl p-10 text-white space-y-5">
    @csrf

    <h2 class="text-2xl font-semibold mb-6">Informasi Akun</h2>

    <div>
        <label class="block mb-1">Username</label>
        <input type="text" name="name" value="{{ $user->name }}"
               class="w-full rounded-lg px-4 py-2 text-black">
    </div>

    <div>
        <label class="block mb-1">Email</label>
        <input type="email" name="email" value="{{ $user->email }}"
               class="w-full rounded-lg px-4 py-2 text-black">
    </div>

    <div>
        <label class="block mb-1">Nomor Telepon</label>
        <input type="text" name="phone" value="{{ $user->phone }}"
               class="w-full rounded-lg px-4 py-2 text-black">
    </div>

    <div>
        <label class="block mb-1">Alamat</label>
        <input type="text" name="address" value="{{ $user->address }}"
               class="w-full rounded-lg px-4 py-2 text-black">
    </div>

    <!-- ⬅️ FOTO DIMASUKKAN DI DALAM FORM -->
    <div>
        <label class="block mb-1">Foto Profil</label>
        <input type="file" name="photo" id="uploadFoto"
            class="text-sm bg-white rounded-lg px-2 py-1 text-black">
    </div>


    <button class="w-full bg-[#5C6EF8] py-2 rounded-lg text-white font-semibold">
        Simpan Perubahan
    </button>
</form>


    <!-- FOTO PROFIL -->
    <div class="bg-[#2C3E5E] rounded-2xl p-10 text-white flex flex-col items-center">
    <h2 class="text-2xl font-semibold mb-6 self-start">Foto Profil</h2>

    <div class="bg-white rounded-full w-40 h-40 overflow-hidden mb-4">
        <img id="previewFoto"
             src="{{ $user->photo ? asset('storage/profile/'.$user->photo) : 'https://via.placeholder.com/150' }}"
             class="w-full h-full object-cover">
    </div>
</div>


</section>

<script>
    document.getElementById('uploadFoto').addEventListener('change', e => {
        const file = e.target.files[0];
        if(file){
            document.getElementById('previewFoto').src = URL.createObjectURL(file);
        }
    });
</script>

</body>
</html>
