<!DOCTYPE html>
<html lang="en">
@head_principal()
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
    @nav_principal()  
        @yield('contenido')  
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    
    <!-- Core JavaScript Files -->
    @script_principal()
    @yield('script')
    @yield('higthchart')
    @yield('data_table')
  
</body>
</html>