<?php

use App\Departamento;
use App\Municipio;
use App\Provincia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

/*Provincias de Santa Cruz*/
function departamentos(){
    $departamentos = Departamento::all();
    return $departamentos;
}
function buscar_departamento($departamento){
    return $departamento = Departamento::select('nombre')->where('departamentos.id','=',$departamento);
}





// array de todas las provincias
function provincias(){
    $provincias = Provincia::all();
    return $provincias;
}


function api_covid(){
        $response = Http::get('https://raw.githubusercontent.com/mauforonda/covid19-bolivia/master/data.json');
        return $response;
}

    
function buscar_provincia($departamento_id){
         $provincias =DB::select("SELECT *FROM provincias WHERE departamento_id = $departamento_id");
         return $provincias;
} 





function buscar_municipio($provincia_id){
    $municipios =DB::select("SELECT *FROM municipios WHERE provincia_id = $provincia_id");
    return $municipios;
}

  
?>