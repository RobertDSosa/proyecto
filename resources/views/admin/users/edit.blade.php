@extends('adminlte::page')

@section('title', 'Panel administrativo')

@section('content_header')
    <h1 class="text-center">Asignar un rol</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card w-50 mx-auto">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$user->name}}</p>

            <h2 class="h5">Listado de roles</h2>
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

                @foreach ($roles as $role)
                    <div class="form-group">
                        <p>
                            <label for="" >
                                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                {{$role->name }}
                            </label>
                        </p>
                        
                    </div>
                @endforeach
                {!! Form::submit('Asignar Rol', ['class' => 'btn btn-success mt-2 float-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop