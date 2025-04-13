<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{

  use HasFactory;
      // Nombre de la tabla en la base de datos
      protected $table = 'eventos';
      
    // Permitir que estos campos sean llenados masivamente
    protected $fillable = ['Nombre', 'Descripcion', 'Fecha_Inicio', 'Fecha_Fin', 'Ubicacion'];

    public function organizador()
    {
        return $this->hasMany(Organizadores::class);
    }

    public function participacion()
    {
        return $this->hasMany(Participaciones::class);
    }
}
