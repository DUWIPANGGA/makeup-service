@extends('layouts.app')

@section('content')
    <h1>Daftar Booking Saya</h1>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary">Buat Booking</a>

    @if (session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif

    <table class="table-auto w-full mt-4 border">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Tanggal Booking</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->product->name }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>{{ ucfirst($booking->status) }}</td>
                    <td>
                        <a href="{{ route('bookings.show', $booking->id) }}" class="text-blue-500">Detail</a> |
                        <a href="{{ route('bookings.edit', $booking->id) }}" class="text-yellow-500">Edit</a> |
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
