<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reportes Ventas PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        th, td {
            border: 0.1px solid grey;
            padding: 0px;
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            text-align: center; /* Alineación horizontal */
            vertical-align: middle; /* Alineación vertical */
        }

        th {
            background-color: black;
            color: yellow;
        }

        td {
            background-color: white;
        }

        .logo-cell {
            background-color: white; /* Ajusta el color de fondo según tus necesidades */
            text-align: center;
            vertical-align: middle;
        }

        .logo-cell img {
            max-width: 100%; /* Ajusta el tamaño máximo de la imagen según tus necesidades */
            max-height: 100%;
        }
        .titulo {
            margin-top: -3rem;
            text-align: center;
            font-size: 50px;
            font-family: 'Arial', sans-serif;
            }
        h3{
            font-family: 'Arial', sans-serif;
        }

    </style>
</head>

<body>
    
    

<h1 class='titulo'>REPORTE PDF DE PRODUCTOS</h1> 
<h3> Servicentro La 22</h3>
    <div>
    
        <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>

										<th>Nombre Producto</th>
										<th>Cantidad Productos</th>
										<th>Precio Producto</th>

                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                           <td>{{ $producto->id }}</td>

											<td>{{ $producto->nombre_producto }}</td>
											<td>{{ $producto->cantidad_productos }}</td>
											<td>{{ $producto->precio_producto }}</td>

                                          
                                    @endforeach
                                </tbody>
                            </table>









    </div>
    

</html>
