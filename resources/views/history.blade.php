<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History - HealthCafe</title>

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

        <!-- MENU -->
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

            <a href="/history" class="text-black font-semibold">
                History
            </a>

        </div>

        <!-- RIGHT -->
        <div class="flex items-center gap-4">

            <span class="hidden md:block text-[#4d4d2e] font-semibold">

                Hi, {{ Auth::user()->name }}

            </span>

            <a href="/cart"
                class="hidden md:block bg-[#b7d63d] hover:bg-lime-500 text-white px-5 py-2 rounded-full transition">

                Cart

            </a>

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button
                    class="hidden md:block bg-red-400 hover:bg-red-500 text-white px-5 py-2 rounded-full transition">

                    Logout

                </button>

            </form>

        </div>

    </nav>

    <!-- HEADER -->
    <section class="px-6 md:px-12 pt-14">

        <h1 class="text-4xl font-bold text-[#4d4d2e]">

            Order History

        </h1>

        <p class="mt-3 text-[#7a6a58]">

            Riwayat pesanan sehat kamu 🌿

        </p>

    </section>

    <!-- HISTORY -->
    <section class="px-6 md:px-12 py-10">

        <div class="grid gap-6">

            @forelse ($histories as $history)
                <div
                    class="bg-white border border-[#d8c3a5] rounded-3xl p-5 flex flex-col md:flex-row md:items-center md:justify-between gap-5">

                    <!-- LEFT -->
                    <div class="flex items-center gap-5">

                        <img src="{{ asset('images/' . $history->product->image) }}"
                            class="w-24 h-24 rounded-2xl object-cover">

                        <div>

                            <h2 class="text-xl font-semibold text-[#4d4d2e]">

                                {{ $history->product->name }}

                            </h2>

                            <p class="text-[#7a6a58] mt-1">

                                Qty : {{ $history->quantity }}

                            </p>

                            <p class="text-[#7a6a58]">

                                {{ $history->created_at->format('d M Y - H:i') }}

                            </p>

                        </div>

                    </div>

                    <!-- RIGHT -->
                    <div class="text-right">

                        <h3 class="text-2xl font-bold text-[#b57c4d]">

                            Rp {{ number_format($history->total_price) }}

                        </h3>

                        <span class="inline-block mt-2 bg-[#e8f5c8] text-[#6f8b1b] px-4 py-2 rounded-full text-sm">

                            Success

                        </span>

                    </div>

                </div>

            @empty

                <div class="bg-white border border-[#d8c3a5] rounded-3xl p-10 text-center">

                    <h2 class="text-2xl font-semibold text-[#4d4d2e]">

                        Belum ada history 😢

                    </h2>

                    <p class="mt-3 text-[#7a6a58]">

                        Yuk mulai pesan menu sehat favoritmu

                    </p>

                </div>
            @endforelse

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
</body>

</html>
