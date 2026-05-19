<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCafe Register</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center p-10 md:p-8 bg-gradient-to-br from-[#f5eee6] to-[#c89b6d]">

    <div
        class="w-[95%] max-w-5xl min-h-[540px] bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row">

        <!-- LEFT IMAGE -->
        <div class="w-full md:w-1/2 h-64 md:h-auto relative">

            <img src="{{ asset('images/coffee.jpeg') }}" alt="Coffee" class="w-full h-full object-cover">

            <div class="absolute bottom-0 left-0 w-full h-40 bg-gradient-to-b from-transparent to-white"></div>
        </div>

        <!-- RIGHT FORM -->
        <div class="w-full md:w-1/2 flex flex-col justify-center px-6 md:px-10 py-10">

            <!-- LOGO -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="w-16">
            </div>

            <!-- TITLE -->
            <h1 class="text-3xl font-bold text-center text-gray-800">
                Create your account
            </h1>

            <p class="text-center text-gray-400 text-sm mt-2 mb-8">
                Join HealthCafe and discover your healthy drink
            </p>

            <!-- FORM -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- NAME -->
                <div class="mb-4">
                    <input type="text" name="name" placeholder="Fullname"
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 border-none focus:ring-2 focus:ring-lime-400"
                        required>
                </div>

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

                <!-- CONFIRM PASSWORD -->
                <div class="mb-6">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 border-none focus:ring-2 focus:ring-lime-400"
                        required>
                </div>

                <!-- BUTTON -->
                <button type="submit"
                    class="w-full bg-lime-400 hover:bg-lime-500 text-white py-3 rounded-lg font-semibold transition">
                    REGISTER
                </button>

                <!-- LOGIN -->
                <p class="text-center text-sm text-gray-400 mt-6">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-blue-400 hover:underline">
                        Login
                    </a>
                </p>

            </form>

        </div>
    </div>

</body>

</html>
