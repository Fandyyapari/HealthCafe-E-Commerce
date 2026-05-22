<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCafe</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f5eee6] overflow-x-hidden">

    <!-- NAVBAR -->
    <nav class="flex items-center justify-between px-6 md:px-14 py-5">

        <!-- LOGO -->
        <div class="flex items-center gap-3">

            <img 
            src="{{ asset('images/logo.jpeg') }}"
            class="w-12 h-12 rounded-full object-cover">

            <h1 class="text-2xl font-bold text-[#b57c4d]">

                HealthCafe

            </h1>

        </div>

        <!-- MENU -->
        <div class="hidden md:flex items-center gap-10 text-[#6d5c4d] font-medium">

            <a href="/" class="hover:text-[#b57c4d] transition">
                Home
            </a>

            <a href="/menu" class="hover:text-[#b57c4d] transition">
                Menu
            </a>

            <a href="/rekomendasi" class="hover:text-[#b57c4d] transition">
                Recommendation
            </a>

            <a href="/cart" class="hover:text-[#b57c4d] transition">
                Cart
            </a>

        </div>

        <!-- BUTTON -->
        <a href="/menu"
        class="bg-[#b57c4d] text-white px-6 py-3 rounded-full hover:opacity-90 transition">

            Explore Menu

        </a>

    </nav>

    <!-- HERO -->
    <section class="px-6 md:px-14 py-10 md:py-20">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            <!-- LEFT -->
            <div>

                <span class="bg-[#e8f5c8] text-[#6f8b1b] px-5 py-2 rounded-full text-sm">

                    Healthy Lifestyle Cafe

                </span>

                <h1 class="text-5xl md:text-7xl font-bold text-[#4d4d2e] leading-tight mt-6">

                    Healthy Food
                    For Your
                    Better Mood

                </h1>

                <p class="mt-7 text-[#7a6a58] text-lg leading-relaxed max-w-xl">

                    Discover healthy drinks and meals crafted
                    to boost your focus, mood, and daily wellness.
                    Fresh ingredients, aesthetic vibes, and healthy living in one place.

                </p>

                <!-- BUTTON -->
                <div class="flex flex-wrap gap-4 mt-10">

                    <a href="/menu"
                    class="bg-[#b57c4d] text-white px-8 py-4 rounded-full hover:opacity-90 transition font-semibold">

                        Order Now

                    </a>

                    <a href="/rekomendasi"
                    class="border border-[#b57c4d] text-[#b57c4d] px-8 py-4 rounded-full hover:bg-[#b57c4d] hover:text-white transition font-semibold">

                        Find Recommendation

                    </a>

                </div>

                <!-- STATS -->
                <div class="flex gap-10 mt-14">

                    <div>

                        <h2 class="text-3xl font-bold text-[#b57c4d]">

                            20+

                        </h2>

                        <p class="text-[#7a6a58] mt-1">

                            Healthy Menu

                        </p>

                    </div>

                    <div>

                        <h2 class="text-3xl font-bold text-[#b57c4d]">

                            100%

                        </h2>

                        <p class="text-[#7a6a58] mt-1">

                            Fresh Ingredients

                        </p>

                    </div>

                    <div>

                        <h2 class="text-3xl font-bold text-[#b57c4d]">

                            4.9★

                        </h2>

                        <p class="text-[#7a6a58] mt-1">

                            Customer Rating

                        </p>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="relative flex justify-center">

                <!-- BG -->
                <div class="absolute w-[350px] h-[350px] md:w-[500px] md:h-[500px] bg-[#d9b38c] rounded-full opacity-20 blur-3xl">

                </div>

                <!-- IMAGE -->
                <img 
                src="{{ asset('images/maincourse-icon.jpeg') }}"
                class="relative z-10 w-full max-w-md md:max-w-xl drop-shadow-2xl">

            </div>

        </div>

    </section>

    <!-- FEATURE -->
    <section class="px-6 md:px-14 pb-24">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- CARD -->
            <div class="bg-white p-8 rounded-3xl border border-[#e6d5c3]">

                <div class="w-14 h-14 rounded-2xl bg-[#e8f5c8] flex items-center justify-center text-2xl">

                    🥗

                </div>

                <h2 class="text-2xl font-bold text-[#4d4d2e] mt-6">

                    Healthy Menu

                </h2>

                <p class="text-[#7a6a58] mt-4 leading-relaxed">

                    Nutritious meals and drinks designed to support your healthy lifestyle.

                </p>

            </div>

            <!-- CARD -->
            <div class="bg-white p-8 rounded-3xl border border-[#e6d5c3]">

                <div class="w-14 h-14 rounded-2xl bg-[#ffe6d5] flex items-center justify-center text-2xl">

                    ☕

                </div>

                <h2 class="text-2xl font-bold text-[#4d4d2e] mt-6">

                    Cozy Atmosphere

                </h2>

                <p class="text-[#7a6a58] mt-4 leading-relaxed">

                    Enjoy your healthy meals in a warm and aesthetic cafe environment.

                </p>

            </div>

            <!-- CARD -->
            <div class="bg-white p-8 rounded-3xl border border-[#e6d5c3]">

                <div class="w-14 h-14 rounded-2xl bg-[#dff4ff] flex items-center justify-center text-2xl">

                    💚

                </div>

                <h2 class="text-2xl font-bold text-[#4d4d2e] mt-6">

                    Smart Recommendation

                </h2>

                <p class="text-[#7a6a58] mt-4 leading-relaxed">

                    Find personalized healthy menu recommendations based on your needs.

                </p>

            </div>

        </div>

    </section>

</body>
</html>