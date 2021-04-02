<div>
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
    </div>

    @if ($reports->count())
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Grupo Bíblico</th>
                        <th colspan="3" class="text-center">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($reports as $report)
                        <tr>
                            
                            <td>{{$report->id}}</td>
                            <td>{{$report->fecha}}</td>
                            <td>{{$report->group->name}}</td>
                            <td width="10px">
                                <a class="btn btn-success btn-sm" href="{{route('admin.reports.show', $report)}}">Ver</a>
                            </td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.reports.edit', $report)}}">Editar</a>
                            </td>
                            <td width="10px">   
                                <form action="{{route('admin.reports.destroy',$report)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm"> Eliminar</button>
                                </form>           
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td> <a href="{{route('admin.reports.make-report')}}" class="btn btn-success btn-sm">Generar reporte semanal</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$reports->links()}}
        </div>
    @else 
        <strong class="card-body text-center">No hay ningún registro</strong>
    @endif
</div>
