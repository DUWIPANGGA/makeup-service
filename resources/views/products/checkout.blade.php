@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto">
        <!-- Error Messages -->
        @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8 rounded-lg shadow-md" data-aos="fade-down">
            <div class="font-bold mb-2">Perhatikan kesalahan berikut:</div>
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="flex flex-col lg:flex-row gap-8" data-aos="fade-up">
            <!-- Product Info Card -->
            <div class="lg:w-2/5">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-500 hover:shadow-2xl h-full">
                    <div class="relative group overflow-hidden h-64">
                        <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                    
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $product->name }}</h2>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold text-pink-600">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            <span class="px-3 py-1 rounded-full text-sm font-medium {{ $product->stock > 0 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $product->stock > 0 ? 'Tersedia' : 'Habis' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Form -->
            <div class="lg:w-3/5">
                <div class="bg-gradient-to-br from-pink-500 to-purple-600 rounded-2xl shadow-xl p-8 text-white">
                    <h2 class="text-3xl font-bold mb-6 flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Form Booking
                    </h2>

                    <form action="{{ route('booking') }}" method="GET" class="space-y-6">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <!-- Name Field -->
                        <div class="space-y-2" data-aos="fade-up" data-aos-delay="100">
                            <label class="block text-lg font-medium">Nama Lengkap</label>
                            <input type="text" name="name" 
                                   class="w-full px-4 py-3 rounded-xl text-gray-900 focus:ring-2 focus:ring-pink-300 focus:border-transparent transition-all duration-300"
                                   placeholder="Masukkan nama lengkap" required>
                        </div>

                        <!-- Phone Field -->
                        <div class="space-y-2" data-aos="fade-up" data-aos-delay="150">
                            <label class="block text-lg font-medium">Nomor WhatsApp</label>
                            <input type="tel" name="phone" 
                                   class="w-full px-4 py-3 rounded-xl text-gray-900 focus:ring-2 focus:ring-pink-300 focus:border-transparent transition-all duration-300"
                                   placeholder="Contoh: 081234567890" required>
                        </div>

                        <!-- Address Field -->
                        <div class="space-y-2" data-aos="fade-up" data-aos-delay="200">
                            <label class="block text-lg font-medium">Alamat Lengkap</label>
                            <textarea name="address" rows="3"
                                      class="w-full px-4 py-3 rounded-xl text-gray-900 focus:ring-2 focus:ring-pink-300 focus:border-transparent transition-all duration-300"
                                      placeholder="Masukkan alamat lengkap" required></textarea>
                        </div>

                        <!-- Notes Field -->
                        <div class="space-y-2" data-aos="fade-up" data-aos-delay="250">
                            <label class="block text-lg font-medium">Catatan Tambahan</label>
                            <textarea name="notes" rows="2"
                                      class="w-full px-4 py-3 rounded-xl text-gray-900 focus:ring-2 focus:ring-pink-300 focus:border-transparent transition-all duration-300"
                                      placeholder="Contoh: Warna favorit, ukuran, dll"></textarea>
                        </div>

                        <!-- Booking Date Field -->
                        <div class="space-y-2" data-aos="fade-up" data-aos-delay="300">
                            <label class="block text-lg font-medium">Tanggal Booking</label>
                            <input type="date" name="booking_date" 
                                   class="w-full px-4 py-3 rounded-xl text-gray-900 focus:ring-2 focus:ring-pink-300 focus:border-transparent transition-all duration-300"
                                   required>
                        </div>

                        <!-- Payment Buttons -->
                        <div class="pt-4 space-y-4" data-aos="fade-up" data-aos-delay="350">
                            <button type="submit" name="payment_type" value="dp" 
                                    class="w-full bg-white text-pink-600 font-bold py-4 px-6 rounded-xl hover:bg-gray-100 transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl flex items-center justify-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Booking DP - Rp {{ number_format($product->price / 2, 0, ',', '.') }}
                            </button>

                            <button type="submit" name="payment_type" value="full" 
                                    class="w-full bg-pink-700 text-white font-bold py-4 px-6 rounded-xl hover:bg-pink-800 transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl flex items-center justify-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                Bayar Penuh - Rp {{ number_format($product->price, 0, ',', '.') }}
                            </button>
                        </div>
                    </form>
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
    
    // Set minimum date to today
    document.querySelector('input[name="booking_date"]').min = new Date().toISOString().split('T')[0];
</script>
@endsection