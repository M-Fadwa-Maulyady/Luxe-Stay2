<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Luxe Stay - Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900">

    <!-- NAVBAR -->
    <nav class="bg-[#0c2340] text-white px-6 py-4 flex justify-between items-center">
        <div class="bg-[#d7b46a] text-[#0c2340] px-8 py-5 rounded-br-3xl">
        <h1 class="text-2xl font-bold tracking-widest">LUXE</h1>
        <p class="text-sm tracking-[0.3em]">STAY</p>
    </div>        <ul class="flex space-x-8 text-lg">
            <li><a href="#" class="hover:underline">Home</a></li>
            <li><a href="#" class="hover:underline">Stay</a></li>
            <li><a href="#" class="hover:underline">Promo</a></li>
            <li><a href="#" class="underline font-semibold">Contact-us</a></li>
        </ul>
    </nav>

    <!-- TITLE -->
    <section class="bg-[#0c2340] py-14 text-center text-white">
        <h1 class="text-4xl font-extrabold tracking-wide">CONTACT-US</h1>
    </section>

    <!-- CONTENT -->
    <section class="max-w-5xl mx-auto px-6 py-16">

        <h2 class="text-3xl font-extrabold mb-4 text-[#0c2340]">WE ARE HERE FOR YOU</h2>
        <p class="text-gray-700 leading-relaxed mb-10">
            If you have any questions about accommodation, booking, or inquiries, our team is
            ready to help. Please reach out to our support desk and we will get back to you as
            soon as possible.
        </p>

        <!-- FORM -->
        <form class="space-y-6">
            <div>
                <label class="block mb-2 font-semibold">Name</label>
                <input type="text" class="w-full border border-gray-300 px-4 py-2 rounded"
                    placeholder="Your Name" />
            </div>

            <div>
                <label class="block mb-2 font-semibold">Email Address</label>
                <input type="email" class="w-full border border-gray-300 px-4 py-2 rounded"
                    placeholder="Email" />
            </div>

            <div>
                <label class="block mb-2 font-semibold">Message</label>
                <textarea rows="6" class="w-full border border-gray-300 px-4 py-2 rounded"
                    placeholder="Your Message"></textarea>
            </div>

            <button
                class="bg-[#d7b46a] hover:bg-[#c6a259] text-white font-semibold px-6 py-2 rounded">
                Submit
            </button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#0c2340] text-white py-10 mt-16">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10 px-6">

            <!-- Left -->
            <div>
                <h3 class="font-bold tracking-[0.2em] text-xl mb-4">LUXE STAY</h3>
                <p class="text-sm">
                    +44 345 678 903 <br />
                    luxury_hotels@gmail.com
                </p>
            </div>

            <!-- Center -->
            <div class="text-sm space-y-2">
                <a href="#" class="block hover:underline">About Us</a>
                <a href="#" class="block hover:underline">Contact</a>
                <a href="#" class="block hover:underline">Terms & Conditions</a>
            </div>

            <!-- Right -->
            <div class="space-y-4">
                <div class="flex space-x-4 text-sm">
                    <a href="#" class="hover:underline">Facebook</a>
                    <a href="#" class="hover:underline">Twitter</a>
                    <a href="#" class="hover:underline">Instagram</a>
                </div>

                <div class="flex">
                    <input type="email" placeholder="Email Address"
                        class="px-3 py-2 w-full text-gray-900 rounded-l" />
                    <button class="bg-[#d7b46a] px-4 rounded-r">OK</button>
                </div>
            </div>

        </div>
    </footer>

</body>
</html>
