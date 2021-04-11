<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post']) !!}

    @error('name')
       <small class="text-danger">{{$message}}</small>
    @enderror
</div>



<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Post', 'readonly']) !!}

    @error('slug')
       <small class="text-danger">{{$message}}</small>
    @enderror
</div>



<div class="form-group">
    {!! Form::label('category_id', 'Categoría' ) !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control col-4']) !!}

    @error('category_id')
          <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>

    @endforeach

    
    @error('tags')
    <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label >
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label >
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    @error('status')
    <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->image)
                <img  id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
                <img id="picture" src="{{Storage::url('Default.jpg')}}" alt="">
            @endif
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del Post') !!}
            {!! Form::file('file', ['class' =>'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!} 
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <p>Si lo deseas, puedes agregar un video local aquí.</p> <br>
        <div class="image-wrapper">
            @isset($post->video)
                <video id="Video" src="{{Storage::url($post->video->url)}}" width="320" height="240" controls>
                    <source src="{{Storage::url($post->video->url)}}">
                </video>
            @else
                <img id="Video" src="{{Storage::url('Default.jpg')}}" alt="">
            @endif
        </div>
        
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('video', 'Video del Post') !!}
            {!! Form::file('video', ['class' =>'form-control-file', 'accept' => 'video/*']) !!}
            @error('video')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class=" row form-group">
            {!! Form::label('video_name', 'Título del video:') !!}
            {!! Form::text('video_name', null, ['class' => 'form-control', 'placeholder' => 'Título del video']) !!}
        
            @error('video_name')
               <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

    </div>
</div>

<br>

<div class="row mb-3">
    
    <div class="col">
        <h5>Si deseas agregar un Link de Youtube</h5> <br>
        {!! Form::label('youtube_link', 'Link de Youtube:') !!}
        {!! Form::text('youtube_link', null, ['class' => 'form-control', 'placeholder' => 'Enlace de Youtube']) !!}
    </div>
    
</div> 
<br>
<div class="row mb-3">
    <div class="col">
        <p>Desde aquí puedes agregar un audio al Post.</p>
        <div class="">
            @isset($post->audio)
                <audio id="Audio" src="{{Storage::url($post->audio->url)}}"controls mediagroup="Audio">
                    <source src="{{Storage::url($post->audio->url)}}">
                </audio>
            @else
                <audio id="audio" controls>
            @endif
        </div>
        <div class=" row form-group">
            {!! Form::label('audio_name', 'Nombre del audio:') !!}
            {!! Form::text('audio_name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Audio']) !!}
        
            @error('audio_name')
               <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('audio', 'Audio del Post') !!}
            {!! Form::file('audio', ['class' =>'form-control-file', 'accept' => 'audio/*']) !!}
            @error('audio')
                <span class="text-danger">{{$message}}</span>
            @enderror
            
        </div>
        
    </div>

    
</div>