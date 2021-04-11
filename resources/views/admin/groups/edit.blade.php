@extends('adminlte::page')

@section('title', 'Panel administrativo')

@section('content_header')
    <h1 class="text-center">Editar Grupos Bíblicos</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="img-fluid h-100 w-100" style="min-height:550px; background-image: url({{Storage::url('fondo3.jpg')}}); background-size:cover; background-repeat:repeat-y;">

<div class="card w-50 mx-auto">
    <div class="card-body">
        {!! Form::model($group,['route' => ['admin.groups.update', $group ], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Grupo Bíblico']) !!}
        
            @error('name')
               <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        
        
        <div class="form-group">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Grupo Bíblico', 'readonly']) !!}
        
            @error('slug')
               <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('user_id', 'Líder' ) !!}
            {!! Form::select('user_id', $users, null, ['class' => 'form-control ']) !!}
        
            @error('user_id')
                  <small class="text-danger">{{$message}}</small>
            @enderror
        
            <div class="form-group">
                {!! Form::label('assistant', 'Asistente:') !!}
                {!! Form::text('assistant', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Asistente']) !!}
            
                @error('assistant')
                   <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        
            <div class="form-group">
                {!! Form::label('master', 'Maestro de niños:') !!}
                {!! Form::text('master', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Maestro de Niños del Grupo Bíblico.']) !!}
            
                @error('master')
                   <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        
            <div class="form-group">
                {!! Form::label('host', 'Anfitrión:') !!}
                {!! Form::text('host', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Anfitrión del Grupo Bíblico.']) !!}
            
                @error('host')
                   <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        
            <div class="form-group">
                {!! Form::label('code', 'Código:') !!}
                {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el código del Grupo Bíblico.']) !!}
            
                @error('host')
                   <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            {!! Form::submit('Actualizar Grupo Bíblico', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection
