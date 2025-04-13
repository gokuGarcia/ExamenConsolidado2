<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Eventos;

abstract class Controller extends \Illuminate\Routing\Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $eventos= Eventos::all();
        return view('eventos.index', compact('eventos'));
    }
    public function create()
    {
        return view('eventos.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Descripcion' => 'required|string|max:255',
            'Fecha_Inicio' => 'required|date',
            'Fecha_Fin' => 'required|date',
            'Ubicacion' => 'required|string|max:255',
        ]);

        Eventos::create($validated);

        return redirect()->route('eventos.index')->with('success', 'Evento creado exitosamente.');
    }
    public function show(Eventos $evento)
    {
        return view('eventos.show', compact('evento'));
    }
    public function edit(Eventos $evento)
    {
        return view('eventos.edit', compact('evento'));
    }
    public function update(Request $request, Eventos $evento)
    {
        $validated = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Descripcion' => 'required|string|max:255',
            'Fecha_Inicio' => 'required|date',
            'Fecha_Fin' => 'required|date',
            'Ubicacion' => 'required|string|max:255',
        ]);

        $evento->update($validated);

        return redirect()->route('eventos.index')->with('success', 'Evento actualizado exitosamente.');
    }
    public function destroy(Eventos $evento)
    {
        $evento->delete();

        return redirect()->route('eventos.index')->with('success', 'Evento eliminado exitosamente.');
    }
}

