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

            <a href="/history" class="hover:text-black transition">
                History
            </a>

        </div>

        <!-- RIGHT SIDE -->
        <div class="flex items-center gap-4">

            @auth

                <span class="hidden md:block text-[#4d4d2e] font-semibold">

                    Hi, {{ Auth::user()->name }}

                </span>

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button
                        class="hidden md:block bg-red-400 hover:bg-red-500 text-white px-5 py-2 rounded-full transition">

                        Logout

                    </button>

                </form>
            @else
                <a href="/login"
                    class="hidden md:block bg-[#b57c4d] text-white px-5 py-2 rounded-full hover:opacity-90 transition">

                    Login

                </a>

            @endauth

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

            <a href="#" class="hover:text-black transition">
                History
            </a>


            <button class="bg-[#b57c4d] text-white px-5 py-2 rounded-full mt-3">

                PESAN

            </button>

        </div>

    </div>

    <!-- HERO SECTION -->
    <section class="px-6 md:px-16 py-12">

        <div class="flex flex-col lg:flex-row items-center gap-10">

            <!-- LEFT CONTENT -->
            <div class="lg:w-1/2">

                <!-- TITLE -->
                <h1 class="text-5xl md:text-6xl font-bold text-[#4d4d2e] leading-tight">

                    Temukan <br>
                    Keseimbangan <br>
                    Rasa & Kesehatan

                </h1>

                <!-- DESCRIPTION -->
                <p class="mt-8 text-[#4d4d2e] leading-relaxed text-lg">

                    Di Health Cafe, kami percaya bahwa hidup sehat tidak harus membosankan.
                    Kami menyajikan kopi artisan premium dan hidangan bergizi yang dibuat
                    dari bahan-bahan segar.

                </p>

                <p class="mt-6 text-[#4d4d2e] leading-relaxed text-lg">

                    Nikmati kelezatan tanpa rasa bersalah dan biarkan kami memberi energi
                    untuk hari Anda. Jelajahi menu kami dan pesan sekarang.

                </p>

                <!-- BUTTON -->
                <div class="mt-8">

                    <button
                        class="bg-[#b7d63d] hover:bg-lime-500 transition text-white px-7 py-3 rounded-full font-semibold">

                        Mulai Konsultasi

                    </button>

                </div>

            </div>

            <!-- RIGHT CONTENT -->
            <div class="lg:w-1/2 grid grid-cols-2 gap-4">

                <!-- BIG IMAGE -->
                <img src="{{ asset('images/cafe1.jpeg') }}"
                    class="rounded-3xl h-[420px] object-cover w-full hover:scale-105 transition duration-300">

                <!-- SMALL IMAGES -->
                <div class="flex flex-col gap-4">

                    <img src="{{ asset('images/cafe2.jpeg') }}"
                        class="rounded-3xl h-[200px] object-cover w-full hover:scale-105 transition duration-300">

                    <img src="{{ asset('images/cafe3.jpeg') }}"
                        class="rounded-3xl h-[200px] object-cover w-full hover:scale-105 transition duration-300">

                </div>

            </div>

        </div>

    </section>

    <!-- POPULAR MENU -->
    <section class="px-6 md:px-16 py-16">

        <!-- TITLE -->
        <div class="text-center">

            <h2 class="text-4xl font-bold text-[#4d4d2e]">
                Popular Healthy Drinks
            </h2>

            <p class="mt-4 text-[#7a6a58]">
                Discover our most loved healthy beverages
            </p>

        </div>

        <!-- CARD CONTAINER -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">

            <!-- CARD 1 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:scale-105 transition duration-300">

                <!-- IMAGE -->
                <img src="{{ asset('images/berry yogurt smoothie.jpeg') }}" class="h-64 w-full object-cover">

                <!-- CONTENT -->
                <div class="p-6">

                    <h3 class="text-2xl font-semibold text-[#4d4d2e]">
                        Berry Yogurt Smoothie
                    </h3>

                    <p class="text-[#7a6a58] mt-3">
                        A blend of fresh berries and creamy yogurt for a refreshing antioxidant boost.
                    </p>

                    <!-- PRICE -->
                    <div class="flex items-center justify-between mt-6">

                        <span class="text-xl font-bold text-[#b57c4d]">
                            Rp 35K
                        </span>

                        <button class="bg-[#b7d63d] text-white px-5 py-2 rounded-full hover:bg-lime-500 transition">

                            Order

                        </button>

                    </div>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:scale-105 transition duration-300">

                <img src="{{ asset('images/honney cinamon coffe.jpeg') }}" class="h-64 w-full object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-semibold text-[#4d4d2e]">
                        Hooney Cinamon Coffee
                    </h3>

                    <p class="text-[#7a6a58] mt-3">
                        A warm blend of coffee, natural honey, and cinnamon for a cozy healthy treat.
                    </p>

                    <div class="flex items-center justify-between mt-6">

                        <span class="text-xl font-bold text-[#b57c4d]">
                            Rp 30K
                        </span>

                        <button class="bg-[#b7d63d] text-white px-5 py-2 rounded-full hover:bg-lime-500 transition">

                            Order

                        </button>

                    </div>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:scale-105 transition duration-300">

                <img src="{{ asset('images/manggo chia smoothie.jpeg') }}" class="h-64 w-full object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-semibold text-[#4d4d2e]">
                        Manggo Chia Smoothie
                    </h3>

                    <p class="text-[#7a6a58] mt-3">
                        A tropical blend of mango, chia seeds, and coconut milk for a hydrating superfood boost.
                    </p>

                    <div class="flex items-center justify-between mt-6">

                        <span class="text-xl font-bold text-[#b57c4d]">
                            Rp 32K
                        </span>

                        <button class="bg-[#b7d63d] text-white px-5 py-2 rounded-full hover:bg-lime-500 transition">

                            Order

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- POPULAR MENU MAKANAN-->
    <section class="px-6 md:px-16 py-16">

        <!-- TITLE -->
        <div class="text-center">

            <h2 class="text-4xl font-bold text-[#4d4d2e]">
                Popular Healthy Foods
            </h2>

            <p class="mt-4 text-[#7a6a58]">
                Discover our most loved healthy foods
            </p>

        </div>

        <!-- CARD CONTAINER -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">

            <!-- CARD 1 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:scale-105 transition duration-300">

                <!-- IMAGE -->
                <img src="{{ asset('images/salmon teriyaki bowl.jpeg') }}" class="h-64 w-full object-cover">

                <!-- CONTENT -->
                <div class="p-6">

                    <h3 class="text-2xl font-semibold text-[#4d4d2e]">
                        Salmon Teriyaki Bowl
                    </h3>

                    <p class="text-[#7a6a58] mt-3">
                        A nutritious bowl of grilled salmon, brown rice, and steamed vegetables drizzled with teriyaki
                        sauce.
                    </p>

                    <!-- PRICE -->
                    <div class="flex items-center justify-between mt-6">

                        <span class="text-xl font-bold text-[#b57c4d]">
                            Rp 55K
                        </span>

                        <button class="bg-[#b7d63d] text-white px-5 py-2 rounded-full hover:bg-lime-500 transition">

                            Order

                        </button>

                    </div>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:scale-105 transition duration-300">

                <img src="{{ asset('images/vegan budha bowl.jpeg') }}" class="h-64 w-full object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-semibold text-[#4d4d2e]">
                        Vegan Buddha Bowl
                    </h3>

                    <p class="text-[#7a6a58] mt-3">
                        a vibrant bowl filled with quinoa, chickpeas, roasted vegetables, avocado, and a tangy tahini
                        dressing for a wholesome vegan meal.
                    </p>

                    <div class="flex items-center justify-between mt-6">

                        <span class="text-xl font-bold text-[#b57c4d]">
                            Rp 45K
                        </span>

                        <button class="bg-[#b7d63d] text-white px-5 py-2 rounded-full hover:bg-lime-500 transition">

                            Order

                        </button>

                    </div>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:scale-105 transition duration-300">

                <img src="{{ asset('images/avocado egg toast.jpeg') }}" class="h-64 w-full object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-semibold text-[#4d4d2e]">
                        Avocado Egg Toast
                    </h3>

                    <p class="text-[#7a6a58] mt-3">
                        A delicious and nutritious breakfast option featuring creamy avocado spread on whole-grain
                        toast, topped with a perfectly poached egg and a sprinkle of chili flakes for a flavorful kick.
                    </p>

                    <div class="flex items-center justify-between mt-6">

                        <span class="text-xl font-bold text-[#b57c4d]">
                            Rp 32K
                        </span>

                        <button class="bg-[#b7d63d] text-white px-5 py-2 rounded-full hover:bg-lime-500 transition">

                            Order

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

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

                    <a href="#" class="hover:text-white transition">
                        Home
                    </a>

                    <a href="#" class="hover:text-white transition">
                        Menu
                    </a>

                    <a href="#" class="hover:text-white transition">
                        Recommendation
                    </a>

                    <a href="#" class="hover:text-white transition">
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
