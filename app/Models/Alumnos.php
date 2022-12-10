<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table='alumnos';
    protected $fillable = ['Nombre_Alumno','matricula','edad', 'grupo','email'];
}
