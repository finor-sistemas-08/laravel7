@extends('principal.principal')
@section('contenido')

<section id="intro" class="intro">
    <div class="intro-content">
      <div class="container">
        <div class="row">



          
          <div class="col-lg-12">
            <div class="form-wrapper">
              <div class="fadeInRight" >

                <div class="panel panel-skin">
                  <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Iniciar Sesion <small></small></h3>
                  </div>
                  <div class="panel-body">
                    <div id="sendmessage">Iniciar Sesion</div>
                    <div id="errormessage"></div>

                    <form action="" method="post" role="form" class="contactForm lead">
                      <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control input-md" data-rule="minlen:3" placeholder="Escriba su nombre de usuario">
                            <div class="validation"></div>
                          </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Contraseña</label>
                            <input type="text" name="contraseña" id="contraseña" class="form-control input-md" data-rule="minlen:3" placeholder="*****************">
                            <div class="validation"></div>
                          </div>
                        </div>
                      </div>



                      <input type="submit" value="Iniciar Sesion" class="btn btn-skin btn-block btn-lg">
                      <input type="submit" value="Crear cuenta" class="btn btn-skin btn-block btn-lg">

                      {{-- <p class="lead-footer">* We'll contact you by phone & email later</p> --}}

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
