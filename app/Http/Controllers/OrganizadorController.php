<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizadores;

class OrganizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizadores = Organizadores::all();

        return response()->json($organizadores);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'email' => 'required|email|unique:organizadores,email',
            'telefono' => 'nullable|string|max:20',
        ]);

        $organizador = Organizadores::create($validated);

        return response()->json([
            'message' => 'Organizador creado exitosamente',
            'organizador' => $organizador
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $organizador = Organizadores::findOrFail($id);

        return response()->json($organizador);
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
        $organizador = Organizadores::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'sometimes|string|max:50',
            'apellido' => 'sometimes|string|max:50',
            'email' => 'sometimes|email|unique:organizadores,email,' . $organizador->id,
            'telefono' => 'nullable|string|max:20',
        ]);
        $organizador->update($validated);
        return response()->json([
            'message' => 'Organizador actualizado exitosamente',
            'organizador' => $organizador
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organizador = Organizadores::findOrFail($id);
        $organizador->delete();

        return response()->json([
            'message' => 'Organizador eliminado exitosamente'
        ]);
    }
}
