<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('miranda.rooms', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'room_number' => 'required|integer|unique:rooms,room_number',
            'room_type' => 'required|string|max:50',
            'description' => 'required|string',
            'photos' => 'required|string|max:255',
            'offer' => 'boolean',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'cancellation_policy' => 'required|string',
            'amenities' => 'required|string|max:255',
        ]);

        Room::create($validated);

        return redirect()->route('rooms.index')->with('success', 'Room create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room): RedirectResponse
    {
        $validated = $request->validate([
            'room_number' => 'required|integer|unique:rooms,room_number',
            'room_type' => 'required|string|max:50',
            'description' => 'required|string',
            'photos' => 'required|string|max:255',
            'offer' => 'boolean',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'cancellation_policy' => 'required|string',
            'amenities' => 'required|string|max:255',
        ]);

        unset($validated['room_number']);

        $room->update($validated);

        return redirect()->route('rooms.index')->with('success', 'Room update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room): RedirectResponse
    {
         $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room delete');
    }
}
