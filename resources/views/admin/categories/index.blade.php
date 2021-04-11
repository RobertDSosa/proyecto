@extends('adminlte::page')

@section('title', 'Panel administrativo')

@section('content_header')
    @can('admin.categories.create')
        <a href="{{route('admin.categories.create')}}" class="btn btn-success btn-sm float-right"> Agregar categoría</a>

    @endcan
    <h1 class="text-center">Lista de categorías</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="img-fluid h-100 w-100" style="min-height:550px; background-image: url({{Storage::url('fondo3.jpg')}}); background-size:cover; background-repeat:repeat-y;">

    <div class="card w-50 mx-auto my-auto">
        <div class="card-body">
            <table class="table table-striped">
                <thead>

                    <tr>

                        <th>Nombre</th>
                        <th colspan="2" class="text-center">Opciones</th>
                    </tr>
        
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            
                            <td>{{$category->name}}</td>
                            <td width="10px"> 
                                @can('admin.categories.edit')
                                    <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-primary btn-sm">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                    <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@stop

