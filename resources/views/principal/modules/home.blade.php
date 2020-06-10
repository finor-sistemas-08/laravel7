@extends('principal.principal')
@section('contenido')

    @include('principal.modules.home.intro')

    @include('principal.modules.home.covid')

    @include('principal.modules.home.recomendacion')

    @include('principal.components.footer')
    
@endsection