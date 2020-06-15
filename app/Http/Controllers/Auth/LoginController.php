<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function showLogin(){

        if (Auth::check())
        {

            return Redirect::to('/');
        }
        // Si no hay sesión activa mostramos el formulario
        return view('auth.login');
    }
    public function login(Request $request){

        $this->validate($request,[
            'usuario'=> 'required',
            'password'=>'required'
        ]);


        if (Auth::attempt(['usuario'=>$request->usuario,'password'=>$request->password])) 
        {
            return redirect()->route('/');
        }
        
        return Redirect::back()->with('status', 'Invalid data')->withInput();
        }
}
