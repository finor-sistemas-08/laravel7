<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      @barra_principal()
   <div class="container navigation">
      @icono_principal()
      @auth
         @menu_usuario()
         {{-- @include('principal.components.nav.menu_usuario') --}}
      @endauth
      @guest
         @menu_invitado()      
         {{-- @include('principal.components.nav.menu_invitado') --}}
      @endguest
    </div>
</nav>
