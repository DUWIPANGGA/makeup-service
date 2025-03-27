@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>
    
    <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded mb-4 inline-block">Tambah Produk</a>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-100 border-b">
                <tr class="text-left">
                    <th class="p-4">Gambar</th>
                    <th class="p-4">Nama</th>
                    <th class="p-4">Harga</th>
                    <th class="p-4">Terjual</th>
                    <th class="p-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-4">
                            @if ($product->picture)
                                <img src="{{ asset('storage/' . $product->picture) }}" alt="Product Image" class="w-16 h-16 object-cover rounded-lg">
                            @else
                                <span class="text-gray-500">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td class="p-4 font-semibold">{{ $product->name }}</td>
                        <td class="p-4 text-green-600 font-medium">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="p-4 text-gray-700">{{ $product->terjual }}</td>
                        <td class="p-4 flex space-x-2">
                            <a href="{{ route('products.show', $product->id) }}" class="text-blue-500 hover:underline">Detail</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
