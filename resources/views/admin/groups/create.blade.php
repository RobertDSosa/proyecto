@extends('adminlte::page')

@section('title', 'Panel administrativo')

@section('content_header')
    <h1 class="text-center">Crear un Grupo Bíblico</h1>
@stop

@section('content')
<div class="img-fluid h-100 w-100" style="min-height:550px; background-image: url({{Storage::url('fondo3.jpg')}}); background-size:cover; background-repeat:repeat-y;">

    <div class="card w-50 mx-auto">
        <div class="card-body ">
            {!! Form::open(['route' => 'admin.groups.store', 'autocomplete' => 'off', 'files'=> true]) !!}

                @include('admin.groups.partials.form')
                {!! Form::submit('Crear Grupo', ['class' => 'btn btn-success float-right']) !!}
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


@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="{{asset('vendor/ckeditor5-build-classic/ckeditor.js')}}""></script>

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