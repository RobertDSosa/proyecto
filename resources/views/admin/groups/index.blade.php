@extends('adminlte::page')

@section('title', 'Panel administrativo')

@section('content_header')
    
<a class="btn btn-success btn-sm float-right" href="{{route('admin.groups.create')}}">Nuevo Grupo Bíblico</a>
    <h1>Listado de Grupos Bíblicos</h1>
@stop

@section('content')
    @livewire('admin.groups-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop