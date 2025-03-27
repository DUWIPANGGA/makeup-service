@extends('layouts.app')

@section('content')
<!-- Product Showcase Section -->
<section class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12" data-aos="zoom-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Produk Kami</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Temukan koleksi produk terbaik kami dengan kualitas premium
            </p>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @if($products)
            @foreach($products as $product)
            <div class="group" 
                 data-aos="fade-up" 
                 data-aos-delay="{{ $loop->index * 100 }}"
                 data-tilt
                 data-tilt-max="10"
                 data-tilt-speed="400"
                 data-tilt-perspective="1000">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-500 group-hover:shadow-2xl h-full flex flex-col">
                    <!-- Product Image -->
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        @if($product->stock <= 0)
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">Habis</span>
                        </div>
                        @endif
                    </div>
                    
                    <!-- Product Info -->
                    <div class="p-6 flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $product->name }}</h3>
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5" fill="{{ $i < 4 ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                    </svg>
                                @endfor
                            </div>
                            <span class="text-gray-600 text-sm ml-2">({{ rand(5, 50) }} reviews)</span>
                        </div>
                        <p class="text-gray-700 mb-2">Harga: <span class="text-xl font-bold text-pink-500">Rp {{ number_format($product->price, 0, ',', '.') }}</span></p>
                        <p class="text-sm text-gray-500">Stok: <span class="{{ $product->stock > 0 ? 'text-green-600' : 'text-red-600' }} font-medium">{{ $product->stock > 0 ? 'Tersedia' : 'Habis' }}</span></p>
                    </div>
                    
                    <!-- Action Button -->
                    <div class="px-6 pb-6">
                        <a href="{{ route('products.show', $product->id) }}" 
                           class="block w-full text-center bg-gradient-to-r from-pink-500 to-purple-600 text-white px-6 py-3 rounded-xl font-medium hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow hover:shadow-lg">
                           Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>

        <!-- Pagination or View More -->
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-pink-500 text-pink-500 rounded-full font-medium hover:bg-pink-500 hover:text-white transition-all duration-300 group">
                Lihat Semua Produk
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Include necessary JS libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

<!-- Initialize AOS -->
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out-cubic'
    });
</script>
@endsection