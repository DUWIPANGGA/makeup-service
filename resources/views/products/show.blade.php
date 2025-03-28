@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto" data-aos="fade-up">
        <!-- Product Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-500 hover:shadow-2xl flex flex-col md:flex-row">
            <!-- Product Image Section -->
            <div class="md:w-2/5 p-6 flex flex-col items-center justify-center bg-gradient-to-br from-pink-100 to-purple-100">
                <div class="relative group overflow-hidden rounded-xl">
                    <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" 
                         class="w-full h-64 object-contain transform transition duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
                
                <div class="mt-6 text-center">
                    <h2 class="text-2xl font-bold text-gray-900">{{ $product->name }}</h2>
                    <div class="mt-4">
                        <span class="text-3xl font-bold text-pink-600">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                    </div>
                    
                    <div class="mt-4 flex items-center justify-center space-x-4">
                        <span class="px-3 py-1 rounded-full text-sm font-medium {{ $product->stock > 0 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $product->stock > 0 ? 'Stok Tersedia' : 'Stok Habis' }}
                        </span>
                        <span class="px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                            {{ $product->category->name ?? 'Tanpa Kategori' }}
                        </span>
                    </div>
                </div>
            </div>
            
            <!-- Product Details Section -->
            <div class="md:w-3/5 p-8">
                <!-- Product Header -->
                <div class="border-b border-gray-200 pb-6">
                    <h1 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h1>
                    <div class="flex items-center mt-2">
                        <div class="flex text-yellow-400">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5" fill="{{ $i < 4 ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            @endfor
                        </div>
                        <span class="ml-2 text-gray-600">(35 reviews)</span>
                    </div>
                </div>
                
                <!-- Product Description -->
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-gray-900">Deskripsi Produk</h3>
                    <p class="mt-2 text-gray-700 leading-relaxed">{{ $product->description }}</p>
                </div>
                
                <!-- Payment Methods -->
                <div class="mt-8" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-lg font-semibold text-gray-900">Metode Pembayaran</h3>
                    <div class="mt-4 grid grid-cols-2 gap-4">
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                            <div class="bg-pink-100 p-2 rounded-full text-pink-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                            </div>
                            <span class="ml-3 text-gray-700">Transfer Bank</span>
                        </div>
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                            <div class="bg-purple-100 p-2 rounded-full text-purple-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="ml-3 text-gray-700">E-Wallet</span>
                        </div>
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                            <div class="bg-pink-100 p-2 rounded-full text-pink-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <span class="ml-3 text-gray-700">COD (Area Terbatas)</span>
                        </div>
                    </div>
                </div>
                
                <!-- Customer Reviews -->
                <div class="mt-8" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-lg font-semibold text-gray-900">Ulasan Pelanggan</h3>
                    <div class="mt-4 space-y-4">
                        <div class="bg-gray-50 p-4 rounded-xl">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/32.jpg" alt="Customer">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Sarah Johnson</p>
                                    <div class="flex text-yellow-400">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <p class="mt-2 text-gray-700 italic">"Produk ini sangat bagus! Kualitasnya sesuai ekspektasi. Pasti beli lagi!"</p>
                            <p class="mt-1 text-xs text-gray-500">1 minggu yang lalu</p>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="mt-8 space-y-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('bookings.create', $product->id) }}" 
                       class="block w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white text-center py-3 px-4 rounded-xl font-semibold shadow-lg hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-[1.02]">
                       🛒 Booking Sekarang
                    </a>
                    <a href="{{ route('products.index') }}" 
                       class="block w-full bg-white border border-gray-300 text-gray-700 text-center py-3 px-4 rounded-xl font-medium hover:bg-gray-50 transition-all duration-300 transform hover:scale-[1.02]">
                       🔙 Kembali ke Daftar Produk
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AOS Animation Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out-cubic'
    });
</script>
@endsection