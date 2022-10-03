@extends('adminlte::page')

@section('template_title')
    {{ $solicitudServicio->name ?? 'Show Solicitud Servicio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Solicitud Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitud-servicios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $solicitudServicio->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tiposervicio Id:</strong>
                            {{ $solicitudServicio->tipoServicio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $solicitudServicio->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $solicitudServicio->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $solicitudServicio->hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
