<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;

class EventoController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
        'Nombre' => 'required|unique:_eventos,Nombre|max:50',
        'Descripcion' => 'nullable|string',
        'Fecha_Inicio' => 'nullable|date',
        'Fecha_Fin' => 'nullable|date|after_or_equal:Fecha_Inicio',
        'Ubicacion' => 'nullable|string|max:100',
    ]);

    Eventos::create($request->all());
    
        
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
