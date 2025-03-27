<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Order;
use App\Models\Booking;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function process(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $transaction_details = [
            'order_id' => 'ORDER-' . uniqid(),
            'gross_amount' => $product->price
        ];

        $customer_details = [
            'first_name' => Auth::user()->name ?? 'Guest',
            'email' => Auth::user()->email ?? 'guest@example.com',
            'phone' => Auth::user()->phone ?? '081234567890',
        ];

        $item_details = [
            [
                'id' => $product->id,
                'price' => $product->price,
                'quantity' => 1,
                'name' => $product->name
            ]
        ];

        $transaction = [
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details
        ];

        $snapToken = Snap::getSnapToken($transaction);

        return view('products.payment', compact('snapToken', 'product'));
    }
    public function checkout(Request $request)
{
    Config::$serverKey = config('midtrans.server_key');
    Config::$isProduction = false; // Sandbox Mode
    Config::$isSanitized = true;
    Config::$is3ds = true;

    $orderId = "ORDER-" . uniqid(); // Buat order ID unik
    $params = [
        'transaction_details' => [
            'order_id' => $orderId,
            'gross_amount' => $request->total_price,
        ],
        'customer_details' => [
            'email' => Auth::user()->email,
            'first_name' => Auth::user()->name,
        ]
    ];

    $snapToken = Snap::getSnapToken($params);
    return response()->json(['snap_token' => $snapToken]);
}
    public function callback(Request $request)
{
    Log::info("Callback diterima: ", $request->all()); // Debugging

    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

    if ($hashed == $request->signature_key) {
        $order = Booking::where('id', $request->order_id)->first();

        if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
            $order->update(['status' => 'paid']);
            Log::info("Order berhasil: " . $order->id); // Debugging
        } elseif ($request->transaction_status == 'pending') {
            $order->update(['status' => 'pending']);
        } elseif (in_array($request->transaction_status, ['deny', 'expire', 'cancel'])) {
            $order->update(['status' => 'failed']);
        }
    }

    return response()->json(['message' => 'Callback processed']);
}
}
