<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    $products = Product::all();
    return view('welcome',compact('products'));
})->name('home');
Route::get('/contact', function () {
    return view('main.contact');
})->name('contact');
Route::get('/about', function () {
    return view('main.about');
})->name('about');
Route::get('/gallery', function () {
    return view('main.galeri');
})->name('galeri');

Route::get('/dashboard', function () {
    $products = Product::all();
    return view('dashboard',compact('products'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('products', ProductController::class)->only(['show','index','create']);
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/booking-create', BookingController::class);
    Route::get('/bookings',[BookingController::class,'user'])->name('user-booking');
    Route::get('/checkout/{id}', [ProductController::class, 'checkout'])->name('products.checkout');
    Route::post('/products-checkout/{id}', [CheckoutController::class, 'checkout'])->name('products.checkouts');
    
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/list-products', [RouteController::class,'listProducts'])->name('list-products');
    Route::get('/products-checkout/{id}', [CheckoutController::class, 'checkout'])->name('products.checkouts');
    
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/checkout', [BookingController::class, 'booking'])->name('booking');
    Route::get('/payment/{id}', [CheckoutController::class, 'process'])
    ->name('products.payment');
    Route::get('/midtrans/notification', [CheckoutController::class, 'handleNotification'])->name('midtrans.notification');

    Route::get('/payment-success/{id}', [CheckoutController::class,'success'])->name("payment.success");
    // Route::get('/payment-success', function () {
    //     return view('products.payment-success');
    // })->name("payment.success");
    Route::resource('admin/bookings', BookingController::class);
    // Route::post('/booking', [CheckoutController::class, 'checkout'])->name('booking');
    
});

Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::resource('users', UserController::class);
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::resource('products', ProductController::class);

});

require __DIR__.'/auth.php';    
