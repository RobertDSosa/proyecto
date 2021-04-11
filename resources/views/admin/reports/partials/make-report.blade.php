 {{-- <div class="form-group">
            {!! Form::label('group_id', 'Grupo Bíblico:') !!}
            {!! Form::select('group_id', $groups, null, ['class' => 'form-control ']) !!}
            @error('group_id')
               <small class="text-danger">{{$message}}</small>
            @enderror
        </div> --}}
        
        {{-- <div class="form-group">
            {!! Form::label('fecha', 'Fecha:') !!}
            {!! Form::date('fecha', null, ['class' => 'form-control ']) !!}
            @error('fecha')
               <small class="text-danger">{{$message}}</small>
            @enderror
        </div> --}}
        
        
        {{-- <div class="form-group">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Grupo Bíblico', 'readonly']) !!}
        
            @error('slug')
               <small class="text-danger">{{$message}}</small>
            @enderror
        </div> --}}
        <h1>Reporte de grupos bíblicos</h1>

        <div class="form-group">
            {!! Form::label('felipes', 'Felipes:' ) !!}
            {!! Form::text('felipes', $felipes, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Felipes.', 'readonly']) !!}
        
        
            @error('felipes')
                  <small class="text-danger">{{$message}}</small>
            @enderror
        </div>  
        
        <div class="form-group">
            {!! Form::label('discipulos', 'Discípulos:') !!}
            {!! Form::text('discipulos', $discipulos, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Discípulos.', 'readonly']) !!}
        
            @error('discipulos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('ninos', 'Niños:') !!}
            {!! Form::text('ninos', $ninos, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Niños.', 'readonly']) !!}
        
            @error('ninos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('ausentes', 'Ausentes:') !!}
            {!! Form::text('ausentes', $ausentes, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Ausentes.', 'readonly']) !!}
        
            @error('ausentes')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('amigos', 'Amigos:') !!}
            {!! Form::text('amigos', $amigos, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Amigos.', 'readonly']) !!}
        
            @error('amigos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('ofrenda', 'Ofrenda:') !!}
            {!! Form::text('ofrenda', $ofrenda, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ofrenda.', 'readonly']) !!}
        
            @error('ofrenda')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('ofrenda_ninos', 'Ofrenda de niños:') !!}
            {!! Form::text('ofrenda_ninos', $ofrenda_ninos, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ofrenda de niños.', 'readonly']) !!}
        
            @error('ofrenda_ninos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('vea', 'VEA:') !!}
            {!! Form::text('vea', $vea, ['class' => 'form-control', 'placeholder' => 'Asistencia al VEA.', 'readonly']) !!}
        
            @error('vea')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('convertidos_adultos', 'Convertidos (Adultos):') !!}
            {!! Form::text('convertidos_adultos', $convertidos_adultos, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Convertidos (Adultos).', 'readonly']) !!}
        
            @error('convertidos_adultos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('convertidos_ninos', 'Convertidos (Niños):') !!}
            {!! Form::text('convertidos_ninos', $convertidos_ninos, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Convertidos (Niños).', 'readonly']) !!}
        
            @error('convertidos_ninos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('reconciliaciones', 'Reconciliaciones:') !!}
            {!! Form::text('reconciliaciones', $reconciliaciones, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Reconciliaciones.', 'readonly']) !!}
        
            @error('reconciliaciones')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('liderazgo', 'Liderazgo:') !!}
            {!! Form::text('liderazgo', $liderazgo, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas en Clases de Liderazgo.', 'readonly']) !!}
        
            @error('liderazgo')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        
        
        <h4 class=" text-gray-500">Asistencia del día domingo</h4>
        
        <div class="form-group">
            {!! Form::label('domingo_hermanos', 'Hermanos:') !!}
            {!! Form::text('domingo_hermanos', $domingo_hermanos, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Hermanos que asistieron el día domingo.', 'readonly']) !!}
        
            @error('domingo_hermanos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('domingo_amigos', 'Amigos:') !!}
            {!! Form::text('domingo_amigos', $domingo_amigos, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Amigos que asistieron el día domingo.', 'readonly']) !!}
        
            @error('domingo_amigos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('domingo_ninos', 'Niños:') !!}
            {!! Form::text('domingo_ninos', $domingo_ninos, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Niños que asistieron el día domingo.', 'readonly']) !!}
        
            @error('domingo_ninos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        
        
        <h4 class=" text-gray-500">Misión Amigo</h4>
        
        <div class="form-group">
            {!! Form::label('mision_amigo', 'Misión Amigo:') !!}
            {!! Form::text('mision_amigo', $mision_amigo, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas incluidas en la Misión Amigo.', 'readonly']) !!}
        
            @error('mision_amigo')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('consolidacion', 'Consolidación:') !!}
            {!! Form::text('consolidacion', $consolidacion, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas que reciben la Consolidación.', 'readonly']) !!}
        
            @error('consolidacion')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('discipulado_uno', 'Discipulado 1:') !!}
            {!! Form::text('discipulado_uno', $discipulado_uno, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas que asisten al Discipulado 1.', 'readonly']) !!}
        
            @error('discipulado_uno')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('discipulado_dos', 'Discipulado 2:') !!}
            {!! Form::text('discipulado_dos', $discipulado_dos, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas que asisten al Discipulado 2.', 'readonly']) !!}
        
            @error('discipulado_dos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('liderazgo', 'Liderazgo:') !!}
            {!! Form::text('liderazgo', $liderazgo, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas en Clases de Liderazgo.', 'readonly']) !!}
        
            @error('liderazgo')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        
        {{-- <h4 class=" text-gray-500">Información Adicional.</h4> --}}
        
        {{-- <div class="form-group">
            {!! Form::label('Observaciones', 'Observaciones:') !!}
            {!! Form::text('Observaciones', null, ['class' => 'form-control', 'placeholder' => 'Observaciones.']) !!}
        
            @error('Observaciones')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div> --}}
        