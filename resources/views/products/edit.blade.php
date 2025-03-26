@extends('layouts.app')

@section('content')
    <h1>Edit Produk</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <label>Deskripsi:</label>
        <textarea name="description">{{ $product->description }}</textarea>
        <label>Harga:</label>
        <input type="number" name="price" value="{{ $product->price }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
