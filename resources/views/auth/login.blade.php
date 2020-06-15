@extends('principal.principal')
@section('contenido')

<section id="intro" class="intro">
    <div class="intro-content">
      <div class="container">
        <div class="row">


          <div class="col-lg-6">
            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
              <h2 class="h-ultra">Medicio medical group</h2>
         
            </div>
            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
              <h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>
            </div>
            <div class="well well-trans">
              <div class="wow fadeInRight" data-wow-delay="0.1s">

                <ul class="lead-list">
                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
                </ul>

              </div>
            </div>
          </div>
          

          <div class="col-lg-6">
            <div class="form-wrapper">
              <div class="">

                <div class="panel panel-skin">
                  <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Iniciar sesion <small></small></h3>
                  </div>
                  <div class="panel-body">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                    <form action="{{ route('login') }}" method="post" role="form" class="contactForm lead was-validated">
                      @csrf
                      @if(Session::has('error_message'))
                      {{ Session::get('error_message') }}
                      @endif
                      
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group{{ $errors->has('usuario'?'is_invalid':'') }}">
                            <label>Usuario</label>
                            <input type="text" name="usuario" value="{{ old('usuario') }}" id="usuario" class="form-control input-md" data-rule="minlen:3" placeholder="escribe tu nombre de usuario">
                            {!! $errors->first('usuario','<div class="alert alert-dange"><small>:message</small></div>') !!}
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group{{ $errors->has('usuario'?'is_invalid':'') }}">
                            <label>Contraseña</label>
                            <input type="text" name="password" id="password" class="form-control input-md" data-rule="minlen:3" placeholder="escribe tu contraseña">
                            {!! $errors->first('password','<div class="alert alert-dange"><small>:message</small></div>') !!}
                          </div>
                        </div>
                      </div>

                      <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">
                      <p class="lead-footer"></p>

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
