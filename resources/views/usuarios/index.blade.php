@extends('dashboard.master')

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')

    <h2 style="margin-left:3%">Usuarios</h2>
    @if (session('mensaje'))
        <p class="alert-success"> {{session("mensaje")}}</p>
    @endif
    <div class="botones">
    <a class="btn btn-success" style="margin-left:5%; margin-top:1%;" href="{{('usuarios/create')}}">Nuevo Usuario</a>
    </div>
    <div class="tabla" style="max-width:90%; margin-left:5%; margin-top:3%; margin-bottom:4%;">
    <table id="tconsulta" class="table table-striped" style="width:100%;">
        <thead style="background-color:#1B61D5; color:white; text-align:center;">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Correo</th>
                <th>Cargo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->Nombres}}</td>
                <td>{{$usuario->Apellidos}}</td>
                <td>{{$usuario->NumDoc}}</td>
                <td>{{$usuario->Correo}}</td>
                <td>{{$usuario->Cargo}}</td>
                <td>{{$usuario->Estado}}</td>
                <td>
                    <a class="btn btn-warning" href="{{url('usuarios/'.$usuario->IdUsuario.'/edit')}}" title="Editar" style="width:40px; float:left; margin-right:2px;"><i class="fas fa-edit" style="color:black;"></i></a>
                    <form action="{{url('/usuarios/'.$usuario->IdUsuario)}}" method="POST" style="float:left; margin-bottom:0; margin-right:2px;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Eliminar" style="width:40px;" class="btn btn-danger" onclick="return confirm('¿Desea borrar el registro?')">
                            <i class="fas fa-trash-alt" style="color:black;"></i></button>
                    </form>
                    <a class="btn btn-secondary" href="{{url('usuarios/'.$usuario->IdUsuario)}}" style="width:40px; float:left;" title="Detalles"><i class="fas fa-info-circle" style="color:black; margin-left:-1px;"></i></a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
    $('#tconsulta').DataTable({
        "language": {
            "url":"https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json"
        },
        "scrollY":200,
        "scrollX": true,
    });
} );
</script>
@endsection

@endsection
