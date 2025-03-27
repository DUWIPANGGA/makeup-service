@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12 px-6">
    @if ($errors->any())
    <div class="alert alert-danger mt-4" style="max-width: 90%;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="flex flex-col md:flex-row items-center md:items-start gap-10">
        
        <!-- Bagian Gambar & Harga -->
        <div class="bg-white shadow-md rounded-md p-4 text-center">
            <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" class="w-72 rounded-md">
            <h2 class="text-xl font-semibold mt-4">{{ $product->name }}</h2>
            <p class="text-gray-700 text-lg font-bold mt-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>

        <div class="bg-pink-500 p-6 rounded-md w-full md:w-1/2 text-white">
            <h2 class="text-2xl font-bold mb-4">Form Booking</h2>

            <form action="{{ route('booking') }}" method="GET">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="mb-4">
                    <label class="block text-lg mb-1">Nama</label>
                    <input type="text" name="name" class="w-full p-3 rounded-md text-gray-800" required>
                </div>

                <div class="mb-4">
                    <label class="block text-lg mb-1">No HP</label>
                    <input type="text" name="phone" class="w-full p-3 rounded-md text-gray-800" required>
                </div>

                <div class="mb-4">
                    <label class="block text-lg mb-1">Alamat</label>
                    <textarea name="address" class="w-full p-3 rounded-md text-gray-800" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-lg mb-1">Catatan</label>
                    <textarea name="notes" class="w-full p-3 rounded-md text-gray-800"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-lg mb-1">Tanggal Booking</label>
                    <input type="date" name="booking_date" class="w-full p-3 rounded-md text-gray-800" required>
                </div>

                <!-- Pilihan Pembayaran -->
                <div class="flex flex-col gap-4">
                    <button type="submit" name="payment_type" value="dp" class="w-full bg-white text-pink-500 font-semibold p-3 rounded-md hover:bg-gray-200">
                        Booking – Rp {{ number_format($product->price / 2, 0, ',', '.') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
