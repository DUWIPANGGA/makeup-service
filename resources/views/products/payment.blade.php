@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12 px-6">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-900">Pembayaran {{ $product->name }}</h2>
        <p class="text-lg text-gray-700">Total: <strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>

        <!-- Tombol Bayar -->
        <button id="pay-button" class="bg-pink-500 text-white py-3 px-6 rounded-md hover:bg-pink-600 transition mt-4">
            Bayar Sekarang
        </button>
    </div>
</div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script>
   document.getElementById('pay-button').addEventListener('click', function () {
    console.log("Tombol Bayar diklik");

    fetch("{{ route('products.checkouts', ['id' => $product->id]) }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            product_id: "{{ $product->id }}",
            total_price: "{{ $product->price }}"
        }),
    })
    .then(response => {
        console.log("Fetch response diterima:", response);
        return response.json();
    })
    .then(data => {
        console.log("Data dari server:", data);
        snap.pay(data.snap_token, {
            onSuccess: function(result) {
                console.log("Transaksi sukses:", result);
                window.location.href = "/payment-success";
            },
            onPending: function(result) {
                console.log("Menunggu pembayaran:", result);
            },
            onError: function(result) {
                console.log("Transaksi gagal:", result);
            }
        });
    })
    .catch(error => {
        console.error("Fetch error:", error);
    });
});

</script>

@endsection
