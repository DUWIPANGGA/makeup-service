@extends('layouts.app')

@section('content')
    <h1>Daftar Produk</h1>
    <a href="{{ route('products.create') }}">Tambah Produk</a>
    
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a> - Rp{{ number_format($product->price, 2) }}
                <a href="{{ route('products.edit', $product) }}">Edit</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
