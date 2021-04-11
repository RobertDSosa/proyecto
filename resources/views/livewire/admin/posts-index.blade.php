<div class="img-fluid h-100 w-100" style="min-height:550px; background-image: url({{Storage::url('fondo3.jpg')}}); background-size:cover; background-repeat:repeat-y;">

<div class="card w-50 mx-auto">



    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
    </div>

    @if ($posts->count())
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th colspan="2" class="text-center">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->name}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                            </td>
                            <td width="10px">   
                                <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm"> Eliminar</button>
                                </form>           
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$posts->links()}}
        </div>
    @else 
        <strong class="card-body text-center">No hay ningún registro</strong>
    @endif
</div>
</div>