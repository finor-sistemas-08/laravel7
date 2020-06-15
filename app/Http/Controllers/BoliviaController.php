<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BoliviaController extends Controller
{
    
    public function datos(){
        $response = Http::get('https://raw.githubusercontent.com/mauforonda/covid19-bolivia/master/data.json');
        return  view('prueba',[$response]);
    }    

}
