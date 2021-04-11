@extends('adminlte::page')

@section('title', 'Panel administrativo')

@section('content_header')
    <div class="text-center">
        <h1>Realizar un Reporte</h1>
    </div>
    
@stop

@section('content')
<div class="img-fluid" style="height:2200px; background-image: url({{Storage::url('fondo3.jpg')}}); background-size:contain; background-repeat:repeat-y;">

    <div class="card w-50 mx-auto">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.reports.store', 'autocomplete' => 'off', 'files'=> true]) !!}

                @include('admin.reports.partials.form')
                {!! Form::submit('Crear Reporte', ['class' => 'btn btn-success float-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position:relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

{{-- 
@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="{{asset('vendor/ckeditor5-build-classic/ckeditor.js')}}""></script>

    <script>
        $(document).ready( function() {
            $("#group_id").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

    </script>
@endsection --}}