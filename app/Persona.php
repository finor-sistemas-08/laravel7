<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id';
    
    protected $fillable =[ 
        'ci',
        'nombre',
        'apellidos',
        'correo',
        'telefono',
        'nacionalidad',
        'fecha_nacimiento',
        'estado',
        'direccion_id'
    ]; 
}
