@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1></h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h3>DETALLE DEL ADMINISTRATIVO</h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('administrativos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $administrativo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $administrativo->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $administrativo->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Fnacimiento:</strong>
                            {{ $administrativo->fnacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $administrativo->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $administrativo->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
