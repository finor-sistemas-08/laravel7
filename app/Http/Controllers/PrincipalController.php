<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PrincipalController extends Controller
{
    
    public function home(){
        return view('principal.modules.home.home');
    }
    public function covid(){
        return view('principal.modules.covid.covid-19');
    }
    public function informacion(){
        $response = Http::get('https://raw.githubusercontent.com/mauforonda/covid19-bolivia/master/data.json');
        return view('principal.modules.general.informacion-general',['data'=>$response]);
    }
    public function nosotros(){
        return view('principal.modules.nosotros.quienes-somos');
    }
}
