<div class="card">



    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
    </div>

    @if ($groups->count())
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2" class="text-center">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($groups as $group)
                        <tr>
                            <td>{{$group->id}}</td>
                            <td>{{$group->name}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.groups.edit', $group)}}">Editar</a>
                            </td>
                            <td width="10px">   
                                <form action="{{route('admin.groups.destroy',$group)}}" method="POST">
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
            {{$groups->links()}}
        </div>
    @else 
        <strong class="card-body text-center">No hay ningún registro</strong>
    @endif
</div>
