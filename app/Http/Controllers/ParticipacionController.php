<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participaciones;
use App\Models\Eventos;
use App\Models\Organizadores;

class ParticipacionController extends Controller
{
    /**
     * Mostrar una lista de participaciones.
     */
    public function index()
    {
        $participaciones = Participaciones::with(['evento', 'organizador'])->get();

        return response()->json($participaciones);
    }

    /**
     * Mostrar formulario para crear participación (opcional si usas solo API).
     */
    public function create()
    {
        //
    }

    /**
     * Almacenar una nueva participación.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'evento_id' => 'required|exists:eventos,id',
            'organizador_id' => 'required|exists:organizadores,id',
            'rol' => 'required|string|max:50',
        ]);

        $participacion = Participaciones::create($validated);

        return response()->json([
            'message' => 'Participación creada exitosamente',
            'participacion' => $participacion
        ], 201);
    }

    /**
     * Mostrar una participación específica.
     */
    public function show(string $id)
    {
        $participacion = Participaciones::with(['evento', 'organizador'])->findOrFail($id);

        return response()->json($participacion);
    }

    /**
     * Mostrar formulario de edición (opcional si usas solo API).
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Actualizar una participación.
     */
    public function update(Request $request, string $id)
    {
        $participacion = Participaciones::findOrFail($id);

        $validated = $request->validate([
            'evento_id' => 'sometimes|exists:eventos,id',
            'organizador_id' => 'sometimes|exists:organizadores,id',
            'rol' => 'sometimes|string|max:50',
        ]);

        $participacion->update($validated);

        return response()->json([
            'message' => 'Participación actualizada correctamente',
            'participacion' => $participacion
        ]);
    }

    /**
     * Eliminar una participación.
     */
    public function destroy(string $id)
    {
        $participacion = Participaciones::findOrFail($id);
        $participacion->delete();

        return response()->json([
            'message' => 'Participación eliminada exitosamente'
        ]);
    }
}

