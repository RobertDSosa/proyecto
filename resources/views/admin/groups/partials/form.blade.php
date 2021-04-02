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


</div>


