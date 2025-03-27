@extends('layouts.app')
@section('content')


                                            
<!-- Etalase Produk -->
<section class="container mx-auto py-12 px-6">
    <h2 class="text-3xl font-bold text-center mb-6">Produk Kami</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        @if($products)
        @foreach($products as $product)
        <div class="bg-white shadow-md rounded-md p-4 min-h-[350px] max-h-[450px] flex flex-col justify-between">
            <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" class="w-full rounded-md object-cover h-[200px]">
            <div>
                <h3 class="text-lg font-semibold mt-2">{{ $product->name }}</h3>
                <p class="text-gray-700">Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            </div>
            <a href="{{ route('products.show', $product->id) }}" 
                class="mt-3 inline-block bg-pink-500 text-white px-4 py-2 rounded-md hover:bg-pink-600">
                Beli Sekarang
            </a>
        </div>
        @endforeach
        @endif

    </div>
</section>


@endsection
