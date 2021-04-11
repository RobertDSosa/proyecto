@extends('adminlte::page')

@section('title', 'Panel administrativo')

@section('content_header')
    <h1 class="text-center">Crear una nueva etiqueta</h1>
@stop

@section('content')
<div class="img-fluid h-100 w-100" style="min-height:550px; background-image: url({{Storage::url('fondo3.jpg')}}); background-size:cover; background-repeat:repeat-y;">

    <div class="card w-50 mx-auto">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tags.store']) !!}

                @include('admin.tags.partials.form')

                {!! Form::submit('Crear etiqueta', ['class' => 'btn btn-success float-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
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

