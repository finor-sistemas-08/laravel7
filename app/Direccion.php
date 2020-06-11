<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';
    protected $primaryKey = 'id';
    
    protected $fillable =[ 
        'nombre',
        'distrito_id'
    ]; 
}
