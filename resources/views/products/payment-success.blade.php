@extends('layouts.app')

@section('content')
<div class="text-center py-20">
    <h1 class="text-3xl font-bold text-green-600">Pembayaran Berhasil!</h1>
    <p class="mt-4 text-gray-700">Terima kasih telah berbelanja.</p>
    <a href="{{ route('products.index') }}" class="mt-6 inline-block bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600">
        Kembali ke Beranda
    </a>
</div>
@endsection
