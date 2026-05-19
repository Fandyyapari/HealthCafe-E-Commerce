<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCafe Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center p-10 bg-gradient-to-br from-[#f5eee6] to-[#c89b6d]">

    <<div
        class="w-[95%] max-w-5xl min-h-[540px] bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row">

        <!-- LEFT IMAGE -->
        <div class="w-full md:w-1/2 h-64 md:h-auto relative">

            <!-- IMAGE -->
            <img src="{{ asset('images/coffee.jpeg') }}" alt="Coffee" class="w-full h-full object-cover rounded-1-2xl">

            <!-- BLUR / FADE -->
            <div
                class="absolute bottom-0 left-0 w-full h-40 
                bg-gradient-to-b 
                from-transparent 
                to-white">
            </div>

        </div>

        <!-- RIGHT FORM -->
        <div class="w-full md:w-1/2 px-6 md:px-10 py-10">

            <!-- LOGO -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="w-16">
            </div>

            <!-- TITLE -->
            <h1 class="text-2xl md:text-3xl font-bold text-center text-gray-800">
                HELLO, WELCOME BACK
            </h1>

            <p class="text-center text-gray-400 text-sm mt-2 mb-8">
                Start your day with the perfect healthy coffee
            </p>

            <!-- FORM -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- EMAIL -->
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Email"
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 border-none focus:ring-2 focus:ring-lime-400"
                        required>
                </div>

                <!-- PASSWORD -->
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 border-none focus:ring-2 focus:ring-lime-400"
                        required>
                </div>

                <!-- REMEMBER -->
                <div class="flex justify-between items-center mb-6 text-sm">
                    <label class="flex items-center gap-2 text-gray-500">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>

                    <a href="#" class="text-blue-400 hover:underline">
                        Forgot password?
                    </a>
                </div>

                <!-- BUTTON -->
                <button type="submit"
                    class="w-full bg-lime-400 hover:bg-lime-500 text-white py-3 rounded-lg font-semibold transition">
                    LOGIN
                </button>

                <!-- REGISTER -->
                <p class="text-center text-sm text-gray-400 mt-6">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-blue-400 hover:underline">
                        Sign up
                    </a>
                </p>

            </form>

        </div>
        </div>

</body>

</html>
