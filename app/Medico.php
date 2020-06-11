<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';
    protected $primaryKey = 'id';
    
    protected $fillable =[ 
        'codigo_medico',
        'persona_id',
        'especialidad_id'
    ]; 
}
