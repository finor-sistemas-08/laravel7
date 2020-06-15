<?php 
    function activarLink($route){
        return request()->routeIs($route) ? 'active':'';
    }

    

?>