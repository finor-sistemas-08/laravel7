<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = 'habitaciones';
    protected $primaryKey = 'id';
    
    protected $fillable =[ 
        'nombre',
        'sala_id'
    ]; 
}
