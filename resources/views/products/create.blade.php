@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12 px-6">
    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-6">
        
        <h1 class="text-2xl font-bold text-gray-900 text-center mb-6">Tambah Produk</h1>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            
            <!-- Nama Produk -->
            <div>
                <label class="block text-lg font-semibold text-gray-700">Nama Produk</label>
                <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-pink-400 focus:border-pink-400" required>
            </div>

            <!-- Deskripsi Produk -->
            <div>
                <label class="block text-lg font-semibold text-gray-700">Deskripsi</label>
                <textarea name="description" rows="3" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-pink-400 focus:border-pink-400"></textarea>
            </div>

            <!-- Harga Produk -->
            <div>
                <label class="block text-lg font-semibold text-gray-700">Harga</label>
                <input type="number" name="price" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-pink-400 focus:border-pink-400" required>
            </div>

            <!-- Upload Gambar -->
            <div>
                <label class="block text-lg font-semibold text-gray-700">Gambar Produk</label>
                <input type="file" name="picture" class="w-full border border-gray-300 p-2 rounded-md">
            </div>

            <!-- Tombol Simpan -->
            <div class="flex justify-center">
                <button type="submit" class="bg-pink-500 text-white font-bold py-3 px-6 rounded-md hover:bg-pink-600 transition duration-300">
                    Simpan Produk
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
