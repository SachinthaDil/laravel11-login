<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-blue-600 shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-white text-2xl font-bold">MyGym</div>
                <div class="space-x-6">
                    <a href="{{ url('/home') }}" class="text-white hover:text-blue-300">Home</a>
                    <a href="{{ url('/services') }}" class="text-white hover:text-blue-300">Services</a>
                    <a href="{{ url('/about') }}" class="text-white hover:text-blue-300">About</a>
                    <a href="{{ url('/contact') }}" class="text-white hover:text-blue-300">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-6 text-center">
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </footer>

</body>

</html>
