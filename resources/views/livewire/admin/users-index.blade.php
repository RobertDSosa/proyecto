<div class="img-fluid h-100 w-100" style="min-height:550px; background-image: url({{Storage::url('fondo3.jpg')}}); background-size:cover; background-repeat:repeat-y;">

<div>
    <div class="card w-50 mx-auto" >

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>

        @if($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td width="10px">
                                    <a href="{{route('admin.users.edit', $user)}}" class=" btn  btn-primary">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{$users->links()}}
            </div>
        @else
            <div class="card-body text-center">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
</div>