<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>LK Makeup Artist</title>
        <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <!-- AOS Animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            .gradient-bg {
                background: linear-gradient(135deg, #f9a8d4 0%, #c4b5fd 50%, #818cf8 100%);
                background-size: 200% 200%;
                animation: gradient 15s ease infinite;
            }
            @keyframes gradient {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- Animated Background -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 gradient-bg">
            <!-- Logo -->
            <div class="mb-8" data-aos="fade-down" data-aos-duration="800">
                <a href="/" class="flex items-center space-x-3">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg transform hover:scale-110 transition-transform duration-300">
                        <x-application-logo class="w-12 h-12 fill-current text-pink-600" />
                    </div>
                    <span class="text-2xl font-bold text-white">LK Makeup Artist</span>
                </a>
            </div>

            <!-- Content Card -->
            <div class="w-full sm:max-w-md px-6 py-8 bg-white bg-opacity-90 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:shadow-2xl" data-aos="fade-up" data-aos-duration="800">
                {{ $slot }}
            </div>

            <!-- Footer -->
            <div class="mt-8 text-center text-white text-opacity-80 text-sm" data-aos="fade-up" data-aos-delay="200">
                &copy; {{ date('Y') }} LK Makeup Artist. All rights reserved.
            </div>
        </div>

        <!-- AOS Animation Script -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 800,
                once: true,
                easing: 'ease-out-cubic'
            });
        </script>
    </body>
</html>