<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
    <ul class="nav navbar-nav">
      <li class=""><a href="{{ route('inicio') }}">Inicio</a></li>
      <li class=""><a href="{{ route('covid19') }}">Covid 19</a></li>
      <li class=""><a href="{{ route('informacion') }}">Informacion General</a></li>      
      <li class=""><a href="{{ route('nosotros') }}">Quienes Somos</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Iniciar Sesion <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('registrar') }}">Registrate</a></li>
          <li><a href="{{ route('login') }}">Ingresa</a></li>
        </ul>
      </li>
    </ul>
</div>
  