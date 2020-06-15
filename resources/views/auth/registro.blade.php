@extends('principal.principal')
@section('contenido')
<section id="intro" class="intro">
    <div class="intro-content">
      <div class="container">      
        <div class="row">
          <div class="col-lg-12">
            <div class="form-wrapper">
              <div class=" fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                <div class="panel panel-skin">
                  <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Registrate - {{ __('Crea tu cuenta') }}<small></small></h3>
                  </div>
                  <div class="panel-body">                      

                      <form action="{{ route('usuario.store') }}" id="regiration_form" method="post"  class="contactForm lead">
                        @csrf

                        <fieldset>
                                <h5> <strong>Paso 1:</strong> Crea tu cuenta</h5>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label>Nombre de Usuario</label>
                                            <input type="usuario" name="usuario" id="usuario"  class="form-control input-md"  placeholder="Ingrese un nombre de usuario">
                                            {{-- {!! $errors->firts() !!} --}}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label>Correo Electronico</label>
                                            <input type="email" name="correo" id="correo"  class="form-control input-md"  placeholder="ejemplo@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" name="password" id="password" class="form-control input-md"  placeholder="***************">
                                            <input type="hidden" name="rol_id" value="4" id="rol_id">
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next btn btn-primary btn-block btn-sm" value="Siguiente" />
                      </fieldset>  


                        
                      <fieldset>
                        <h5> <strong>Paso 2:</strong> Agregar tus datos personales</h5>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="nombre" name="nombre" id="nombre" class="form-control input-md"  placeholder="Escribe tu nombre">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Apellidos</label>
                                        <input type="text" name="apellidos" id="apellidos" class="form-control input-md"  placeholder="Escribe tu apellido">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Carnet DNI</label>
                                        <input type="text" name="ci" id="ci" class="form-control input-md"  placeholder="Escribe tu cedula de identidad">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="telefono" name="telefono" id="telefono" class="form-control input-md"  placeholder="Escribe tu numero de telefono">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Nacionalidad</label>
                                        <input type="text" name="nacionalidad" id="nacionalidad" class="form-control input-md"  placeholder="Escribe tu nacionalidad">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Fecha Nacimiento</label>
                                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control input-md"  placeholder="Escribe tu fecha de nacimiento">
                                    </div>
                                </div>
                                

                            </div>




                            <input type="button" name="next" class="next btn btn-primary btn-block btn-sm" value="Siguiente" />
                            <input type="button" name="previous" class="previous btn btn-info btn-block btn-sm" value="Anterior" />
                      </fieldset>

                        


                      <fieldset>

                        <h5> <strong>Paso 3:</strong> Ingresa datos de Ubicacion</h5>
                          <div class="row">                              
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-group">
                                <label>Departamento</label>
                                <div class="form-group">
                                  <select id="departamentos"  class="form-control" name="departamento_id">
                                    <option>Seleccione su departamento</option>
                                    @foreach (departamentos() as $departamento)                                        
                                    <option value="{{ $departamento->id }}">{{$departamento->nombre}}</option>
                                    @endforeach
                                  </select>                                    
                                </div>
                              </div>
                            </div>


                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-group">
                                <label>Provincias</label>
                                <div class="form-group">
                                  <select id="provincias"  class="form-control" name="provincia_id">

                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                  <label>Municipios</label>
                                  <div class="form-group">
                                    <select id="municipios" class="form-control" name="municipio_id">
  
                                    </select>
                                  </div>
                                </div>
                            </div>

                          </div>
                          
                          




                          <div class="row">
                            

                            <div class="col-xs-6 col-sm-6 col-md-2">
                              <div class="form-group">
                                <label>#Distrito</label>
                                <input type="text" name="distrito" id="distrito" class="form-control input-md" required data-msg="Numero Distrito">
                                <div class="validation"></div>
                              </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-2">
                                <div class="form-group">
                                  <label>#Domicilio</label>
                                  <input type="text" name="numero_domicilio" id="domicilio" class="form-control input-md" required data-msg="Numero Domicilio">
                                  <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                  <label>Avenida/Calle</label>
                                  <input type="text" name="calle_avenida" id="calle_avenida" class="form-control input-md" required data-msg="Escriba ...">
                                  <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                  <label>Barrio/Zona</label>
                                  <input type="text" name="zona_barrio" id="zona_barrio" class="form-control input-md" required data-msg="Escriba...">
                                  <div class="validation"></div>
                                </div>
                            </div>


                          </div> 
                                <input type="submit" name="submit" class="submit btn btn-success btn-block btn-sm" value="Enviar" id="submit_data" />
                                <input type="button" name="previous" class="previous btn btn-info btn-block btn-sm" value="Anterior" />

                      </fieldset>

                      </form>
                      <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
<style type="text/css">
#regiration_form fieldset:not(:first-of-type) {
  display: none;
}
</style> 
@endsection
@section('script')
    <script>

$(document).ready(function(){         
          $('#departamentos').on('change',function(){
                var departamento_id = $(this).val();
                mostrar_provincias(departamento_id);
          });
          $('#provincias').on('change',function(){
                var provincia_id = $(this).val(); 
                mostrar_municipios(provincia_id);
          });
});
      function mostrar_provincias(departamento_id){
         if (departamento_id == 1){
            var provincias = @json(buscar_provincia(1));
            llenar_select_provincia(provincias); 
         }
      }


      function mostrar_municipios(provincia_id){
        if(provincia_id==1){
          var municipios = @json(buscar_municipio(1));
          llenar_select_municipio(municipios);
        }
        if(provincia_id==2){
          var municipios = @json(buscar_municipio(2));
          llenar_select_municipio(municipios);
        }
        if(provincia_id==3){
          var municipios = @json(buscar_municipio(3));
          llenar_select_municipio(municipios);
        }
        if(provincia_id==4){
          var municipios = @json(buscar_municipio(4));
          llenar_select_municipio(municipios);
        }
        if(provincia_id==5){
          var municipios = @json(buscar_municipio(5));
          llenar_select_municipio(municipios);
        }
        if(provincia_id==6){
          var municipios = @json(buscar_municipio(6));
          llenar_select_municipio(municipios);
        }
        if(provincia_id==7){
          var municipios = @json(buscar_municipio(7));
          llenar_select_municipio(municipios);
        }
        if(provincia_id==8){
          var municipios = @json(buscar_municipio(8));
          llenar_select_municipio(municipios);
        }
        if(provincia_id==9){
          var municipios = @json(buscar_municipio(9));
          llenar_select_municipio(municipios);
        }
        if(provincia_id==10){
          var municipios = @json(buscar_municipio(10));
          llenar_select_municipio(municipios);
        }
        if(provincia_id==11){
          var municipios = @json(buscar_municipio(11));
          llenar_select_municipio(municipios);
        } 
        if(provincia_id==12){
          var municipios = @json(buscar_municipio(12));
          llenar_select_municipio(municipios);
        } 
        if(provincia_id==13){
          var municipios = @json(buscar_municipio(13));
          llenar_select_municipio(municipios);
        } 
        if(provincia_id==14){
          var municipios = @json(buscar_municipio(14));
          llenar_select_municipio(municipios);
        } 
        if(provincia_id==15){
          var municipios = @json(buscar_municipio(15));
          llenar_select_municipio(municipios);
        } 
                 
      }


      function llenar_select_provincia(provincias){
        $('#provincias').empty();
        $('#municipios').empty();
        document.getElementById('provincias').innerHTML += "<option disable value='sin especificar'>Seleccione su Provincia</option>";
        for( index = 0; index < provincias.length;index++){          
             document.getElementById("provincias").innerHTML += "<option value='"+provincias[index].id+"'>"+provincias[index].nombre+"</option>"; 
          }
          document.getElementById("provincias").options[0].disabled = true;
      }


      function llenar_select_municipio(municipios){
        $('#municipios').empty();
        document.getElementById('municipios').innerHTML += "<option value='sin especificar'>Seleccione su Municipio </option>";
        for( index = 0 ; index < municipios.length ; index++){
          document.getElementById('municipios').innerHTML += "<option value='"+municipios[index].id+"'>"+municipios[index].nombre+"</option>";
        }
        document.getElementById('municipios').options[0].disabled = true;
      }
    </script>    
@endsection
