<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Order;
use App\Models\Booking;
use App\Models\Product;
use Midtrans\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function process(Request $request, $id_booking, $id)
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
    public function checkout(Request $request, $id)
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

    return response()->json(['snap_token' => $snapToken]);
}
public function handleNotification(Request $request){
    Config::$serverKey = config('midtrans.server_key');
    Config::$isProduction = config('midtrans.is_production');
    Config::$isSanitized = true;
    Config::$is3ds = true;
    $notif = new Notification();

        Log::info('Midtrans Notification:', $request->all());
        $transactionStatus = $notif->transaction_status;
        $orderId = $notif->order_id;

        $transaction = Booking::where('id', $orderId)->first();

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        if ($transactionStatus == 'settlement') {
            $transaction->update(['status' => 'paid']);
        } elseif ($transactionStatus == 'pending') {
            $transaction->update(['status' => 'pending']);
        } elseif ($transactionStatus == 'expire') {
            $transaction->update(['status' => 'expired']);
        } elseif ($transactionStatus == 'cancel') {
            $transaction->update(['status' => 'canceled']);
        }

        return response()->json(['message' => 'Notification processed']);
}

}
