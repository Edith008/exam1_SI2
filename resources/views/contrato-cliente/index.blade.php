@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contrato Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contrato-clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo contrato') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <!-- 
										<th>Administrativo Id</th>
                                        -->
                                        <th>Registrado Por</th>
										<th>Cliente </th>
										<th>Ciudad </th>
										<th>Plan </th>
										<th>Router </th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contratoClientes as $contratoCliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                             
											<td>{{ $contratoCliente->administrativo->nombre }}</td>
											<td>{{ $contratoCliente->cliente->nombre }}</td>
                                            <!-- 
											<td>{{ $contratoCliente->ci }}</td>
											<td>{{ $contratoCliente->telefono }}</td>
                                             -->
											<td>{{ $contratoCliente->ciudad->nombre }}</td>
											<td>{{ $contratoCliente->plan->nombre}}</td>
											<td>{{ $contratoCliente->router->marca }}</td>
											<td>{{ $contratoCliente->direccion }}</td>

                                            <td>
                                                <form action="{{ route('contrato-clientes.destroy',$contratoCliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contrato-clientes.show',$contratoCliente->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contrato-clientes.edit',$contratoCliente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $contratoClientes->links() !!}
            </div>
        </div>
    </div>
@endsection
