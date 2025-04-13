<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizadores extends Model
{
    use HasFactory;

    protected $table = 'organizadores';
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono'];


    public function evento()
    {
        return $this->hasMany(Eventos::class, 'organizador_id');
        
    }
    public function participacion()
    {
        return $this->hasMany(Participaciones::class, 'organizador_id');
    }
}
