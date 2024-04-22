<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'duracion', 'precio'];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
