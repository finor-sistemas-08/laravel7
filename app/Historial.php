<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $table = 'historia_clinica';
    protected $primaryKey = 'id';
    
    protected $fillable =[ 
        'sexo',
        'peso',
        'altura',
        'fecha_registro',
        'alergia',
        'enfermedad',
        'paciente_id',
    ]; 
}
