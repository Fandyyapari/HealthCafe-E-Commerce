<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCafe</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f5eee6] min-h-screen">

   <!-- NAVBAR -->
    <nav class="flex items-center justify-between px-6 md:px-12 py-5 border-b border-[#d8c3a5]">

        <!-- LOGO -->
        <div class="flex items-center gap-3">

            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="w-12">

            <h1 class="text-2xl font-semibold text-[#c28b5b]">
                Health Cafe
            </h1>
        </div>

        <!-- DESKTOP MENU -->
        <div class="hidden md:flex items-center gap-10 text-[#b57c4d] text-sm">

            <a href="/dashboard" class="hover:text-black transition">
                Home
            </a>

            <a href="/menu" class="hover:text-black transition">
                Menu
            </a>

            <a href="/rekomendasi" class="hover:text-black transition">
                Rekomendasi
            </a>
 
            <a href="{{ route('history') }}" class="hover:text-black transition">
                History
            </a>

        </div>

        <!-- RIGHT SIDE -->
        <div class="flex items-center gap-4">

            <!-- BUTTON -->
            <button class="hidden md:block bg-[#b57c4d] text-white px-5 py-2 rounded-full hover:opacity-90 transition">

                PESAN

            </button>

            <!-- HAMBURGER -->
            <button id="menu-btn" class="md:hidden text-3xl text-[#b57c4d]">

                ☰

            </button>

        </div>

    </nav>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-6">

        <div class="flex flex-col gap-4 text-[#b57c4d]">

            <a href="/dashboard" class="hover:text-black transition">
                Home
            </a>

            <a href="/menu" class="hover:text-black transition">
                Menu
            </a>

            <a href="/rekomendasi" class="hover:text-black transition">
                Rekomendasi
            </a>

            <a href="{{ route('history') }}" class="hover:text-black transition">
                History
            </a>

            <button class="bg-[#b57c4d] text-white px-5 py-2 rounded-full mt-3">

                PESAN

            </button>

        </div>

    </div>

    <!-- FOOTER -->
    <footer class="bg-[#b57c4d] text-white px-6 md:px-16 py-12 mt-20">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- BRAND -->
            <div>

                <h2 class="text-3xl font-bold">
                    HealthCafe
                </h2>

                <p class="mt-4 text-sm leading-relaxed text-[#f5eee6]">

                    Healthy drinks and healthy lifestyle in one place.
                    Enjoy premium coffee and nutritious beverages tailored for your body needs.

                </p>

            </div>

            <!-- NAVIGATION -->
            <div>

                <h3 class="text-xl font-semibold mb-4">
                    Navigation
                </h3>

                <div class="flex flex-col gap-3 text-[#f5eee6]">

                    <a href="/dashboard" class="hover:text-white transition">
                        Home
                    </a>

                    <a href="/menu" class="hover:text-white transition">
                        Menu
                    </a>

                    <a href="/rekomendasi" class="hover:text-white transition">
                        Recommendation
                    </a>

                    <a href="{{ route('history') }}" class="hover:text-white transition">
                        History
                    </a>

                </div>

            </div>

            <!-- CONTACT -->
            <div>

                <h3 class="text-xl font-semibold mb-4">
                    Contact
                </h3>

                <div class="flex flex-col gap-3 text-[#f5eee6] text-sm">

                    <p>
                        📍 Surabaya, Indonesia
                    </p>

                    <p>
                        ☎ +62 823-3652-3214
                    </p>

                    <p>
                        ✉ healthcafe@gmail.com
                    </p>

                </div>

            </div>

        </div>

        <!-- COPYRIGHT -->
        <div class="border-t border-[#d8c3a5] mt-10 pt-6 text-center text-sm text-[#f5eee6]">

            © 2026 HealthCafe. All rights reserved.

        </div>

    </footer>


    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

        });
    </script>
</body>

</html>
