<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Direccion;
use App\Distrito;
use App\Municipio;
use App\Persona;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function index(Request $request)
    {            
            if($request){
                $query = trim($request->get('searchText'));
                $users = User::join('personas','personas.id','=','users.id')
                           ->join('direcciones','direcciones.id','=','personas.direccion_id')  
                           ->select('personas.id',
                                    'personas.ci',
                                    'personas.nombre',
                                    'personas.apellidos',
                                    'personas.telefono',
                                    'personas.correo',
                                    'personas.fecha_nacimiento',
                                    'personas.direccion_id',
                                    'direcciones.calle_avenida',
                                    'direcciones.numero_domicilio',
                                    'direcciones.zona_barrio',
                                    'direcciones.distrito_id',
                                    'personas.estado',
                                    'users.usuario')
                                    ->where('personas.nombre','LIKE','%'.$query.'%')
                                    ->orWhere('personas.ci','LIKE','%'.$query.'%')
                                    ->orWhere('users.usuario','LIKE','%'.$query.'%')
                                    ->orderBy('personas.id','desc')
                                    ->paginate(5); 
            }

            return view();
    }
    public function create()
    {
        return view('auth.registro');
    }

    public function store(Request $request)
    {
        // return $request;
        request()->validate([
            'nombre' => [
                'required',
            ]
        ]);
        try {
            DB::beginTransaction();

            $distrito = new Distrito();
            $distrito->nombre       = $request->distrito;
            $distrito->municipio_id = $request->municipio_id;
            $distrito->save();

            $direccion = new Direccion();
            $direccion->calle_avenida = $request->calle_avenida;
            $direccion->numero_domicilio = $request->numero_domicilio;
            $direccion->zona_barrio = $request->zona_barrio;
            $direccion->distrito_id = $distrito->id;
            $direccion->save();

            $persona = new Persona();
            $persona->ci                = $request->ci;
            $persona->nombre            = $request->nombre;
            $persona->apellidos         = $request->apellidos;
            $persona->correo            = $request->correo;
            $persona->telefono          = $request->telefono;
            $persona->nacionalidad      = $request->nacionalidad;
            $persona->fecha_nacimiento  = $request->fecha_nacimiento;
            $persona->direccion_id      = $direccion->id;
            $persona->estado            = 1;
            $persona->save();

            $user = new User();
            $user->id = $persona->id;
            $user->usuario = $request->usuario;
            $user->password = bcrypt($request->password);
            $user->rol_id = $request->rol_id;
            $user->condicion =1;
            $user->save();
                    
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // return $e->getMessage();
        }
        return ;
    }
    public function show($id)
    {
            try {
                DB::beginTransaction();
                $usuarios = DB::select("SELECT departamentos.id as departamento_id , 
                departamentos.nombre as departamento ,
                provincias.id  as provincia_id, 
                provincias.nombre as provincia,
                municipios.id as municipio_id,
                municipios.nombre as municipio,
                distritos.id as distrito_id,
                distritos.nombre as distrito,
                direcciones.id as direccion_id,
                direcciones.zona_barrio as zona,
                direcciones.calle_avenida as avenida,
                personas.id as persona_id,
                personas.nombre ,
                personas.apellidos,
                personas.id
                FROM   departamentos , provincias , municipios , distritos ,direcciones, personas
                WHERE  departamentos.id = provincias.departamento_id  
                AND    provincias.id    = municipios.provincia_id
                AND    municipios.id    = distritos.municipio_id 
                AND   distritos.id      = direcciones.distrito_id      
                AND   direcciones.id    = personas.direccion_id
                AND   personas.id = 1 ");
                
                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();    
            }
            
    }

    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        // return $request;
        try {
            DB::beginTransaction();

            $user              = User::findOrFail($id);
            $user->usuario     = $request->usuario;
            $user->password    = bcrypt($request->password);
            $user->rol_id      = $request->rol_id;
            $user->condicion   =1;
            $user->update();
    
            $persona = Persona::findOrFail($id);
            $persona->ci                = $request->ci;
            $persona->nombre            = $request->nombre;
            $persona->apellidos         = $request->apellidos;
            $persona->correo            = $request->correo;
            $persona->telefono          = $request->telefono;
            $persona->nacionalidad      = $request->nacionalidad;
            $persona->fecha_nacimiento  = $request->fecha_nacimiento;
            $persona->estado            = 1;
            $persona->update();
    
            $direccion = Direccion::findOrFail($persona->direccion_id);
            $direccion->calle_avenida = $request->calle_avenida;
            $direccion->numero_domicilio = $request->numero_domicilio;
            $direccion->zona_barrio = $request->zona_barrio;
            $direccion->update();

            $distrito = Distrito::findOrFail($direccion->distrito_id);
            $distrito->nombre       = $request->distrito;
            $distrito->municipio_id = $request->municipio_id;
            $distrito->update();
                    
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // return $e->getMessage();
        }
    }

    public function destroy($id)
    {
         
        try {
            DB::beginTransaction();
            $user = User::findOrFail($id);
            $user->delete();
    
            $persona    = Persona::findOrFail($id);
            $direccion  = Direccion::findOrFail($persona->direccion_id);
            $distrito   = Distrito::findOrFail($direccion->distrito_id);
            
            $persona->delete();
            $direccion->delete();
            $distrito->delete();
        
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }
        
    }


}
