@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12 px-6">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6 flex flex-col md:flex-row gap-8">

        <!-- Bagian Gambar & Harga -->
        <div class="bg-gray-100 shadow-md rounded-md p-4 text-center flex flex-col items-center">
            <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" class="w-72 rounded-md">
            <h2 class="text-xl font-semibold mt-4 text-gray-900">{{ $product->name }}</h2>
            <p class="text-gray-700 text-lg font-bold mt-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <p class="text-sm text-gray-500 mt-2">Kategori: {{ $product->category->name ?? 'Tidak ada' }}</p>
            <p class="text-sm {{ $product->stock > 0 ? 'text-green-600' : 'text-red-600' }} mt-2">
                Stok: {{ $product->stock > 0 ? 'Tersedia' : 'Habis' }}
            </p>
        </div>

        <!-- Bagian Detail Produk -->
        <div class="flex-1">
            <h1 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h1>
            <p class="text-gray-700 mt-2">{{ $product->description }}</p>

            <!-- Metode Pembayaran -->
            <div class="mt-4">
                <h3 class="text-lg font-semibold text-gray-900">Metode Pembayaran</h3>
                <ul class="text-gray-700 mt-2">
                    <li>✅ Transfer Bank (BCA, Mandiri, BRI)</li>
                    <li>✅ E-Wallet (GoPay, OVO, Dana, ShopeePay)</li>
                    <li>✅ COD (Cash On Delivery) - [*Hanya untuk wilayah tertentu*]</li>
                </ul>
            </div>

            <!-- Review Pelanggan -->
            <div class="mt-6">
                <h3 class="text-lg font-semibold text-gray-900">Review Pelanggan</h3>
                <div class="bg-gray-50 p-4 rounded-md mt-2">
                    <p class="text-gray-800"><strong>⭐ 4.8/5</strong> (35 Ulasan)</p>
                    <p class="text-gray-700 italic mt-2">"Produk ini sangat bagus! Kualitasnya sesuai ekspektasi. Pasti beli lagi!"</p>
                    <p class="text-sm text-gray-500 mt-1">- Pelanggan Terverifikasi</p>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="mt-6 flex flex-col gap-4">
                <a href="{{ route('products.checkout', $product->id) }}" 
                   class="bg-pink-500 text-white text-center py-3 rounded-md hover:bg-pink-600 transition">
                   🛒 Beli Sekarang
                </a>
                <a href="{{ route('products.index') }}" 
                   class="bg-gray-200 text-gray-700 text-center py-3 rounded-md hover:bg-gray-300 transition">
                   🔙 Kembali ke Daftar Produk
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
