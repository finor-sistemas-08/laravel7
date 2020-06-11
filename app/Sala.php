<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'hospitales';
    protected $primaryKey = 'id';
    
    protected $fillable =[ 
        'nombre',
        'hospital_id'
    ]; 
}
