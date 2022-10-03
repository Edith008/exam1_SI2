@extends('adminlte::page')

@section('template_title')
    Solicitud Servicio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Solicitud Servicio') }}
                            </span>

                             <div class="float-right">

                                <a href="{{ route('solicitud-servicios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Cliente Id</th>
										<th>Tiposervicio Id</th>
										<th>Descripcion</th>
										<th>Fecha</th>
										<th>Hora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitudServicios as $solicitudServicio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $solicitudServicio->cliente->nombre}}</td>
											<td>{{ $solicitudServicio->tipoServicio->nombre}}</td>
											<td>{{ $solicitudServicio->descripcion }}</td>
											<td>{{ $solicitudServicio->fecha }}</td>
											<td>{{ $solicitudServicio->hora }}</td>

                                            <td>
                                                <form action="{{ route('solicitud-servicios.destroy',$solicitudServicio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('solicitud-servicios.show',$solicitudServicio->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('solicitud-servicios.edit',$solicitudServicio->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $solicitudServicios->links() !!}
            </div>
        </div>
    </div>
@endsection
