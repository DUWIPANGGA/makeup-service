@extends('layouts.app')

@section('content')
    <h1>Tambah Produk</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="name" required>
        <label>Deskripsi:</label>
        <textarea name="description"></textarea>
        <label>Harga:</label>
        <input type="number" name="price" required>
        <button type="submit">Simpan</button>
    </form>
@endsection
