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
                                <h3>LISTA DE TECNICOS</h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tecnicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registar Tecnico') }}
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
                                        
										<th>Nombre</th>
										<th>Ci</th>
										<th>Sexo</th>
										<th>Fnacimiento</th>
										<th>Direccion</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tecnicos as $tecnico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tecnico->nombre }}</td>
											<td>{{ $tecnico->ci }}</td>
											<td>{{ $tecnico->sexo }}</td>
											<td>{{ $tecnico->fnacimiento }}</td>
											<td>{{ $tecnico->direccion }}</td>
											<td>{{ $tecnico->telefono }}</td>

                                            <td>
                                                <form action="{{ route('tecnicos.destroy',$tecnico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tecnicos.show',$tecnico->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tecnicos.edit',$tecnico->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="Guardar" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tecnicos->links() !!}
            </div>
        </div>
    </div>
@endsection
