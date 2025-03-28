@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden p-8 text-center" data-aos="zoom-in">
        <!-- Success Icon -->
        <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
            <svg class="h-10 w-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <!-- Success Message -->
        <h1 class="text-3xl font-bold text-gray-900 mb-3">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 to-green-600">Pembayaran Berhasil!</span>
        </h1>
        <p class="text-lg text-gray-600 mb-6">Terima kasih telah memilih LK Makeup Artist</p>
        
        <!-- Order Details (you can add dynamic data here) -->
        <div class="bg-gray-50 rounded-lg p-4 mb-8">
            <div class="flex justify-between mb-2">
                <span class="text-gray-600">No. Pesanan</span>
                <span class="font-medium">#{{ rand(1000, 9999) }}</span>
            </div>
            <div class="flex justify-between mb-2"> 
                <span class="text-gray-600">Tanggal</span>
                <span class="font-medium">{{ now()->format('d M Y') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Total Pembayaran</span>
                <span class="font-medium text-green-600">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
            </div>
        </div>

        <!-- Additional Message -->
        <p class="text-gray-500 mb-8">
            silahkan hubungi kami untuk info lebih lanjut!.
        </p>
        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('user-booking') }}" 
               class="flex-1 sm:flex-none inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-lg font-medium hover:from-pink-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Kembali ke Beranda
            </a>
            <a href="{{ route('user-booking') }}" 
               class="flex-1 sm:flex-none inline-flex items-center justify-center px-6 py-3 border border-gray-300 bg-white text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                Lihat Booking
            </a>
        </div>
    </div>
</section>

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