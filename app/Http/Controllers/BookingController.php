<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = Booking::all();
        return view('booking.index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_Name'     => 'required|string|max:50',
            'last_Name'      => 'required|string|max:50',
            'orderDate'      => 'required|date',
            'checkIn'        => 'required|date|after_or_equal:orderDate',
            'checkOut'       => 'required|date|after:checkIn',
            'specialRequest' => 'nullable|string',
            'roomType'       => 'required|string|max:50',
            'roomNumber'     => 'required|integer|exists:rooms,room_number',
            'status'         => 'required|string|max:50',
        ]);

        Booking::create($validated);

        return redirect()->route('bookings.index')->with('success', 'Booking creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('booking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking): RedirectResponse
    {
        $validated = $request->validate([
            'first_Name' => 'required|string|max:50',
            'last_Name' => 'required|string|max:50',
            'orderDate' => 'required|date',
            'checkIn' => 'required|date|after_or_equal:orderDate',
            'checkOut' => 'required|date|after:checkIn',
            'specialRequest' => 'nullable|string',
            'roomType' => 'required|string|max:50',
            'roomNumber' => 'required|integer|exists:rooms,room_number',
            'status' => 'required|string|max:50',
        ]);

        $booking->update($validated);

        return redirect()->route('bookings.index')->with('success', 'Booking updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking): RedirectResponse
    {
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking deleted');
    }
}
