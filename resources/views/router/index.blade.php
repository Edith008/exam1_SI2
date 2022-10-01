@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1> </h1>
@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                              
                                <h1>LISTA DE ROUTER</h1>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('routers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Router') }}
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
                                        
										<th>Codigo</th>
										<th>Marca</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($routers as $router)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $router->codigo }}</td>
											<td>{{ $router->marca }}</td>
											<td>{{ $router->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('routers.destroy',$router->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('routers.show',$router->id) }}"><i class="fa fa-fw fa-eye"></i> ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('routers.edit',$router->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $routers->links() !!}
            </div>
        </div>
    </div>
@endsection
