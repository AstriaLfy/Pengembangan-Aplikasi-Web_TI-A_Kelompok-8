<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futsal Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <a href="#" class="flex items-center py-4 px-2">
                        <span class="font-semibold text-gray-500 text-lg">⚽ FutsalKu</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-3 ">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <div class="py-20 bg-green-600 text-center text-white">
        <h1 class="text-5xl font-bold mb-4">Booking Lapangan Jadi Mudah</h1>
        <p class="text-xl mb-8">Cari jadwal, booking, dan mainkan pertandinganmu!</p>
        <a href="#" class="bg-white text-green-600 px-8 py-3 rounded-full font-bold hover:bg-gray-200 transition">Booking Sekarang</a>
    </div>
</body>
</html>