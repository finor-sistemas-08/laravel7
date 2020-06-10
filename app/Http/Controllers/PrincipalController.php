<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    
    public function inicio_home(){
        return view('principal.modules.home');
    }
    public function login(){

        return view('auth.login');
    }
    public function registro(){
        // $departamentos = Departamento::all();
        // $provincias = Provincia::all();
        // $municipios = Municipio::all();
        // $distritos = Distrito::all();
        // $direccion =Direccion::all();
        
        return view('sistema.modules.login.registro',[
                // 'departamentos'=>$departamentos,
                // 'provincias'=>$provincias,
                // 'municipios'=>$municipios,
                // 'distritos'=>$distritos,
                // 'direcciones'=>$direccion
        ]);
    }



}
