<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - HealthCafe</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f5eee6] min-h-screen">

    @if (session('success'))
        <div class="max-w-4xl mx-auto mt-6 bg-green-100 text-green-700 p-4 rounded-2xl text-center font-semibold">

            {{ session('success') }}

        </div>
    @endif

    <div class="max-w-7xl mx-auto px-6 py-10">

        <!-- TOP -->
        <div class="flex items-center justify-between mb-10">

            <div class="flex items-center gap-3">

                <img src="{{ asset('images/logo.jpeg') }}" class="w-12">

                <h1 class="text-3xl font-bold text-[#b57c4d]">

                    Health Cafe

                </h1>

            </div>

            <a href="/menu" class="bg-[#b57c4d] text-white px-5 py-2 rounded-full">

                BACK

            </a>

        </div>

        <!-- LAYOUT -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- LEFT -->
            <div class="lg:col-span-2 bg-white rounded-3xl border border-[#d8c3a5] p-6">

                <h2 class="text-2xl font-bold text-[#4d4d2e] mb-6">

                    Your Cart

                </h2>

                @forelse($cart as $item)
                    <div class="border border-[#d8c3a5] rounded-xl p-3 flex items-center justify-between mb-3">

                        <!-- LEFT -->
                        <div class="flex items-center gap-3">

                            <img src="{{ asset('images/' . $item->product->image) }}"
                                class="w-16 h-16 rounded-xl object-cover">

                            <div>

                                <h3 class="text-sm font-semibold text-[#4d4d2e]">

                                    {{ $item->product->name }}

                                </h3>

                                <div class="flex items-center gap-3 mt-2">

                                    <!-- MIN -->
                                    <form action="/cart/decrease/{{ $item['id'] }}" method="POST">

                                        @csrf

                                        <button class="w-6 h-6 rounded-full border text-sm">

                                            -

                                        </button>

                                    </form>

                                    <span class="text-sm">
                                        {{ $item['qty'] }}
                                    </span>

                                    <!-- PLUS -->
                                    <form action="/cart/add/{{ $item['id'] }}" method="POST">

                                        @csrf

                                        <button class="w-6 h-6 rounded-full border text-sm">

                                            +

                                        </button>

                                    </form>

                                </div>

                            </div>

                        </div>

                        <!-- RIGHT -->
                        <div class="text-right">

                            <p class="text-sm font-bold text-[#b57c4d]">

                                Rp {{ number_format($item->product->price * $item->qty) }}

                            </p>

                            <form action="/cart/remove/{{ $item->product_id }}" method="POST">

                                @csrf

                                <button class="text-red-400 text-sm mt-2">

                                    ✕

                                </button>

                            </form>

                        </div>

                    </div>

                @empty

                    <div class="text-center py-20">

                        <h2 class="text-2xl font-bold text-[#4d4d2e]">

                            Cart is Empty 😭

                        </h2>

                    </div>
                @endforelse

            </div>

            <!-- RIGHT -->
            <div class="bg-white rounded-3xl border border-[#d8c3a5] p-6 h-fit sticky top-6">

                <h2 class="text-2xl font-bold text-[#4d4d2e] mb-6">

                    Summary

                </h2>

                @php
                    $total = 0;
                @endphp

                @foreach ($cart as $item)
                    @php
                        $total += $item['price'] * $item->qty;
                    @endphp

                    <div class="flex justify-between mb-3 text-sm">

                        <span>
                            {{ $item['name'] }}
                        </span>

                        <span>
                            Rp {{ number_format($item['price'] * $item['qty']) }}
                        </span>

                    </div>
                @endforeach

                <hr class="my-5">

                <div class="flex justify-between text-xl font-bold text-[#b57c4d]">

                    <span>Total</span>

                    <span>
                        Rp {{ number_format($total) }}
                    </span>

                </div>

                <div class="mt-6">

                    <h3 class="font-semibold text-[#4d4d2e] mb-4">

                        Payment Method

                    </h3>

                    <div class="space-y-3">

                        <label class="flex items-center gap-3 border border-[#d8c3a5] rounded-xl p-3 cursor-pointer">

                            <input type="radio" name="payment" checked>

                            <span>QRIS</span>

                        </label>

                        <label class="flex items-center gap-3 border border-[#d8c3a5] rounded-xl p-3 cursor-pointer">

                            <input type="radio" name="payment">

                            <span>Debit / Credit Card</span>

                        </label>

                    </div>

                </div>

                <form action="/checkout" method="POST">

                    @csrf

                    <button id="pay-button" type="button"
                        class="w-full mt-8 bg-[#b57c4d] hover:opacity-90 transition text-white py-4 rounded-2xl font-semibold">

                        Confirm Order

                    </button>

                </form>

            </div>

        </div>

    </div>

    <script>
        document.getElementById('pay-button')
            .addEventListener('click', function() {

                alert('Midtrans Popup Simulation 😭🔥');

            });
    </script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-XrW__cuDuNXYII0ke"></script>

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-XrW__cuDuNXYII0ke"></script>

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-XrW__cuDuNXYII0ke"></script>

    <script>
        document.getElementById('pay-button')
            .addEventListener('click', function() {

                fetch('/midtrans/token', {

                        method: 'POST',

                        headers: {

                            'X-CSRF-TOKEN': '{{ csrf_token() }}',

                            'Content-Type': 'application/json'

                        }

                    })

                    .then(response => response.json())

                    .then(data => {

                        if (data.token) {

                            window.snap.pay(data.token, {

                                onSuccess: function(result) {

                                    fetch('/checkout', {

                                            method: 'POST',

                                            headers: {

                                                'X-CSRF-TOKEN': '{{ csrf_token() }}',

                                                'Content-Type': 'application/json'

                                            }

                                        })

                                        .then(response => response.json())

                                        .then(data => {

                                            if (data.success) {

                                                window.location.href = '/history';

                                            }

                                        });

                                },

                                onPending: function(result) {

                                    alert('Menunggu pembayaran 😭');

                                },

                                onError: function(result) {

                                    alert('Pembayaran gagal 😭');

                                }

                            });

                        } else {

                            alert('Token Midtrans gagal 😭');

                        }

                    });

            });
    </script>
</body>

</html>
