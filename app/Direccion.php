<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';
    protected $primaryKey = 'id';
    
    protected $fillable =[ 
        'calle_avenida',
        'numero_domicilio',
        'zona_barrio',
        'distrito_id'
    ]; 
}
