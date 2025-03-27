@extends('layouts.app')

@section('content')
    <h1>Edit Booking</h1>
    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Pilih Produk:</label>
        <select name="product_id" required>
            @foreach ($products as $product)
                <option value="{{ $product->id }}" {{ $booking->product_id == $product->id ? 'selected' : '' }}>
                    {{ $product->name }}
                </option>
            @endforeach
        </select>

        <label>Tanggal Booking:</label>
        <input type="date" name="booking_date" value="{{ $booking->booking_date }}" required>

        <label>Catatan:</label>
        <textarea name="notes">{{ $booking->notes }}</textarea>

        <button type="submit">Update</button>
    </form>
@endsection
