<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participaciones extends Model
{
    use HasFactory;

    protected $table = 'participaciones';

    protected $fillable = ['evento_id', 'organizador_id', 'rol'];


    public function evento()
    {
        return $this->belongsTo(Eventos::class, 'evento_id');
    }

    public function organizador()
    {
        return $this->belongsTo(Organizadores::class, 'organizador_id');
    }
}
