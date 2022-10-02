@extends('adminlte::page')

@section('title', 'Servicios de Internet')


@section('template_title')
    {{ $contratoCliente->name ?? 'Show Contrato Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle Contrato Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contrato-clientes.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Administrativo:</strong>
                            {{ $contratoCliente->administrativo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $contratoCliente->cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $contratoCliente->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $contratoCliente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad Id:</strong>
                            {{ $contratoCliente->ciudad->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Plan Id:</strong>
                            {{ $contratoCliente->plan->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Router Id:</strong>
                            {{ $contratoCliente->router->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $contratoCliente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $contratoCliente->latitud }}
                        </div>
                        <div class="form-group">
                            <strong>Longitud:</strong>
                            {{ $contratoCliente->longitud }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
