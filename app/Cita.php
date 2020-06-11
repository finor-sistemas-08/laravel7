<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{ 
    protected $table = 'citas';
    protected $primaryKey = 'id';
    
    protected $fillable =[ 
        'fecha_programada',
        'fecha_registro',
        'paciente_id',
        'medico_id',
        'historia_clinica_id'
    ];   
}
