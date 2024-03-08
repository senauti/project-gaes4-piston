@extends('adminlte::page')



@section('title', 'Dashboard')

@section('content_header')
    <h1>Ventas </h1>

@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aqui podras registrar cada una de las ventas realizadas del taller:') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ventas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar Venta') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped nowrap"style="width: 100%">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>

										<th>Nombre Empleado </th>
										<th>Apellido Empleado </th>
										<th>Especialidad </th>
										<th>Nombre Cliente </th>
										<th>Apellido Cliente </th>
										<th>Vehiculo Marca </th>
										<th>Vehiculo Modelo </th>
										<th>Vehiculo Matricula </th>
										<th>Vehiculo Color </th>
										<th>Nombre Servicio </th>
										<th>Precio Servicio </th>
										<th>Nombre Producto </th>
										<th>Cantidad Producto </th>
										<th>Precio Producto </th>
										<th>Total Comision </th>
										<th>Fecha Venta</th>
										<th>Total Venta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $venta->Mecanico->nombre }}</td>
											<td>{{ $venta->Mecanico->apellido }}</td>
											<td>{{ $venta->Mecanico->especialidad}}</td>

											<td>{{ $venta->Cliente->nombre_cliente }}</td>
											<td>{{ $venta->Cliente->apellido_cliente }}</td>

											<td>{{ $venta->Vehiculo->vehiculo_marca }}</td>
											<td>{{ $venta->Vehiculo->vehiculo_modelo }}</td>
											<td>{{ $venta->Vehiculo->Vehiculo_matricula }}</td>
											<td>{{ $venta->Vehiculo->Vehiculo_color  }}</td>

											<td>{{ $venta->Servicio->nombre_servicio }}</td>
											<td>{{ $venta->Servicio->precio_servicio }}</td>

											<td>{{ $venta->Producto->nombre_producto }}</td>
											<td>{{ $venta->Producto->cantidad_productos}}</td>
											<td>{{ $venta->Producto->precio_producto }}</td>

											<td>{{ $venta->Tarea->total_comision }}</td>
											<td>{{ $venta->fecha_venta }}</td>
											<td>{{ $venta->total_venta }}</td>

                                            <td>
                                                <form action="{{ route('ventas.destroy',$venta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ventas.show',$venta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ventas.edit',$venta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Desactivar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ventas->links() !!}
            </div>
        </div>
    </div>
@endsection




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css"
    rel="stylesheet"
  />

@stop


@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>

    <script>
        new DataTable('#example', {
        responsive: true,

        "language": {
            "lengthMenu": "Mostrar _MENU_ filas por página",
            "zeroRecords": "Datos no encontrados - sorry",
            "info": "Mostrandro la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros dispobles",
            "infoFiltered": "(Filtrado de _MAX_ filas en totals)",
            "search": 'Buscar:',
            "paginate": {
            "first":"Primero",
            "previous":"Anterior",
            "next":"Siguiente",
            "last":"Último"}
        }

        })
    </script>




<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


@stop























