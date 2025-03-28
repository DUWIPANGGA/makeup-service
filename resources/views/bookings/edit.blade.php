@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto">
        <!-- Header -->
        <div class="text-center mb-8" data-aos="fade-down">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Edit Booking</span>
            </h1>
            <p class="text-gray-600">Perbarui detail janji makeup Anda</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden" data-aos="fade-up">
            <form action="{{ route('bookings.update', $booking->id) }}" method="POST" class="p-6 sm:p-8">
                @csrf
                @method('PUT')

                <!-- Product Selection -->
                <div class="mb-6">
                    <label for="product_id" class="block text-sm font-medium text-gray-700 mb-2">Pilih Produk</label>
                    <div class="relative">
                        <select id="product_id" name="product_id" required
                                class="appearance-none w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300">
                            @foreach ($products as $product)
                            <option value="{{ $product->id }}" {{ $booking->product_id == $product->id ? 'selected' : '' }}>
                                {{ $product->name }} - Rp {{ number_format($product->price, 0, ',', '.') }}
                            </option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Booking Date -->
                <div class="mb-6">
                    <label for="booking_date" class="block text-sm font-medium text-gray-700 mb-2">Tanggal Booking</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        </div>
                        <input type="date" id="booking_date" name="booking_date" 
                               value="{{ \Carbon\Carbon::parse($booking->booking_date)->format('Y-m-d') }}" required
                               class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300">
                    </div>
                </div>

                <!-- Booking Time -->
                <div class="mb-6">
                    <label for="booking_time" class="block text-sm font-medium text-gray-700 mb-2">Waktu Booking</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        </div>
                        <input type="time" id="booking_time" name="booking_time" 
                               value="{{ \Carbon\Carbon::parse($booking->booking_date)->format('H:i') }}" required
                               class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                               min="09:00" max="18:00">
                    </div>
                </div>

                <!-- Notes -->
                <div class="mb-8">
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Catatan Khusus</label>
                    <textarea id="notes" name="notes" rows="4"
                              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                              placeholder="Contoh: Saya alergi terhadap produk tertentu...">{{ $booking->notes }}</textarea>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row justify-between gap-4">
                    <a href="{{ route('bookings.index') }}" 
                       class="flex items-center justify-center px-6 py-3 border border-gray-300 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-all">
                        Kembali
                    </a>
                    <button type="submit" 
                            class="flex items-center justify-center px-6 py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 transition-all shadow-lg hover:shadow-xl">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Perbarui Booking
                    </button>
                </div>
            </form>
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

    // Set minimum date to today
    document.getElementById('booking_date').min = new Date().toISOString().split('T')[0];
</script>
@endsection