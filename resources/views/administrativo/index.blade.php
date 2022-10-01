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
                              
                              <h2>LISTA  DE  ADMINISTRATIVOS</h2>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('administrativos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registar Administrativo') }}
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
                                    @foreach ($administrativos as $administrativo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $administrativo->nombre }}</td>
											<td>{{ $administrativo->ci }}</td>
											<td>{{ $administrativo->sexo }}</td>
											<td>{{ $administrativo->fnacimiento }}</td>
											<td>{{ $administrativo->direccion }}</td>
											<td>{{ $administrativo->telefono }}</td>

                                            <td>
                                                <form action="{{ route('administrativos.destroy',$administrativo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('administrativos.show',$administrativo->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('administrativos.edit',$administrativo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $administrativos->links() !!}
            </div>
        </div>
    </div>
@endsection
