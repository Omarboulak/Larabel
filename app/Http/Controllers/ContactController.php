<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('miranda.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación acorde a los campos del formulario
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'email'      => 'required|email|max:150',
            'phone'      => 'nullable|string|max:20',
            'subject'    => 'nullable|string|max:255',
            'comment'    => 'nullable|string',
        ]);

        try {
            \App\Models\Contact::create($validated);
        } catch (\Throwable $e) {
            Log::error('Contact store error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al guardar el mensaje. Intenta de nuevo.');
        }

        return redirect()->back()->with('success', 'Mensaje enviado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
