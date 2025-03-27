@extends('layouts.app')

@section('content')
    <h1>Buat Booking Baru</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <label>Pilih Produk:</label>
        <select name="product_id" required>
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>

        <label>Tanggal Booking:</label>
        <input type="date" name="booking_date" required>

        <label>Catatan:</label>
        <textarea name="notes"></textarea>

        <button type="submit">Simpan</button>
    </form>
@endsection
