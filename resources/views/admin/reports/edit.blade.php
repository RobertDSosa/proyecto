@extends('adminlte::page')

@section('title', 'Panel administrativo')

@section('content_header')
    <h1>Editar Reporte</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-body">
        {!! Form::model($report,['route' => ['admin.reports.update', $report ], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('group_id', 'Grupo Bíblico:') !!}
            {!! Form::select('group_id', $groups, null, ['class' => 'form-control ']) !!}
            @error('group_id')
               <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('fecha', 'Fecha:') !!}
            {!! Form::date('fecha', null, ['class' => 'form-control ']) !!}
            @error('fecha')
               <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        
        {{-- <div class="form-group">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Grupo Bíblico', 'readonly']) !!}
        
            @error('slug')
               <small class="text-danger">{{$message}}</small>
            @enderror
        </div> --}}
        
        
        <div class="form-group">
            {!! Form::label('felipes', 'Felipes:' ) !!}
            {!! Form::text('felipes', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Felipes.']) !!}
        
        
            @error('felipes')
                  <small class="text-danger">{{$message}}</small>
            @enderror
        </div>  
        
        <div class="form-group">
            {!! Form::label('discipulos', 'Discípulos:') !!}
            {!! Form::text('discipulos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Discípulos.']) !!}
        
            @error('discipulos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('ninos', 'Niños:') !!}
            {!! Form::text('ninos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Niños.']) !!}
        
            @error('ninos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('ausentes', 'Ausentes:') !!}
            {!! Form::text('ausentes', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Ausentes.']) !!}
        
            @error('ausentes')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('amigos', 'Amigos:') !!}
            {!! Form::text('amigos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Amigos.']) !!}
        
            @error('amigos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('ofrenda', 'Ofrenda:') !!}
            {!! Form::text('ofrenda', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ofrenda.']) !!}
        
            @error('ofrenda')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('ofrenda_ninos', 'Ofrenda de niños:') !!}
            {!! Form::text('ofrenda_ninos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ofrenda de niños.']) !!}
        
            @error('ofrenda_ninos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('vea', 'VEA:') !!}
            {!! Form::text('vea', null, ['class' => 'form-control', 'placeholder' => 'Asistencia al VEA.']) !!}
        
            @error('vea')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('convertidos_adultos', 'Convertidos (Adultos):') !!}
            {!! Form::text('convertidos_adultos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Convertidos (Adultos).']) !!}
        
            @error('convertidos_adultos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('convertidos_ninos', 'Convertidos (Niños):') !!}
            {!! Form::text('convertidos_ninos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Convertidos (Niños).']) !!}
        
            @error('convertidos_ninos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('reconciliaciones', 'Reconciliaciones:') !!}
            {!! Form::text('reconciliaciones', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Reconciliaciones.']) !!}
        
            @error('reconciliaciones')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('liderazgo', 'Liderazgo:') !!}
            {!! Form::text('liderazgo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas en Clases de Liderazgo.']) !!}
        
            @error('liderazgo')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        
        
        <h4 class=" text-gray-500">Asistencia del día domingo</h4>
        
        <div class="form-group">
            {!! Form::label('domingo_hermanos', 'Hermanos:') !!}
            {!! Form::text('domingo_hermanos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Hermanos que asistieron el día domingo.']) !!}
        
            @error('domingo_hermanos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('domingo_amigos', 'Amigos:') !!}
            {!! Form::text('domingo_amigos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Amigos que asistieron el día domingo.']) !!}
        
            @error('domingo_amigos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('domingo_ninos', 'Niños:') !!}
            {!! Form::text('domingo_ninos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Niños que asistieron el día domingo.']) !!}
        
            @error('domingo_ninos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        
        
        <h4 class=" text-gray-500">Misión Amigo</h4>
        
        <div class="form-group">
            {!! Form::label('mision_amigo', 'Misión Amigo:') !!}
            {!! Form::text('mision_amigo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas incluidas en la Misión Amigo.']) !!}
        
            @error('mision_amigo')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('consolidacion', 'Consolidación:') !!}
            {!! Form::text('consolidacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas que reciben la Consolidación.']) !!}
        
            @error('consolidacion')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('discipulado_uno', 'Discipulado 1:') !!}
            {!! Form::text('discipulado_uno', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas que asisten al Discipulado 1.']) !!}
        
            @error('discipulado_uno')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('discipulado_dos', 'Discipulado 2:') !!}
            {!! Form::text('discipulado_dos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas que asisten al Discipulado 2.']) !!}
        
            @error('discipulado_dos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('liderazgo', 'Liderazgo:') !!}
            {!! Form::text('liderazgo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas en Clases de Liderazgo.']) !!}
        
            @error('liderazgo')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        
        <h4 class=" text-gray-500">Información Adicional.</h4>
        
        <div class="form-group">
            {!! Form::label('Observaciones', 'Observaciones:') !!}
            {!! Form::text('Observaciones', null, ['class' => 'form-control', 'placeholder' => 'Observaciones.']) !!}
        
            @error('Observaciones')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        
        

            {!! Form::submit('Actualizar Grupo Bíblico', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
{{-- 
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
@endsection --}}
