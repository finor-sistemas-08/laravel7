<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cama extends Model
{
    protected $table = 'camas';
    protected $primaryKey = 'id';
    
    protected $fillable =[ 
        'sigla',
        'paciente_id',
        'habitacion_id'
    ]; 
}


