@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8" data-aos="fade-down">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Detail Booking</span>
            </h1>
            <p class="text-gray-600">Informasi lengkap tentang janji makeup Anda</p>
        </div>

        <!-- Booking Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden" data-aos="fade-up">
            <div class="p-6 sm:p-8">
                <!-- Booking Header -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6 mb-6">
                    <div class="bg-gradient-to-r from-pink-100 to-purple-100 p-4 rounded-full">
                        <svg class="w-12 h-12 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">{{ $booking->product->name }}</h2>
                        <p class="text-gray-500">Booking ID: #{{ $booking->id }}</p>
                    </div>
                </div>

                <!-- Booking Details -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Status -->
                    <div class="bg-gray-50 p-5 rounded-xl">
                        <h3 class="text-sm font-medium text-gray-500 mb-1">Status</h3>
                        @if($booking->status === 'confirmed')
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Dikonfirmasi
                        </span>
                        @elseif($booking->status === 'pending')
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Menunggu Konfirmasi
                        </span>
                        @elseif($booking->status === 'cancelled')
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            Dibatalkan
                        </span>
                        @else
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                            {{ ucfirst($booking->status) }}
                        </span>
                        @endif
                    </div>

                    <!-- Price -->
                    <div class="bg-gray-50 p-5 rounded-xl">
                        <h3 class="text-sm font-medium text-gray-500 mb-1">Harga</h3>
                        <p class="text-gray-900 font-medium">Rp {{ number_format($booking->product->price, 0, ',', '.') }}</p>
                    </div>

                    <!-- Date & Time -->
                    <div class="bg-gray-50 p-5 rounded-xl">
                        <h3 class="text-sm font-medium text-gray-500 mb-1">Tanggal</h3>
                        <p class="text-gray-900">{{ \Carbon\Carbon::parse($booking->booking_date)->translatedFormat('l, d F Y') }}</p>
                    </div>

                    <!-- Time -->
                    <div class="bg-gray-50 p-5 rounded-xl">
                        <h3 class="text-sm font-medium text-gray-500 mb-1">Waktu</h3>
                        <p class="text-gray-900">{{ \Carbon\Carbon::parse($booking->booking_date)->format('H:i') }} WIB</p>
                    </div>
                </div>

                <!-- Notes Section -->
                @if($booking->notes)
                <div class="mt-6 border-t border-gray-100 pt-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Catatan Khusus</h3>
                    <div class="bg-pink-50 p-4 rounded-lg">
                        <p class="text-gray-700">{{ $booking->notes }}</p>
                    </div>
                </div>
                @endif

                <!-- Additional Info -->
                <div class="mt-6 border-t border-gray-100 pt-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Informasi Tambahan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Dibuat Pada</p>
                            <p class="text-gray-900">{{ $booking->created_at->translatedFormat('d M Y H:i') }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Terakhir Diupdate</p>
                            <p class="text-gray-900">{{ $booking->updated_at->translatedFormat('d M Y H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Footer -->
            <div class="bg-gradient-to-r from-pink-50 to-purple-50 px-6 py-4 flex flex-col sm:flex-row justify-between items-center gap-4">
                <a href="{{ route('bookings.index') }}" 
                   class="w-full sm:w-auto flex items-center justify-center px-6 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-all">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Daftar
                </a>
                
                <div class="flex space-x-2 w-full sm:w-auto">
                    <a href="{{ route('bookings.edit', $booking->id) }}" 
                       class="w-1/2 sm:w-auto flex items-center justify-center px-6 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-pink-500 hover:bg-pink-600 transition-all shadow-sm">
                        Edit
                    </a>
                    @if($booking->status !== 'cancelled')
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="w-1/2 sm:w-auto">
                        @csrf
                        @method('PATCH')
                        <button type="submit" 
                                class="w-full flex items-center justify-center px-6 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-red-500 hover:bg-red-600 transition-all shadow-sm"
                                onclick="return confirm('Apakah Anda yakin ingin membatalkan booking ini?')">
                            Batalkan
                        </button>
                    </form>
                    @endif
                </div>
            </div>
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