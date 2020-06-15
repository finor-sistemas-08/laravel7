
<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
    <ul class="nav navbar-nav">
      <li class="{{ activarLink('home') }}"><a href="{{ route('home') }}">Inicio</a></li>
      <li class="{{ activarLink('covid') }}"><a href="{{ route('covid') }}">Covid 19</a></li>
      <li class="{{ activarLink('informacion')  }}"><a href="{{ route('informacion') }}">Informacion General</a></li>      
      <li class="{{ activarLink('nosotros') }} "><a href="{{ route('nosotros') }}">Quienes Somos</a></li>
      <li class="{{ activarLink('usuario.create')   ||  request()->routeIs('showLogin') ? 'active' :'' }}">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Perfil <b class="caret"></b></a>
        <ul class="dropdown-menu">
              <li class="{{ request()->routeIs('usuario.create') ? 'active' :''}}"><a href="{{ route('usuario.create') }}">Ver</a></li>
              <li class="{{ request()->routeIs('showLogin') ? 'active' :''}}"><a href="{{ route('showLogin') }}">Salir</a></li>
        </ul>
      </li>        
    </ul>
</div>





