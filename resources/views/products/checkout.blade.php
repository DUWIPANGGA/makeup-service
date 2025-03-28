@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Payment Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden" data-aos="fade-up">
            <!-- Product Info Section -->
            <div class="flex flex-col md:flex-row">
                <!-- Product Image -->
                <div class="md:w-2/5 bg-gradient-to-br from-pink-100 to-purple-100 p-8 flex items-center justify-center">
                    <div class="relative group overflow-hidden rounded-xl">
                        <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" 
                             class="w-full h-64 object-contain transform transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>
                
                <!-- Payment Details -->
                <div class="md:w-3/5 p-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Pembayaran {{ $product->name }}</h2>
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5" fill="{{ $i < 4 ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            @endfor
                        </div>
                        <span class="ml-2 text-gray-600">({{ rand(5, 50) }} ulasan)</span>
                    </div>
                    
                    <!-- Product Description -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Deskripsi Produk</h3>
                        <p class="text-gray-700 leading-relaxed">{{ $product->description }}</p>
                    </div>
                    
                    <!-- Payment Summary -->
                    <div class="bg-gray-50 rounded-xl p-4 mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Ringkasan Pembayaran</h3>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Harga Produk</span>
                            <span class="font-medium">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Biaya Admin</span>
                            <span class="font-medium">Rp 0</span>
                        </div>
                        <div class="border-t border-gray-200 my-2"></div>
                        <div class="flex justify-between">
                            <span class="text-gray-900 font-bold">Total Pembayaran</span>
                            <span class="text-pink-600 font-bold text-xl">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    @if($booking->status !== 'confirmed')
                    <!-- Payment Button -->
                    <button id="pay-button" 
                            class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white py-4 px-6 rounded-xl font-bold hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl flex items-center justify-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                        Bayar Sekarang
                    </button>
                    @else
                    <button 
                            class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white py-4 px-6 rounded-xl font-bold hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl flex items-center justify-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                        Sudah dibayar
                    </button>

                    @endif
                    <!-- Payment Methods Info -->
                    <div class="mt-4 text-center text-sm text-gray-500">
                        <p>Metode pembayaran: Transfer Bank, E-Wallet, Kartu Kredit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Midtrans SDK -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script>
    document.getElementById('pay-button').addEventListener('click', function () {
        // Show loading state
        const button = this;
        button.innerHTML = `
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Memproses pembayaran...
        `;
        button.disabled = true;

        fetch("{{ route('products.checkouts', ['id' => $booking->id]) }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                id: "{{ $booking->id }}",
                product_id: "{{ $product->id }}",
                total_price: "{{ $product->price }}"
            }),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.error) {
                throw new Error(data.error);
            }
            snap.pay(data.snap_token, {
                onSuccess: function(result) {
                    window.location.href = "{{ route('payment.success',$booking->id) }}";
                },
                onPending: function(result) {
                    alert('payment pending')
                },
                onError: function(result) {
                    alert('payment error')
                },
                onClose: function() {
                    button.innerHTML = `Bayar Sekarang`;
                    button.disabled = false;
                }
            });
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Terjadi kesalahan: " + error.message);
            button.innerHTML = `Bayar Sekarang`;
            button.disabled = false;
        });
    });
</script>

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