<nav
    class="bg-gradient-to-r from-pink-500 to-purple-600 text-white shadow-lg sticky top-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <!-- Logo with hover effect -->
            <div class="flex items-center space-x-2 transform hover:scale-105 transition duration-300">
                <img src="{{ asset('img/logo.png') }}" alt="LK Makeup Artist" class="h-16 p-0 m-0">
                <span class="text-xl font-bold hidden sm:inline-block">LK Makeup</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}"
                    class="px-4 py-2 rounded-lg font-semibold hover:bg-white/10 transition-all duration-300 hover:scale-105 flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    HOME
                </a>
                <a href="{{ route('about') }}"
                    class="px-4 py-2 rounded-lg font-semibold hover:bg-white/10 transition-all duration-300 hover:scale-105 flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    ABOUT
                </a>
                <a href="{{ route('list-products') }}"
                    class="px-4 py-2 rounded-lg font-semibold hover:bg-white/10 transition-all duration-300 hover:scale-105 flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                        </path>
                    </svg>
                    DAFTAR PAKET
                </a>
                <a href="{{ route('contact') }}"
                    class="px-4 py-2 rounded-lg font-semibold hover:bg-white/10 transition-all duration-300 hover:scale-105 flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    HUBUNGI KAMI
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="{{ route('user-booking') }}"
                        class="hidden sm:inline-block bg-white text-pink-600 px-6 py-2 rounded-full font-semibold shadow-lg hover:bg-gray-100 hover:text-pink-700 transition-all duration-300 transform hover:scale-105 flex items-center">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
</svg>
                    </a>
            </div>
            <!-- Auth Buttons -->
            <div class="flex items-center space-x-4">
                @guest
                    <a href="{{ route('login') }}"
                        class="hidden sm:inline-block bg-white text-pink-600 px-6 py-2 rounded-full font-semibold shadow-lg hover:bg-gray-100 hover:text-pink-700 transition-all duration-300 transform hover:scale-105 flex items-center">
                        {{-- <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                            </path>
                        </svg> --}}
                        LOGIN
                    </a>
                @endguest

                @auth
                    <a href="{{ route('profile.edit') }}"
                        class="hidden sm:inline-block bg-white text-pink-600 px-6 py-2 rounded-full font-semibold shadow-lg hover:bg-gray-100 hover:text-pink-700 transition-all duration-300 transform hover:scale-105 flex items-center">
                        PROFILE
                    </a>
                @endauth

                <!-- Mobile Menu Button with animation -->
                <button id="menu-btn"
                    class="md:hidden text-white focus:outline-none transform transition duration-300 hover:scale-125">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu with sliding animation -->
    <div id="mobile-menu"
        class="hidden md:hidden bg-gradient-to-b from-pink-600 to-purple-700 px-6 pb-4 pt-2 transform origin-top transition-all duration-300 ease-out">
        <div class="flex flex-col space-y-3">
            <a href="{{ route('home') }}"
                class="px-4 py-3 rounded-lg font-semibold hover:bg-white/10 transition-all duration-300 flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
                HOME
            </a>
            <a href="{{ route('home') }}"
                class="px-4 py-3 rounded-lg font-semibold hover:bg-white/10 transition-all duration-300 flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                ABOUT
            </a>
            <a href="{{ route('list-products') }}"
                class="px-4 py-3 rounded-lg font-semibold hover:bg-white/10 transition-all duration-300 flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                    </path>
                </svg>
                DAFTAR PAKET
            </a>
            <a href="#"
                class="px-4 py-3 rounded-lg font-semibold hover:bg-white/10 transition-all duration-300 flex items-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
                HUBUNGI KAMI
            </a>

            <div class="pt-2 border-t border-white/20">
                @guest
                    <a href="{{ route('login') }}"
                        class="block w-full text-center bg-white text-pink-600 px-8 py-3 rounded-full font-semibold shadow hover:bg-gray-100 transition-all duration-300 mt-2">
                        LOGIN
                    </a>
                @endguest
                @auth
                    <a href="{{ route('profile.edit') }}"
                        class="block w-full text-center bg-white text-pink-600 px-8 py-3 rounded-full font-semibold shadow hover:bg-gray-100 transition-all duration-300 mt-2">
                        PROFILE
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<script>
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
        // Toggle with animation
        if (mobileMenu.classList.contains("hidden")) {
            mobileMenu.classList.remove("hidden");
            mobileMenu.classList.add("animate-slideDown");
            setTimeout(() => {
                mobileMenu.classList.remove("animate-slideDown");
            }, 300);
        } else {
            mobileMenu.classList.add("animate-slideUp");
            setTimeout(() => {
                mobileMenu.classList.add("hidden");
                mobileMenu.classList.remove("animate-slideUp");
            }, 300);
        }
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileMenu.contains(e.target) && !menuBtn.contains(e.target) && !mobileMenu.classList.contains(
                'hidden')) {
            mobileMenu.classList.add("animate-slideUp");
            setTimeout(() => {
                mobileMenu.classList.add("hidden");
                mobileMenu.classList.remove("animate-slideUp");
            }, 300);
        }
    });
</script>

<style>
    .animate-slideDown {
        animation: slideDown 0.3s ease-out forwards;
    }

    .animate-slideUp {
        animation: slideUp 0.3s ease-out forwards;
    }

    @keyframes slideDown {
        from {
            transform: scaleY(0);
            opacity: 0;
        }

        to {
            transform: scaleY(1);
            opacity: 1;
        }
    }

    @keyframes slideUp {
        from {
            transform: scaleY(1);
            opacity: 1;
        }

        to {
            transform: scaleY(0);
            opacity: 0;
        }
    }

    /* Smooth scrolling for anchor links */
    html {
        scroll-behavior: smooth;
    }
</style>
