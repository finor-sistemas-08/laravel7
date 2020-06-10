<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ComponentProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::include('principal.components.script','script_principal');
        Blade::include('principal.components.nav', 'nav_principal');
        Blade::include('principal.components.head', 'head_principal');

        Blade::include('principal.components.nav.menu','menu_principal');
        Blade::include('principal.components.nav.icono','icono_principal');
        Blade::include('principal.components.nav.barra','barra_principal');
    }
}
