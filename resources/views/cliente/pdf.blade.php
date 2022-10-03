<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientePDF</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" >

</head>
<body>
    <h2><center>- Empresa servicios NET -</center></h2>
    <h2>Reporte de clientes</h2>
    
    

    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
										<th>NOMBRE</th>
										<th>CI</th>
                                        <th>DIRECCION</th>
                                        <th>TELEFONO</th>
  
                                    </tr>
                                </thead>
                                <tbody>

                                {{ $i = 0 }}

                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cliente->nombre }}</td>
											<td>{{ $cliente->ci }}</td>
                                            <td>{{ $cliente->direccion }}</td>
                                            <td>{{ $cliente->telefono }}</td>

                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

</body>
</html>  