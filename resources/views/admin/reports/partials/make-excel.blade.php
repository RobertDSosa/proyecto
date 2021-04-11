<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>

   
    <div class="form-group">
        {!! Form::label('felipes', 'Felipes:' ) !!}
        {!! Form::text('felipes', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Felipes.']) !!}
    
    
       
    </div>  
    
    <div class="form-group">
        {!! Form::label('discipulos', 'Discípulos:') !!}
        {!! Form::text('discipulos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Discípulos.']) !!}
    
       
    </div>
    
    <div class="form-group">
        {!! Form::label('ninos', 'Niños:') !!}
        {!! Form::text('ninos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Niños.']) !!}
    
       
    </div>
    
    <div class="form-group">
        {!! Form::label('ausentes', 'Ausentes:') !!}
        {!! Form::text('ausentes', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Ausentes.']) !!}
    
        
    </div>
    
    <div class="form-group">
        {!! Form::label('amigos', 'Amigos:') !!}
        {!! Form::text('amigos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Amigos.']) !!}
    
     
    </div>
    
    <div class="form-group">
        {!! Form::label('ofrenda', 'Ofrenda:') !!}
        {!! Form::text('ofrenda', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ofrenda.']) !!}
    
      
    </div>
    
    <div class="form-group">
        {!! Form::label('ofrenda_ninos', 'Ofrenda de niños:') !!}
        {!! Form::text('ofrenda_ninos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ofrenda de niños.']) !!}
    
      
    </div>
    
    <div class="form-group">
        {!! Form::label('vea', 'VEA:') !!}
        {!! Form::text('vea', null, ['class' => 'form-control', 'placeholder' => 'Asistencia al VEA.']) !!}
    
       
    </div>
    
    <div class="form-group">
        {!! Form::label('convertidos_adultos', 'Convertidos (Adultos):') !!}
        {!! Form::text('convertidos_adultos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Convertidos (Adultos).']) !!}
    
     
    </div>
    
    <div class="form-group">
        {!! Form::label('convertidos_ninos', 'Convertidos (Niños):') !!}
        {!! Form::text('convertidos_ninos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Convertidos (Niños).']) !!}
    
        
    </div>
    
    <div class="form-group">
        {!! Form::label('reconciliaciones', 'Reconciliaciones:') !!}
        {!! Form::text('reconciliaciones', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Reconciliaciones.']) !!}
    
        
    </div>
    
    <div class="form-group">
        {!! Form::label('liderazgo', 'Liderazgo:') !!}
        {!! Form::text('liderazgo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas en Clases de Liderazgo.']) !!}
    
      
    </div>
    
    
    
    <h4 class=" text-gray-500">Asistencia del día domingo</h4>
    
    <div class="form-group">
        {!! Form::label('domingo_hermanos', 'Hermanos:') !!}
        {!! Form::text('domingo_hermanos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Hermanos que asistieron el día domingo.']) !!}
    
        
    </div>
    
    <div class="form-group">
        {!! Form::label('domingo_amigos', 'Amigos:') !!}
        {!! Form::text('domingo_amigos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Amigos que asistieron el día domingo.']) !!}
    
      
    </div>
    
    <div class="form-group">
        {!! Form::label('domingo_ninos', 'Niños:') !!}
        {!! Form::text('domingo_ninos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Niños que asistieron el día domingo.']) !!}
    
        
    </div>
    
    
    
    <h4 class=" text-gray-500">Misión Amigo</h4>
    
    <div class="form-group">
        {!! Form::label('mision_amigo', 'Misión Amigo:') !!}
        {!! Form::text('mision_amigo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas incluidas en la Misión Amigo.']) !!}
    
      
    </div>
    
    <div class="form-group">
        {!! Form::label('consolidacion', 'Consolidación:') !!}
        {!! Form::text('consolidacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas que reciben la Consolidación.']) !!}
    
      
    </div>
    
    <div class="form-group">
        {!! Form::label('discipulado_uno', 'Discipulado 1:') !!}
        {!! Form::text('discipulado_uno', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas que asisten al Discipulado 1.']) !!}
    
        
    </div>
    
    <div class="form-group">
        {!! Form::label('discipulado_dos', 'Discipulado 2:') !!}
        {!! Form::text('discipulado_dos', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas que asisten al Discipulado 2.']) !!}
    
     
    </div>
    
    <div class="form-group">
        {!! Form::label('liderazgo', 'Liderazgo:') !!}
        {!! Form::text('liderazgo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas en Clases de Liderazgo.']) !!}
    
    </div>
</table>
</body>
</html>
        
        
        
        
        
        {{-- <h4 class=" text-gray-500">Información Adicional.</h4> --}}
        
        {{-- <div class="form-group">
            {!! Form::label('Observaciones', 'Observaciones:') !!}
            {!! Form::text('Observaciones', null, ['class' => 'form-control', 'placeholder' => 'Observaciones.']) !!}
        
            @error('Observaciones')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div> --}}
        