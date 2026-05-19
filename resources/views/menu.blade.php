<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCafe Menu</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f5eee6] min-h-screen">

    @php

        function renderSection($title, $products, $icon)
        {
            echo '
    <section class="px-6 md:px-12 py-10">

        <!-- TITLE -->
        <div class="flex items-center gap-3 mb-8">

            <img 
    src="' .
                asset('images/' . $icon) .
                '"
    class="w-12 h-12 rounded-2xl object-cover"
>

            <div>

                <h2 class="text-3xl font-semibold text-[#7a5c3e]">
                    ' .
                $title .
                '
                </h2>

                <p class="text-[#b08968] text-sm">
                    ' .
                count($products) .
                ' menu tersedia
                </p>

            </div>

        </div>

        <!-- CARD CONTAINER -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
    ';

            foreach ($products as $product) {
                echo '
        <!-- CARD -->
        <div class="bg-white rounded-2xl overflow-hidden border border-[#d8c3a5] hover:shadow-xl transition duration-300">

            <!-- IMAGE -->
            <img 
                src="' .
                    asset('images/' . $product->image) .
                    '"
                class="w-full h-44 object-cover"
            >

            <!-- CONTENT -->
            <div class="p-4">

                <!-- NAME -->
                <h3 class="text-[#4d4d2e] font-semibold text-sm md:text-base">
                    ' .
                    $product->name .
                    '
                </h3>

                <!-- PRICE -->
                <p class="text-[#b57c4d] font-bold mt-2">
                    Rp ' .
                    number_format($product->price) .
                    '
                </p>

                <!-- BUTTON -->
                <div class="flex gap-2 mt-4">

                    <!-- VIEW -->
                    <button onclick="openModal(' .
                    $product->id .
                    ')"
                    class="flex-1 border border-[#b57c4d] text-[#b57c4d] text-xs py-2 rounded-full hover:bg-[#b57c4d] hover:text-white transition">

                        View

                    </button>

                    <!-- ORDER -->
                    <button class="w-10 h-10 bg-[#b7d63d] rounded-full text-white hover:bg-lime-500 transition">

                        +

                    </button>

                </div>

            </div>

        </div>

        <!-- MODAL -->
        <div id="modal-' .
                    $product->id .
                    '"
        class="fixed inset-0 bg-black/50 hidden justify-center items-center z-50 p-6">

            <div class="bg-white rounded-[30px] md:rounded-[40px] max-w-4xl w-full overflow-y-auto max-h-[90vh] relative">

                <!-- CLOSE -->
                <button onclick="closeModal(' .
                    $product->id .
                    ')"
                class="absolute top-5 right-5 text-3xl text-[#b57c4d] z-50">

                    ✕

                </button>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                    <!-- IMAGE -->
                    <img 
                        src="' .
                    asset('images/' . $product->image) .
                    '"
                        class="w-full h-[250px] sm:h-[350px] md:h-[500px] object-cover"
                    >

                    <!-- CONTENT -->
                    <div class="p-5 md:p-8 flex flex-col justify-center">

                        <!-- BENEFIT -->
                        <span class="bg-[#e8f5c8] text-[#6f8b1b] px-5 py-2 rounded-full w-fit text-sm">

                            ' .
                    $product->benefit .
                    '

                        </span>

                        <!-- TITLE -->
                        <h1 class="text-3xl md:text-4xl font-bold text-[#4d4d2e] mt-6">

                            ' .
                    $product->name .
                    '

                        </h1>

                        <!-- DESC -->
                        <p class="mt-6 text-[#7a6a58] leading-relaxed">

                            ' .
                    $product->description .
                    '

                        </p>

                        <!-- PRICE -->
                        <h2 class="text-3xl font-bold text-[#b57c4d] mt-8">

                            Rp ' .
                    number_format($product->price) .
                    '

                        </h2>

                        <!-- BUTTON -->
                        <button class="mt-8 w-full bg-[#b7d63d] hover:bg-lime-500 transition text-white py-4 rounded-full font-semibold">

                            Add To Cart

                        </button>

                    </div>

                </div>

            </div>

        </div>
        ';
            }

            echo '
        </div>

    </section>
    ';
        }

    @endphp

    <!-- NAVBAR -->
    <nav class="flex items-center justify-between px-6 md:px-12 py-5 border-b border-[#d8c3a5] bg-[#f5eee6]">

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

            <a href="#" class="hover:text-black transition">
                Rekomendasi
            </a>

            <a href="#" class="hover:text-black transition">
                History
            </a>

        </div>

        <!-- BUTTON -->
        <button class="bg-[#b57c4d] text-white px-5 py-2 rounded-full hover:opacity-90 transition">

            PESAN

        </button>

    </nav>

    <!-- HEADER -->
    <section class="text-center py-16 px-6">

        <h1 class="text-5xl font-bold text-[#4d4d2e]">

            Our Healthy Menu

        </h1>

        <p class="mt-5 text-[#7a6a58] max-w-2xl mx-auto">

            Explore our healthy handcrafted drinks designed
            to support your mood, focus, and wellness.

        </p>

    </section>

    {{ renderSection('Healthy Coffee Series', $coffee, 'coffe-icon.jpeg') }}

    {{ renderSection('Healthy Non-Coffee Series', $noncoffee, 'noncoffee-icon.jpeg') }}

    {{ renderSection('Healthy Main Course', $maincourse, 'maincourse-icon.jpeg') }}

    {{ renderSection('Healthy Snack', $snack, 'snack-icon.jpeg') }}


    <script>
        function filterProducts(category) {
            const cards = document.querySelectorAll('.product-card');

            cards.forEach(card => {

                if (category === 'all') {
                    card.style.display = 'block';
                } else {
                    if (card.classList.contains(category)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                }

            });
        }
    </script>

    <script>
        function openModal(id) {
            document.getElementById('modal-' + id).classList.remove('hidden');
            document.getElementById('modal-' + id).classList.add('flex');
        }

        function closeModal(id) {
            document.getElementById('modal-' + id).classList.remove('flex');
            document.getElementById('modal-' + id).classList.add('hidden');
        }
    </script>

</body>

</html>
