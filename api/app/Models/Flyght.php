<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flyght extends Model
{
    use HasFactory;
    protected $fillable = ['aerolineaName','ciudadSalida','ciudadDestino','fechaVuelo','ciudad','aeropuerto','duracion','horaSalida','horaLlegada'];
}
