<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = 'examenes';
    protected $primaryKey = 'id';
    
    protected $fillable =[ 
        'tipo',
        'resultado',
        'cita_id'
    ]; 
}
