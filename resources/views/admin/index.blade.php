

@extends('adminlte::page')

@section('title', 'Panel administrativo')

@section('content_header')
    <h1 class="text-center">Plan Felipe Integral. Panel administrativo</h1>
@stop

@section('content')
    <div class="w-100 h-100" style="background-image:url({{Storage::url('fondo5.jpg')}})"><p>Panel administrativo Centro Cristiano Renuevo de Margarita.</p></div>
        

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/css.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop