@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1>Lista de Roles</h1>
@stop

@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">


                             <div class="float-right">
                                <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm " data-placement="left">
                                  {{ __('Crear Rol') }}
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
                                        <th>N°</th>
                                        
										<th>NOMBRE</th>
										<th>DESCRIPCIÓN</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rols as $rol)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $rol->nombre }}</td>
											<td>{{ $rol->descripcion }}</td>

                                            <td>
                                            <!-- 
                                            Esto es un comentario
                                             -->
                                                <form action="{{ route('roles.destroy',$rol->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('roles.show',$rol->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('roles.edit',$rol->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $rols->links() !!}
            </div>
        </div>
    </div> 

@stop







@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop