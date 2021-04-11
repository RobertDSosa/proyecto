<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}
</div>

@error('name')
    <small class="text-danger">{{$message}}</small>
@enderror

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la etiqueta', 'readonly']) !!}
</div>

@error('slug')
     <small class="text-danger">{{$message}}</small>
@enderror

<div class="form-group">
    {{-- <label for="">Color</label>

    <select name="color" id="color" class="form-control">
        <option value="red">Rojo</option>
        <option value="green">Verde</option>
        <option value="blue" selected>Azul</option>
    </select> --}}

    {!! Form::label('color', 'Color:') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control col-4']) !!}

</div>

@error('color')
    <small class="text-danger">{{$message}}</small>
 @enderror