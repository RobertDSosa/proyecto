@extends('adminlte::page')

@section('title', 'Panel administrativo')

@section('content_header')
    <h1>Realizar un Reporte</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.reports.store', 'autocomplete' => 'off', 'files'=> true]) !!}

                @include('admin.reports.partials.form')
                {!! Form::submit('Crear Reporte', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
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