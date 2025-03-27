<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->get();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Tampilkan form tambah booking
     */
    public function create()
    {
        $products = Product::all();
        return view('bookings.create', compact('products'));
    }

    /**
     * Simpan booking baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'booking_date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'booking_date' => $request->booking_date,
            'status' => 'pending',
            'notes' => $request->notes,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil ditambahkan!');
    }
    public function booking(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'booking_date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $booking=Booking::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'booking_date' => $request->booking_date,
            'status' => 'pending',
            'notes' => $request->notes,
        ]);
        return redirect()->route('products.payment', ['id_booking' => $booking->id, 'id' => $booking->product_id]);

    }

    public function show(Booking $booking)
    {
        if ($booking->user_id !== Auth::id()) {
            abort(403);
        }
        return view('bookings.show', compact('booking'));
    }

    /**
     * Tampilkan form edit booking
     */
    public function edit(Booking $booking)
    {
        if ($booking->user_id !== Auth::id()) {
            abort(403);
        }

        $products = Product::all();
        return view('bookings.edit', compact('booking', 'products'));
    }

    /**
     * Update booking
     */
    public function update(Request $request, Booking $booking)
    {
        if ($booking->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'booking_date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil diperbarui!');
    }

    /**
     * Hapus booking
     */
    public function destroy(Booking $booking)
    {
        if ($booking->user_id !== Auth::id()) {
            abort(403);
        }

        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dihapus!');
    }
}
