<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,200,1,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,1,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,500,1,200" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Ventas</title>
  <link rel="stylesheet" href="{{asset('css/Ventas.css') }}">
  <link rel="stylesheet" href="{{asset('css/ventas2.css') }}">
</head>
<body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="{{ asset('Imagenes/Please.png') }}" alt="">
          <h2><span class="danger">PIS</span>TON</h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-icons-sharp">close</span>
        </div>
      </div>
      <div class="sidebar">
        <a href="{{ url('/dashboard') }}" class="active">
          <span class="material-symbols-rounded">dashboard</span>
          <h3>Dashboard</h3>
        </a>
        <a href="{{ url('/clientes') }}">
          <span class="material-icons-sharp">people</span>
          <h3>Clientes</h3>
        </a>
        <a href="{{ url('/productosyservicios') }}">
          <span class="material-icons-sharp">inventory</span>
          <h3>Productos y Servicios</h3>
          <span class="message-count">0</span>
        </a>
        <a href="{{ url('/mecanicos') }}">
          <span class="material-symbols-rounded">plumbing</span>
          <h3>Mecanicos</h3>
        </a>
        <a href="{{ url('/ventas') }}">
          <span class="material-symbols-outlined">add_task</span>
          <h3>Ventas</h3>
        </a>
        <a href="{{ url('/historialeinformes') }}">
          <span class="material-symbols-rounded">history </span>
          <h3>Historial de ventas e informes</h3>
        </a>
        <a href="{{ url('/error500') }}">
          <span class="material-symbols-rounded">add </span>
          <h3>Añadir Módulos</h3>
        </a>
        <a href="#">
          <span class="material-icons-sharp">logout</span>
          <h3>Salir</h3>
        </a>
      </div>
    </aside>
    <main>
        
<h1>INSERTAR PRODUCTO</h1>
<br>

        @if(Session::has('Mensaje'))
        <div class="alert alert-success">
          <strong>
        {{ Session::get('Mensaje')}}</strong> 
        </div>
        @endif

    

        <a href="{{ url('/productosservicios/create') }}" class="btn btn-warning">REGISTRAR NUEVO PRODUCTO</a>

        <a href="{{ url('productosservicios/pdf') }}" target="_blank">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#create">
            PDF
        </button></a>
        &nbsp;

       
        <br>
        <br>

        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#INGRESADO</th>
                    <th>NOMBRE DEL PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>DESCRIPCION</th>
                    <th>CATEGORIA DEL PRODUCTO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productosservicios as $productosservicio)
                    <tr>
                        <td>{{ $productosservicio->id }}</td>
                        <td>{{ $productosservicio->NOMBRE_PRODUCTO }}</td>
                        <td>{{ $productosservicio->CANTIDAD_PRODUCTO }}</td>
                        <td>{{ $productosservicio->DESCRIPCION }}</td>
                        <td>{{ $productosservicio->ID_CATEGORIA_DE_PRODUCTOS }}</td>
                        <td>
                            <a href="{{ url('productosservicios/'.$productosservicio->id.'/edit') }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('productosservicios.destroy', $productosservicio->id) }}" class="d-inline" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Estás seguro?')" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $productosservicios->links() !!}
    </div>
</main>




