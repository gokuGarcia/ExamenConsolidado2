<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organizadores extends Model
{
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono'];

    public function participaciones()
    {
        return $this->hasMany(Participaciones::class, 'organizador_id');
    }
}
