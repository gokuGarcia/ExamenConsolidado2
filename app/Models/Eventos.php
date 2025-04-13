<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{

      // Nombre de la tabla en la base de datos
      protected $table = '_eventos';
      
    // Permitir que estos campos sean llenados masivamente
    protected $fillable = ['Nombre', 'Descripcion', 'Fecha_Inicio', 'Fecha_Fin', 'Ubicacion'];
}
