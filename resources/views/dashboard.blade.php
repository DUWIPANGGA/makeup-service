@extends('layouts.app')
@section('content')

<!-- Hero Section -->
<section class="bg-pink-100 h-screen flex items-center">
    <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center" data-aos="fade-up">
        <!-- Gambar Hero -->
        <div class="w-full md:w-1/2" data-aos="fade-right">
            <img src="{{ asset('img/logo.png') }}" alt="Belanja Online" class="rounded-lg shadow-lg">
        </div>
        
        <!-- Teks Hero -->
        <div class="w-full md:w-1/2 text-center md:text-left mt-6 md:mt-0" data-aos="fade-left">
            <h1 class="text-5xl font-bold text-gray-900">Temukan Produk Favoritmu</h1>
            <p class="text-gray-700 mt-4">Belanja lebih mudah, cepat, dan terpercaya.</p>
            <a href="#" class="mt-6 inline-block bg-pink-500 text-white px-6 py-3 rounded-md hover:bg-pink-600 transition transform hover:scale-105">
                Belanja Sekarang
            </a>
        </div>
    </div>
</section>

<!-- Etalase Produk -->                                                                 
<section class="container mx-auto py-12 px-6">
    <h2 class="text-3xl font-bold text-center mb-6" data-aos="zoom-in">Produk Terlaris</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        @if($products)
        @foreach($products as $product)
        <div class="bg-white shadow-md rounded-md p-4 min-h-[350px] max-h-[450px] flex flex-col justify-between" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" class="w-full rounded-md object-cover h-[200px]">
            <div>
                <h3 class="text-lg font-semibold mt-2">{{ $product->name }}</h3>
                <p class="text-gray-700">Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            </div>
            <a href="{{ route('products.show', $product->id) }}" class="mt-2 bg-gradient-to-r from-pink-500 to-red-500 text-white px-4 py-2 rounded-md hover:from-pink-600 hover:to-red-600 transition transform hover:scale-105">
                Beli Sekarang
            </a>
        </div>
        @endforeach
        @endif

    </div>
</section>

<!-- AOS Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>

@endsection