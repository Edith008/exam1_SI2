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
                            <h3>MOSTRAR DETALLE DE ROUTER</h3>
                        </div>

                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('routers.index') }}"> volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $router->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $router->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $router->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
