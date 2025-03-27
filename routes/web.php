<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    $products = Product::all();
    return view('welcome',compact('products'));
})->name('home');

Route::get('/dashboard', function () {
    $products = Product::all();
    return view('dashboard',compact('products'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('products', ProductController::class);
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('bookings', BookingController::class);
    Route::get('/list-products', [RouteController::class,'listProducts'])->name('list-products');
    Route::get('/checkout/{id}', [ProductController::class, 'checkout'])->name('products.checkout');
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/checkout', [BookingController::class, 'booking'])->name('booking');
    Route::post('/products/{id}/checkout', [CheckoutController::class, 'checkout'])->name('products.checkouts');
    Route::get('/payment/booking/{id_booking}/{id}', [CheckoutController::class, 'process'])
    ->name('products.payment');
    Route::get('/midtrans/notification', [CheckoutController::class, 'handleNotification'])->name('midtrans.notification');

    // Route::get('/payment-success', function () {
    //     return view('products.payment-success');
    // });
    // Route::post('/booking', [CheckoutController::class, 'checkout'])->name('booking');

});

require __DIR__.'/auth.php';    
