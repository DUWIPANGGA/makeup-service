<nav class="bg-pink-500 text-white pl-6 pr-6 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
        <img src="{{ asset('img/logo.png') }}" alt="LK Makeup Artist" class="h-20 p-0 m-0">

    </div>

    <!-- Menu -->
    <ul class="hidden md:flex space-x-6 font-semibold">
        <li><a href="#" class="hover:text-gray-200">HOME</a></li>
        <li><a href="#" class="hover:text-gray-200">ABOUT</a></li>
        <li><a href="{{ route('list-products') }}" class="hover:text-gray-200">DAFTAR PAKET</a></li>
        <li><a href="#" class="hover:text-gray-200">HUBUNGI KAMI</a></li>
    </ul>

    <!-- Login Button -->
    <a href="#" class="bg-white text-pink-500 px-4 py-2 rounded-lg font-semibold shadow hover:bg-gray-100">
        LOGIN
    </a>

    <!-- Mobile Menu Button -->
    <button id="menu-btn" class="md:hidden text-white focus:outline-none">
        ☰
    </button>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden bg-pink-500 text-white p-4 space-y-4 text-center md:hidden">
    <a href="#" class="block hover:text-gray-200">HOME</a>
    <a href="#" class="block hover:text-gray-200">ABOUT</a>
    <a href="#" class="block hover:text-gray-200">DAFTAR PAKET</a>
    <a href="#" class="block hover:text-gray-200">HUBUNGI KAMI</a>
</div>

<script>
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>