<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi - HealthCafe</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#f5eee6] text-[#4d4d2e]">
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
            @else
                <a href="/login"
                    class="hidden md:block bg-[#b57c4d] text-white px-5 py-2 rounded-full hover:opacity-90 transition">

                    Login

                </a>

            @endauth

            <!-- MOBILE BUTTON -->
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

            <a href="/history" class="hover:text-black transition">
                History
            </a>

            <a href="/cart" class="bg-[#b7d63d] text-white px-5 py-2 rounded-full mt-3 text-center">

                Cart

            </a>

        </div>

    </div>

    <div class="w-full px-6 md:px-12 pt-14 pb-20">
        <div class="page-header text-center mb-12">
            <h2 class="text-4xl font-bold tracking-tight text-[#4d4d2e]">Temukan Menu <em
                    class="font-serif italic text-[#b57c4d]">Idealmu</em></h2>
            <p class="mt-3 text-sm text-[#7a6a58]">Jawab beberapa pertanyaan singkat untuk mendapat rekomendasi yang
                cocok untukmu</p>
        </div>
        <div class="progress-wrap flex items-center justify-center gap-3 mb-10">
            <div class="progress-track relative w-[280px] h-1.5 overflow-hidden rounded-full bg-[#d8c3a5]">
                <div class="progress-fill absolute left-0 top-0 h-full rounded-full bg-[#b57c4d]" id="progressFill"
                    style="width: 12.5%"></div>
            </div>
            <div class="progress-label min-w-[30px] text-center text-xs text-[#7a6a58]" id="progressLabel">1</div>
        </div>
        <div class="w-full">

            <div class="quiz-container relative min-h-[360px]" id="quizContainer">
                <div class="quiz-card block rounded-[28px] border-2 border-[#d8c3a5] bg-white p-10 shadow-sm"
                    data-q="1">
                    <div class="question-label text-sm font-medium text-[#7a6a58] mb-5">Pertanyaan 1</div>
                    <div class="question-text text-[26px] font-bold leading-tight text-[#4d4d2e] mb-8">Kamu lagi pengen
                        minuman atau makanan?</div>
                    <div class="grid gap-3 sm:grid-cols-2">
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="minuman">🧃 Minuman</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="snack">🍪 Snack</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="makanan">🍱 Makanan</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="bebas">✨ Bebas</button>
                    </div>
                </div>
                <div class="quiz-card hidden rounded-[28px] border-2 border-[#d8c3a5] bg-white p-10 shadow-sm"
                    data-q="2">
                    <div class="question-label text-sm font-medium text-[#7a6a58] mb-5">Pertanyaan 2</div>
                    <div class="question-text text-[26px] font-bold leading-tight text-[#4d4d2e] mb-8">Tujuan kamu hari
                        ini
                        apa?</div>
                    <div class="grid gap-3 sm:grid-cols-2">
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="energi">⚡ Cari energi</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="fokus">🧠 Fokus belajar/kerja</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="diet">🥗 Lagi diet</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="kenyang">🍽️ Mau kenyang lama</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="refreshing">💧 Cari yang refreshing</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="relaxing">😌 Mau yang relaxing</button>
                    </div>
                </div>
                <div class="quiz-card hidden rounded-[28px] border-2 border-[#d8c3a5] bg-white p-10 shadow-sm"
                    data-q="3">
                    <div class="question-label text-sm font-medium text-[#7a6a58] mb-5">Pertanyaan 3</div>
                    <div class="question-text text-[26px] font-bold leading-tight text-[#4d4d2e] mb-8">Kamu lebih suka
                        yang…
                    </div>
                    <div class="grid gap-3 sm:grid-cols-2 xl:grid-cols-3">
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="manis">🍯 Manis</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="creamy">🥛 Creamy</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="fresh">🍋 Fresh</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="bitter">☕ Bitter / Coffee</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="gurih">🧀 Gurih</button>
                    </div>
                </div>
                <div class="quiz-card hidden rounded-[28px] border-2 border-[#d8c3a5] bg-white p-10 shadow-sm"
                    data-q="4">
                    <div class="question-label text-sm font-medium text-[#7a6a58] mb-5">Pertanyaan 4</div>
                    <div class="question-text text-[26px] font-bold leading-tight text-[#4d4d2e] mb-8">Ada bahan yang
                        kamu
                        hindari?</div>
                    <div class="grid gap-3 sm:grid-cols-2">
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="dairy">🥛 Dairy / Susu</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="kafein">☕ Kafein</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="gula">🍬 Gula tinggi</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="gluten">🌾 Gluten</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="none">✅ Tidak ada</button>
                    </div>
                </div>
                <div class="quiz-card hidden rounded-[28px] border-2 border-[#d8c3a5] bg-white p-10 shadow-sm"
                    data-q="5">
                    <div class="question-label text-sm font-medium text-[#7a6a58] mb-5">Pertanyaan 5</div>
                    <div class="question-text text-[26px] font-bold leading-tight text-[#4d4d2e] mb-8">Seberapa lapar
                        kamu
                        sekarang?</div>
                    <div class="grid gap-3 sm:grid-cols-3">
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="ngemil">😋 Ngemil aja</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="biasa">🙂 Lapar biasa</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="banget">😤 Laper banget!</button>
                    </div>
                </div>
                <div class="quiz-card hidden rounded-[28px] border-2 border-[#d8c3a5] bg-white p-10 shadow-sm"
                    data-q="6">
                    <div class="question-label text-sm font-medium text-[#7a6a58] mb-5">Pertanyaan 6</div>
                    <div class="question-text text-[26px] font-bold leading-tight text-[#4d4d2e] mb-8">Kamu mau menu
                        yang
                        tinggi…</div>
                    <div class="grid gap-3 sm:grid-cols-2 xl:grid-cols-3">
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="protein">💪 Protein</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="serat">🌿 Serat</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="vitamin">🍊 Vitamin</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="energi2">⚡ Energi</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="rendah_kalori">🌸 Rendah Kalori</button>
                    </div>
                </div>
                <div class="quiz-card hidden rounded-[28px] border-2 border-[#d8c3a5] bg-white p-10 shadow-sm"
                    data-q="7">
                    <div class="question-label text-sm font-medium text-[#7a6a58] mb-5">Pertanyaan 7</div>
                    <div class="question-text text-[26px] font-bold leading-tight text-[#4d4d2e] mb-8">Kamu lebih suka
                        minuman…</div>
                    <div class="grid gap-3 sm:grid-cols-2">
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="dingin">🧊 Dingin</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="hangat">☕ Hangat</button>
                    </div>
                </div>
                <div class="quiz-card hidden rounded-[28px] border-2 border-[#d8c3a5] bg-white p-10 shadow-sm"
                    data-q="8">
                    <div class="question-label text-sm font-medium text-[#7a6a58] mb-5">Pertanyaan 8</div>
                    <div class="question-text text-[26px] font-bold leading-tight text-[#4d4d2e] mb-8">Mood kamu
                        sekarang?
                    </div>
                    <div class="grid gap-3 sm:grid-cols-2">
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="semangat">🔥 Butuh semangat</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="capek">😴 Capek</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="santai">😊 Santai</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="produktif">💻 Lagi produktif</button>
                        <button
                            class="opt-btn w-full rounded-[16px] border border-[#d8c3a5] bg-[#fffdf9] px-5 py-4 text-left text-sm font-semibold text-[#4d4d2e] transition duration-200 hover:border-[#b57c4d] hover:bg-[#fdf6ee] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(181,124,77,0.12)]"
                            data-value="healing">🌸 Mau healing 😭</button>
                    </div>
                </div>
            </div>
            <div class="quiz-nav flex items-center justify-between mt-9" id="quizNav">
                <button
                    class="btn-back rounded-full border border-[#d8c3a5] px-7 py-3 text-sm font-semibold text-[#7a6a58] transition hover:border-[#b57c4d] hover:text-[#b57c4d]"
                    id="btnBack" onclick="goBack()">← Kembali</button>
                <button
                    class="btn-next rounded-full bg-[#b7d63d] px-8 py-3 text-sm font-bold text-white transition disabled:opacity-50 disabled:cursor-not-allowed"
                    id="btnNext" onclick="goNext()" disabled>Selanjutnya →</button>
            </div>
            <div class="result-section hidden" id="resultSection">
                <div class="result-header text-center mb-10">
                    <div
                        class="ai-label inline-flex items-center justify-center rounded-full bg-gradient-to-r from-[#b57c4d] to-[#d4956a] px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.18em] text-white">
                        ✨ AI HEALTHY RECOMMENDATION</div>
                    <h3 class="mt-5 text-3xl font-bold text-[#4d4d2e]">Rekomendasi <em
                            class="font-serif italic text-[#b57c4d]">Untukmu</em></h3>
                </div>
                <div class="ai-insight rounded-[18px] border border-[#d8c3a5] border-l-4 border-[#b57c4d] bg-gradient-to-br from-[#fdf6ee] to-[#f5eee6] px-6 py-5 mb-10 text-sm leading-7 text-[#4d4d2e] italic"
                    id="aiInsight"></div>
                <div class="menu-grid grid gap-5 sm:grid-cols-2 xl:grid-cols-3" id="menuGrid"></div>
                <div class="retry-wrap text-center mt-6">
                    <button
                        class="btn-retry rounded-full border-2 border-[#b57c4d] px-8 py-3 text-sm font-bold text-[#b57c4d] transition hover:bg-[#b57c4d] hover:text-white"
                        onclick="resetQuiz()">↺ Coba Lagi</button>
                </div>
            </div>
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

    @foreach ($products as $product)
        <div id="modal-{{ $product->id }}"
            class="fixed inset-0 bg-black/50 hidden justify-center items-center z-50 p-6">

            <div
                class="bg-white rounded-[30px] md:rounded-[40px] max-w-4xl w-full overflow-y-auto max-h-[90vh] relative">

                <!-- CLOSE -->
                <button onclick="closeModal({{ $product->id }})"
                    class="absolute top-5 right-5 text-3xl text-[#b57c4d] z-50">

                    ✕

                </button>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                    <!-- IMAGE -->
                    <img src="{{ asset('images/' . $product->image) }}"
                        class="w-full h-[250px] sm:h-[350px] md:h-[500px] object-cover">

                    <!-- CONTENT -->
                    <div class="p-5 md:p-8 flex flex-col justify-center">

                        <!-- BENEFIT -->
                        <span class="bg-[#e8f5c8] text-[#6f8b1b] px-5 py-2 rounded-full w-fit text-sm">

                            {{ $product->benefit }}

                        </span>

                        <!-- TITLE -->
                        <h1 class="text-3xl md:text-4xl font-bold text-[#4d4d2e] mt-6">

                            {{ $product->name }}

                        </h1>

                        <!-- DESC -->
                        <p class="mt-6 text-[#7a6a58] leading-relaxed">

                            {{ $product->description }}

                        </p>

                        <!-- PRICE -->
                        <h2 class="text-3xl font-bold text-[#b57c4d] mt-8">

                            Rp {{ number_format($product->price) }}

                        </h2>

                        <!-- BUTTON -->
                        <button
                            class="mt-8 w-full bg-[#b7d63d] hover:bg-lime-500 transition text-white py-4 rounded-full font-semibold">

                            Add To Cart

                        </button>

                    </div>

                </div>

            </div>

        </div>
    @endforeach
    <script>
        const totalQ = 8;
        let current = 1;
        let answers = {};
        const assetBase = "{{ asset('images') }}";
        const menuDB = @json($products).map(item => ({
            ...item,
            tags: item.tags ? item.tags.split(',') : [],
            badges: item.badges ? item.badges.split(',') : []
        }));

        function getRecommendations() {
            const ans = Object.values(answers);
            const scores = menuDB.map(m => {
                let score = 0;
                ans.forEach(v => {
                    if (m.tags.includes(v)) score++;
                });
                return {
                    ...m,
                    score,
                    match: Math.min(95, score * 15 + 50)
                };
            });
            scores.sort((a, b) => b.score - a.score);
            return scores.slice(0, 3);
        }

        function buildInsight() {
            const kategori = answers[1] || 'bebas';
            const tujuan = answers[2] || '';
            const nutrisi = answers[6] || '';
            const mood = answers[8] || '';
            const moodMap = {
                semangat: 'kamu butuh dorongan semangat ekstra',
                capek: 'kamu perlu istirahat dan recovery',
                santai: 'kamu lagi mode relaxed',
                produktif: 'kamu dalam mode fokus penuh',
                healing: 'kamu butuh me-time yang menenangkan'
            };
            const nutrisiMap = {
                protein: 'tinggi protein',
                serat: 'kaya serat',
                vitamin: 'penuh vitamin',
                energi2: 'padat energi',
                rendah_kalori: 'rendah kalori'
            };
            const moodText = moodMap[mood] || 'kamu punya preferensi unik';
            const nutrisiText = nutrisiMap[nutrisi] || 'seimbang';
            return `✨ Berdasarkan preferensimu, <span>${moodText}</span> — kami merekomendasikan menu <span>${nutrisiText}</span> yang pas untuk kamu. Pilihan ${kategori === 'minuman' ? 'minuman' : kategori === 'makanan' ? 'makanan' : 'menu'} ini dirancang khusus untuk mendukung tujuanmu hari ini! 🌿`;
        }

        function badgeHTML(b) {
            const map = {
                protein: ['bg-[#e8f5e9] text-[#2e7d32]', '💪 High Protein'],
                lowsugar: ['bg-[#e3f2fd] text-[#1565c0]', '💙 Low Sugar'],
                vegan: ['bg-[#f3e5f5] text-[#6a1b9a]', '🌿 Vegan'],
                fiber: ['bg-[#fff8e1] text-[#f57f17]', '🌾 High Fiber'],
                energy: ['bg-[#fce4ec] text-[#c62828]', '⚡ Energy Booster'],
                fresh: ['bg-[#e0f7fa] text-[#00695c]', '💧 Fresh'],
            };
            const [cls, label] = map[b] || ['bg-[#e0f7fa] text-[#00695c]', b];
            return `<span class="rounded-full px-3 py-1 text-[11px] font-bold tracking-[0.04em] ${cls}">${label}</span>`;
        }

        function renderResult() {
            const recs = getRecommendations();
            document.getElementById('aiInsight').innerHTML = buildInsight();
            const grid = document.getElementById('menuGrid');
            grid.innerHTML = recs.map(m => `
            <div class="rounded-[24px] border border-[#d8c3a5] bg-white overflow-hidden transition-transform duration-200 hover:-translate-y-1 hover:shadow-[0_12px_32px_rgba(181,124,77,0.15)]">
                <img class="menu-card-img h-44 w-full object-cover bg-[#d8c3a5]" src="${assetBase}/${m.image}" alt="${m.name}">
                <div class="p-5">
                    <!-- MATCH -->
                    <div class="mb-2 text-sm font-semibold text-[#6f8b1b]">
                        ✨ ${m.match}% Match For You
                    </div>      
                    <div class="flex flex-wrap gap-2 mb-3">
                        ${m.badges.map(badgeHTML).join('')}
                    </div>
                    <div class="menu-card-name mb-2 text-base font-bold text-[#4d4d2e]">${m.name}</div>
                    <div class="menu-card-cal mb-3 text-sm text-[#7a6a58]">📊 ${m.cal}</div>
                    <div class="menu-card-price mb-4 text-lg font-bold text-[#b57c4d]">
                            Rp ${Number(m.price).toLocaleString('id-ID')}
                    <                               /div>
                    <div class="flex gap-2 mt-5">

                <!-- VIEW -->
                    <button
                        onclick="openModal(${m.id})"                        
                        class="flex-1 border border-[#b57c4d] text-[#b57c4d] text-sm py-3 rounded-full hover:bg-[#b57c4d] hover:text-white transition">
                            View
                    </button>

                <!-- ADD -->
                <form action="/cart/add/{{ $product->id }}" method="POST">

                @csrf

                <button
                class="w-10 h-10 bg-[#b7d63d] rounded-full text-white hover:bg-lime-500 transition">

                        +

                </button>

                </form>
                </div>
                </div>


            </div>
        `).join('');
        }

        function updateProgress(q) {
            const pct = (q / totalQ) * 100;
            document.getElementById('progressFill').style.width = pct + '%';
            document.getElementById('progressLabel').textContent = q;
        }

        function goNext() {
            const card = document.querySelector(`.quiz-card[data-q="${current}"]`);
            const sel = card.querySelector('.opt-btn.selected');
            if (!sel) return;
            answers[current] = sel.dataset.value;
            if (current >= totalQ) {
                showResult();
                return;
            }
            card.classList.add('hidden');
            current++;
            document.querySelector(`.quiz-card[data-q="${current}"]`).classList.remove('hidden');
            updateProgress(current);
            updateNextBtn();
            updateBackBtn();
        }

        function goBack() {
            if (current <= 1) return;
            document.querySelector(`.quiz-card[data-q="${current}"]`).classList.add('hidden');
            current--;
            document.querySelector(`.quiz-card[data-q="${current}"]`).classList.remove('hidden');
            updateProgress(current);
            updateNextBtn();
            updateBackBtn();
        }

        function showResult() {
            document.getElementById('quizContainer').classList.add('hidden');
            document.getElementById('quizNav').classList.add('hidden');
            document.querySelector('.progress-wrap').classList.add('hidden');
            renderResult();
            document.getElementById('resultSection').classList.remove('hidden');
        }

        function resetQuiz() {
            current = 1;
            answers = {};
            document.querySelectorAll('.quiz-card').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.quiz-card[data-q="1"]').forEach(c => c.classList.remove('hidden'));
            document.querySelectorAll('.opt-btn').forEach(b => {
                b.classList.remove('selected', 'bg-[#b57c4d]', 'border-[#b57c4d]', 'text-white');
            });
            document.getElementById('resultSection').classList.add('hidden');
            document.getElementById('quizContainer').classList.remove('hidden');
            document.getElementById('quizNav').classList.remove('hidden');
            document.querySelector('.progress-wrap').classList.remove('hidden');
            updateProgress(1);
            updateNextBtn();
            updateBackBtn();
        }

        function updateNextBtn() {
            const card = document.querySelector(`.quiz-card[data-q="${current}"]`);
            const sel = card.querySelector('.opt-btn.selected');
            const btn = document.getElementById('btnNext');
            btn.disabled = !sel;
            if (sel) {
                btn.textContent = current === totalQ ? 'Lihat Rekomendasi 🌿' : 'Selanjutnya →';
            } else {
                btn.textContent = 'Selanjutnya →';
            }
        }

        function updateBackBtn() {
            document.getElementById('btnBack').style.visibility = current > 1 ? 'visible' : 'hidden';
        }
        document.querySelectorAll('.opt-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const card = btn.closest('.quiz-card');
                card.querySelectorAll('.opt-btn').forEach(b => {
                    b.classList.remove('selected', 'bg-[#b57c4d]', 'border-[#b57c4d]',
                        'text-white');
                });
                btn.classList.add('selected', 'bg-[#b57c4d]', 'border-[#b57c4d]', 'text-white');
                updateNextBtn();
            });
        });

        function openModal(id) {
            document.getElementById('modal-' + id).classList.remove('hidden');
            document.getElementById('modal-' + id).classList.add('flex');
        }

        function closeModal(id) {
            document.getElementById('modal-' + id).classList.remove('flex');
            document.getElementById('modal-' + id).classList.add('hidden');
        }

        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

        });

        updateBackBtn();
    </script>
</body>

</html>
